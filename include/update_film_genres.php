<?php

include('connect_db.php');

// $sql = 'SELECT * FROM genres';
// $stmt = $db->prepare($sql);
// $stmt->execute();

// $donnees = $stmt->fetchAll(PDO::FETCH_ASSOC);
// var_dump($donnees);
// echo json_encode($donnees);



if( isset($_POST["action"]) && isset($_POST["id_genre"]) && isset($_POST["id_film"]) ) {

    
    
    
    // $salle_capa = trim($_POST['salle_capa']);
    // $salle_numero = trim($_POST['salle_numero']);
    
    $sql = $db->prepare ("DELETE FROM is_genre WHERE id_genre = ".$_POST["id_genre"]." AND id_film = ".$_POST["id_film"]);
    $sql->execute();
    


        // $sql = $dbh->prepare ("UPDATE salle 
        //                         SET numero_salle=:numero_salle, capacite_salle=:capacite_salle
        //                         WHERE id_salle=".$_POST["id"]);

        //                 $sql->execute(array(
        //                     'numero_salle' => $salle_numero,
        //                     'capacite_salle' => $salle_capa
        //                 ));
        //                 $sql-> closeCursor();

        if($_POST["action"]=="add") {
            $sql = $db->prepare ("INSERT INTO is_genre (id_genre,id_film) VALUES (:id_genre,:id_film)");
    
            $sql->execute(array(
                    'id_genre' => $_POST["id_genre"],
                    'id_film' => $_POST["id_film"]
            ));
        }                        

        // $sql = $dbh->prepare ("UPDATE salle 
        //                         SET numero_salle=:numero_salle, capacite_salle=:capacite_salle
        //                         WHERE id_salle=".$_POST["id"]);

        //                 $sql->execute(array(
        //                     'numero_salle' => $salle_numero,
        //                     'capacite_salle' => $salle_capa
        //                 ));
        //                 $sql-> closeCursor();
        // foreach($_POST['equip_checkbox'] as $selected){
        //     $sql = $dbh->prepare ("INSERT INTO avoir (id_salle,id_equipement) VALUES (:id_salle,:id_equipement)");

        //     $sql->execute(array(
        //             'id_salle' => $_POST["id"],
        //             'id_equipement' => $selected
        //     ));
        // }
    }







?>