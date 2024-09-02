<?php
require 'db.php';

$id = $_GET['id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "UPDATE users SET name = ?, email = ? WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$name, $email, $id]);

    header("Location: index.php");
} else {
    $stmt = $pdo->prepare('SELECT * FROM users WHERE id = ?');
    $stmt->execute([$id]);
    $user = $stmt->fetch();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="container">
    <h1>Edit User</h1>
    <form method="POST" action="update.php?id=<?= $id ?>">
        Name: <input type="text" name="name" value="<?= $user['name'] ?>"><br>
        Email: <input type="text" name="email" value="<?= $user['email'] ?>"><br>
        <button type="submit">Update</button>
    </form>
</div>

</body>
</html>
