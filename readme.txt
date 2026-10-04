=== Marin WordPress Theme ===
Contributors: Rhand
Tags: e-commerce, full-site-editing, custom-colors, custom-logo, custom-menu, editor-style, featured-images, grid-layout, template-editing, translation-ready, wide-blocks
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 8.0
Stable tag: 1.0.0
License: GNU General Public License v3.0 (or later)
License URI: https://www.gnu.org/licenses/gpl-3.0.html

== Description ==

Marin is a lean full-site-editing (FSE) theme for WooCommerce stores, built to speed up client
e-commerce builds. It provides a design system via `theme.json` (colors, typography, spacing,
layout), WooCommerce block templates, and style variations, but ships no bundled patterns —
page content is composed directly from blocks. Marin is created from the Aviendha starter theme.

Marin pairs with the [Aludra](https://github.com/imagewize/aludra) block library (mega menu,
carousel, FAQ tabs, and more), but doesn't require it — the theme is a plain block theme that
works with core blocks and any block plugin. WooCommerce is needed for the store templates.

= Key Features =

* Full Site Editing (FSE) theme for WooCommerce stores
* Solid design system via `theme.json` (colors, typography, spacing, layout)
* WooCommerce block templates for single product and product archive
* Style variations: Twilight (dark) and Store (warm retail palette, self-hosted fonts)
* No bundled patterns — block-first composition
* Pairs with the Aludra block library (mega menu, carousel, FAQ tabs, and more)
* Translation-ready

== Installation ==

1. Upload the theme folder to `/wp-content/themes/`, or install via Appearance → Themes → Add New.
2. Activate the theme through the 'Appearance' menu in WordPress.
3. Optionally install and activate the Aludra plugin for mega menu, carousel, and other blocks.
4. Install and activate WooCommerce for store functionality.

== Changelog ==

= 1.0.0 =
* Initial release. Created from Aviendha 1.18.4 and focused on WooCommerce stores.
* Added: a Store style variation — cream, charcoal and rust-orange with Cormorant Garamond headings and Jost body copy — mapped onto the full palette contract so Aludra blocks and store patterns render in it. Fonts are self-hosted and load only with the style.

== Third-Party Libraries ==

= Ionicons (via Blade Icons) =
* License: MIT License
* Source: https://blade-ui-kit.com/blade-icons/ionicon-rose
* License URI: https://github.com/driesvints/blade-icons/blob/main/LICENSE.md
* Used in: `assets/logos/marin-rose-primary.svg` and `assets/logos/marin-rose-outline.svg`
* Purpose: The "rose" icon is used, unmodified except for recoloring, as the theme's logo mark.

The MIT License is GPL-compatible.

= Bricolage Grotesque =
* License: SIL Open Font License, Version 1.1
* Source: https://fonts.google.com/specimen/Bricolage+Grotesque
* License URI: https://scripts.sil.org/OFL
* Used in: `assets/fonts/bricolage-grotesque-variable.woff2`
* Purpose: Display font family (headings), self-hosted as a single variable-font file.

= JetBrains Mono =
* License: SIL Open Font License, Version 1.1
* Source: https://fonts.google.com/specimen/JetBrains+Mono
* License URI: https://scripts.sil.org/OFL
* Used in: `assets/fonts/jetbrains-mono-variable.woff2`
* Purpose: Mono font family (eyebrows/labels/metrics), self-hosted as a single variable-font file.

= Cormorant Garamond =
* License: SIL Open Font License, Version 1.1
* Source: https://fonts.google.com/specimen/Cormorant+Garamond
* License URI: https://scripts.sil.org/OFL
* Used in: `assets/fonts/store/CormorantGaramond-VariableFont_wght.woff2` and `CormorantGaramond-Italic-VariableFont_wght.woff2`
* Purpose: Display font family in the Store style variation, self-hosted as variable-font files.

= Jost =
* License: SIL Open Font License, Version 1.1
* Source: https://fonts.google.com/specimen/Jost
* License URI: https://scripts.sil.org/OFL
* Used in: `assets/fonts/store/jost-v20-latin-variable.woff2` and `jost-v20-latin-italic-variable.woff2`
* Purpose: Body font family in the Store style variation, self-hosted as variable-font files.

The SIL Open Font License is GPL-compatible.

== Copyright ==

Marin WordPress Theme, (C) 2026 Jasper Frumau
Marin is distributed under the terms of the GNU GPL v3 (or later).
