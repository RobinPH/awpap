<x-layout>
    <div class="p-5">
        <h1 class="font-bold text-2xl">Users</h1>
        <div class="grid grid-cols-1 gap-5 ">
            @for ($i = 0; $i < 3; $i++)
                <livewire:users-card name="Aaron M. Ancanan" username="aaron14" email="aaron@gmail.com" type="Admin">
            @endfor
        </div>
    </div>
</x-layout>
