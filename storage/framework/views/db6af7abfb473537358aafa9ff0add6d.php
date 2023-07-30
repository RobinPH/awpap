<?php
    $logout_form_id = uniqid();
?>

<div class="h-full">
    <ul class="w-56 h-full menu bg-base-200 rounded-box">
        <li class="menu-title">Profile</li>
        <li><a href="<?php echo e(route('profile')); ?>">Personal Details</a></li>
        
        <li><a href="<?php echo e(route('profile:adoptions')); ?>">Adoptions</a></li>
        <li><a href="<?php echo e(route('profile:volunteers')); ?>">Volunteer Works</a></li>
        <li><a href="<?php echo e(route('profile:programs')); ?>">Appointments</a></li>
        <li class="mt-auto">
            <form method="POST" action=<?php echo e(route('logout')); ?> id="logout-form-<?php echo e($logout_form_id); ?>">
                <?php echo csrf_field(); ?>
                <a class="font-bold text-red-500 hover:text-red-700"
                    onclick="document.getElementById('logout-form-<?php echo e($logout_form_id); ?>').submit()">Logout</a>
            </form>
        </li>
    </ul>
</div>
<?php /**PATH C:\Users\Robin\Desktop\School\3rd year 2nd sem\SoftEng\awpap\resources\views/livewire/user/profile/navbar.blade.php ENDPATH**/ ?>