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
        'name', 'state','email'
    ];

    public function getNameAttribute(){
        return User::where('id',$this->user_id)->value('name');
    }

    public function getStateAttribute(){
        return User::where('id',$this->user_id)->value('state');
    }

    public function getEmailAttribute(){
        return User::where('id',$this->user_id)->value('email');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }


}
