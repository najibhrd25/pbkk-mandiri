@extends('layouts.app')

@section('title', 'Agentic AI Workspace — ' . $agentConfig['active_theme'])

@section('content')
<div class="space-y-8 max-w-[1280px]">
    
    <!-- Header Section with Theme Badges & Optional Param Indicator -->
    <div class="ds-card flex flex-col md:flex-row md:items-center justify-between gap-6">
        <div class="space-y-2">
            <div class="flex items-center gap-2">
                <span class="ds-badge ds-badge-primary">AI Agent Prototype</span>
                @if($agentConfig['is_default_theme'])
                    <span class="ds-badge ds-badge-neutral">Default Theme (No Param)</span>
                @else
                    <span class="ds-badge ds-badge-success">Theme Param: {{ $agentConfig['theme_param'] }}</span>
                @endif
            </div>

            <h1 class="text-2xl font-bold text-[#0F172A]">
                {{ $agentConfig['active_theme'] }}
            </h1>

            <p class="text-xs text-[#475569] max-w-[760px] leading-relaxed">
                {{ $agentConfig['primary_goal'] }}
            </p>

            <div class="flex items-center gap-4 text-xs text-[#64748B] pt-1">
                <span><strong>Model:</strong> {{ $agentConfig['name'] }}</span>
                <span>&bull;</span>
                <span><strong>Tipe:</strong> {{ $agentConfig['type'] }}</span>
                <span>&bull;</span>
                <span><strong>Status:</strong> <span class="text-amber-600 font-semibold">{{ $agentConfig['status'] }}</span></span>
            </div>
        </div>

        <!-- Optional Parameter Switcher Presets -->
        <div class="p-3 bg-slate-50 border border-[#E2E8F0] rounded-xl space-y-2 shrink-0">
            <span class="text-[11px] font-semibold text-[#64748B] uppercase tracking-wider block">Uji Optional Parameter Route:</span>
            <div class="flex flex-col gap-1.5">
                <a href="{{ route('agent.show') }}" class="text-xs px-2.5 py-1 rounded {{ $agentConfig['is_default_theme'] ? 'bg-blue-600 text-white' : 'bg-white text-slate-700 hover:bg-slate-100' }} border border-[#E2E8F0] font-medium flex items-center justify-between">
                    <span>/agent</span>
                    <span class="text-[10px] opacity-75">Default</span>
                </a>
                <a href="{{ route('agent.show', ['tema' => 'academic']) }}" class="text-xs px-2.5 py-1 rounded {{ $agentConfig['theme_param'] === 'academic' ? 'bg-blue-600 text-white' : 'bg-white text-slate-700 hover:bg-slate-100' }} border border-[#E2E8F0] font-medium flex items-center justify-between">
                    <span>/agent/academic</span>
                    <span class="text-[10px] opacity-75">Academic</span>
                </a>
                <a href="{{ route('agent.show', ['tema' => 'research']) }}" class="text-xs px-2.5 py-1 rounded {{ $agentConfig['theme_param'] === 'research' ? 'bg-blue-600 text-white' : 'bg-white text-slate-700 hover:bg-slate-100' }} border border-[#E2E8F0] font-medium flex items-center justify-between">
                    <span>/agent/research</span>
                    <span class="text-[10px] opacity-75">Research</span>
                </a>
            </div>
        </div>
    </div>

    <!-- 4 Pillars Mental Model (PRD Section 28 & 29) -->
    <div class="space-y-4">
        <div>
            <h2 class="text-lg font-semibold text-[#0F172A]">Arsitektur Mental Model Agent (4 Pillars)</h2>
            <p class="text-xs text-[#64748B]">Struktur representasi file sistem agent yang digunakan untuk menjaga persistensi konteks proyek.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            @foreach($mental_model as $p)
            <div class="ds-card space-y-2">
                <div class="flex items-center justify-between">
                    <span class="font-mono text-xs font-bold text-blue-700">{{ $p['file'] }}</span>
                    <span class="ds-badge ds-badge-neutral text-[10px]">{{ $p['status'] }}</span>
                </div>
                <div class="text-sm font-semibold text-[#0F172A]">{{ $p['question'] }}</div>
                <p class="text-xs text-[#475569] leading-relaxed">{{ $p['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Workflow Execution Pipeline (PRD Section 20) -->
    <div class="ds-card space-y-4">
        <div class="ds-card-header">
            <h2 class="text-base font-semibold text-[#0F172A]">Siklus Alur Kerja Agent (Agentic Workflow)</h2>
            <p class="text-xs text-[#64748B]">Tahapan dari penerimaan prompt hingga evaluasi hasil dan pembaruan memory.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-5 gap-3">
            @foreach($agent_workflow as $w)
            <div class="p-3 rounded-xl bg-slate-50 border border-[#E2E8F0] space-y-1 relative">
                <div class="w-6 h-6 rounded-full bg-blue-600 text-white font-bold text-xs flex items-center justify-center">
                    {{ $w['step'] }}
                </div>
                <h3 class="text-xs font-bold text-[#0F172A] pt-1">{{ $w['title'] }}</h3>
                <p class="text-[11px] text-[#64748B] leading-relaxed">{{ $w['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Planned Tools (PRD Section 30) -->
    <div class="ds-card space-y-4">
        <div class="ds-card-header flex items-center justify-between">
            <div>
                <h2 class="text-base font-semibold text-[#0F172A]">Rencana Kapabilitas Tools (Future Phase)</h2>
                <p class="text-xs text-[#64748B]">Koleksi tool execution yang dirancang untuk diintegrasikan pada tahap selanjutnya.</p>
            </div>
            <span class="ds-badge ds-badge-warning">Roadmap Phase 3</span>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            @foreach($planned_tools as $t)
            <div class="p-3 rounded-lg border border-[#EDF1F5] bg-white space-y-1">
                <span class="ds-badge ds-badge-neutral text-[10px]">{{ $t['category'] }}</span>
                <h3 class="text-xs font-semibold text-[#0F172A]">{{ $t['name'] }}</h3>
                <p class="text-[11px] text-[#64748B]">{{ $t['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>

</div>
@endsection
