<?php

use App\Http\Controllers\Admin\Animals\ProfilesController;
use App\Http\Controllers\Admin\Animals\SexesController;
use App\Http\Controllers\Admin\Animals\TypesController;
use App\Http\Controllers\Admin\ArticlesController;
use App\Http\Controllers\User\UserProfileController;
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
    $animals_sample = Animal::query()->inRandomOrder()->limit(12)->get();

    return view('animal', [
        "animals_sample" => $animals_sample,
    ]);
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

// Route::get('/Admin/pets', function () {
//     return view('Admin/pets');
// });

// Route::get('/Admin/articles', function () {
//     return view('Admin/articles');
// });

// Route::get('/Admin/schedule', function () {
//     return view('Admin/schedule');
// });

// Route::get('/Admin/adoption', function () {
//     return view('Admin/adoption');
// });

// Route::get('/Admin/users', function () {
//     return view('Admin/users');
// });

Route::get("/profile", [UserProfileController::class, "showPersonalDetails"])->middleware(['auth:sanctum'])->name("profile");

Route::prefix("admin")->middleware(['auth:sanctum', 'permissions:admin'])->group(function () {
    Route::get("/dashboard", function () {
        return view("admin.dashboard");
    })->name("admin:dashboard");

    Route::prefix("/animals")->group(function() {
        Route::get("/", [ProfilesController::class, 'show'])
            ->middleware(["permissions:animal:profile:read"])
            ->name("animals:profiles");

        Route::get('/types', [TypesController::class, 'show'])
            ->middleware(["permissions:animal:type:read"])
            ->name("animals:types");

        Route::get('/sexes', [SexesController::class, 'show'])
            ->middleware(["permissions:animal:sex:read"])
            ->name("animals:sexes");
    });

    Route::get("/articles", [ArticlesController::class, "show"])
        ->middleware(["permissions:article:read"])
        ->name("articles");
});

Route::prefix("api")->middleware(['auth:sanctum', 'permissions:admin'])->group(function () {
    Route::prefix("/animal")->group(function() {
        Route::prefix("/profile")->group(function () {
            Route::post('/create', [ProfilesController::class, "create"])
                ->middleware(["permissions:animal:profile:create"])
                ->name("animal:profile:create");

            Route::post('/edit', [ProfilesController::class, "edit"])
                ->middleware(["permissions:animal:profile:edit"])
                ->name("animal:profile:edit");
        });

        Route::prefix("/type")->group(function () {
            Route::post('/create', [TypesController::class, "create"])
                ->middleware(["permissions:animal:type:create"])
                ->name("animal:type:create");

            Route::post('/edit', [TypesController::class, "edit"])
                ->middleware(["permissions:animal:type:edit"])
                ->name("animal:type:edit");
        });

        Route::prefix("/sex")->group(function () {
            Route::post('/create', [SexesController::class, "create"])
                ->middleware(["permissions:animal:sex:create"])
                ->name("animal:sex:create");

            Route::post('/edit', [SexesController::class, "edit"])
                ->middleware(["permissions:animal:sex:edit"])
                ->name("animal:sex:edit");
        });
    });

    Route::prefix("/article")->group(function () {
        Route::post('/create', [ArticlesController::class, "create"])
            ->middleware(["permissions:article:create"])
            ->name("article:create");

        Route::post('/edit', [ArticlesController::class, "edit"])
            ->middleware(["permissions:article:edit"])
            ->name("article:edit");
    });
});


//Data Fetching
// Route::get('/', [animalsController::class, 'getDogsAndCats']);

// Route::get('/animal', [animalsController::class, 'getAnimals']);


// Route::get('/Admin/articles', [ArticlesController::class, 'getArticles']);

