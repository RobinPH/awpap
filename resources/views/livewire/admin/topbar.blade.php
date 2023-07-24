<div class="flex items-center justify-end w-auto h-12 bg-stone-300">
    <h1 class="mr-5 text-xl font-bold">{{ Auth::user()->email }}</h1>
    <div class="avatar">
        <div class="w-8 rounded">
            <x-image :image='Auth::user()->profilePicture' defaultSrc="assets/no-profile.png" />
        </div>
    </div>
</div>
