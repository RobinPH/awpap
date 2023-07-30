<div>
    <div class="p-10 px-40 text-center">
        <h1 class="text-2xl font-bold text-blue-500">{{ $title }}</h1>
        <p class="">
            {{ $description }}
        </p>
    </div>

    <div class="flex flex-col items-center justify-center w-full m-auto lg:flex-row">
        <div class="flex flex-col justify-center">
            <div class="m-8 border border-gray-200 border-solid bg-sky-100 drop-shadow-xl rounded-xl">
                <ul class="grid grid-cols-1 gap-6 p-12 list-disc">
                    @foreach ($process as $proc)
                        <li>{{ $proc }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div>
            <div class="m-8">
                <img src={{ $img }} alt=""
                    class="max-w-sm border border-gray-200 drop-shadow-xl broder-solid rounded-xl" />
            </div>
        </div>
    </div>
</div>
