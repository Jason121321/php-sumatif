<?php
session_start();
require "KoneksiDB/function.php";

if(isset($_POST["save"]) ){

    if(pembeli($_POST) > 0 ){
        echo "
    <script>
    alert('Data berhasil di tambahkan');
    document.location.href = 'sellerhome.php';
    </script>
    ";
    }
    else {
        echo "
    <script> 
    alert('Data gagal di tambahkan');
        document.location.href = 'sellerhome.php';
    </script>
    ";
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Profile Full</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/profile.css">
</head>
<body>

<div class="container my-5">
    <div class="card shadow rounded-4">
        <div class="profile-cover"></div>
        <img src="images/Wanglinn.jpg" alt="Profile Picture" class="profile-avatar shadow">

        <div class="profile-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                    <h3 class="mb-0">Jason sairyo</h3>
                    <p class="text-muted">@jyz__1 • Web Developer</p>
                </div>
                <div>
                    <button class="btn btn-outline-primary me-2">Message</button>
                    <button class="btn btn-primary">Follow</button>
                    <a href="logoutseller.php" class="btn btn-primary">Log Out</a>
                </div>
            </div>

            <div class="row text-center mb-4">
                <div class="col-md-4 stat-box">
                    <h5>250</h5>
                    <small>Posts</small>
                </div>
                <div class="col-md-4 stat-box">
                    <h5>12K</h5>
                    <small>Followers</small>
                </div>
                <div class="col-md-4 stat-box">
                    <h5>680</h5>
                    <small>Following</small>
                </div>
            </div>

            <ul class="nav nav-tabs" id="profileTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="info-tab" data-bs-toggle="tab" data-bs-target="#info" type="button" role="tab">Info</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="activity-tab" data-bs-toggle="tab" data-bs-target="#activity" type="button" role="tab">Activity</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="settings-tab" data-bs-toggle="tab" data-bs-target="#settings" type="button" role="tab">Settings</button>
                </li>
            </ul>

            <div class="tab-content pt-3" id="profileTabsContent">
                <!-- Info Tab -->
                <div class="tab-pane fade show active" id="info" role="tabpanel">
                    <p><strong>Email:</strong> superrgaming@gmail.com</p>
                    <p><strong>Location:</strong> Pontianak, Kalimantan Barat</p>
                    <p><strong>Bio:</strong> Passionate about frontend development and user experience. Always learning, always building.</p>
                </div>

                <!-- Activity Tab -->
                <div class="tab-pane fade" id="activity" role="tabpanel">
                    <ul class="list-group">
                        <li class="list-group-item">Started following <strong>@carlodesigner</strong></li>
                        <li class="list-group-item">Developer Mr.Superrrr!</li>
                        <li class="list-group-item">Published a blog post on React Hooks</li>
                    </ul>
                </div>

                <!-- Settings Tab -->
                <div class="tab-pane fade" id="settings" role="tabpanel">
                    <form method="POST" action="">
                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" name="username" class="form-control" value="Jason sairyo">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Address</label>
                            <input type="email" name="address" class="form-control" value="superrgaming@gmail.com">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone Number</label>
                            <input type="text" name="phone_number" class="form-control" value="089123123123">
                        </div>
                        <button class="btn btn-success" name="save">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
