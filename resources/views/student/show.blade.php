@extends('layouts.app')

@section('title', 'Profil Mahasiswa — ' . $student['name'])

@section('content')
<div class="space-y-6 max-w-[1280px]">
    
    <!-- Top Bar Navigation Breadcrumb -->
    <div class="flex items-center justify-between">
        <div class="flex items-center gap-2 text-xs text-[#64748B]">
            <a href="{{ route('home') }}" class="hover:text-blue-700">Home</a>
            <span>/</span>
            <span class="text-[#0F172A] font-medium">Mahasiswa</span>
            <span>/</span>
            <span class="font-mono text-blue-700 font-semibold">{{ $student['nrp'] }}</span>
        </div>
        <span class="ds-badge ds-badge-success">Regex Valid: 10 Digit Numeric</span>
    </div>

    <!-- Student Header Card (Design System Section 68) -->
    <div class="ds-card">
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-6 pb-6 border-b border-[#EDF1F5]">
            <div class="flex items-start gap-4">
                <div class="w-16 h-16 rounded-xl bg-blue-50 border border-blue-200 text-blue-700 flex items-center justify-center font-bold text-xl shrink-0" style="font-family: var(--font-heading);">
                    AR
                </div>
                <div class="space-y-1">
                    <div class="flex items-center gap-2">
                        <h1 class="text-2xl font-bold text-[#0F172A]">{{ $student['name'] }}</h1>
                        <span class="ds-badge ds-badge-primary font-mono text-xs">{{ $student['nrp'] }}</span>
                    </div>
                    <p class="text-sm text-[#475569]">{{ $student['major'] }} &bull; {{ $student['department'] }}</p>
                    <p class="text-xs text-[#64748B]">{{ $student['faculty'] }} &bull; {{ $student['university'] }}</p>
                </div>
            </div>

            <div class="flex flex-col gap-2 shrink-0">
                <a href="{{ route('academic.index') }}" class="ds-btn ds-btn-secondary text-xs">
                    Lihat Riwayat Akademik &rarr;
                </a>
                <a href="{{ route('agent.show', ['tema' => 'academic']) }}" class="ds-btn ds-btn-primary text-xs">
                    Hubungkan ke Agent &rarr;
                </a>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 pt-6">
            <div>
                <span class="text-xs text-[#64748B] block mb-0.5">Status Akademik</span>
                <span class="text-sm font-semibold text-green-700">{{ $student['status'] }}</span>
            </div>
            <div>
                <span class="text-xs text-[#64748B] block mb-0.5">Tahun Angkatan</span>
                <span class="text-sm font-semibold text-[#0F172A]">{{ $student['batch'] }}</span>
            </div>
            <div>
                <span class="text-xs text-[#64748B] block mb-0.5">Kelas Kuliah</span>
                <span class="text-sm font-semibold text-[#0F172A]">{{ $student['class'] }}</span>
            </div>
            <div>
                <span class="text-xs text-[#64748B] block mb-0.5">Email Mahasiswa</span>
                <span class="text-sm font-mono text-blue-700">{{ $student['email'] }}</span>
            </div>
        </div>
    </div>

    <!-- Academic & Research Focus -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        
        <!-- Focus & Academic Interests -->
        <div class="ds-card space-y-4">
            <div class="ds-card-header">
                <h2 class="text-base font-semibold text-[#0F172A]">Fokus & Peminatan Akademik</h2>
                <p class="text-xs text-[#64748B]">Bidang kajian yang ditekuni dalam masa studi S1 Informatika.</p>
            </div>
            
            <div class="space-y-3 text-xs">
                <div>
                    <span class="font-semibold text-[#0F172A] block mb-1">Academic Interest:</span>
                    <p class="text-[#475569] leading-relaxed">{{ $student['academic_interest'] }}</p>
                </div>
                <div>
                    <span class="font-semibold text-[#0F172A] block mb-1">Current Focus:</span>
                    <p class="text-[#475569] leading-relaxed">{{ $student['current_focus'] }}</p>
                </div>
            </div>

            <div class="pt-2">
                <span class="text-xs font-semibold text-[#0F172A] block mb-2">Technical Competencies:</span>
                <div class="flex flex-wrap gap-1.5">
                    @foreach($student['skills'] as $skill)
                    <span class="ds-badge ds-badge-neutral text-[11px]">{{ $skill }}</span>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Timeline Riwayat -->
        <div class="ds-card space-y-4">
            <div class="ds-card-header">
                <h2 class="text-base font-semibold text-[#0F172A]">Riwayat Pendidikan</h2>
                <p class="text-xs text-[#64748B]">Jenjang studi formal dan institusi afiliasi.</p>
            </div>

            <div class="space-y-4 text-xs">
                @foreach($student['education_timeline'] as $edu)
                <div class="flex items-start gap-3">
                    <div class="w-2 h-2 rounded-full bg-blue-600 mt-1.5 shrink-0"></div>
                    <div>
                        <span class="font-semibold text-[#0F172A] block text-sm">{{ $edu['role'] }}</span>
                        <span class="text-[#64748B]">{{ $edu['inst'] }}</span>
                        <span class="block text-[11px] text-blue-600 font-medium mt-0.5">{{ $edu['period'] }}</span>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Route Info Verification Card -->
            <div class="p-3 bg-blue-50 border border-blue-200 rounded-lg mt-4 text-[11px] text-blue-900 leading-relaxed">
                <strong>Laravel Constraint Verified:</strong> Route <code>/mahasiswa/{nrp}</code> dikunci menggunakan regular expression <code>where('nrp', '^[0-9]{10}$')</code>. Parameter URL NRP saat ini (<strong>{{ $student['nrp'] }}</strong>) valid 10 digit angka.
            </div>
        </div>

    </div>

</div>
@endsection
