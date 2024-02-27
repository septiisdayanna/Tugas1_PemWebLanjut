<?php
require_once 'NilaiAkhir.php';
require_once 'NilaiKonversiHuruf.php';

// Validate input values
$participation = $_POST['participation'];
$assignment = $_POST['assignment'];
$midterm = $_POST['midterm'];
$final = $_POST['final'];

$errors = [];

if ($participation === '') {
    $errors['participation'] = "Partisipasi tidak boleh kosong.";
} elseif (!is_numeric($participation) || $participation < 0 || $participation > 100) {
    $errors['participation'] = "Partisipasi harus berupa angka dan dalam rentang 0-100.";
}

if ($assignment === '') {
    $errors['assignment'] = "Tugas tidak boleh kosong.";
} elseif (!is_numeric($assignment) || $assignment < 0 || $assignment > 100) {
    $errors['assignment'] = "Tugas harus berupa angka dan dalam rentang 0-100.";
}

if ($midterm === '') {
    $errors['midterm'] = "UTS tidak boleh kosong.";
} elseif (!is_numeric($midterm) || $midterm < 0 || $midterm > 100) {
    $errors['midterm'] = "UTS harus berupa angka dan dalam rentang 0-100.";
}

if ($final === '') {
    $errors['final'] = "UAS tidak boleh kosong.";
} elseif (!is_numeric($final) || $final < 0 || $final > 100) {
    $errors['final'] = "UAS harus berupa angka dan dalam rentang 0-100.";
}

if (!empty($errors)) {
    $errorMessages = [];
    foreach ($errors as $field => $error) {
        $errorMessages[] = $error;
    }
    $errorString = implode('<br>', $errorMessages);
    header("Location: index.php?error=$errorString");
    exit();
}

// Calculate NA
$calculator = new NilaiAkhir($participation, $assignment, $midterm, $final);
$na = $calculator->calculateNA();

// Convert NA to NH
$converter = new NilaiKonversiHuruf();
$nh = $converter->convertToGrade($na);

// echo "Nilai Akhir (NA): $na<br>";
// echo "Nilai Konversi Huruf (NH): $nh";
?>
