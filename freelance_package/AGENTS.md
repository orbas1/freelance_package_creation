# Agent Instructions – Freelance Package (Laravel + Flutter)

## Overall Goal

Your goal is to create:

1. A **Laravel package** (`freelance_laravel_package`), and  
2. A **Flutter mobile addon package**,

that together provide the **same freelance functionality** on both:

- The **Laravel backend / web app**, and  
- The **Flutter mobile app**.

These will plug into an existing **social media style platform**, moving it towards a **LinkedIn-style professional network**.

> ⚠️ Important: **Do not copy any binary files** (e.g. images, fonts, compiled assets, `.exe`, `.dll`, `.so`, etc.).

---

## Source Applications

- Backend source: `taskup_laravel`  
- Mobile source: `Taskup_phone_app` (React Native)

We will **copy the necessary logic and structure** from these into:

- `freelance_laravel_package` (Laravel package)  
- `freelance_flutter_addon` (Flutter addon package)

The aim is **full feature parity** with the original Taskup freelance functionality.

---

## Part 1 – Laravel Freelance Package (`freelance_laravel_package`)

We are building a **proper Laravel package** (installable via Composer, likely using a `path` repository). This package will be added into the main social app and must include all files required for **full functionality**.

When extracting from `taskup_laravel`, ensure the following areas are copied/refactored into the package:

1. **Config**
   - Package config files (e.g. `config/freelance.php`).
   - Settings for commissions, fees, roles, permissions, feature toggles, etc.

2. **Database**
   - All required **migrations** (gigs, projects, contracts, bids, disputes, escrows, fees/commissions, etc.).
   - Any **seeders** necessary for initial data (roles, default settings, etc.).

3. **Domains**
   - Domain logic for:
     - Users upgrade (freelancer/client capabilities)
     - Gigs
     - Projects
     - Gigs Management
     - Projects Management
     - Disputes
     - Escrow
     - Project bidding
     - Commission and fees
   - Organise by domain folders where appropriate (e.g. `Domain/Gig`, `Domain/Project`, `Domain/Escrow`, `Domain/Dispute`).

4. **Http**
   - Controllers (web + API).
   - Form requests / validation classes.
   - Middleware specific to freelance operations (if any).

5. **Policies**
   - Authorization policies for gigs, projects, contracts, disputes, etc.

6. **Resources**
   - Blade templates.
   - Language files.
   - Any asset stubs that need to be published from the package.

7. **Admin Panel Entries**
   - Menu entries and configuration to expose:
     - Gigs & Projects management.
     - Disputes management.
     - Escrow overview.
     - Commission and fees configuration.
   - Any admin controllers, views, and routes required.

8. **Frontend Views**
   - User-facing views for:
     - Creating/managing gigs & projects.
     - Viewing bids.
     - Managing contracts and milestones.
     - Handling disputes.
     - Viewing escrow status and payments.

9. **Assets**
   - Any **non-binary** assets required (CSS, SCSS, SVG where applicable).
   - Frontend resources that support the freelance UI.

10. **Language Translations**
    - Language files used by the freelance module (e.g. `resources/lang/en/freelance.php`).

11. **JavaScript**
    - Any JS needed for interactive features on the freelance pages.
    - Extract and adapt JS from `taskup_laravel` where relevant.

12. **Routes**
    - Web routes (for admin and frontend).
    - API routes (to be consumed by the Flutter addon).

13. **Services**
    - Service classes for:
      - Escrow handling.
      - Project bidding logic.
      - Commission and fees calculation.
      - Payout logic and status updates.

14. **Support**
    - Helper functions.
    - Enums, DTOs, traits, and other support classes used by the freelance functionality.

15. **Service Provider**
    - `FreelanceServiceProvider.php`:
      - Registers routes, migrations, views, translations, configs.
      - Binds interfaces and services into the container where required.

16. **Documentation**
    - `README.md`:
      - Installation steps (Composer + service provider).
      - Configuration instructions.
      - Summary of features (users upgrade, gigs, projects, disputes, etc.).
      - Notes about required environment or dependencies.

> 🎯 Focus: The Laravel package must deliver **full freelance functionality** when installed into the host social platform.

---

## Part 2 – Flutter Freelance Addon (`freelance_flutter_addon`)

The current phone app (`Taskup_phone_app`) is built in **React Native**.  
We must:

1. Analyse the existing React Native freelance features.
2. Replicate the same functionality in **Flutter**, as a modular **addon package**.
3. Ensure the Flutter addon connects to the **Laravel freelance package API**.

The Flutter addon must include:

1. **`pubspec.yaml`**
   - Define this as a Flutter/Dart package.
   - List dependencies (HTTP client, state management, JSON serialization, etc.).
   - Set the package name appropriately (e.g. `freelance`).

2. **Models**
   - Dart models mirroring the Laravel API responses:
     - User (freelance-related fields).
     - Gig.
     - Project.
     - Bid.
     - Contract.
     - Escrow.
     - Dispute.
     - Commission/fee structures (if needed on client side).

3. **Pages**
   - Flutter UI screens equivalent to the React Native ones:
     - Gigs list, gig details, create/edit gig.
     - Projects list, project details, create/edit project.
     - Bidding screens (browse bids, place a bid, manage bids).
     - Escrow screens (status, release, disputes).
     - Dispute creation and management.
     - Management views for users to handle their gigs/projects/contracts.

4. **Services**
   - API service client(s) to communicate with the Laravel freelance package:
     - Handle authentication (token, headers).
     - Methods like `getGigs()`, `createGig()`, `placeBid()`, `openDispute()`, `getEscrowStatus()`, etc.
   - All endpoints must match the Laravel routes provided by `freelance_laravel_package`.

5. **State**
   - State management (e.g. BLoC, Cubit, Provider, Riverpod, etc.) for:
     - Gigs.
     - Projects.
     - Bids.
     - Escrow operations.
     - Disputes.
   - Reflect the same behaviour and flows as the React Native app.

6. **`menu.dart`**
   - Expose navigation/menu entries for the host app:
     - Example: “Freelance Gigs”, “Projects”, “My Bids”.
   - Provide a simple API so the main app can plug these pages into its global navigation.

7. **API Connection**
   - All network calls must connect to the **corresponding Laravel freelance package API**.
   - Ensure consistent request/response models.
   - Handle errors, auth failures, and offline cases gracefully.

> 🎯 Focus: The Flutter addon must **mirror the freelance functionality of the original React Native app**, but implemented cleanly as a reusable Flutter package, wired to the new Laravel freelance package.

---

## Required Functional Areas (Both Laravel & Flutter)

Both the **Laravel package** and the **Flutter addon** must support the following core functions:

1. **Users Upgrade**
   - Upgrade users to freelancers/clients or enable freelance capabilities in their profile.

2. **Gigs**
   - Create, edit, list, view, and manage gig-based work.

3. **Projects**
   - Create, edit, list, view, and manage project-based work.

4. **Gigs Management**
   - Manage posted gigs (status, visibility, offers/proposals).

5. **Projects Management**
   - Manage posted projects and associated bids/assigned freelancers.

6. **Disputes**
   - Open, view, and manage disputes related to contracts or escrows.

7. **Escrow**
   - Open escrow, view status, release funds, handle refunds (as defined in Taskup).

8. **Project Bidding**
   - Submit bids, view bids on a project, accept/reject bids.

9. **Commission and Fees**
   - Calculate and apply platform commissions and fees for gigs/projects/contracts.
   - Ensure these are reflected correctly in both backend logic and UI.

---

By following this document, the agent should:

- Extract all necessary logic from `taskup_laravel` and `Taskup_phone_app`.
- Rebuild them as:
  - A **modular Laravel freelance package**, and
  - A **modular Flutter freelance addon**,
- Ensuring **feature parity** across web and mobile and seamless integration into the host social/LinkedIn-style platform.
