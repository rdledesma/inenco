<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Integrant extends Model
{
    protected $fillable = [
        'name',
        'title',
        'description',
        'url_photo',
        'photo_id',
        'state'
    ];
}
