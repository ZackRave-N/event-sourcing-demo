<?php

namespace App\Models;

use App\Events\VideoCreated;
use App\Events\VideoTagSet;
use App\Events\VideoUpdated;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Ramsey\Uuid\Uuid;

/**
 * @property int id
 * @property string uuid
 */
class Video extends Model
{
    protected $table = 'video';

    protected $fillable = ['uuid', 'title', 'description', 'filePath', 'rating', 'name'];

    protected $dates = ['created_at', 'updated_at'];

    public static function createWithAttributes(array $attributes): Video
    {
        $attributes['uuid'] = (string) Uuid::uuid4();

        event(new VideoCreated($attributes));

        return static::findByUuid($attributes['uuid']);
    }

    public static function findByUuid(string $uuid): ?Video
    {
        return static::where('uuid', $uuid)->first();
    }

    public static function findById(int $id): ?Video
    {
        return static::where('id', $id)->first();
    }

    public static function setTags(int $videoId, array $tagIds)
    {
        event(new VideoTagSet($videoId, $tagIds));
    }

    public static function updateWithAttributes(array $videoAttributes)
    {
        event(new VideoUpdated($videoAttributes));
    }

    public function tags(): MorphToMany
    {
        return $this->morphToMany(Tag::class, 'taggable', 'taggable');
    }

}
