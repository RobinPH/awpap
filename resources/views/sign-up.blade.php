<x-layout>
    <div class="grid grid-cols-1 lg:grid-cols-11">
        <div class="col-span-5 p-8 justify-items-center">
            <div class="bg-white p-8 rounded-xl drop-shadow-xl">
                <h1 class="text-center text-3xl font-bold pb-8 text-blue-950">Sign Up</h1>

                <div class="grid grid-cols-1 gap-6">
                    <input type="text" placeholder="First Name" class="w-full bg-gray-200 rounded-full p-3" />
                    <input type="text" placeholder="Last Name" class="w-full bg-gray-200 rounded-full p-3" />
                    <input type="text" placeholder="Address" class="w-full bg-gray-200 rounded-full p-3" />
                    <input type="text" placeholder="Phone Number" class="w-full bg-gray-200 rounded-full p-3" />
                    <div>
                        <p class="text-sm pl-3 py-2">Birth Date</p>
                        <input type="date" class="w-full bg-gray-200 rounded-full p-3" />
                    </div>
                    <div>
                        <label for="status" class="text-sm pl-3 py-2">Status</label>
                        <div class="px-5">
                            <input type="radio" id="html" name="status" value="single" />
                            <label for="single">Single</label><br />
                            <input type="radio" id="html" name="status" value="married" />
                            <label for="married">Married</label><br />
                            <input type="radio" id="html" name="status" value="others" />
                            <label for="others">Others</label><br />
                        </div>
                    </div>
                </div>

                <div class="py-6 ">
                    <input type="checkbox" id="remember" name="remember" value="remember">
                    <label for="remember">Remember Password</label><br>
                </div>

                <div class="pt-4 flex justify-center items-center">
                    <button type="button"
                        class="w-full font-bold text-white hover:bg-gray-800 bg-blue-950 rounded-full text-sm px-5 py-2.5 mr-2 mb-2 ">
                        Sign Up
                    </button>
                </div>

                <p class="text-center py-2">Already have an Account? <a href="/sign-in"
                        class="underline underline-offset-1">Sign In</a></p>

                <p class="text-center py-4">or</p>

                <div>
                    <div class="pt-4 flex justify-center items-center">
                        <button type="button"
                            class="w-full font-bold  border border-slate-950 hover:bg-slate-800 hover:text-white  rounded-full text-sm px-5 py-2.5 mr-2 mb-2 ">
                            Continue with Facebook
                        </button>
                    </div>

                    <div class="pt-4 flex justify-center items-center">
                        <button type="button"
                            class="w-full font-bold border border-slate-950 hover:bg-slate-800 hover:text-white rounded-full text-sm px-5 py-2.5 mr-2 mb-2 ">
                            Continue with Google
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-blue-200 col-span-6 hidden lg:block">
            <img src="./assets/signup.png" alt="" class="h-full">
        </div>

    </div>
</x-layout>
