<?php
session_start();

include_once("connexion.php");
include_once("utils.php");


$_SESSION['username'] = isset($_POST['username'])? $_POST['username'] : "";
$_SESSION['password'] = isset($_POST['password'])? $_POST['password'] : "";

$name=mysqli_escape_string($cnx,$_SESSION['username']);
$pass=mysqli_escape_string($cnx,$_SESSION['password']);

$res = mysqli_query($cnx, "SELECT * FROM cat WHERE username='$name' AND password='$pass'");
$data = mysqli_fetch_assoc($res); //$data est un booléen

    if($name==$data['username'] && $pass==$data['password']){ //==1 revient à lui affecter true et ne pas oublier (int) car ce n'est pas une chaine de caratère
      $user='fgfd';
    }
    else{
      $user='';
    }
    if($user!=''){
      $_SESSION['log']=true;
    }
    else {
       $_SESSION['log']=false;
    }
header('location:../index.php');

 ?>
