<?php
 session_start();
include_once("page/connexion.php");
$res1 = mysqli_query($cnx,"SELECT * FROM custom WHERE id=1");
$data1 = mysqli_fetch_assoc($res1);
$res = mysqli_query($cnx,"SELECT * FROM users WHERE valider=1 ORDER BY id DESC LIMIT 6 ");
$data = mysqli_fetch_assoc($res);
// echo "<meta charset='utf-8'/>";
// $res = mysqli_query($cnx,"SELECT * FROM users ");
// $data = mysqli_fetch_assoc($res);

// if ($_POST['nav']==true)
// {
//   echo "La barre de  nav est passé en fixed<br>";
// }
// else{
//   $nav ='<nav class="navbar navbar-inverse role="navigation">';
//   echo "La barre de nav est passé en relative<br>";
// }
  //  echo '<a href="../index.php">retour</a>';

// header('location:mysql00selectExo2.php');
// if ($_POST['nav']==true)
// {
//   echo "<nav style{ position:fixed;}></nav>";
// }
// else{
//   echo "<nav style{ position:none;}></nav>";
// }
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
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/main.css" rel="stylesheet">

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

    <!-- Navigation -->
<?php

  $newtitle=isset($_POST['title'])? $_POST['title'] : "";
  $newnav=isset($_POST['navbarr'])? $_POST['navbarr'] : "";
  $newurl=isset($_POST['url'])? $_POST['url'] : "";
  $newbouton= isset($_POST['bouton'])? $_POST['bouton'] : "";
  $newpolice= isset($_POST['police'])? $_POST['police'] : "";

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
    // echo ' informations bien change';
// }    //  $_SESSION['titre'] = $newtitle;
    //  $data['navbar'] = $newnav;
    //  $data['url'] = $newurl;
    //  $data['bouton'] = $newbouton;


?>
<style>
  @import url('https://fonts.googleapis.com/css?family=<?php echo $data1['font']?>');
.navbar{

 /*padding-left: 10%;*/
  width:100%;
  background-color:<?php echo $data1['navbar'] ?>;
}
.nav{
   padding-left: 20%;
display: inline-flex;
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
.icon-prev{
  visibility: <?php echo $data1['slider']; ?>
}
.icon-next{
  visibility: <?php echo $data1['slider']; ?>
}
</style>

<?php $res1 = mysqli_query($cnx,"SELECT * FROM custom WHERE id=1");
$data1 = mysqli_fetch_assoc($res1);
if($data1['navfix']== 1){
  echo '<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">';
}
else{
  echo '<nav class="navbar navbar-inverse" role="navigation" style="margin-top:-70px; margin-bottom:0px;">';
} ?>
<div class="container">
    <!-- Left -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Start Bootstrap</a>
    </div>
    <!-- Right -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>
                <a href="page/repertory.php">Repertory</a>
            </li>
            <li>
                <a href="page/about.php">About</a>
            </li>
            <li>
                <a href="page/contact.php">Contact</a>
            </li>
            <?php
              $_SESSION['log']==false;

            if ($_SESSION['log']===true){
            echo '<li>';
                echo '<a href="page/admin.php">Admin</a>';
            echo '</li>';
            echo '<li>';
                echo '<a href="page/logout.php">Deco</a>';
            echo '</li>';
          }
          else {
            echo '<li>';
            echo '<a href="page/login.php">Connexion</a>';
            echo '</li>';
            echo '<li>';
                echo '<a href="page/logout.php">Deco</a>';
            echo '</li>';
          }
            ?>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</div>
</nav>
    <!-- <nav class="navbar navbar-inverse " role="navigation"> -->

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indic -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('img/slide1.jpg');"></div>
                <div class="carousel-caption">
                    <h2><?php if($data1['changetitle']== 1){
                      echo $data1['changetitle']; }?></h2>
                    <p><?php if($data1['subtitle']== 1){
                      echo $data1['subtitle']; }?></p>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('img/slide2.jpg');"></div>
                <div class="carousel-caption">
                    <h2><?php if($data1['changetitle2']== 1){
                      echo $data1['changetitle2']; }?></h2>
                    <p><?php if($data1['subtitle2']== 1){
                      echo $data1['subtitle2']; }?></p>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('img/slide3.jpg');"></div>
                <div class="carousel-caption">
                    <h2><?php if($data1['changetitle3']== 1){
                      echo $data1['changetitle3']; }?></h2>
                    <p><?php if($data1['subtitle3']== 1){
                      echo $data1['subtitle3']; }?></p>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <?php if($data1['slider']== 1){
          echo '        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                      <span class="icon-prev"></span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" data-slide="next">
                      <span class="icon-next"></span>
                  </a>';
        }

        ?>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welcome !
                </h1>
            </div>

            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Lorem ipsum7</h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i> Dolor Sit</h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-compass"></i> Amet</h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Repertory Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Last creation</h2>
            </div>
            <?php   mysqli_data_seek($res, 0);
            // }
              while(($data = mysqli_fetch_assoc($res))){
          echo'  <div class="portfolio-item col-md-4 col-sm-6">
                <a  href="page/repertory.php">
                    <img class="img-responsive img-portfolio img-hover" src="img/'.$data['img'].'" alt="">
                </a>
            </div>';
          }
            ?>
            <!-- <div class="portfolio-item col-md-4 col-sm-6">
                <a  href="page/repertory.php">
                    <img class="img-responsive img-portfolio img-hover" src="img/portfolio1.jpg" alt="">
                </a>
            </div>
            <! <div class="portfolio-item col-md-4 col-sm-6">
                <a href="page/repertory.php">
                    <img class="img-responsive img-portfolio img-hover" src="img/portfolio1.jpg" alt="">
                </a>
            </div> -->
            <!-- <div class="portfolio-item col-md-4 col-sm-6">
                <a href="page/repertory.php">
                    <img class="img-responsive img-portfolio img-hover" src="img/portfolio1.jpg" alt="">
                </a>
            </div>
            <div class="portfolio-item col-md-4 col-sm-6">
                <a href="page/repertory.php">
                    <img class="img-responsive img-portfolio img-hover" src="img/portfolio1.jpg" alt="">
                </a>
            </div>
            <div class="portfolio-item col-md-4 col-sm-6">
                <a href="page/repertory.php">
                    <img class="img-responsive img-portfolio img-hover" src="img/portfolio1.jpg" alt="">
                </a>
            </div> -->
        </div>
        <!-- /.row -->


        <hr>

        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-default btn-block" href="#">Call to Action</a>
                </div>
            </div>
        </div>

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


    		<!-- <script type="text/javascript">
        var snow = {

	wind : 1,
	maxXrange : 100,
	minXrange : 10,
	maxSpeed : 2,
	minSpeed : 1,
	color : "#fff",
	char : "*",
	maxSize : 40,
	minSize : 8,

	flakes : [],
	WIDTH : 0,
	HEIGHT : 0,

	init : function(nb){
		var o = this,
			frag = document.createDocumentFragment();
		o.getSize();



		for(var i = 0; i < nb; i++){
			var flake = {
				x : o.random(o.WIDTH),
				y : - o.maxSize,
				xrange : o.minXrange + o.random(o.maxXrange - o.minXrange),
				yspeed : o.minSpeed + o.random(o.maxSpeed - o.minSpeed, 100),
				life : 0,
				size : o.minSize + o.random(o.maxSize - o.minSize),
				html : document.createElement("span")
			};

			flake.html.style.position = "absolute";
			flake.html.style.top = flake.y + "px";
			flake.html.style.left = flake.x + "px";
			flake.html.style.fontSize = flake.size + "px";
			flake.html.style.color = o.color;
			flake.html.appendChild(document.createTextNode(o.char));

			frag.appendChild(flake.html);
			o.flakes.push(flake);
		}

		document.body.appendChild(frag);
		o.animate();
	},

	animate : function(){
		var o = this;
		for(var i = 0, c = o.flakes.length; i < c; i++){
			var flake = o.flakes[i],
				top = flake.y + flake.yspeed,
				left = flake.x + Math.sin(flake.life) * flake.xrange + o.wind;
			if(top < o.HEIGHT - flake.size - 10 && left < o.WIDTH - flake.size && left > 0){
				flake.html.style.top = top + "px";
				flake.html.style.left = left + "px";
				flake.y = top;
				flake.x += o.wind;
				flake.life+= .10;
			}
			else {
				flake.html.style.top = -o.maxSize + "px";
				flake.x = o.random(o.WIDTH);
				flake.y = -o.maxSize;
				flake.html.style.left = flake.x + "px";
				flake.life = 0;
			}
		}
		setTimeout(function(){
			o.animate();
		},20);
	},

	random : function(range, num){
		var num = num?num:1;
		return Math.floor(Math.random() * (range + 1) * num) / num;
	},

	getSize : function(){
		this.WIDTH = document.body.clientWidth || window.innerWidth;
		this.HEIGHT = document.body.clientHeight || window.innerHeight;
	}

};
    			window.onload = function(){
    				snow.init(100);
    			};
    		</script>
    /.container -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        $('.carousel').carousel({
            interval: 5000
        })
    </script>
    <?php
    if($data1['snow']== 1){
      echo '    <script src="js/snowstorm.js"></script>';
    }
?>

</body>

</html>
