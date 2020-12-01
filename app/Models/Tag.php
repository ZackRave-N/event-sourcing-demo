<?php

namespace App\Models;

use App\Events\TagCreated;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Ramsey\Uuid\Uuid;

/**
 * @method static Tag create() create(array $attributes)
 */
class Tag extends Model
{
    protected $table = 'tag';

    protected $fillable = ['name', 'uuid'];

    protected $dates = ['created_at', 'updated_at'];

    public static function createWithAttributes(array $attributes): Tag
    {
        $attributes['uuid'] = (string) Uuid::uuid4();

        event(new TagCreated($attributes));

        return static::uuid($attributes['uuid']);
    }

    public static function uuid(string $uuid): ?Tag
    {
        return static::where('uuid', $uuid)->first();
    }

    public function videos(): MorphToMany
    {
        return $this->morphedByMany(Video::class, 'taggable', 'taggable');
    }
}
