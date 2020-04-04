<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = 'locations';
    public $timestamps = false;

    public function village()
    {
        return $this->belongsTo('App\Village', 'village_id');
    }

}