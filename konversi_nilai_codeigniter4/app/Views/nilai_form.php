<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Nilai</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #dfaea1;
        }

        .card {
            margin-top: 60px;
            width: 500px;
            margin-left: auto;
            margin-right: auto;
        }

        .card-header {
            text-align: center;
            font-size: larger;
            color: #fffcf5;
            font-weight: 900;
            background-color: #374375;
        }

        .btn-hitung {
            display: block;
            margin: 0 auto;
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
            <span style="font-size: larger;">Form Input Nilai</span>
        </div>
        <div class="card-body">
            <form action="<?= base_url('nilai/hitung') ?>" method="post" novalidate>
                <div class="form-inline">
                    <label for="partisipasi" class="form-label">Nilai Partisipasi:</label>
                    <input type="text" class="form-control" name="partisipasi" id="partisipasi" required>
                </div>        
                <div class="form-inline">
                    <label for="tugas" class="form-label">Nilai Tugas:</label>
                    <input type="text" class="form-control" name="tugas" id="tugas" required>
                </div>
                <div class="form-inline">
                    <label for="uts" class="form-label">Nilai UTS:</label>
                    <input type="text" class="form-control" name="uts" id="uts" required>
                </div>
                <div class="form-inline">
                    <label for="uas" class="form-label">Nilai UAS:</label>
                    <input type="text" class="form-control" name="uas" id="uas" required>
                </div>
                <button type="submit" class="btn btn-hitung">Hitung</button>
            </form>
            
            <!-- Pesan Kesalahan -->
            <?php if(session()->has('errors')): ?>
                <div class="alert alert-danger mt-3">
                    <ul>
                        <?php foreach (session('errors') as $error) : ?>
                            <li><?= $error ?></li>
                        <?php endforeach ?>
                    </ul>
                </div>
            <?php endif ?>
        </div>
    </div>  
</div>   
</body>
</html>
