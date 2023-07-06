<x-layout>
    <div>
        <div class="grid grid-cols-1 justify-items-center p-10 gap-10 text-center">
            <h1 class="text-3xl font-bold"><b class="text-blue-500">Programs</b> Offered</h1>
            <p class=" lg:pr-80 lg:pl-80">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae quis ratione
                officia neque excepturi similique quasi aspernatur cupiditate, quae accusamus!</p>
            <button type="button"
                class="font-bold text-white hover:bg-gray-800 bg-slate-950 rounded-full text-sm px-5 py-2.5 mr-2 mb-2 ">
                Book Now
            </button>
        </div>
    </div>

    <div>
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
</x-layout>
