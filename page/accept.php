<?php session_start();
include_once('connexion.php');

$numid=$_GET['add'];

$res = mysqli_query($cnx, "UPDATE users SET valider=1 WHERE id='$numid'");
echo $res;
 header('location:repertory.php');
 ?>
