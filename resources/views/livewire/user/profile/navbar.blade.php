@php
    $logout_form_id = uniqid();
@endphp

<div class="h-full">
    <ul class="w-56 h-full menu bg-base-200 rounded-box">
        <li class="menu-title">Profile</li>
        <li><a href="{{ route('profile') }}">Personal Details</a></li>
        {{-- <li><a>Security</a></li> --}}
        <li><a href="{{ route('profile:adoptions') }}">Adoptions</a></li>
        <li><a href="{{ route('profile:volunteers') }}">Volunteer Works</a></li>
        <li><a href="{{ route('profile:programs') }}">Appointments</a></li>
        <li class="mt-auto">
            <form method="POST" action={{ route('logout') }} id="logout-form-{{ $logout_form_id }}">
                @csrf
                <a class="font-bold text-red-500 hover:text-red-700"
                    onclick="document.getElementById('logout-form-{{ $logout_form_id }}').submit()">Logout</a>
            </form>
        </li>
    </ul>
</div>
