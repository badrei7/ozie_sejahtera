<?php 
    require "session.php";
    require "../koneksi.php";

    $queryKategori = mysqli_query($con, "SELECT * FROM kategori");
    $jumlahKategori = mysqli_num_rows($queryKategori);

    $queryProduk = mysqli_query($con, "SELECT * FROM produk");
    $jumlahProduk = mysqli_num_rows($queryProduk);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome/css/fontawesome.min.css">
    <style>
        .kotak {
            border: solid;
        }

        .summary-kategori {
            background-color: #0a6b4a;
            border-radius: 15px;
        }

        .summary-produk {
            background-color: #0a516b;
            border-radius: 15px;
        }

        .no-decoration {
            text-decoration: none;
        }

        .no-decoration:hover {
            background-color: black;
        }
    </style>
    <title>Home</title>
</head>
<body>
    <?php require "navbar.php"; ?>

    <div class="container mt-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <a class="no-decoration text-muted" href="../adminpanel"><i class="fas fa-home"></i> Home</a>
                </li>
            </ol>
        </nav>
        <h2>Halo <?php echo $_SESSION['username']; ?></h2>

        <div class="container mt-5 ">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-12 mb-3">
                    <div class="summary-kategori p-3">
                        <div class="row">
                            <div class="col-6">
                                <i class="fas fa-align-justify fa-7x text-black-50"></i>
                            </div>
                            <div class="col-6 text-white">
                                <h3 class="fs-2" >Kategori</h3>
                                <p class="fs-4" ><?= $jumlahKategori; ?> Kategori</p>
                                <p><a href="kategori.php" class="text-white no-decoration" >Detail</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-6 col-12 mb-3">
                    <div class="summary-produk p-3">
                    <div class="row">
                        <div class="col-6">
                            <i class="fas fa-box fa-7x text-black-50"></i>
                        </div>
                        <div class="col-6 text-white">
                            <h3 class="fs-2" >Produk</h3>
                            <p class="fs-4" ><?= $jumlahProduk; ?> Produk</p>
                            <p><a href="produk.php" class="text-white no-decoration" >Detail</a></p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="../bootstrap/js/bootstrap.min.js" ></script>
    <script src="../fontawesome/js/all.min.js" ></script>
</body>
</html>