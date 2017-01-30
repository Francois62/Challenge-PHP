<?php
session_start();
include_once('connexion.php');
include_once("customnav.php");
echo "<meta charset='utf-8'/>";
$res = mysqli_query($cnx,"SELECT * FROM users WHERE valider=1");
$res1 = mysqli_query($cnx,"SELECT * FROM custom WHERE id=1");
$data = mysqli_fetch_assoc($res);
$data1 = mysqli_fetch_assoc($res1);
// $add = isset($_POST['add'])? $_POST['add'] : "";
// $add=$data['id'];

?><!DOCTYPE html>
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
a{
  color:<?php echo $data1['url'] ?> !important;
}
.goto{
  margin-left: 50%;
}
</style>
    <!-- Navigation -->


    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Repertory</h1>
                <ol class="breadcrumb">
                    <li><a href="../index.php">Home</a>
                    </li>
                    <li class="active">Portfolio</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Friends Row -->
        <?php
        // if($data['id']){
        mysqli_data_seek($res, 0);
      // }
        while(($data = mysqli_fetch_assoc($res))){
        echo '<div class="row">';
            echo '<div class="col-md-4 img-portfolio">';
                echo '<img class="img-responsive img-hover" src="../img/'.$data['img'].'" alt="">';
              echo '  <h3>"'.$data['pseudo'].'"</h3>';
                echo '<p><span>"'.$data['age'].'"</span></p>';

              echo '  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>';
              echo '  <h4>"'.$data['jeux'].'"</h4>';
              echo '  <table class="table table-striped  table-hover">';
                echo '    <thead>';
                    echo '    <tr>';
                      echo '      <th>"'.$data['jeux'].'"</td>';
                        echo '    <th>"'.$data['username'].'"</td>';
                      echo '  </tr>';
                  echo '  </thead>';
                  echo '  <tr>';
                    echo '    <td>Lorem</td>';
                    echo '    <td>Ipsum</td>';
                  echo '  </tr>';
                echo '</table>';
            echo '</div>';
          }

?>
<div class="row">
<div class="goto col-md-2 col-xs-2 col-lg-2">
  <a href="#" class="js-scrollTo"><i class="fa fa-arrow-circle-o-up fa-3x js-scrollTo" type="submit" class="btn btn-default js-scrollTo" aria-hidden="true"></i></a>
</div>
</div>
        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-md-12 col-xs-12 col-lg-12">
                    <p>Copyright &copy; SimplonBSM 2017</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
     <script src="../js/bootstrap.min.js"></script>
<?php include('snow.php'); ?>


</body>

</html>
