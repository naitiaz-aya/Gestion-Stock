<?php
include_once("connexion.php");

$id = $_GET['id'];


echo $id;

$sql = "DELETE FROM  product WHERE id=$id";
$stmt= $con->prepare($sql);
$stmt->execute(); 
header("Location: dashboard.php");