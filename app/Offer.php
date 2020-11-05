<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $guard= [];

    public function orders()
    {

        return $this->hasMany('App\Order', 'offer_id', 'id');
    }
}
