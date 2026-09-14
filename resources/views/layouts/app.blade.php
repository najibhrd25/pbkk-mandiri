<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Academic Agent Workspace — Laravel Local Routing Sandbox & Agentic AI Concept">
    <title>@yield('title', 'Academic Agent Workspace') — ITS Surabaya</title>

    <!-- Google Fonts: Rethink Sans (Heading) & Outfit (Body) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=Rethink+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#F8FAFC] text-[#0F172A] flex min-h-screen antialiased selection:bg-blue-100 selection:text-blue-900">

    <!-- LEFT SIDEBAR: 240px Fixed Width (PRD & Design System Section 6 & 27) -->
    <aside class="w-[240px] shrink-0 bg-white border-r border-[#E2E8F0] min-h-screen flex flex-col justify-between fixed top-0 bottom-0 left-0 z-30">
        <div>
            <!-- Branding Header -->
            <div class="h-16 flex items-center px-5 border-b border-[#EDF1F5] gap-3">
                <div class="w-8 h-8 rounded-lg bg-[#1D4ED8] flex items-center justify-center text-white font-bold text-sm shadow-xs">
                    AW
                </div>
                <div class="flex flex-col">
                    <span class="font-semibold text-sm text-[#0F172A] tracking-tight leading-tight" style="font-family: var(--font-heading);">Academic Agent</span>
                    <span class="text-[11px] text-[#64748B] tracking-wide">Workspace &bull; PBKK</span>
                </div>
            </div>

            <!-- Primary Navigation (PRD Section 11 & Named Route Requirement) -->
            <nav class="p-3 space-y-1">
                <div class="px-3 py-1.5 text-[11px] font-semibold text-[#64748B] uppercase tracking-wider">
                    Menu Utama
                </div>
                
                <a href="{{ route('home') }}" class="ds-sidebar-item {{ request()->routeIs('home') ? 'active' : '' }}">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                    <span>Home</span>
                </a>

                <a href="{{ route('student.show', ['nrp' => '5025241072']) }}" class="ds-sidebar-item {{ request()->routeIs('student.show') ? 'active' : '' }}">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                    <span>Student Profile</span>
                </a>

                <a href="{{ route('academic.index') }}" class="ds-sidebar-item {{ request()->routeIs('academic.index') ? 'active' : '' }}">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/></svg>
                    <span>Academic Journey</span>
                </a>

                <a href="{{ route('projects.index') }}" class="ds-sidebar-item {{ request()->routeIs('projects.index') ? 'active' : '' }}">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                    <span>Projects</span>
                </a>

                <a href="{{ route('agent.show') }}" class="ds-sidebar-item {{ request()->routeIs('agent.show') ? 'active' : '' }}">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    <span class="flex items-center justify-between w-full">
                        <span>Agent Workspace</span>
                        <span class="text-[10px] bg-blue-100 text-blue-800 font-semibold px-1.5 py-0.5 rounded">AI</span>
                    </span>
                </a>

                <!-- Challenge Routes Group Section -->
                <div class="pt-4 px-3 py-1.5 text-[11px] font-semibold text-[#64748B] uppercase tracking-wider">
                    Challenge A+ Routes
                </div>

                <a href="{{ route('academic.gpa.calculate', ['ip1' => '3.80', 'ip2' => '3.90']) }}" class="ds-sidebar-item {{ request()->routeIs('academic.gpa.calculate') ? 'active' : '' }}">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
                    <span>IPK Calculator</span>
                </a>

                <a href="{{ route('dashboard.index') }}" class="ds-sidebar-item {{ request()->routeIs('dashboard.*') ? 'active' : '' }}">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/></svg>
                    <span>Dashboard Group</span>
                </a>
            </nav>
        </div>

        <!-- Sidebar Footer Student Profile Snapshot -->
        <div class="p-3 border-t border-[#EDF1F5] bg-[#F8FAFC]">
            <a href="{{ route('student.show', ['nrp' => '5025241072']) }}" class="flex items-center gap-3 p-2 rounded-lg hover:bg-white transition-colors border border-transparent hover:border-[#E2E8F0]">
                <div class="w-9 h-9 rounded-full bg-slate-200 text-slate-700 flex items-center justify-center font-bold text-xs">
                    AR
                </div>
                <div class="flex flex-col min-w-0">
                    <span class="text-xs font-semibold text-[#0F172A] truncate">Arya Rangga</span>
                    <span class="text-[11px] text-[#64748B] font-mono">5025241072</span>
                </div>
            </a>
        </div>
    </aside>

    <!-- RIGHT CONTAINER: TOP UTILITY BAR + MAIN CONTENT -->
    <div class="ml-[240px] flex-1 flex flex-col min-h-screen">
        
        <!-- TOP UTILITY BAR (Design System Section 5) -->
        <header class="h-16 bg-white border-b border-[#E2E8F0] px-8 flex items-center justify-between sticky top-0 z-20">
            <div class="flex items-center gap-3">
                <span class="text-xs font-semibold px-2 py-0.5 rounded bg-blue-50 text-blue-700 border border-blue-200">ITS FTEIC</span>
                <span class="text-xs text-[#64748B]">Departemen Teknik Informatika &bull; PBKK B</span>
            </div>

            <div class="flex items-center gap-4">
                <!-- Sandbox Quick Route Status -->
                <span class="ds-badge ds-badge-success flex items-center gap-1.5">
                    <span class="w-1.5 h-1.5 rounded-full bg-green-600 animate-pulse"></span>
                    Laravel 12 Sandbox Active
                </span>

                <div class="h-4 w-px bg-slate-200"></div>

                <a href="{{ route('agent.show', ['tema' => 'academic']) }}" class="text-xs font-medium text-blue-700 hover:text-blue-900 transition-colors flex items-center gap-1">
                    Demo Tema: Academic &rarr;
                </a>
            </div>
        </header>

        <!-- MAIN PAGE CONTENT (Design System Section 7: Max width 1440px / 1280px) -->
        <main class="flex-1 p-8 max-w-[1440px] w-full mx-auto">
            @yield('content')
        </main>

        <!-- FOOTER -->
        <footer class="border-t border-[#E2E8F0] bg-white py-4 px-8 text-xs text-[#64748B] flex items-center justify-between">
            <div>
                &copy; {{ date('Y') }} <strong>Academic Agent Workspace</strong> — Tugas Mandiri Pemrograman Berbasis Kerangka Kerja (B).
            </div>
            <div class="flex items-center gap-4 font-mono text-[11px]">
                <span>Routing Standard Verified</span>
                <span>&bull;</span>
                <a href="{{ url('/halaman-tidak-ada-contoh') }}" class="text-slate-500 hover:text-blue-700">Test Fallback 404 &rarr;</a>
            </div>
        </footer>
    </div>

    @stack('scripts')
</body>
</html>
