<?php
session_start();
require "KoneksiDB/function.php";

if (!isset($_SESSION["login"])) {
    header("Location: logadmin.php");
    exit;
}

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $user = query("SELECT * FROM user WHERE id = $id")[0];

    // Toggle status
    $newStatus = $user["is_active"] == 1 ? 0 : 1;

    global $db_link;
    mysqli_query($db_link, "UPDATE user SET is_active = $newStatus WHERE id = $id");

    header("Location: admin.php");
    exit;
}
?>