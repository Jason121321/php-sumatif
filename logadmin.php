<?php
session_start();
require 'KoneksiDB/function.php';
global $db_link;

if(isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    $result = mysqli_query($db_link, "SELECT * FROM user WHERE id = '$id'");
    $row = mysqli_fetch_assoc($result);

    if($key === hash('sha256', $row['username'])) {
        $_SESSION['login'] = true;
    }
}


if(isset($_POST["login"])) {

    if (registeradmin($_POST) > 0) {
        echo "<script>
        alert('User berhasil di tambahkan');
        window.location.href='admin.php';
        </script>";

        if(isset($_POST["remember"])){
            setcookie('id',$row['id'], time() +60);
            setcookie('key', hash('sha256', $row['email']), time() +60);
        }

        $_SESSION["login"] = true;
        header("Location: admin.php");
        exit;
    }
}


?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Admin - Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Boxicons   -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #4e54c8, #8f94fb);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Segoe UI', sans-serif;
        }
        .card-login {
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 45px rgba(0, 0, 0, 0.2);
        }
        .img-side {
            background: url('images/e0c32e4e-8837-40ea-b929-bc173c17e8be.jpeg') center center/cover no-repeat;
        }
        .login-form {
            padding: 2rem;
        }
        .form-control {
            border-radius: 10px;
        }
        .btn-primary {
            border-radius: 30px;
        }
        .input-group-text {
            border-radius: 10px 0 0 10px;
        }
        .form-check-label {
            cursor: pointer;
        }
        .show-password {
            cursor: pointer;
        }
        @media (max-width: 768px) {
            .img-side {
                display: none;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-10 col-lg-8">
            <div class="row card-login bg-white">
                <div class="col-md-6 img-side d-none d-md-block"></div>
                <div class="col-md-6 login-form">
                    <h3 class="mb-4 text-center">Welcome Admin</h3>
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                                <input type="text" name="username" class="form-control" id="username" placeholder="Masukkan username" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <div class="input-group">
                                <span class="input-group-text"> <i class='bx bxl-gmail'></i></span>
                                <input type="email" name="email" class="form-control" id="username" placeholder="Masukkan email" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan password" required>
                                <span class="input-group-text show-password" onclick="togglePassword()">
                    <i class="bi bi-eye" id="toggleIcon"></i>
                  </span>
                            </div>
                        </div>
                        <div class="mb-3 form-check d-flex align-items-center justify-content-between">
                            <div>
                                <input type="checkbox" name="remember" class="form-check-input" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">Remember Me</label>
                            </div>
                        </div>
                        <div class="d-grid">
                            <button type="submit" name="login" class="btn btn-primary btn-lg">Login</button>
                        </div>
                    </form>
                    <p class="text-center mt-4 text-muted small">© 2025 Admin Dashboard</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function togglePassword() {
        const password = document.getElementById('password');
        const toggleIcon = document.getElementById('toggleIcon');
        if (password.type === 'password') {
            password.type = 'text';
            toggleIcon.classList.remove('bi-eye');
            toggleIcon.classList.add('bi-eye-slash');
        } else {
            password.type = 'password';
            toggleIcon.classList.remove('bi-eye-slash');
            toggleIcon.classList.add('bi-eye');
        }
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
