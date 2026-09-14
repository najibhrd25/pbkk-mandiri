@extends('layouts.app')

@section('title', 'Katalog Projects')

@section('content')
<div class="space-y-6 max-w-[1280px]">
    
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-[#0F172A]">Katalog Projects & Portofolio</h1>
            <p class="text-xs text-[#64748B]">Daftar aplikasi perangkat lunak dan riset sistem Agentic AI yang dikembangkan mahasiswa.</p>
        </div>
        <span class="ds-badge ds-badge-primary">3 Projects Terdaftar</span>
    </div>

    <!-- Project Cards Grid (Design System Section 21 & 22) -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($projects as $p)
        <div class="ds-card flex flex-col justify-between space-y-4">
            <div class="space-y-3">
                <div class="flex items-center justify-between">
                    <span class="font-mono text-xs text-[#64748B] font-semibold">{{ $p['id'] }}</span>
                    <span class="ds-badge ds-badge-{{ $p['status_color'] }}">{{ $p['status'] }}</span>
                </div>

                <div>
                    <h2 class="text-base font-bold text-[#0F172A] leading-snug">{{ $p['title'] }}</h2>
                    <span class="text-xs text-blue-700 font-medium">{{ $p['category'] }}</span>
                </div>

                <p class="text-xs text-[#475569] leading-relaxed">
                    {{ $p['description'] }}
                </p>
            </div>

            <div class="pt-4 border-t border-[#EDF1F5] space-y-3 text-xs">
                <div>
                    <span class="text-[#64748B] block mb-0.5">Teknologi:</span>
                    <span class="font-mono text-[11px] text-[#0F172A] bg-slate-100 px-2 py-0.5 rounded">{{ $p['technology'] }}</span>
                </div>

                <div class="flex items-center justify-between pt-1">
                    <span class="text-[#64748B] text-[11px]">{{ $p['timeline'] }}</span>
                    @if($p['is_agent'])
                        <a href="{{ route('agent.show') }}" class="text-blue-700 font-semibold hover:underline">Detail Agent &rarr;</a>
                    @elseif($p['github_url'])
                        <a href="{{ $p['github_url'] }}" target="_blank" class="text-blue-700 font-semibold hover:underline">GitHub &rarr;</a>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>
@endsection
