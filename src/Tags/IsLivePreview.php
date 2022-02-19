<?php

namespace Stoffelio\StatamicLivePreviewTag\Tags;

use Statamic\Tags\Tags;

class IsLivePreview extends Tags
{

    /**
     * The {{ is_live_preview }} tag.
     *
     * @return boolean
     */
    public function index()
    {
        return request()->headers->has('x-statamic-live-preview');
    }
}