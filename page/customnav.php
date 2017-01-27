<?php
include_once("connexion.php");
$res1 = mysqli_query($cnx,"SELECT * FROM custom WHERE id=1");
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
              <?php
                //$_SESSION['log'] = isset($_GET['log'])? $_GET['log'] : "";
              if ($_SESSION['log']===true){
              echo '<li>';
                  echo '<a href="admin.php">Admin</a>';
              echo '</li>';
              echo '<li>';
                  echo '<a href="logout.php">Deco</a>';
              echo '</li>';
            }
            else {
              echo '<li>';
              echo '<a href="login.php">Connexion</a>';
              echo '</li>';
              echo '<li>';
                  echo '<a href="logout.php">Deco</a>';
              echo '</li>';
            }
              ?>
          </ul>
      </div>
      <!-- /.navbar-collapse -->
  </div>
</nav>
