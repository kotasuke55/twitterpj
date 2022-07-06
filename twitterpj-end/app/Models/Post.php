<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = array('id');
    public static $rules = array(
        'person_id' => 'required',
        'text' => 'required | max:120'
    );

    public function user(){
        return $this->belongsTo('App\Models\user');
    }

    public function hearts(){
        return $this->hasMany('App\Models\Heart');
    }

    public function comments(){
        return $this->hasMany('App\Models\Comment');
    }
}
