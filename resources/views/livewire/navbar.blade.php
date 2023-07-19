<div class="navbar bg-base-100">
    <div class="navbar-start">
        <div class="dropdown">
            <label tabindex="0" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                </svg>
            </label>
            <ul tabindex="0" class="p-2 mt-3 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
                <li><a href="/">Home</a></li>
                <li><a href="/animal">Animals</a></li>
                <li><a href="/about-us">About Us</a></li>
                <li><a href="/program">Programs</a></li>
                <li><a href="/guideline">Guidelines</a></li>
                <li><a href="/join-us">Join Us</a></li>
            </ul>
        </div>
        <a class="text-xl normal-case btn btn-ghost">FURFECTO</a>
    </div>
    <div class="hidden navbar-center lg:flex">
        <ul class="px-1 menu menu-horizontal">
            <li><a href="/">Home</a></li>
            <li><a href="/animal">Animals</a></li>
            <li><a href="/about-us">About Us</a></li>
            <li><a href="/program">Programs</a></li>
            <li><a href="/guideline">Guidelines</a></li>
            <li><a href="/join-us">Join Us</a></li>
        </ul>
    </div>
    <div class="navbar-end">
        @auth
            <div className="dropdown dropdown-end">
                <label tabIndex={0} className="btn btn-ghost btn-circle avatar">
                    <div className="w-10 rounded-full">
                        <img src="/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                    </div>
                </label>
                <ul tabIndex={0}
                    className="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                    <li>
                        <a className="justify-between">
                            Profile
                            <span className="badge">New</span>
                        </a>
                    </li>
                    <li><a>Settings</a></li>
                    <li><a>Logout</a></li>
                </ul>
            </div>
        @else
            <a class="btn" href="/sign-up">Sign Up</a>
        @endauth
    </div>

</div>
