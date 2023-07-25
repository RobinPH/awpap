@php
    $user = Auth::user();
@endphp

<x-layout.user.profile>
    <h1 class="text-xl font-bold">Your Adoptions</h1>
    <div class="flex flex-col w-full">
        @foreach ($user->adoptions as $adoption)
            <div class="flex flex-row items-center w-auto rounded-sm shadow-md h-44 bg-stone-300">
                <div class="w-40 h-40 ml-2 min-w-fit">
                    <x-image class="object-cover w-40 h-40" :image='$adoption->animal->thumbnail' defaultSrc="./assets/dog1.jpg" />
                </div>
                <div class="items-start ml-3">
                    <div class="flex gap-1">
                        <div class="font-bold">Adopter:</div>

                        <div>{{ $adoption->adopter->full_name }}</div>
                    </div>
                    <div class="flex gap-1">
                        <div class="font-bold">Adopting:</div>
                        <div>{{ $adoption->animal->name }} ({{ $adoption->animal->type->type }})</div>
                    </div>
                    <div class="flex gap-1">
                        <div class="font-bold">Status:</div>
                        <div>
                            {{ $adoption->status->name }}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</x-layout.user.profile>
