<a class="flex flex-col p-5 text-justify duration-200 bg-white border-2 border-solid rounded-md w-60 drop-shadow-xl hover:-translate-y-1 hover:cursor-pointer"
    href={{ $article->link }} target="_blank">
    <div>
        <img class="w-30 h-30" src={{ $article->thumbnail ? '' : './assets/dog1.jpg' }} alt="">
    </div>
    <div class="flex flex-col justify-between h-full">
        <p class="pt-2"><b>{{ $article->title }}</b></p>
        <div class="flex gap-3 pt-5 text-xs text-gray-400">
            <span>{{ date('M j, Y', strtotime($article->date_published)) }}</span>
            <span>{{ $article->author }}</span>
        </div>
    </div>
</a>
