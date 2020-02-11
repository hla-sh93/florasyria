<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Species extends Model
{
    protected $table = 'species';
    public $timestamps = false;

    public function species()
    {
        return $this->belongsTo('App\Genus', 'genus_id');
    }
    public function life_1()
    {
        return $this->belongsTo('App\Life', 'life1_id');
    }
    public function life_2()
    {
        return $this->belongsTo('App\Life', 'life2_id');
    }
    public function ecovalue()
    {
        return $this->belongsTo('App\EcoValue', 'ecValue_id');
    }
    public function area()
    {
        return $this->belongsTo('App\Area', 'area_id');
    }
    public function syrarea()
    {
        return $this->belongsTo('App\Syrianarea', 'syrareas_id');
    }
}
