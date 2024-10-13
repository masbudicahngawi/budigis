<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BudiGIS::Login Page</title>
    <link rel="stylesheet" href="{{ asset('assets/mystyles.css') }}">
</head>

<body>
    <!-- component -->
    <div class="bg-sky-100 flex justify-center items-center h-screen">
        <!-- Left: Image -->
        <div class="w-1/2 h-screen hidden lg:block">
            <img src="{{ asset('images/bg.jpg') }}" alt="Placeholder Image"
                class="object-cover w-full h-full">
        </div>
        <!-- Right: Login Form -->
        <div class= "lg:p-36 md:p-52 sm:20 p-8 pt-2 w-full lg:w-1/2">
            <h1 class="text-4xl text-blue-400xl font-semibold mb-4 text-center">BudiGIS</h1>
            <form method="post" action="{{ route('proses-login') }}">
                @csrf
                <!-- Username Input -->
                <div class="mb-4" "bg-sky-100">
                    <label for="name" class="block text-gray-600">Username</label>
                    <input type="text" id="name" name="name"
                        class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500"
                        autocomplete="off">
                </div>
                <!-- Password Input -->
                <div class="mb-4">
                    <label for="password" class="block text-gray-800">Password</label>
                    <input type="password" id="password" name="password"
                        class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500"
                        autocomplete="off">
                </div>
                <!-- Login Button -->
                <button type="submit"
                    class="bg-red-500 hover:bg-blue-600 text-white font-semibold rounded-md py-2 px-4 w-full">Login</button>
            </form>
            
        </div>
    </div>
</body>

</html>
