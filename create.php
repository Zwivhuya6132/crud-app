<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO users (name, email) VALUES (?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$name, $email]);

    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New User</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="container">
    <h1>Add New User</h1>
    <form method="POST" action="create.php">
        Name: <input type="text" name="name"><br>
        Email: <input type="text" name="email"><br>
        <button type="submit">Create</button>
    </form>
</div>

</body>
</html>
