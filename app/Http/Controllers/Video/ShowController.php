<?php

namespace App\Http\Controllers\Video;

use App\Http\Controllers\Controller;
use App\Models\Video;

class ShowController extends Controller
{
    public function __invoke(int $id) {
        $video = Video::findById($id);

        dd([$video->attributesToArray(), $video->tags()->get()]);
    }
}
