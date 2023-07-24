<?php
    $id = uniqid();
?>

<div class="flex flex-col w-full gap-4">
    <?php if(isset($article)): ?>
        <input type="text" name="id" value="<?php echo e($article->id); ?>" class="hidden" required />
    <?php endif; ?>

    <div class="w-full form-control">
        <label class="label">
            <span class="label-text">Title</span>
        </label>
        <input type="text" name="title" placeholder="Title" class="w-full input input-bordered"
            <?php if(isset($article)): ?> value="<?php echo e($article->title); ?>" <?php endif; ?> required />
    </div>

    <div class="w-full form-control">
        <label class="label">
            <span class="label-text">Author</span>
        </label>
        <input type="text" name="author" placeholder="Author" class="w-full input input-bordered"
            <?php if(isset($article)): ?> value="<?php echo e($article->author); ?>" <?php endif; ?> required />
    </div>

    <div class="w-full form-control">
        <label class="label">
            <span class="label-text">Date Published</span>
        </label>
        <input type="date" name="date_published" placeholder="Date Published" class="w-full input input-bordered"
            <?php if(isset($article)): ?> value="<?php echo e(explode(' ', $article->date_published)[0]); ?>" <?php endif; ?> required>
    </div>

    <div class="w-full form-control">
        <label class="label">
            <span class="label-text">Link</span>
        </label>
        <input type="text" name="link" placeholder="Link" class="w-full input input-bordered"
            <?php if(isset($article)): ?> value="<?php echo e($article->link); ?>" <?php endif; ?> required />
    </div>


    <div class="w-full form-control">
        <label class="label">
            <span class="label-text">Description</span>
        </label>
        <textarea class="textarea textarea-bordere" name="description" placeholder="Description">
<?php if(isset($article)): ?>
<?php echo e($article->description); ?>

<?php endif; ?>
</textarea>
    </div>


    <div class="w-full form-control">
        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.inputs.image-upload','data' => ['id' => 'article-thumbnail-preview-'.e($id).'','name' => 'image','image' => isset($article) ? $article->thumbnail : null]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.inputs.image-upload'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'article-thumbnail-preview-'.e($id).'','name' => 'image','image' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(isset($article) ? $article->thumbnail : null)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
    </div>
</div>
<?php /**PATH C:\Users\Robin\Desktop\School\3rd year 2nd sem\SoftEng\awpap\resources\views/components/forms/article.blade.php ENDPATH**/ ?>