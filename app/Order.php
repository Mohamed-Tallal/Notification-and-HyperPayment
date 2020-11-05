<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guard= [];

    public function offers()
    {
        return $this->belongsTo('App\Offer', 'offer_id', 'id');
    }
    public function users()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
