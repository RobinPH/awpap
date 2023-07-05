<x-layout>
    <div class="p-3 flex justify-center">
        <div class="bg-teal-100 w-2/5 rounded-full p-2 drop-shadow-lg">
            <ul class="flex gap-20 justify-center text-xl">
                <li><a href="#" onclick="toggleCategory(1)">All</a></li>
                <li><a href="#" onclick="toggleCategory(2)">Dogs</a></li>
                <li><a href="#" onclick="toggleCategory(3)">Cats</a></li>
            </ul>
        </div>
    </div>

    <div id="div1" class="max-w-6xl mx-auto justify-center items-center">
        <h1 class="font-bold text-3xl text-center p-8">All</h1>
        <div class="grid gap-2 grid-cols-1 sm:grid-cols-4 justify-items-center p-3">

            @foreach ($animals as $animal)
                <livewire:adopt-card :animal="$animal"/>
            @endforeach

        </div>
    </div>

    <div id="div2" class="max-w-6xl mx-auto justify-center items-center hidden">
        <h1 class="font-bold text-3xl text-center p-8">Our Dogs</h1>
        <div class="grid gap-2 grid-cols-1 sm:grid-cols-4 justify-items-center p-3">

            @foreach ($dogs as $animal)
                <livewire:adopt-card :animal="$animal"/>
            @endforeach

        </div>
    </div>

    <div id="div3" class="max-w-6xl mx-auto justify-center items-center hidden">
        <h1 class="font-bold text-3xl text-center p-8">Our Cats</h1>
        <div class="grid gap-2 grid-cols-1 sm:grid-cols-4 justify-items-center p-3">

            @foreach ($cats as $animal)
                <livewire:adopt-card :animal="$animal"/>
            @endforeach

        </div>
    </div>

    <script>
        function toggleCategory(numIndicator)
        {
            const categoryContainer = document.querySelectorAll('div[id^="div"]');

            categoryContainer.forEach((container) => {
                if (container.id === 'div' + numIndicator){
                    container.classList.toggle('hidden');
                }
                else {
                    container.classList.add('hidden')
                }
            })
        }
    </script>
</x-layout>
