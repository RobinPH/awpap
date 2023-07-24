<div class="flex flex-row items-center w-auto rounded-sm shadow-md h-44 bg-stone-300">
    <div class="w-40 h-40 ml-2 min-w-fit">
        <x-image class="object-cover w-40 h-40" :image='$article->thumbnail' defaultSrc="./assets/dog1.jpg" />
    </div>
    <div class="items-start ml-3">
        <p class="">
            <b>
                <x-highlight-text :keyword="$keyword">
                    {{ $article->title }}
                </x-highlight-text>
            </b>
        </p>
        <p class="">
            <x-highlight-text :keyword="$keyword">
                {{ $article->author }}
            </x-highlight-text>
        </p>
        <p class="">
            {{ date('M j, Y', strtotime($article->date_published)) }}
        </p>
        <p class="">
            <x-highlight-text :keyword="$keyword">
                {{-- {{ $article->description }} --}}
            </x-highlight-text>
        </p>
        <a class="" href="{{ $article->link }}">
            <x-highlight-text :keyword="$keyword">
                {{ $article->link }}
            </x-highlight-text>
        </a>
    </div>
    <div class="ml-auto mr-5">
        <label for="edit_article_modal/{{ $article->id }}" class="btn btn-success">
            <b>Update</b>
        </label>
    </div>

    <input type="checkbox" id="edit_article_modal/{{ $article->id }}" class="modal-toggle" />
    <div class="modal">
        <div class="modal-box">
            <form method="POST" action={{ route('article:edit') }} enctype="multipart/form-data"
                wire:key="edit_article_modal_form">
                @csrf
                <h1>
                    <b>Edit Article</b>
                </h1>
                <div class="py-4">
                    <x-forms.article :article="$article" />
                </div>
                <button class="w-full btn btn-success" type="submit">Edit Article</button>
            </form>
        </div>
        <label class="modal-backdrop" for="edit_article_modal/{{ $article->id }}">Close</label>
    </div>
</div>
