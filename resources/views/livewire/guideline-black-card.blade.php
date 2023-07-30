<div class="pb-4">
    <div class="grid grid-cols-1 gap-8 p-8 pt-10 justify-items-center">
        <h1 class="text-3xl font-bold text-gray-950 text-">{{ $title }}</h1>
        <p class="text-center lg:pr-80 lg:pl-80">{{ $description }}</p>
    </div>

    <div class="flex flex-col items-center justify-center w-full m-auto lg:flex-row">
        <div>
            <img src={{ $img }} alt="" class="max-w-sm drop-shadow-xl rounded-xl">
        </div>

        <div class="h-full mx-0 mt-4 text-white lg:grid lg:grid-cols-1 lg:mt-0 lg:ml-4 lg:justify-items-center">
            <div class="flex w-full align-middle bg-gray-950 rounded-xl drop-shadow-xl">
                <ul class="grid grid-cols-1 gap-6 p-12 list-disc">
                    @foreach ($process as $proc)
                        <li>{{ $proc }}</li>
                    @endforeach
                </ul>
            </div>
        </div>

    </div>
</div>
