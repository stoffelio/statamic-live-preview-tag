<?php

namespace Stoffelio\StatamicLivePreviewTag;

use Statamic\Providers\AddonServiceProvider;
use Stoffelio\StatamicLivePreviewTag\Tags\IsLivePreview;

class ServiceProvider extends AddonServiceProvider
{
    protected $tags = [
        IsLivePreview::class,
    ];
}
