<tr class="h-12">
    <td>
        <div class="flex">
            <div class="h-7 w-7 mr-2">
                <img class="w-full h-full object-cover rounded-full shadow-md" src="../assets/user.png" alt="">
            </div>
            <h1>{{ $name }}</h1>
        </div>
    </td>
    <td>{{ $pet }}</td>
    <td class="flex justify-center">
        <select name="Dates" id="selectDate" class="border-2">
            <option value="All">All</option>
            <option value="Wait-Listed">Wait-Listed</option>
            <option value="In-Process">In-Process</option>
            <option value="Attended">Attended</option>
            <option value="Cancelled">Cancelled</option>
        </select>
    </td>
</tr>
