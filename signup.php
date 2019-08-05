<?php
$db_server = "localhost";
$db_name = "user";
$db_user = "root";
$db_password = "123";
$con = mysqli_connect($db_server, $db_user, $db_password, $db_name);
if (!$con) {
    die("can't connect");
}
//mysqli_query("SET NAMES utf8");
//mysqli_select_db('user', $con);

$name = $_POST['name'];
$password = $_POST['pwd'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$birthday = $_POST['birthday'];
$favcolor = $_POST['favcolor'];
$sex = $_POST['gender'];
$color = $_POST['favcolor'];
if ($name != null && $password != null && $email != null && $phone != null && $birthday != null && $favcolor != null && $sex) {
    $sql_select = "SELECT name FROM member WHERE name = '$name'";
    $ret = mysqli_query($con, $sql_select);
    if (!$ret) {
        printf("Error: %s\n", mysqli_error($con));
        exit();
    }
    $row = mysqli_fetch_array($ret);
    if ($name == $row['name']) {
        die("User Error");
    } else {
        $sql_insert = "INSERT INTO member(name,password,sex,email,phone,birthday,color) VALUES('$name','$password','$sex','$email','$phone','$birthday','$color')";
        mysqli_query($con, $sql_insert);
    }
}
mysqli_close($con);
header("Location:http://localhost/hw/test1/tim/redirect.php");
