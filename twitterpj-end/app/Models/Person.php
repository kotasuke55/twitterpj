<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

     protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required | max:20',
        'email' => 'required | email',
        'password' => 'required | min:6'
    );

    public function posts(){
        return $this->hasMany('App\Models\Post');
    }

    public function hearts(){
        return $this->hasMany('App\Models\Heart');
    }

    public function comments(){
        return $this->hasMany('App\Models\Comment');
    }
}
