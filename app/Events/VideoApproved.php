<?php

namespace App\Events;

use Spatie\EventSourcing\StoredEvents\ShouldBeStored;

class VideoApproved extends ShouldBeStored
{
    /** @var int */
    public $videoId;

    public function __construct(int $videoId)
    {
        $this->videoId = $videoId;
    }
}
