# Changelog

All notable changes to Marin are documented in this file. Marin was created from
[Aviendha](https://github.com/imagewize/aviendha) 1.18.4; earlier history lives in that repository.

## [1.3.1] - 2026-10-04

### Changed
- Mobile menu overlay (both headers): the open menu is now laid out as a full-screen menu — a
  left-aligned, full-width list of large display-face links separated by hairlines — instead of
  core's shrink-wrapped, right-anchored list of body-size links. Its background is the theme's
  `base` colour rather than core's `#fff`, and the overlay is inset on all four sides so the close
  button and the list share the same margins. The inline desktop menu is unchanged.

## [1.3.0] - 2026-10-04

### Added
- `styles/skincare.json`: a calm sage, cream and clay style variation for skincare and wellness
  stores. Same palette slugs as the base design system, so Aludra blocks and the Store Home pattern
  pick it up unchanged; reuses the Store variation's self-hosted Cormorant Garamond and Jost, so no
  new font files. Every text/background pairing in the palette meets WCAG AA (4.5:1).
- README: the demo-content steps now mention picking the Skincare style.

## [1.2.0] - 2026-10-04

### Added
- `patterns/home-store.php` (`marin/home-store`, **Store Home**): a store front page built from Aludra
  blocks and a WooCommerce product grid — hero, trust bar, category cards, newest products, story,
  stats, reviews and a closing call to action. Skincare copy; the shop, category and kit links are
  resolved at render time. Validated with `sentinel` against the demo install.
- `marin_maybe_unregister_store_home_pattern()` registers the pattern only when WooCommerce is active
  and Aludra's blocks are registered, so it is never offered where it would insert unsupported blocks.

### Changed
- Docs (README, `readme.txt`, `CLAUDE.md`, `AGENTS.md`, `.agents/code-review.md`) now describe Marin as
  shipping one page pattern rather than none, and say the pattern needs Aludra.

## [1.1.0] - 2026-10-04

### Added
- Header product search: an icon-only `core/search` block limited to products (`post_type=product`)
  sits before the account and mini-cart icons in both `parts/header.html` and
  `parts/header-dark.html`.
- README: a "Demo content" section pointing to
  [imagewize/marin-demo-content](https://github.com/imagewize/marin-demo-content), a WP-CLI seeder
  with 16 skincare products and placeholder packshots.

### Changed
- Both headers no longer ship the inherited "Start a project" call-to-action button, which made no
  sense on a store. The `.marin-header__cta` styles were removed with it.

## [1.0.4] - 2026-10-04

### Changed
- README: added an Installation section covering the release zip and `composer require
  imagewize/marin` now that the theme is on Packagist, and corrected the Structure tree (removed the
  non-existent `docs/`, added `assets/fonts/`, the dark-header template and the order-confirmation
  template).
- `CLAUDE.md` and `AGENTS.md`: the template-parts and WooCommerce-template notes now list what
  `parts/` and `templates/` actually contain.

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
