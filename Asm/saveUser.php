<?php

$servername = "127.0.0.1";
$username = "root";
$password = "root";

$conn = new PDO("mysql:host=$servername;dbname=asm_php1", $username, $password);

if (isset($_POST['btn_add'])) {
    if ($_POST['username'] != '' && $_POST['email'] != '' && $_POST['password'] != '') {
        $user_name = $_POST['username'];
        $password_user = $_POST['password'];
        $email = $_POST['email'];
        $query = "INSERT INTO users (username, password, email) 
                VALUES ('$user_name', '$password_user', '$email')";
        $stmt = $conn->prepare($query);
        $stmt->execute();

        header('location: index.php');
    }
}

if (isset($_POST['btn_edit'])) {
    if ($_POST['username'] != '' && $_POST['email'] != '' && $_POST['password'] != '') {
        $id = $_GET['id'];
        $user_name = $_POST['username'];
        $password_user = $_POST['password'];
        $email = $_POST['email'];
        $query = "UPDATE users SET username = '$user_name', password = '$password_user', email = '$email' WHERE user_id = '$id'";
        $stmt = $conn->prepare($query);
        $stmt->execute();

        header('location: index.php');
    }
}

