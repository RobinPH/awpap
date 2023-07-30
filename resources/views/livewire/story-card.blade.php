<div class="flex flex-col items-center p-12 bg-white shadow-lg w-96 md:w-2/5 rounded-xl drop-shadow-xl">
    <div class="flex flex-row gap-4">
        <x-image :image="$story->form->adopter->thumbnail" id="{{ $story->form->adopter->id }}"
            class="rounded-full story-user-image-preview h-28" />
        <x-image :image="$story->form->animal->thumbnail" id="{{ $story->form->animal->id }}"
            class="rounded-full story-user-image-preview h-28" />
    </div>
    <h2 class="p-1 text-lg font-bold text-center">{{ $story->title }}</h2>
    <div class="flex items-center gap-1">
        <h3 class="text-sm font-bold text-blue-400">{{ $story->form->adopter->full_name }}</h3>
        <span>-</span>
        <h3 class="text-sm font-bold text-blue-400">{{ $story->form->animal->name }}</h3>
    </div>
    <p class="pt-2 text-xs text-justify">{{ $story->story }}</p>
</div>
