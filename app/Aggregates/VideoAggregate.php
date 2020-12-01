<?php

namespace App\Aggregates;

use App\Events\VideoApproved;
use App\Events\VideoCreated;
use Spatie\EventSourcing\AggregateRoots\AggregateRoot;

class VideoAggregate extends AggregateRoot
{
    private $isApproved = false;

    public function approve(int $videoId): self {
        $this->recordThat(new VideoApproved($videoId));

        return $this;
    }

    public function applyVideoApproved(VideoCreated $event) {
        $this->isApproved = true;
    }
}
