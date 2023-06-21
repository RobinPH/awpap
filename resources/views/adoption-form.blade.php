<x-layout>
    <h1 class="text-center font-bold text-3xl pt-10 pb-6">Fill Up Adoption Form</h1>
    <div class="flex justify-center p-4">
        <div class="bg-white p-16 md:w-9/12 rounded-xl drop-shadow-xl border border-solid border-gray-200">
            <div>
                <h2 class="border-solid border-b-2 border-slate-950 font-bold text-2xl">Applicant's Info</h2>
                <p class="py-4">Name<b class="text-red-500">*</b></p>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-y-2 lg:gap-x-12">
                    <div>
                        <input type="text" placeholder="First Name"
                            class="w-full border-solid border-b-2 border-slate-400">
                    </div>
                    <div>
                        <input type="text" placeholder="Last Name"
                            class="w-full border-solid border-b-2 border-slate-400">
                    </div>
                </div>

                <p class="pb-4 pt-8">Address<b class="text-red-500">*</b></p>
                <input type="text" class="w-full border-solid border-b-2 border-slate-400 py-">


                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-y-2 lg:gap-x-12">
                    <div>
                        <p class="pb-4 pt-8">Phone<b class="text-red-500">*</b></p>
                        <input type="text" class="w-full border-solid border-b-2 border-slate-400">
                    </div>
                    <div>
                        <p class="pb-4 lg:pt-8">Email<b class="text-red-500">*</b></p>
                        <input type="text" class="w-full border-solid border-b-2 border-slate-400">
                    </div>
                    <div>
                        <p class="pb-4 lg:pt-8">Select Date<b class="text-red-500">*</b></p>
                        <input type="date" placeholder="Last Name"
                            class="w-full border-solid border-b-2 border-slate-400">
                    </div>
                    <div>
                        <p class="pb-4 lg:pt-8">Status<b class="text-red-500">*</b></p>
                        <div class="flex justify-between">
                            <input type="radio" id="status" name="status" value="single">
                            <label for="single">Single</label><br>
                            <input type="radio" id="status" name="status" value="married">
                            <label for="married">Married</label><br>
                            <input type="radio" id="status" name="status" value="others">
                            <label for="others">Others</label><br>
                        </div>
                    </div>

                    <div>
                        <div class="pb-4 lg:pt-8">
                            <p>Occupation<b class="text-red-500">*</b></p>
                            <p class="text-sm italic">Please type N/A if unemployed</p>
                        </div>
                        <input type="text" class="w-full border-solid border-b-2 border-slate-400">
                    </div>

                    <div>
                        <div class="pb-4 lg:pt-8">
                            <p>Social Media<b class="text-red-500">*</b></p>
                            <p class="text-sm italic">Please type N/A if no Social Media</p>
                        </div>
                        <input type="text" class="w-full border-solid border-b-2 border-slate-400">
                    </div>

                    <div>
                        <p class="pb-4 lg:pt-8">What prompted you to adopt<b class="text-red-500">*</b></p>
                        <div class="grid grid-cols-2 gap-2">
                            <div>
                                <input type="checkbox" id="html" name="prompted" value="friend">
                                <label for="friend">Friend</label><br>
                            </div>
                            <div>
                                <input type="checkbox" id="html" name="prompted" value="website">
                                <label for="website">Website</label><br>
                            </div>
                            <div>
                                <input type="checkbox" id="html" name="prompted" value="friend">
                                <label for="friend">Social Media</label><br>
                            </div>
                            <div>
                                <input type="checkbox" id="html" name="prompted" value="friend">
                                <label for="friend">Other</label><br>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p class="pb-4 lg:pt-8">Have you adopted before?<b class="text-red-500">*</b></p>
                        <div class="flex gap-8">
                            <input type="radio" id="html" name="status" value="single">
                            <label for="single">Yes</label><br>
                            <input type="radio" id="html" name="status" value="married">
                            <label for="married">No</label><br>
                        </div>
                    </div>
                    <div class="lg:col-span-2 ">
                        <p class="lg:pb-4 lg:pt-8 font-bold">Alternate Contact<b class="text-red-500">*</b></p>
                    </div>
                    <div>
                        <input type="text" placeholder="First Name"
                            class="w-full border-solid border-b-2 border-slate-400">
                    </div>
                    <div>
                        <input type="text" placeholder="Last Name"
                            class="w-full border-solid border-b-2 border-slate-400">
                    </div>

                    <div>
                        <p class="pb-4 lg:pt-8">Phone<b class="text-red-500">*</b></p>
                        <input type="text" class="w-full border-solid border-b-2 border-slate-400">
                    </div>
                    <div>
                        <p class="pb-4 lg:pt-8">Email<b class="text-red-500">*</b></p>
                        <input type="text" class="w-full border-solid border-b-2 border-slate-400">
                    </div>
                </div>

                <h2 class="border-solid border-b-2 border-slate-950 font-bold text-2xl pt-12">Questionaire</h2>
                <p class="py-4 text-sm text-justify">In an effort to help the process go smoothly, please be as
                    detailed as possible with your responses to the questions below.</p>

                <div class="grid grid-cols-1 gap-12 lg:gap-y-2 lg:gap-x-12">
                    <div>
                        <p class="pb-4 lg:pt-8">What are you looking to adopt?<b class="text-red-500">*</b></p>
                        <div class="flex flex-col lg:flex-row gap-4 lg:gap-20 flex-wrap md:no-wrap">
                            <div>
                                <input type="radio" id="html" name="status" value="married">
                                <label for="married">Cat</label><br>
                            </div>
                            <div>
                                <input type="radio" id="html" name="status" value="married">
                                <label for="married">Dog</label><br>
                            </div>
                            <div>
                                <input type="radio" id="html" name="status" value="married">
                                <label for="married">Both</label><br>
                            </div>
                            <div>
                                <input type="radio" id="html" name="status" value="married">
                                <label for="married">Not decided</label><br>
                            </div>
                        </div>
                    </div>

                    <div>
                        <p class="pb-4 lg:pt-8">Are you applying to adopt a specific shelter animal?<b
                                class="text-red-500">*</b></p>
                        <div class="flex flex-col lg:flex-row gap-4 lg:gap-20 flex-wrap md:no-wrap">
                            <div>
                                <input type="radio" id="html" name="status" value="married">
                                <label for="married">Yes</label><br>
                            </div>
                            <div>
                                <input type="radio" id="html" name="status" value="married">
                                <label for="married">No</label><br>
                            </div>
                        </div>
                    </div>

                    <div>
                        <p class=" lg:pt-8 pb-2">Describe your ideal pet, including its sex, age, appearance,
                            temperament, etc.</p>
                        <textarea name="" id="" rows="10"
                            class="px-4 lg:py-2 w-full border border-solid border-b-2 border-slate-400"></textarea>
                    </div>

                    <div>
                        <p class="pb-4 lg:pt-8">What are you looking to adopt?<b class="text-red-500">*</b></p>
                        <div class="flex flex-col lg:flex-row gap-4 lg:gap-20 flex-wrap md:no-wrap">
                            <div>
                                <input type="radio" id="html" name="status" value="married">
                                <label for="married">Houce</label><br>
                            </div>
                            <div>
                                <input type="radio" id="html" name="status" value="married">
                                <label for="married">Condo</label><br>
                            </div>
                            <div>
                                <input type="radio" id="html" name="status" value="married">
                                <label for="married">Apartment</label><br>
                            </div>
                            <div>
                                <input type="radio" id="html" name="status" value="married">
                                <label for="married">Other</label><br>
                            </div>
                        </div>
                    </div>

                    <div>
                        <p class="lg:pb-4 lg:pt-8">What happens to your pet if or when you move?<b
                                class="text-red-500">*</b></p>
                        <input type="text" class="w-full border-solid border-b-2 border-slate-400">
                    </div>

                    <div>
                        <p class="pb-4 lg:pt-8">Who do you live with?<b class="text-red-500">*</b></p>
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-2">
                            <div>
                                <input type="checkbox" id="html" name="status" value="married">
                                <label for="married">Houce</label><br>
                            </div>
                            <div>
                                <input type="checkbox" id="html" name="status" value="married">
                                <label for="married">Condo</label><br>
                            </div>
                            <div>
                                <input type="checkbox" id="html" name="status" value="married">
                                <label for="married">Apartment</label><br>
                            </div>
                            <div>
                                <input type="checkbox" id="html" name="status" value="married">
                                <label for="married">Other</label><br>
                            </div>
                            <div>
                                <input type="checkbox" id="html" name="status" value="married">
                                <label for="married">Other</label><br>
                            </div>
                            <div>
                                <input type="checkbox" id="html" name="status" value="married">
                                <label for="married">Other</label><br>
                            </div>
                        </div>
                    </div>

                    <div>
                        <p class="pb-4 lg:pt-8">Are any members of your household allergic to animals?<b
                                class="text-red-500">*</b></p>
                        <div class="flex flex-col lg:flex-row gap-4 lg:gap-20 flex-wrap md:no-wrap">
                            <div>
                                <input type="radio" id="html" name="status" value="married">
                                <label for="married">Yes</label><br>
                            </div>
                            <div>
                                <input type="radio" id="html" name="status" value="married">
                                <label for="married">No</label><br>
                            </div>
                        </div>
                    </div>

                    <div>
                        <p class="lg:pb-4 lg:pt-8">Who will be responsible for feeding, grooming, and generally caring
                            for your pet?<b class="text-red-500">*</b></p>
                        <input type="text" class="w-full border-solid border-b-2 border-slate-400">
                    </div>

                    <div>
                        <p class="lg:pb-4 lg:pt-8">Who will be financially responsible for your pet’s needs (i.e. food,
                            vet bills, etc.)?<b class="text-red-500">*</b></p>
                        <input type="text" class="w-full border-solid border-b-2 border-slate-400">
                    </div>

                    <div>
                        <p class="lg:pb-4 lg:pt-8">How many hours in an average workday will your pet be left alone?<b
                                class="text-red-500">*</b></p>
                        <input type="text" class="w-full border-solid border-b-2 border-slate-400">
                    </div>

                    <div>
                        <p class=" lg:pt-8 pb-2">What steps will you take to introduce your new pet to his/her new
                            surroundings?<b class="text-red-500">*</b></p>
                        <textarea name="" id="" rows="10"
                            class="px-4 lg:py-2 w-full border border-solid border-b-2 border-slate-400"></textarea>
                    </div>

                    <div>
                        <p class="pb-4 lg:pt-8">Does everyone in the family support your decision to adopt a pet?<b
                                class="text-red-500">*</b></p>
                        <div class="flex flex-col lg:flex-row gap-4 lg:gap-20 flex-wrap md:no-wrap">
                            <div>
                                <input type="radio" id="html" name="status" value="married">
                                <label for="married">Yes</label><br>
                            </div>
                            <div>
                                <input type="radio" id="html" name="status" value="married">
                                <label for="married">No</label><br>
                            </div>
                        </div>
                    </div>

                    <div class="pt-4 text-justify">
                        <p>Please attach photos of your home. This has replaced our on-site ocular inspections.</p>
                        <ul class="list-decimal pl-4">
                            <li>Front of the house</li>
                            <li>Street Photo</li>
                            <li>Living room</li>
                            <li>Dining area</li>
                            <li>Kitchen</li>
                            <li>Bedroom/s (if your pet will have access)</li>
                            <li>Windows (if adopting a cat)</li>
                            <li>Front & backyard</li>
                        </ul>
                    </div>

                    <p class=" pt-4 lg:pt-1 lg:pt-8 lg:pb-2">We value your privacy. Your photos will not be used for
                        purposes other than this adoption application<b class="text-red-500">*</b></p>
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
                                <p class="mb-2 text-sm text-gray-700"><span class="font-semibold">Click to
                                        upload</span> or drag and drop</p>
                                <p class="text-xs text-gray-600 ">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                            </div>
                            <input id="dropzone-file" type="file" class="hidden" />
                        </label>
                    </div>
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
