<div x-data="{
    animal: {},
    animalType: 'ALL',
    setAnimal(animal) {
        this.animal = animal
    }
}">
    <div class="flex justify-center p-3">
        <div class="w-2/5 p-2 bg-teal-100 rounded-full drop-shadow-lg">
            <ul class="flex justify-center gap-20 text-xl">
                <li class="hover:cursor-pointer" @click="animalType = 'ALL'" wire:click="getAnimalsOfType">
                    <p href="#">ALL</p>
                </li>
                @foreach ($animalTypes as $animalType)
                    <li class="hover:cursor-pointer" @click="animalType = '{{ $animalType->type }}'"
                        wire:click="getAnimalsOfType('{{ $animalType->id }}')">
                        <p href="#">{{ $animalType->type }}
                        </p>
                    </li>
                @endforeach


            </ul>
        </div>
    </div>

    <div id="div1" class="items-center justify-center max-w-6xl mx-auto">
        <h1 class="p-8 text-3xl font-bold text-center" x-text="animalType"></h1>
        <div class="grid grid-cols-1 gap-2 p-3 sm:grid-cols-4 justify-items-center">

            @foreach ($animals as $animal)
                <livewire:adopt-card :animal="$animal" :wire:key="$animal->id" />
            @endforeach

        </div>
    </div>

    <dialog id="animal_modal" class=" modal">
        <form method="dialog" class="w-1/2 max-w-5xl modal-box">
            <div class="flex gap-4">
                <figure><img class="object-cover w-80 h-80"
                        src={{ $animal->thumbnail ? './storage/images/' . $animal->thumbnail->id : './assets/dog1.jpg' }}
                        alt={{ $animal->name }} /></figure>
                <div class="flex flex-col w-full">
                    <h3 class="w-full text-lg font-bold text-center" x-text="animal.name"></h3>
                    <div>
                        <span><b>Type: </b></span>
                        <span x-text="animal.type"></span>
                    </div>
                    <div>
                        <span><b>Age: </b></span>
                        <span x-text="animal.age_months_string"></span>
                    </div>
                    <div>
                        <span><b>Sex: </b></span>
                        <span x-text="animal.sex"></span>
                    </div>
                    <p class="py-4" x-text="animal.description"></p>

                </div>
            </div>
            <div class="modal-action">
                <!-- if there is a button in form, it will close the modal -->
                <a class="w-full btn btn-primary" href="./adoption-form">Adopt Now</a>
            </div>
        </form>
        <form method="dialog" class="modal-backdrop">
            <button>close</button>
        </form>
    </dialog>
</div>
