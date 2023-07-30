<ul class="w-56 h-full menu bg-base-200 rounded-box">
    <li>
        <details open>
            <summary>Analytics</summary>
            <ul class="ml-4">
                <li><a href="{{ route('admin:analytics:adoptions') }}">Adoptions</a></li>
                {{-- <li><a href="">Programs</a></li>
                <li><a href="">Volunteers</a></li> --}}
                <li><a href="{{ route('admin:analytics:web-traffic') }}">Web Traffic</a></li>
            </ul>
        </details>
    </li>
    <li>
        <details open>
            <summary>Animals</summary>
            <ul class="ml-4">
                @if (Auth::user()->permissionCan('animal:profile:read'))
                    <li><a href="{{ route('animals:profiles') }}">Profiles</a></li>
                @endif
                @if (Auth::user()->permissionCan('animal:type:read'))
                    <li><a href="{{ route('animals:types') }}">Types</a></li>
                @endif
                @if (Auth::user()->permissionCan('animal:sex:read'))
                    <li><a href="{{ route('animals:sexes') }}">Sexes</a></li>
                @endif
            </ul>
        </details>
    </li>
    @if (Auth::user()->permissionCan('article:read'))
        <li><a href="{{ route('articles') }}">Articles</a></li>
    @endif
    @if (Auth::user()->permissionCan('program:read'))
        <li>
            <details open>
                <summary>Programs</summary>
                <ul class="ml-4">
                    @if (Auth::user()->permissionCan('program-form:read'))
                        <li><a href="{{ route('admin:programs:schedules') }}">Schedules</a></li>
                    @endif
                </ul>
                <ul class="ml-4">
                    @if (Auth::user()->permissionCan('program:read'))
                        <li><a href="{{ route('admin:programs:types') }}">Types</a></li>
                    @endif
                </ul>
            </details>
        </li>
    @endif
    @if (Auth::user()->permissionCan('adoption:read'))
        <li>
            <a href="{{ route('adoptions') }}">Adoptions</a>
        </li>
    @endif
    @if (Auth::user()->permissionCan('user:profile:read'))
        <li><a href="{{ route('admin:users') }}">Users</a></li>
    @endif

    <li class="mt-auto"><a class="font-bold text-red-500 hover:text-red-700" href="{{ route('home') }}">Return to
            Furfecto</a></li>
</ul>
