<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable=[
        'description',
        'state'
    ];


    public function files(){
        return $this->hasMany(ArticleFile::class);
    }
}
