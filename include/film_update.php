<?php

print_r($_GET);
print_r($_POST);

include('connect_db.php');

if( isset($_GET["addFilm"]) && isset($_POST['titre_film']) ) {
    echo 'blah';
    $film_title = trim($_POST['titre_film']);
    $sql = $db->prepare ("INSERT INTO film (film_title)
                            VALUES (:film_title)");

    try {
        $sql->execute(array(
            'film_title' => $film_title,
        ));
        $new_id = $db->lastInsertId();
        header('Location: /userpanel.php?edit_film&id='.$new_id);
    }
    catch (PDOException $e)
    {
        //$dbh->rollback();
        echo "Erreur : " . $e->getMessage();
    }
    $sql-> closeCursor();



} else {

    //if(isset($_GET["edit"]) && !empty($_GET["id"]) && isset($_POST['submit'])) {
    if( !empty($_GET["id"]) && isset($_POST['submit'])) {
    
        $film_title = trim($_POST['film_title']);
        $film_length = trim($_POST['film_length']);
        $film_synopsis = trim($_POST['film_synopsis']);
    
        $sql = $db->prepare ("UPDATE film 
                                SET film_title=:film_title, film_length=:film_length, film_synopsis=:film_synopsis
                                WHERE id_film=".$_GET["id"]);
    
        try {
            $sql->execute(array(
            'film_title' => $film_title,
            'film_length' => $film_length,
            'film_synopsis' => $film_synopsis
            ));
        }
        catch (PDOException $e)
        {
            //$dbh->rollback();
            echo "Erreur : " . $e->getMessage();
        }
        $sql-> closeCursor();
    
    } else {
        echo "WTF!";
    }

}



?>