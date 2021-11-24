<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleFile extends Model
{
    protected $fillable = [
        'article_id',
        'file',
        'state'
    ];
}
