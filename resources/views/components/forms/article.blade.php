@php
    $id = uniqid();
@endphp

<div class="flex flex-col w-full gap-4">
    @if (isset($article))
        <input type="text" name="id" value="{{ $article->id }}" class="hidden" required />
    @endif

    <div class="w-full form-control">
        <label class="label">
            <span class="label-text">Title</span>
        </label>
        <input type="text" name="title" placeholder="Title" class="w-full input input-bordered"
            @if (isset($article)) value="{{ $article->title }}" @endif required />
    </div>

    <div class="w-full form-control">
        <label class="label">
            <span class="label-text">Author</span>
        </label>
        <input type="text" name="author" placeholder="Author" class="w-full input input-bordered"
            @if (isset($article)) value="{{ $article->author }}" @endif required />
    </div>

    <div class="w-full form-control">
        <label class="label">
            <span class="label-text">Date Published</span>
        </label>
        <input type="date" name="date_published" placeholder="Date Published" class="w-full input input-bordered"
            @if (isset($article)) value="{{ explode(' ', $article->date_published)[0] }}" @endif required>
    </div>

    <div class="w-full form-control">
        <label class="label">
            <span class="label-text">Link</span>
        </label>
        <input type="text" name="link" placeholder="Link" class="w-full input input-bordered"
            @if (isset($article)) value="{{ $article->link }}" @endif required />
    </div>


    <div class="w-full form-control">
        <label class="label">
            <span class="label-text">Description</span>
        </label>
        <textarea class="textarea textarea-bordere" name="description" placeholder="Description">
@if (isset($article))
{{ $article->description }}
@endif
</textarea>
    </div>


    <div class="w-full form-control">
        <x-forms.input.image-upload id="article-thumbnail-preview-{{ $id }}" name="image" :image="isset($article) ? $article->thumbnail : null"
            preview />
    </div>
</div>
