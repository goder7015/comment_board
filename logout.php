<?php session_start(); ?>
<?php
unset($_SESSION['name']);
header("Location:http://localhost/hw/test1/tim/index.php");
