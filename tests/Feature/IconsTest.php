<?php

declare(strict_types=1);

use Simtabi\Laranail\Ichava\Services\IconRegistry;
use Simtabi\Laranail\Ichava\IconSetsRemix\Enums\Variant;
use Simtabi\Laranail\Ichava\IconSetsRemix\Constants\IconsConstants;
use Simtabi\Laranail\Ichava\IconSetsRemix\Providers\IconsServiceProvider;

it(description: 'boots the provider without error', closure: function () {
    $providers = array_keys($this->app->getLoadedProviders());

    expect($providers)->toContain(IconsServiceProvider::class);
});

it(description: 'resolves constants from config json', closure: function () {
    expect(IconsConstants::getVendorPackage())->toBe('ichava/icon-sets-remix')
        ->and(IconsConstants::getTitle())->toBe('Remix Icon')
        ->and(IconsConstants::getPrefix())->toBe('ri')
        ->and(IconsConstants::getDefaultVariant())->toBe('default');
});

it(description: 'uses the config prefix in enum class helpers', closure: function () {
    expect(Variant::DEFAULT->getClass())->toBe('ri-default');
});

it(description: 'matches the default variant to config json', closure: function () {
    expect(Variant::default())->toBe(Variant::DEFAULT)
        ->and(Variant::DEFAULT->isDefault())->toBeTrue();
});

it(description: 'points every variant at a directory that holds its icons', closure: function () {
    foreach (Variant::cases() as $variant) {
        $path = $variant->getPath();
        expect(is_dir($path))->toBeTrue("{$variant->value} points at {$path}, which is not a directory")
            ->and(glob($path . '/*.svg') ?: glob($path . '/*/*.svg') ?: [])->not->toBeEmpty("{$variant->value} holds no icons");
    }
});

it(description: 'picks up the package in the icon registry', closure: function () {
    $registry = $this->app->make(IconRegistry::class);

    expect($registry->isRegistered('ichava/icon-sets-remix'))->toBeTrue(
        'IconRegistry should have ichava/icon-sets-remix registered after boot.',
    );
});

it(description: 'resolves and renders the documented example icons', closure: function () {
    $registry = $this->app->make(IconRegistry::class);
    $samples = ['buildings/home-line', 'buildings/home-fill', 'editor/bold'];

    expect($samples)->not->toBeEmpty();

    foreach ($samples as $item) {
        $id = "ichava/icon-sets-remix::{$item}";

        expect(is_file(dirname(__DIR__, 2) . "/resources/assets/svg/files/{$item}.svg"))->toBeTrue("{$item}.svg is missing")
            ->and($registry->has($id))->toBeTrue("{$id} does not resolve")
            ->and($registry->render($id))->toContain('<svg');
    }
});
