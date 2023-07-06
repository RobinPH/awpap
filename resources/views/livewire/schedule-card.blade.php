<tr class="h-12">
    <td>
        <div class="flex">
            <div class="h-7 w-7 mr-2">
                <img class="w-full h-full object-cover rounded-full shadow-md" src="../assets/user.png" alt="">
            </div>
            <h1>{{ $name }}</h1>
        </div>
    </td>
    <td>{{ $program }}</td>
    <td class="flex justify-center">
        <select name="Dates" id="selectDate" class="border-2">
            <option value="In Progress">In Progress</option>
            <option value="Attended">Attended</option>
            <option value="Canceled">Canceled</option>
        </select>
    </td>
</tr>
