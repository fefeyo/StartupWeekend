<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Refugee;
use Log;

class MainController extends Controller
{

    public function sw_main()
    {
        $refugees = Refugee::all();
        return view('mainpage', ["refugees" => $refugees]);
    }

    public function save(Request $request)
    {
        $refugee = new Refugee;
        $refugee->place = $request->place;
        $refugee->lat = $request->lat;
        $refugee->lng = $request->lng;
        $refugee->necessities = $request->necessities;
        $refugee->amount = $request->amount;
        $refugee->situation = file_get_contents($request->situation);
        $refugee->save();
        return "success";
    }
}
