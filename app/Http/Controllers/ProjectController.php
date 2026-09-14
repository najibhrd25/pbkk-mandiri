<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Halaman Portofolio Project (PRD F-06)
     */
    public function index()
    {
        $projects = [
            [
                'id' => 'PJ-2026-001',
                'title' => 'Academic Agent Workspace',
                'category' => 'Web Application & Routing Sandbox',
                'status' => 'ACTIVE',
                'status_color' => 'success',
                'technology' => 'Laravel 12, Blade, Tailwind CSS',
                'description' => 'Aplikasi profil akademik mahasiswa yang mendemonstrasikan kapabilitas routing tingkat lanjut (static, required/regex, optional, grouping, fallback) serta rancangan awal Agentic AI context architecture.',
                'timeline' => 'Semester Genap 2024/2025',
                'github_url' => 'https://github.com/Renggosakti',
                'is_agent' => true,
            ],
            [
                'id' => 'PJ-2026-002',
                'title' => 'Academic Project Agent (Core Engine)',
                'category' => 'Agentic AI Systems',
                'status' => 'CONCEPT',
                'status_color' => 'info',
                'technology' => 'Prompt Engineering, Persistent Memory (MEMORY.md), Tool Calling',
                'description' => 'Arsitektur autonomous agent yang bertugas membaca konteks mata kuliah, memecah tugas pemrograman menjadi atomic tasks, mengeksekusi aksi dengan tools, dan menyimpan ringkasan keputusan pada memory persisten.',
                'timeline' => 'Rencana Pengembangan Tahap 2',
                'github_url' => null,
                'is_agent' => true,
            ],
            [
                'id' => 'PJ-2025-003',
                'title' => 'Academic Profile Static Sandbox',
                'category' => 'Web Development Foundation',
                'status' => 'COMPLETED',
                'status_color' => 'neutral',
                'technology' => 'PHP, Bootstrap 5, Blade',
                'description' => 'Implementasi portal profil perkuliahan kelompok dengan integrasi Bootstrap modern dan validasi dasar data mahasiswa.',
                'timeline' => 'Gasal 2024/2025',
                'github_url' => 'https://github.com/Renggosakti',
                'is_agent' => false,
            ],
        ];

        return view('projects.index', compact('projects'));
    }
}
