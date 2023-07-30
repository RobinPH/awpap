<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Image;
use Exception;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    private static function makeArticle($inputs)
    {
        $thumbnail = Image::query()->create([
            "title" => $inputs["title"],
        ]);

        $storageImagePath = public_path() . "/storage/images/";
        $storageExternalImagePath = public_path() . "/assets/images/external";
        $paths = explode("/", $inputs["thumbnail"]);
        $localExternal = $storageExternalImagePath . "/" . end($paths) . ".png";

        try {
            if (!file_exists($localExternal)) {
                copy($inputs["thumbnail"] . ".png", $localExternal);
            }
            copy($localExternal, $storageImagePath . $thumbnail->id);
        } catch (Exception $e) {}

        Article::query()->create([
            "title" => $inputs["title"],
            "author" => $inputs["author"],
            "date_published" => date("Y-m-d", strtotime($inputs["date_published"])),
            "description" => $inputs["description"],
            "link" => $inputs["link"],
            "thumbnail_id" => $thumbnail->id,
        ]);
    }
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $articles = array(
            [
                "title" => "Swordfish missing circle-shaped chunks of flesh hauled in by fishers. What bit it?",
                "author" => "Sascha Pare",
                "date_published" => "July 27, 2023",
                "link" => "https://www.livescience.com/animals/fish/swordfish-missing-circle-shaped-chunks-of-flesh-hauled-in-by-fishers-what-bit-it",
                "description" => "Fishers who reeled in the swordfish said they regularly catch fish with cookiecutter shark bites, but this is the first time they have seen a creature covered in dozens of fresh, oozing wounds.",
                "thumbnail" => "https://imgur.com/8uW77YP",
            ],
            [
                "title" => "Grizzly bear believed to have killed woman on Buttermilk Trail near Yellowstone National Park",
                "author" => "Harry Baker",
                "date_published" => "July 23 2023",
                "link" => "https://www.livescience.com/animals/bears/grizzly-bear-believed-to-have-killed-woman-on-buttermilk-trail-near-yellowstone-national-park",
                "description" => "The suspected attack, which occurred Montana, comes after officials warned that grizzly bears were moving into new areas in the state as their numbers grow.",
                "thumbnail" => "https://imgur.com/dLl6cGf",
            ],
            [
                "title" => "Catspreading 'Big Boss' among finalists of Comedy Pet Photography Awards",
                "author" => "Jennifer Nalewicki",
                "date_published" => "July 20 2023",
                "link" => "https://www.livescience.com/animals/catspreading-big-boss-among-finalists-of-comedy-pet-photography-awards",
                "description" => "Countless pet owners claim that their dog or cat is the funniest animal on the planet. And those assertions might actually not be too far from the truth, as evidenced by the 2023 finalists of the Comedy Pet Photography Awards. From a poodle flying to a kitty sticking its tongue out to the camera, house pet hijinks have reached a whole new level.",
                "thumbnail" => "https://imgur.com/raCy0Dk",
            ],
            [
                "title" => "Dire wolves and saber-toothed cats may have gotten arthritis as they inbred themselves to extinction",
                "author" => "Ethan Freedman",
                "date_published" => "July 12 2023",
                "link" => "https://www.livescience.com/animals/extinct-species/dire-wolves-and-saber-toothed-cats-may-have-gotten-arthritis-as-they-inbred-themselves-to-extinction",
                "description" => "Bones from the two ancient predatory species were found in the La Brea tar pits in what is now West Hollywood and showed signs of bone disease not normally seen in wild animals.",
                "thumbnail" => "https://imgur.com/2aB3GjV",
            ],
            [
                "title" => "The best cooling dog beds for 2023",
                "author" => "Stan Horaczek",
                "date_published" => "June 13 2023",
                "link" => "https://www.popsci.com/gear/best-cooling-dog-beds/",
                "description" => "A cooling dog bed can go a long way toward making your pooch more comfortable during unpleasantly warm weather. Sure, your dog may simply want to pass out on the cold tile of the bathroom floor after a walk, but a dedicated bed with cooling features adds a level of comfort with which a hard floor just can’t compete.",
                "thumbnail" => "https://imgur.com/0IwChRL",
            ],
            [
                "title" => "Police say dogs help solve crimes. Little evidence supports that.",
                "author" => "Peter Andrey Smith",
                "date_published" => "July 27 2023",
                "link" => "https://www.popsci.com/environment/police-canine-unit-evidence/",
                "description" => "The 911 call came early the morning of April 24, 2020: A man was reportedly at the home where his estranged wife lived, violating the protective order she had against him. Police arrived, spotlighting the backyard with flashlights. Jeffery Ryans, a 36-year-old Black man, stood outside smoking a cigarette.",
                "thumbnail" => "https://imgur.com/zIHb8bT",
            ]
        );

        foreach ($articles as $article) {
            ArticleSeeder::makeArticle($article);
        }
    }
}
