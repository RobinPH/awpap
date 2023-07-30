<?php
    $is_horizontal = $horizontal ?? false;
    $id = uniqid();
?>

<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.input.wrapper','data' => ['name' => $name ?? null,'label' => $label,'required' => ''.e($required ?? false).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.input.wrapper'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($name ?? null),'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($label),'required' => ''.e($required ?? false).'']); ?>
    <div class="flex flex-wrap <?php echo e($is_horizontal ? 'flex-row gap-6' : 'flex-col gap-1'); ?>" id="<?php echo e($id); ?>">
        <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="flex flex-row items-center gap-2">
                <input type="<?php echo e(isset($multiple) ? 'checkbox' : 'radio'); ?>"
                    <?php echo e(($required ?? false) && !isset($multiple) ? 'required' : ''); ?>

                    <?php if(isset($name)): ?> name="<?php echo e($name); ?>" <?php endif; ?> value="<?php echo e($option['value']); ?>"
                    class="<?php echo e(isset($multiple) ? 'checkbox checkbox-xs' : 'radio radio-xs'); ?>"
                    <?php if(isset($selected)): ?> <?php if(is_array($selected) ? in_array($option['value'], $selected) : $selected == $option['value']): ?>
                            checked <?php endif; ?>
                <?php elseif($loop->first && isset($preselect)): ?> checked <?php endif; ?>
                <?php echo e($disabled ?? false ? 'disabled' : ''); ?> />
                <label>
                    <p><?php echo e(isset($option['label']) ? $option['label'] : $option['value']); ?></p>
                    <?php if(isset($option['description'])): ?>
                        <p class="text-xs italic"><?php echo e($option['description']); ?></p>
                    <?php endif; ?>
                </label>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <?php if(isset($multiple) && isset($required)): ?>
        <script>
            (function() {
                const form = document.getElementById('<?php echo e($id); ?>');
                const checkboxes = form.querySelectorAll('input[type=checkbox]');
                const checkboxLength = checkboxes.length;
                const firstCheckbox = checkboxLength > 0 ? checkboxes[0] : null;

                function init() {
                    if (firstCheckbox) {
                        for (let i = 0; i < checkboxLength; i++) {
                            checkboxes[i].addEventListener('change', checkValidity);
                        }

                        checkValidity();
                    }
                }

                function isChecked() {
                    for (let i = 0; i < checkboxLength; i++) {
                        if (checkboxes[i].checked) return true;
                    }

                    return false;
                }

                function checkValidity() {
                    const errorMessage = !isChecked() ? 'At least one checkbox must be selected.' : '';
                    firstCheckbox.setCustomValidity(errorMessage);
                }

                init();
            })();
        </script>
    <?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Robin\Desktop\School\3rd year 2nd sem\SoftEng\awpap\resources\views/components/forms/input/options.blade.php ENDPATH**/ ?>