# QRIX / Curix Project Context

## Language Policy (MANDATORY)

This project is **100% English-only**.

- All source code
- All comments
- All documentation
- All commit messages
- All configuration notes
- All generated content

**MUST be written in English.**

Russian (or any other language) may be used **only for human discussion**, never in project files.

## Purpose

QRIX (Curix) is an infrastructure and product project targeting **English-speaking users**.
Language consistency is critical for:
- collaboration with AI agents
- future automation by MoltBot (Moses)
- external contributors
- scalability and reuse

## AI Agents Rules

These rules apply to **all AI agents** working on this project, including but not limited to:
- Zhenya (GPT-5.2 Codex)
- Kolya (Qwen)

Agents must:
- produce English-only output when modifying or creating project files
- refuse to generate non-English content for this project
- treat this file as the single source of truth for project language rules

## Infrastructure Notes

- Production directory: `/var/www/qrix.ca/public` (static files only)
- Project workspace: `/home/alek/projects/qrix`
- Ops configs stored under: `/home/alek/projects/qrix/ops`
- PNG optimization workflow: see `docs/server-image-optimization.md`
- Agents must NOT work directly in `/var/www`

## Status

Infrastructure is stable.
This context file is authoritative and must be respected by humans and agents alike.
