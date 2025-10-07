# Contributing

Thanks for your interest in contributing!

## Development Setup
- PHP 7.4+ (8.x recommended)
- A local WordPress environment (single site or multisite)
- Optional: Composer, PHPUnit, PHPCS (WordPress Coding Standards)

## Workflow
1. Fork the repo and create a feature branch: `git checkout -b feat/your-feature`.
2. Make changes with clear, focused commits.
3. Run linters/tests locally.
4. Open a Pull Request with a clear description and screenshots if UI changes.

## Code Style
- PHPCS with the provided `phpcs.xml`.
- Follow WordPress PHP coding standards.

## Commit Messages
- Use conventional-style messages where possible, e.g. `fix:`, `feat:`, `docs:`, `chore:`.

## Releasing
- Bump version in the plugin header (in `hreflang-manager.php`) and tag: `git tag vX.Y.Z && git push --tags`.
- Create a release ZIP with the folder `hreflang-manager/` at the root.
