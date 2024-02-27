<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NilaiController extends Controller
{
    public function index()
    {
        return view('nilai.index');
    }

    public function hitung(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'partisipasi' => 'required|numeric|between:0,100',
            'tugas' => 'required|numeric|between:0,100',
            'uts' => 'required|numeric|between:0,100',
            'uas' => 'required|numeric|between:0,100',
        ], [
            'required' => 'Kolom :attribute tidak boleh kosong.',
            'numeric' => 'Kolom :attribute harus berupa angka.',
            'between' => 'Nilai :attribute harus dalam rentang 0 - 100.',
        ], [
            'partisipasi' => 'Partisipasi',
            'tugas' => 'Tugas',
            'uts' => 'UTS',
            'uas' => 'UAS',
        ]);
        
        
        if ($validator->fails()) {
            return redirect('/')
                        ->withErrors($validator)
                        ->withInput();
        }

        $partisipasi = $request->input('partisipasi');
        $tugas = $request->input('tugas');
        $uts = $request->input('uts');
        $uas = $request->input('uas');

        // Hitung Nilai Akhir (NA)
        $na = ($partisipasi * 0.2) + ($tugas * 0.3) + ($uts * 0.2) + ($uas * 0.3);

        // Konversi Nilai Huruf (NH)
        $nh = $this->konversiNilaiHuruf($na);

        return view('nilai.hasil', compact('na', 'nh'));
    }

    private function konversiNilaiHuruf($na)
    {
        if ($na >= 85) {
            return 'A';
        } elseif ($na >= 80) {
            return 'A-';
        } elseif ($na >= 75) {
            return 'B+';
        } elseif ($na >= 70) {
            return 'B';
        } elseif ($na >= 65) {
            return 'B-';
        } elseif ($na >= 60) {
            return 'C+';
        } elseif ($na >= 55) {
            return 'C';
        } elseif ($na >= 40) {
            return 'D';
        } else {
            return 'E';
        }
    }
}
