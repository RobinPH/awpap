<a class="flex flex-col p-5 text-justify duration-200 bg-white border-2 border-solid rounded-md w-60 drop-shadow-xl hover:-translate-y-1 hover:cursor-pointer"
    href=<?php echo e($article->link); ?> target="_blank">
    <div>
        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.image','data' => ['class' => 'object-cover w-30 h-30','image' => $article->thumbnail,'defaultSrc' => './assets/dog1.jpg']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('image'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'object-cover w-30 h-30','image' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($article->thumbnail),'defaultSrc' => './assets/dog1.jpg']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
    </div>
    <div class="flex flex-col justify-between h-full">
        <p class="pt-2"><b><?php echo e($article->title); ?></b></p>
        <div class="flex gap-3 pt-5 text-xs text-gray-400">
            <span><?php echo e(date('M j, Y', strtotime($article->date_published))); ?></span>
            <span><?php echo e($article->author); ?></span>
        </div>
    </div>
</a>
<?php /**PATH C:\Users\Robin\Desktop\School\3rd year 2nd sem\SoftEng\awpap\resources\views/livewire/article-card.blade.php ENDPATH**/ ?>