<x-layout.user>
    <div class="flex">
        <div>
            <livewire:user.profile.navbar />
        </div>
        <div class="w-full">
            {{ $slot }}
        </div>
    </div>
</x-layout.user>
