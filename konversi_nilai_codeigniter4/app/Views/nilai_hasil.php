<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Hasil Perhitungan Nilai</title>
    <style>
        body {
            background-color: #dfaea1;
            padding: 20px;
            font-size: larger;
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
            color: #fffcf5;
            font-weight: 900;
            background-color: #374375;
        }

        .btn-kembali {
            background-color: #babde2;
            margin-top: 3%;
            color: #374375;
            font-weight: 500;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <span>Hasil Perhitungan Nilai</span>
            </div>
            <div class="card-body">
                <p class="card-text">Nilai Akhir (NA): <?= $na ?></p>
                <p class="card-text">Nilai Konversi Huruf (NH): <?= $nh ?></p>
                <a href="<?= base_url('/nilai_form') ?>" class="btn btn-kembali">Kembali</a>
            </div>
        </div>
    </div>
</body>

</html>