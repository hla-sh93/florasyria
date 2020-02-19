<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Life;
use App\EcoValue;
use App\Area;
use App\Governorate;
use App\Family;
use App\Genus;
use App\Species;
use Voyager;
use DB;

class advancedFilterController extends Controller
{
    public function index(){
        $lives=Life::all();
        $ecoValues=EcoValue::all();
        $areas=Area::all();
        $govs=Governorate::all();
        $species=Species::paginate(5);

        return view('advsearch',['lives' => $lives,
                                'ecoValues' => $ecoValues,
                                'areas' => $areas,
                                'govs' => $govs,
                                'species' => $species
        ]);
    }

    public function fetch(Request $request){

        if($request->ajax()) {
            
            $select= $request->get('select');
            $value= $request->get('value');
            $dependent= $request->get('dependent');
            $rel="";
            if($select=="governorates"){
                $rel="gove_id";
            }elseif($select=="cities"){
                $rel="city_id";
            }else{
                $rel="village_id";
            }

            $data = DB::table($dependent)->where($rel, $value)->get();
            $data->toJson();

            $output = '<option value="">Select '.ucfirst($dependent).'</option>';
            foreach($data as $row) {
            $output .= '<option value="'.$row->id.'">'.$row->name.'</option>';
            }

        }
        echo $output;
    }

    public function search(Request $request){

        $filters = [
             'flowring-start' => $request->input('flowring-start'),
            'flowring-end' => $request->input('flowring-end'),
                    'life' => $request->input('life'),
              'econ_value' => $request->input('econ_value'),
                   'areas' => $request->input('areas')
        ];
        
        $data = Species::where(function ($query) use ($filters) {
            if ($filters['flowring-start']) {
                $query->orWhere('start_flower', '=', $filters['flowring-start']);
            }
             if ($filters['flowring-end']) {
                $query->orWhere('end_flower', '=', $filters['flowring-end']);
            }
            if ($filters['life']) {
                $query->orWhere('life1_id', '=', $filters['life'])->orWhere('life2_id', '=', $filters['life']);
            }
            if ($filters['econ_value']) {
                $query->orWhere('ecValue_id', '=', $filters['econ_value']);
            }
            if ($filters['areas']) {
                $query->orWhere('area_id', '=', $filters['areas']);
            }
        })->get();

        

        $lives=Life::all();
        $ecoValues=EcoValue::all();
        $areas=Area::all();
        $govs=Governorate::all();

        return view('advsearch',['lives' => $lives,
                                'ecoValues' => $ecoValues,
                                'areas' => $areas,
                                'govs' => $govs,
                                'species' => $data
        ]);
    }
}
