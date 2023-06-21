<x-layout>
    <div>
        <div class="grid grid-col-1 md:grid-cols-2">
            <div class="p-8">
                <img src="./assets/volunteer.jpg" alt="" class="h-full rounded-xl" />
            </div>
            <div class="flex flex-col justify-center">
                <div class="m-8">
                    <h1 class="text-3xl font-bold">Become a Volunteer</h1>
                    <p class="text-justify py-4">
                        Volunteering in our organization is a fulfilling experience where
                        you can make a positive impact on countless animals' lives. By
                        animal caring, administration work, and clinical work, you help
                        these animals find loving homes. Your actions contribute to their
                        brighter future and bring you joy and satisfaction.
                    </p>

                    <div class="pt-4">
                        <button type="button"
                            class="font-bold text-white hover:bg-gray-800 bg-slate-950 rounded-full text-sm px-5 py-2.5 mr-2 mb-2">
                            Volunteer Now!
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <h1 class="text-center text-3xl font-bold p-8">Types of Volunteer Work</h1>
        <div class="grid grid-cols-1 lg:grid-cols-3 mx-12">
            @for ($i = 0; $i < 3; $i++)
                <livewire:volunteer-card img="./assets/animalcare.jpeg" title="Animal Care"
                    description="Volunteers who have had their pre-exposure rabies shots can walk and bathe the dogs, groom and socialize the cats, help with cleaning cages and feeding, and other tasks that require direct contact with animals." />
            @endfor
        </div>
    </div>

    <div class="bg-gray-100 p-16 my-8">
        <div class="text-center">
            <h1 class="p-2 text-3xl text-blue-500 font-bold">Donate Now</h1>
            <p class="pb-8">Donations will directly contribute to finding loving homes for animals in need.</p>
        </div>
        <div class="flex flex-wrap lg:no-wrap justify-center">
            <div class=" p-8">
                <img src="./assets/donate.png" alt="" class="h-80">
            </div>
            <div class="p-8">
                <img src="./assets/gcash.png" alt="" class="h-80">
            </div>
        </div>
    </div>

    <div class="flex justify-center p-8">
        <div
            class="bg-white border border-solid border-gray-200 drop-shadow-xl rounded-xl flex flex-column flex-wrap justify-center md:justify-start lg:no-wrap p-8 gap-10">
            <div>
                <img src="./assets/logo.png" alt="" class="h-56">
            </div>
            <div class="grid grid-cols-1 content-center">
                <h2 class="text-2xl font-bold pb-6">Contact Us</h2>
                <ul>
                    <li class="pb-6 flex items-center space-x-2">
                        <ion-icon name="call"></ion-icon>
                        <span>0909 836 6911</span>
                    </li>
                    <li class="pb-6 flex items-center space-x-2">
                        <ion-icon name="mail"></ion-icon>
                        <span>email@gmail.com</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</x-layout>
