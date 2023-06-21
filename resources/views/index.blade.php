<x-layout>
    <div class="md:flex items-center max-w-2xl mx-auto justify-center text-center h-full p-8 ">
        <div class="max-w-2xl items-center justify-center text-center">
            <h1 class="font-bold text-3xl">Every Pet Deserves a Loving Home.</h1>
            <h1 class="font-bold text-3xl mb-6"><b class="text-blue-500">Adopt</b> a Pet Today</h1>
            <p class="text-sm text-gray-500">Browse our available animals and learn more about the adoption process.
                Together, we can <b>rescue, rehabilitate, and rehome</b> pets in need. Thank you for supporting our
                mission to bring joy to families through pet adoption.</p>
        </div>
    </div>

    <div class="max-w-6xl mx-auto justify-center items-center">
        <h1 class="font-bold text-3xl text-center p-8">Meet Our Dogs</h1>
        <div class="grid gap-6 grid-cols-1 sm:grid-cols-3 justify-items-center p-3">
            @for ($i = 0; $i < 6; $i++)
                <livewire:animal-card img="./assets/dog1.jpg" name="Sample" age="5"></livewire:animal-card>
            @endfor

        </div>
    </div>

    <div class="max-w-6xl mx-auto justify-center items-center">
        <h1 class="font-bold text-3xl text-center p-8">Meet Our Cats</h1>
        <div class="grid gap-6 grid-cols-1 sm:grid-cols-3 justify-items-center p-3">
            @for ($i = 0; $i < 6; $i++)
                <livewire:animal-card img="./assets/dog1.jpg" name="Sample2" age="5"></livewire:animal-card>
            @endfor
        </div>
    </div>

    <div class="p-8">
        <h1 class="text-center text-blue-500 font-bold text-3xl pt-5">Adoption Stories</h1>
        <p class="text-center text-gray-500 p-1">Glimpse the experience of the adoption of others</p>
        <div class="flex gap-5 flex-wrap md:flex-nowrap justify-center items-center p-8 bg-blue-30">
            <livewire:story-card img="./assets/user.png" title="Fateful Encounter" name="Emily Santos"
                story="Mesmerized by the playful chorus of barks and meows, my eyes were drawn to a captivating tabby kitten, adorned with emerald-green eyes. Cradling the tiny furball, whom I named Oliver, an undeniable connection formed. In that moment, I knew I had found my feline companion, and without hesitation, I embarked on the adoption process. Little did I know that this fateful encounter would bring immeasurable love, lessons in compassion, and an unwavering bond that would forever shape my life." />
            <livewire:story-card img="./assets/user.png" title="Fateful Encounter" name="Emily Santos"
                story="Mesmerized by the playful chorus of barks and meows, my eyes were drawn to a captivating tabby kitten, adorned with emerald-green eyes. Cradling the tiny furball, whom I named Oliver, an undeniable connection formed. In that moment, I knew I had found my feline companion, and without hesitation, I embarked on the adoption process. Little did I know that this fateful encounter would bring immeasurable love, lessons in compassion, and an unwavering bond that would forever shape my life." />
        </div>
        <div class="flex justify-center items-center">
            <button type="button"
                class="font-bold text-white hover:bg-gray-800 bg-slate-950 rounded-full text-sm px-5 py-2.5 mr-2 mb-2 ">
                Share Your Stories
            </button>
        </div>
    </div>

    <div class="justify-center items-center p-2">
        <h1 class="font-bold text-3xl text-center p-8">Aritcles</h1>
        <div class="flex flex-wrap md:flex-nowrap gap-6 justify-center">
            <livewire:article-card img="./assets/dog1.jpg"
                title="Family reunited with stolen dog at ACC adoption eventle" date="June 3,2022" publisher="WABC-NY">
            </livewire:article-card>
            <livewire:article-card img="./assets/dog1.jpg"
                title="Family reunited with stolen dog at ACC adoption eventle" date="June 3,2022" publisher="WABC-NY">
            </livewire:article-card>
            <livewire:article-card img="./assets/dog1.jpg"
                title="Family reunited with stolen dog at ACC adoption eventle" date="June 3,2022" publisher="WABC-NY">
            </livewire:article-card>
        </div>
    </div>

    <div class="flex items-center p-16 justify-center">
        <div class="flex max-w-4xl drop-shadow-xl">
            <div class="bg-white">
                <img class="hidden md:block w-full h-96 object-right" src="./assets/newsletter.jpg" alt="">
            </div>
            <div class="bg-white p-8 flex flex-col justify-center rounded">
                <h1 class="font-bold text-5xl pb-2">SUBSCRIBE TO US!</h1>
                <p class="pb-4">To stay update on our latest products, news and trends. Don’t worry, we won’t spam
                    you!</p>
                <input type="email" placeholder="enter your email here"
                    class="border-solid border-b-2 border-stone-950">
                <div class="pt-4 flex justify-center items-center">
                    <button type="button"
                        class="font-bold text-white hover:bg-gray-800 bg-slate-950 rounded-full text-sm px-5 py-2.5 mr-2 mb-2 ">
                        Share Your Stories
                    </button>
                </div>
            </div>

        </div>
    </div>
</x-layout>
