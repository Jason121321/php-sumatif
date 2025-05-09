<?php
session_start();
if( !isset( $_SESSION["login"])){
    header("Location:login.php");
    exit;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ElectroStore</title>

    <!--  Bootstrap 5  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!--  Boxicons CSS  -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!--  MyStyle  -->
    <link rel="stylesheet" href="CSS/home.css"/>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container d-flex align-items-center">
        <a class="navbar-brand" href="#">ElectroStore</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#products">Products</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">About Me</a></li>
            </ul>


            <ul class="navbar-nav ms-auto">

                <li class="nav-item dropdown d-flex align-items-center">
                    <i class='bx bx-user text-white'></i>
                    <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown">
                        Profile
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                        <li><a class="dropdown-item" href="profile.php">View Profile</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>

                <a href="logseller.php" class="btn btn-outline-primary btn-primary text-light ms-3">Login Seller</a>

            <a href="logadmin.php" class="btn btn-outline-primary btn-light text-dark ms-3">Admin</a>

        </div>
    </div>
</nav>



<section class="hero">
    <div class="text-center">
        <h1>Welcome to ElectroStore</h1>
        <p>Find your best Electronic in Here!</p>
    </div>
</section>

<section class="py-5" id="products">
    <div class="container">
        <h2 class="text-center mb-4">Our Products</h2>
        <div class="row g-4">
            <!-- Produk 1 -->
            <div class="col-md-3">
                <div class="card product-card">
                    <img src="images/rice%20cooker.webp" class="card-img-top" alt="Rice Cooker X">
                    <div class="card-body">
                        <h5 class="card-title">Rice Coooker X</h5>
                        <p class="card-text">High-performance smartphone with amazing camera and battery life.</p>
                        <div class="star">
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                        </div>
                        <p>Rp 15.000.000</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
            </div>
            <!-- Produk 2 -->
            <div class="col-md-3">
                <div class="card product-card">
                    <img src="images/rice%20cooker.webp" class="card-img-top" alt="Rice Cooker 15">
                    <div class="card-body">
                        <h5 class="card-title">Rice Cooker 15</h5>
                        <p class="card-text">Powerful laptop for work, gaming, and productivity.</p>

                        <div class="star">
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                        </div>
                        <p>Rp 15.000.000</p>

                        <a href="#" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
            </div>
            <!-- Produk 3 -->
            <div class="col-md-3">
                <div class="card product-card">
                    <img src="images/rice%20cooker.webp" class="card-img-top" alt="Rice Cooker">
                    <div class="card-body">
                        <h5 class="card-title">Rice Cooker</h5>
                        <p class="card-text">Noise-cancelling, long battery life, and superb sound quality.</p>

                        <div class="star">
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                        </div>
                        <p>Rp 15.000.000</p>

                        <a href="#" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
            </div>
            <!-- Produk 4 -->
            <div class="col-md-3">
                <div class="card product-card">
                    <img src="images/rice%20cooker.webp" class="card-img-top" alt="Rice Cooker Pro">
                    <div class="card-body">
                        <h5 class="card-title">Rice Cooker Pro</h5>
                        <p class="card-text">Faster cooking with smart timer and energy-saving mode.</p>
                        <div class="star">
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                        </div>
                        <p>Rp 15.000.000</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
            </div>
            <!-- Produk 5 -->
            <div class="col-md-3">
                <div class="card product-card">
                    <img src="images/rice%20cooker.webp" class="card-img-top" alt="Rice Cooker Mini">
                    <div class="card-body">
                        <h5 class="card-title">Rice Cooker Mini</h5>
                        <p class="card-text">Compact and lightweight, perfect for travel or single servings.</p>
                        <div class="star">
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                        </div>
                        <p>Rp 15.000.000</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
            </div>
            <!-- Produk 6 -->
            <div class="col-md-3">
                <div class="card product-card">
                    <img src="images/rice%20cooker.webp" class="card-img-top" alt="Rice Cooker Deluxe">
                    <div class="card-body">
                        <h5 class="card-title">Rice Cooker Deluxe</h5>
                        <p class="card-text">Luxury design with advanced features and premium build.</p>

                        <div class="star">
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                        </div>
                        <p>Rp 15.000.000</p>

                        <a href="#" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
            </div>

            <!--   Produk 7-->
            <div class="col-md-3">
                <div class="card product-card">
                    <img src="images/rice%20cooker.webp" class="card-img-top" alt="Rice Cooker Deluxe">
                    <div class="card-body">
                        <h5 class="card-title">Rice Cooker Deluxe</h5>
                        <p class="card-text">Luxury design with advanced features and premium build.</p>

                        <div class="star">
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                        </div>
                        <p>Rp 15.000.000</p>

                        <a href="#" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
            </div>

            <!--   Produk 8-->

            <div class="col-md-3">
                <div class="card product-card">
                    <img src="images/rice%20cooker.webp" class="card-img-top" alt="Rice Cooker Deluxe">
                    <div class="card-body">
                        <h5 class="card-title">Rice Cooker Deluxe</h5>
                        <p class="card-text">Luxury design with advanced features and premium build.</p>

                        <div class="star">
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                        </div>
                        <p>Rp 15.000.000</p>

                        <a href="#" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
            </div>

            <!--   Produk 9-->

            <div class="col-md-3">
                <div class="card product-card">
                    <img src="images/rice%20cooker.webp" class="card-img-top" alt="Rice Cooker Deluxe">
                    <div class="card-body">
                        <h5 class="card-title">Rice Cooker Deluxe</h5>
                        <p class="card-text">Luxury design with advanced features and premium build.</p>

                        <div class="star">
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                        </div>
                        <p>Rp 15.000.000</p>

                        <a href="#" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
            </div>

            <!--   Produk 10-->

            <div class="col-md-3">
                <div class="card product-card">
                    <img src="images/rice%20cooker.webp" class="card-img-top" alt="Rice Cooker Deluxe">
                    <div class="card-body">
                        <h5 class="card-title">Rice Cooker Deluxe</h5>
                        <p class="card-text">Luxury design with advanced features and premium build.</p>

                        <div class="star">
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                        </div>
                        <p>Rp 15.000.000</p>

                        <a href="#" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
            </div>

            <!--   Produk 11-->

            <div class="col-md-3">
                <div class="card product-card">
                    <img src="images/rice%20cooker.webp" class="card-img-top" alt="Rice Cooker Deluxe">
                    <div class="card-body">
                        <h5 class="card-title">Rice Cooker Deluxe</h5>
                        <p class="card-text">Luxury design with advanced features and premium build.</p>

                        <div class="star">
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                        </div>
                        <p>Rp 15.000.000</p>

                        <a href="#" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
            </div>

            <!--   Produk 12 -->

            <div class="col-md-3">
                <div class="card product-card">
                    <img src="images/rice%20cooker.webp" class="card-img-top" alt="Rice Cooker Deluxe">
                    <div class="card-body">
                        <h5 class="card-title">Rice Cooker Deluxe</h5>
                        <p class="card-text">Luxury design with advanced features and premium build.</p>

                        <div class="star">
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                        </div>
                        <p>Rp 15.000.000</p>

                        <a href="#" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
    </div>


</section>


<section class="py-5 text-white mt-5" id="about" style="background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-md-5 text-center mb-4 mb-md-0">
                <img src="images/matahari.jpg" class="img-fluid border border-4 br-4" alt="About Me" style="animation: float 3s ease-in-out infinite;">
            </div>

            <div class="col-md-7">
                <h2 class="mb-3"><i class="bi bi-person-circle me-2"></i>About Me</h2>
                <p class="fs-5">
                    I'm the creator of <strong>ElectroStore</strong> — where passion meets innovation. My goal is to bring the latest tech to your doorstep with ease and reliability.
                </p>
                <ul class="list-unstyled mt-4">
                    <li><i class="bi bi-check-circle-fill text-success me-2"></i> Technology Enthusiast</li>
                    <li><i class="bi bi-check-circle-fill text-success me-2"></i> Web Developer</li>
                    <li><i class="bi bi-check-circle-fill text-success me-2"></i> E-commerce Electronic</li>
                </ul>
                <a href="#contact" class="btn btn-outline-light mt-4"><i class="bi bi-envelope"></i> Contact Me</a>
            </div>
        </div>
    </div>
</section>



<footer class="bg-dark text-white text-center py-3" id="contact">
    <p>Contact us at <a href="mailto:support@electrostore.com" class="text-white">support@electrostore.com</a></p>
    <p>&copy; 2025 ElectroStore. All rights reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
