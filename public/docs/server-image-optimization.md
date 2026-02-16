# Server PNG Optimization Playbook

This document centralizes the server-side PNG optimization workflow so that any agent can safely resize and compress assets before publishing.

## Why optimize PNG files?

- Keeps total transfer size low, reducing latency for all clients.
- Prevents repeated manual exports that can degrade image quality or introduce inconsistent dimensions.
- Aligns assets with the site layout, ensuring responsive breakpoints are respected.

## Script overview

- **Location:** `/usr/local/bin/optimize-pngs.sh`
- **Core behavior:**
  - Resizes PNGs to a target width while preserving aspect ratio.
  - Strips metadata and color profile baggage.
  - Re-compresses using `pngquant`, overwriting the original file when it will save bytes.
  - Operates in a “smart mode” by default to avoid unnecessary reprocessing.

## Usage

```bash
optimize-pngs.sh <DIR> <TARGET_WIDTH> <QUALITY_RANGE> <MAX_KB> <FORCE>
```

### Parameters

1. `<DIR>` – Directory root containing PNG assets to optimize.
2. `<TARGET_WIDTH>` – Maximum width in pixels. Wider images are downscaled; narrower ones are left as-is unless `FORCE=1`.
3. `<QUALITY_RANGE>` – `pngquant` min-max quality window (e.g., `65-80`).
4. `<MAX_KB>` – Skip files already at or below this size (kilobytes) unless forced.
5. `<FORCE>` – `1` forces processing regardless of smart checks; `0` keeps smart mode enabled.

### Defaults

| Argument        | Default | Notes                                      |
|-----------------|---------|--------------------------------------------|
| `<DIR>`         | `.`     | Current directory.                         |
| `<TARGET_WIDTH>`| `720`   | Matches primary content column width.      |
| `<QUALITY_RANGE>`| `65-80`| Safe range for pngquant visually.          |
| `<MAX_KB>`      | `180`   | Prevents needless work on already-small files. |
| `<FORCE>`       | `0`     | Keeps smart mode on unless explicitly overridden. |

## Smart mode skip logic (default)

The script inspects each PNG and skips optimization when **all** of the following are true:

1. Image width ≤ `<TARGET_WIDTH>`.
2. File size ≤ `<MAX_KB>`.
3. `<FORCE>` ≠ `1`.

By skipping these files, the workflow avoids re-quantizing assets that already meet requirements, preventing cumulative banding or blur.

## Example (QRIX production assets)

```bash
optimize-pngs.sh /var/www/qrix.ca/public/assets/image 720 65-80 180
```

Run this on a staging copy first when adding large batches of illustrations. After confirming results, run the same command on production-only when deployment windows permit.

## Operational checklist

1. Sync or rsync the target asset directory to ensure files are up to date.
2. Run the script with project defaults (above) inside the asset root.
3. Spot-check a few optimized images before pushing live.
4. Commit or archive the optimized outputs so other agents do not repeat the work.

