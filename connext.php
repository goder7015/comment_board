<?php
$server = "localhost";
$db_user = "root";
$db_password = "";
$con = mysql_connect($server, $db_username, $db_password);
if (!$con) {
    die("can't connect" . mysql_error());
}
mysql_query("SET NAMES utf8");
mysql_select_db('user', $con);
