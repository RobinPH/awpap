<x-layout>
    <div class="p-3 flex justify-center">
        <div class="bg-sky-100 w-10/12 md:w-11/12 lg:w-2/5 rounded-full p-2 drop-shadow-lg">
            <ul class="flex gap-8 sm:gap-20 justify-center text-xl">
                <li>All</li>
                <li>Dog</li>
                <li>Cat</li>
            </ul>
        </div>
    </div>


    <div class="max-w-6xl mx-auto justify-center items-center">
        <h1 class="font-bold text-3xl text-center p-8">Our Dogs</h1>
        <div class="grid gap-2 grid-cols-1 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-4 justify-items-center p-3">
            @for ($i = 0; $i < 4; $i++)
                <livewire:adopt-card name="Sample"></livewire:adopt-card>
            @endfor

        </div>
    </div>
</x-layout>
