<?php

namespace App\Events;

use Spatie\EventSourcing\StoredEvents\ShouldBeStored;

class VideoCreated extends ShouldBeStored
{
    /** @var array */
    public $videoAttributes;

    public function __construct(array $videoAttributes)
    {
        $this->videoAttributes = $videoAttributes;
    }
}
