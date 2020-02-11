<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vision;
use App\HowToHelp;
use App\Sponsor;
use App\Species;

class HomePageController extends Controller
{
    public function index(){

        $vision = Vision::find('1')->get();
        $howToHelp = HowToHelp::find('1')->get();
        $sponsoros = Sponsor::all();
        $species = Species::all();
        $rand = Species::all()->random(1);

        return view('index', ['vision' => $vision, 'howToHelp' => $howToHelp, 'sponsors' => $sponsoros,'species'=>$species,'rand'=>$rand]);
    }
}
