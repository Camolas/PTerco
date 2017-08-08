<?php

require_once("../connection/connection.php");

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(isset($_POST["nome"]) && $_POST["nome"]!=null) {
        $stmt = $connection->prepare("INSERT INTO jovem(Nome) VALUES (:name)");

        $stmt->execute(array(
            "name" => $_POST["nome"]
        ));
    }
}
/*
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(isset($_POST[]))
}*/
?>