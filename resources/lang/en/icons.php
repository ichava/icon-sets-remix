<?php

declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Remix Icon -- localisable strings
|--------------------------------------------------------------------------
|
| An overlay, not a second source of truth. `name` and `description` are
| deliberately absent: IconRegistry::fromDirectory() reads those from
| resources/assets/svg/config.json, which is canonical. A non-English locale
| may add them to override; `en` must not.
|
| Variant keys match Simtabi\Laranail\Ichava\IconSetsRemix\Enums\Variant.
|
*/

return [
    'variants' => [
        'default' => 'Default',
    ],

    'variant_descriptions' => [
        'default' => "Remix Icon's own style. Line and fill designs are separate icons, named -line and -fill.",
    ],

    'categories' => [
        'arrows'         => 'Arrows',
        'buildings'      => 'Buildings',
        'business'       => 'Business',
        'communication'  => 'Communication',
        'design'         => 'Design',
        'development'    => 'Development',
        'device'         => 'Device',
        'document'       => 'Document',
        'editor'         => 'Editor',
        'finance'        => 'Finance',
        'food'           => 'Food',
        'game-sports'    => 'Game & Sports',
        'health-medical' => 'Health & Medical',
        'logos'          => 'Logos',
        'map'            => 'Map',
        'media'          => 'Media',
        'others'         => 'Others',
        'system'         => 'System',
        'user-faces'     => 'User & Faces',
        'weather'        => 'Weather',
    ],

    'category_descriptions' => [
        'arrows'         => "Remix Icon's Arrows category",
        'buildings'      => "Remix Icon's Buildings category",
        'business'       => "Remix Icon's Business category",
        'communication'  => "Remix Icon's Communication category",
        'design'         => "Remix Icon's Design category",
        'development'    => "Remix Icon's Development category",
        'device'         => "Remix Icon's Device category",
        'document'       => "Remix Icon's Document category",
        'editor'         => "Remix Icon's Editor category",
        'finance'        => "Remix Icon's Finance category",
        'food'           => "Remix Icon's Food category",
        'game-sports'    => "Remix Icon's Game & Sports category",
        'health-medical' => "Remix Icon's Health & Medical category",
        'logos'          => "Remix Icon's Logos category",
        'map'            => "Remix Icon's Map category",
        'media'          => "Remix Icon's Media category",
        'others'         => "Remix Icon's Others category",
        'system'         => "Remix Icon's System category",
        'user-faces'     => "Remix Icon's User & Faces category",
        'weather'        => "Remix Icon's Weather category",
    ],
];
