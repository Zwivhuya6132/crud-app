<?php
require 'db.php';

$stmt = $pdo->query('SELECT * FROM users');
$users = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Application</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="container">
    <h1>User Management</h1>
    <a href="create.php">Add New User</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['name'] ?></td>
                <td><?= $user['email'] ?></td>
                <td>
                    <a href="update.php?id=<?= $user['id'] ?>">Edit</a> |
                    <a href="delete.php?id=<?= $user['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>

</body>
</html>
