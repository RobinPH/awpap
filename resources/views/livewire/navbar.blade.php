@php
    $logout_form_id = uniqid();
@endphp

<div class="navbar bg-base-100">
    <div class="navbar-start">
        <div class="dropdown">
            <label tabindex="0" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                </svg>
            </label>
            <ul tabindex="0" class="z-20 p-2 mt-3 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('animal') }}">Animals</a></li>
                <li><a href="{{ route('about-us') }}">About Us</a></li>
                <li><a href="{{ route('program') }}">Programs</a></li>
                <li><a href="{{ route('guideline') }}">Guidelines</a></li>
                <li><a href="{{ route('join-us') }}">Join Us</a></li>
                @auth
                @else
                    <span class="md:hidden">
                        <li></li>
                        <li><a href="{{ route('sign-in') }}">Sign In</a></li>
                        <li><a href="{{ route('sign-up') }}">Sign Up</a></li>
                    </span>
                @endauth
            </ul>
        </div>
        <a class="hidden text-xl text-center normal-case sm:block btn btn-ghost" href="{{ route('home') }}">FURFECTO</a>
    </div>
    <div class="z-10 hidden navbar-center lg:flex">
        <ul class="px-1 menu menu-horizontal">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('animal') }}">Animals</a></li>
            <li><a href="{{ route('about-us') }}">About Us</a></li>
            <li><a href="{{ route('program') }}">Programs</a></li>
            <li><a href="{{ route('guideline') }}">Guidelines</a></li>
            <li><a href="{{ route('join-us') }}">Join Us</a></li>
        </ul>
    </div>
    <div class="navbar-end">
        @auth
            <details class="dropdown dropdown-end">
                <summary class="flex gap-2 m-1 btn">
                    <div class="flex-col items-end hidden normal-case sm:flex">
                        <div>
                            {{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}
                        </div>
                        <div class="text-xs font-normal">
                            {{ Auth::user()->email }}
                        </div>
                    </div>
                    <div class="avatar">
                        <div class="w-8 rounded">
                            <x-image :image='Auth::user()->profilePicture' defaultSrc="./assets/no-profile.png" />
                        </div>
                    </div>
                </summary>
                <ul class="p-2 shadow menu dropdown-content z-[1] bg-base-100 rounded-box w-52">
                    <li><a href="{{ route('profile') }}">Profile</a></li>
                    @if (Auth::user()->permissionCan('admin'))
                        <li></li>
                        <li>
                            <a href="{{ route('admin:analytics:web-traffic') }}">Admin Page</a>
                        </li>
                    @endif
                    <li></li>
                    <li>
                        <form method="POST" action={{ route('logout') }} id="logout-form-{{ $logout_form_id }}">
                            @csrf
                            <a onclick="document.getElementById('logout-form-{{ $logout_form_id }}').submit()">Logout</a>
                        </form>
                    </li>
                </ul>
            </details>
        @else
            <div class="hidden gap-2 md:flex">
                <a class="btn" href="{{ route('sign-in') }}">Sign In</a>
                <a class="btn" href="{{ route('sign-up') }}">Sign Up</a>
            </div>
        @endauth
    </div>

</div>
@if (Session::has('warning'))
    <div class="w-full p-2 text-center bg-yellow-200">
        {{ Session::get('warning') }}
    </div>
@endif
@if (Session::has('error'))
    <div class="w-full p-2 text-center bg-red-400">
        {{ Session::get('error') }}
    </div>
@endif
@if (Session::has('info'))
    <div class="w-full p-2 text-center bg-blue-300">
        {{ Session::get('info') }}
    </div>
@endif
