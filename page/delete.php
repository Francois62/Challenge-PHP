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
  echo '<form action="delete.php" method="POST">
  <label for="captcha">Recopiez le mot : "internet"</label>
			<input type="text" name="captcha" id="captcha" /><br />
      </form>';
}
function motListe()
{
    $liste = array('internet', 'captcha', 'robot');
    return $liste[array_rand($liste)];
}

function captcha()
{
    return motListe();
}


    if($_POST['captcha'] == $_SESSION['captcha']){

        echo 'Le captcha est bon';
          $res = mysqli_query($cnx,"DELETE FROM users WHERE id='$numid' ");
}
    else {

        echo 'Le captcha n\'est pas bon';

}

  ?>
