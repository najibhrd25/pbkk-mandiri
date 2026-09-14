# CONTEXT.md — Project & Operational Context

## Current Phase: MVP Foundation
- **Milestone:** Laravel Routing Sandbox & Academic Agent Workspace
- **Repository Path:** `Tugas_Mandiri`
- **Active Environment:** Local Development Environment

---

## Active Modules & Boundaries
1. **Academic Profile Module:**
   - Exposes student information, academic credentials, and departmental associations.
   - Endpoint: `/mahasiswa/{nrp}` (Requires 10-digit numeric NRP).
2. **Academic Journey & GPA Calculator:**
   - Displays semester-by-semester academic track records.
   - Interactive/URL-based IP calculator: `/hitung-ipk/{ip1}/{ip2}`.
3. **Projects Showcase:**
   - Lists past, ongoing, and conceptual software engineering projects.
4. **Agentic AI Workspace:**
   - Explains the vision of AI agent with tool-calling, persistent memory, and workflow architecture.
   - Endpoint: `/agent/{tema?}` (Optional parameter with default fallback to `General Assistant Agent`).
5. **Dashboard Management Group:**
   - Grouped administration and shortcut center under `/dashboard/*`.
