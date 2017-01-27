<nav class="navbar navbar-default" role="navigation">
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
                //$_SESSION['log'] = isset($_GET['log'])? $_GET['log'] : "";
              if ($_SESSION['log']===true){
              echo '<li>';
                  echo '<a href="page/admin.php">Administration</a>';
              echo '</li>';
              echo '<li>';
                  echo '<a href="page/logout.php">Deconnexion</a>';
              echo '</li>';
            }
            else {
              echo '<li>';
              echo '<a href="page/login.php">Connexion</a>';
              echo '</li>';
              echo '<li>';
                  echo '<a href="page/logout.php">Deconnexion</a>';
              echo '</li>';
            }
              ?>
          </ul>
      </div>
      <!-- /.navbar-collapse -->
  </div>
</nav>
