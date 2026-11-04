# Categories

*Reference.*

`ichava/icon-sets-remix` ships **3,188 icons in 20 categories**, the folders Remix Icon itself groups them in, renamed to
slugs. Most designs come twice, as `<name>-line` and `<name>-fill`; 150 icons, mostly in `editor`, have one
design and no suffix. Every SVG is 24×24 with `viewBox="0 0 24 24"`.

Icons are addressed as `ichava/icon-sets-remix::<category>/<name>`, with the suffix as part of the name:

```blade
<x-ichava::icon name="ichava/icon-sets-remix::buildings/home-line" class="w-6 h-6" />
<x-ichava::icon name="ichava/icon-sets-remix::buildings/home-fill" class="w-6 h-6" />
<x-ichava::icon name="ichava/icon-sets-remix::editor/bold" class="w-6 h-6" />
```

| Category | Upstream folder |
|---|---|
| `arrows` | Arrows |
| `buildings` | Buildings |
| `business` | Business |
| `communication` | Communication |
| `design` | Design |
| `development` | Development |
| `device` | Device |
| `document` | Document |
| `editor` | Editor |
| `finance` | Finance |
| `food` | Food |
| `game-sports` | Game & Sports |
| `health-medical` | Health & Medical |
| `logos` | Logos |
| `map` | Map |
| `media` | Media |
| `others` | Others |
| `system` | System |
| `user-faces` | User & Faces |
| `weather` | Weather |

## The logo icons

`logos` holds brand logos. The artwork is Apache-2.0, but the marks are trademarks of their owners; use a
logo only to refer to what it represents.

## Variant enum (PHP)

The pack has one style, so the `Variant` enum has one case, and its path is the files directory itself:

```php
use Simtabi\Laranail\Ichava\IconSetsRemix\Enums\Variant;

Variant::DEFAULT->value;   // 'default'
Variant::default();        // Variant::DEFAULT
```

## See also

- [Customisation](customization.md)
- [Icon path format](https://github.com/ichava/core/blob/main/docs/tools/icon-path-format.md)

---

[← Docs index](../README.md#documentation)
