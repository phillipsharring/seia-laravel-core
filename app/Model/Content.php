<?php

namespace Seia\Core\Model;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $table = 'contents';

    protected $fillable = [
        'content_type_id',
        'refers_to',
        'parent_id',
        'category_id',
        'created_by',
        'release_at',
        'expire_at',
        'language_id',
        'mime_type',
        'title',
        'summary',
        'body',
        'media',
        'status',
    ];

    public function type()
    {
        return $this->belongsTo(ContentType::class, 'content_type_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
