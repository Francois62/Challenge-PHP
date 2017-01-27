<?php
session_start();
include_once('connexion.php');
// $res = mysqli_query($cnx,"SELECT * FROM users ");
// $data = mysqli_fetch_assoc($res);
  $validelete=isset($_POST['validelete']);


$validelete=(int)$validelete;
// $validelete=isset($_POST['validelete'])? $_POST['validelete'] : "";

  if(isset($_GET['supr'])){
 $numid = $_GET['supr'];// header('location:admin.php');
}
else{
  $numid = "";
}
if($validelete==0){
  echo $validelete;
   header('location:admin.php');
}
else{
  $res = mysqli_query($cnx,"DELETE FROM users WHERE id='$numid' ");
}
  ?>
