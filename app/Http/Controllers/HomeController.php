<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
class HomeController extends Controller
{
    public function language(Request  $request){

        $lang = $request->get('lang');
        Session::put('lang', $lang);
        App::setLocale($lang);

        return redirect()->back();

    }

    public function home(){

        $city = City::with('State')->get();
        dd($city);

       // dd($city->State->Country);
        $lang = Session::get('lang');
        App::setLocale($lang);

        return view('welcome');
    }
}
