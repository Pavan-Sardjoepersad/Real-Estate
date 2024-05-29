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
}
