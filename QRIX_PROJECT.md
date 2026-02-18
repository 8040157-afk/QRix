QRix – Engineering Specification
1. Project Overview

QRix is a QR-based interactive advertising platform.

Users scan a QR code printed on a physical object (cup, popcorn bucket, lunchbox, etc.) and are redirected to a mobile-first web page where they can interact with advertiser actions and earn reward points.

We are currently building a working Static MVP.

This MVP is:

Frontend only

No backend

No database

No tracking yet

No authentication

No real reward logic

The purpose of this MVP is to demonstrate:

QR scan flow

Mobile interaction screen

Clickable advertiser action buttons

Temporary action pages

2. Current Architecture (Authoritative Structure)

Project root:

/var/www/qrix.ca


Public directory:

/public
    index.html          → Landing page (DO NOT MODIFY)
    styles.css          → Landing styles (DO NOT MODIFY)

    qr.php              → QR scan destination (MVP screen with buttons)
    qr.css              → QR page styles
    qr.js               → QR page logic
    action.html         → Temporary action page (mock destination)


The landing page (index.html and styles.css) must not be modified unless explicitly instructed.

All MVP development must happen only in the QR-related files.

3. Current Phase: Static MVP

Rules for this phase:

No backend

No PHP

No database

No API calls

No tracking logic

No user accounts

No points persistence

All buttons are static and defined in JavaScript.

When a button is clicked:

The user is redirected to action.html

The action page displays a temporary message

This is only a structural demonstration of the QR experience.

4. UI & Frontend Rules

Mobile-first design only

Layout centered with max-width suitable for phones

Large tap-friendly buttons

Clear vertical stacking

Clean modern UI

No inline CSS

Separate HTML, CSS, and JS files

No frontend frameworks

No external UI libraries

Keep structure extendable for future backend integration

The QR page must visually resemble a reward interaction screen with multiple large action buttons.

5. Future Architecture Plan (For Reference Only)

In future phases we will introduce:

Advertisers table

Campaigns table

Reward rules

Points tracking

User sessions

Database-driven button rendering

Action validation

Analytics

Current code must remain simple and extendable.

Do not implement future features unless explicitly instructed.

6. Git Workflow Rules

Always make atomic commits

Commit after each logical change

Never modify landing page without approval

Never remove assets without approval

Never rewrite Git history unless instructed

7. Development Behavior

Do not assume backend exists

Do not invent features

Do not overengineer

Follow instructions strictly

Ask for clarification if architecture is unclear

If instructions conflict, follow this file as authoritative specification.
