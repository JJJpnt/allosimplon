<?php

include('connect_db.php');

//if(isset($_GET["edit"]) && !empty($_GET["id"]) && isset($_POST['submit'])) {
if( !empty($_GET["id"]) && isset($_POST['submit'])) {

    $film_titre = trim($_POST['film_title']);
    $film_length = trim($_POST['film_length']);
    $film_synopsis = trim($_POST['film_synopsis']);

    $sql = $dbh->prepare ("UPDATE film 
                            SET film_titre=:film_titre, film_length=:film_length, film_synopsis=:film_synopsis
                            WHERE id_film=".$_GET["id"]);

    try {
        $sql->execute(array(
        'film_titre' => $film_titre,
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

}

?>