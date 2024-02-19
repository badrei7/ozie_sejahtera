<?php 
    require "koneksi.php";
    $queryProduk = mysqli_query($con, "SELECT id, nama, harga, foto, detail FROM produk LIMIT 6");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Toko Ozie Sejahtera</title>
</head>
<body>
    <?php require "navbar.php"; ?>

    <div class="container-fluid banner d-flex align-items-center">
        <div class="container text-center mb-5 text-white">
            <h1>Toko Ozie Sejahtera</h1>
            <h3>Mau Cari Apa ?</h3>

            <div class="col-md-8 offset-md-2">
                <form action="produk.php" method="get">
                    <div class="input-group input-group-lg my-4">
                        <input type="text" class="form-control" placeholder="Nama barang" name="keyword">
                        <button type="submit" class="btn warna2 text-white">Telusuri</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- highlight kategori -->
    <div class="container-fluid py-5">
        <div class="container text-center">
            <h3>Kategori Terlaris</h3>
            
            <div class="row mt-5">
                <div class="col-md-4 mb-3">
                    <div class="highlighted-kategori kategori-baju-pria d-flex justify-content-center align-items-center">
                        <h4><a href="produk.php?kategori=baju pria" class="no-decoration" >Baju Pria</a></h4>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="highlighted-kategori kategori-baju-wanita d-flex justify-content-center align-items-center">
                        <h4><a href="produk.php?kategori=baju wanita" class="no-decoration" >Baju Wanita</a></h4>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="highlighted-kategori kategori-sepatu d-flex justify-content-center align-items-center">
                        <h4><a href="produk.php?kategori=Sepatu" class="no-decoration">Sepatu</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tentang Kami -->
    <div class="container-fluid warna3 py-5">
        <div class="container text-center">
            <h3>Tentang Kami</h3>
            <p class="fs-5 mt-3" >
            Selamat datang di Toko Ozie Sejahtera!

Kami adalah destinasi online yang menyediakan pakaian berkualitas dan kebutuhan sekolah dengan harga terjangkau. Dengan komitmen kami pada kualitas dan pelayanan pelanggan, Toko Ozie Sejahtera adalah pilihan terbaik untuk gaya dan pendidikan yang berkualitas. Temukan pilihan terbaik dan nikmati pengalaman berbelanja yang menyenangkan bersama kami!
            </p>
        </div>
    </div>

    <!-- Produk -->

    <div class="container-fluid py-5">
        <div class="container text-center">
            <h3>Produk</h3>

            <div class="row mt-5">
                <?php while($data = mysqli_fetch_array($queryProduk)) { ?>
                <div class="col-sm-6 col-md-4 mb-3">
                   <div class="card h-100">
                        <div class="image-box" >
                            <img src="image/<?= $data['foto'] ?>" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title"><?= $data['nama'] ?></h4>
                            <p class="card-text text-truncate "><?= $data['detail'] ?></p>
                            <p class="card-text text-harga"><?= $data['harga'] ?></p>
                            <a href="produk-detail.php?nama=<?= $data['nama'] ?>" class="btn warna2 text-white">Detail</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <a href="produk.php" class="btn btn-outline-warning mt-3">See More</a>        
        </div>
    </div>

    <!-- Footer -->
    <?php require "footer.php"; ?>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="fontawesome/js/all.min.js"></script>
</body>
</html>