<?php

$servername = "127.0.0.1";
$username = "root";
$password = "root";

try {
    $conn = new PDO("mysql:host=$servername;dbname=PHP1", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

//$query = "INSERT INTO user (name , password, address) VALUES (:name , :password, :address)";

$query = "SELECT * FROM user";
$stmt = $conn->prepare($query);
$stmt->execute();
$result = $stmt->fetchAll();
//$stmt->bindParam(':name', $name);
//$stmt->bindParam(':password', $password);
//$stmt->bindParam(':address', $address);

//$name = 'daideptrai';
//$password = '123456';
//$address = 'Nam Dinh';
//$stmt->execute();
//
//$name = 'hongxinhgai';
//$password = '123456';
//$address = 'Nam Dinh';
//$stmt->execute();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connect DB</title>
</head>
<body>
    <?php foreach ($result as $value) : ?>
    <div style="border: 1px solid black; width: 200px; margin-top: 20px; text-align: center">
        <h1><?php echo $value['name'] ?></h1>
        <h2><?php echo $value['password'] ?></h2>
        <h3><?php echo $value['address'] ?></h3>
    </div>
    <?php endforeach; ?>
</body>
</html>
