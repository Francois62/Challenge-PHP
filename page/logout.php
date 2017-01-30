<?php
session_start();
 session_destroy();
$_SESSION['log'] = isset($_GET['log'])? $_GET['log'] : "";
header('location:../index.php') ?>
