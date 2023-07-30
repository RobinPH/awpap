<div>
    <div class="p-10 px-40 text-center">
        <h1 class="text-2xl font-bold text-blue-500"><?php echo e($title); ?></h1>
        <p class="">
            <?php echo e($description); ?>

        </p>
    </div>

    <div class="flex flex-col items-center justify-center w-full m-auto lg:flex-row">
        <div class="flex flex-col justify-center">
            <div class="m-8 border border-gray-200 border-solid bg-sky-100 drop-shadow-xl rounded-xl">
                <ul class="grid grid-cols-1 gap-6 p-12 list-disc">
                    <?php $__currentLoopData = $process; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($proc); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
        <div>
            <div class="m-8">
                <img src=<?php echo e($img); ?> alt=""
                    class="max-w-sm border border-gray-200 drop-shadow-xl broder-solid rounded-xl" />
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Robin\Desktop\School\3rd year 2nd sem\SoftEng\awpap\resources\views/livewire/guideline-card.blade.php ENDPATH**/ ?>