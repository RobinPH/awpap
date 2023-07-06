<div class="pb-4">
    <div class="grid grid-cols-1 justify-items-center p-8 pt-10 gap-8">
        <h1 class="text-3xl font-bold text-gray-950 text-">{{ $title }}</h1>
        <p class=" lg:pr-80 lg:pl-80 text-center">{{ $description }}</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 pr-20 pl-20">
        <div>
            <img src={{ $img }} alt="" class="drop-shadow-xl rounded-xl">
        </div>

        <div class="lg:grid lg:grid-cols-1 text-white h-full mx-0 mt-4 lg:mt-0 lg:ml-4 lg:justify-items-center">
            <div class="bg-gray-950 w-full rounded-xl flex align-middle drop-shadow-xl">
                <ul class="list-disc p-12 grid grid-cols-1 gap-6">
                    @foreach ($process as $proc)
                        <li>{{ $proc }}</li>
                    @endforeach
                </ul>
            </div>
        </div>

    </div>
</div>
