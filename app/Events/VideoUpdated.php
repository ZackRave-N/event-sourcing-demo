<?php

namespace App\Events;

use Spatie\EventSourcing\StoredEvents\ShouldBeStored;

class VideoUpdated extends ShouldBeStored
{
    /** @var array */
    public $videoAttributes;

    public function __construct(array $videoAttributes)
    {
        $this->videoAttributes = $videoAttributes;
    }
}
