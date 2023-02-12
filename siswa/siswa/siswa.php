<?php
session_start();
if(empty($_SESSION['nisn'])){
    echo "<script>alert('Maaf anda belum login'); window.location.assign('../index.php')</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa - Aplikasi Pembayaran SPP</title>
    <link rel="stylesheet" href="../css/bootstrap.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-5">
        
        <h3>Aplikasi Pembayaran SPP</h3>
        <div class="alert alert-info">
            Ando Login Sebagai Siswa <b><?= $_SESSION['nama'] ?></b> Aplikasi Pembayaran SPP
        </div>
        <a href="siswa.php" class="btn btn-primary"> Siswa</a>
        <a href="siswa.php?url=logout" class="btn btn-primary"> Logout</a>

        <div class="card mt-2">
            <div class="card-body">
                <!-- Isi Web -->
                <?php
                    $file = @$_GET['url'];
                    if(empty($file)) {
                        echo "<h4>Selamat Datang Di Halaman Siswa.</h4>";
                        echo "<p>Aplikasi Pembayaran SPP digunakan untuk mempermudah dalam mencatat pembayaran siswa / siswi di sekolah.</p>";
                        echo "</hr>";
                        include 'history-pembayaran.php';
                    } else {
                        include $file . '.php';
                    }
                ?>
            </div>
        </div>

    </div>

<script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>