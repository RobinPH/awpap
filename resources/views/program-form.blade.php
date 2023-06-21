<x-layout>
    <h1 class="text-center font-bold text-3xl pt-10 pb-6">Fill Up Program Form</h1>
    <div class="flex justify-center p-4">
        <div class="bg-white p-16 md:w-9/12 rounded-xl drop-shadow-xl border border-solid border-gray-200">
            <div>
                <h2 class="border-solid border-b-2 border-slate-950 font-bold text-2xl">Owner's Info</h2>
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

                <p class="pb-4 pt-8">Email<b class="text-red-500">*</b></p>
                <input type="text" class="w-full border-solid border-b-2 border-slate-400 py-">


                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    <div>
                        <p class="pb-4 pt-8">Phone<b class="text-red-500">*</b></p>
                        <input type="text" placeholder="First Name"
                            class="w-full border-solid border-b-2 border-slate-400">
                    </div>
                    <div>
                        <p class="pb-4 lg:pt-8">Location<b class="text-red-500">*</b></p>
                        <input type="text" placeholder="Last Name"
                            class="w-full border-solid border-b-2 border-slate-400">
                    </div>
                </div>


                <h2 class="border-solid border-b-2 border-slate-950 font-bold text-2xl pt-12">Pet's Info</h2>
                <p class="py-4 text-sm">NOTE: At the moment, you can only book one Patient Type in a single booking. You
                    can submit a new booking if you want to book another Patient Type.</b></p>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    <div>
                        <p class="pb-4 pt-8">Patient Type<b class="text-red-500">*</b></p>
                        <input type="text" placeholder="First Name"
                            class="w-full border-solid border-b-2 border-slate-400">
                    </div>
                    <div>
                        <p class="pb-4 lg:pt-8">Breed of Dog<b class="text-red-500">*</b></p>
                        <input type="text" placeholder="Last Name"
                            class="w-full border-solid border-b-2 border-slate-400">
                    </div>
                    <div>
                        <p class=" lg:pt-8">How Many?<b class="text-red-500">*</b></p>
                        <input type="text" placeholder="Last Name"
                            class="w-full border-solid border-b-2 border-slate-400">
                    </div>
                </div>

                <h2 class="border-solid border-b-2 border-slate-950 font-bold text-2xl pt-12">Appointment</h2>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    <div>
                        <p class="pb-4 lg:pt-8">Program Type<b class="text-red-500">*</b></p>
                        <input type="text" placeholder="Last Name"
                            class="w-full border-solid border-b-2 border-slate-400">
                    </div>
                    <div class="pb-8 lg:pb-1">
                        <p class="pb-4 lg:pt-8">Select Date<b class="text-red-500">*</b></p>
                        <input type="date" placeholder="Last Name"
                            class="w-full border-solid border-b-2 border-slate-400">
                    </div>
                </div>

                <p class=" lg:pt-8 lg:pb-2">Other information about your pet?</p>
                <textarea name="" id="" rows="10" placeholder="Pregant? Inheat? Watery Poop?"
                    class="px-4 lg:py-2 w-full border border-solid border-b-2 border-slate-400"></textarea>

                <p class=" pt-4 lg:pt-1 lg:pt-8 lg:pb-2">Please upload photos of your pet/s (head, body [top and side
                    view], and gentitals)</p>
                <div class="flex items-center justify-center w-full">
                    <label for="dropzone-file"
                        class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer hover:bg-gray-100 ">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-700" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                </path>
                            </svg>
                            <p class="mb-2 text-sm text-gray-700"><span class="font-semibold">Click to upload</span> or
                                drag and drop</p>
                            <p class="text-xs text-gray-600 ">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                        </div>
                        <input id="dropzone-file" type="file" class="hidden" />
                    </label>
                </div>

                <div class="pt-4 flex justify-center items-center">
                    <button type="button"
                        class="font-bold text-white hover:bg-gray-800 bg-slate-950 rounded-full text-sm px-5 py-2.5 mr-2 mb-2 ">
                        Submit
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-layout>
