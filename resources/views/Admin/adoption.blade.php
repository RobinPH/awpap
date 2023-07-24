<x-layout.admin>
    <div class="p-5 space-y-3">
        <h1 class="text-2xl font-bold">Adoption</h1>
        <div class="flex justify-center navbar-center bg-stone-300">
            <ul class="px-1 text-lg menu menu-horizontal">
                <li><a href="#">All</a></li>
                <li><a href="#">Wait Listed</a></li>
                <li><a href="#">In Process</a></li>
                <li><a href="#">Attended</a></li>
                <li><a href="#">Cancelled</a></li>
            </ul>
        </div>
        <div>
            <table class="w-full table-auto">
                <thead class="h-12 bg-stone-300">
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
</x-layout.admin>
