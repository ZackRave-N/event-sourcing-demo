<?php

namespace App\Events;

use Spatie\EventSourcing\StoredEvents\ShouldBeStored;

class VideoTagSet extends ShouldBeStored
{
    /** @var int */
    public $videoId;

    /** @var int[] */
    public $tagIds;

    public function __construct(int $videoId, array $tagIds)
    {
        $this->videoId = $videoId;
        $this->tagIds = $tagIds;
    }
}
