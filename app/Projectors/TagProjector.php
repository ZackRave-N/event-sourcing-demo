<?php

namespace App\Projectors;

use App\Events\TagCreated;
use App\Models\Tag;
use Spatie\EventSourcing\EventHandlers\Projectors\Projector;

class TagProjector extends Projector
{
    public function onTagCreated(TagCreated $event)
    {
        Tag::create($event->tagAttributes);
    }
}
