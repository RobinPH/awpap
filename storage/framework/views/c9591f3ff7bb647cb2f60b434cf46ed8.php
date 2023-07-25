<?php
    $logout_form_id = uniqid();
?>

<div class="navbar bg-base-100">
    <div class="navbar-start">
        <div class="dropdown">
            <label tabindex="0" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                </svg>
            </label>
            <ul tabindex="0" class="p-2 mt-3 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
                <li><a href="/">Home</a></li>
                <li><a href="<?php echo e(route('animal')); ?>">Animals</a></li>
                <li><a href="<?php echo e(route('about-us')); ?>">About Us</a></li>
                <li><a href="<?php echo e(route('program')); ?>">Programs</a></li>
                <li><a href="<?php echo e(route('guideline')); ?>">Guidelines</a></li>
                <li><a href="<?php echo e(route('join-us')); ?>">Join Us</a></li>
            </ul>
        </div>
        <a class="text-xl normal-case btn btn-ghost">FURFECTO</a>
    </div>
    <div class="hidden navbar-center lg:flex">
        <ul class="px-1 menu menu-horizontal">
            <li><a href="/">Home</a></li>
            <li><a href="<?php echo e(route('animal')); ?>">Animals</a></li>
            <li><a href="<?php echo e(route('about-us')); ?>">About Us</a></li>
            <li><a href="<?php echo e(route('program')); ?>">Programs</a></li>
            <li><a href="<?php echo e(route('guideline')); ?>">Guidelines</a></li>
            <li><a href="<?php echo e(route('join-us')); ?>">Join Us</a></li>
        </ul>
    </div>
    <div class="navbar-end">
        <?php if(auth()->guard()->check()): ?>
            <details class="dropdown dropdown-end">
                <summary class="flex gap-2 m-1 btn">
                    <div class="flex flex-col items-end normal-case">
                        <div>
                            <?php echo e(Auth::user()->first_name . ' ' . Auth::user()->last_name); ?>

                        </div>
                        <div class="text-xs font-normal">
                            <?php echo e(Auth::user()->email); ?>

                        </div>
                    </div>
                    <div class="avatar">
                        <div class="w-8 rounded">
                            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.image','data' => ['image' => Auth::user()->profilePicture,'defaultSrc' => './assets/no-profile.png']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('image'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['image' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(Auth::user()->profilePicture),'defaultSrc' => './assets/no-profile.png']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                        </div>
                    </div>
                </summary>
                <ul class="p-2 shadow menu dropdown-content z-[1] bg-base-100 rounded-box w-52">
                    <li><a href="<?php echo e(route('profile')); ?>">Profile</a></li>
                    <li></li>
                    <li>
                        <form method="POST" action=<?php echo e(route('logout')); ?> id="logout-form-<?php echo e($logout_form_id); ?>">
                            <?php echo csrf_field(); ?>
                            <a onclick="document.getElementById('logout-form-<?php echo e($logout_form_id); ?>').submit()">Logout</a>
                        </form>
                    </li>
                </ul>
            </details>
        <?php else: ?>
            <div class="flex gap-2">
                <a class="btn" href="/sign-in">Sign In</a>
                <a class="btn" href="/sign-up">Sign Up</a>
            </div>
        <?php endif; ?>
    </div>

</div>
<?php if(Session::has('message')): ?>
    <div class="w-full p-2 text-center bg-yellow-200">
        <?php echo e(Session::get('message')); ?>

    </div>
<?php endif; ?>
<?php /**PATH C:\Users\Robin\Desktop\School\3rd year 2nd sem\SoftEng\awpap\resources\views/livewire/navbar.blade.php ENDPATH**/ ?>