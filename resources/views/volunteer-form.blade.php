<x-layout>
    <h1 class="text-center font-bold text-3xl pt-10 pb-6">Fill Up Volunteer Form</h1>
    <div class="flex justify-center p-4">
        <div class="bg-white p-16 md:w-9/12 rounded-xl drop-shadow-xl border border-solid border-gray-200">
            <h2 class="border-solid border-b-2 border-slate-950 font-bold text-2xl">Owner's Info</h2>
            <p class="py-4">Name<b class="text-red-500">*</b></p>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                <div class="">
                    <input type="text" placeholder="First Name"
                        class="w-full border-solid border-b-2 border-slate-400">
                </div>
                <div class="">
                    <input type="text" placeholder="First Name"
                        class="w-full border-solid border-b-2 border-slate-400">
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                <div>
                    <p class="pt-8">Phone<b class="text-red-500">*</b></p>
                    <input type="text" placeholder="First Name"
                        class="w-full border-solid border-b-2 border-slate-400">
                </div>
                <div>
                    <p class="pt-8">Location<b class="text-red-500">*</b></p>
                    <input type="text" placeholder="Last Name"
                        class="w-full border-solid border-b-2 border-slate-400">
                </div>
            </div>
        </div>
    </div>
    </div>
</x-layout>
