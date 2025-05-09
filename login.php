<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Jika pakai Composer
require 'KoneksiDB/function.php';

global $db_link;

if(isset($_COOKIE['id']) && isset($_COOKIE['key'])){
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    $result = mysqli_query($db_link, "SELECT * FROM user WHERE id = '$id'");
    $row = mysqli_fetch_assoc($result);

    if($key === hash('sha256', $row['username'])){
        $_SESSION['login'] = true;
    }
}

if(isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $result = mysqli_query($db_link,"SELECT * FROM user WHERE email ='$email'");

    if(mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password,$row["password"])) {


            $otp = rand(100000, 999999); // Generate 6-digit OTP
            $_SESSION['otp'] = $otp;
            $_SESSION['email_verifikasi'] = $email;

            $mail = new PHPMailer(true);

            try {
                // Server settings
                $mail->isSMTP();
                $mail->Host       = 'smtp.gmail.com'; // Ganti dengan host SMTP kamu
                $mail->SMTPAuth   = true;
                $mail->Username   = 'mailleegaming888@gmail.com'; // Email pengirim
                $mail->Password   = 'zksz dakw aaur ipei';    // Password email pengirim
                $mail->SMTPSecure = 'tls';
                $mail->Port       = 587;

                // Recipients
                $mail->setFrom('mailleegaming888@gmail.com', 'Jason sairyo');
                $mail->addAddress($email); // Email user

                // Content
                $mail->isHTML(true);
                $mail->Subject = 'Your OTP Code';
                $mail->Body    = "Your OTP verification code is: <b>$otp</b>";

                $mail->send();
                echo 'OTP sent successfully.';
            } catch (Exception $e) {
                echo "Mailer Error: {$mail->ErrorInfo}";
            }

            if(isset($_POST["remember"])){
            setcookie('id',$row['id'], time() +60);
            setcookie('key', hash('sha256', $row['email']), time() +60);
            }

            $_SESSION["login"] = true;

            header("Location: verify.php");
            exit;
        }



    }
    $error = true;
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Userpages</title>
    <!--  Mystyle  -->
    <link rel="stylesheet" href="CSS/Login.css"/>

    <!--  Bootstrap v5.2.3  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Boxicons   -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!--  FontFamily  -->
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
                    <div class="fw-bold">Log In</div>
                    <p class="text-secondary">Get access to your account</p>
                </div>

                <button class="btn btn-outline-secondary btn-lg w-100 mb-3">
                    <i class='bx bxl-google text-danger me-1 fs-6'></i> Login with Google
                </button>

                <button class="btn btn-outline-secondary btn-lg w-100">
                    <i class='bx bxl-facebook text-primary me-1 fs-6'></i>     Login with Facebook
                </button>

                <div class="position-relative">
                    <hr class="text-secondary divider">
                    <div class="divider-content-center">or</div>
                </div>

                <form method="POST">
                    <div class="input-group mb-3">
                        <span class="input-group-text">
                           <i class='bx bxl-gmail'></i>
                        </span>

                        <input type="email" name="email" id="email" class="form-control form-control-lg fs-6" placeholder="Email" required/>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">
                             <i class='bx bx-key' ></i>
                        </span>

                        <input type="password" name="password" id="password" class="form-control form-control-lg fs-6" placeholder="Password" required/>

                    </div>

                    <?php if(isset($error)) :?>
                        <p style="color:red; font-style:italic;">email / password salah</p>
                    <?php endif;?>


                    <div class="input-group mb-3 d-flex justify-content-between">
                        <div class="d-flex justify-content-between  ">
                            <input type="checkbox" name="remember" id="remember">
                            <label for="rememberMe" class="ms-2 mb-0">Remember Me</label>
                        </div>
                        <div>
                            <small><a href="forgot.php">Forgot Password?</a></small>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg w-100 mb-3"  name="login" id="login" >Login</button>
                </form>

                <div class="text-center">
                    <small>Don't have an account? <a href="register.php" class="fw-bold">Sign Up</a></small>
                </div>

            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>