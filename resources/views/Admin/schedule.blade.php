<x-layout.admin>
    <div class="p-5 space-y-3">
        <div class="flex">
            <h1 class="text-2xl font-bold">Schedule</h1>
            <select name="Dates" id="selectDate" class="ml-auto mr-0 border-2 border-black rounded-md"
                onchange="selectedDate()">
                <option selected value="Date">Date</option>
                <option value="July 6, 2023">July 6, 2023</option>
                <option value="July 7, 2023">July 7, 2023</option>
            </select>
        </div>
        <div class="flex items-center justify-center w-auto h-10 bg-stone-300">
            <h1 id="scheduledDate" class="text-xl font-bold">Date</h1>
        </div>
        <div>
            <table class="w-full table-auto">
                <thead class="h-12 bg-stone-300">
                    <tr>
                        <th class="text-left">Name</th>
                        <th class="text-left">Schedule</th>
                        <th class="text-center">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < 4; $i++)
                        <livewire:schedule-card name="sample" program="Kapon" status="Attended">
                    @endfor
                </tbody>
            </table>
        </div>
    </div>

    <script>
        function selectedDate() {
            const selectDate = document.getElementById("selectDate").value;

            document.getElementById("scheduledDate").textContent = selectDate;
        }
    </script>
</x-layout.admin>
