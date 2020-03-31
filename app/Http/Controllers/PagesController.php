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

class PagesController extends Controller
{
    public function team(){
        $teams=Team::all();
        return view('team',['teams' => $teams]);
    }

    public function ShowProfile ($language,$id){
        $member=Team::where('id',$id)->get();
        return view('profile',['member' => $member]);
    }

    public function founder (){
        $founder=Team::where('is_founder',1)->get();
        return view('about', compact('founder'));
    }

    public function publication (){
        $publications=Publication::all();
        $links=UsefulLink::all();
        return view('publications', ['publications' => $publications,'links'=>$links]);
    }

    public function soil (){
        $soil=soil::all();;
        return view('soil', ['soil' => $soil]);
    }

    public function planetBio (){
        $bio=PlanetBiodiversity::all();;
        return view('planetBio', ['bio' => $bio]);
    }

    public function previousStudies (){
        $pre=PreviousStudy::where('id',1)->get();
        $flo=FloranEndemism::all();
        return view('flora', ['pre' => $pre, 'flo' => $flo]);
    }

    public function details ($language,$id){
        $spe=Species::where('id',$id)->get();
        return view('details',['spe' => $spe]);
    }

    public function map(){
        return view('map');
    }

}
