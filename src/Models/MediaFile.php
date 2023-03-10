<?php

namespace Ogrre\Media\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class MediaFile extends Model
{
    /**
     * @var string[]
     */
    protected $fillable = [
        'id',
        'name',
        'storage',
        'url',
        'size',
        'media_id',
        'model_type',
        'model_id'
    ];

    /**
     * @var string
     */
    protected $table = 'media_files';

    /**
     * @return MorphTo
     */
    public function model(): MorphTo
    {
        return $this->morphTo();
    }

    /**
     * @return BelongsTo
     */
    public function media(): BelongsTo
    {
        return $this->belongsTo(Media::class);
    }
}
