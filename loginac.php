<?php session_start(); ?>
<?php
include("connect.php");

$name = $_POST['email'];
$password = $_POST['password'];

$sql_select = "SELECT name FROM member WHERE email = '$name' AND password = '$password'";
$sql_login = $con->query($sql_select);
if (mysqli_num_rows($sql_login) == "") {
    echo ("登入失敗");
    header("Location:http://localhost/hw/test1/tim/index.php");
} else {
    $_SESSION['name'] = $name;
    header("Location:http://localhost/hw/test1/tim/member.php");
}
