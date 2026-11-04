# Changelog

All notable changes to `ichava/icon-sets-remix` follow [Keep a Changelog](https://keepachangelog.com/en/1.0.0/) and [Semantic Versioning](https://semver.org/).

## [Unreleased]

## [0.1.0] - TBD

First release of `ichava/icon-sets-remix`.

### Added

- **Remix Icon 4.8.0 from `Remix-Design/RemixIcon` at `v4.8.0`**: 3,188 SVGs in 20 categories. The licence was read at that exact version before anything was vendored: Apache-2.0 at `v4.8.0`, the last Apache-2.0 release; the pack is pinned there and never follows `latest`. Its text ships at `resources/assets/svg/licenses/RemixIcon/License`, and `config.json` records its SPDX id, SHA-256 and check date under `license`.
- **`ATTRIBUTION.md`** carries the upstream owner, the vendored version, the licence verbatim and what was changed, and the README's License section points at it.
- **The pack declares its SVG kind**: `package.kind` is `icon`, with no category, item or rule override.
- **Weekly upstream sync** through icon-sets-sync's reusable `sync-pack.yml`, pinned to commit `5fa93a687c120644f75d072a9cdd83833b9f3d80`. It has nothing to run until icon-sets-sync gains `config/icon-sets-remix.json`.
- **Tests:** the provider boots and the icons resolve; the licence record matches the shipped licence file byte for byte; no SVG carries stray text; and the attribution, docs-shape, kind, personal-contact, PHPStan-level, release-version, sibling-constraint, sync-caller and workflow-permission guards the other packs carry.
