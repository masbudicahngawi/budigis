<?php

namespace App\Http\Controllers;

use App\Models\Poi;
use Illuminate\Http\Request;

class PoiController extends Controller
{
    public function index(Poi $poi)
    {
        $all_poi = Poi::where('objek', '=', 'marker')->orWhere('objek', '=', 'polygon')->get();

        return view('poi.index', ['data' => $all_poi]);
    }
}
