<div>
    <div class="w-48 h-48">
        <img class="object-cover w-full h-full" src={{ $animal->thumbnail ? '' : './assets/dog1.jpg' }}
            alt={{ $animal->name }}>
    </div>

    <p><b>{{ $animal->name }}</b></p>
    <p>{{ $animal->age }}</p>
</div>
