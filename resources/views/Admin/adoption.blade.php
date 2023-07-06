<x-layout>
    <div class="p-5 space-y-3">
        <h1 class="font-bold text-2xl">Adoption</h1>
        <div class=" navbar-center flex bg-stone-300 justify-center">
            <ul class="px-1 menu menu-horizontal text-lg">
                <li><a href="#">All</a></li>
                <li><a href="#">Wait Listed</a></li>
                <li><a href="#">In Process</a></li>
                <li><a href="#">Attended</a></li>
                <li><a href="#">Cancelled</a></li>
            </ul>
        </div>
        <div>
            <table class="w-full table-auto">
                <thead class="bg-stone-300 h-12">
                    <tr>
                        <th class="text-left">Adopter</th>
                        <th class="text-left">Applicant</th>
                        <th class="text-center">Status</th>
                    </tr>
                </thead>
                <tbody class="space-y-3">
                    @for ($i = 0; $i < 3; $i++)
                        <livewire:adoption-card name="Stephen" pet="Haru">
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
