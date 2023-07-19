<x-layout>
    <div>
        <div class="grid grid-col-1 md:grid-cols-2">
            <div class="p-8">
                <img src="./assets/volunteer.jpg" alt="" class="h-full rounded-xl" />
            </div>
            <div class="flex flex-col justify-center">
                <div class="m-8">
                    <h1 class="text-3xl font-bold">Become a Volunteer</h1>
                    <p class="py-4 text-justify">
                        Volunteering in our organization is a fulfilling experience where
                        you can make a positive impact on countless animals' lives. By
                        animal caring, administration work, and clinical work, you help
                        these animals find loving homes. Your actions contribute to their
                        brighter future and bring you joy and satisfaction.
                    </p>

                    <div class="pt-4">
                        <a type="button"
                            class="font-bold text-white hover:bg-gray-800 bg-slate-950 rounded-full text-sm px-5 py-2.5 mr-2 mb-2"
                            href="./volunteer-form">
                            Volunteer Now!
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <h1 class="p-8 text-3xl font-bold text-center">Types of Volunteer Work</h1>
        <div class="grid grid-cols-1 mx-12 lg:grid-cols-3">
            @for ($i = 0; $i < 3; $i++)
                <livewire:volunteer-card img="./assets/animalcare.jpeg" title="Animal Care"
                    description="Volunteers who have had their pre-exposure rabies shots can walk and bathe the dogs, groom and socialize the cats, help with cleaning cages and feeding, and other tasks that require direct contact with animals." />
            @endfor
        </div>
    </div>

    <div class="p-16 my-8 bg-gray-100">
        <div class="text-center">
            <h1 class="p-2 text-3xl font-bold text-blue-500">Donate Now</h1>
            <p class="pb-8">Donations will directly contribute to finding loving homes for animals in need.</p>
        </div>
        <div class="flex flex-wrap justify-center lg:no-wrap">
            <div class="p-8 ">
                <img src="./assets/donate.png" alt="" class="h-80">
            </div>
            <div class="p-8">
                <img src="./assets/gcash.png" alt="" class="h-80">
            </div>
        </div>
    </div>

    <div class="flex justify-center p-8">
        <div
            class="flex flex-wrap justify-center gap-10 p-8 bg-white border border-gray-200 border-solid drop-shadow-xl rounded-xl flex-column md:justify-start lg:no-wrap">
            <div>
                <img src="./assets/logo.png" alt="" class="h-56">
            </div>
            <div class="grid content-center grid-cols-1">
                <h2 class="pb-6 text-2xl font-bold">Contact Us</h2>
                <ul>
                    <li class="flex items-center pb-6 space-x-2">
                        <ion-icon name="call"></ion-icon>
                        <span>0909 836 6911</span>
                    </li>
                    <li class="flex items-center pb-6 space-x-2">
                        <ion-icon name="mail"></ion-icon>
                        <span>email@gmail.com</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</x-layout>
