<?php


session_start();
require "KoneksiDB/function.php";

if (!isset($_SESSION["login"])) {
    header("Location:logadmin.php");
    exit;
}



global $db_link;
$user = query("SELECT * FROM user");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Admin Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Admin Panel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="#">Dashboard</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Users</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Settings</a></li>
            </ul>

        </div>
    </div>
</nav>


<div class="container mt-4">
    <h2 class="mb-4">User Table</h2>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
            <tr>
                <th>No.</th>
                <th>Username</th>
                <th>Email</th>
                <th>Password</th>
                <th>Is Active</th>
                <th>Created At</th>
                <th>Action</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>

            <?php $i =1; ?>
            <?php foreach ($user as $row): ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $row["username"]; ?></td>
                <td><?= $row["email"];?></td>
                <td><?= $row["password"];?></td>
                <td><?= $row["is_active"];?></td>
                <td><?= $row["created_at"];?></td>
                <td>
                    <a class="btn <?= $row["is_active"] ? 'btn-success' : 'btn-secondary' ?> text-light"
                       href="toggle_status.php?id=<?= $row["id"]; ?>">
                        <?= $row["is_active"] ? 'Active' : 'Inactive' ?>
                    </a>
                </td>
                <td>
                    <a class="btn btn-outline-danger text-light bg-danger" href="delete.php?id=<?= $row["id"]; ?>">Delete</a>
            </tr>

            <?php $i++;?>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<div class="d-flex justify-content-center">
    <a href="logoutadmin.php" class="btn btn-danger">Log Out</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
