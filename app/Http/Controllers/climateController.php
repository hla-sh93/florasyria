<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Topography;
use App\Rainfall;
use App\Temperature;
use App\Evaporation;
use App\BioClimatic;

class climateController extends Controller
{
    public function index(){

        $topography = Topography::find('1')->get();
        $rainfall = Rainfall::find('1')->get();
        $temperature = Temperature::find('1')->get();
        $evaporation = Evaporation::find('1')->get();
        $bioclimatic = BioClimatic::find('1')->get();

        return view('topography', [
            'topography' => $topography,
            'rainfall' => $rainfall,
            'temperature' => $temperature,
            'evaporation' => $evaporation,
            'bioclimatic' => $bioclimatic
              ]);
    }
}
