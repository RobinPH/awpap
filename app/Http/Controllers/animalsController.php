<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\animal;

class animalsController extends Controller
{
    public function getAnimals()
    {
        $animals = animal::all();
        return view('/animal', compact('animals'));
    }

    public function getDogsAndCats()
    {
        $dogs = animal::where('type', 'Dog')->get();
        $cats = animal::where('type', 'Cat')->get();
        return view('/index', compact('dogs', 'cats'));
    }


}
