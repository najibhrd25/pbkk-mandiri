<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgentController extends Controller
{
    /**
     * Halaman Konsep Agentic AI Workspace dengan Optional Parameter Tema (PRD F-07 & Section 19-32)
     */
    public function show(?string $tema = null)
    {
        // Default Value sesuai PRD Section 18: General Assistant Agent
        $defaultTheme = 'General Assistant Agent';
        $activeTheme = $tema ? ucwords(str_replace(['-', '_'], ' ', $tema)) . ' Agent' : $defaultTheme;

        // Baca data simulasi markdown jika ada
        $agentConfig = [
            'name' => 'Academic Project Agent',
            'type' => 'Personal Academic & Engineering Co-Pilot',
            'status' => 'Concept Prototype (MVP Phase)',
            'active_theme' => $activeTheme,
            'is_default_theme' => is_null($tema),
            'theme_param' => $tema,
            'primary_goal' => 'Assist the student in understanding academic project requirements, planning implementation steps, tracking tasks, preserving architectural decisions, and maintaining consistent project execution.',
        ];

        $mental_model = [
            ['file' => 'AGENT.md', 'question' => 'Who am I?', 'desc' => 'Mendefinisikan identitas, batasan etis, dan panduan perilaku agent.', 'status' => 'Loaded'],
            ['file' => 'MEMORY.md', 'question' => 'What do I know?', 'desc' => 'Menyimpan riwayat keputusan, preferensi arsitektur, dan entitas penting.', 'status' => 'Persistent'],
            ['file' => 'CONTEXT.md', 'question' => 'What am I working on?', 'desc' => 'Menjelaskan batas modul yang sedang aktif dan lingkungan pengembangan.', 'status' => 'Active'],
            ['file' => 'TASKS.md', 'question' => 'What should I do next?', 'desc' => 'Daftar rencana kerja atomik terstruktur beserta progres pengerjaan.', 'status' => 'Planned'],
        ];

        $agent_workflow = [
            ['step' => 1, 'title' => 'Receive Request', 'desc' => 'Menerima problem statement / tugas dari mahasiswa.'],
            ['step' => 2, 'title' => 'Read Context & Memory', 'desc' => 'Mengecek CONTEXT.md dan MEMORY.md untuk menjaga kontinuitas konteks.'],
            ['step' => 3, 'title' => 'Formulate Plan', 'desc' => 'Memecah tujuan menjadi langkah-langkah di TASKS.md.'],
            ['step' => 4, 'title' => 'Execute Action', 'desc' => 'Menggunakan tools (File system, Git, Linter, Runtime) secara presisi.'],
            ['step' => 5, 'title' => 'Review & Update Memory', 'desc' => 'Mengevaluasi hasil eksekusi dan mencatat ringkasan ke MEMORY.md.'],
        ];

        $planned_tools = [
            ['name' => 'File Reader / Writer', 'category' => 'Core I/O', 'desc' => 'Membaca dan memodifikasi file repositori secara aman.'],
            ['name' => 'Project Indexer & Search', 'category' => 'Knowledge', 'desc' => 'Menganalisis codebase dan dependensi projek.'],
            ['name' => 'Terminal / Artisan Runner', 'category' => 'Execution', 'desc' => 'Menjalankan testing otomatis dan perintah Laravel.'],
            ['name' => 'LMS & Calendar Connector', 'category' => 'Academic', 'desc' => 'Sinkronisasi deadline tugas mata kuliah.'],
        ];

        return view('agent.show', compact('agentConfig', 'mental_model', 'agent_workflow', 'planned_tools'));
    }
}
