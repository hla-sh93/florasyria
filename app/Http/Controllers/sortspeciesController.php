<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Family;
use App\Genus;
use App\Species;
use Voyager;
use DB;

class sortspeciesController extends Controller
{
   public function index(){
    $families=Family::all()->count();
    $genus=Genus::all()->count();
    $species=Species::all()->count();
    $s=Species::orderBy('id', 'asc')->paginate(50);

       return view('sortspeacies',[
                    'families' => $families,
                    'genus' => $genus,
                    'species' => $species,
                    's' => $s
                ]);
   }

   public function delete($lang,$id){

    $s = Species::find($id);
    $s->delete();
    return redirect()->back();

   }
}
