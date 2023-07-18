<x-layout>
    <div class="p-5">
        <h1 class="font-bold text-2xl">Pets</h1>
        <div class="grid grid-cols-1 gap-5 ">
            @foreach ($pets as $pet)
                <livewire:pets-card :pet="$pet"/>
            @endforeach
        </div>
    </div>
</x-layout>
