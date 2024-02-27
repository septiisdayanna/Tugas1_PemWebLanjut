<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Nilai</title>
    <!-- Tambahkan link CSS Bootstrap di sini -->
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
            font-size: larger;
        }

        .card-header {
            text-align: center;
            font-size: larger;
            color: #fbe4d8;
            font-weight: 500;
            background-color: #854f6c;
        }

        .btn-hitung {
            display: block;
            margin: 0 auto;
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
                Input Nilai
            </div>
            <div class="card-body">
                <form action="Hasil.php" method="post" novalidate>
                    <div class="form-group">
                        <label for="participation">Partisipasi:</label>
                        <input type="text" class="form-control" id="participation" name="participation" required>
                    </div>
                    <div class="form-group">
                        <label for="assignment">Tugas:</label>
                        <input type="text" class="form-control" id="assignment" name="assignment" required>
                    </div>
                    <div class="form-group">
                        <label for="midterm">UTS:</label>
                        <input type="text" class="form-control" id="midterm" name="midterm" required>
                    </div>
                    <div class="form-group">
                        <label for="final">UAS:</label>
                        <input type="text" class="form-control" id="final" name="final" required>
                    </div>
                    <button type="submit" class="btn btn-hitung btn-block">Hitung</button>
                </form>
            </div>
            <?php
            if (isset($_GET['error'])) {
                echo '<div class="alert alert-danger mt-3" role="alert">';
                echo $_GET['error'];
                echo '</div>';
            }
            ?>
        </div>
    </div>
</body>
</html>