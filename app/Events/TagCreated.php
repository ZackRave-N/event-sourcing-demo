<?php

namespace App\Events;

use Spatie\EventSourcing\StoredEvents\ShouldBeStored;

class TagCreated extends ShouldBeStored
{
    /** @var array */
    public $tagAttributes;

    public function __construct(array $tagAttributes)
    {
        $this->tagAttributes = $tagAttributes;
    }
}
