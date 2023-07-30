<div class="flex px-6 py-12 text-white bg-black sm:px-12 md:px-24 lg:px-48">
    <img src="{{ url('./assets/logowhite.png') }}" class="hidden w-36 h-36 md:block" />
    <div class="flex flex-wrap justify-between w-full lg:no-wrap">
        <div class="flex flex-col gap-2 p-3">
            <div class="font-bold">Reach Us</div>
            <div class="flex flex-col gap-2 text-sm">
                <div class="flex items-center gap-1">
                    <ion-icon name="call"></ion-icon><span>0960 529 8078</span>
                </div>
                <div class="flex items-center gap-1">
                    <ion-icon name="mail"></ion-icon><span><a
                            href="mailto:contactus@furfecto.com">contactus@furfecto.com</a></span>
                </div>
                <div class="flex items-center gap-1">
                    <ion-icon name="location"></ion-icon><span>25 Juan Luna St, Bayambang,
                        Pangasinan</span>
                </div>
            </div>
        </div>
        <div class="flex flex-col gap-2 p-3">
            <div class="font-bold">Furfecto</div>
            <div class="flex flex-col gap-2 text-sm">
                <a href="{{ route('animal') }}">Animals</a>
                <a href="{{ route('about-us') }}">About Us</a>
                <a href="{{ route('join-us') }}">Join Us</a>
            </div>
        </div>
        <div class="flex flex-col gap-2 p-3">
            <div class="font-bold">Quick Links</div>
            <div class="flex flex-col gap-2 text-sm">
                <a href="{{ route('program') }}">Programs</a>
                <a href="{{ route('guideline') }}">Guidelines</a>
                <a href="{{ route('sign-up') }}">Sign Up</a>
            </div>
        </div>
    </div>
</div>
