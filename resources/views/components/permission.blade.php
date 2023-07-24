@if (Auth::user() && Auth::user()->permissionCan($permission))
    {{ $slot }}
@endif
