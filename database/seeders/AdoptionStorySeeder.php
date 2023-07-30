<?php

namespace Database\Seeders;

use App\Models\AdoptionForm;
use App\Models\AdoptionFormStatus;
use App\Models\AdoptionStory;
use Illuminate\Database\Seeder;

class AdoptionStorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $completed_id = AdoptionFormStatus::query()->where("name", "=", "COMPLETED")->first()->id;

        for ($i = 0; $i < 3; $i++) {
            $adoption = AdoptionForm::query()->where("adoption_form_status_id", "!=", $completed_id)->first();

            if ($adoption) {
                $adoption->adoption_form_status_id = $completed_id;
                $adoption->save();

                $animal = $adoption->animal;

                $animal->adopted_at = now()->toDateTimeString();

                $animal->save();

                AdoptionStory::query()->create([
                    "adoption_id" => $adoption->id,
                    "title" => "Fateful Encounter",
                    "story" => "Mesmerized by the playful chorus of barks and meows, my eyes were drawn to a captivating tabby kitten, adorned with emerald-green eyes. Cradling the tiny furball, whom I named Oliver, an undeniable connection formed. In that moment, I knew I had found my feline companion, and without hesitation, I embarked on the adoption process. Little did I know that this fateful encounter would bring immeasurable love, lessons in compassion, and an unwavering bond that would forever shape my life.",
                ]);
            }
        }
    }
}
