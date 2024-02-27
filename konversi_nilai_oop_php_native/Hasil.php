<?php
require_once 'NilaiAkhir.php';
require_once 'NilaiKonversiHuruf.php';
require_once 'process.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Konversi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #522b52;
        }

        .card {
            margin-top: 60px;
            width: 600px;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
            font-size: larger;
        }

        .card-header {
            text-align: center;
            font-size: larger;
            color: #fbe4d8;
            font-weight: 500;
            background-color: #854f6c;
        }

        .btn-kembali {
            background-color: #2b124c;
            margin-top: 3%;
            color: #fbe4d8;
            font-weight: 430;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                Hasil Perhitungan
            </div>
            <div class="card-body">
                <p class="card-text">Nilai Akhir (NA): <?php echo $na; ?></p>
                <p class="card-text">Nilai Konversi Huruf (NH): <?php echo $nh; ?></p>
                <a href="index.php" class="btn btn-kembali">Kembali</a>
            </div>
        </div>
    </div>
</body>

</html>