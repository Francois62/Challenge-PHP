<?php
session_start();
include_once("connexion.php");
$res=mysqli_query($cnx ,"SELECT * FROM custom  WHERE id=1 ");
$data=mysqli_fetch_assoc($res);

$res1 = mysqli_query($cnx,"SELECT * FROM historycolor WHERE id=1");
$data1 = mysqli_fetch_assoc($res1);



  $res = mysqli_query($cnx, "SELECT * FROM custom WHERE id=1");


  $newtitle=isset($_POST['title'])? $_POST['title'] : "";
  $newnav=isset($_POST['navbarr'])? $_POST['navbarr'] : "";
  $newurl=isset($_POST['url'])? $_POST['url'] : "";
  $newbouton= isset($_POST['bouton'])? $_POST['bouton'] : "";
  $newpolice= isset($_POST['police'])? $_POST['police'] : "";
  $changetitle= isset($_POST['changetitle'])? $_POST['changetitle'] : "";
  $changetitle2= isset($_POST['changetitle2'])? $_POST['changetitle2'] : "";
  $changetitle3= isset($_POST['changetitle3'])? $_POST['changetitle3'] : "";
  $changesubtitle= isset($_POST['changesubtitle'])? $_POST['changesubtitle'] : "";
  $changesubtitle2= isset($_POST['changesubtitle2'])? $_POST['changesubtitle2'] : "";
  $changesubtitle3= isset($_POST['changesubtitle3'])? $_POST['changesubtitle3'] : "";

  $snow=isset($_POST['snow']);
  $snow = (int)$snow;
  $slider=isset($_POST['slider']);
  $slider = (int)$slider;
  $navfix=isset($_POST['navfix']);
  $navfix = (int)$navfix;

  $res = mysqli_query($cnx,"UPDATE custom SET snow='$snow' WHERE id=1 ");
  $res = mysqli_query($cnx,"UPDATE custom SET slider='$slider' WHERE id=1 ");
  $res = mysqli_query($cnx,"UPDATE custom SET navfix='$navfix' WHERE id=1 ");

$verifsubtitle="#[A-Za-z]{10,100}#";
if(preg_match($verifsubtitle,$changesubtitle)){
      $changesubtitle=$changesubtitle;
}
else{
  $changesubtitle="";
}
if(preg_match($verifsubtitle,$changesubtitle2)){
      $changesubtitle2=$changesubtitle2;
}
else{
  $changesubtitle2="";
}
if(preg_match($verifsubtitle,$changesubtitle3)){
      $changesubtitle3=$changesubtitle3;
}
else{
  $changesubtitle3="";
}
if($changesubtitle!="")
{
// $data = mysqli_fetch_assoc($res);
$res = mysqli_query($cnx,"UPDATE custom SET subtitle='$changesubtitle' WHERE id=1 ");
}
if($changesubtitle2!="")
{
// $data = mysqli_fetch_assoc($res);
$res = mysqli_query($cnx,"UPDATE custom SET subtitle2='$changesubtitle2' WHERE id=1 ");
}
if($changesubtitle3!="")
{
// $data = mysqli_fetch_assoc($res);
$res = mysqli_query($cnx,"UPDATE custom SET subtitle3='$changesubtitle3' WHERE id=1 ");
}
  if($changetitle!="")
  {
  // $data = mysqli_fetch_assoc($res);
  $res = mysqli_query($cnx,"UPDATE custom SET changetitle='$changetitle' WHERE id=1 ");
}
if($changetitle2!="")
{
// $data = mysqli_fetch_assoc($res);
$res = mysqli_query($cnx,"UPDATE custom SET changetitle2='$changetitle2' WHERE id=1 ");
}
if($changetitle3!="")
{
// $data = mysqli_fetch_assoc($res);
$res = mysqli_query($cnx,"UPDATE custom SET changetitle3='$changetitle3' WHERE id=1 ");
}
  if($newtitle!="")
  {
  // $data = mysqli_fetch_assoc($res);
  $res = mysqli_query($cnx,"UPDATE custom SET titre='$newtitle' WHERE id=1 ");
}
if($newnav!="" && $newurl!="" && $newbouton!="" && $newtitle!="")
{
// $data = mysqli_fetch_assoc($res);
$res = mysqli_query($cnx,"UPDATE custom SET navbar='$newnav' WHERE id=1 ");
$res1 = mysqli_query($cnx,"INSERT INTO historycolor (navbar,url,bouton,titre) VALUES ('$newnav','$newurl','$newbouton','$newtitle')  ");
$res = mysqli_query($cnx,"UPDATE custom SET url='$newurl' WHERE id=1 ");
$res = mysqli_query($cnx,"UPDATE custom SET bouton='$newbouton' WHERE id=1 ");
$res = mysqli_query($cnx,"UPDATE custom SET titre='$newtitle' WHERE id=1 ");
}
// if($newurl!="")
// {
// // $data = mysqli_fetch_assoc($res);
// $res = mysqli_query($cnx,"UPDATE custom SET url='$newurl' WHERE id=1 ");
// $res1 = mysqli_query($cnx,"INSERT INTO historycolor (url) VALUES ('$newurl') ");
// }
// if($newbouton!="")
// {
// // $data = mysqli_fetch_assoc($res);
// $res = mysqli_query($cnx,"UPDATE custom SET bouton='$newbouton' WHERE id=1 ");
// $res1 = mysqli_query($cnx,"INSERT INTO historycolor (bouton) VALUES ('$newbouton') ");
// }
// if($newtitle!="")
// {
// // $data = mysqli_fetch_assoc($res);
// $res = mysqli_query($cnx,"UPDATE custom SET titre='$newtitle' WHERE id=1 ");
// $res1 = mysqli_query($cnx,"INSERT INTO historycolor (titre) VALUES ('$newtitle')");
// }
if($newpolice!="")
{
// $data = mysqli_fetch_assoc($res);
$res = mysqli_query($cnx,"UPDATE custom SET font='$newpolice' WHERE id=1 ");
}
header('location:admin.php');

?>
