<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;

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

}
