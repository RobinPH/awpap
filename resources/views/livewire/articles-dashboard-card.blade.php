<div class="h-44 w-auto flex flex-row bg-stone-300 items-center shadow-md rounded-sm">
    <div class="h-40 w-40 ml-2">
        <img class="w-full h-full object-cover" src="{{$article['imageUrl']}}" alt="">
    </div>
    <div class="ml-3 items-start">
        <p class=""><b>{{ $article['title'] }}</b></p>
        <p class="">{{ $article['link'] }}</p>
        <p class="">{{ $article['short_description'] }}</p>
    </div>
    <div class="ml-auto mr-5">
        <button class="h-9 w-24 bg-green-600 rounded-sm text-white">
            <b>Update</b>
        </button>
    </div>
</div>

