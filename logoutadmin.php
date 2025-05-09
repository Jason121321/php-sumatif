<?php
session_start();
require 'KoneksiDB/function.php'; // file koneksi ke database

// Cek apakah user sedang login
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];

    // Set is_active menjadi FALSE
    $query = "UPDATE tb_admins SET is_active = FALSE WHERE name = '$username'";
    mysqli_query($db_link, $query);
}

// Hapus semua session
session_unset();
session_destroy();

// Arahkan ke halaman login atau lainnya
header("Location: logadmin.php");
exit;
?>
