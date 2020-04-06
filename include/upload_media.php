<?php
define ('SITE_ROOT', realpath(dirname(__FILE__)));
// echo sys_get_temp_dir();

// echo "id=".$_GET['id'];
// echo "<br>submit=".(isset($_POST['submit'])?"true":"false");
// echo $_FILES['userfile']['name'];
// echo "BA";
if( !empty($_GET['id']) )//&& isset($_POST['submit']) )
{

//include("connect_db.php");

$target_dir = "/wamp64/www/allosimplon/asset/img/posters/";
$imageFileType = strtolower(pathinfo(basename($_FILES["userfile"]["name"]),PATHINFO_EXTENSION));
$target_file = $target_dir.'poster_'.$_GET['id'].'.'.$imageFileType; //basename($_FILES["userfile"]["name"]);
echo $target_file;
$uploadOk = 1;
    $check = getimagesize( $_FILES['userfile']['tmp_name'] );
    if( $check !== false ) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
        echo '<pre>';
        if ( move_uploaded_file($_FILES['userfile']['tmp_name'], $target_file)) {
            echo "Le fichier est valide, et a été téléchargé avec succès. Voici plus d'informations :\n";
        } else {
            echo "Attaque potentielle par téléchargement de fichiers. Voici plus d'informations :\n";
        }

        echo 'Voici quelques informations de débogage :';
        print_r($_FILES);

        echo '</pre>';
   } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

header('Location: ' . $_SERVER['HTTP_REFERER']);

?>
