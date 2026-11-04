# ichava/icon-sets-remix

[![Packagist](https://img.shields.io/packagist/v/ichava/icon-sets-remix)](https://packagist.org/packages/ichava/icon-sets-remix)
[![Tests](https://github.com/ichava/icon-sets-remix/actions/workflows/tests.yml/badge.svg)](https://github.com/ichava/icon-sets-remix/actions/workflows/tests.yml)
[![Static analysis](https://github.com/ichava/icon-sets-remix/actions/workflows/code-quality.yml/badge.svg)](https://github.com/ichava/icon-sets-remix/actions/workflows/code-quality.yml)
[![License MIT](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE)

> Remix Icon for the Ichava Laravel icon ecosystem: 3,188 SVGs in 20 categories, vendored from `Remix-Design/RemixIcon` at `v4.8.0` 4.8.0.

Requires [`ichava/core`](https://github.com/ichava/core) `^0.1` on PHP `^8.4.1 || ^8.5` and Laravel `^13`.

**Pinned to Remix Icon v4.8.0**, the last release under Apache-2.0. Later releases are not redistributable as a pack; see [Attribution](docs/attribution.md).

## Install

`ichava/core` and this pack come from Packagist. The `laranail/*` packages core depends on are not on Packagist yet, so the **application's** `composer.json` names them:

```json
{
    "repositories": [
        { "type": "vcs", "url": "https://github.com/laranail/package-tools" },
        { "type": "vcs", "url": "https://github.com/laranail/console" },
        { "type": "vcs", "url": "https://github.com/laranail/enumerator" },
        { "type": "vcs", "url": "https://github.com/laranail/db-tools" }
    ]
}
```

Then require the pack:

```bash
composer require ichava/icon-sets-remix
```

The service provider is discovered automatically. Core's [installation guide](https://github.com/ichava/core/blob/main/docs/installation.md) covers core's own setup.

## Quick start guide and usage

### Getting started

Seed the pack once after installing it, and again after upgrading it:

```bash
php artisan ichava::ichava-core.database seed --package=ichava/icon-sets-remix
```

The seed is not optional: until it runs the registry holds no rows for this pack and every lookup returns nothing. No configuration is needed; the defaults are merged without publishing anything.

### Usage

Icons are addressed as `ichava/icon-sets-remix::<category>/<name>`. In Blade, through core's component:

```blade
<x-ichava::icon name="ichava/icon-sets-remix::buildings/home-line" class="w-6 h-6" />
```

Or from PHP, through core's helper:

```blade
{{ ichava('ichava/icon-sets-remix::health-medical/heart-fill')->class('w-5 h-5 text-red-600') }}
```

See [Getting started](docs/getting-started.md) for the full walkthrough, and the [Documentation](#documentation) index below for everything else.

## <a name="documentation"></a>Documentation

The full documentation lives in this repository, under `docs/`, and is indexed below.

### This pack

- [Installation](docs/installation.md) — requirements, the repositories block, seeding
- [Getting started](docs/getting-started.md) — your first icon from this pack
- [Configuration](docs/configuration.md) — why there is no config file, and the kind keys in `config.json`
- [Architecture](docs/architecture.md) — what it ships, what it delegates, and why
- [Release](docs/release.md) — how a version is cut, and how the icons are refreshed
- [Categories](docs/categories.md) — the 20 categories, line and fill names, and the logo icons
- [Customisation](docs/customization.md) — sizing, colour and accessibility
- [Attribution](docs/attribution.md) — upstream project, licence terms, and where the vendored version is recorded

### Shared across every pack

- [Use an icon pack](https://github.com/ichava/core/blob/main/docs/recipes/use-an-icon-pack.md) — addressing icons, in Blade and in PHP
- [Seed pack icons](https://github.com/ichava/core/blob/main/docs/recipes/seed-pack-icons.md) — the seeding pipeline and its options
- [Check pack updates](https://github.com/ichava/core/blob/main/docs/recipes/check-pack-updates.md) — the update checker and what its statuses mean
- [Serve icons from a CDN](https://github.com/ichava/core/blob/main/docs/recipes/serve-icons-from-a-cdn.md) — reading this pack's CDN templates out of `config.json`

Its upstream is `Remix-Design/RemixIcon` at `v4.8.0`; run core's [check pack updates](https://github.com/ichava/core/blob/main/docs/recipes/check-pack-updates.md) recipe to see whether a newer release exists.

## Contributing & security

See [CONTRIBUTING.md](CONTRIBUTING.md). Report vulnerabilities privately through [security policy](https://github.com/ichava/icon-sets-remix/security/policy) — never in a public issue.

## License

The package code is MIT, © Simtabi LLC. See [LICENSE](LICENSE).

The icons are [Remix Icon](https://remixicon.com) v4.8.0, © Remix Design, under Apache-2.0. Later Remix Icon releases use a different licence that forbids redistribution as an icon pack, so this pack is pinned to v4.8.0. Simtabi LLC claims no authorship of the icons. Their notice and licence text are in [ATTRIBUTION.md](ATTRIBUTION.md), which ships with the package and must accompany any copy of the icons.
