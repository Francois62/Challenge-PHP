<?php
session_start();
include_once("connexion.php");
include_once("customnav.php");
echo "<meta charset='utf-8'/>";
$res = mysqli_query($cnx,"SELECT * FROM users ");
$data = mysqli_fetch_assoc($res);
$res1 = mysqli_query($cnx,"SELECT * FROM custom WHERE id=1");
$data1 = mysqli_fetch_assoc($res1);

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
  width:100%;
  background-color:<?php echo $data1['navbar'] ?>;
}
.nav{
  display: inline-flex;
   padding-left: 20%;
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


    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Contact</h1>
                <ol class="breadcrumb">
                    <li><a href="../index.php">Home</a>
                    </li>
                    <li class="active">Contact</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Form Column -->
            <div class="col-md-4">
                <!-- Contact form -->
                <form enctype="multipart/form-data" action="admin.php" name="sentMessage" id="contactForm" novalidate method="POST">
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
    <!-- /.container -->

    <!-- /.container -->

    <script>
        $('.carousel').carousel({
            interval: 5000
        })
    </script>
    <?php include('snow.php'); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

</body>

</html>
