<?php
$db_server = "localhost";
$db_name = "user";
$db_user = "root";
$db_password = "123";
$con = mysqli_connect($db_server, $db_user, $db_password, $db_name);
if (!$con) {
    die("can't connect");
}

$name = $_POST['email'];
$password = $_POST['password'];

$sql_select = "SELECT name FROM member WHERE email = '$name' AND password = '$password'";
$sql_login = $con->query($sql_select);
if (mysqli_num_rows($sql_login) == "") {
    echo ("登入失敗");
    header("Location:http://localhost/hw/test1/tim/index.php");
} else {
    header("Location:http://localhost/hw/test1/tim/member.php");
}
