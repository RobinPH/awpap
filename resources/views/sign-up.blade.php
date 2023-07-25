<x-layout.user>
    <div class="grid grid-cols-1 lg:grid-cols-11">
        <div class="col-span-5 p-8 justify-items-center">
            <div class="p-8 bg-white rounded-xl drop-shadow-xl">
                <h1 class="pb-8 text-3xl font-bold text-center text-blue-950">Sign Up</h1>

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="grid grid-cols-1 gap-6">
                        <input type="text" placeholder="First Name" name="first_name"
                            class="w-full p-3 bg-gray-200 rounded-full" />
                        <input type="text" placeholder="Last Name" name="last_name"
                            class="w-full p-3 bg-gray-200 rounded-full" />
                        <input type="email" placeholder="Email" name="email"
                            class="w-full p-3 bg-gray-200 rounded-full" />
                        <input type="password" placeholder="Password" name="password"
                            class="w-full p-3 bg-gray-200 rounded-full" />
                        <input type="password" placeholder="Retype Password" name="password_confirmation"
                            class="w-full p-3 bg-gray-200 rounded-full" />
                    </div>


                    <div class="flex items-center justify-center pt-4">
                        <button type="submit"
                            class="w-full font-bold text-white hover:bg-gray-800 bg-blue-950 rounded-full text-sm px-5 py-2.5 mr-2 mb-2 ">
                            Sign Up
                        </button>
                    </div>
                </form>

                <p class="py-2 text-center">Already have an Account? <a href="/sign-in"
                        class="underline underline-offset-1">Sign In</a></p>

                <p class="py-4 text-center">or</p>

                <div>
                    <div class="flex items-center justify-center pt-4">
                        <button type="button"
                            class="w-full font-bold  border border-slate-950 hover:bg-slate-800 hover:text-white  rounded-full text-sm px-5 py-2.5 mr-2 mb-2 ">
                            Continue with Facebook
                        </button>
                    </div>

                    <div class="flex items-center justify-center pt-4">
                        <button type="button"
                            class="w-full font-bold border border-slate-950 hover:bg-slate-800 hover:text-white rounded-full text-sm px-5 py-2.5 mr-2 mb-2 ">
                            Continue with Google
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="hidden col-span-6 bg-blue-200 lg:block">
            <img src="./assets/signup.png" alt="" class="h-full">
        </div>

    </div>
</x-layout.user>
