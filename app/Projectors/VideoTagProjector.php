<?php

namespace App\Projectors;

use App\Events\VideoTagSet;
use App\Models\Video;
use Spatie\EventSourcing\EventHandlers\Projectors\Projector;

class VideoTagProjector extends Projector
{
    public function onVideoTagSet(VideoTagSet $event) {
        $video = Video::findById($event->videoId);

        $video->tags()->detach();

        foreach ($event->tagIds as $tagId) {
            $video->tags()->attach($tagId);
        }
    }
}
