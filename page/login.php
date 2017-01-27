<?php
session_start();
include_once("connexion.php");

?>

<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Challenge PHP de </title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/main.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
  <body>
  <style>
  .navbar{

   /*padding-left: 10%;*/
    z-index:1;
    width:100%;
    background-color:<?php echo $newnav ?>;

  }
  table{
    margin-left:35%;
    border: solid black 1px;
  }
  td{
    border: solid black 1px;
  }
  th{
    border:solid black 1px;
    background-color: green;
  }
  tr{
    border: solid black 1px;
  }
  .nav{
     padding-left: 20%;
    z-index:1;
      width:100%;

    background-color:<?php echo $newnav ?>;
  }
  .collapse{
  float: right;
  }
  .btn{
  background-color:<?php echo $data['bouton'] ?>;
  }
  h1,h2,h3,h4{
    color:<?php echo $data['titre'] ?>;
  }
  a{
    color:<?php echo $data['url'] ?>;
  }
  </style>
  <body>
    <div class='row'>
  <div class=" text-center col-xs-12 col-md-12 col-lg-12">
  <h4 class="text-center">Espace connexion<h4>
    <form action="connexioncheck.php" method="POST">
      <input type="text" id="username" name="username" value="username"/><br>
      <input type="text" id="password" name="password" value="password"/><br>
     <input type="submit" id="submit" name="submit" value="Envoyer"/>
</form>
</div>
</div>
  </body>
  </html>
