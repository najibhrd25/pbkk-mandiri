# PRD — Academic Agent Workspace

**Document Type:** Product Requirements Document  
**Version:** 1.0  
**Status:** Draft for Implementation  
**Platform:** Web Application  
**Framework:** Laravel  
**Project Context:** Tugas Mandiri Laravel Local Sandbox — Instalasi & Routing  
**Primary Focus:** Laravel Routing, Academic Profile, dan konsep awal Agentic AI

---

## 1. Ringkasan Produk

**Academic Agent Workspace** adalah aplikasi web berbasis Laravel yang berfungsi sebagai profil akademik mahasiswa sekaligus prototype awal untuk ide platform Agentic AI.

Pada tahap tugas ini, fokus utama aplikasi adalah menunjukkan pemahaman terhadap routing Laravel, khususnya:

- static route;
- required route parameter;
- optional route parameter;
- named route;
- route constraint menggunakan regex;
- route grouping;
- route prefix;
- fallback route.

Bagian Agentic AI pada versi awal **belum berupa AI agent yang benar-benar berjalan**. Fitur tersebut masih berupa representasi konsep produk yang akan dikembangkan lebih lanjut di tahap berikutnya.

Konsep Agentic AI dirancang menyerupai pola kerja coding agent modern, yaitu memiliki:

- identitas dan peran agent;
- project context;
- persistent memory;
- task context;
- rules/instructions;
- rencana penggunaan tools;
- workflow dari context sampai action.

Dokumen seperti `AGENT.md`, `MEMORY.md`, `CONTEXT.md`, dan `TASKS.md` digunakan sebagai representasi awal dari struktur agent.

---

# 2. Latar Belakang

Tugas perkuliahan meminta mahasiswa membangun aplikasi profil akademik statis berbasis Laravel dengan local routing sandbox.

Aplikasi harus dapat:

1. menampilkan halaman utama;
2. menampilkan profil mahasiswa berdasarkan NRP;
3. menampilkan ide platform Agentic AI melalui route dengan parameter opsional;
4. menggunakan named routes;
5. menerapkan challenge tambahan berupa:
   - regex NRP;
   - kalkulator IP;
   - route grouping;
   - route fallback.

Selain memenuhi spesifikasi teknis, aplikasi dirancang agar dapat menjadi fondasi proyek lanjutan selama semester.

---

# 3. Problem Statement

Profil akademik mahasiswa umumnya hanya berfungsi sebagai halaman informasi statis.

Aplikasi ini mencoba mengembangkan konsep tersebut menjadi sebuah **academic workspace** yang tidak hanya menampilkan profil dan riwayat akademik, tetapi juga memperkenalkan ide AI agent yang mampu memahami konteks proyek dan menyimpan informasi penting secara persisten.

Pada tahap awal, sistem masih berupa aplikasi Laravel sederhana. Namun arsitekturnya disiapkan agar di masa depan dapat berkembang menjadi sistem Agentic AI yang memiliki kemampuan:

- memahami konteks;
- membaca instruksi;
- menyimpan memory;
- menentukan task;
- membuat plan;
- menggunakan tools;
- menjalankan action;
- melakukan review;
- memperbarui memory.

---

# 4. Product Vision

Membangun academic workspace yang dapat berkembang dari:

```text
Static Academic Profile
```

menjadi:

```text
Academic Profile
        +
Project Context
        +
Persistent Memory
        +
AI Agent
        +
Tools
        +
Task Execution
```

Versi tugas saat ini berfokus pada fondasi routing dan interface konsep.

---

# 5. Product Goals

## 5.1 Goal Utama

Produk harus:

1. memenuhi seluruh requirement routing Laravel yang diberikan dosen;
2. menyajikan profil akademik mahasiswa secara jelas;
3. menampilkan ide Agentic AI dalam bentuk prototype yang mudah dipahami;
4. menggunakan struktur route yang maintainable;
5. menggunakan named route untuk navigasi internal;
6. memiliki kode yang sederhana, rapi, dan mudah dipresentasikan;
7. dapat dikembangkan menjadi proyek Agentic AI yang lebih lengkap di masa depan.

---

# 6. Non-Goals

Fitur berikut **tidak termasuk scope MVP saat ini**:

- integrasi OpenAI API;
- integrasi Anthropic API;
- integrasi Gemini API;
- implementasi LLM runtime;
- autonomous agent execution;
- terminal execution;
- browser automation;
- RAG;
- vector database;
- MCP server;
- multi-agent orchestration;
- authentication;
- role management;
- database kompleks;
- real-time collaboration;
- cloud deployment.

Fitur-fitur tersebut dapat masuk ke future development.

---

# 7. Target User

## 7.1 Primary User

**Mahasiswa / Pemilik Portfolio**

Mahasiswa menggunakan aplikasi untuk:

- menampilkan identitas akademik;
- menampilkan perjalanan akademik;
- menampilkan project;
- menunjukkan ide Agentic AI;
- melakukan demo tugas Laravel.

---

# 8. User Stories

## 8.1 Visitor

Sebagai visitor, saya ingin membuka homepage agar dapat mengetahui identitas singkat pemilik aplikasi.

Sebagai visitor, saya ingin membuka halaman profil mahasiswa berdasarkan NRP agar dapat melihat informasi akademik mahasiswa tersebut.

Sebagai visitor, saya ingin melihat ide Agentic AI agar dapat memahami konsep proyek akhir yang ingin dikembangkan.

Sebagai visitor, saya ingin membuka halaman project agar dapat melihat project yang pernah atau sedang dikerjakan mahasiswa.

---

## 8.2 Student / Developer

Sebagai mahasiswa, saya ingin seluruh navigasi menggunakan named route agar struktur aplikasi lebih maintainable.

Sebagai mahasiswa, saya ingin route profil hanya menerima NRP valid agar parameter URL lebih aman.

Sebagai mahasiswa, saya ingin memiliki route dengan optional parameter agar dapat menunjukkan pemahaman Laravel routing.

Sebagai mahasiswa, saya ingin memiliki route group dengan prefix agar route yang berhubungan dapat dikelompokkan.

Sebagai mahasiswa, saya ingin aplikasi memiliki fallback route agar URL yang tidak valid tetap ditangani dengan baik.

---

# 9. Product Scope

MVP terdiri dari fitur berikut:

| ID | Fitur | Prioritas |
|---|---|---|
| F-01 | Homepage | P0 |
| F-02 | Student Profile | P0 |
| F-03 | Required Route Parameter | P0 |
| F-04 | Agentic AI Page | P0 |
| F-05 | Optional Route Parameter | P0 |
| F-06 | Named Routes | P0 |
| F-07 | Academic Journey | P1 |
| F-08 | Projects | P1 |
| F-09 | NRP Regex Validation | P1 |
| F-10 | IP Calculator | P1 |
| F-11 | Dashboard Route Group | P1 |
| F-12 | Fallback Route | P1 |
| F-13 | Agent Memory Concept | P1 |
| F-14 | Agent Context Concept | P1 |
| F-15 | Agent Task Concept | P1 |

---

# 10. Information Architecture

```text
Academic Agent Workspace
│
├── Home
│
├── Profile
│   └── Student Profile
│
├── Academic
│   ├── Academic Journey
│   └── IP Calculator
│
├── Projects
│
├── Agent
│   ├── Agent Overview
│   ├── Agent Profile
│   ├── Memory
│   ├── Context
│   ├── Tasks
│   └── Future Tools
│
└── Error
    └── 404 / Fallback
```

---

# 11. Navigation

Primary navigation:

```text
Home
Profile
Academic
Projects
Agent
```

Semua internal link wajib menggunakan Laravel named routes.

Contoh:

```php
route('home')
```

bukan:

```html
<a href="/">
```

---

# 12. Functional Requirements

---

## F-01 — Homepage

### Purpose

Menjadi landing page utama aplikasi.

### Route

```text
/
```

### Named Route

```text
home
```

### Content

Homepage minimal menampilkan:

- nama mahasiswa;
- program studi;
- deskripsi singkat;
- fokus saat ini;
- ringkasan akademik;
- ringkasan project;
- preview Agentic AI.

### CTA

Minimal terdapat link menuju:

- Profile;
- Academic;
- Projects;
- Agent.

### Acceptance Criteria

- route `/` dapat diakses;
- halaman tampil tanpa error;
- internal navigation menggunakan named route;
- halaman dapat mengarahkan user ke fitur utama lainnya.

---

# 13. F-02 — Student Profile

### Purpose

Menampilkan profil lengkap mahasiswa.

### Route

```text
/mahasiswa/{nrp}
```

### Named Route

```text
student.show
```

### Parameter

```text
nrp
```

Parameter bersifat **required**.

### Data

Halaman menampilkan:

- nama lengkap;
- NRP;
- program studi;
- departemen;
- fakultas;
- universitas;
- angkatan;
- deskripsi singkat;
- skill;
- academic interest;
- current focus.

### Acceptance Criteria

- halaman tidak dapat digunakan tanpa parameter NRP;
- NRP dari URL dapat ditampilkan pada halaman;
- halaman menggunakan route parameter Laravel;
- route memiliki nama;
- internal link tidak menggunakan hardcoded URL.

---

# 14. F-03 — NRP Route Constraint

### Purpose

Membatasi parameter NRP agar hanya menerima format yang valid.

### Format

NRP harus berupa:

```text
10 digit angka
```

### Contoh Valid

```text
5025123456
```

### Contoh Tidak Valid

```text
ABC123
12345
5025ABC456
```

### Laravel Constraint

```php
->where('nrp', '[0-9]{10}')
```

### Acceptance Criteria

- route menerima NRP 10 digit;
- route menolak parameter yang berisi huruf;
- route menolak digit kurang dari 10;
- route menolak digit lebih dari 10.

---

# 15. F-04 — Academic Journey

### Purpose

Menampilkan perjalanan akademik mahasiswa.

### Content

Contoh informasi:

- semester;
- tahun akademik;
- IP;
- jumlah SKS;
- highlight akademik;
- project akademik.

### Data Source

Untuk MVP, data boleh:

```text
hardcoded / static
```

Database belum diperlukan.

### Acceptance Criteria

- data akademik dapat dibaca dengan jelas;
- struktur semester konsisten;
- tidak diperlukan CRUD.

---

# 16. F-05 — IP Calculator

### Purpose

Memenuhi challenge tambahan kalkulator akademik.

### Route

```text
/hitung-ipk/{ip1}/{ip2}
```

### Named Route

```text
academic.gpa.calculate
```

### Parameters

```text
ip1
ip2
```

### Calculation

```text
average = (ip1 + ip2) / 2
```

### Example

```text
/hitung-ipk/3.50/3.80
```

Output:

```text
Semester 1: 3.50
Semester 2: 3.80
Average: 3.65
```

### Validation

Nilai idealnya dibatasi:

```text
0.00 <= IP <= 4.00
```

### Acceptance Criteria

- menerima dua parameter IP;
- melakukan kalkulasi dengan benar;
- hasil ditampilkan pada halaman;
- route memiliki named route;
- input invalid ditangani dengan aman.

---

# 17. F-06 — Projects

### Purpose

Menampilkan project yang pernah atau sedang dikerjakan mahasiswa.

### Data

Setiap project dapat memiliki:

- title;
- description;
- technology;
- status;
- category;
- link opsional.

### Contoh

```text
Academic Agent Workspace
Laravel
Active

Project Portfolio
Web Development
Completed

Academic Project Agent
Agentic AI
Concept
```

### Acceptance Criteria

- minimal satu project ditampilkan;
- project Agentic AI harus terlihat sebagai future project;
- tidak diperlukan CRUD untuk MVP.

---

# 18. F-07 — Agentic AI Overview

### Purpose

Menampilkan ide platform Agentic AI yang akan dikembangkan.

### Route

```text
/agent/{tema?}
```

### Named Route

```text
agent.show
```

### Parameter

```text
tema
```

Parameter bersifat **optional**.

### Default Value

Jika parameter tidak diberikan:

```text
General Assistant Agent
```

### Example

```text
/agent
```

menghasilkan tema:

```text
General Assistant Agent
```

Sedangkan:

```text
/agent/academic
```

dapat menghasilkan:

```text
Academic Agent
```

### Acceptance Criteria

- `/agent` dapat dibuka;
- `/agent/{tema}` dapat dibuka;
- parameter `tema` bersifat opsional;
- fallback value tersedia;
- route memiliki named route.

---

# 19. Konsep Agentic AI

Agent yang dirancang dalam proyek adalah:

# Academic Project Agent

Agent ini diposisikan sebagai AI assistant yang memahami:

- konteks project;
- requirement;
- keputusan teknis;
- objective;
- progress;
- task aktif;
- informasi yang perlu dipertahankan dalam memory.

Tujuan jangka panjangnya adalah membantu mahasiswa dalam:

- memahami requirement;
- merencanakan pekerjaan;
- menjaga konsistensi implementasi;
- mengingat keputusan sebelumnya;
- merekomendasikan next action;
- menggunakan tools;
- mengevaluasi hasil.

---

# 20. Agent Model

Konsep agent mengikuti workflow:

```text
User Request
     ↓
Read Instructions
     ↓
Read Context
     ↓
Read Memory
     ↓
Understand Goal
     ↓
Create Plan
     ↓
Choose Tool
     ↓
Execute Action
     ↓
Review Result
     ↓
Update Memory
```

Pada versi MVP:

```text
Read
Plan
Execute
Review
Update
```

masih berupa konsep dan visual representation.

Belum terdapat AI runtime yang sebenarnya.

---

# 21. Agent Workspace

Halaman Agent sebaiknya menampilkan beberapa area konsep:

```text
Agent Overview
Agent Role
Current Context
Persistent Memory
Current Tasks
Planned Tools
Agent Workflow
```

---

# 22. Agent Profile

Agent mempunyai metadata berikut:

```text
Name:
Academic Project Agent

Type:
Personal Academic & Project Agent

Status:
Concept Prototype

Primary Goal:
Assist the student in understanding, planning,
and maintaining academic software projects.
```

---

# 23. Agent Capability

Capability konseptual:

```text
Project Context Understanding
Requirement Understanding
Persistent Memory
Task Tracking
Planning
Recommendation
Project Decision Tracking
Future Tool Usage
```

Capability tersebut belum harus dijalankan oleh LLM pada MVP.

---

# 24. Agent File Structure

Direktori agent direkomendasikan:

```text
agent/
├── AGENT.md
├── MEMORY.md
├── CONTEXT.md
└── TASKS.md
```

File tersebut dapat digunakan sebagai fondasi Agentic AI di versi lanjutan.

---

# 25. AGENT.md

## Purpose

Mendefinisikan identitas, tujuan, aturan, dan behaviour agent.

## Concept

`AGENT.md` menjawab:

```text
Who am I?
How should I work?
What rules should I follow?
```

## Example Structure

```md
# Academic Project Agent

## Role

You are an academic project assistant.

## Primary Goal

Help the student understand, plan,
and implement academic software projects.

## Responsibilities

- Understand project requirements
- Follow existing technical decisions
- Maintain project consistency
- Avoid unnecessary complexity
- Track important project decisions

## Workflow

1. Read CONTEXT.md
2. Read MEMORY.md
3. Read TASKS.md
4. Understand the user request
5. Create a plan
6. Execute the task
7. Review the result
8. Update project memory when necessary
```

---

# 26. MEMORY.md

## Purpose

Menyimpan informasi penting yang perlu dipertahankan antar task.

`MEMORY.md` berfungsi sebagai **persistent project memory**.

## Memory Content

Contoh informasi:

```text
Project identity
Technical decisions
Architecture decisions
User preferences
Current milestone
Important constraints
Previous decisions
Current project state
```

## Example

```md
# Project Memory

## Project

Name:
Academic Agent Workspace

Framework:
Laravel

Frontend:
Blade

## Main Objective

Complete the Laravel routing assignment.

## Important Decisions

- Use named routes for all internal navigation
- Avoid hardcoded application URLs
- No database required for MVP
- Agentic AI remains conceptual in MVP
- MEMORY.md acts as persistent project context
```

---

# 27. CONTEXT.md

## Purpose

Menjelaskan situasi proyek yang sedang dikerjakan.

`CONTEXT.md` menjawab:

```text
What project am I currently working on?
Why does this project exist?
What are the current constraints?
```

## Example

```md
# Project Context

This project is an academic assignment
for Laravel Installation & Routing.

The main focus is Laravel route architecture.

The current Agentic AI feature is only
a conceptual prototype.

Future versions may introduce
a real AI agent runtime.
```

---

# 28. TASKS.md

## Purpose

Menyimpan task aktif dan progress.

## Example

```md
# Project Tasks

## Current Tasks

- [x] Initialize Laravel project
- [x] Create homepage route
- [ ] Create student profile route
- [ ] Add NRP regex
- [ ] Create agent route
- [ ] Add optional agent theme
- [ ] Add GPA calculator
- [ ] Add dashboard group
- [ ] Add fallback route

## Future Tasks

- [ ] Integrate LLM
- [ ] Implement agent memory runtime
- [ ] Add tool system
- [ ] Add authentication
- [ ] Add database
```

---

# 29. Perbedaan Agent Files

| File | Responsibility |
|---|---|
| `AGENT.md` | Mendefinisikan identitas dan behaviour agent |
| `MEMORY.md` | Menyimpan informasi penting jangka panjang |
| `CONTEXT.md` | Menjelaskan konteks project saat ini |
| `TASKS.md` | Menyimpan pekerjaan aktif dan progress |

Mental model:

```text
AGENT.md
Who am I?

MEMORY.md
What do I know?

CONTEXT.md
What am I working on?

TASKS.md
What should I do next?
```

---

# 30. Planned Agent Tools

Pada MVP, tools hanya ditampilkan sebagai konsep.

Future tools dapat mencakup:

```text
File Reader
File Writer
Project Search
Task Manager
Calendar
LMS Connector
Web Search
Git
Terminal
Database
```

Tidak ada requirement untuk mengimplementasikan tools tersebut pada tugas saat ini.

---

# 31. Agent States

Untuk future development, agent dapat memiliki state:

```text
Idle
Reading Context
Planning
Executing
Reviewing
Completed
Failed
```

Untuk MVP, status dapat berupa static badge:

```text
Concept Prototype
```

---

# 32. Agent Memory Lifecycle

Konsep memory lifecycle:

```text
User Request
     ↓
Retrieve Relevant Memory
     ↓
Use Memory During Planning
     ↓
Execute Task
     ↓
Evaluate New Information
     ↓
Update Memory
```

Tujuan memory adalah mencegah agent kehilangan konteks penting dari pekerjaan sebelumnya.

---

# 33. Dashboard Route Group

### Purpose

Memenuhi challenge route grouping dan prefix.

### Prefix

```text
/dashboard
```

### Suggested Structure

```text
/dashboard
/dashboard/profile
/dashboard/academic
/dashboard/projects
/dashboard/agent
```

### Suggested Names

```text
dashboard.index
dashboard.profile
dashboard.academic
dashboard.projects
dashboard.agent
```

### Example Laravel Structure

```php
Route::prefix('dashboard')
    ->name('dashboard.')
    ->group(function () {
        // routes
    });
```

### Acceptance Criteria

- seluruh dashboard route berada di dalam group;
- seluruh URL menggunakan prefix `/dashboard`;
- seluruh route memiliki nama konsisten;
- navigation dapat menggunakan named route.

---

# 34. Fallback Route

### Purpose

Menangani URL yang tidak tersedia.

### Requirement

Gunakan:

```php
Route::fallback(...)
```

### Result

Jika user membuka route tidak dikenal:

```text
/invalid-page
```

system menampilkan halaman custom 404.

### Content

Minimal:

```text
404
Page Not Found

The page you are looking for does not exist.

Back to Home
```

### Acceptance Criteria

- invalid URL tidak menghasilkan halaman error default yang tidak terkontrol;
- user mendapat informasi bahwa halaman tidak ditemukan;
- tersedia link kembali ke homepage.

---

# 35. Named Route Requirement

Semua route utama wajib memiliki nama.

Contoh:

```text
home

student.show

academic.index

academic.gpa.calculate

projects.index

agent.show

dashboard.index

dashboard.profile

dashboard.academic

dashboard.projects

dashboard.agent
```

Navigation harus menggunakan:

```php
route('route.name')
```

---

# 36. Suggested Route Architecture

```text
GET /
→ home

GET /mahasiswa/{nrp}
→ student.show

GET /academic
→ academic.index

GET /projects
→ projects.index

GET /agent/{tema?}
→ agent.show

GET /hitung-ipk/{ip1}/{ip2}
→ academic.gpa.calculate
```

Grouped routes:

```text
GET /dashboard
→ dashboard.index

GET /dashboard/profile
→ dashboard.profile

GET /dashboard/academic
→ dashboard.academic

GET /dashboard/projects
→ dashboard.projects

GET /dashboard/agent
→ dashboard.agent
```

Fallback:

```text
Route::fallback(...)
```

---

# 37. Route Requirement Matrix

| Route | Parameter | Parameter Type | Named Route | Requirement |
|---|---|---|---|---|
| `/` | - | - | `home` | Mandatory |
| `/mahasiswa/{nrp}` | `nrp` | Required | `student.show` | Mandatory |
| `/agent/{tema?}` | `tema` | Optional | `agent.show` | Mandatory |
| `/academic` | - | - | `academic.index` | Recommended |
| `/projects` | - | - | `projects.index` | Recommended |
| `/hitung-ipk/{ip1}/{ip2}` | `ip1`, `ip2` | Required | `academic.gpa.calculate` | Challenge |
| `/dashboard/*` | varies | Grouped | `dashboard.*` | Challenge |
| fallback | - | - | - | Challenge |

---

# 38. Validation Rules

## NRP

```text
Required
Numeric
Length = 10
```

## IP

```text
Numeric
Minimum = 0
Maximum = 4
```

## Agent Theme

```text
Optional
String
URL-safe parameter
```

---

# 39. Error Handling

System minimal harus menangani:

### Invalid NRP

Result:

```text
404 / route not matched
```

### Invalid IP

Result dapat berupa:

```text
Invalid GPA value
```

### Unknown Route

Result:

```text
Custom fallback 404
```

---

# 40. Data Strategy

Untuk MVP:

```text
No Database Required
```

Data dapat disimpan melalui:

- array;
- config;
- controller variables;
- static class data;
- Blade variable.

Tujuannya agar project tetap sesuai scope tugas routing.

Database baru dipertimbangkan ketika fitur membutuhkan:

- multiple users;
- dynamic projects;
- editable memory;
- real agent sessions;
- authentication.

---

# 41. Technical Principles

Project mengikuti prinsip berikut:

## Keep It Simple

Tidak menambahkan architecture yang belum diperlukan.

## Named Route First

Semua internal navigation menggunakan named routes.

## No Hardcoded URL

Hindari:

```text
href="/profile"
```

Gunakan:

```php
route('student.show', ...)
```

## Clear Naming

Route, variable, dan view menggunakan naming yang mudah dipahami.

## Separation of Responsibility

Route tidak sebaiknya menampung business logic yang besar.

Jika logic bertambah, gunakan controller.

---

# 42. Suggested Laravel Structure

```text
app/
├── Http/
│   └── Controllers/
│       ├── HomeController.php
│       ├── StudentController.php
│       ├── AcademicController.php
│       ├── ProjectController.php
│       └── AgentController.php
│
resources/
└── views/
    ├── home.blade.php
    ├── student/
    │   └── show.blade.php
    ├── academic/
    │   ├── index.blade.php
    │   └── calculator.blade.php
    ├── projects/
    │   └── index.blade.php
    ├── agent/
    │   └── show.blade.php
    └── errors/
        └── 404.blade.php

routes/
└── web.php

agent/
├── AGENT.md
├── MEMORY.md
├── CONTEXT.md
└── TASKS.md
```

Controller bersifat opsional jika dosen menginginkan fokus route yang sederhana.

---

# 43. MVP Priority

## P0 — Mandatory Assignment

Harus selesai sebelum fitur lain:

- Laravel project berjalan;
- homepage;
- student profile;
- required NRP parameter;
- agent page;
- optional agent parameter;
- default agent theme;
- named routes;
- internal navigation menggunakan named route.

---

## P1 — Challenge A+

Setelah P0 selesai:

- NRP regex;
- IP calculator;
- dashboard route grouping;
- dashboard prefix;
- custom fallback route.

---

## P2 — Product Polish

Setelah requirement teknis selesai:

- Academic Journey;
- Projects;
- Agent Profile;
- Memory section;
- Context section;
- Tasks section;
- Future Tools section.

---

# 44. Future Development

Setelah MVP, Agentic AI dapat dikembangkan menjadi agent sebenarnya.

Future architecture:

```text
User
  ↓
Agent Runtime
  ↓
System Instructions
  ↓
Context Retrieval
  ↓
Memory Retrieval
  ↓
Planner
  ↓
Tool Selection
  ↓
Action Execution
  ↓
Result Evaluation
  ↓
Memory Update
```

---

# 45. Future Phase 1 — LLM Integration

Agent mulai dapat:

- menerima user message;
- membaca `AGENT.md`;
- membaca `CONTEXT.md`;
- membaca `MEMORY.md`;
- membaca `TASKS.md`;
- membuat jawaban berdasarkan project context.

Belum perlu tool execution.

---

# 46. Future Phase 2 — Task Planning

Agent mulai dapat:

- menerima goal;
- memecah goal menjadi subtasks;
- menyimpan task;
- menentukan progress;
- merekomendasikan next action.

---

# 47. Future Phase 3 — Tool Usage

Agent mulai menggunakan tools:

```text
Read File
Write File
Search Project
Git
Calendar
LMS
Web Search
```

---

# 48. Future Phase 4 — Persistent Agent Memory

Memory tidak hanya berupa Markdown statis.

System dapat memiliki:

```text
Short-Term Memory
Long-Term Memory
Project Memory
Task Memory
```

`MEMORY.md` tetap dapat digunakan sebagai human-readable persistent context.

---

# 49. Success Metrics

Untuk tahap tugas, keberhasilan bukan diukur berdasarkan jumlah user.

Keberhasilan diukur berdasarkan:

### Technical Success

- semua required route berjalan;
- parameter required bekerja;
- parameter optional bekerja;
- named route digunakan;
- regex constraint bekerja;
- route group bekerja;
- fallback bekerja;
- tidak ada error selama demo.

### Code Quality

- kode rapi;
- naming konsisten;
- tidak ada hardcoded URL internal;
- struktur mudah dijelaskan.

### Demo Readiness

Mahasiswa dapat menjelaskan:

- fungsi route;
- required parameter;
- optional parameter;
- named route;
- regex;
- grouping;
- fallback;
- konsep Agentic AI;
- fungsi `MEMORY.md`.

---

# 50. Definition of Done

Project MVP dianggap selesai jika semua kondisi berikut terpenuhi:

- [ ] Laravel dapat dijalankan secara lokal.
- [ ] Homepage tersedia.
- [ ] Student profile tersedia.
- [ ] Route `/mahasiswa/{nrp}` menggunakan parameter wajib.
- [ ] NRP dibatasi menjadi 10 digit.
- [ ] Route `/agent/{tema?}` tersedia.
- [ ] Parameter `tema` bersifat optional.
- [ ] Default agent menggunakan `General Assistant Agent`.
- [ ] Semua route utama menggunakan named route.
- [ ] Internal navigation tidak menggunakan hardcoded URL.
- [ ] Academic Journey tersedia.
- [ ] Project section tersedia.
- [ ] IP calculator berfungsi.
- [ ] Dashboard menggunakan route group dan prefix.
- [ ] Fallback route tersedia.
- [ ] Halaman 404 tersedia.
- [ ] Agent concept dapat dijelaskan.
- [ ] `AGENT.md` tersedia.
- [ ] `MEMORY.md` tersedia.
- [ ] `CONTEXT.md` tersedia.
- [ ] `TASKS.md` tersedia.
- [ ] Repository dapat diunggah ke GitHub.
- [ ] `.env` tidak masuk GitHub.
- [ ] `vendor/` tidak masuk GitHub.
- [ ] Project siap didemokan maksimal 5 menit.

---

# 51. Demo Flow

Urutan demo yang direkomendasikan:

```text
1. Homepage
        ↓
2. Student Profile
        ↓
3. Show Required NRP Parameter
        ↓
4. Show NRP Regex
        ↓
5. Agent Route
        ↓
6. Show Optional Theme
        ↓
7. Show Default Agent Theme
        ↓
8. IP Calculator
        ↓
9. Dashboard Route Group
        ↓
10. Invalid URL → Fallback
        ↓
11. Explain Agentic AI Concept
        ↓
12. Explain MEMORY.md
```

---

# 52. Agentic AI Demo Explanation

Penjelasan singkat yang dapat digunakan:

> Academic Project Agent adalah konsep AI agent yang tidak hanya menerima prompt dan memberikan jawaban, tetapi juga memiliki project context, persistent memory, task, dan instruction. Pada versi tugas ini agent masih berupa prototype. `MEMORY.md` digunakan sebagai representasi persistent memory agar informasi penting mengenai project dan keputusan sebelumnya tidak hilang. Di tahap berikutnya, agent dapat dikembangkan agar membaca context, membuat plan, menggunakan tools, menjalankan action, lalu memperbarui memory berdasarkan hasil pekerjaan.

---

# 53. Final Product Positioning

Produk pada tahap MVP diposisikan sebagai:

```text
Academic Profile
+
Laravel Routing Demonstration
+
Agentic AI Concept Prototype
```

Bukan sebagai:

```text
Full Autonomous AI Agent
```

Project harus tetap sederhana dan sesuai scope tugas, tetapi mempunyai fondasi yang cukup baik untuk dikembangkan menjadi platform Agentic AI di akhir semester.

---

# 54. Summary

Academic Agent Workspace adalah aplikasi Laravel sederhana yang menggabungkan profil akademik dengan prototype ide Agentic AI.

Komponen utama:

```text
Home
Profile
Academic Journey
Projects
Agent Workspace
IP Calculator
Dashboard Routes
Fallback
```

Konsep Agentic AI menggunakan:

```text
AGENT.md
MEMORY.md
CONTEXT.md
TASKS.md
```

sebagai dasar arsitektur context dan memory.

Prioritas implementasi tetap:

```text
Laravel Routing
        ↓
Requirement Assignment
        ↓
Challenge A+
        ↓
Agentic AI Prototype
        ↓
Future Real Agent
```

Dengan demikian aplikasi memenuhi kebutuhan tugas saat ini tanpa kehilangan arah pengembangan ke proyek Agentic AI yang lebih kompleks di masa depan.
