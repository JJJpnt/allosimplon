<?php

class User
 
{
    private $_db;
 
    private $_id_user;
 
    private $_user_pseudo; 
    private $_user_firstname; 
    private $_user_lastname; 
    private $_user_password;
    private $_user_mail;
    private $_user_avatar;
    private $_user_level;
 
    private $error;

    /**
    * Constructeur : est appelé a l'instanciation de la classe
    *
    * @param $db : instance de la DB (PDOObject)
    * @return bool FALSE ou TRUE
    */
 
    public function __construct($db)
 
    {
        $this->_db = $db; 
        return true; 
    }

    public function getId() {
        return $this->_id_user;
    }

    public function getPseudo() {
        return $this->_user_pseudo;
    }

    public function getFirstname() {
        return $this->_user_firstname;
    }

    public function getLastname() {
        return $this->_user_lastname;
    }

    public function getMail() {
        return $this->_user_mail;
    }

    public function getAvatar() {
        return $this->_user_avatar;
    }

    public function getLevel() {
        return $this->_user_level;
    }

    private function generate_token($lenght=12){
        $alphabet = "0123456789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN";
        return substr(str_shuffle(str_repeat($alphabet, $lenght)), 0, $lenght);
    }

    public function connect($login, $pass, $session=true) {
        $stmt = $this->_db->prepare('SELECT * FROM users WHERE user_pseudo=:user_pseudo AND user_password=:user_password');
        $stmt->execute(array(
            'user_pseudo' => $login,
            'user_password' => $pass
        ));

        // Méthode sans fetch !!!
        $count = $stmt->rowCount(); // Compter les rows retournés.
        // echo "rowCount : $count\n<br>";
        if($count>0) {
            $results = $stmt->fetch(PDO::FETCH_OBJ);
            // echo 'Login SUCCESS';
            session_start();
            $_id_user = $results->id_user;
            $_user_pseudo = $results->user_pseudo;
            $_user_firstname = $results->user_firstname;
            $_user_lastname = $results->user_lastname;
            $_user_password = $results->user_password;
            $_user_mail = $results->user_mail;
            $_user_avatar = $results->user_avatar;
            $_user_level = $results->user_level;
            // echo "Session : user_pseudo : ".$_SESSION['user_pseudo'];
            if($session) {
                session_destroy();
                session_start();
                $_SESSION['id_user'] = $results->id_user;
                $_SESSION['user_pseudo'] = $results->user_pseudo;
                $_SESSION['user_firstname'] = $results->user_firstname;
                $_SESSION['user_lastname'] = $results->user_lastname;
            }
            // header('Location: ' . $_SERVER['HTTP_REFERER']);
            return true;
        }else{
            // echo 'Login FAIL';
            return false;
        }
    }

    public function create($login, $pass, $mail, $level=30) {
        $new_token = $this->generate_token();
        $stmt = $this->_db->prepare('INSERT INTO users (user_pseudo, user_password, user_mail, user_level, user_mail_token, user_status) VALUES (:user_pseudo, :user_password, :user_mail, :user_level, :user_mail_token, :user_status)');
        if(
            $stmt->execute(array(
                'user_pseudo' => $login,
                'user_password' => $pass,
                'user_mail' => $mail,
                'user_level' => $level,
                'user_mail_token' => $new_token,
                'user_status' => 0
            ))
        ) {
            // echo 'Create user SUCCESS';

            //verif token
            $myfile = fopen("token.html", "w") or die("Unable to open file!");
            fwrite($myfile, $new_token);
            fclose($myfile);


            // header('Location: ' . $_SERVER['HTTP_REFERER']);
            return true;
        }else{
            // echo 'Create user FAIL';
            return false;
        }
    }

    public function verify_mail($token) {
        $stmt = $this->_db->prepare('SELECT * FROM users WHERE user_mail_token=:token');
        // echo "rowCount : $count\n<br>";
        $results = $stmt->execute(array('token' => $token));
        $count = $stmt->rowCount(); // Compter les rows retournés.
        if($count>0) {        
            // echo 'blah';
            $stmt_val = $this->_db->prepare('UPDATE users SET user_status=:user_status WHERE user_mail_token=:token');
            if($stmt_val->execute(array(
                'token' => $token,
                'user_status' => 1
            ))) {
                // echo 'Mail verify SUCCESS';
                return true;
            } else {
                //echo 'Mail verify FAIL';
                return false;
            }
        }else{
            //echo 'Mail verify FAIL';
            return false;
        }
    }


 
 
 
 
 
 
    // /**

    // * Mise à jour des attributs récupérés dans la base de données

    // *

    // * @return bool FALSE ou TRUE

    // */
 
    // private function updateAttributes()
 
    // {
 
    //     $result=mysql_query("SELECT * FROM tUtilisateurs WHERE idClient='$idClient'");
 
    //     if (mysql_num_rows($result)) {
 
    //         $donnees=mysql_fetch_array($result);
 
    //         $this->pseudo = $donnees['pseudo'];
 
    //         $this->mdp = $donnees['mdp'];
 
    //         $this->prenom = $donnees['prenom'];
 
    //         $this->nom= $donnees['nom'];
 
    //         $this->adresse = $donnees['adresse'];
 
    //         $this->codePostal = $donnees['codePostal'];
 
    //         $this->ville = $donnees['ville'];
 
    //         $this->pays = $donnees['pays'];
 
    //         $this->age = $donnees['age'];
 
    //         $this->dateReg = $donnees['dateReg'];
 
    //         $this->level = $donnees['level'];
 
    //         $this->ip = $donnees['ip'];
 
    //         $this->dateVisite = $donnees['dateVisite'];
 
    //         return true;
 
    //     } else {
 
    //         $this->erreur = "imposible de mettre à jour les attributs : l'id n'existe pas";
 
    //         return false;
 
    //     }
 
    // }
 
 
 
 
 
 
 
    // /**

    // * Ajoute dans la base de données le nouvel utilisateur

    // *

    // * @return bool FALSE ou TRUE

    // */
 
    // public function create()
 
    // {
 
    //     //on supprime les membre non activé de plus de 24 heures
 
    //     $temps = time() - (60 * 60 * 24);
 
    //     mysql_query("DELETE FROM tUtilisateurs WHERE dateReg < '$temps' AND level='0'");
 
 
 
    //     // On enregistre le membre
 
    //     if ($this->erreur == NULL) {
 
    //         $this->dateReg = time();
 
    //        // $this-> = time();
 
    //         $this->ip = realip();
 
    //         mysql_query("INSERT INTO tUtilisateurs (pseudo, mdp, prenom,nom, adresse, codePostal,

    //                      villle, pays, age, dateReg, level, ip, dateVisite)

    //                      VALUES('$this->pseudo', '$this->mdp', '$this->prenom', 

    //                     '$this->nom' '$this->adresse', '$this->codePostal', '$this->ville', 

    //                     '$this->pays', '$this->age', '$this->dateReg', '$this->level', 

    //                     '$this->ip', '$this->dateVisite')");
 
    //         return true;
 
    //     } else {
 
    //         return false;
 
    //     }
 
    // }
}

  ?>