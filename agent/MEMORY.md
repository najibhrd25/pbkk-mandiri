# MEMORY.md — Persistent Long-Term Memory

## Key Entities & Profile
- **Student Name:** Mohammad Najib Bahrudin
- **NRP:** `5025241230`
- **Institution:** Institut Teknologi Sepuluh Nopember (ITS), Surabaya
- **Department:** S1 Teknik Informatika (FTEIC)
- **Cohort / Batch:** 2024
- **Course:** Pemrograman Berbasis Kerangka Kerja (PBKK) — Kelas B
- **Assignment:** Tugas Mandiri — Laravel Local Routing Sandbox & Academic Workspace

---

## Architectural Decisions & Standards
1. **Framework:** Laravel 12 on PHP 8.5+.
2. **Routing Standard:**
   - Always prioritize Named Routes for internal navigation (`route('home')`, etc.).
   - NRP constraint strictly enforced: 10 digit numeric string (`where('nrp', '[0-9]{10}')`).
   - Grouping & Prefix used for all `/dashboard` sub-paths.
   - Graceful fallback route returning user-friendly 404 view.
3. **UI / Design System:**
   - Clean Government / Academic Workspace UI.
   - Primary typography: `Rethink Sans` (Headings) + `Outfit` (Body/UI).
   - Sidebar width fixed at 240px desktop, persistent, without collapsible distraction.
   - Component tokens: 12px radius for cards, 8px for controls/buttons, 1px subtle neutral borders (`#E2E8F0`), minimal/no drop shadow.
   - Primary brand color: `#1D4ED8` (Blue accent), page background: `#F8FAFC`, card surface: `#FFFFFF`.

---

## Historical Notes & Iterations
- Initial setup configured routing demonstration including P0 core requirements and P1 challenge requirements (IP Calculator, Regex Constraint, Dashboard Prefix Grouping, Custom Fallback).
- Future roadmap envisions agent execution engine integration with LLM API & tool calling capabilities.
