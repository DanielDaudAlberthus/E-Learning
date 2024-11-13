<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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

    <section class="w-screen mx-auto">
        <div>
            <p class="my-10 py-10 text-md font-semibold text-center">In look for a programming tutor?</p>
        </div>
        <div class="leading-tight h-447 w-1424 text-center lg:text-8xl md:text-6xl sm:text-4xl">
            <p class="">Start <span class="font-bold underline">learning</span> a new <br>code today <span class="font-bold underline">with the best <br></span> online tutors!</p>
        </div>
    </section>

    <section>
        <div class="grid grid-cols-2">
            <div class="max-w-md mx-auto my-10 bg-white p-20 rounded-lg shadow-lg">
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

            <div class="max-w-md mx-auto my-10 p-8 flex flex-col justify-center">
            <h1 class="text-4xl font-bold text-gray-800 mb-6">Welcome to Our Platform!</h1>

            <div class="space-y-6">
                <!-- Benefit Items -->
                <div class="flex items-start space-x-4">
                    <div class="bg-blue-100 p-2 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800">Easy to Use</h3>
                        <p class="text-gray-600 mt-1">Our platform is designed to be intuitive and user-friendly.</p>
                    </div>
                </div>

                <div class="flex items-start space-x-4">
                    <div class="bg-blue-100 p-2 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800">Secure & Reliable</h3>
                        <p class="text-gray-600 mt-1">Your data is protected with enterprise-grade security.</p>
                    </div>
                </div>

                <div class="flex items-start space-x-4">
                    <div class="bg-blue-100 p-2 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800">Fast Performance</h3>
                        <p class="text-gray-600 mt-1">Lightning-fast response times and optimal performance.</p>
                    </div>
                </div>
            </div>

            <!-- Additional Info -->
            <div class="mt-8 bg-blue-50 p-4 rounded-lg">
                <p class="text-gray-700">Join thousands of satisfied users who have already transformed their experience with our platform!</p>
            </div>
        </div>
    </section>

    <section>
        <div class="grid grid-cols-1">
            <div class="text">

            </div>
        </div>
    </section>

    <footer class="bg-gray-800 text-gray-300 py-10">
    <div class="max-w-6xl mx-auto px-4 md:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
        <!-- Tentang Kami -->
            <div>
                <h2 class="text-lg font-semibold text-white">Tentang Kami</h2>
                <p class="mt-4 text-gray-400">
                Platform e-learning kami menyediakan akses belajar berkualitas dengan berbagai kursus yang dapat diikuti secara online.
                </p>
            </div>

        <!-- Layanan -->
        <div>
            <h2 class="text-lg font-semibold text-white">Quick Links</h2>
            <ul class="mt-4 space-y-2">
                <li><a href="#" class="hover:underline text-gray-400">Home</a></li>
                <li><a href="#" class="hover:underline text-gray-400">Courses</a></li>
                <li><a href="#" class="hover:underline text-gray-400">Programming</a></li>
                <li><a href="#" class="hover:underline text-gray-400">About</a></li>
                <li><a href="#" class="hover:underline text-gray-400">Contact</a></li>
            </ul>
        </div>

    <!-- Kontak -->
    <div>
        <h2 class="text-lg font-semibold text-white">Contact Support</h2>
        <ul class="mt-4 space-y-2">
            <li><p class="text-gray-400">4522210055@univpancasila.ac.id</p></li>
            <li><p class="text-gray-400">+62 812 1277 0778</p></li>
            <li><p class="text-gray-400">Jl. Raya Srengseng Sawah No.1, Jakarta</p></li>
        </ul>
    </div>

    <!-- Sosial Media -->
    <div>
        <h2 class="text-lg font-semibold text-white">Follow Us</h2>
        <div class="flex flex-column mt-4 space-x-4 items-center">
            <ul>
                <li><a href  class="flex items-center text-gray-400 hover:text-white space-x-2"><i class="fab fa-instagram"></i><span>Daniel</span></a></li>
                <li><a href="#" class="flex items-center text-gray-400 hover:text-white space-x-2"><i class="fab fa-instagram"></i><span>Raja</span></a></li>
                <li><a href="#" class="flex items-center text-gray-400 hover:text-white space-x-2"><i class="fab fa-instagram"></i><span>Ale</span></a></li>
            </ul>
        </div>
    </div>
</div>


    <!-- Copyright -->
    <div class="mt-10 text-center text-gray-500">
      &copy; 2024 E-Learning Platform. All rights reserved.
    </div>
</footer>

    {{-- <section class="w-screen mx-auto py-4 bg-indigo-700 h-32">
        <div class="px-16 py-8">
            <h1 class="w-full text-5xl">About Me</h1>
        </div>
    </section> --}}
</body>
</html>
