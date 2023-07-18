<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class animalsController extends Controller
{
    public function getDogsAndCats()
    {
        $dogs = Animal::where('type', 'Dog')->skip(0)->take(6)->get();
        $cats = Animal::where('type', 'Cat')->skip(0)->take(6)->get();
        return view('/index', compact('dogs', 'cats'));
    }

    public function getAnimals()
    {
        $animals = Animal::all();
        $dogs = Animal::where('type', 'Dog')->get();
        $cats = Animal::where('type', 'Cat')->get();
        return view('/animal', compact('animals', 'cats', 'dogs'));
    }

    public function getPets()
    {
        $pets = Animal::all();
        return view('/Admin/pets', compact('pets'));
    }
}
