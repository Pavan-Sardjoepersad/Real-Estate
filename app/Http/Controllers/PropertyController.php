<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{

    public function show(){
        $properties = Property::whereIn('id', [1,2,3])->get();
        return view('welcome', ['properties' => $properties]);
    }

    public function index(){
        $properties = Property::all();
        return view('property.index', ['properties' => $properties]);
    }

    public function filterProperties(Request $request){
        $type = $request->input('type');
        $priceRange = [
            'min' => $request->input('price_min'),
            'max' => $request->input('price_max'),
        ];
        $city = $request->input('city');

        $properties = Property::query()
            ->type($type)
            ->price($priceRange)
            ->city($city)
            ->get();

        return view('property.index', compact('properties'));    
    }
}
