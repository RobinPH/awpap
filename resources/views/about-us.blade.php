<x-layout>
    <div>
        <div>
            <div class="p-8 lg:pl-14 lg:pb-14 lg:pt-14 lg:pr-4">
                <div class="grid grid-cols-1 lg:grid-cols-7 justify-items-center">
                    <div class="col-span-3">
                        <img src="./assets/store.jpg" alt="" class="h-full rounded-xl drop-shadow-xl">
                    </div>
                    <div class="flex flex-col justify-center p-10 text-justify col-span-4">
                        <h1 class="font-bold text-3xl pb-8">Animal Experimentation</h1>
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
        <h1 class="font-bold text-center text-3xl pb-4">Our Stand</h1>
        @for ($i = 0; $i < 4; $i++)
            <livewire:info-card title="sample"
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
        <h1 class="text-center text-3xl font-bold text-blue-500 pb-2">Contact Info</h1>
        <p class="text-center text-md text-gray-600">Any question or remarks? Just write us a message!</p>

        <div class="flex justify-center p-12 pt-8 pb-8">
            <div class="drop-shadow-xl grid grid-cols-1 lg:grid-cols-5 rounded-lg bg-white">
                <div class="col-span-2">
                    <div class="bg-gray-200 m-2 rounded-lg">
                        <div class="p-8 grid grid-cols-1 gap-10 md:gap-28 justify-items-center md:justify-items-start">
                            <div>
                                <h2 class="text-2xl font-semibold text-blue-500">Contact Information</h2>
                                <p class="text-sm text-gray-500">Say Something to start a live chat.</p>
                            </div>

                            <div class="">
                                <ul class="">
                                    <li class="pb-6 flex items-center space-x-2">
                                        <ion-icon name="call"></ion-icon><span>0909 836 6911</span>
                                    </li>
                                    <li class="pb-6 flex items-center space-x-2">
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
                    <div class="flex flex-wrap md:flex-nowrap gap-6">
                        <div class="w-full md:w-3/6">
                            <h4 class="font-semibold text-sm mb-2">First Name</h4>
                            <input type="text" class="w-full border-solid border-b-2 border-slate-400 ">
                        </div>
                        <div class="w-full md:w-3/6">
                            <h4 class="font-semibold text-sm mb-2">First Name</h4>
                            <input type="text" class="w-full border-solid border-b-2 border-slate-400">
                        </div>
                    </div>

                    <div class="flex flex-wrap md:flex-nowrap gap-6 pt-6">
                        <div class="w-full md:w-3/6">
                            <h4 class="font-semibold text-sm mb-2">Email</h4>
                            <input type="text" class="w-full border-solid border-b-2 border-slate-400">
                        </div>
                        <div class="w-full md:w-3/6">
                            <h4 class="font-semibold text-sm mb-2">Phone Number</h4>
                            <input type="text" class="w-full border-solid border-b-2 border-slate-400">
                        </div>
                    </div>

                    <div class="mt-6 mb-6">
                        <h4 class="font-semibold text-sm mb-2">Subject</h4>
                        <input type="text" class="w-full border-solid border-b-2 border-slate-400">

                        <h4 class="font-semibold text-sm mt-6 mb-2">Message</h4>
                        <input type="text" placeholder="Write your message here"
                            class="w-full border-solid border-b-2 border-slate-400">
                    </div>

                    <div class="pt-4 flex justify-end ">
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
        <h1 class="font-bold text-3xl text-center p-8">Map Section</h1>

        <div class="flex justify-center p-12 pt-8 pb-8">
            <div class="grid grid-cols-1 md:grid-cols-5 rounded-xl bg-white drop-shadow-xl ">
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

                    <div class="pt-6 flex justify-center items-center">
                        <button type="button"
                            class="font-bold text-white hover:bg-gray-800 bg-slate-950 rounded-full text-sm px-5 py-2.5 mr-2 mb-2 ">
                            Map
                        </button>
                    </div>
                </div>

                <div class="flex flex-column col-span-3 p-2">
                    <img src="./assets/map.png" alt="" class="w-full object-cover rounded-xl">
                </div>
            </div>
        </div>
    </div>

</x-layout>
