<x-layout.user>
    <div class="flex h-full">
        <div class="h-full">
            <livewire:user.profile.navbar />
        </div>
        <div class="w-full p-8">
            {{ $slot }}
        </div>
    </div>
</x-layout.user>
