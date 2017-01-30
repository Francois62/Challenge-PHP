<?php
function motListe()
{
    $liste = array('internet', 'captcha', 'robot');
    return $liste[array_rand($liste)];
}

function captcha()
{
    return motListe();
}


if(!empty($_POST['captcha']))

{

    if($_POST['captcha'] == $_SESSION['captcha'])

        echo 'Le captcha est bon;
          $res = mysqli_query($cnx,"DELETE FROM users WHERE id='$numid' ")';

    else {

        echo 'Le captcha n\'est pas bon';

}
}
?>
