<?php

namespace App\Http\Controllers\Video;

use App\Aggregates\VideoAggregate;
use App\Http\Controllers\Controller;
use App\Models\Video;

class ApproveController extends Controller
{
    public function __invoke(int $id)
    {
        $video = Video::findById($id);

        VideoAggregate::retrieve($video->uuid)
            ->approve($video->id)
            ->persist();
    }
}
