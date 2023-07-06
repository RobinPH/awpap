<div>
    <div class="text-center p-10 px-40">
        <h1 class="text-2xl text-blue-500 font-bold">{{ $title }}</h1>
        <p class="">
            {{ $description }}
        </p>
    </div>

    <div class="grid grid-col-1 lg:grid-cols-2">
        <div class="flex flex-col justify-center">
            <div class="bg-sky-100 drop-shadow-xl border border-solid border-gray-200 m-8 rounded-xl">
                <ul class="list-disc p-12 grid grid-cols-1 gap-6">
                    @foreach ($process as $proc)
                        <li>{{ $proc }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div>
            <div class="m-8">
                <img src={{ $img }} alt=""
                    class="drop-shadow-xl border broder-solid border-gray-200 rounded-xl" />
            </div>
        </div>
    </div>
</div>
