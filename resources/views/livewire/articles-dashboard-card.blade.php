<div class="flex flex-row items-center w-auto p-4 rounded-sm shadow-md bg-stone-300">
    <div class="w-40 h-40 ml-2">
        <img class="object-cover w-full h-full" src="{{ $article['imageUrl'] }}" alt="">
    </div>
    <div class="items-start ml-3">
        <p class=""><b>{{ $article['title'] }}</b></p>
        <p class="">{{ $article['link'] }}</p>
        <p class="">{{ $article['short_description'] }}</p>
    </div>
    <div class="ml-auto mr-5">
        <button class="w-24 text-white bg-green-600 rounded-sm h-9">
            <b>Update</b>
        </button>
    </div>
</div>
