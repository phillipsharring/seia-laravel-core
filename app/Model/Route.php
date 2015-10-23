<?php

namespace Seia\Core\Model;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    public $timestamps = false;

    protected $fillable = ['uri', 'controller', 'method', 'params'];
}
