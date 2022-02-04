<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Integrant extends Model
{
    protected $fillable = [
        'charge',
        'description',
        'url_photo',
        'cv',
        'user_id',
    ];


    protected $appends = [
        'name', 'state'
    ];

    public function getNameAttribute(){
        return User::where('id',$this->user_id)->first()->value('name');
    }

    public function getStateAttribute(){
        return User::where('id',$this->user_id)->first()->value('state');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }


}
