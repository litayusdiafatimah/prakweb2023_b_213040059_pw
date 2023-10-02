<?php 

require 'functions.php';
// mendapatkan id film dari url
$id = $_GET["id"];
$buku = query("SELECT * FROM buku join kategori on kategori.id_kategori = buku.id_kategori WHERE id_buku = $id");
 
// tombol cari ditekan
if( isset($_POST["cari"]) ) {
  $buku = cari($_POST["keyword"]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark shadow-sm" style="background-color: #243A73">
      <div class="container">
        <a class="navbar-brand" href="index.php" Blaka><strong>Bukuku</strong></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
          </ul>
        </div>
      </div>
    </nav>
    <section class="kontent">
    <div class="container mt-4">
    <h1> <strong> Details</strong></h1>

       <div class="row">
       <?php foreach($buku as $f) :?>
           <div class="col-md-6 text-center mb-5">
               <img src="img/<?php echo $f["gambar"]; ?>"alt="" class="img-responsive mt-5" width="300" height="auto">
           </div>

          
        <div class="col-md-5">
            <h1><strong><?php echo $f["judul_buku"] ?></strong></h1>

            <h5 class="mt-4">Kategori :</h5>
            <h5 class="d-inline rounded-pill p-1 "><?php echo $f["nama_kategori"] ?></h5>

            <h5 class="mt-4">Judul Buku :</h5>
            <h5 class="d-inline rounded-pill p-1 "><?php echo $f["judul_buku"] ?></h5>
            
            <h5 class="mt-4">Penulis :</h5>
            <h5 ><?php echo $f["penulis"] ?></h5>
            
            <h5 class="mt-4">Penerbit :</h5>
            <h5><?php echo $f["penerbit"] ?></h5>

            <h5 class="mt-4">Tahun Terbit :</h5>
            <h5><?php echo $f["tahun_terbit"] ?></h5>
            <?php endforeach; ?>
            
            

            <form method="post">
                <div class="form-grup">
                    <div class="input-group">
                    </div>
                </div>

            </form>
        </div>
       </div>
    </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>