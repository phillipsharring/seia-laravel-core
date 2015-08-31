<?php

namespace Seia\Core\Model;

use Illuminate\Database\Eloquent\Model;

class UserMeta extends Model
{
    protected $table = 'user_meta';

    protected $fillable = ['created_by', 'user_id', 'field_name', 'field_type', 'string_value', 'text_value', 'date_value', 'integer_value'];
}
