<?php

namespace App\Http\Controllers\Video;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(Request $request, int $id)
    {
        Video::updateWithAttributes([
            'id' => $id,
            'title' => $request->input('title'),
            'description' => $request->input('description')
        ]);

        Video::setTags($id, $request->input('tags'));

        return response('{"status":"OK"}');
    }
}
