<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="asset/css/style.css">
    
    <!-- Fontawesome -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/fontawesome-free/css/brands.css" rel="stylesheet" type="text/css">

    <title>AlloSimplon - VOD</title>

    <!-- Slick -->
    <!-- <link rel="stylesheet" type="text/css" href="vendorslick/slick.css"/> -->
    <!-- Add the new slick-theme.css if you want the default styling -->
    <!-- <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/> -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

    <!-- Revolution Slider -->
    <?php //include('include/topslider_headincludes.php'); ?>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
</head>

    
<body>

<?php include("include/connect_db.php"); ?>
    
    
<?php include('include/nav.php'); ?>

<?php 

function ellipsis($string, $limit, $repl) 
{
  if(strlen($string) > $limit) 
  {
    return substr($string, 0, $limit) . $repl; 
  }
  else 
  {
    return $string;
  }
}

?>


    

<?php
$action = "userpanel.php";
$editing = false;

if(isset($_GET["edit_film"]) && !empty($_GET["id"]) && !isset($_POST['submit']))
{
    $editing = true;
    $action="index.php?edit_film&id=".$_GET["id"];

    include("include/user_film_edit.php");

}else{
  include("include/user_film_list.php");
}

?>









    
    <?php include('include/footer.php'); ?>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script> -->

    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Slick -->
    <!-- <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script> -->
    <!-- <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script> -->
    <!-- <script type="text/javascript" src="slick/slick.min.js"></script> -->

  </body>
</html>