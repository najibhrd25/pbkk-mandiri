# TASKS.md — Task Planning & Execution Log

## Active Tasks (Phase 1: Laravel Routing & Sandbox)
- [x] Inisialisasi struktur project Laravel 12
- [x] Menyiapkan dependencies (Composer, NPM, Vite, Tailwind CSS)
- [x] Membuat spesifikasi agent (`AGENT.md`, `MEMORY.md`, `CONTEXT.md`, `TASKS.md`)
- [ ] Menyusun CSS Design System (Rethink Sans + Outfit, token variables, cards, buttons, badges)
- [ ] Membangun layout shell `layouts/app.blade.php` (Sidebar 240px + Top utility bar + Content)
- [ ] Membangun controller arsitektur (`HomeController`, `StudentController`, `AcademicController`, `ProjectController`, `AgentController`, `DashboardController`)
- [ ] Membangun Blade views:
  - [ ] `home.blade.php`
  - [ ] `student/show.blade.php`
  - [ ] `academic/index.blade.php`
  - [ ] `academic/calculator.blade.php`
  - [ ] `projects/index.blade.php`
  - [ ] `agent/show.blade.php`
  - [ ] `dashboard/index.blade.php`
  - [ ] `errors/404.blade.php`
- [ ] Menyusun konfigurasi `routes/web.php` (P0 mandatory, P1 regex, optional param, calculator, grouped dashboard, fallback)
- [ ] Menjalankan verifikasi testing route via `artisan route:list` dan visual check

---

## Future Roadmap (Phase 2 & Beyond)
- [ ] LLM API Provider integration (Anthropic Claude / Gemini)
- [ ] Dynamic Memory synchronization with SQLite database
- [ ] File-based tool calls execution & terminal sandbox runner
