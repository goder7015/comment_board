<?php
$db_server = "localhost";
$db_name = "user";
$db_user = "root";
$db_password = "123";
$con = mysqli_connect($db_server, $db_user, $db_password, $db_name);
if (!$con) {
    die("can't connect");
}
