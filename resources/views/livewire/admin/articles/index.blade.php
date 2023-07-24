<div>
    <div class="navbar bg-slate-300">
        <div class="flex-1">
            <div class="form-control">
                <input wire:model.debounce.150ms="search" type="search" placeholder="Search"
                    class="w-24 input input-bordered md:w-auto" />
            </div>
        </div>
        <div class="flex-none gap-2">
            <label for="create_article_modal" class="btn btn-success">Add</label>
        </div>
    </div>

    <input type="checkbox" id="create_article_modal" class="modal-toggle" />
    <div class="modal">
        <div class="modal-box">
            <form method="POST" action={{ route('article:create') }} enctype="multipart/form-data">
                @csrf
                <h1>
                    <b>Create Article</b>
                </h1>
                <div class="py-4">
                    @include('components.forms.article')
                </div>
                <button class="w-full btn btn-success" type="submit">Create Article</button>
            </form>
        </div>
        <label class="modal-backdrop" for="create_article_modal">Close</label>
    </div>

    <div wire:loading.delay class="w-full">
        <div class="flex flex-col items-center justify-center w-full m-auto">
            <p>Loading Animal Types</p>
            <span class="loading loading-dots loading-lg"></span>
        </div>
    </div>

    <div wire:loading.delay.remove class="flex flex-col gap-4 mt-4">
        @foreach ($articles as $article)
            <div :wire:key="$article->id">
                @include($card, ['article' => $article, 'keyword' => $search])
            </div>
        @endforeach
    </div>
</div>
