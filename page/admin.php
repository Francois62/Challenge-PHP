<?php
session_start();
include_once("connexion.php");
include_once("customnav.php");
include_once("perso.php");
echo "<meta charset='utf-8'/>";
$res = mysqli_query($cnx,"SELECT * FROM users ");
$res1 = mysqli_query($cnx,"SELECT * FROM custom ");
$data = mysqli_fetch_assoc($res);
$data1 = mysqli_fetch_assoc($res1);

$newpseudo=isset($_POST['pseudo'])? $_POST['pseudo'] : "";
$newname=isset($_POST['username'])? $_POST['username'] : "";
$newmail= isset($_POST['mail'])? $_POST['mail'] : "";
$newgame= isset($_POST['game'])? $_POST['game'] : "";
$newdate= isset($_POST['age'])? $_POST['age'] : "";
$message= isset($_POST['message'])? $_POST['message'] : "";
$message = wordwrap($message, 100, "\r\n");
mail($newmail, 'Message', $message);

$verifpseudo="#[^0-9]#";
$verifprenom="#[A-Za-z]#";
$verifdate="#[0-9]{2}/[0-9]{2}/[0-9]{4}#";
$file = isset($_FILES['img']['name'])? $_FILES['img']['name'] : "";
$type = isset($_FILES['img']['type'])? $_FILES['img']['type'] : "";
// if($verifpseudo==$newpseudo && $verifprenom==$newpseudo && $verifdate==$newdate){
if ($type=='image/jpg' || $type=='image/jpeg' || $type=='image/gif'){
  # code... //$_FILES = Méthode pour récupérer les fichiers
$res2=move_uploaded_file($_FILES['img']['tmp_name'], $_SERVER['DOCUMENT_ROOT']. "/challenge1/img/" . $_FILES['img']['name']);//
}
if(preg_match($verifpseudo,$newpseudo)){
      $newpseudo=$newpseudo;
}
else{
  $newpseudo="";
}
if(preg_match($verifprenom,$newname)){
   $newname=$newname;
}

else{
  $newname="";
}
if(preg_match($verifdate,$newdate)){
  $newdate=$newdate;
}
else{
      $newdate="";
}



 echo "<div class='row'>";
 echo "<div class='text-center col-xs-12 col-md-12 col-lg-12'>";
echo "<table>";
foreach ($data as $key => $value) {
    echo "<th class='text-center'>".$key."</th>";
    //echo "<tr></tr>";
  }
mysqli_data_seek($res, 0);
    while ($data = mysqli_fetch_assoc($res)){
      echo "<tr>";
      foreach ($data as $key => $value) {
        if($key=='img'){
        	echo '<td><img src="../img/'.$value.'"></td>';
        }
        else{
          echo "<td>".$value."</td>";
        }
      }
      echo '<form class="text-center" action="update.php?modif='.$data['id'].'" method="post">';
      echo '<td><input style="width:10px; height:20px;" type="submit" id="modif" name="modif" value=""/>Modifier</td>';
      echo '</form>';
      echo '<form class="text-center" action="accept.php?add='.$data['id'].'" method="post">';
      echo '<td><input style="width:10px; height:20px;" type="submit" id="add" name="add" value=""/>Ajouter</td>';
      echo '</form>';
        echo '<form class="text-center" action="delete.php?supr='.$data['id'].'" method="post">';
        echo '<td><input type="checkbox" name="validelete">
        <input type="submit" name="valid" value="suppr"></td>';
        echo '</form>';
        echo "</tr>";

         echo "</div>";
         echo "</div>";
      }

      $valider=0;
      if($newpseudo!="" && $newdate!="" && $newname!="" && $newmail!="" && $newgame!="" && $newdate!=""){
      $res = mysqli_query($cnx,
      "INSERT INTO users (pseudo,username,img,mail,jeux,age,valider) VALUES ('$newpseudo','$newname','$file','$newmail','$newgame','$newdate','$valider')");
    }
    else{
      $res=0;
    }  // echo "INSERT =" .(int)$res;


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
    @import url('https://fonts.googleapis.com/css?family=<?php echo $data1['font']?>');
   .navbar{
    padding-right: 10%;
   display: inline-flex;
     width:100%;
     background-color:<?php echo $data1['navbar'] ?>;

   }
   table{
     margin-left:25%;
     border: solid black 1px;
   }
   td{
     border: solid grey 1px;
   }
   th{
     border:solid grey 1px;
     background-color: green;
   }
   tr{
     border: solid grey 1px;
   }
   .nav{
      padding-left: 10%;
 display: inline-flex;
       width:100%;

     background-color:<?php echo $data1['navbarr'] ?>;
   }
   .collapse{
   float: right;
   }
   .btn{
   background-color:<?php echo $data1['bouton'] ?>;
   }
   h1,h2,h3,h4{
         font-family: <?php echo $data1['font']?>;
     color:<?php echo $data1['titre'] ?>;
   }
   a{
     color:<?php echo $data1['url']?>!important;;
   }
   img{
     width:100px;
     height:100px;
   }
   </style>
   <div class='col-md-12 col-xs-12 col-lg-12 text-center'>
   <a href="http://localhost/challenge1/">Aperçu</a><div class="box"><iframe src="http://localhost/challenge1/" width = "500px" height = "500px"></iframe></div>
 </div>
 <?php include('snow.php'); ?>
   </body>
   </html>
