<?php
$token = $_GET['token'];
echo 'Verify token :'.$token.'<br>';

require_once('classes/database.php');
require_once('classes/user.php');

$dbo = new Database('localhost', 'allosimplon', 'root', '');
$db = $dbo->getDb();
// var_dump($db);
// $db = $db_conn->PDOConnexion();

$user = new User($db);
if($user->verify_mail($token)) {
    echo 'Mail verify SUCCESS';
} else {
    echo 'Mail verify FAIL';
}

?>