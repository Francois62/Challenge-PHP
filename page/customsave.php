<?php
session_start();
include_once("connexion.php");
$res=mysqli_query($cnx ,"SELECT * FROM custom  WHERE id=1 ");
$data=mysqli_fetch_assoc($res);

$res1 = mysqli_query($cnx,"SELECT * FROM custom WHERE id=1");
$data1 = mysqli_fetch_assoc($res1);



  $res = mysqli_query($cnx, "SELECT * FROM custom WHERE id=1");


  $newtitle=isset($_POST['title'])? $_POST['title'] : "";
  $newnav=isset($_POST['navbarr'])? $_POST['navbarr'] : "";
  $newurl=isset($_POST['url'])? $_POST['url'] : "";
  $newbouton= isset($_POST['bouton'])? $_POST['bouton'] : "";
  $newpolice= isset($_POST['police'])? $_POST['police'] : "";
  $snow=isset($_POST['snow']);
  $snow = (int)$snow;
  $slider=isset($_POST['slider']);
  $slider = (int)$slider;
  $navfix=isset($_POST['navfix']);
  $navfix = (int)$navfix;
  
  $res = mysqli_query($cnx,"UPDATE custom SET snow='$snow' WHERE id=1 ");
  $res = mysqli_query($cnx,"UPDATE custom SET slider='$slider' WHERE id=1 ");
  $res = mysqli_query($cnx,"UPDATE custom SET navfix='$navfix' WHERE id=1 ");

  // $data1['navfix']=isset($_POST['navfix']);
  // if ($data1['navfix']==1)
  // {
  //   $data1['navfix']="navbar-fixed-top";
  //
  // }
  // $data1['slider']=isset($_POST['slider']);
  // if ($data1['slider']==1)
  // {
  //   $data1['slider']="hidden";
  // }
  //
  // $data1['snow']=isset($_POST['snow']);
  // if ($data1['snow']==1)
  // {
  //
  //   $data1['snow']="../js/snowstorm.js";
  // }

  if($newtitle!="")
  {
  // $data = mysqli_fetch_assoc($res);
  $res = mysqli_query($cnx,"UPDATE custom SET titre='$newtitle' WHERE id=1 ");
}
if($newnav!="")
{
// $data = mysqli_fetch_assoc($res);
$res = mysqli_query($cnx,"UPDATE custom SET navbar='$newnav' WHERE id=1 ");
}
if($newurl!="")
{
// $data = mysqli_fetch_assoc($res);
$res = mysqli_query($cnx,"UPDATE custom SET url='$newurl' WHERE id=1 ");
}
if($newbouton!="")
{
// $data = mysqli_fetch_assoc($res);
$res = mysqli_query($cnx,"UPDATE custom SET bouton='$newbouton' WHERE id=1 ");
}
if($newtitle!="")
{
// $data = mysqli_fetch_assoc($res);
$res = mysqli_query($cnx,"UPDATE custom SET titre='$newtitle' WHERE id=1 ");
}
if($newpolice!="")
{
// $data = mysqli_fetch_assoc($res);
$res = mysqli_query($cnx,"UPDATE custom SET font='$newpolice' WHERE id=1 ");
}
header('location:admin.php');

?>
