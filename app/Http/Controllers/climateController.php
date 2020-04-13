<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Topography;
use App\Rainfall;
use App\Temperature;
use App\Evaporation;
use App\BioClimatic;
use DB;
class climateController extends Controller
{
    public function index(){
        $header=DB::table('header_images')->value('climate');

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
            'bioclimatic' => $bioclimatic,
            'header' => $header
              ]);
    }
}
