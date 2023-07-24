<div class="flex flex-row items-center w-auto rounded-sm shadow-md h-44 bg-stone-300">
    <div class="w-40 h-40 ml-2 min-w-fit">
        <x-image class="object-cover w-40 h-40" :image='$animal->thumbnail' defaultSrc="./assets/dog1.jpg" />
    </div>
    <div class="items-start ml-3">
        <p class=""><b>{{ $animal->name }}</b></p>
        <p class="">{{ $animal->type->type }}</p>
        <p class="">{{ $animal->age }}</p>
        <p class="">{{ $animal->sex->sex }}</p>
        <p class="">{{ $animal->description }}</p>
    </div>
    <div class="ml-auto mr-5">
        <button class="w-24 text-white bg-green-600 rounded-sm h-9">
            <b>Update</b>
        </button>
    </div>
</div>
