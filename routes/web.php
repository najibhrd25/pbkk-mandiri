<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AcademicController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes — Academic Agent Workspace
|--------------------------------------------------------------------------
| Mendemonstrasikan seluruh kaidah routing Laravel sesuai PRD & spesifikasi tugas:
| 1. Static route
| 2. Required parameter dengan regex constraint
| 3. Optional parameter dengan default value
| 4. Named routes pada seluruh endpoint
| 5. Challenge: Kalkulator IPK dua parameter
| 6. Challenge: Route group dengan prefix & name prefix
| 7. Challenge: Route fallback untuk custom 404 handler
*/

// ==========================================
// 1. Static Route: Beranda Utama (PRD F-01)
// ==========================================
Route::get('/', [HomeController::class, 'index'])->name('home');

// =========================================================================
// 2. Required Parameter Route dengan Regex Constraint: Profil Mahasiswa (PRD F-02 & F-03)
// Constraint: NRP harus tepat 10 digit angka
// =========================================================================
Route::get('/mahasiswa/{nrp}', [StudentController::class, 'show'])
    ->where('nrp', '^[0-9]{10}$')
    ->name('student.show');

// ==========================================
// 3. Recommended Routes: Academic & Projects
// ==========================================
Route::get('/academic', [AcademicController::class, 'index'])->name('academic.index');
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');

// =========================================================================
// 4. Optional Parameter Route: Konsep Agentic AI Workspace (PRD F-07)
// Menangani URL /agent dan /agent/{tema} dengan fallback default value di controller
// =========================================================================
Route::get('/agent/{tema?}', [AgentController::class, 'show'])->name('agent.show');

// =========================================================================
// 5. Challenge Route: Kalkulator Rata-rata IPK (PRD F-05)
// Menerima dua parameter nilai IP dan melakukan kalkulasi
// =========================================================================
Route::get('/hitung-ipk/{ip1}/{ip2}', [AcademicController::class, 'calculateGpa'])
    ->name('academic.gpa.calculate');

// =========================================================================
// 6. Challenge Route: Dashboard Group dengan Prefix (PRD F-11 & Section 33)
// Mengelompokkan seluruh route /dashboard/* di bawah satu group terpadu
// =========================================================================
Route::prefix('dashboard')
    ->name('dashboard.')
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('index');
        Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');
        Route::get('/academic', [DashboardController::class, 'academic'])->name('academic');
        Route::get('/projects', [DashboardController::class, 'projects'])->name('projects');
        Route::get('/agent', [DashboardController::class, 'agent'])->name('agent');
    });

// =========================================================================
// 7. Challenge Route: Fallback Route untuk Penanganan 404 (PRD F-12 & Section 34)
// Menangani URL apa pun yang tidak cocok dengan route yang telah didefinisikan
// =========================================================================
Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
