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
        // $species=Species::paginate(6);

        return view('advsearch',['lives' => $lives,
                                'ecoValues' => $ecoValues,
                                'areas' => $areas,
                                'govs' => $govs,
                                // 'species' => $species
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
                   'areas' => $request->input('areas'),
                   'governorates' => $request->input('governorates'),
                   'cities' => $request->input('cities'),
                   'villages' => $request->input('villages')
        ];
        // dd($filters);


        $data2 = DB::table('species As s')
        ->join('genera As gen', 'gen.id', '=', 's.genus_id')
        ->select('s.id as id','s.name as name','s.img as img','s.desc As desc','gen.name As Gname')
        ->leftJoin('species_ecoval', 's.id', '=', 'species_ecoval.species_id')
        ->leftJoin('species_locations', 's.id', '=', 'species_locations.species_id')
        ->leftJoin('locations', 'locations.id', '=', 'species_locations.location_id')
        ->leftJoin('villages', 'villages.id', '=', 'locations.village_id')
        ->leftJoin('cities', 'cities.id', '=', 'villages.city_id')
        ->leftJoin('governorates', 'governorates.id', '=', 'cities.gove_id')
        ->Where(function($query) use ($filters) {

            if ($filters['flowring-start']) {
                $query->Where('start_flower', $filters['flowring-start']);
            }
            if ($filters['flowring-end']) {
                $query->Where('end_flower', $filters['flowring-end']);
            }
            if ($filters['life']) {
                $query->Where('life1_id', $filters['life'])->orWhere('life2_id', $filters['life']);
            }
            if ($filters['areas']) {
                $query->Where('area_id', $filters['areas']);
            }
            if($filters['econ_value']){
                $query->where('species_ecoval.eco_value_id', '=', $filters['econ_value']);
            }
            if($filters['governorates']){
                $query->where('governorates.id', '=', $filters['governorates']);
            }
            if($filters['cities']){
                $query->where('cities.id', '=', $filters['cities']);
            }
            if($filters['villages']){
                $query->where('villages.id', '=', $filters['villages']);
            }
            });

            
            $data2 = $data2 ->groupBy('s.id')->orderBy('Gname')->get();
            $count= $data2->count();
        // dd($data2);
        
        $lives=Life::all();
        $ecoValues=EcoValue::all();
        $areas=Area::all();
        $govs=Governorate::all();

        return view('advsearch',['lives' => $lives,
                                'ecoValues' => $ecoValues,
                                'areas' => $areas,
                                'govs' => $govs,
                                'species' => $data2,
                                'count' => $count
        ]);
    }
}
