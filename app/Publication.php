<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    protected $fillable = [
        'title',
        'copete',
        'description',
        'image_1',
        'image_2',
        'image_3',
        'id_image_1',
        'id_image_2',
        'id_image_3',
        'slug',
        'state'
    ];





}
