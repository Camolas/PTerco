<?php
$hostname = "";
$username = "";
$password = "";
$dbname = "";


$connection = mysqli_connect($hostname, $username, $password, $dbname) or die('Falha em estabelecer conexão à base de dados') . mysql_error();;

mysqli_set_charset($connection, "utf8");