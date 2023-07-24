<x-layout.user>
    <h1 class="pt-10 pb-6 text-3xl font-bold text-center">Fill Up Volunteer Form</h1>

    <div class="flex-none p-4 md:flex md:justify-center">
        <div class="p-16 bg-white border border-gray-200 border-solid md:w-9/12 rounded-xl drop-shadow-xl">
            <div>
                <h2 class="text-2xl font-bold border-b-2 border-solid border-slate-950">Applicant's Info</h2>
                <p class="py-4">Name<b class="text-red-500">*</b></p>

                <div class="grid grid-cols-1 gap-12 lg:grid-cols-2">
                    <div>
                        <input type="text" placeholder="First Name"
                            class="w-full border-b-2 border-solid border-slate-400">
                    </div>
                    <div>
                        <input type="text" placeholder="Last Name"
                            class="w-full border-b-2 border-solid border-slate-400">
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-12 lg:grid-cols-2">
                    <div>
                        <p class="pt-8 pb-4">Phone<b class="text-red-500">*</b></p>
                        <input type="text" class="w-full border-b-2 border-solid border-slate-400">
                    </div>
                    <div>
                        <p class="pb-4 lg:pt-8">Location<b class="text-red-500">*</b></p>
                        <input type="text" class="w-full border-b-2 border-solid border-slate-400">
                    </div>

                </div>

                <div class="pt-8 lg:px-32">
                    <label for="volunteer" class="">Type of Volunteer Work?<b class="text-red-500">*</b></p>
                        <div class="pb-4"></div>
                        <select name="volunteer" id="volunteer" class="w-full p-2 border rounded-lg border-slate-400">
                            <option value="anima-care">Animal Care</option>
                            <option value="office-admin">Office/Admin work</option>
                            <option value="clinic">Clinic</option>
                        </select>
                </div>

                <div class="flex items-center justify-center pt-8">
                    <button type="button"
                        class="font-bold text-white hover:bg-gray-800 bg-slate-950 rounded-full text-sm px-5 py-2.5 mr-2 mb-2 ">
                        Submit
                    </button>
                </div>
            </div>
        </div>

    </div>
</x-layout.user>
