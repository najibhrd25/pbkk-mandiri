@extends('layouts.app')

@section('title', 'Dashboard Control Center')

@section('content')
<div class="space-y-6 max-w-[1280px]">
    
    <!-- Dashboard Header (PRD F-11: Route Grouping + Prefix /dashboard) -->
    <div class="ds-card flex flex-col md:flex-row md:items-center justify-between gap-4">
        <div>
            <div class="flex items-center gap-2 mb-1">
                <span class="ds-badge ds-badge-primary">Route Group Prefix: /dashboard/*</span>
                <span class="ds-badge ds-badge-success">{{ $dashboardData['system_status'] }}</span>
            </div>
            <h1 class="text-2xl font-bold text-[#0F172A]">{{ $dashboardData['greeting'] }}</h1>
            <p class="text-xs text-[#64748B]">User: <strong>{{ $dashboardData['user'] }}</strong> &bull; Peran: {{ $dashboardData['role'] }} &bull; Sinkronisasi: {{ $dashboardData['last_sync'] }}</p>
        </div>

        <span class="ds-badge ds-badge-neutral text-xs font-mono self-start md:self-auto">
            Named Prefix: dashboard.*
        </span>
    </div>

    <!-- Summary Metrics -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        @foreach($dashboardData['summary_metrics'] as $m)
        <div class="ds-card">
            <span class="text-xs text-[#64748B] block mb-1">{{ $m['label'] }}</span>
            <div class="text-2xl font-bold text-[#0F172A]" style="font-family: var(--font-heading);">
                {{ $m['value'] }}
            </div>
            <span class="text-[11px] text-blue-700 font-medium">{{ $m['note'] }}</span>
        </div>
        @endforeach
    </div>

    <!-- Grouped Route Links Navigation -->
    <div class="ds-card space-y-4">
        <div class="ds-card-header flex items-center justify-between">
            <div>
                <h2 class="text-base font-semibold text-[#0F172A]">Navigasi Route Group Dashboard</h2>
                <p class="text-xs text-[#64748B]">Daftar sub-endpoint yang terdaftar di dalam prefix <code>/dashboard</code>.</p>
            </div>
            <span class="ds-badge ds-badge-primary">Challenge P1 Verified</span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            @foreach($dashboardData['quick_links'] as $link)
            <a href="{{ route($link['route']) }}" class="p-4 rounded-xl border border-[#E2E8F0] hover:border-blue-500 hover:bg-blue-50/40 transition-all flex items-center justify-between group">
                <div class="space-y-1">
                    <span class="font-semibold text-sm text-[#0F172A] group-hover:text-blue-700 transition-colors block">
                        {{ $link['title'] }}
                    </span>
                    <span class="text-xs text-[#64748B] block">
                        {{ $link['desc'] }}
                    </span>
                    <span class="font-mono text-[10px] text-blue-600 font-semibold block pt-1">
                        route('{{ $link['route'] }}')
                    </span>
                </div>
                <span class="text-blue-600 group-hover:translate-x-1 transition-transform font-bold text-lg">&rarr;</span>
            </a>
            @endforeach
        </div>
    </div>

</div>
@endsection
