<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    protected $table = 'villages';
    public $timestamps = false;

    public function city()
    {
        return $this->belongsTo('App\City', 'city_id');
    }
}
