<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout.user','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout.user'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('info-card', ['img' => './assets/store.jpg','title' => 'Animal Expermentation','description' => 'Animals have their own rights and should not be treated as mere commodities for our scientific pursuits. It is essential to recognize that their capacity to experience pain, fear, and suffering is no different from our own. Placing them in laboratories, where they may endure distress and even death, raises serious ethical concerns.'])->html();
} elseif ($_instance->childHasBeenRendered('yhONzdN')) {
    $componentId = $_instance->getRenderedChildComponentId('yhONzdN');
    $componentTag = $_instance->getRenderedChildComponentTagName('yhONzdN');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('yhONzdN');
} else {
    $response = \Livewire\Livewire::mount('info-card', ['img' => './assets/store.jpg','title' => 'Animal Expermentation','description' => 'Animals have their own rights and should not be treated as mere commodities for our scientific pursuits. It is essential to recognize that their capacity to experience pain, fear, and suffering is no different from our own. Placing them in laboratories, where they may endure distress and even death, raises serious ethical concerns.']);
    $html = $response->html();
    $_instance->logRenderedChild('yhONzdN', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('info-card', ['img' => './assets/store.jpg','title' => 'Animal Fighting','description' => 'Animals used in fights, such as dogs and roosters, are subjected to severe physical and emotional abuse. They are often forced into a life of violence and aggression through brutal training methods, denying them any chance of a normal and fulfilling existence. These creatures are living beings that feel pain, fear, and stress, just like humans, and they deserve to be treated with compassion and respect.'])->html();
} elseif ($_instance->childHasBeenRendered('xZpITai')) {
    $componentId = $_instance->getRenderedChildComponentId('xZpITai');
    $componentTag = $_instance->getRenderedChildComponentTagName('xZpITai');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('xZpITai');
} else {
    $response = \Livewire\Livewire::mount('info-card', ['img' => './assets/store.jpg','title' => 'Animal Fighting','description' => 'Animals used in fights, such as dogs and roosters, are subjected to severe physical and emotional abuse. They are often forced into a life of violence and aggression through brutal training methods, denying them any chance of a normal and fulfilling existence. These creatures are living beings that feel pain, fear, and stress, just like humans, and they deserve to be treated with compassion and respect.']);
    $html = $response->html();
    $_instance->logRenderedChild('xZpITai', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('info-card', ['img' => './assets/store.jpg','title' => 'Euthanasia/Mercy Killing','description' => 'Instead of euthanasia, we advocate for increasing efforts in animal adoption, supporting animal shelters and rescue organizations, promoting responsible pet ownership, and investing in comprehensive veterinary care to ensure animals receive the attention and care they deserve. By treating animals with compassion and empathy, we can create a world where their lives are valued and respected as an integral part of our shared ecosystem.'])->html();
} elseif ($_instance->childHasBeenRendered('i1DIMIA')) {
    $componentId = $_instance->getRenderedChildComponentId('i1DIMIA');
    $componentTag = $_instance->getRenderedChildComponentTagName('i1DIMIA');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('i1DIMIA');
} else {
    $response = \Livewire\Livewire::mount('info-card', ['img' => './assets/store.jpg','title' => 'Euthanasia/Mercy Killing','description' => 'Instead of euthanasia, we advocate for increasing efforts in animal adoption, supporting animal shelters and rescue organizations, promoting responsible pet ownership, and investing in comprehensive veterinary care to ensure animals receive the attention and care they deserve. By treating animals with compassion and empathy, we can create a world where their lives are valued and respected as an integral part of our shared ecosystem.']);
    $html = $response->html();
    $_instance->logRenderedChild('i1DIMIA', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('info-card', ['img' => './assets/store.jpg','title' => 'Working Animals','description' => 'Our standpoint is that working animals should receive proper treatment, including consideration, sufficient care, shelter, nourishment, and access to water. They should not be subjected to excessive workloads or burdens, and ill-treatment should never force them to work'])->html();
} elseif ($_instance->childHasBeenRendered('zAJSJH2')) {
    $componentId = $_instance->getRenderedChildComponentId('zAJSJH2');
    $componentTag = $_instance->getRenderedChildComponentTagName('zAJSJH2');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('zAJSJH2');
} else {
    $response = \Livewire\Livewire::mount('info-card', ['img' => './assets/store.jpg','title' => 'Working Animals','description' => 'Our standpoint is that working animals should receive proper treatment, including consideration, sufficient care, shelter, nourishment, and access to water. They should not be subjected to excessive workloads or burdens, and ill-treatment should never force them to work']);
    $html = $response->html();
    $_instance->logRenderedChild('zAJSJH2', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
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
                            </div>

                            <div class="">
                                <ul class="">
                                    <li class="flex items-center pb-6 space-x-2">
                                        <ion-icon name="call"></ion-icon><span>0960 529 8078</span>
                                    </li>
                                    <li class="flex items-center pb-6 space-x-2">
                                        <ion-icon name="mail"></ion-icon><span>contactus@furfecto.com</span>
                                    </li>
                                    <li class="flex items-center space-x-2">
                                        <ion-icon name="location"></ion-icon><span>25 Juan Luna St, Bayambang,
                                            Pangasinan</span>
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
                                <ion-icon name="location"></ion-icon><span>25 Juan Luna St, Bayambang,
                                    Pangasinan</span>
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
                        <a href="https://www.google.com/maps/place/Furfecto+Veterinary+Services/@15.8060303,120.4546736,17z/data=!3m1!4b1!4m6!3m5!1s0x3391491ec8ab154d:0x30bbb1cc71de3c18!8m2!3d15.8060303!4d120.4572485!16s%2Fg%2F11kk1xqgzt?entry=ttu"
                            target="_blank"
                            class="font-bold text-white hover:bg-gray-800 bg-slate-950 rounded-full text-sm px-5 py-2.5 mr-2 mb-2 ">
                            Map
                        </a>
                    </div>
                </div>

                <div class="flex col-span-3 p-2 flex-column">
                    <img src="./assets/map.png" alt="" class="object-cover w-full rounded-xl">
                </div>
            </div>
        </div>
    </div>



 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Robin\Desktop\School\3rd year 2nd sem\SoftEng\awpap\resources\views/about-us.blade.php ENDPATH**/ ?>