<div>
    <div class="w-44 h-44">
        <img class="object-cover w-full h-full rounded-xl" src={{ $animal->thumbnail ? '' : './assets/dog1.jpg' }}
            alt={{ $animal->name }}>
    </div>

    <p class="p-2 text-center"><b>{{ $animal->name }}</b></p>
</div>
