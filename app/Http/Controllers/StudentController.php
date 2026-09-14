<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Menampilkan Profil Mahasiswa Berdasarkan Parameter Wajib NRP (PRD F-02 & F-03)
     */
    public function show(string $nrp)
    {
        $student = [
            'name' => 'Mohammad Najib Bahrudin',
            'nrp' => $nrp,
            'email' => 'najib.bahrudin@student.its.ac.id',
            'major' => 'S1 Teknik Informatika',
            'department' => 'Departemen Teknik Informatika',
            'faculty' => 'Fakultas Teknologi Elektro dan Informatika Cerdas (FTEIC)',
            'university' => 'Institut Teknologi Sepuluh Nopember (ITS)',
            'batch' => '2024',
            'class' => 'Pemrograman Berbasis Kerangka Kerja (PBKK) — Kelas B',
            'status' => 'Mahasiswa Aktif',
            'academic_interest' => 'Full-Stack Web Architecture, Distributed Systems, Autonomous Agentic AI',
            'current_focus' => 'Penerapan arsitektur Laravel modern dan perancangan persistent context memory untuk coding agent.',
            'skills' => [
                'PHP & Laravel Framework',
                'Blade & Modern CSS Architecture',
                'Agentic Workflow & Context Protocol',
                'Relational Database Modeling',
                'Git Version Control & CI/CD Basics',
                'Object-Oriented & Domain-Driven Design'
            ],
            'education_timeline' => [
                ['period' => '2024 — Sekarang', 'role' => 'Mahasiswa S1 Teknik Informatika', 'inst' => 'Institut Teknologi Sepuluh Nopember (ITS)'],
                ['period' => '2021 — 2024', 'role' => 'Peminatan MIPA', 'inst' => 'SMA / Sekolah Menengah Atas'],
            ]
        ];

        return view('student.show', compact('student'));
    }
}
