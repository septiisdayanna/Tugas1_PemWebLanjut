<?php
namespace App\Models;

use CodeIgniter\Model;

class NilaiModel extends Model
{
    public function hitungNilai($partisipasi, $tugas, $uts, $uas)
    {
        // Lakukan perhitungan NA sesuai ketentuan
        $na = ($partisipasi * 0.2) + ($tugas * 0.3) + ($uts * 0.2) + ($uas * 0.3);

        // Konversi nilai huruf
        if ($na >= 85) {
            $nh = 'A';
        } elseif ($na >= 80) {
            $nh = 'A-';
        } elseif ($na >= 75) {
            $nh = 'B+';
        } elseif ($na >= 70) {
            $nh = 'B';
        } elseif ($na >= 65) {
            $nh = 'B-';
        } elseif ($na >= 60) {
            $nh = 'C+';
        } elseif ($na >= 55) {
            $nh = 'C';
        } elseif ($na >= 40) {
            $nh = 'D';
        } else {
            $nh = 'E';
        }

        return [
            'na' => $na,
            'nh' => $nh
        ];
    }
}
