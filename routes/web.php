<?php

use App\Http\Controllers\Admin\AdoptionsController;
use App\Http\Controllers\Admin\Animals\ProfilesController;
use App\Http\Controllers\Admin\Animals\SexesController;
use App\Http\Controllers\Admin\Animals\TypesController;
use App\Http\Controllers\Admin\ArticlesController;
use App\Http\Controllers\Admin\ProgramsController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\AdoptionFormController;
use App\Http\Controllers\AdoptionStoryController;
use App\Http\Controllers\Login\FacebookController;
use App\Http\Controllers\Login\GoogleController;
use App\Http\Controllers\Login\TwitterController;
use App\Http\Controllers\ProgramFormController;
use App\Http\Controllers\User\UserProfileController;
use App\Http\Controllers\VolunteerController;
use App\Http\Middleware\EnsureCompleteProfile;
use App\Models\AdoptionStory;
use App\Models\Animal;
use App\Models\AnimalType;
use App\Models\Article;
use App\Models\Program;
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
    $stories = AdoptionStory::query()->inRandomOrder()->take(2)->get();

    return view('index', [
        "cats" => $cats,
        "dogs" => $dogs,
        "articles" => $articles,
        "stories" => $stories,
    ]);
})->name("home");

Route::get('/animal', function () {
    $animals_sample = Animal::query()->inRandomOrder()->limit(20)->get();

    return view('animal', [
        "animals_sample" => $animals_sample,
    ]);
})->name("animal");

Route::get('/about-us', function () {
    return view('about-us');
})->name("about-us");

Route::middleware([EnsureCompleteProfile::class])->get('/program', function () {
    $programs = Program::all();
    return view('program', [
        "programs" => $programs,
    ]);
})->name("program");

Route::get('/guideline', function () {
    return view('guideline');
})->name("guideline");

Route::get('/join-us', function () {
    return view('join-us');
})->name("join-us");

Route::get('/sign-in', function () {
    return view('sign-in');
})->name("sign-in");

Route::get('/sign-up', function () {
    return view('sign-up');
})->name("sign-up");

Route::get('/program-form', function () {
    $programs = Program::all();
    $animalTypes = AnimalType::all();
    return view('program-form', [
        'programs' => $programs,
        'animalTypes' => $animalTypes,
    ]);
});

Route::prefix("/adoption-form")->middleware(['auth:sanctum', EnsureCompleteProfile::class])->group(function () {
    Route::get("/", [AdoptionFormController::class, "show"])->name("adoption-form");
});

Route::prefix("/volunteer-form")->middleware(['auth:sanctum'])->group(function () {
    Route::get("/", [VolunteerController::class, "show"])->name("volunteer-form");
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

Route::prefix("/profile")->middleware(['auth:sanctum'])->group(function () {
    Route::get("/", [UserProfileController::class, "showPersonalDetails"])->name("profile");

    Route::get("/volunteers", [UserProfileController::class, "showVolunteerWorks"])->name("profile:volunteers");
    Route::get("/adoptions", [UserProfileController::class, "showAdoptions"])->name("profile:adoptions");
    Route::get("/appointments", [UserProfileController::class, "showPrograms"])->name("profile:programs");
});

Route::prefix("admin")->middleware(['auth:sanctum', 'permissions:admin'])->group(function () {
    Route::get("/dashboard", function () {
        return view("admin.dashboard");
    })->name("admin:dashboard");


    Route::prefix("/analytics")->group(function () {
        Route::get("/web-traffic", function () {
            return view("admin.analytics.web-traffic");
        })->name("admin:analytics:web-traffic");


        Route::get("/adoptions", function () {
            return view("admin.analytics.adoptions");
        })->name("admin:analytics:adoptions");
    });

    Route::prefix("/animals")->group(function () {
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

    Route::get("/adoptions", [AdoptionsController::class, "show"])
        ->middleware(["permissions:adoption:read"])
        ->name("adoptions");

    Route::get("/users", [UsersController::class, "show"])
        ->middleware(["permissions:adoption:read"])
        ->name("admin:users");

    Route::prefix("/programs")->group(function () {
        Route::get("/types", [ProgramsController::class, "showTypes"])
            ->middleware(["permissions:program:read"])
            ->name("admin:programs:types");

        Route::get("/schedules", [ProgramsController::class, "showSchedules"])
            ->middleware(["permissions:program-form:read"])
            ->name("admin:programs:schedules");
    });
});

Route::prefix("api")->middleware(['auth:sanctum'])->group(function () {
    Route::prefix("/animal")->group(function () {
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

    Route::prefix("/adoption")->group(function () {
        Route::post('/create', [AdoptionFormController::class, "create"])
            ->middleware(["permissions:adoption:create"])
            ->name("adoption:create");

        Route::post('/edit', [AdoptionsController::class, "edit"])
            ->middleware(["permissions:adoption:edit"])
            ->name("adoption:edit");
    });

    Route::prefix("/adoption-story")->group(function () {
        Route::post('/create', [AdoptionStoryController::class, "create"])
            ->middleware(["permissions:adoption-story:create"])
            ->name("adoption-story:create");

        Route::post('/edit', [AdoptionStoryController::class, "edit"])
            ->middleware(["permissions:adoption-story:edit"])
            ->name("adoption-story:edit");
    });

    Route::prefix("/program-form")->group(function () {
        Route::post('/create', [ProgramFormController::class, "create"])
            ->middleware(["permissions:program-form:create"])
            ->name("program-form:create");

        Route::post('/edit', [ProgramFormController::class, "edit"])
            ->middleware(["permissions:program-form:edit"])
            ->name("program-form:edit");
    });

    Route::prefix("/program")->group(function () {
        Route::post('/create', [ProgramsController::class, "create"])
            ->middleware(["permissions:program:create"])
            ->name("program:create");

        Route::post('/edit', [ProgramsController::class, "edit"])
            ->middleware(["permissions:program:edit"])
            ->name("program:edit");
    });

    Route::prefix("/user")->group(function () {
        Route::prefix("/profile")->group(function () {
            Route::post('/edit', [UserProfileController::class, "edit"])
                ->middleware(["permissions:user:profile:edit"])
                ->name("user:profile:edit");

            Route::post('/edit-permission', [UserProfileController::class, "editPermissions"])
                ->middleware(["permissions:admin:edit:permissions"])
                ->name("user:edit:permissions");
        });

        Route::prefix("/volunteer")->group(function () {
            Route::post('/join', [VolunteerController::class, "join"])
                ->name("user:volunteer:join");

            Route::post('/delete', [VolunteerController::class, "delete"])
                ->middleware(["permissions:volunteer:delete"])
                ->name("volunteer:delete");
        });
    });
});

Route::get('auth/google', [GoogleController::class, 'redirect'])->name("auth:google");
Route::get('auth/google/callback', [GoogleController::class, 'handleCallback']);

Route::get('auth/facebook', [FacebookController::class, 'redirect'])->name("auth:facebook");
Route::get('auth/facebook/callback', [FacebookController::class, 'handleCallback']);

Route::get('auth/twitter', [TwitterController::class, 'redirect'])->name("auth:twitter");
Route::get('auth/twitter/callback', [TwitterController::class, 'handleCallback']);


//Data Fetching
// Route::get('/', [animalsController::class, 'getDogsAndCats']);

// Route::get('/animal', [animalsController::class, 'getAnimals']);


// Route::get('/Admin/articles', [ArticlesController::class, 'getArticles']);
