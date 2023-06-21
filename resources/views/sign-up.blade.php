<x-layout>
    <div class="grid grid-cols-2">
        <div class="p-8 justify-items-center">
            <div class="bg-white p-8 rounded-xl drop-shadow-xl">
                <h1 class="text-center text-3xl font-bold pb-8 text-blue-950">Sign Up</h1>

                <div class="grid grid-cols-1 gap-6">
                    <input type="text" placeholder="First Name" class="w-full bg-gray-200 rounded-full p-3">
                    <input type="text" placeholder="First Name" class="w-full bg-gray-200 rounded-full p-3">
                    <input type="text" placeholder="First Name" class="w-full bg-gray-200 rounded-full p-3">
                    <input type="text" placeholder="First Name" class="w-full bg-gray-200 rounded-full p-3">
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

                <p class="text-center py-2">Already have an Account? <a href=""
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

        <div class="hidden lg:block">
            <img src="/assets/signIn.png" alt="" class="h-full">
        </div>
    </div>
</x-layout>
