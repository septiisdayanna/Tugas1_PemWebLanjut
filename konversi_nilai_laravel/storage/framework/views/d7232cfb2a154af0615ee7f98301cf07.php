<!DOCTYPE html>
<html>
<head>
    <title>Hasil Perhitungan Nilai</title>
    <!-- Tambahkan link CSS Bootstrap di sini -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #132d46;
            padding: 20px;
        }

        h2 {
            color: #6610f2;
        }

        p {
            margin-bottom: 10px;
        }

        .card {
            width: 500px;
            margin: 0 auto;
            text-align: center;
        }

        .card-header {
            text-align: center;
            font-size: larger;
            color: #191e29;
            font-weight: 900;
            background-color: #01c38d;
        }

        .btn-kembali {
            background-color: #01c38d;
            margin-top: 3%;
            color: #191e29;
            font-weight: 500;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card mt-5" style="width: 500px; margin: 0 auto;">
            <div class="card-header">
                <span>Hasil Perhitungan Nilai</span>
            </div>
            <div class="card-body">
                <p class="card-text">Nilai Akhir (NA): <?php echo e($na); ?></p>
                <p class="card-text">Nilai Konversi Huruf (NH): <?php echo e($nh); ?></p>
                <a href="/" class="btn btn-kembali">Kembali</a>
            </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\konversi_nilai_laravel\Konversi_Nilai_Laravel\resources\views/nilai/hasil.blade.php ENDPATH**/ ?>