<?php

namespace Seia\Core\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;

    public function contents()
    {
        return $this->hasMany(Content::class);
    }
}
