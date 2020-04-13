<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Floramap;
use App\Family;
use App\Genus;
use App\Species;
use Voyager;
use DB;
class floramapController extends Controller
{
    public function index(){
        $header=DB::table('header_images')->value('map');
        $map=Floramap::get();
        $families=Family::all()->count();
        $genus=Genus::all()->count();
        $species=Species::all()->count();
        return view('map',[ 'map' => $map,
                            'families' => $families,
                            'genus' => $genus,
                            'species' => $species,
                            'header' => $header
        ]);
    }
}
