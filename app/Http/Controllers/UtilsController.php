<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UtilsController extends Controller
{
    public function lang($lang)
    {
        
        if (strpos(url()->previous(), '/changeLang/') !== false) {
            return redirect(route('/'));
        }
        session()->put('locale', $lang);
        app()->setLocale($lang);
        //$route = app('router')->getRoutes()->match(app('request')->create(url()->previous()))->getName();
        
        // return redirect()->route($route);
        $r=url()->previous();
        if(str_contains($r, 'en')){
            $n=str_replace('en/',$lang.'/',url()->previous());
            return redirect()->to($n);
        }else{
            $n=str_replace('ar/',$lang.'/',url()->previous());
            return redirect()->to($n);
        }
    }
}
