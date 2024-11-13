<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <section class="w-screen mx-auto px-4">
        <nav class="flex flex-wrap p-6 justify-between">
            <div class="flex flex-shrink-0 mr-6">
                <img src="{{ asset('assets/logo.jpg') }}" alt="Logo" class="h-16 w-50 mr-2">
                <p class="text-lg py-3">Programming Tutors</p>
            </div>
            <div class="block lg:hidden py-3">
                <a href="" class="flex item-center px-3 py-2 rounded border border-indigo-400 text-indigo-500 hover:text-indigo-700 hover:border-indigo-700">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                </a>


            </div>
            <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
                <div class="text-sm lg:text-center lg:flex-grow">
                    <a href="#about" class="block mt-4 lg:inline-block lg:mt-0 text-gray-600 hover:text-gray-900 text-lg mr-8">
                    Home
                    </a>
                    <a href="#about" class="block mt-4 lg:inline-block lg:mt-0 text-gray-600 hover:text-gray-900 text-lg mr-8">
                        Courses
                    </a>
                    <a href="#about" class="block mt-4 lg:inline-block lg:mt-0 text-gray-600 hover:text-gray-900 text-lg mr-8">
                        Programming
                    </a>
                    <a href="#about" class="block mt-4 lg:inline-block lg:mt-0 text-gray-600 hover:text-gray-900 text-lg mr-8">
                        About
                    </a>
                    <a href="#about" class="block mt-4 lg:inline-block lg:mt-0 text-gray-600 hover:text-gray-900 text-lg mr-8">
                        Contact
                    </a>
                </div>
                <div>
                    <a href="" class="inline-block text-sm px-4 py-2 rounded text-gray-600 border border-gray-600 hover:border-transparant hover:text-white hover:bg-indigo-700 mt-4 lg:mt-0">Login</a>
                </div>
            </div>
        </nav>
    </section>

    <div class="max-w-md mx-auto my-10 bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold text-center text-gray-800">Register</h2>
        <p class="text-gray-600 text-center mt-2 mb-6">Create your account to get started</p>
        <form action="#" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-gray-700">Name</label>
                <input type="text" class="w-full mt-1 p-2 border border-gray-300 rounded focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" placeholder="Enter your name" required>
            </div>
        <div>
            <label class="block text-gray-700">Email</label>
            <input type="email" class="w-full mt-1 p-2 border border-gray-300 rounded focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" placeholder="Enter your email" required>
        </div>
        <div>
            <label class="block text-gray-700">Password</label>
            <input type="password" class="w-full mt-1 p-2 border border-gray-300 rounded focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" placeholder="Enter your password" required>
        </div>
            <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 transition duration-200">
            Register
        </button>
    </form>
    <p class="text-gray-600 text-center mt-4">Already have an account? <a href="#" class="text-blue-500 hover:underline">Login</a></p>
</div>

</div>
</body>
</html>
