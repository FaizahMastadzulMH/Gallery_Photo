<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Web Gallery</title>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/custom.css">
</head>

<body>
    <div class="masterhead" style="background-image: url('assets/bg/hi.jpeg');">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
            <div class="container">
                <a class="navbar-brand fw-bold text-black " href="index.php">GALLERY PHOTO</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse mt-2" id="navbarNavAltMarkup">
                    <div class="navbar-nav me-auto">

                    </div>
                    <a href="register.php" class="btn btn-outline-primary m-2">Daftar</a>
                    <a href="login.php" class="btn btn-outline-success m-2">Masuk</a>
                </div>
            </div>
        </nav>

        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card bg-transparent">
                        <div class="card-body bg-light bg-transparent">
                            <div class="text-center text-black fw-bold">
                                <h3>Regitrasi Akun</h3>
                            </div>
                            <form action="config/aksi_register.php" method="POST">
                                <input type="text" name="username" class="form-control" placeholder="Username" required><br>
                                <input type="password" name="password" class="form-control" placeholder="Password" required><br>
                                <input type="text" name="email" class="form-control" placeholder="Email" required><br>
                                <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap" required><br>
                                <input type="text" name="alamat" class="form-control" placeholder="Alamat" required><br>
                                <div class="d-grid mt-1">
                                    <button class="btn btn-primary" type="submit" name="kirim">Daftar</button>
                                </div>
                            </form><br>
                            <p class="text-center text-black">Sudah punya akun? <a href="login.php">Login disini</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="d-flex justify-content-center border-top mt-3 text-black bg-transparent fixed-bottom">
            <p>&copy; UKK RPL 2024 | Faizah Mastadzul M H</p>
        </footer>

        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>