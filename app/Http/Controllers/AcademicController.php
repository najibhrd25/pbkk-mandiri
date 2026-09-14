<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcademicController extends Controller
{
    /**
     * Halaman Academic Journey (PRD F-04)
     */
    public function index()
    {
        $semesters = [
            [
                'semester' => 'Semester 1',
                'year' => 'Gasal 2024/2025',
                'sks' => 19,
                'gpa' => 3.82,
                'status' => 'Selesai',
                'highlights' => 'Dasar Pemrograman, Matematika Diskrit, Struktur Data Dasar, Logika Komputasi.',
            ],
            [
                'semester' => 'Semester 2',
                'year' => 'Genap 2024/2025',
                'sks' => 20,
                'gpa' => 3.88,
                'status' => 'Berjalan',
                'highlights' => 'Pemrograman Berbasis Kerangka Kerja (PBKK), Basis Data, Sistem Operasi, Algoritma Lanjut.',
            ],
        ];

        $overall = [
            'cumulative_gpa' => 3.85,
            'total_credits' => 39,
            'completed_credits' => 19,
            'current_credits' => 20,
            'max_study_period' => '8 Semester',
        ];

        return view('academic.index', compact('semesters', 'overall'));
    }

    /**
     * Kalkulator Rata-rata IPK Mahasiswa (PRD F-05 / Challenge A+)
     * Route: /hitung-ipk/{ip1}/{ip2}
     */
    public function calculateGpa(string $ip1, string $ip2)
    {
        // Validasi numeric dan rentang nilai 0.00 <= IP <= 4.00
        $valid = is_numeric($ip1) && is_numeric($ip2);
        $val1 = (float) $ip1;
        $val2 = (float) $ip2;

        $inRange = $val1 >= 0.0 && $val1 <= 4.0 && $val2 >= 0.0 && $val2 <= 4.0;

        $isValid = $valid && $inRange;
        $average = $isValid ? round(($val1 + $val2) / 2, 2) : null;

        $result = [
            'ip1' => $ip1,
            'ip2' => $ip2,
            'val1' => $val1,
            'val2' => $val2,
            'average' => $average,
            'isValid' => $isValid,
            'error_message' => !$valid ? 'Parameter IP harus berupa angka.' : (!$inRange ? 'Nilai IP harus berada pada rentang 0.00 hingga 4.00.' : null),
            'predicate' => $isValid ? ($average >= 3.5 ? 'Dengan Pujian (Cum Laude)' : ($average >= 3.0 ? 'Sangat Memuaskan' : 'Memuaskan')) : null
        ];

        return view('academic.calculator', compact('result'));
    }
}
