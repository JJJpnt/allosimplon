<?php

include('connect_db.php');

$sql = 'SELECT * FROM genres';
    $stmt = $db->prepare($sql);
    $stmt->execute();

    $donnees = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // var_dump($donnees);
    echo json_encode($donnees);

?>