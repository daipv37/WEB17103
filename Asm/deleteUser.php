<?php

$servername = "127.0.0.1";
$username = "root";
$password = "root";

$conn = new PDO("mysql:host=$servername;dbname=asm_php1", $username, $password);
$id = $_GET['id'];
$query = "DELETE FROM users WHERE user_id = '$id'";
$stmt = $conn->prepare($query);
$stmt->execute();

header('location: index.php');