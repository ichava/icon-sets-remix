<?php

declare(strict_types=1);

/**
 * Remix Icon is pinned to v4.8.0, the last release under Apache-2.0.
 *
 * From v4.9.0 the icons carry a custom "Remix Icon License v1.0", which forbids
 * redistributing them as an icon pack. So the vendored version, the version
 * check and the licence text must all stay on v4.8.0, and a version check that
 * followed `latest` would propose a release this pack may not ship.
 */
function remix_pin_config(): array
{
    return json_decode(
        (string) file_get_contents(dirname(__DIR__, 2) . '/resources/assets/svg/config.json'),
        true,
        flags: JSON_THROW_ON_ERROR,
    );
}

it(description: 'vendors Remix Icon v4.8.0 and nothing later', closure: function () {
    $config = remix_pin_config();

    expect($config['upstream']['current_version'])->toBe('4.8.0')
        ->and($config['package']['upstream_version'])->toBe('4.8.0');
});

it(description: 'checks the v4.8.0 tag, never the latest release', closure: function () {
    $url = remix_pin_config()['upstream']['version_check_url'];

    expect($url)->toBe('https://api.github.com/repos/Remix-Design/RemixIcon/releases/tags/v4.8.0')
        ->and(str_contains(strtolower($url), 'latest'))->toBeFalse();
});

it(description: 'ships the Apache-2.0 text read at v4.8.0', closure: function () {
    $text = (string) file_get_contents(dirname(__DIR__, 2) . '/resources/assets/svg/licenses/RemixIcon/License');
    $lines = array_values(array_filter(array_map('trim', explode("\n", $text)), static fn (string $l): bool => $l !== ''));

    expect($lines[0] ?? null)->toBe('Apache License')
        ->and($lines[1] ?? null)->toBe('Version 2.0, January 2004')
        ->and(str_contains($text, 'Remix Icon License'))->toBeFalse();
});

it(description: 'says why it is pinned wherever a reader looks', closure: function () {
    foreach (['README.md', 'ATTRIBUTION.md', 'docs/attribution.md', 'docs/release.md'] as $file) {
        $text = (string) file_get_contents(dirname(__DIR__, 2) . '/' . $file);
        expect(str_contains($text, 'v4.8.0'))->toBeTrue("{$file} does not name the v4.8.0 pin");
    }
});
