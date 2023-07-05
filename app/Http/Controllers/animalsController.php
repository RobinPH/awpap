<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\animal;

class animalsController extends Controller
{


    public function getDogsAndCats()
    {
        $dogs = animal::where('type', 'Dog')->skip(0)->take(6)->get();
        $cats = animal::where('type', 'Cat')->skip(0)->take(6)->get();
        return view('/index', compact('dogs', 'cats'));
    }

    public function getAnimals()
    {
        $animals = animal::all();
        $dogs = animal::where('type', 'Dog')->get();
        $cats = animal::where('type', 'Cat')->get();
        return view('/animal', compact('animals', 'cats', 'dogs'));
    }
}
