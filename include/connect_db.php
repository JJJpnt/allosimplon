<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'allosimplon';

try {
    $db = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }

?>