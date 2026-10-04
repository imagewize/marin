# Changelog

All notable changes to Marin are documented in this file. Marin was created from
[Aviendha](https://github.com/imagewize/aviendha) 1.18.4; earlier history lives in that repository.

## [1.0.3] - 2026-10-04

### Fixed
- `package-lock.json` carried Aviendha's `1.18.3` as its root version; it now matches `package.json`.

## [1.0.2] - 2026-10-04

### Changed
- Positioned Marin as a WooCommerce e-commerce theme rather than a generic starter: `composer.json`
  and `package.json` descriptions, the `package.json` keywords (`woocommerce`, `e-commerce` replace
  `starter-theme`), the README tagline, feature list and WooCommerce requirement, and the opening
  line of `.agents/code-review.md`.

## [1.0.1] - 2026-10-04

### Changed
- **Winespring logo mark** (`assets/logos/marin-winespring-primary.svg`): a grape cluster for the
  Winespring Inn replaces the inherited Aviendha rose. A lighter `marin-winespring-dark.svg` variant
  serves the README in dark mode via `<picture>`. Material Design Icons credited in readme.txt.

## [1.0.0] - 2026-10-04

### Added
- **Store style variation** (`styles/store.json`): cream, charcoal and rust-orange palette mapped onto
  the full 12-slug palette contract, with self-hosted Cormorant Garamond headings and Jost body copy
  under `assets/fonts/store/`. The fonts load only when the variation is active.

### Changed
- Created from Aviendha 1.18.4 and refocused as a WooCommerce theme for client store builds.
  Description, README, readme.txt and agent guides rewritten for Marin.
- Rename workflow: `actions/checkout` now uses `persist-credentials: false`, which fixes the
  rename action's push failing with a duplicate `Authorization` header.
