# Hreflang Manager

WordPress plugin that lets administrators manage per-page hreflang mappings (including `x-default`) and automatically outputs `<link rel="alternate">` tags on matching front-end pages.

## Features
- Base domain override with automatic fallback to `home_url()`.
- Repeater UI for localized alternates using vanilla JavaScript.
- Wildcard mapping support with exact-match precedence.
- Dashboard list and detail views, including a lightweight change history log.
- REST API + WP-CLI utilities for integrations and automation.
- Multisite-ready, including a Network Admin overview page.

## Install & Test
1. Upload `hreflang-manager.zip` via **Plugins ? Add New ? Upload Plugin** (or copy the `hreflang-manager/` folder into `wp-content/plugins/`).
2. Activate **Hreflang Manager**.
3. Open **Hreflang Manager ? Settings**, configure the Base Domain and mappings, then save.
4. Verify front-end pages include the expected `<link rel="alternate" hreflang="…">` tags.
5. Run automated checks locally:
   - `phpunit --configuration tests` (from the plugin directory) to execute the unit tests.
   - `phpcs --standard=phpcs.xml` to confirm coding standards.

### Multisite Notes
- Configure mappings per site; the Network Admin menu shows a read-only overview and deep links to each site’s settings.

### Dashboard Usage
- Use **Hreflang Manager ? Mapped Pages** to search, paginate, and drill into mapping details and history (last 100 changes).

## Hooks
- Actions: `hreflang_manager_before_output`, `hreflang_manager_after_output`, `hreflang_manager_after_save`
- Filters: `hreflang_manager_options`, `hreflang_manager_abs_url`, `hreflang_manager_current_path`, `hreflang_manager_output_allowed`

## Requirements
- PHP 7.4+
- WordPress 6.0+