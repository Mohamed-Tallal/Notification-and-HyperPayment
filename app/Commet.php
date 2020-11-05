<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commet extends Model
{
    protected $fillable = [
        'id','comment', 'post_id', 'user_id',
    ];


    protected $hidden = [
        'body', 'updated_at',
    ];

    public function posts(){
        return $this->belongsTo('App\Post','post_id');
    }

    public function users(){
        return $this->belongsTo('App\User','user_id');
    }
}
