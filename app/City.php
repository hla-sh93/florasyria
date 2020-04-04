<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function gov()
    {
        return $this->belongsTo('App\Governorate', 'gove_id');
    }
}
