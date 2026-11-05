<?php

declare(strict_types=1);

namespace Simtabi\Laranail\Ichava\IconSetsRemix\Providers;

use Simtabi\Laranail\Ichava\Support\IconPackServiceProvider;
use Simtabi\Laranail\Ichava\IconSetsRemix\Constants\IconsConstants;
use Simtabi\Laranail\Ichava\IconSetsRemix\View\Components\IconComponent;

/**
 * Registers the Remix Icon set with the Ichava registry on boot.
 */
class IconsServiceProvider extends IconPackServiceProvider
{
    protected function constantsClass(): string
    {
        return IconsConstants::class;
    }

    protected function componentClass(): string
    {
        return IconComponent::class;
    }
}
