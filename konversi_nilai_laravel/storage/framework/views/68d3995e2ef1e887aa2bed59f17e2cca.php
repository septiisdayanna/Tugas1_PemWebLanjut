<!DOCTYPE html>
<html>

<head>
    <title>Input Nilai</title>
    <!-- Tambahkan link CSS Bootstrap di sini -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #132d46;
        }

        .card {
            margin-top: 60px;
            width: 400px;
            margin-left: auto;
            margin-right: auto;
        }

        .card-header {
            text-align: center;
            font-size: larger;
            color: #191e29;
            font-weight: 700;
            background-color: #01c38d;
        }

        .btn-hitung {
            display: block;
            margin: 0 auto;
            background-color: #01c38d;
            margin-top: 3%;
            color: #191e29;
            font-weight: 430;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <span>Form Input Nilai</span>
            </div>
            <div class="card-body">
                <form method="post" action="/hitung" novalidate>
                    <?php echo csrf_field(); ?>
                    <div class="form-inline">
                        <label for="partisipasi" class="form-label">Nilai Partisipasi:</label>
                        <input type="text" name="partisipasi" class="form-control" required>
                    </div>
                    <div class="form-inline">
                        <label for="tugas" class="form-label">Nilai Tugas:</label>
                        <input type="text" name="tugas" class="form-control" required>
                    </div>
                    <div class="form-inline">
                        <label for="uts" class="form-label">Nilai UTS:</label>
                        <input type="text" name="uts" class="form-control" required>
                    </div>
                    <div class="form-inline">
                        <label for="uas" class="form-label">Nilai UAS:</label>
                        <input type="text" name="uas" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-hitung">Hitung</button>
                </form>

                <!-- pesan kesalahan -->
                <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>

</html><?php /**PATH C:\xampp\htdocs\konversi_nilai_laravel\Konversi_Nilai_Laravel\resources\views/nilai/index.blade.php ENDPATH**/ ?>