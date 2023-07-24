<x-layout.admin>
    <div class="p-5">
        <h1 class="text-2xl font-bold">Users</h1>
        <div class="grid grid-cols-1 gap-5 ">
            @for ($i = 0; $i < 3; $i++)
                <livewire:users-card name="Aaron M. Ancanan" username="aaron14" email="aaron@gmail.com" type="Admin">
            @endfor
        </div>
    </div>
</x-layout.admin>
