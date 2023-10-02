<?php 
session_start();

// if( !isset($_SESSION["login"]) ) {
//   header("Location: login.php");
//   exit;
// }

require 'functions.php';
$buku = query("SELECT * FROM buku join kategori on kategori.id_kategori = buku.id_kategori");

if (isset ($_POST["cari"]) ) {
    $buku = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />

    <!-- My CSS -->
    <link rel="stylesheet" href="style1.css" />

    <title>BUKUKU</title>
  </head>
  <body id="home">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #243A73">
      <div class="container">
        <a class="navbar-brand" href="#" Blaka><strong>Bukuku</strong></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="#gallery">Buku</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
  </div>

  
</div>


    <!-- Gallery -->
    <section id="gallery">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="container mt-5" id="section">
          <div class="category-title"  style="background-color: #fff; padding: 5px 10px;">
            <h1 class="text-center" style="margin-top: 5px;">Bukuku</h1>
          </div>
          <div class="row">
            <?php foreach($buku as $f) :?>
            <div class="col-lg-4 col-md-4 col-sm-4 col-4 mt-4">
              <div class="card text-center">
                <img src="img/<?= $f["gambar"];?>" class="card-img-top" alt="product1" height="500" width="200">
                <div class="card-body">
                  <h5 class="card-title text-center"><?= $f["judul_buku"];?></h5>
                  <h5 class="card-title text-center"><?= $f["penulis"];?></h5>
                  <a href="detail.php?id=<?= $f["id_buku"];?>" class="btn btn-primary d-grid">Selengkapnya</a>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
            </div>
          </div>
      </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,192L84.7,224L169.4,128L254.1,96L338.8,0L423.5,64L508.2,96L592.9,192L677.6,128L762.4,64L847.1,64L931.8,64L1016.5,192L1101.2,128L1185.9,224L1270.6,192L1355.3,256L1440,192L1440,320L1355.3,320L1270.6,320L1185.9,320L1101.2,320L1016.5,320L931.8,320L847.1,320L762.4,320L677.6,320L592.9,320L508.2,320L423.5,320L338.8,320L254.1,320L169.4,320L84.7,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Gallery -->




    <!-- Footer -->
    <footer class="text-white text-center pb-5" style="background-color: #243A73">
      <p>Dibuat oleh <i class="bi bi-suit-heart-fill text-danger"></i> by <a href="https://www.instagram.com/litaysdf/" class="text-white fw-bold">Lita ysdf</a></p>
    </footer>
    <!-- Akhir Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
  </body>
</html>