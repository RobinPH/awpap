<?php

use App\Models\Animal;
use App\Models\AnimalType;
use App\Models\Article;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $catType = AnimalType::query()->where("type", "CAT")->first();
    $dogType = AnimalType::query()->where("type", "DOG")->first();

    $cats = Animal::query()->inRandomOrder()->where("type_id", $catType->id)->limit(3)->get();
    $dogs = Animal::query()->inRandomOrder()->where("type_id", $dogType->id)->limit(3)->get();
    $articles = Article::query()->inRandomOrder()->limit(3)->get();

    return view('index', [
        "cats" => $cats,
        "dogs" => $dogs,
        "articles" => $articles,
    ]);
});

Route::get('/animal', function () {
    return view('animal');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/program', function () {
    return view('program');
});

Route::get('/guideline', function () {
    return view('guideline');
});

Route::get('/join-us', function () {
    return view('join-us');
});

Route::get('/sign-in', function () {
    return view('sign-in');
});

Route::get('/sign-up', function () {
    return view('sign-up');
});

Route::get('/program-form', function () {
    return view('program-form');
});

Route::get('/adoption-form', function () {
    return view('adoption-form');
});

Route::get('/volunteer-form', function () {
    return view('volunteer-form');
});

Route::get('/Admin/dashboard', function () {
    return view('Admin/dashboard');
});

Route::get('/Admin/pets', function () {
    return view('Admin/pets');
});

Route::get('/Admin/articles', function () {
    return view('Admin/articles');
});

Route::get('/Admin/schedule', function () {
    return view('Admin/schedule');
});

Route::get('/Admin/adoption', function () {
    return view('Admin/adoption');
});

Route::get('/Admin/users', function () {
    return view('Admin/users');
});


//Data Fetching
// Route::get('/', [animalsController::class, 'getDogsAndCats']);

// Route::get('/animal', [animalsController::class, 'getAnimals']);

// Route::get('/Admin/pets', [animalsController::class, 'getPets']);

// Route::get('/Admin/articles', [ArticlesController::class, 'getArticles']);

