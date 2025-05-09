<?php
require 'KoneksiDB/function.php';
global $db_link;

if(isset($_POST["register"])) {

    if (register($_POST) > 0) {
        echo "<script>
        alert('User berhasil di tambahkan');
        window.location.href='login.php';
        </script>";
    }
}
?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Userpages</title>
    <link rel="stylesheet" href="CSS/Register.css"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Serif&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Sour+Gummy:ital,wdth,wght@0,101.6,100..900;1,101.6,100..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
</head>
<body>

<div class="row vh-100 g-0">
    <div class="col-lg-6 position-relative d-none d-lg-block">
        <div class="bg-holder" style="background-image: url(images/matahari.jpg)"></div>
    </div>

    <div class="col-lg-6">
        <div class="row align-items-center justify-content-center h-100 g-0 px-4 px-sm-0">
            <div class="col col-sm-6 col-lg-7 col-xl-6">
                <a href="#" class="d-flex justify-content-center mb-4">
                    <img src="images/fox-removebg-preview.png" alt="" width="100"/>
                </a>

                <div class="text-center mb-5">
                    <div class="fw-bold fs-4">Register Seller</div>
                    <p class="text-secondary">Register to your account now</p>
                </div>

                <form action="" method="POST" autocomplete="off" >
                    <div class="input-group mb-3">
                        <span class="input-group-text">
                            <i class='bx bx-user'></i>
                        </span>

                        <input type="text" name="username" class="form-control form-control-lg fs-6"  placeholder="Username" required/>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">
                           <i class='bx bxl-gmail'></i>
                        </span>

                        <input type="email" name="email" class="form-control form-control-lg fs-6" placeholder="Email" required/>
                    </div>
                    <div class="input-group mb-4">
                        <span class="input-group-text">
                            <i class='bx bx-key' ></i>
                        </span>

                        <input type="password" name="password" class="form-control form-control-lg fs-6" placeholder="Password" required/>
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg w-100 mb-3" name="register">Register</button>
                </form>

                <div class="text-center">
                    <small>You have an account? <a href="logseller.php" class="fw-bold">Sign In</a></small>
                </div>

            </div>
        </div>
    </div>
</div>

</body>
</html>