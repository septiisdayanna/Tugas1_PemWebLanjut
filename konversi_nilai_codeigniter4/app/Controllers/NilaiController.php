<?php

namespace App\Controllers;

use App\Models\NilaiModel;

class NilaiController extends BaseController
{
    public function index()
    {
        return view('nilai_form');
    }

    public function hitung()
    {
        $validation = \Config\Services::validation();
        
        $rules = [
            'partisipasi' => [
                'label' => 'Nilai Partisipasi',
                'rules' => 'required|numeric|greater_than_equal_to[0]|less_than_equal_to[100]',
                'errors' => [
                    'required' => 'Kolom {field} harus diisi.',
                    'numeric' => 'Kolom {field} harus berupa angka.',
                    'greater_than_equal_to' => 'Kolom {field} harus memiliki nilai antara 0 dan 100.',
                    'less_than_equal_to' => 'Kolom {field} harus memiliki nilai antara 0 dan 100.'
                ]
            ],
            'tugas' => [
                'label' => 'Nilai Tugas',
                'rules' => 'required|numeric|greater_than_equal_to[0]|less_than_equal_to[100]',
                'errors' => [
                    'required' => 'Kolom {field} harus diisi.',
                    'numeric' => 'Kolom {field} harus berupa angka.',
                    'greater_than_equal_to' => 'Kolom {field} harus memiliki nilai antara 0 dan 100.',
                    'less_than_equal_to' => 'Kolom {field} harus memiliki nilai antara 0 dan 100.'
                ]
            ],
            'uts' => [
                'label' => 'Nilai UTS',
                'rules' => 'required|numeric|greater_than_equal_to[0]|less_than_equal_to[100]',
                'errors' => [
                    'required' => 'Kolom {field} harus diisi.',
                    'numeric' => 'Kolom {field} harus berupa angka.',
                    'greater_than_equal_to' => 'Kolom {field} harus memiliki nilai antara 0 dan 100.',
                    'less_than_equal_to' => 'Kolom {field} harus memiliki nilai antara 0 dan 100.'
                ]
            ],
            'uas' => [
                'label' => 'Nilai UAS',
                'rules' => 'required|numeric|greater_than_equal_to[0]|less_than_equal_to[100]',
                'errors' => [
                    'required' => 'Kolom {field} harus diisi.',
                    'numeric' => 'Kolom {field} harus berupa angka.',
                    'greater_than_equal_to' => 'Kolom {field} harus memiliki nilai antara 0 dan 100.',
                    'less_than_equal_to' => 'Kolom {field} harus memiliki nilai antara 0 dan 100.'
                ]
            ],
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $nilaiModel = new NilaiModel();
        $partisipasi = $this->request->getPost('partisipasi');
        $tugas = $this->request->getPost('tugas');
        $uts = $this->request->getPost('uts');
        $uas = $this->request->getPost('uas');

        $result = $nilaiModel->hitungNilai($partisipasi, $tugas, $uts, $uas);

        return view('nilai_hasil', $result);
    }
}
