<?php

namespace Database\Seeders;

use App\Models\Animal;
use App\Models\AnimalSex;
use App\Models\AnimalType;
use App\Models\Image;
use Exception;
use Illuminate\Database\Seeder;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cats = array(
            [
                "Name" => "Max",
                "Sex" => "Male",
                "Type" => "Cat",
                "Birthdate" => "April 1 2019",
                "Description" => "Max is a friendly and playful cat. He loves going for long walks and playing fetch.",
                "ProfilePicture" => "https://imgur.com/VbkTEuk"
            ],
            [
                "Name" => "Whiskers",
                "Sex" => "Male",
                "Type" => "Cat",
                "Birthdate" => "May  2020",
                "Description" => "Whiskers is a playful and curious cat. He loves exploring new places and enjoys lounging in the sun.",
                "ProfilePicture" => "https://imgur.com/2ekbIe1"
            ],
            [
                "Name" => "Kyler",
                "Sex" => "Male",
                "Type" => "Cat",
                "Birthdate" => "October 1 2021",
                "Description" => "Kyler is a graceful and affectionate cat. He enjoys cuddling on laps and is a great mouse hunter.",
                "ProfilePicture" => "https://imgur.com/LxVYFNc"
            ],
            [
                "Name" => "Cleo",
                "Sex" => "Female",
                "Type" => "Cat",
                "Birthdate" => "January  2020",
                "Description" => "Cleo is a mischievous and curious cat. She enjoys exploring every nook and cranny of the house.",
                "ProfilePicture" => "https://imgur.com/f6ppW1M"
            ],
            [
                "Name" => "Gizmo",
                "Sex" => "Male",
                "Type" => "Cat",
                "Birthdate" => "December 1 2019",
                "Description" => "Gizmo is a playful and curious cat. He enjoys chasing laser pointers and cuddling with his favorite blanket.",
                "ProfilePicture" => "https://imgur.com/twaSBtp"
            ],
            [
                "Name" => "Bella",
                "Sex" => "Female",
                "Type" => "Cat",
                "Birthdate" => "June 3 2018",
                "Description" => "Bella is a gentle and elegant cat. She loves grooming herself and sitting by the window, watching birds outside.",
                "ProfilePicture" => "https://imgur.com/AmEdo1s"
            ],
            [
                "Name" => "Oliver",
                "Sex" => "Male",
                "Type" => "Cat",
                "Birthdate" => "April  2022",
                "Description" => "Oliver is a mischievous and intelligent cat. He enjoys solving puzzle toys and chasing after his tail.",
                "ProfilePicture" => "https://imgur.com/fMvPBgu"
            ],
            [
                "Name" => "Nala",
                "Sex" => "Female",
                "Type" => "Cat",
                "Birthdate" => "July 2 2021",
                "Description" => "Nala is a friendly and outgoing cat. She loves meeting new people and cuddling up on the couch.",
                "ProfilePicture" => "https://imgur.com/7uoJgV6"
            ],
            [
                "Name" => "Rocky",
                "Sex" => "Male",
                "Type" => "Cat",
                "Birthdate" => "November 1 2022",
                "Description" => "Rocky is a laid-back and affectionate cat. He enjoys napping in sunny spots and playing with feather toys.",
                "ProfilePicture" => "https://imgur.com/DkFikew"
            ],
            [
                "Name" => "Daisy",
                "Sex" => "Female",
                "Type" => "Cat",
                "Birthdate" => "September 2 2020",
                "Description" => "Daisy is a gentle and shy cat. She enjoys cuddling on soft blankets and observing the world from high places.",
                "ProfilePicture" => "https://imgur.com/UthXq5Q"
            ]
        );

        $dogs = array(
            [
                "Name" => "Mina",
                "Sex" => "Female",
                "Type" => "Dog",
                "Birthdate" => "July 3 2019",
                "Description" => "Mina is a playful and independent pup. She enjoys running and needs lots of exercises to stay happy.",
                "ProfilePicture" => "https://imgur.com/pV4URZu"
            ],
            [
                "Name" => "Duke",
                "Sex" => "Male",
                "Type" => "Dog",
                "Birthdate" => "February 12 2020",
                "Description" => "Duke is a gentle and affectionate dog. He gets along well with children and other pets, making him an ideal family dog.",
                "ProfilePicture" => "https://imgur.com/8YyR6WM"
            ],
            [
                "Name" => "Thor",
                "Sex" => "Male",
                "Type" => "Dog",
                "Birthdate" => "April 28 2018",
                "Description" => "Thor is a majestic and gentle giant. Despite his size, he is surprisingly gentle and great with kids.",
                "ProfilePicture" => "https://imgur.com/e5ME73b"
            ],
            [
                "Name" => "Zeus",
                "Sex" => "Male",
                "Type" => "Dog",
                "Birthdate" => "September 19 2021",
                "Description" => "Zeus is a playful and loyal companion. He is full of energy and loves playing with toys in the backyard.",
                "ProfilePicture" => "https://imgur.com/Ubnba3k"
            ],
            [
                "Name" => "Sadie",
                "Sex" => "Female",
                "Type" => "Dog",
                "Birthdate" => "October 8 2022",
                "Description" => "Sadie is a gentle and affectionate dog. She loves snuggling up with her humans on the couch.",
                "ProfilePicture" => "https://imgur.com/oRaRwCI"
            ],
            [
                "Name" => "Jin",
                "Sex" => "Male",
                "Type" => "Dog",
                "Birthdate" => "October 2 2020",
                "Description" => "Jin  is an inquisitive and clever dog. He's always finding new ways to entertain himself and keeps his owners amused with his antics.",
                "ProfilePicture" => "https://imgur.com/bKkmmzB"
            ],
            [
                "Name" => "Charlie",
                "Sex" => "Male",
                "Type" => "Dog",
                "Birthdate" => "April  2021",
                "Description" => "He loves making new canine friends at the dog park and has an insatiable curiosity for the world around him.",
                "ProfilePicture" => "https://imgur.com/gk0miU0"
            ],
            [
                "Name" => "Lucy",
                "Sex" => "Female",
                "Type" => "Dog",
                "Birthdate" => "September 2 2021",
                "Description" => " She excels at learning new tricks and can often be found entertaining herself with puzzle toys.",
                "ProfilePicture" => "https://imgur.com/46J4dsE"
            ],
            [
                "Name" => "Cooper",
                "Sex" => "Male",
                "Type" => "Dog",
                "Birthdate" => "February 10 2020",
                "Description" => "Cooper is an athletic and agile dog. He loves participating in agility competitions and has a boundless enthusiasm for life.",
                "ProfilePicture" => "https://imgur.com/DlDVOYM"
            ],
            [
                "Name" => "Ruby",
                "Sex" => "Female",
                "Type" => "Dog",
                "Birthdate" => "August  2020",
                "Description" => " Ruby is a loyal and devoted dog. She forms strong bonds with her family members and is always by their side through thick and thin.",
                "ProfilePicture" => "https://imgur.com/Zhos0g5"
            ]
        );



        foreach ($cats as $cat) {
            AnimalSeeder::makeAnimal($cat);
        }

        foreach ($dogs as $dog) {
            AnimalSeeder::makeAnimal($dog);
        }
    }

    private static function makeAnimal($inputs)
    {
        $type = AnimalType::query()->whereRaw("LOWER(type) LIKE '" . strtolower($inputs["Type"]) . "'")->first();
        $sex = AnimalSex::query()->whereRaw("LOWER(sex) LIKE '" . strtolower($inputs["Sex"]) . "'")->first();

        $thumbnail = Image::query()->create([
            "title" => $inputs["Name"],
        ]);

        $storageImagePath = public_path() . "/storage/images/";
        $storageExternalImagePath = public_path() . "/assets/images/external";
        $paths = explode("/", $inputs["ProfilePicture"]);
        $localExternal = $storageExternalImagePath . "/" . end($paths) . ".png";

        $storageImagePath = public_path() . "/storage/images/";

            if (!is_dir($storageImagePath)) {
                mkdir($storageImagePath, 0755, true);
            }

        try {
            if (!file_exists($localExternal)) {
                copy($inputs["ProfilePicture"] . ".png", $localExternal);
            }
            copy($localExternal, $storageImagePath . $thumbnail->id);
        } catch (Exception $e) {}

        Animal::query()->create([
            "name" => $inputs["Name"],
            "type_id" => $type->id,
            "sex_id" => $sex->id,
            "thumbnail_id" => $thumbnail->id,
            "birthdate" => date("Y-m-d", strtotime($inputs["Birthdate"])),
            "description" => $inputs["Description"],
        ]);
    }
}
