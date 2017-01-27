<?php
session_start();
include_once('connexion.php');
$res = mysqli_query($cnx,"SELECT * FROM users ");
$data = mysqli_fetch_assoc($res);

$numid=$_GET['modif'];


$_SESSION['neige']=isset($_POST['neige']);
if ($_SESSION['neige']==1)
{

  $_SESSION['neige']="../js/snowstorm.js";

}

?>
<!DOCTYPE html>
<html lang="fr">

<head>

   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="">
   <meta name="author" content="">

   <title>Challenge PHP de François</title>

   <!-- Bootstrap Core CSS -->
   <link href="../css/bootstrap.min.css" rel="stylesheet">

   <!-- Custom CSS -->
   <link href="../css/main.css" rel="stylesheet">

   <!-- Custom Fonts -->
   <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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

/*padding-left: 10%;*/
 z-index:1;
 width:100%;
 background-color:<?php echo $data1['navbar'] ?>;
}
.nav{
  padding-left: 20%;
 z-index:1;
   width:100%;
 background-color:<?php echo $data1['navbar'] ?>;
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
ul{
 color:<?php echo $data1['url'] ?>;
}
a{
 color:<?php echo $data1['url'] ?> !important;
}
</style>

   <!-- Navigation -->
   <nav class="navbar navbar-inverse <?php echo $_SESSION['navbar']?>" role="navigation">
       <div class="container">
           <!-- Left -->
           <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                   <span class="sr-only">Toggle navigation</span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="../index.php">Start Bootstrap</a>
           </div>
           <!-- Right -->
           <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav navbar-right">
                   <li>
                       <a href="../index.php">Home</a>
                   </li>
                   <li>
                       <a href="repertory.php">Repertory</a>
                   </li>
                   <li>
                       <a href="about.php">About</a>
                   </li>
                   <li>
                       <a href="contact.php">Contact</a>
                   </li>
               </ul>
           </div>
           <!-- /.navbar-collapse -->
       </div>
       <!-- /.container -->
   </nav>

   <!-- Page Content -->
   <div class="container">

       <!-- Page Heading -->
       <div class="row">
           <div class="col-lg-12">
               <h1 class="page-header">Update</h1>
               <ol class="breadcrumb">
                   <li><a href="../index.php">Home</a>
                   </li>
                   <li class="active">Update</li>
               </ol>
           </div>
       </div>
       <!-- /.row -->

       <!-- Content Row -->
       <div class="row">
           <!-- Form Column -->
           <div class="col-md-4">
               <!-- Contact form -->
               <form enctype="multipart/form-data" action="validupdate.php" name="sentMessage" id="contactForm" novalidate method="POST">
                 <div class="control-group form-group">
                     <div class="controls">
                         <label>Pseudo:</label>
                         <input type="text" class="form-control" id="pseudo" name="pseudo"required data-validation-required-message="Please enter your pseudo.">
                     </div>
                 </div>
                   <div class="control-group form-group">
                       <div class="controls">
                           <label>Full Name:</label>
                           <input type="text" class="form-control" id="username" name="username"required data-validation-required-message="Please enter your name.">
                           <p class="help-block"></p>
                       </div>
                   </div>
                   <div class="control-group form-group">
                       <div class="controls">
                           <label>Email Address:</label>
                           <input type="email" class="form-control" id="email" name="mail"required data-validation-required-message="Please enter your email address.">
                       </div>
                   </div>

                   <div class="control-group form-group">
                       <div class="controls">
                           <label>Message:</label>
                           <textarea rows="4" cols="100" class="form-control" id="message" name="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                       </div>
                   </div>
                   <div class="control-group form-group">
                       <div class="controls">
                           <label>Image de profil:</label>
                           <input type="file" class="form-control" id="img" name="img" required data-validation-required-message="Please enter your Profil Image.">
                       </div>
                   </div>
                   <div class="control-group form-group">
                       <div class="controls">
                           <label>Jeux:</label>
                           <input type="text" class="form-control" id="game" name="game" required data-validation-required-message="Please enter your favorite game.">
                           <p class="help-block"></p>
                   </div>
                   <div class="control-group form-group">
                       <div class="controls">
                           <label>Date de Naissance:</label>
                           <input type="text" class="form-control" id="age" name="age" required data-validation-required-message="Please enter your birthdate.">
                           <p class="help-block"></p>
                   </div>
                   <div class="control-group form-group">
                       <div class="controls">

                           <input type="hidden" class="form-control" id="id" name="id" required data-validation-required-message="Please enter your birthdate." value="<?php echo $numid?>">
                           <p class="help-block"></p>
                   </div>
                   <div id="success"></div>
                   <button type="submit" id="add" name="add" class="btn btn-primary">Send Message</button>
               </form>
           </div>
       </div>
       <!-- /.row -->

       <hr>

       <!-- Footer -->
       <footer>
           <div class="row">
               <div class="col-lg-12">
                   <p>Copyright &copy; SimplonBSM 2017</p>
               </div>
           </div>
       </footer>

   </div>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script>
       $('.carousel').carousel({
           interval: 5000
       })
   </script>
   <script src="<?php echo $_SESSION['neige']?>"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   <script src="../js/bootstrap.min.js"></script>

</body>

</html>
