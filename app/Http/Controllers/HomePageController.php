<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vision;
use App\HowToHelp;
use App\Sponsor;
use App\Species;
use App\HeaderImage;
use DB;
class HomePageController extends Controller
{
    public function index(){
        $header=DB::table('header_images')->value('home');
        $vision = Vision::find('1')->get();
        $howToHelp = HowToHelp::find('1')->get();
        $sponsoros = Sponsor::all();
        $species = Species::where('start_flower', '<=', date('m'))->where('end_flower', '>=', date('m'))->simplePaginate(4);
        $rand = Species::all()->random(1);

        return view('index', ['vision' => $vision, 'howToHelp' => $howToHelp, 'sponsors' => $sponsoros,'species'=>$species,'rand'=>$rand,'header' => $header]);
    }
}
