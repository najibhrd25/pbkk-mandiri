@extends('layouts.app')

@section('title', '404 Halaman Tidak Ditemukan')

@section('content')
<div class="min-h-[60vh] flex items-center justify-center">
    <div class="ds-card max-w-lg w-full text-center p-8 space-y-6">
        <div class="w-16 h-16 rounded-2xl bg-red-50 border border-red-200 text-red-600 font-extrabold text-2xl flex items-center justify-center mx-auto" style="font-family: var(--font-heading);">
            404
        </div>

        <div class="space-y-2">
            <h1 class="text-2xl font-bold text-[#0F172A]">Halaman Tidak Ditemukan</h1>
            <p class="text-xs text-[#64748B] leading-relaxed">
                Tautan yang Anda tuju tidak tersedia atau parameter NRP yang dimasukkan tidak memenuhi format validasi regex (wajib 10 digit angka).
            </p>
        </div>

        <div class="p-3 bg-slate-50 border border-[#EDF1F5] rounded-lg text-xs text-[#475569] font-mono text-left space-y-1">
            <span class="font-bold text-[#0F172A] block font-sans">Detail Penanganan Routing:</span>
            <div>URL Akses: <span class="text-red-600">{{ request()->getRequestUri() }}</span></div>
            <div>Status: 404 Route Fallback Executed</div>
        </div>

        <div>
            <a href="{{ route('home') }}" class="ds-btn ds-btn-primary w-full text-xs">
                &larr; Kembali ke Halaman Utama
            </a>
        </div>
    </div>
</div>
@endsection
