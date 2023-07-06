<x-layout>
    <h1 class="text-center font-bold text-3xl pt-10 pb-6">Fill Up Volunteer Form</h1>

    <div class="flex-none md:flex md:justify-center p-4">
        <div class="bg-white p-16 md:w-9/12 rounded-xl drop-shadow-xl border border-solid border-gray-200">
            <div>
                <h2 class="border-solid border-b-2 border-slate-950 font-bold text-2xl">Applicant's Info</h2>
                <p class="py-4">Name<b class="text-red-500">*</b></p>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    <div>
                        <input type="text" placeholder="First Name"
                            class="w-full border-solid border-b-2 border-slate-400">
                    </div>
                    <div>
                        <input type="text" placeholder="Last Name"
                            class="w-full border-solid border-b-2 border-slate-400">
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    <div>
                        <p class="pb-4 pt-8">Phone<b class="text-red-500">*</b></p>
                        <input type="text" class="w-full border-solid border-b-2 border-slate-400">
                    </div>
                    <div>
                        <p class="pb-4 lg:pt-8">Location<b class="text-red-500">*</b></p>
                        <input type="text" class="w-full border-solid border-b-2 border-slate-400">
                    </div>

                </div>

                <div class="pt-8 lg:px-32">
                    <label for="volunteer" class="">Type of Volunteer Work?<b class="text-red-500">*</b></p>
                        <div class="pb-4"></div>
                        <select name="volunteer" id="volunteer" class="w-full p-2  border border-slate-400 rounded-lg">
                            <option value="anima-care">Animal Care</option>
                            <option value="office-admin">Office/Admin work</option>
                            <option value="clinic">Clinic</option>
                        </select>
                </div>

                <div class="pt-8 flex justify-center items-center">
                    <button type="button"
                        class="font-bold text-white hover:bg-gray-800 bg-slate-950 rounded-full text-sm px-5 py-2.5 mr-2 mb-2 ">
                        Submit
                    </button>
                </div>
            </div>
        </div>

    </div>
</x-layout>
