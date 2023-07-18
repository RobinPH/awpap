<div class="h-44 w-auto flex flex-row bg-stone-300 items-center shadow-md rounded-sm">
    <div class="h-40 w-40 ml-2">
        <img class="w-full h-full object-cover" src="../assets/user.png" alt="">
    </div>
    <div class="ml-3 items-start">
        <p class=""><b>{{ $name }}</b></p>
        <p class="">{{ $username }}</p>
        <p class="">{{ $email }}</p>
        <p class="">{{ $type }}</p>
    </div>
    <div class="ml-auto mr-5 flex flex-col">
        <button class="h-9 w-24 bg-green-600 rounded-sm text-white mb-3">
            <b>Update</b>
        </button>
        <button class="h-9 w-24 bg-red-600 rounded-sm text-white mb-3">
            <b>Update</b>
        </button>
    </div>
</div>

