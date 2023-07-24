<ul class="w-56 h-full menu bg-base-200 rounded-box">
    <li><a>Dashboard</a></li>
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
    <li><a>Programs</a></li>
    <li><a>Adoptions</a></li>
    <li><a>Users</a></li>

    <li class="mt-auto"><a class="font-bold text-red-500 hover:text-red-700">Logout</a></li>
</ul>
