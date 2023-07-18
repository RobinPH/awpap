<x-layout>
    <div class="flex justify-center p-3">
        <div class="w-2/5 p-2 bg-teal-100 rounded-full drop-shadow-lg">
            <ul class="flex justify-center gap-20 text-xl">
                <li><a href="#" onclick="toggleCategory(1)">All</a></li>
                <li><a href="#" onclick="toggleCategory(2)">Dogs</a></li>
                <li><a href="#" onclick="toggleCategory(3)">Cats</a></li>
            </ul>
        </div>
    </div>

    <div id="div1" class="items-center justify-center max-w-6xl mx-auto">
        <h1 class="p-8 text-3xl font-bold text-center">All</h1>
        <div class="grid grid-cols-1 gap-2 p-3 sm:grid-cols-4 justify-items-center">

            @foreach ($animals as $animal)
                <livewire:adopt-card :animal="$animal" />
            @endforeach

        </div>
    </div>

    <div id="div2" class="items-center justify-center hidden max-w-6xl mx-auto">
        <h1 class="p-8 text-3xl font-bold text-center">Our Dogs</h1>
        <div class="grid grid-cols-1 gap-2 p-3 sm:grid-cols-4 justify-items-center">

            @foreach ($dogs as $animal)
                <livewire:adopt-card :animal="$animal" />
            @endforeach

        </div>
    </div>

    <div id="div3" class="items-center justify-center hidden max-w-6xl mx-auto">
        <h1 class="p-8 text-3xl font-bold text-center">Our Cats</h1>
        <div class="grid grid-cols-1 gap-2 p-3 sm:grid-cols-4 justify-items-center">

            @foreach ($cats as $animal)
                <livewire:adopt-card :animal="$animal" />
            @endforeach

        </div>
    </div>

    <script>
        function toggleCategory(numIndicator) {
            const categoryContainer = document.querySelectorAll('div[id^="div"]');

            categoryContainer.forEach((container) => {
                if (container.id === 'div' + numIndicator) {
                    container.classList.toggle('hidden');
                } else {
                    container.classList.add('hidden')
                }
            })
        }
    </script>
</x-layout>
