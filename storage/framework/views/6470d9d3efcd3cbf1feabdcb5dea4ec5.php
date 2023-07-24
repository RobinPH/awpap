<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout.user','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout.user'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="items-center justify-center h-full max-w-2xl p-8 mx-auto text-center md:flex ">
        <div class="items-center justify-center max-w-2xl text-center">
            <h1 class="text-3xl font-bold">Every Pet Deserves a Loving Home.</h1>
            <h1 class="mb-6 text-3xl font-bold"><b class="text-blue-500">Adopt</b> a Pet Today</h1>
            <p class="text-sm text-gray-500">Browse our available animals and learn more about the adoption process.
                Together, we can <b>rescue, rehabilitate, and rehome</b> pets in need. Thank you for supporting our
                mission to bring joy to families through pet adoption.</p>
        </div>
    </div>

    <div class="items-center justify-center max-w-6xl mx-auto">
        <h1 class="p-8 text-3xl font-bold text-center">Meet Our Dogs</h1>
        <div class="grid grid-cols-1 gap-6 p-3 md:grid-cols-3 justify-items-center">
            <?php $__currentLoopData = $dogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $animal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('animal-card', ['animal' => $animal])->html();
} elseif ($_instance->childHasBeenRendered('TMNs1rF')) {
    $componentId = $_instance->getRenderedChildComponentId('TMNs1rF');
    $componentTag = $_instance->getRenderedChildComponentTagName('TMNs1rF');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('TMNs1rF');
} else {
    $response = \Livewire\Livewire::mount('animal-card', ['animal' => $animal]);
    $html = $response->html();
    $_instance->logRenderedChild('TMNs1rF', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    <div class="items-center justify-center max-w-6xl mx-auto">
        <h1 class="p-8 text-3xl font-bold text-center">Meet Our Cats</h1>
        <div class="grid grid-cols-1 gap-6 p-3 md:grid-cols-3 justify-items-center">
            <?php $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $animal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('animal-card', ['animal' => $animal])->html();
} elseif ($_instance->childHasBeenRendered('Nu2BcZv')) {
    $componentId = $_instance->getRenderedChildComponentId('Nu2BcZv');
    $componentTag = $_instance->getRenderedChildComponentTagName('Nu2BcZv');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Nu2BcZv');
} else {
    $response = \Livewire\Livewire::mount('animal-card', ['animal' => $animal]);
    $html = $response->html();
    $_instance->logRenderedChild('Nu2BcZv', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    <div class="p-8">
        <h1 class="pt-5 text-3xl font-bold text-center text-blue-500">Adoption Stories</h1>
        <p class="p-1 text-center text-gray-500">Glimpse the experience of the adoption of others</p>
        <div class="flex flex-wrap items-center justify-center gap-5 p-8 md:flex-nowrap bg-blue-30">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('story-card', ['img' => './assets/user.png','title' => 'Fateful Encounter','name' => 'Emily Santos','story' => 'Mesmerized by the playful chorus of barks and meows, my eyes were drawn to a captivating tabby kitten, adorned with emerald-green eyes. Cradling the tiny furball, whom I named Oliver, an undeniable connection formed. In that moment, I knew I had found my feline companion, and without hesitation, I embarked on the adoption process. Little did I know that this fateful encounter would bring immeasurable love, lessons in compassion, and an unwavering bond that would forever shape my life.'])->html();
} elseif ($_instance->childHasBeenRendered('iO5DJpY')) {
    $componentId = $_instance->getRenderedChildComponentId('iO5DJpY');
    $componentTag = $_instance->getRenderedChildComponentTagName('iO5DJpY');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('iO5DJpY');
} else {
    $response = \Livewire\Livewire::mount('story-card', ['img' => './assets/user.png','title' => 'Fateful Encounter','name' => 'Emily Santos','story' => 'Mesmerized by the playful chorus of barks and meows, my eyes were drawn to a captivating tabby kitten, adorned with emerald-green eyes. Cradling the tiny furball, whom I named Oliver, an undeniable connection formed. In that moment, I knew I had found my feline companion, and without hesitation, I embarked on the adoption process. Little did I know that this fateful encounter would bring immeasurable love, lessons in compassion, and an unwavering bond that would forever shape my life.']);
    $html = $response->html();
    $_instance->logRenderedChild('iO5DJpY', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('story-card', ['img' => './assets/user.png','title' => 'Fateful Encounter','name' => 'Emily Santos','story' => 'Mesmerized by the playful chorus of barks and meows, my eyes were drawn to a captivating tabby kitten, adorned with emerald-green eyes. Cradling the tiny furball, whom I named Oliver, an undeniable connection formed. In that moment, I knew I had found my feline companion, and without hesitation, I embarked on the adoption process. Little did I know that this fateful encounter would bring immeasurable love, lessons in compassion, and an unwavering bond that would forever shape my life.'])->html();
} elseif ($_instance->childHasBeenRendered('jfMZ47r')) {
    $componentId = $_instance->getRenderedChildComponentId('jfMZ47r');
    $componentTag = $_instance->getRenderedChildComponentTagName('jfMZ47r');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('jfMZ47r');
} else {
    $response = \Livewire\Livewire::mount('story-card', ['img' => './assets/user.png','title' => 'Fateful Encounter','name' => 'Emily Santos','story' => 'Mesmerized by the playful chorus of barks and meows, my eyes were drawn to a captivating tabby kitten, adorned with emerald-green eyes. Cradling the tiny furball, whom I named Oliver, an undeniable connection formed. In that moment, I knew I had found my feline companion, and without hesitation, I embarked on the adoption process. Little did I know that this fateful encounter would bring immeasurable love, lessons in compassion, and an unwavering bond that would forever shape my life.']);
    $html = $response->html();
    $_instance->logRenderedChild('jfMZ47r', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
        <div class="flex items-center justify-center">
            <button type="button"
                class="font-bold text-white hover:bg-gray-800 bg-slate-950 rounded-full text-sm px-5 py-2.5 mr-2 mb-2 ">
                Share Your Stories
            </button>
        </div>
    </div>

    <div class="items-center justify-center p-2">
        <h1 class="p-8 text-3xl font-bold text-center">Aritcles</h1>
        <div class="flex flex-wrap justify-center gap-6 md:flex-nowrap">
            <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('article-card', ['article' => $article])->html();
} elseif ($_instance->childHasBeenRendered('iEboINz')) {
    $componentId = $_instance->getRenderedChildComponentId('iEboINz');
    $componentTag = $_instance->getRenderedChildComponentTagName('iEboINz');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('iEboINz');
} else {
    $response = \Livewire\Livewire::mount('article-card', ['article' => $article]);
    $html = $response->html();
    $_instance->logRenderedChild('iEboINz', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:article-card>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    <div class="flex items-center justify-center p-16">
        <div class="flex max-w-4xl drop-shadow-xl">
            <div class="bg-white">
                <img class="hidden object-right w-full md:block h-96" src="./assets/newsletter.jpg" alt="">
            </div>
            <div class="flex flex-col justify-center p-8 bg-white rounded">
                <h1 class="pb-2 text-5xl font-bold">SUBSCRIBE TO US!</h1>
                <p class="pb-4">To stay update on our latest products, news and trends. Don’t worry, we won’t spam
                    you!</p>
                <input type="email" placeholder="enter your email here"
                    class="border-b-2 border-solid border-stone-950">
                <div class="flex items-center justify-center pt-4">
                    <button type="button"
                        class="font-bold text-white hover:bg-gray-800 bg-slate-950 rounded-full text-sm px-5 py-2.5 mr-2 mb-2 ">
                        Share Your Stories
                    </button>
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
<?php /**PATH C:\Users\Robin\Desktop\School\3rd year 2nd sem\SoftEng\awpap\resources\views/index.blade.php ENDPATH**/ ?>