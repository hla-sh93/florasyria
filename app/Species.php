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
        return $this->belongsToMany('App\EcoValue','species_ecoval');
    }
    public function area()
    {
        return $this->belongsTo('App\Area', 'area_id');
    }
    public function location()
    {
        return $this->belongsToMany('App\Location','species_locations');
    }
    public function reference()
    {
        return $this->belongsTo('App\Reference', 'reference_id');
    }
}
