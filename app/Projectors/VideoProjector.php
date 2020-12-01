<?php

namespace App\Projectors;

use App\Events\VideoCreated;
use App\Events\VideoUpdated;
use App\Models\Video;
use Spatie\EventSourcing\EventHandlers\Projectors\Projector;

class VideoProjector extends Projector
{
    public function onVideoCreated(VideoCreated $event) {
        Video::create($event->videoAttributes);
    }

    public function onVideoUpdated(VideoUpdated $event) {
        $video = Video::findById($event->videoAttributes['id']);

        $video->title = $event->videoAttributes['title'];
        $video->description = $event->videoAttributes['description'];

        $video->save();
    }
}
