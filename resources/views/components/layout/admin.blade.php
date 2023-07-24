<x-layout>
    <div class="flex flex-col h-screen">
        <livewire:admin.topbar />
        <div class="flex h-full">
            <div class="">
                <livewire:admin.navbar />
            </div>
            <div class="w-full p-5 overflow-auto">
                {{ $slot }}
            </div>
        </div>
    </div>
</x-layout>
