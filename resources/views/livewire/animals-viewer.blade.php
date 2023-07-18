<div>
    <div class="flex justify-center p-3">
        <div class="w-2/5 p-2 bg-teal-100 rounded-full drop-shadow-lg">
            <ul class="flex justify-center gap-20 text-xl">
                <li>
                    <p href="#" wire:click="getAnimalsOfType">All</p>
                </li>
                @foreach ($animalTypes as $animalType)
                    <li>
                        <p href="#" wire:click="getAnimalsOfType('{{ $animalType->id }}')">{{ $animalType->type }}
                        </p>
                    </li>
                @endforeach


            </ul>
        </div>
    </div>

    <div id="div1" class="items-center justify-center max-w-6xl mx-auto">
        <h1 class="p-8 text-3xl font-bold text-center">All</h1>
        <div class="grid grid-cols-1 gap-2 p-3 sm:grid-cols-4 justify-items-center">

            @foreach ($animals as $animal)
                <livewire:adopt-card :animal="$animal" :wire:key="$animal->id" />
            @endforeach

        </div>
    </div>
</div>
