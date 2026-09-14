<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Landing Page / Beranda Utama (PRD F-01)
     */
    public function index()
    {
        $student = [
            'name' => 'Arya Rangga',
            'nrp' => '5025241072',
            'major' => 'S1 Teknik Informatika',
            'faculty' => 'Fakultas Teknologi Elektro dan Informatika Cerdas (FTEIC)',
            'university' => 'Institut Teknologi Sepuluh Nopember (ITS)',
            'batch' => '2024',
            'status' => 'Mahasiswa Aktif',
            'bio' => 'Mahasiswa Departemen Teknik Informatika ITS angkatan 2024 yang memiliki antusiasme tinggi terhadap rekayasa perangkat lunak modern, arsitektur web berbasis kerangka kerja, dan kecerdasan artifisial otonom (Agentic AI).',
        ];

        $quick_stats = [
            ['label' => 'Total Mata Kuliah', 'value' => '18 SKS', 'desc' => 'Semester 2 Berjalan'],
            ['label' => 'IPK Kumulatif', 'value' => '3.85', 'desc' => 'Skala 4.00'],
            ['label' => 'Active Agent', 'value' => 'Academic Agent', 'desc' => 'Concept Prototype'],
            ['label' => 'Routing Mode', 'value' => 'Laravel 12', 'desc' => 'Named Routes & Constraints'],
        ];

        $routes_demonstrated = [
            ['type' => 'Static Route', 'uri' => '/', 'name' => 'home', 'status' => 'Mandatory P0'],
            ['type' => 'Required Param + Regex', 'uri' => '/mahasiswa/{nrp}', 'name' => 'student.show', 'status' => 'Mandatory & Regex P1'],
            ['type' => 'Optional Parameter', 'uri' => '/agent/{tema?}', 'name' => 'agent.show', 'status' => 'Mandatory P0'],
            ['type' => 'GPA Calculator', 'uri' => '/hitung-ipk/{ip1}/{ip2}', 'name' => 'academic.gpa.calculate', 'status' => 'Challenge P1'],
            ['type' => 'Grouped Prefix', 'uri' => '/dashboard/*', 'name' => 'dashboard.*', 'status' => 'Challenge P1'],
            ['type' => 'Fallback Handler', 'uri' => '/*', 'name' => 'Route::fallback', 'status' => 'Challenge P1'],
        ];

        return view('home', compact('student', 'quick_stats', 'routes_demonstrated'));
    }
}
