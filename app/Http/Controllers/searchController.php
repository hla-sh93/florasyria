<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Family;
use App\Genus;
use App\Species;
use Voyager;
use DB;

class searchController extends Controller
{
    public function filter(){
        $header=DB::table('header_images')->value('search');
        $families=DB::table('families')->orderBy('name', 'asc')->get();
        return view('quksearch',['families' => $families,'header' => $header]);
    }

    public function genera($lang,$id)  {
        $gen=Genus::select('name','id')->where('family_id', $id)->orderBy('name', 'asc')->get();
        return $gen->toJson();
    }

    public function species(Request $request)  {

        if($request->ajax()){
            $output = '';
            $id = $request->get('genera_id');
            
            if($id != ''){
             $data = Species::where('genus_id', $id)->get();   
            }

            $total_row = $data->count();
            if($total_row > 0) {
                foreach($data as $row) {
                    $img;
                    if($row->img == "")
                    $img=asset('images/defaul.jpg');
                    else
                    $img=Voyager::image( $row->img );
                    $output .= ' 
                    <div class="col-md-6">                   
                    <a href="'.route('details',[app()->getLocale(), $row->id] ).'" class="card mt-4">
                    <div class="card-body p-1">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 align-items-center d-flex justify-content-center">
                                <img src="'.$img.'" alt="'.$row->species->name.' ' .$row->name.'"  width="90px" height="90px">
                            </div>
                            <div class="col-md-8 col-sm-6">
                                <div class="row">
                                    <div class="col-md-12">
                                    <h5 class="card-title blue card_title mr-0 mt-0">'.$row->species->name.' '.$row->name.'</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                    <p> '.substr($row->desc,0,100 ).'  ...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a></div>';
                }
            }else{
                $output = ' ';
                }

    //   $data = array(
    //    'table_data'  => $output,
    //    'total_data'  => $total_row
    //   );
        
      echo($output);   
        }
    }

    // public function species($lang,$id)  {
    //     $data = Species::where('genus_id', $id)->orderBy('name', 'asc')->get();
    //     return $data->toJson();
    // }
}