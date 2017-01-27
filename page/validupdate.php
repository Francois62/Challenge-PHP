<?php
session_start();
include_once('connexion.php');

$res = mysqli_query($cnx,"SELECT * FROM users ");
$data = mysqli_fetch_assoc($res);

$numid=$_POST['id'];
if(isset($_POST['id'])){
$numid = $_POST['id'];// header('location:admin.php');
}
else{
$numid = "";
}

$newupseudo=isset($_POST['pseudo'])? $_POST['pseudo'] : "";
$newuname=isset($_POST['username'])? $_POST['username'] : "";
$newumail= isset($_POST['mail'])? $_POST['mail'] : "";
$newugame= isset($_POST['game'])? $_POST['game'] : "";
$newudate= isset($_POST['age'])? $_POST['age'] : "";

$verifupseudo="#[^0-9]#";
$verifuprenom="#[A-Za-z]#";
$verifudate="#[0-9]{2}/[0-9]{2}/[0-9]{4}#";
$ufile = $_FILES['img']['name'];
// if($verifpseudo==$newpseudo && $verifprenom==$newpseudo && $verifdate==$newdate){
if ($_FILES['img']['type']=='jpg' || $_FILES['img']['type']=='jpeg' || $_FILES['img']['type']=='gif'){
  # code... //$_FILES = Méthode pour récupérer les fichiers
$res2=move_uploaded_file($_FILES['img']['tmp_name'], $_SERVER['DOCUMENT_ROOT']. "/challenge1/img/" . $_FILES['img']['name']);//
}
if(preg_match($verifupseudo,$newupseudo)){
      $newupseudo=$newupseudo;
}
else{
  $newupseudo="";
}
if(preg_match($verifuprenom,$newuname)){
   $newuname=$newuname;
}

else{
  $newuname="";
}
if(preg_match($verifudate,$newudate)){
  $newudate=$newudate;
}
else{
      $newudate="";
}
$res = mysqli_query($cnx,"UPDATE users SET pseudo='$newupseudo', username='$newuname', mail='$newumail', img='$ufile', jeux='$newugame', age='$newudate' WHERE id='$numid' ");
echo (int)$res;
?>
