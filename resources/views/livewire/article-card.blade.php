<div class="p-5 text-justify bg-white border-2 border-solid rounded-md w-60 drop-shadow-xl">
    <div>
        <img class="w-30 h-30" src={{ $article->thumbnail ? '' : './assets/dog1.jpg' }} alt="">
    </div>
    <p><b>{{ $article->title }}</b></p>
    <div class="flex gap-3 pt-5 text-xs text-gray-400">
        <p>{{ date('M j, Y', strtotime($article->date_published)) }}</p>
        <p>{{ $article->author }}</p>
    </div>
</div>
