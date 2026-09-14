@extends('layouts.app')

@section('title', 'Kalkulator IPK Akademik')

@section('content')
<div class="space-y-6 max-w-[1000px]">
    
    <!-- Header -->
    <div>
        <div class="flex items-center gap-2 text-xs text-[#64748B] mb-2">
            <a href="{{ route('home') }}" class="hover:text-blue-700">Home</a>
            <span>/</span>
            <a href="{{ route('academic.index') }}" class="hover:text-blue-700">Academic</a>
            <span>/</span>
            <span class="text-[#0F172A] font-medium">Kalkulator IPK</span>
        </div>
        <h1 class="text-2xl font-bold text-[#0F172A]">Kalkulator IPK (Challenge A+ Routing)</h1>
        <p class="text-xs text-[#64748B]">Mendemonstrasikan route dua parameter dinamis: <code>/hitung-ipk/{ip1}/{ip2}</code>.</p>
    </div>

    <!-- Live Calculation Result Card -->
    <div class="ds-card">
        <div class="ds-card-header flex items-center justify-between">
            <span class="text-xs font-semibold text-[#0F172A] uppercase tracking-wider">Hasil Eksekusi Parameter URL</span>
            @if($result['isValid'])
                <span class="ds-badge ds-badge-success">Parameter Valid</span>
            @else
                <span class="ds-badge ds-badge-danger">Validasi Gagal</span>
            @endif
        </div>

        @if($result['isValid'])
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-center py-4">
            <div class="p-4 rounded-xl bg-slate-50 border border-[#E2E8F0]">
                <span class="text-xs text-[#64748B] block mb-1">Semester 1 ({ip1})</span>
                <div class="text-3xl font-bold text-[#0F172A] font-mono" style="font-family: var(--font-heading);">
                    {{ number_format($result['val1'], 2) }}
                </div>
            </div>

            <div class="p-4 rounded-xl bg-slate-50 border border-[#E2E8F0]">
                <span class="text-xs text-[#64748B] block mb-1">Semester 2 ({ip2})</span>
                <div class="text-3xl font-bold text-[#0F172A] font-mono" style="font-family: var(--font-heading);">
                    {{ number_format($result['val2'], 2) }}
                </div>
            </div>

            <div class="p-4 rounded-xl bg-blue-50 border border-blue-200">
                <span class="text-xs text-blue-800 block mb-1">Rata-rata IPK (Average)</span>
                <div class="text-3xl font-bold text-blue-700 font-mono" style="font-family: var(--font-heading);">
                    {{ number_format($result['average'], 2) }}
                </div>
                <span class="text-xs font-semibold text-blue-800 block mt-1">{{ $result['predicate'] }}</span>
            </div>
        </div>

        <div class="p-4 bg-slate-50 border border-[#EDF1F5] rounded-lg text-xs text-[#475569] space-y-1">
            <span class="font-semibold text-[#0F172A] block">Formula Perhitungan:</span>
            <code>average = (ip1 + ip2) / 2 = ({{ $result['val1'] }} + {{ $result['val2'] }}) / 2 = {{ $result['average'] }}</code>
        </div>
        @else
        <div class="p-4 bg-red-50 border border-red-200 rounded-lg text-xs text-red-700 space-y-2">
            <span class="font-bold block">Terjadi Kesalahan Input:</span>
            <p>{{ $result['error_message'] }}</p>
            <p class="text-[11px] text-red-600 font-mono">Nilai yang diterima: ip1="{{ $result['ip1'] }}", ip2="{{ $result['ip2'] }}"</p>
        </div>
        @endif
    </div>

    <!-- Quick Tester Presets -->
    <div class="ds-card space-y-3">
        <div class="ds-card-header">
            <h2 class="text-sm font-semibold text-[#0F172A]">Preset Uji Coba Cepat (Test Links)</h2>
            <p class="text-xs text-[#64748B]">Klik tautan di bawah ini untuk mencoba berbagai kombinasi nilai via named route.</p>
        </div>

        <div class="flex flex-wrap gap-2">
            <a href="{{ route('academic.gpa.calculate', ['ip1' => '3.50', 'ip2' => '3.80']) }}" class="ds-btn ds-btn-secondary text-xs">
                Uji: 3.50 & 3.80 (PRD Example)
            </a>
            <a href="{{ route('academic.gpa.calculate', ['ip1' => '4.00', 'ip2' => '3.90']) }}" class="ds-btn ds-btn-secondary text-xs">
                Uji: 4.00 & 3.90 (Tinggi)
            </a>
            <a href="{{ route('academic.gpa.calculate', ['ip1' => '3.00', 'ip2' => '3.20']) }}" class="ds-btn ds-btn-secondary text-xs">
                Uji: 3.00 & 3.20 (Sedang)
            </a>
            <a href="{{ route('academic.gpa.calculate', ['ip1' => '5.00', 'ip2' => '3.00']) }}" class="ds-btn ds-btn-secondary text-xs text-red-600 border-red-200">
                Uji: 5.00 & 3.00 (Out of Range)
            </a>
            <a href="{{ route('academic.gpa.calculate', ['ip1' => 'abc', 'ip2' => '3.00']) }}" class="ds-btn ds-btn-secondary text-xs text-red-600 border-red-200">
                Uji: abc & 3.00 (Non-Numeric)
            </a>
        </div>
    </div>

</div>
@endsection
