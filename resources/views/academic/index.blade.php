@extends('layouts.app')

@section('title', 'Academic Journey')

@section('content')
<div class="space-y-6 max-w-[1280px]">
    
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-[#0F172A]">Perjalanan Akademik (Academic Journey)</h1>
            <p class="text-xs text-[#64748B]">Rekam jejak perkuliahan, perolehan SKS, dan indeks prestasi per semester.</p>
        </div>
        <a href="{{ route('academic.gpa.calculate', ['ip1' => '3.82', 'ip2' => '3.88']) }}" class="ds-btn ds-btn-primary text-xs">
            Hitung Rata-rata IPK &rarr;
        </a>
    </div>

    <!-- Summary Overall Academic Stats -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        <div class="ds-card">
            <span class="text-xs text-[#64748B] block mb-1">IPK Kumulatif Saat Ini</span>
            <div class="text-2xl font-bold text-blue-700" style="font-family: var(--font-heading);">
                {{ number_format($overall['cumulative_gpa'], 2) }}
            </div>
            <span class="text-[11px] text-green-700 font-medium">Predikat: Cum Laude</span>
        </div>

        <div class="ds-card">
            <span class="text-xs text-[#64748B] block mb-1">Total SKS Ditempuh</span>
            <div class="text-2xl font-bold text-[#0F172A]" style="font-family: var(--font-heading);">
                {{ $overall['total_credits'] }} SKS
            </div>
            <span class="text-[11px] text-[#64748B]">{{ $overall['completed_credits'] }} Lulus &bull; {{ $overall['current_credits'] }} Aktif</span>
        </div>

        <div class="ds-card">
            <span class="text-xs text-[#64748B] block mb-1">Masa Studi Normal</span>
            <div class="text-2xl font-bold text-[#0F172A]" style="font-family: var(--font-heading);">
                {{ $overall['max_study_period'] }}
            </div>
            <span class="text-[11px] text-[#64748B]">Target Kelulusan Tepat Waktu</span>
        </div>

        <div class="ds-card">
            <span class="text-xs text-[#64748B] block mb-1">Status Mahasiswa</span>
            <div class="text-2xl font-bold text-green-700" style="font-family: var(--font-heading);">
                AKTIF
            </div>
            <span class="text-[11px] text-[#64748B]">Departemen Teknik Informatika</span>
        </div>
    </div>

    <!-- Semester-by-Semester Table Breakdown -->
    <div class="ds-card space-y-4">
        <div class="ds-card-header flex items-center justify-between">
            <div>
                <h2 class="text-base font-semibold text-[#0F172A]">Rincian Prestasi Per Semester</h2>
                <p class="text-xs text-[#64748B]">Riwayat nilai semester Gasal dan Genap di Institut Teknologi Sepuluh Nopember.</p>
            </div>
            <span class="ds-badge ds-badge-neutral">Program Sarjana (S1)</span>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse text-xs">
                <thead>
                    <tr class="border-b border-[#E2E8F0] bg-[#F8FAFC] text-[#475569]">
                        <th class="py-3 px-4 font-semibold">Semester</th>
                        <th class="py-3 px-4 font-semibold">Tahun Akademik</th>
                        <th class="py-3 px-4 font-semibold">Beban SKS</th>
                        <th class="py-3 px-4 font-semibold">Indeks Prestasi</th>
                        <th class="py-3 px-4 font-semibold">Status</th>
                        <th class="py-3 px-4 font-semibold">Fokus Materi Kuliah</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-[#EDF1F5]">
                    @foreach($semesters as $sem)
                    <tr class="hover:bg-slate-50 transition-colors">
                        <td class="py-3 px-4 font-bold text-[#0F172A]">{{ $sem['semester'] }}</td>
                        <td class="py-3 px-4 font-medium text-[#475569]">{{ $sem['year'] }}</td>
                        <td class="py-3 px-4 font-semibold">{{ $sem['sks'] }} SKS</td>
                        <td class="py-3 px-4 font-mono font-bold text-blue-700">{{ number_format($sem['gpa'], 2) }}</td>
                        <td class="py-3 px-4">
                            <span class="ds-badge {{ $sem['status'] === 'Selesai' ? 'ds-badge-success' : 'ds-badge-primary' }}">
                                {{ $sem['status'] }}
                            </span>
                        </td>
                        <td class="py-3 px-4 text-[#475569] leading-relaxed">{{ $sem['highlights'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
