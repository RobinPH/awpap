<x-layout>
    <div class="flex flex-col">
        <div class="h-fit">
            <livewire:navbar />
        </div>
        <div class="h-full">
            {{ $slot }}
        </div>
        <div class="h-fit">
            <livewire:footer />
        </div>
    </div>
</x-layout>
