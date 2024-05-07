<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Peminjaman Buku Perpustakaaan UPI Purwakarta</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <!--navbar-->
  <nav class="navbar navbar-expand-lg sticky-top" style="background-color: #e3f2fd;">

      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="https://icsdp-conference.upi.edu/wp-content/uploads/2022/07/upi-logo-putih-Copy.png" alt="Perpustakaaan" width="30" height="30">Perpustakaan</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="data_buku.php">Buku</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="data_mahasiswa.php">Mahasiswa</a>
            </li>
          </ul>
        </div>
      </div>
  </nav>
  <!--akhir navbar-->

  <!--content-->
  <div class="container" style="min-height: 520px;">
    <div class="row">
      <div class="col-lg-100">
        <div class="jumbotron jumbotron-fluid">
          <div class="container text-center">
            <h1 class="display-4">Selamat Datang</h1>
            <h1 class="display-4">di Sistem Peminjaman Buku Perpustakaaan UPI Kampus di Purwakarta</h1>
            <h4 class="lead">Sistem peminjaman buku ini menggunakan fingerprint sebagai autentikasi data diri mahasiswa.
              Sebelum melakukan peminjaman pastikan telah mendaftarkan sidik jari terlebih dahulu kepada penjaga perpustakaan!</h4>
          </div>
        </div>
      </div>
      <div class="container text-center">
        <div class="row align-items-center">
          <div class="col">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Peminjaman Buku</h5>
                <p class="card-text">Pastikan sidik jari anda telah terdaftar pada sistem</p>
                <a href="login.php" class="btn btn-primary">Mulai</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <style>
  .navbar-brand img{
    width: 30px;
    height: 30px;
    margin-right: 15px;
  }
  .row {
    padding : 20px;
  }
  </style>
  <!--akhir content-->
  <!--footer-->
  <footer class="mt-2 p-3 text-center" style="background-color: #e3f2fd;" style="color: black;font-weight: bold;">
    <p>&copy; Sistem Peminjaman Buku Perpustakaan UPI Kampus di Purwakarta 2024</p>
  </footer>
  <!--akhir footer-->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>
</body>

</html>