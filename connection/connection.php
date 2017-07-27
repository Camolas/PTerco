<?php
$hostname = "localhost"; // trabalhoestagios.iptjovens.com";
$username = "root"; //"iptjoven_estagia"; //
$password = ""; //"Gpa3x5l-qcR4"; //
$dbname = "_novabd_ipt"; //"iptjoven_estagios"; //
$charset = 'utf8';

$dsn = "mysql:host=$hostname;dbname=$dbname;charset=$charset";
// Create connection

try {
    $connection = new PDO($dsn, $username, $password);
} catch(PDOException $e) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

?>