<div class="p-4 duration-200 shadow-xl card bg-base-100 hover:-translate-y-1 hover:cursor-pointer"
    onclick="animal_modal.showModal()"
    @click="setAnimal({{ json_encode([...$animal->toArray(), 'type' => $animal->type->type, 'sex' => $animal->sex->sex, 'age_months_string' => $animal->ageMonthsString, 'thumbnail_url' => './storage/images/' . $animal->thumbnail->id]) }})">
    <figure><img class="object-cover w-48 h-48"
            src={{ $animal->thumbnail ? './storage/images/' . $animal->thumbnail->id : './assets/dog1.jpg' }}
            alt={{ $animal->name }} /></figure>
    <div class="p-4 card-body">
        <h3 class="card-title">
            {{ $animal->name }}
        </h3>
    </div>
</div>
