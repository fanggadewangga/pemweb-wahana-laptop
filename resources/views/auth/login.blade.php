<!DOCTYPE html>
<html lang="en">

<head>
    @vite('resources/css/app.css')
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
</head>

<body>
    <div class="h-screen w-screen flex flex-row justify-between">

        <!-- Login section start -->
        <div class="h-full w-1/3 flex flex-col ml-8">

            <!-- Store name start -->
            <div class="w-full flex flex-row items-start justify-start mt-8">

                <h1 class="font-medium flex items-center text-2xl ml-6 mt-4 text-purple-900 mr-6 drop-shadow-2xl justify-start">
                    Wahana
                    <span class="font-extrabold">laptop</span>
                </h1>
            </div>
            <!-- Store name end -->


            <!-- Login text start -->
            <h1 class="w-full font-bold text-center mt-24 text-2xl">
                Log In
            </h1>
            <p class="w-full font-normal text-center text-lg py-4 text-gray-500">
                Sign in to stay connected.
            </p>
            <!-- Login text end -->


            <!-- Form login start -->
            <form action="{{ url('/login') }}" method="POST" class="w-full mx-auto mt-6">
                @csrf
                <!-- Email fields start -->
                <div class="w-full px-20 flex flex-col justify-center">
                    <h3 class="text-base font-medium text-gray-400 mb-2">
                        Email
                    </h3>
                    <input type="text" name="email" class="border border-purple-800 rounded-lg py-2 px-4 focus:outline-none focus:border-purple-700" placeholder="Enter email" value="{{ old('email') }}">
                    @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Email fields end -->

                <!-- Password fields start -->
                <div class="w-full px-20 mt-4 flex flex-col justify-center">
                    <h3 class="text-base font-medium text-gray-400 mb-2">
                        Password
                    </h3>
                    <input type="password" name="password" class="border border-purple-800 rounded-lg py-2 px-4 focus:outline-none focus:border-purple-700" placeholder="Enter password">
                    @error('password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Password fields end -->

                <!-- Button login start -->
                <div class="w-full flex mt-4 justify-center">
                    <button type="submit" class="px-16 py-1.5 bg-purple-900 te-c items-center text-xl text-white rounded-full font-semibold">
                        Login
                    </button>
                </div>
                <!-- Button login end -->
            </form>
            <!-- Form login end -->


            <!-- Text start -->
            <div class="w-full flex mt-4 justify-center">
                <p>
                    Don’t have an account?
                    <a href="{{ url('/register') }}" class="text-purple-700">Click here to sign up</a>
                </p>
            </div>
            <!-- Text end -->
        </div>
        <!-- Login section end -->

        <!-- Login side start -->
        <div class="h-full w-7/12">
            <img class="object-cover h-full w-full" src="{{url('/assets/bg_login.png')}}" alt="Back" />
        </div>
        <!-- Login side end -->
    </div>

</body>

</html>