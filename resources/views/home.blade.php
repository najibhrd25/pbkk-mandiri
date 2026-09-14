@extends('layouts.app')

@section('title', 'Beranda Workspace')

@section('content')
<div class="space-y-8">
    
    <!-- Welcome Header / Identity (Design System Section 24) -->
    <div class="ds-card flex flex-col md:flex-row md:items-center justify-between gap-6">
        <div class="space-y-2">
            <div class="flex items-center gap-2">
                <span class="ds-badge ds-badge-primary">Mahasiswa S1 Teknik Informatika</span>
                <span class="ds-badge ds-badge-success">{{ $student['status'] }}</span>
            </div>
            <h1 class="text-2xl font-bold text-[#0F172A]">
                Selamat Datang, {{ $student['name'] }}
            </h1>
            <p class="text-sm text-[#475569] max-width-[720px] leading-relaxed">
                {{ $student['bio'] }}
            </p>
            <div class="flex items-center gap-4 text-xs text-[#64748B] pt-1">
                <span><strong class="text-[#0F172A]">NRP:</strong> <span class="font-mono">{{ $student['nrp'] }}</span></span>
                <span>&bull;</span>
                <span><strong class="text-[#0F172A]">Fakultas:</strong> {{ $student['faculty'] }}</span>
                <span>&bull;</span>
                <span><strong class="text-[#0F172A]">Kampus:</strong> {{ $student['university'] }}</span>
            </div>
        </div>

        <div class="shrink-0 flex md:flex-col gap-2">
            <a href="{{ route('student.show', ['nrp' => $student['nrp']]) }}" class="ds-btn ds-btn-primary text-xs">
                Lihat Profil Lengkap &rarr;
            </a>
            <a href="{{ route('agent.show') }}" class="ds-btn ds-btn-secondary text-xs">
                Buka Agent Workspace &rarr;
            </a>
        </div>
    </div>

    <!-- Quick Summary Metrics (Design System Section 26: 2-4 items max) -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        @foreach($quick_stats as $stat)
        <div class="ds-card">
            <span class="text-xs font-medium text-[#64748B] uppercase tracking-wider block mb-1">{{ $stat['label'] }}</span>
            <div class="text-2xl font-bold text-[#0F172A] tracking-tight mb-1" style="font-family: var(--font-heading);">
                {{ $stat['value'] }}
            </div>
            <span class="text-xs text-[#64748B]">{{ $stat['desc'] }}</span>
        </div>
        @endforeach
    </div>

    <!-- Routing Matrix / Assignment Demonstration Table -->
    <div class="ds-card space-y-4">
        <div class="ds-card-header flex items-center justify-between">
            <div>
                <h2 class="text-lg font-semibold text-[#0F172A]">Matriks Implementasi Routing Laravel</h2>
                <p class="text-xs text-[#64748B]">Pemenuhan seluruh requirement P0 (Mandatory) & P1 (Challenge A+) sesuai spesifikasi PRD.</p>
            </div>
            <span class="ds-badge ds-badge-success">6/6 Skenario Teruji</span>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse text-xs">
                <thead>
                    <tr class="border-b border-[#E2E8F0] bg-[#F8FAFC] text-[#475569]">
                        <th class="py-3 px-4 font-semibold">Tipe Routing</th>
                        <th class="py-3 px-4 font-semibold">Route URI Pattern</th>
                        <th class="py-3 px-4 font-semibold">Named Route</th>
                        <th class="py-3 px-4 font-semibold">Kategori Requirement</th>
                        <th class="py-3 px-4 font-semibold text-right">Aksi Navigasi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-[#EDF1F5]">
                    @foreach($routes_demonstrated as $r)
                    <tr class="hover:bg-slate-50 transition-colors">
                        <td class="py-3 px-4 font-medium text-[#0F172A]">{{ $r['type'] }}</td>
                        <td class="py-3 px-4 font-mono text-blue-600 font-semibold">{{ $r['uri'] }}</td>
                        <td class="py-3 px-4 font-mono text-[#475569]">{{ $r['name'] }}</td>
                        <td class="py-3 px-4">
                            <span class="ds-badge {{ str_contains($r['status'], 'Mandatory') ? 'ds-badge-primary' : 'ds-badge-warning' }}">
                                {{ $r['status'] }}
                            </span>
                        </td>
                        <td class="py-3 px-4 text-right">
                            @if($r['name'] === 'student.show')
                                <a href="{{ route('student.show', ['nrp' => $student['nrp']]) }}" class="ds-btn ds-btn-secondary py-1 px-2.5 text-[11px]">Buka &rarr;</a>
                            @elseif($r['name'] === 'agent.show')
                                <a href="{{ route('agent.show') }}" class="ds-btn ds-btn-secondary py-1 px-2.5 text-[11px]">Buka &rarr;</a>
                            @elseif($r['name'] === 'academic.gpa.calculate')
                                <a href="{{ route('academic.gpa.calculate', ['ip1' => '3.80', 'ip2' => '3.90']) }}" class="ds-btn ds-btn-secondary py-1 px-2.5 text-[11px]">Uji IPK &rarr;</a>
                            @elseif($r['name'] === 'dashboard.*')
                                <a href="{{ route('dashboard.index') }}" class="ds-btn ds-btn-secondary py-1 px-2.5 text-[11px]">Buka Group &rarr;</a>
                            @elseif($r['name'] === 'home')
                                <a href="{{ route('home') }}" class="ds-btn ds-btn-secondary py-1 px-2.5 text-[11px]">Aktif</a>
                            @else
                                <a href="{{ url('/trigger-fallback-test') }}" class="ds-btn ds-btn-secondary py-1 px-2.5 text-[11px]">Test 404 &rarr;</a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
