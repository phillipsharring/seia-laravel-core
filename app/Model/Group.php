<?php

namespace Seia\Core\Model;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = ['name', 'slug', 'policy'];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
