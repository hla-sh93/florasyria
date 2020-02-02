<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtilsController extends Controller
{
    public function lang($lang)
    {
        
        if (strpos(url()->previous(), '/changeLang/') !== false) {
            return redirect(route('/'));
        }
        session()->put('locale', $lang);
        app()->setLocale($lang);
        $route = app('router')->getRoutes()->match(app('request')->create(url()->previous()))->getName();
        // if ($route === 'cvBuilder') {
        //     return redirect("/$locale/cv/new");
        // }
        return redirect()->route($route);
    }
}
