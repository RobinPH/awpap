<x-layout.user>
    <div>
        <div>
            <div class="p-8 lg:pl-14 lg:pb-14 lg:pt-14 lg:pr-4">
                <div class="grid grid-cols-1 lg:grid-cols-7 justify-items-center">
                    <div class="col-span-3">
                        <img src="./assets/store.jpg" alt="" class="h-full rounded-xl drop-shadow-xl">
                    </div>
                    <div class="flex flex-col justify-center col-span-4 p-10 text-justify">
                        <h1 class="pb-8 text-3xl font-bold">Animal Experimentation</h1>
                        <p class="text-lg"><b class="text-blue-500">Furfecto Veterinary Services</b> is a leading clinic
                            providing exceptional care for pets. Their dedicated team of skilled veterinarians offers
                            personalized attention and advanced medical expertise. From routine check-ups to specialized
                            treatments, Furfecto Veterinary Services ensures the health and well-being of your furry
                            friends. With state-of-the-art facilities and a focus on preventive medicine, they
                            prioritize individualized care and client satisfaction. Trust Furfecto Veterinary Services
                            for top-notch pet healthcare.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <h1 class="pb-4 text-3xl font-bold text-center">Our Stand</h1>
        @for ($i = 0; $i < 4; $i++)
            <livewire:info-card img="./assets/store.jpg" title="sample"
                description="Furfecto Veterinary Services is a leading clinic
                    providing exceptional care for pets. Their dedicated team of skilled veterinarians offers
                    personalized attention and advanced medical expertise. From routine check-ups to specialized
                    treatments, Furfecto Veterinary Services ensures the health and well-being of your furry
                    friends. With state-of-the-art facilities and a focus on preventive medicine, they prioritize
                    individualized care and client satisfaction. Trust Furfecto Veterinary Services for top-notch
                    pet healthcare." />
        @endfor
    </div>

    <div>
        <h1 class="pb-2 text-3xl font-bold text-center text-blue-500">Contact Info</h1>
        <p class="text-center text-gray-600 text-md">Any question or remarks? Just write us a message!</p>

        <div class="flex justify-center p-12 pt-8 pb-8">
            <div class="grid grid-cols-1 bg-white rounded-lg drop-shadow-xl lg:grid-cols-5">
                <div class="col-span-2">
                    <div class="m-2 bg-gray-200 rounded-lg">
                        <div class="grid grid-cols-1 gap-10 p-8 md:gap-28 justify-items-center md:justify-items-start">
                            <div>
                                <h2 class="text-2xl font-semibold text-blue-500">Contact Information</h2>
                                <p class="text-sm text-gray-500">Say Something to start a live chat.</p>
                            </div>

                            <div class="">
                                <ul class="">
                                    <li class="flex items-center pb-6 space-x-2">
                                        <ion-icon name="call"></ion-icon><span>0909 836 6911</span>
                                    </li>
                                    <li class="flex items-center pb-6 space-x-2">
                                        <ion-icon name="mail"></ion-icon><span>email@gmail.com</span>
                                    </li>
                                    <li class="flex items-center space-x-2">
                                        <ion-icon name="location"></ion-icon><span>location</span>
                                    </li>
                                </ul>
                            </div>

                            <div class="grid grid-cols-3 gap-5">
                                <ion-icon name="logo-twitter"></ion-icon>
                                <ion-icon name="logo-instagram"></ion-icon>
                                <ion-icon name="logo-facebook"></ion-icon>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-span-3 p-11">
                    <div class="flex flex-wrap gap-6 md:flex-nowrap">
                        <div class="w-full md:w-3/6">
                            <h4 class="mb-2 text-sm font-semibold">First Name</h4>
                            <input type="text" class="w-full border-b-2 border-solid border-slate-400 ">
                        </div>
                        <div class="w-full md:w-3/6">
                            <h4 class="mb-2 text-sm font-semibold">First Name</h4>
                            <input type="text" class="w-full border-b-2 border-solid border-slate-400">
                        </div>
                    </div>

                    <div class="flex flex-wrap gap-6 pt-6 md:flex-nowrap">
                        <div class="w-full md:w-3/6">
                            <h4 class="mb-2 text-sm font-semibold">Email</h4>
                            <input type="text" class="w-full border-b-2 border-solid border-slate-400">
                        </div>
                        <div class="w-full md:w-3/6">
                            <h4 class="mb-2 text-sm font-semibold">Phone Number</h4>
                            <input type="text" class="w-full border-b-2 border-solid border-slate-400">
                        </div>
                    </div>

                    <div class="mt-6 mb-6">
                        <h4 class="mb-2 text-sm font-semibold">Subject</h4>
                        <input type="text" class="w-full border-b-2 border-solid border-slate-400">

                        <h4 class="mt-6 mb-2 text-sm font-semibold">Message</h4>
                        <input type="text" placeholder="Write your message here"
                            class="w-full border-b-2 border-solid border-slate-400">
                    </div>

                    <div class="flex justify-end pt-4 ">
                        <button type="button"
                            class="font-bold text-white hover:bg-gray-800 bg-slate-950 rounded-full text-sm px-5 py-2.5 mr-2 mb-2 ">
                            Send Message
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <h1 class="p-8 text-3xl font-bold text-center">Map Section</h1>

        <div class="flex justify-center p-12 pt-8 pb-8">
            <div class="grid grid-cols-1 bg-white md:grid-cols-5 rounded-xl drop-shadow-xl ">
                <div class="col-span-2 p-8">
                    <div class="grid grid-cols-1 gap-10">
                        <div>
                            <h2 class="text-3xl font-bold text-blue-500">We are located here</h2>
                            <div class="flex items-center space-x-2">
                                <ion-icon name="location"></ion-icon><span>location</span>
                            </div>
                        </div>

                        <div>
                            <h2 class="text-2xl font-bold text-blue-500">Accessibility</h2>
                            <ul>
                                <li>Wheelchair</li>
                                <li>Accesible Entrace</li>
                                <li>Accesible Parking Lot</li>
                            </ul>
                        </div>

                        <div>
                            <h2 class="text-2xl font-bold text-blue-500">Amenities</h2>
                            <ul>
                                <li>Good For Animals</li>
                                <li>Vet Services</li>
                                <li>Adoption</li>
                            </ul>
                        </div>
                    </div>

                    <div class="flex items-center justify-center pt-6">
                        <button type="button"
                            class="font-bold text-white hover:bg-gray-800 bg-slate-950 rounded-full text-sm px-5 py-2.5 mr-2 mb-2 ">
                            Map
                        </button>
                    </div>
                </div>

                <div class="flex col-span-3 p-2 flex-column">
                    <img src="./assets/map.png" alt="" class="object-cover w-full rounded-xl">
                </div>
            </div>
        </div>
    </div>

</x-layout.user>
