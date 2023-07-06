<x-layout>
    <div class="p-5">
        <h1 class="font-bold text-2xl">Articles</h1>
        <div class="grid grid-cols-1 gap-5 ">
            @foreach ($articles as $article)
                <livewire:articles-dashboard-card :article="$article"/>
            @endforeach
        </div>
    </div>
</x-layout>
