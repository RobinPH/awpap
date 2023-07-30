<div class="flex flex-row items-center w-auto p-4 rounded-sm shadow-md bg-stone-300">
    <div class="w-40 h-40 ml-2">
        <img class="object-cover w-full h-full" src="../assets/user.png" alt="">
    </div>
    <div class="items-start ml-3">
        <p class=""><b>{{ $name }}</b></p>
        <p class="">{{ $username }}</p>
        <p class="">{{ $email }}</p>
        <p class="">{{ $type }}</p>
    </div>
    <div class="flex flex-col ml-auto mr-5">
        <button class="w-24 mb-3 text-white bg-green-600 rounded-sm h-9">
            <b>Update</b>
        </button>
        <button class="w-24 mb-3 text-white bg-red-600 rounded-sm h-9">
            <b>Update</b>
        </button>
    </div>
</div>
