<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management System</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <!-- icon dan fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- tema css -->
    <link href="css/landingPage.css" rel="stylesheet">
	<title>Inventory Barang</title>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">SmartVentory</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#login">Sign in</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tentang">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Carousel -->
    <div id="homeCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="2"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="dark-overlay"></div>
            <img src="images/Gudang.jpg" class="d-block w-100" alt="Logistic 1">
        </div>
        <div class="carousel-item">
            <div class="dark-overlay"></div>
            <img src="images/Container.webp" class="d-block w-100" alt="Logistic 2">
        </div>
        <div class="carousel-item">
            <div class="dark-overlay"></div>
            <img src="images/Pertambangan.jpg" class="d-block w-100" alt="Logistic 3">
        </div>
    </div>
</div>


    <style>
        .carousel-item {
    position: relative;
}

.carousel-item img {
    position: relative;
    z-index: 1;
}

.carousel-item .dark-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5); /* Overlay dengan tingkat kegelapan 50% */
    z-index: 2;
    pointer-events: none; /* Membiarkan gesture tetap berfungsi pada elemen di bawahnya */
}

    </style>

    <!-- Login Section -->
    <div class="container" id="login">
        <div class="row justify-content-center">
            <div class="col-md-8 login-section text-center">
                <h1>MASUK SEBAGAI</h1>
                <div class="d-flex justify-content-center">
                    <a href="admin/login.php" class="btn btn-login btn-admin">
                        <i class="fas fa-user-shield me-2"></i>ADMIN
                    </a>
                    <a href="petugas/login_petugas.php" class="btn btn-login btn-petugas">
                        <i class="fas fa-user-tie me-2"></i>PETUGAS
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- About Section -->
    <div class="container" id="tentang">
        <div class="row justify-content-center">
            <div class="col-md-8 about-section text-center">
                <h1>About SmartVentory</h1>
                <p class="lead">Website inventory adalah aplikasi berbasis Web untuk mengatur dan mencatat keluar masuk barang di masing-masing gudang dalam satu perusahaan, yang meliputi pencatatan barang masuk dari Supplier dan pencatatan barang keluar.</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p class="mb-0">&copy; <span id="currentYear"></span> SmartVentory</p>
        </div>
    </footer>

    <!-- Bootstrap 5 JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('currentYear').textContent = new Date().getFullYear();
    </script>
</body>
</html>