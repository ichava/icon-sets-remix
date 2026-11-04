# Attribution and licence

*Reference.*

## Upstream

[Remix Icon](https://remixicon.com/) is by Remix Design (Wendy Gao, Jimmy Cheung and the Remix Icon contributors). Source: [github.com/Remix-Design/RemixIcon](https://github.com/Remix-Design/RemixIcon).

## Licence

The icons and this package are owned separately:

- **The icons** are © Remix Design, Apache-2.0 at tag `v4.8.0`. Simtabi LLC redistributes them and claims no authorship of them.
- **This package's code** (provider, enum, component, configuration) is © Simtabi LLC, [MIT](../LICENSE).

Apache-2.0 allows commercial and non-commercial use, modification and redistribution, provided the licence and the upstream's notices accompany every copy and modified files say so. The upstream notice is reproduced in [`ATTRIBUTION.md`](../ATTRIBUTION.md) at the package root, and the licence text ships in `resources/assets/svg/licenses/`; both are in the dist archive (`docs/` is not). Keep them with the icons if you copy them out of the package.

The licence was read at the vendored version before anything was vendored. `config.json` records it under `license`: SPDX id `Apache-2.0`, file `resources/assets/svg/licenses/RemixIcon/License`, SHA-256 `c71d239df91726fc519c6eb72d318ec65820627232b2f796219e87dcf35d0ab4`, checked 2026-11-04.

## Pinned to v4.8.0

Remix Icon moved to a custom "Remix Icon License v1.0" from v4.9.0, which forbids redistributing the icons as an icon pack. This pack therefore vendors v4.8.0, the last Apache-2.0 release, and its upstream check names that tag instead of the latest release. The licence's SHA-256 is recorded in `config.json`, so a sync that finds a different licence text stops instead of writing.

## Credit

A visible credit is not required by the licence, but is welcome on a "credits" or "about" page:

> Icons from [Remix Icon](https://remixicon.com) v4.8.0 by Remix Design (Apache-2.0)

## Updating from upstream

Asset refreshes run **maintainer-side** via
[`ichava/icon-sets-sync`](https://github.com/ichava/icon-sets-sync).
The weekly sync polls `Remix-Design/RemixIcon` at `v4.8.0`, refreshes the bundled SVGs when upstream moves, and opens a pull
request. A human reviews it and tags a release.

End users **don't** refresh locally -- `vendor/` is regenerated on every
`composer install`, so any local change is discarded. Run
`php artisan ichava::ichava-core.check-updates --package=ichava/icon-sets-remix`
to see whether a new upstream version is available.

## See also

- [Remix Icon website](https://remixicon.com/)
- [Remix Icon source](https://github.com/Remix-Design/RemixIcon)

---

[← Docs index](../README.md#documentation)
