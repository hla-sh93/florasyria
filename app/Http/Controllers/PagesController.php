<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Publication;
use App\Soil;
use App\PlanetBiodiversity;
use App\PreviousStudy;
use App\FloranEndemism;
use App\Species;
use App\UsefulLink;
use App\HeaderImage;
use DB;

class PagesController extends Controller
{
    public function team(){
        $teams=Team::all();
        $header=DB::table('header_images')->value('team');
        return view('team',['teams' => $teams, 'header' => $header]);
    }

    public function ShowProfile ($language,$id){
        $member=Team::where('id',$id)->get();
        return view('profile',['member' => $member]);
    }

    public function founder (){
        $header=DB::table('header_images')->value('founder');
        $founder=Team::where('is_founder',1)->get();
        return view('about',['founder' => $founder, 'header' => $header]);
    }

    public function publication (){
        $header=DB::table('header_images')->value('publications');
        $publications=Publication::all();
        $links=UsefulLink::all();
        return view('publications', ['publications' => $publications,'links'=>$links, 'header' => $header]);
    }

    public function soil (){
        $header=DB::table('header_images')->value('soil');
        $soil=soil::all();
        return view('soil', ['soil' => $soil, 'header' => $header]);
    }

    public function planetBio (){
        $header=DB::table('header_images')->value('plant');
        $bio=PlanetBiodiversity::all();
        return view('planetBio', ['bio' => $bio, 'header' => $header]);
    }

    public function previousStudies (){
        $header=DB::table('header_images')->value('flora');
        $pre=PreviousStudy::where('id',1)->get();
        $flo=FloranEndemism::all();
        return view('flora', ['pre' => $pre, 'flo' => $flo, 'header' => $header]);
    }

    public function details ($language,$id){
        $spe=Species::where('id',$id)->get();
        return view('details',['spe' => $spe]);
    }

}
