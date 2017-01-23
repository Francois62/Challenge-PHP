<?php
session_start();
include_once("connexion.php");

?>

<!DOCTYPE html>
<html>
 <head>
   <meta charset="utf-8"/>
   <title>Challenge1</title>
  </head>
  <body>
    <form action="connexioncheck.php" method="POST">
      <input type="text" id="username" name="username" value="username"/><br>
      <input type="text" id="password" name="password" value="password"/><br>
     <input type="submit" id="submit" name="submit" value="Envoyer"/>
</form>
  </body>
  </html>
