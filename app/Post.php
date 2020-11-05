<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'tittle', 'body', 'user_id',
    ];


    protected $hidden = [
        'created_at', 'updated_at',
    ];


    public function users(){
        return $this->belongsTo('App\User','user_id');
    }
    public function comments(){
        return $this->hasMany('App\Commet','post_id');
    }
}
