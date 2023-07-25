<div>
    <div class="text-center p-10 px-40">
        <h1 class="text-2xl text-blue-500 font-bold"><?php echo e($title); ?></h1>
        <p class="">
            <?php echo e($description); ?>

        </p>
    </div>

    <div class="grid grid-col-1 lg:grid-cols-2">
        <div class="flex flex-col justify-center">
            <div class="bg-sky-100 drop-shadow-xl border border-solid border-gray-200 m-8 rounded-xl">
                <ul class="list-disc p-12 grid grid-cols-1 gap-6">
                    <?php $__currentLoopData = $process; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($proc); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
        <div>
            <div class="m-8">
                <img src=<?php echo e($img); ?> alt=""
                    class="drop-shadow-xl border broder-solid border-gray-200 rounded-xl" />
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Robin\Desktop\School\3rd year 2nd sem\SoftEng\awpap\resources\views/livewire/guideline-card.blade.php ENDPATH**/ ?>