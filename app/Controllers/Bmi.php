<?php

namespace App\Controllers;

use Exception;

use function PHPUnit\Framework\throwException;

class Bmi extends BaseController
{
    public function index(): string
    {
        $data["title"] = 'Kalkulator BMI';
        return view('bmi', $data);
    }
     public function hitung()
    {
        try {
            // Memeriksa apakah 'tb' dan 'bb' sudah diset sebelum menghitung
            if (isset($_GET['hitung'], $_GET['tb'], $_GET['bb'])) {
                $tb = $_GET['tb'];
                $bb = $_GET['bb'];
                $hasiltb = $_GET['tb']/100;

                // Memastikan tb dan bb adalah angka yang valid
                if (!is_numeric($hasiltb) || !is_numeric($bb)) {
                    throw new Exception("Tinggi badan dan berat badan harus berupa angka.");
                }

                // Memeriksa apakah hasiltb$hasiltb dan bb tidak nol sebelum menghitung
                if ($hasiltb <= 0 || $bb <= 0) {
                    throw new Exception("Tinggi badan dan berat badan harus lebih dari nol.");
                }

                $hasil = $bb / ($hasiltb * $hasiltb);
                $data['hasil'] = $hasil;
                $data['tb'] = $tb;
                $data['bb'] = $bb;
                $data["title"] = 'Kalkulator BMI';
                return view('bmi', $data);
            } else {
                // Tampilkan view tanpa hasil jika tidak ada data yang dikirimkan
                $data["title"] = 'Kalkulator BMI';
                return view('bmi', $data);
            }
        } catch (Exception $e) {
            // Tangani kesalahan dengan menampilkan pesan error
            $data['error_message'] = $e->getMessage();
            $data["title"] = 'Kalkulator BMI';
            return view('bmi', $data);
        }
    }
}
