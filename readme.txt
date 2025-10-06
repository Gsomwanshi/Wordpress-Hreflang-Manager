=== Hreflang Manager ===
Contributors: GaneshDev
Tags: hreflang, seo, internationalization
Requires at least: 6.0
Tested up to: 6.5
Requires PHP: 7.4
Stable tag: 4.3.1
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Manage per-page hreflang mappings and automatically output `<link rel="alternate" hreflang="…">` tags for localized content.

== Description ==

Hreflang Manager lets administrators define localized alternates (including `x-default`) for individual paths or wildcard patterns. Exact matches take precedence, and paths are normalized for consistent lookups.

= Highlights =
* Base Domain override with fallback to `home_url()`.
* Repeater interface for alternates, built with vanilla JavaScript.
* Wildcard support, REST API endpoints, WP-CLI commands.
* Dashboard list + history log to audit mapping changes.
* Multisite-ready with a Network Admin overview.

== Installation ==
1. Upload `hreflang-manager.zip` via Plugins ? Add New ? Upload Plugin (or place the folder into `wp-content/plugins/`).
2. Activate the plugin.
3. Go to Hreflang Manager ? Settings to configure mappings.

== Frequently Asked Questions ==

= Does it work with multisite? =
Yes. Configure mappings per site; the Network Admin menu shows a read-only overview with links to each site’s settings page.

= Can I manage mappings via CLI or REST? =
Yes. Use the `hreflang-manager/v1` REST namespace or run `wp hreflang` commands for automation.

