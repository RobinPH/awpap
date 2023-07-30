@php
    $permissionsAsOptions = array_map(function ($permission) {
        return [
            'value' => $permission['id'],
            'label' => $permission['name'],
            'description' => $permission['description'],
        ];
    }, $permissions->toArray());
    
    usort($permissionsAsOptions, function ($a, $b) {
        if ($a['label'] == $b['label']) {
            return 0;
        }
        return $a['label'] < $b['label'] ? -1 : 1;
    });
    
    $existing_permissions = array_map(function ($permission) {
        return $permission['id'];
    }, $user->permissions->toArray());
@endphp

<div class="flex flex-col w-full gap-4">
    <input type="text" name="user_id" value="{{ $user->id }}" class="hidden" required />

    <x-forms.input.options name="permission[]" label="Permissions" :options="$permissionsAsOptions" :selected="$existing_permissions" multiple
        required />
</div>
