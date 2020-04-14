<?php

include('connect_db.php');

$id_film = !empty($_POST['id_film']) ? $_POST['id_film'] : NULL;
$id_genre = !empty($_POST['user_password']) ? $_POST['user_password'] : NULL;

$stmt = $db->prepare('SELECT * FROM is_genre WHERE id_film=:id_film AND id_genre=:id_genre');
$stmt->execute(array(
    'id_genre' => $id_genre,
    'id_film' => $id_film
));

// Méthode sans fetch !!!
$count = $stmt->rowCount(); // Compter les rows retournés.

// echo json_encode($count);
if($count>0) {
    echo json_encode("true");
} else {
    echo json_encode("false");
}

// echo "rowCount : $count\n<br>";
// if($count>0) {
//     $results = $stmt->fetch(PDO::FETCH_OBJ);
//     echo 'Login SUCCESS';
//     session_start();
//     $_SESSION['id_user'] = $results->id_user;
//     $_SESSION['user_pseudo'] = $results->user_pseudo;
//     $_SESSION['user_firstname'] = $results->user_firstname;
//     $_SESSION['user_lastname'] = $results->user_lastname;
//     echo "Session : user_pseudo : ".$_SESSION['user_pseudo'];
//     echo "\n<br>Session : is_user : ".$_SESSION['id_user'];
//     echo "\n\n<br><br>";
//     header('location:../index.php');
// }else{
//     echo 'Login FAIL';
// }

?>