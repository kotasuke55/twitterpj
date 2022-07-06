<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Heart extends Model
{
    use HasFactory;

    protected $guarded = array('id');
    public static $rules = array(
        'person_id' => 'required',
        'post_id' => 'required'
    );

    public function person(){
        return $this->belongsTo('App\Models\Person');
    }

    public function post(){
        return $this->belongsTo('App\Models\Post');
    }
}
