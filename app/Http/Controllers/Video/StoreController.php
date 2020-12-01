<?php


namespace App\Http\Controllers\Video;


use App\Models\Video;
use Illuminate\Http\Request;

class StoreController
{
    public function __invoke(Request $request) {

        $video = Video::createWithAttributes([
            'title'       => $request->input('title'),
            'description' => $request->input('description'),
        ]);

        Video::setTags($video->id, $request->input('tags'));

        return response('{"status":"OK"}');
    }
}
