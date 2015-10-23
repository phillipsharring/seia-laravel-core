<?php namespace Seia\Core\Model;

class Page extends Content
{
    protected $fillable = ['category_id', 'created_by', 'language_id', 'mime_type', 'title', 'summary', 'body', 'status'];
}
