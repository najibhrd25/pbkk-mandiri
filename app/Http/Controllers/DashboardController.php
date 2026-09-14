<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Dashboard Index (PRD F-11 & Section 33: Route Grouping + Prefix /dashboard)
     */
    public function index()
    {
        $dashboardData = [
            'greeting' => 'Selamat Datang di Control Center',
            'user' => 'Arya Rangga (5025241072)',
            'role' => 'Mahasiswa / Author',
            'system_status' => 'ONLINE (Local Development Sandbox)',
            'last_sync' => now()->translatedFormat('d F Y, H:i') . ' WIB',
            'summary_metrics' => [
                ['label' => 'Total Route Terdaftar', 'value' => '12 Routes', 'note' => '100% Named Routes'],
                ['label' => 'Validasi Regex NRP', 'value' => 'Active', 'note' => '10-digit strict check'],
                ['label' => 'Kalkulator IPK', 'value' => 'Ready', 'note' => 'Formula (ip1+ip2)/2'],
                ['label' => 'Memory Persisten Agent', 'value' => '4 Files', 'note' => 'AGENT, MEMORY, CONTEXT, TASKS'],
            ],
            'quick_links' => [
                ['title' => 'Student Profile', 'route' => 'dashboard.profile', 'desc' => 'Lihat profil lengkap dan biodata mahasiswa'],
                ['title' => 'Academic History', 'route' => 'dashboard.academic', 'desc' => 'Daftar SKS dan riwayat semester'],
                ['title' => 'Project Catalog', 'route' => 'dashboard.projects', 'desc' => 'Katalog portofolio dan proyek riset'],
                ['title' => 'Agent Workspace', 'route' => 'dashboard.agent', 'desc' => 'Spesifikasi dan model kerja Agentic AI'],
            ]
        ];

        return view('dashboard.index', compact('dashboardData'));
    }

    public function profile()
    {
        return redirect()->route('student.show', ['nrp' => '5025241072']);
    }

    public function academic()
    {
        return redirect()->route('academic.index');
    }

    public function projects()
    {
        return redirect()->route('projects.index');
    }

    public function agent()
    {
        return redirect()->route('agent.show');
    }
}
