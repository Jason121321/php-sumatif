<?php
session_start();
require 'KoneksiDB/function.php'; // file koneksi kamu

$otp_sent = $_SESSION['otp'] ?? '';
$email = $_SESSION['email_verifikasi'] ?? '';

if (isset($_POST['verify'])) {
    $user_otp = $_POST['otp'] ?? '';

    if ($user_otp == $otp_sent) {
        // Update user verification status
        global $db_link;
        $email = mysqli_real_escape_string($db_link, $email);
        $update = mysqli_query($db_link, "UPDATE user SET is_active = 1 WHERE email = '$email'");

        if ($update) {
            $_SESSION['login'] = true;
            echo "<script>window.location.href='home.php';</script>";
            unset($_SESSION['otp']);
            unset($_SESSION['email_verifikasi']);
        } else {
            $error = "Database error: could not update verification status.";
        }
    } else {
        $error = "Invalid OTP. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Verify OTP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #6f42c1, #6610f2);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }
        .card {
            border-radius: 1rem;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow p-4">
                <h3 class="text-center mb-4">OTP Verification</h3>

                <?php if (!empty($success)): ?>
                    <div class="alert alert-success"><?= $success ?></div>
                <?php elseif (!empty($error)): ?>
                    <div class="alert alert-danger"><?= $error ?></div>
                <?php endif; ?>

                <form method="post" autocomplete="off">
                    <div class="mb-3">
                        <label for="otp" class="form-label">Enter the OTP sent to <strong><?= htmlspecialchars($email) ?></strong></label>
                        <input type="text" name="otp" id="otp" class="form-control" required maxlength="6" pattern="\d{6}">
                    </div>
                    <div class="d-grid">
                        <button type="submit" name="verify" class="btn btn-primary">Verify OTP</button>
                    </div>
                </form>


                <div class="mt-3 text-center">
                    <small>Didn’t receive the code? <a href="resend_otp.php">Resend OTP</a></small>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
