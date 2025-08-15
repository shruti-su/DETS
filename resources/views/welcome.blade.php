<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Daily Expense Tracker System</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            transition: background-color 0.3s ease;
        }

        .word {
            display: inline-block;
            opacity: 0;
            transform: translateY(20px);
            animation: slideIn 0.5s forwards;
        }

        .word:nth-child(1) {
            animation-delay: 0.5s;
        }

        .word:nth-child(2) {
            animation-delay: 0.7s;
        }

        .word:nth-child(3) {
            animation-delay: 0.9s;
        }

        .word:nth-child(4) {
            animation-delay: 1.1s;
        }

        .subtitle {
            opacity: 0;
            animation: fadeIn 1s forwards;
            animation-delay: 1.5s;
        }

        @keyframes slideIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
            }
        }

        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        .animate-float {
            animation: float 3s ease-in-out infinite;
        }

        /* Dark mode and light mode transitions */
        .feature-card,
        .how-it-works-card {
            transition: background-color 0.3s, transform 0.5s, box-shadow 0.5s;
        }
    </style>
</head>

<body class="text-gray-900 bg-gray-100 dark:bg-gray-900 dark:text-gray-100">

    <header
        class="sticky top-0 z-50 w-full bg-white border-b border-gray-200 bg-opacity-70 backdrop-blur-lg dark:bg-gray-900 dark:bg-opacity-70 dark:border-gray-700">
        <div class="flex items-center justify-between px-6 py-4 mx-auto max-w-7xl">
            <div class="flex items-center space-x-2">
                <span class="text-xl font-bold text-gray-800 dark:text-gray-100">Daily Expense Tracker System</span>
            </div>
            <nav class="hidden space-x-6 text-sm text-gray-600 md:flex dark:text-gray-300">
                <a href="#features" class="hover:text-gray-900 dark:hover:text-white">Features</a>
                <a href="#how-it-works" class="hover:text-gray-900 dark:hover:text-white">How it Works</a>
                <a href="#faq" class="hover:text-gray-900 dark:hover:text-white">FAQ</a>
                <a href="#contact" class="hover:text-gray-900 dark:hover:text-white">Contact</a>
            </nav>
            <div class="items-center hidden space-x-3 md:flex">
                <a href="{{ route('login') }}">
                    <button
                        class="px-4 py-2 text-sm text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200 dark:bg-gray-700 dark:text-gray-200 dark:hover:bg-gray-600">Sign
                        in</button>
                </a>
                <a href="{{ route('register') }}">
                    <button
                        class="px-4 py-2 text-sm text-white bg-gray-900 rounded-lg hover:bg-gray-800 dark:bg-blue-600 dark:hover:bg-blue-500">Sign
                        up</button>
                </a>
            </div>
            <button id="mobile-menu-btn" class="text-gray-700 md:hidden dark:text-gray-200 focus:outline-none">
                <svg id="hamburger-icon" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
                <svg id="close-icon" class="hidden w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <div id="mobile-menu"
            class="hidden bg-white border-t border-gray-200 md:hidden dark:bg-gray-800 dark:border-gray-700">
            <nav class="flex flex-col p-4 space-y-3 text-gray-600 dark:text-gray-300">
                <a href="#features" class="hover:text-gray-900 dark:hover:text-white">Features</a>
                <a href="#how-it-works" class="hover:text-gray-900 dark:hover:text-white">How it Works</a>
                <a href="#faq" class="hover:text-gray-900 dark:hover:text-white">FAQ</a>
                <a href="#contact" class="hover:text-gray-900 dark:hover:text-white">Contact</a>
                <hr class="border-gray-200 dark:border-gray-700">
                <button
                    class="w-full px-4 py-2 text-sm text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200 dark:bg-gray-700 dark:text-gray-200 dark:hover:bg-gray-600">Sign
                    in</button>
                <button
                    class="w-full px-4 py-2 text-sm text-white bg-gray-900 rounded-lg hover:bg-gray-800 dark:bg-blue-600 dark:hover:bg-blue-500">Sign
                    up</button>
            </nav>
        </div>
    </header>

    <section class="relative " data-aos="fade-up">
        <div class="absolute inset-0 overflow-hidden rounded-3xl">
            <img src="/img/track.jpg" alt="Abstract financial background"
                class="absolute inset-0 object-cover w-full h-full scale-90" style="transform-origin: center;">
            <div
                class="absolute inset-0 bg-gradient-to-br from-gray-100/30 via-gray-300/20 to-gray-100/30 dark:from-gray-900/60 dark:via-gray-800/50 dark:to-gray-900/60 rounded-xl">
            </div>
        </div>

        <div class="relative flex items-center min-h-screen">
            <div class="container px-6 mx-auto">
                <div class="grid grid-cols-1 gap-8 md:grid-cols-2">
                    <div class="py-8 md:py-0">
                        <h1 class="mb-6 text-4xl font-bold text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                            <span class="word">Daily</span>
                            <span class="word">Expense</span>
                            <span class="word">Tracker</span>
                            <span class="word">System</span>
                        </h1>
                        <p class="mt-4 text-lg text-gray-700 dark:text-gray-300 subtitle">
                            Effortlessly manage your daily expenses and gain valuable insights into your spending habits
                            to achieve your financial goals.
                        </p>
                        <a href="/register"
                            class="inline-block px-6 py-3 mt-8 font-semibold text-white transition duration-300 bg-gray-900 rounded-md hover:bg-gray-800 dark:bg-blue-600 dark:hover:bg-blue-500">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        const mobileMenuBtn = document.getElementById("mobile-menu-btn");
        const mobileMenu = document.getElementById("mobile-menu");
        const hamburgerIcon = document.getElementById("hamburger-icon");
        const closeIcon = document.getElementById("close-icon");

        mobileMenuBtn.addEventListener("click", () => {
            mobileMenu.classList.toggle("hidden");
            hamburgerIcon.classList.toggle("hidden");
            closeIcon.classList.toggle("hidden");
        });
    </script>


    <!-- Features Section -->
    <section id="features-wrapper" class="px-6 mt-20 py-28 bg-gray-50 dark:bg-gray-900" data-aos="fade-up">
        <!-- The main card has a larger padding class, from p-10 to p-12 -->
        <div class="max-w-6xl p-12 mx-auto bg-gray-200 shadow-2xl dark:bg-gray-800 rounded-3xl">

            <h3 class="mb-12 text-3xl font-bold text-center text-gray-800 dark:text-gray-100">
                Key Features
            </h3>

            <div class="grid grid-cols-1 gap-8 md:grid-cols-3">

                <!-- Feature Card 1 -->
                <div
                    class="p-6 overflow-hidden transition duration-500 transform bg-white shadow-md feature-card rounded-xl hover:scale-105 hover:shadow-lg dark:bg-gray-800 dark:hover:bg-gray-700">
                    <div class="mb-4 text-purple-600 dark:text-purple-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 12h-4l-3 9L9 3l-3 9H2" />
                        </svg>
                    </div>
                    <h4 class="mb-2 text-xl font-semibold text-gray-900 dark:text-gray-100">Easy Expense Logging</h4>
                    <p class="text-gray-700 dark:text-gray-300">
                        Quickly add expenses with categories and notes to keep track of your spending.
                    </p>
                </div>

                <!-- Feature Card 2 -->
                <div
                    class="p-6 overflow-hidden transition duration-500 transform bg-white shadow-md feature-card rounded-xl hover:scale-105 hover:shadow-lg dark:bg-gray-800 dark:hover:bg-gray-700">
                    <div class="mb-4 text-purple-600 dark:text-purple-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2">
                            </rect>
                            <line x1="16" y1="2" x2="16" y2="6"></line>
                            <line x1="8" y1="2" x2="8" y2="6"></line>
                            <line x1="3" y1="10" x2="21" y2="10"></line>
                        </svg>
                    </div>
                    <h4 class="mb-2 text-xl font-semibold text-gray-900 dark:text-gray-100">Daily, Weekly & Monthly
                        Reports</h4>
                    <p class="text-gray-700 dark:text-gray-300">
                        View spending patterns over time and make informed financial decisions.
                    </p>
                </div>

                <!-- Feature Card 3 -->
                <div
                    class="p-6 overflow-hidden transition duration-500 transform bg-white shadow-md feature-card rounded-xl hover:scale-105 hover:shadow-lg dark:bg-gray-800 dark:hover:bg-gray-700">
                    <div class="mb-4 text-purple-600 dark:text-purple-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 20v-6M6 20v-2M18 20v-4M4 12v8M20 8v12M12 4v8M6 8v4M18 4v4" />
                        </svg>
                    </div>
                    <h4 class="mb-2 text-xl font-semibold text-gray-900 dark:text-gray-100">Visual Analytics</h4>
                    <p class="text-gray-700 dark:text-gray-300">
                        See pie charts, bar graphs, and trend lines showing exactly where your money goes.
                    </p>
                </div>

                <!-- Feature Card 4 -->
                <div
                    class="p-6 overflow-hidden transition duration-500 transform bg-white shadow-md feature-card rounded-xl hover:scale-105 hover:shadow-lg dark:bg-gray-800 dark:hover:bg-gray-700">
                    <div class="mb-4 text-purple-600 dark:text-purple-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="7" width="20" height="15" rx="2" ry="2">
                            </rect>
                            <path d="M17 12a5 5 0 0 1-10 0"></path>
                        </svg>
                    </div>
                    <h4 class="mb-2 text-xl font-semibold text-gray-900 dark:text-gray-100">Category Management</h4>
                    <p class="text-gray-700 dark:text-gray-300">
                        Create and manage custom categories like Food, Travel, Shopping, and more.
                    </p>
                </div>

                <!-- Feature Card 5 -->
                <div
                    class="p-6 overflow-hidden transition duration-500 transform bg-white shadow-md feature-card rounded-xl hover:scale-105 hover:shadow-lg dark:bg-gray-800 dark:hover:bg-gray-700">
                    <div class="mb-4 text-purple-600 dark:text-purple-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M10 20h4V4h-4v16zm-6 0h4V8H4v12zm12 0h4v-8h-4v8z"></path>
                        </svg>
                    </div>
                    <h4 class="mb-2 text-xl font-semibold text-gray-900 dark:text-gray-100">Smart Reminders</h4>
                    <p class="text-gray-700 dark:text-gray-300">
                        Get daily notifications so you never forget to log your expenses.
                    </p>
                </div>

                <!-- Feature Card 6 -->
                <div
                    class="p-6 overflow-hidden transition duration-500 transform bg-white shadow-md feature-card rounded-xl hover:scale-105 hover:shadow-lg dark:bg-gray-800 dark:hover:bg-gray-700">
                    <div class="mb-4 text-purple-600 dark:text-purple-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm0 14a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-6a2 2 0 1 0 0 4 2 2 0 0 0 0-4z">
                            </path>
                        </svg>
                    </div>
                    <h4 class="mb-2 text-xl font-semibold text-gray-900 dark:text-gray-100">Budget Tracking</h4>
                    <p class="text-gray-700 dark:text-gray-300">
                        Set budgets for categories and get alerts when you're close to your limits.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section id="how-it-works" class="py-20 bg-white dark:bg-gray-900" data-aos="fade-up">
        <div class="max-w-6xl p-12 mx-auto bg-gray-200 shadow-2xl dark:bg-gray-800 rounded-3xl ">
            <!-- Section Heading -->
            <h2 class="mb-16 text-4xl font-extrabold leading-tight text-center dark:text-white">
                How It Works
            </h2>

            <!-- Steps Grid Container -->
            <div class="grid gap-10 md:grid-cols-2 lg:grid-cols-4">

                <!-- Step 1: Create an Account -->
                <div
                    class="flex flex-col items-center p-8 text-center transition-all duration-300 ease-in-out bg-white shadow-lg dark:bg-gray-800 rounded-2xl hover:scale-105 hover:shadow-lg dark:hover:bg-gray-700 animate-float">
                    <!-- Icon for Create an Account -->
                    <div class="p-4 mb-6 bg-purple-100 rounded-full dark:bg-purple-900">
                        <svg class="w-8 h-8 text-purple-600 dark:text-purple-300" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="mb-2 text-2xl font-bold dark:text-white">Create an Account</h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        Sign up in minutes to get access to all our powerful features.
                    </p>
                </div>

                <!-- Step 2: Add your items -->
                <div class="flex flex-col items-center p-8 text-center transition-all duration-300 ease-in-out bg-white shadow-lg dark:bg-gray-800 rounded-2xl hover:scale-105 hover:shadow-lg dark:hover:bg-gray-700 animate-float"
                    style="animation-delay: 0.2s;">
                    <!-- Icon for Add your items (plus sign in a circle) -->
                    <div class="p-4 mb-6 bg-teal-100 rounded-full dark:bg-teal-900">
                        <svg class="w-8 h-8 text-teal-600 dark:text-teal-300" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 9v3m0 0v3m0-3h3m-3 0h-3m-2 2a9 9 0 1118 0 9 9 0 01-18 0z"></path>
                        </svg>
                    </div>
                    <h3 class="mb-2 text-2xl font-bold dark:text-white">Add your items</h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        Easily add and categorize your expenses or items in a structured way.
                    </p>
                </div>

                <!-- Step 3: View in real-time -->
                <div class="flex flex-col items-center p-8 text-center transition-all duration-300 ease-in-out bg-white shadow-lg dark:bg-gray-800 rounded-2xl hover:scale-105 hover:shadow-lg dark:hover:bg-gray-700 animate-float"
                    style="animation-delay: 0.4s;">
                    <!-- Icon for View in real-time (eye) -->
                    <div class="p-4 mb-6 bg-blue-100 rounded-full dark:bg-blue-900">
                        <svg class="w-8 h-8 text-blue-600 dark:text-blue-300" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="mb-2 text-2xl font-bold dark:text-white">View in real-time</h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        Track your progress with a dynamic dashboard that updates instantly.
                    </p>
                </div>

                <!-- Step 4: Export or manage -->
                <div class="flex flex-col items-center p-8 text-center transition-all duration-300 ease-in-out bg-white shadow-lg dark:bg-gray-800 rounded-2xl hover:scale-105 hover:shadow-lg dark:hover:bg-gray-700 animate-float"
                    style="animation-delay: 0.6s;">
                    <!-- Icon for Export or manage (file with an arrow) -->
                    <div class="p-4 mb-6 bg-orange-100 rounded-full dark:bg-orange-900">
                        <svg class="w-8 h-8 text-orange-600 dark:text-orange-300" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4">
                            </path>
                        </svg>
                    </div>
                    <h3 class="mb-2 text-2xl font-bold dark:text-white">Export or manage</h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        Export your data to a CSV or PDF file, or manage it directly in the app.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <style>
        /* Custom styles for the star rating to give it a nice color */
        .star-rating svg {
            color: #f6ad55;
        }

        /* Hide the scrollbar for the carousel container */
        .carousel-container::-webkit-scrollbar {
            display: none;
        }

        .carousel-container {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }
    </style>

    <section class="px-4 py-16 mx-auto max-w-7xl" data-aos="fade-up">
        <h2 class="mb-12 text-3xl font-bold text-center text-gray-800 dark:text-white">
            Success Stories from Learners
        </h2>

        <div class="relative overflow-hidden">
            <!-- Testimonials Carousel Container -->
            <div id="carousel" class="flex transition-transform duration-500 ease-in-out carousel-container">

                <!-- Testimonial Card 1 -->
                <div class="flex-shrink-0 w-full px-4 md:w-1/2 lg:w-1/3">
                    <div class="h-full p-8 bg-white shadow-lg dark:bg-gray-800 rounded-3xl">
                        <div class="flex items-center justify-between mb-6">
                            <!-- Quote Icon -->
                            <svg class="w-10 h-10" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <g fill="none">
                                    <path
                                        d="M24 0v24H0V0h24ZM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018Zm.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01l-.184-.092Z" />
                                    <path
                                        d="M8.4 6.2a1 1 0 0 1 1.2 1.6c-1.564 1.173-2.46 2.314-2.973 3.31A3.5 3.5 0 1 1 4 14.558a7.565 7.565 0 0 1 .508-3.614C5.105 9.438 6.272 7.796 8.4 6.2Zm9 0a1 1 0 0 1 1.2 1.6c-1.564 1.173-2.46 2.314-2.973 3.31A3.5 3.5 0 1 1 13 14.558a7.565 7.565 0 0 1 .508-3.614c.598-1.506 1.764-3.148 3.892-4.744Z"
                                        fill="currentColor" />
                                </g>
                            </svg>
                        </div>
                        <!-- Star Rating -->
                        <div class="flex mb-2 star-rating">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.95a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.36 2.44a1 1 0 00-.364 1.118l1.286 3.95c.3.921-.755 1.688-1.54 1.118l-3.36-2.44a1 1 0 00-1.176 0l-3.36 2.44c-.785.57-1.84-.197-1.54-1.118l1.286-3.95a1 1 0 00-.364-1.118L2.91 8.377c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.95z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.95a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.36 2.44a1 1 0 00-.364 1.118l1.286 3.95c.3.921-.755 1.688-1.54 1.118l-3.36-2.44a1 1 0 00-1.176 0l-3.36 2.44c-.785.57-1.84-.197-1.54-1.118l1.286-3.95a1 1 0 00-.364-1.118L2.91 8.377c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.95z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.95a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.36 2.44a1 1 0 00-.364 1.118l1.286 3.95c.3.921-.755 1.688-1.54 1.118l-3.36-2.44a1 1 0 00-1.176 0l-3.36 2.44c-.785.57-1.84-.197-1.54-1.118l1.286-3.95a1 1 0 00-.364-1.118L2.91 8.377c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.95z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.95a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.36 2.44a1 1 0 00-.364 1.118l1.286 3.95c.3.921-.755 1.688-1.54 1.118l-3.36-2.44a1 1 0 00-1.176 0l-3.36 2.44c-.785.57-1.84-.197-1.54-1.118l1.286-3.95a1 1 0 00-.364-1.118L2.91 8.377c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.95z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.95a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.36 2.44a1 1 0 00-.364 1.118l1.286 3.95c.3.921-.755 1.688-1.54 1.118l-3.36-2.44a1 1 0 00-1.176 0l-3.36 2.44c-.785.57-1.84-.197-1.54-1.118l1.286-3.95a1 1 0 00-.364-1.118L2.91 8.377c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.95z">
                                </path>
                            </svg>
                        </div>
                        <!-- Testimonial Text -->
                        <p class="mb-6 text-gray-700 dark:text-gray-300">
                            "I was hesitant at first, but signing up for this course was the best decision I've made
                            this year. The instructors are knowledgeable, and the support team is always there to help."
                        </p>
                        <!-- Author Info -->
                        <div class="pt-8">
                            <h4 class="font-semibold text-purple-600 dark:text-purple-400">Michael Rodriguez</h4>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Data Analyst, Batch 03</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial Card 2 -->
                <div class="flex-shrink-0 w-full px-4 md:w-1/2 lg:w-1/3">
                    <div class="h-full p-8 bg-white shadow-lg dark:bg-gray-800 rounded-3xl">
                        <div class="flex items-center justify-between mb-6">
                            <svg class="w-10 h-10" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <g fill="none">
                                    <path
                                        d="M24 0v24H0V0h24ZM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018Zm.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01l-.184-.092Z" />
                                    <path
                                        d="M8.4 6.2a1 1 0 0 1 1.2 1.6c-1.564 1.173-2.46 2.314-2.973 3.31A3.5 3.5 0 1 1 4 14.558a7.565 7.565 0 0 1 .508-3.614C5.105 9.438 6.272 7.796 8.4 6.2Zm9 0a1 1 0 0 1 1.2 1.6c-1.564 1.173-2.46 2.314-2.973 3.31A3.5 3.5 0 1 1 13 14.558a7.565 7.565 0 0 1 .508-3.614c.598-1.506 1.764-3.148 3.892-4.744Z"
                                        fill="currentColor" />
                                </g>
                            </svg>
                        </div>
                        <div class="flex mb-4 star-rating">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.95a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.36 2.44a1 1 0 00-.364 1.118l1.286 3.95c.3.921-.755 1.688-1.54 1.118l-3.36-2.44a1 1 0 00-1.176 0l-3.36 2.44c-.785.57-1.84-.197-1.54-1.118l1.286-3.95a1 1 0 00-.364-1.118L2.91 8.377c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.95z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.95a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.36 2.44a1 1 0 00-.364 1.118l1.286 3.95c.3.921-.755 1.688-1.54 1.118l-3.36-2.44a1 1 0 00-1.176 0l-3.36 2.44c-.785.57-1.84-.197-1.54-1.118l1.286-3.95a1 1 0 00-.364-1.118L2.91 8.377c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.95z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.95a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.36 2.44a1 1 0 00-.364 1.118l1.286 3.95c.3.921-.755 1.688-1.54 1.118l-3.36-2.44a1 1 0 00-1.176 0l-3.36 2.44c-.785.57-1.84-.197-1.54-1.118l1.286-3.95a1 1 0 00-.364-1.118L2.91 8.377c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.95z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.95a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.36 2.44a1 1 0 00-.364 1.118l1.286 3.95c.3.921-.755 1.688-1.54 1.118l-3.36-2.44a1 1 0 00-1.176 0l-3.36 2.44c-.785.57-1.84-.197-1.54-1.118l1.286-3.95a1 1 0 00-.364-1.118L2.91 8.377c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.95z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.95a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.36 2.44a1 1 0 00-.364 1.118l1.286 3.95c.3.921-.755 1.688-1.54 1.118l-3.36-2.44a1 1 0 00-1.176 0l-3.36 2.44c-.785.57-1.84-.197-1.54-1.118l1.286-3.95a1 1 0 00-.364-1.118L2.91 8.377c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.95z">
                                </path>
                            </svg>
                        </div>
                        <p class="mb-6 text-gray-700 dark:text-gray-300">
                            "As someone who's taken online courses before, I can say this was by far the most
                            well-organized and practical course I've ever attended. The real-life examples were
                            extremely helpful."
                        </p>
                        <div class="pt-8">
                            <h4 class="font-semibold text-purple-600 dark:text-purple-400">Arnold Pitt</h4>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Business Studies, Batch 10</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial Card 3 -->
                <div class="flex-shrink-0 w-full px-4 md:w-1/2 lg:w-1/3">
                    <div class="h-full p-8 bg-white shadow-lg dark:bg-gray-800 rounded-3xl">
                        <div class="flex items-center justify-between mb-6">
                            <svg class="w-10 h-10" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <g fill="none">
                                    <path
                                        d="M24 0v24H0V0h24ZM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018Zm.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01l-.184-.092Z" />
                                    <path
                                        d="M8.4 6.2a1 1 0 0 1 1.2 1.6c-1.564 1.173-2.46 2.314-2.973 3.31A3.5 3.5 0 1 1 4 14.558a7.565 7.565 0 0 1 .508-3.614C5.105 9.438 6.272 7.796 8.4 6.2Zm9 0a1 1 0 0 1 1.2 1.6c-1.564 1.173-2.46 2.314-2.973 3.31A3.5 3.5 0 1 1 13 14.558a7.565 7.565 0 0 1 .508-3.614c.598-1.506 1.764-3.148 3.892-4.744Z"
                                        fill="currentColor" />
                                </g>
                            </svg>
                        </div>
                        <div class="flex mb-4 star-rating">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.95a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.36 2.44a1 1 0 00-.364 1.118l1.286 3.95c.3.921-.755 1.688-1.54 1.118l-3.36-2.44a1 1 0 00-1.176 0l-3.36 2.44c-.785.57-1.84-.197-1.54-1.118l1.286-3.95a1 1 0 00-.364-1.118L2.91 8.377c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.95z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.95a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.36 2.44a1 1 0 00-.364 1.118l1.286 3.95c.3.921-.755 1.688-1.54 1.118l-3.36-2.44a1 1 0 00-1.176 0l-3.36 2.44c-.785.57-1.84-.197-1.54-1.118l1.286-3.95a1 1 0 00-.364-1.118L2.91 8.377c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.95z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.95a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.36 2.44a1 1 0 00-.364 1.118l1.286 3.95c.3.921-.755 1.688-1.54 1.118l-3.36-2.44a1 1 0 00-1.176 0l-3.36 2.44c-.785.57-1.84-.197-1.54-1.118l1.286-3.95a1 1 0 00-.364-1.118L2.91 8.377c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.95z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.95a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.36 2.44a1 1 0 00-.364 1.118l1.286 3.95c.3.921-.755 1.688-1.54 1.118l-3.36-2.44a1 1 0 00-1.176 0l-3.36 2.44c-.785.57-1.84-.197-1.54-1.118l1.286-3.95a1 1 0 00-.364-1.118L2.91 8.377c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.95z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.95a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.36 2.44a1 1 0 00-.364 1.118l1.286 3.95c.3.921-.755 1.688-1.54 1.118l-3.36-2.44a1 1 0 00-1.176 0l-3.36 2.44c-.785.57-1.84-.197-1.54-1.118l1.286-3.95a1 1 0 00-.364-1.118L2.91 8.377c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.95z">
                                </path>
                            </svg>
                        </div>
                        <p class="mb-6 text-gray-700 dark:text-gray-300">
                            "Zentura has completely transformed the way I learn. The flexible schedule allowed me to
                            study whenever I had time, and the course content was so well-structured that I never felt
                            lost."
                        </p>
                        <div class="pt-8">
                            <h4 class="font-semibold text-purple-600 dark:text-purple-400">Hillery nClinton</h4>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Programming, Batch 05</p>
                        </div>
                    </div>
                </div>

                <!-- New Testimonial Card 4 -->
                <div class="flex-shrink-0 w-full px-4 md:w-1/2 lg:w-1/3">
                    <div class="h-full p-8 bg-white shadow-lg dark:bg-gray-800 rounded-3xl">
                        <div class="flex items-center justify-between mb-6">
                            <svg class="w-10 h-10" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <g fill="none">
                                    <path
                                        d="M24 0v24H0V0h24ZM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018Zm.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01l-.184-.092Z" />
                                    <path
                                        d="M8.4 6.2a1 1 0 0 1 1.2 1.6c-1.564 1.173-2.46 2.314-2.973 3.31A3.5 3.5 0 1 1 4 14.558a7.565 7.565 0 0 1 .508-3.614C5.105 9.438 6.272 7.796 8.4 6.2Zm9 0a1 1 0 0 1 1.2 1.6c-1.564 1.173-2.46 2.314-2.973 3.31A3.5 3.5 0 1 1 13 14.558a7.565 7.565 0 0 1 .508-3.614c.598-1.506 1.764-3.148 3.892-4.744Z"
                                        fill="currentColor" />
                                </g>
                            </svg>
                        </div>
                        <div class="flex mb-4 star-rating">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.95a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.36 2.44a1 1 0 00-.364 1.118l1.286 3.95c.3.921-.755 1.688-1.54 1.118l-3.36-2.44a1 1 0 00-1.176 0l-3.36 2.44c-.785.57-1.84-.197-1.54-1.118l1.286-3.95a1 1 0 00-.364-1.118L2.91 8.377c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.95z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.95a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.36 2.44a1 1 0 00-.364 1.118l1.286 3.95c.3.921-.755 1.688-1.54 1.118l-3.36-2.44a1 1 0 00-1.176 0l-3.36 2.44c-.785.57-1.84-.197-1.54-1.118l1.286-3.95a1 1 0 00-.364-1.118L2.91 8.377c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.95z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.95a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.36 2.44a1 1 0 00-.364 1.118l1.286 3.95c.3.921-.755 1.688-1.54 1.118l-3.36-2.44a1 1 0 00-1.176 0l-3.36 2.44c-.785.57-1.84-.197-1.54-1.118l1.286-3.95a1 1 0 00-.364-1.118L2.91 8.377c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.95z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.95a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.36 2.44a1 1 0 00-.364 1.118l1.286 3.95c.3.921-.755 1.688-1.54 1.118l-3.36-2.44a1 1 0 00-1.176 0l-3.36 2.44c-.785.57-1.84-.197-1.54-1.118l1.286-3.95a1 1 0 00-.364-1.118L2.91 8.377c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.95z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.95a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.36 2.44a1 1 0 00-.364 1.118l1.286 3.95c.3.921-.755 1.688-1.54 1.118l-3.36-2.44a1 1 0 00-1.176 0l-3.36 2.44c-.785.57-1.84-.197-1.54-1.118l1.286-3.95a1 1 0 00-.364-1.118L2.91 8.377c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.95z">
                                </path>
                            </svg>
                        </div>
                        <p class="mb-6 text-gray-700 dark:text-gray-300">
                            "The community and collaborative projects were a highlight. I not only learned the material
                            but also built a network with my peers."
                        </p>
                        <div class="pt-8">
                            <h4 class="font-semibold text-purple-600 dark:text-purple-400">Sarah Johnson</h4>
                            <p class="text-sm text-gray-500 dark:text-gray-400">UI/UX Designer, Batch 07</p>
                        </div>
                    </div>
                </div>

                <!-- New Testimonial Card 5 -->
                <div class="flex-shrink-0 w-full px-4 md:w-1/2 lg:w-1/3">
                    <div class="h-full p-8 bg-white shadow-lg dark:bg-gray-800 rounded-3xl">
                        <div class="flex items-center justify-between mb-6">
                            <svg class="w-10 h-10" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <g fill="none">
                                    <path
                                        d="M24 0v24H0V0h24ZM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018Zm.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01l-.184-.092Z" />
                                    <path
                                        d="M8.4 6.2a1 1 0 0 1 1.2 1.6c-1.564 1.173-2.46 2.314-2.973 3.31A3.5 3.5 0 1 1 4 14.558a7.565 7.565 0 0 1 .508-3.614C5.105 9.438 6.272 7.796 8.4 6.2Zm9 0a1 1 0 0 1 1.2 1.6c-1.564 1.173-2.46 2.314-2.973 3.31A3.5 3.5 0 1 1 13 14.558a7.565 7.565 0 0 1 .508-3.614c.598-1.506 1.764-3.148 3.892-4.744Z"
                                        fill="currentColor" />
                                </g>
                            </svg>
                        </div>
                        <div class="flex mb-4 star-rating">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.95a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.36 2.44a1 1 0 00-.364 1.118l1.286 3.95c.3.921-.755 1.688-1.54 1.118l-3.36-2.44a1 1 0 00-1.176 0l-3.36 2.44c-.785.57-1.84-.197-1.54-1.118l1.286-3.95a1 1 0 00-.364-1.118L2.91 8.377c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.95z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.95a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.36 2.44a1 1 0 00-.364 1.118l1.286 3.95c.3.921-.755 1.688-1.54 1.118l-3.36-2.44a1 1 0 00-1.176 0l-3.36 2.44c-.785.57-1.84-.197-1.54-1.118l1.286-3.95a1 1 0 00-.364-1.118L2.91 8.377c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.95z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.95a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.36 2.44a1 1 0 00-.364 1.118l1.286 3.95c.3.921-.755 1.688-1.54 1.118l-3.36-2.44a1 1 0 00-1.176 0l-3.36 2.44c-.785.57-1.84-.197-1.54-1.118l1.286-3.95a1 1 0 00-.364-1.118L2.91 8.377c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.95z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.95a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.36 2.44a1 1 0 00-.364 1.118l1.286 3.95c.3.921-.755 1.688-1.54 1.118l-3.36-2.44a1 1 0 00-1.176 0l-3.36 2.44c-.785.57-1.84-.197-1.54-1.118l1.286-3.95a1 1 0 00-.364-1.118L2.91 8.377c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.95z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.95a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.36 2.44a1 1 0 00-.364 1.118l1.286 3.95c.3.921-.755 1.688-1.54 1.118l-3.36-2.44a1 1 0 00-1.176 0l-3.36 2.44c-.785.57-1.84-.197-1.54-1.118l1.286-3.95a1 1 0 00-.364-1.118L2.91 8.377c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.95z">
                                </path>
                            </svg>
                        </div>
                        <p class="mb-6 text-gray-700 dark:text-gray-300">
                            "The instructors were very supportive and provided personalized feedback that helped me
                            improve my skills significantly. I highly recommend this platform."
                        </p>
                        <div class="pt-8">
                            <h4 class="font-semibold text-purple-600 dark:text-purple-400">David Lee</h4>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Project Manager, Batch 02</p>
                        </div>
                    </div>
                </div>

                <!-- New Testimonial Card 6 -->
                <div class="flex-shrink-0 w-full px-4 md:w-1/2 lg:w-1/3">
                    <div class="h-full p-8 bg-white shadow-lg dark:bg-gray-800 rounded-3xl">
                        <div class="flex items-center justify-between mb-6">
                            <svg class="w-10 h-10" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <g fill="none">
                                    <path
                                        d="M24 0v24H0V0h24ZM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018Zm.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01l-.184-.092Z" />
                                    <path
                                        d="M8.4 6.2a1 1 0 0 1 1.2 1.6c-1.564 1.173-2.46 2.314-2.973 3.31A3.5 3.5 0 1 1 4 14.558a7.565 7.565 0 0 1 .508-3.614C5.105 9.438 6.272 7.796 8.4 6.2Zm9 0a1 1 0 0 1 1.2 1.6c-1.564 1.173-2.46 2.314-2.973 3.31A3.5 3.5 0 1 1 13 14.558a7.565 7.565 0 0 1 .508-3.614c.598-1.506 1.764-3.148 3.892-4.744Z"
                                        fill="currentColor" />
                                </g>
                            </svg>
                        </div>
                        <div class="flex mb-4 star-rating">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.95a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.36 2.44a1 1 0 00-.364 1.118l1.286 3.95c.3.921-.755 1.688-1.54 1.118l-3.36-2.44a1 1 0 00-1.176 0l-3.36 2.44c-.785.57-1.84-.197-1.54-1.118l1.286-3.95a1 1 0 00-.364-1.118L2.91 8.377c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.95z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.95a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.36 2.44a1 1 0 00-.364 1.118l1.286 3.95c.3.921-.755 1.688-1.54 1.118l-3.36-2.44a1 1 0 00-1.176 0l-3.36 2.44c-.785.57-1.84-.197-1.54-1.118l1.286-3.95a1 1 0 00-.364-1.118L2.91 8.377c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.95z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.95a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.36 2.44a1 1 0 00-.364 1.118l1.286 3.95c.3.921-.755 1.688-1.54 1.118l-3.36-2.44a1 1 0 00-1.176 0l-3.36 2.44c-.785.57-1.84-.197-1.54-1.118l1.286-3.95a1 1 0 00-.364-1.118L2.91 8.377c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.95z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.95a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.36 2.44a1 1 0 00-.364 1.118l1.286 3.95c.3.921-.755 1.688-1.54 1.118l-3.36-2.44a1 1 0 00-1.176 0l-3.36 2.44c-.785.57-1.84-.197-1.54-1.118l1.286-3.95a1 1 0 00-.364-1.118L2.91 8.377c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.95z">
                                </path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.95a1 1 0 00.95.69h4.15c.969 0 1.371 1.24.588 1.81l-3.36 2.44a1 1 0 00-.364 1.118l1.286 3.95c.3.921-.755 1.688-1.54 1.118l-3.36-2.44a1 1 0 00-1.176 0l-3.36 2.44c-.785.57-1.84-.197-1.54-1.118l1.286-3.95a1 1 0 00-.364-1.118L2.91 8.377c-.783-.57-.38-1.81.588-1.81h4.15a1 1 0 00.95-.69l1.286-3.95z">
                                </path>
                            </svg>
                        </div>
                        <p class="mb-6 text-gray-700 dark:text-gray-300">
                            "I've gained so much confidence and new skills from this course. The content is top-notch
                            and the community is incredibly supportive."
                        </p>
                        <div class="pt-8">
                            <h4 class="font-semibold text-purple-600 dark:text-purple-400">Emily White</h4>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Software Engineer, Batch 09</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Navigation Buttons -->
            <div class="absolute inset-y-0 left-0 flex items-center">
                <button id="prev-btn" aria-label="Previous Slide"
                    class="p-3 text-purple-600 transition-colors transform bg-white rounded-full shadow-lg hover:bg-gray-200 focus:outline-none focus:ring-4 focus:ring-purple-300 hover:scale-105">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                        </path>
                    </svg>
                </button>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center">
                <button id="next-btn" aria-label="Next Slide"
                    class="p-3 text-purple-600 transition-colors transform bg-white rounded-full shadow-lg hover:bg-gray-200 focus:outline-none focus:ring-4 focus:ring-purple-300 hover:scale-105">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                        </path>
                    </svg>
                </button>
            </div>

            <!-- Navigation Dots -->
            <div id="dots" class="flex items-center justify-center mt-8 space-x-2"></div>
        </div>
    </section>

    <script>
        const carousel = document.getElementById('carousel');
        const dotsContainer = document.getElementById('dots');
        const slides = Array.from(carousel.children);
        let index = 0;

        // ✅ Filter only real testimonial slides
        const testimonialSlides = slides.filter(slide => {
            // A testimonial has some visible text or an image
            return slide.textContent.trim() !== "" || slide.querySelector('img, blockquote, p, h3, h4');
        });

        // Clear any old dots
        dotsContainer.innerHTML = "";

        // ✅ Create one dot per testimonial
        testimonialSlides.forEach((_, i) => {
            const dot = document.createElement('button');
            dot.className = 'w-3 h-3 rounded-full bg-gray-400 transition-all duration-300';
            dot.addEventListener('click', () => showSlide(i));
            dotsContainer.appendChild(dot);
        });

        function updateDots() {
            [...dotsContainer.children].forEach((dot, i) => {
                dot.className =
                    `w-3 h-3 rounded-full transition-all duration-300 ${i === index ? 'bg-purple-600 scale-125' : 'bg-gray-400'}`;
            });
        }

        function showSlide(i) {
            index = (i + testimonialSlides.length) % testimonialSlides.length;
            carousel.style.transform = `translateX(-${index * 100}%)`;
            updateDots();
        }

        function autoSlide() {
            showSlide(index + 1);
        }

        // Arrow controls
        document.getElementById('prev-btn').addEventListener('click', () => showSlide(index - 1));
        document.getElementById('next-btn').addEventListener('click', () => showSlide(index + 1));

        // Init
        updateDots();
        setInterval(autoSlide, 4000);
    </script>
    <!-- FAQ Section -->
    <style>
        /* Custom CSS to handle the accordion arrow rotation */
        details[open] .arrow {
            transform: rotate(45deg);
        }

        details summary::-webkit-details-marker {
            display: none;
        }
    </style>
    <section id="faq" class="py-20 bg-gray-100 dark:bg-gray-800" data-aos="fade-up">
        <div class="container px-4 mx-auto">
            <!-- Section Header -->
            <div class="mb-12 text-center">
                <h2 class="mb-2 text-4xl font-extrabold text-gray-800 dark:text-gray-100">Frequently Asked
                    Questions
                </h2>
                <p class="text-lg text-gray-600 dark:text-gray-400">Got questions? We've got answers to help you
                    feel
                    confident using our expense tracker.</p>
            </div>

            <!-- FAQ Grid -->
            <div class="grid gap-6 md:grid-cols-2">

                <!-- FAQ Item 1 -->
                <details
                    class="p-6 transition-shadow bg-white shadow-lg group dark:bg-gray-900 rounded-xl hover:shadow-xl">
                    <summary
                        class="flex items-center justify-between text-xl font-semibold text-gray-800 list-none cursor-pointer dark:text-gray-100">
                        How do I track my daily expenses?
                        <div
                            class="flex-shrink-0 w-6 h-6 text-gray-400 transition-transform duration-200 transform arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                        </div>
                    </summary>
                    <div class="pt-4 text-gray-600 dark:text-gray-300">
                        <p>Simply navigate to the 'Add Expense' section in the app. You can enter the amount, select
                            a
                            category, add a description, and even attach a photo of the receipt. Your expenses will
                            be
                            saved instantly.</p>
                    </div>
                </details>

                <!-- FAQ Item 2 -->
                <details
                    class="p-6 transition-shadow bg-white shadow-lg group dark:bg-gray-900 rounded-xl hover:shadow-xl">
                    <summary
                        class="flex items-center justify-between text-xl font-semibold text-gray-800 list-none cursor-pointer dark:text-gray-100">
                        Can I create multiple budgets?
                        <div
                            class="flex-shrink-0 w-6 h-6 text-gray-400 transition-transform duration-200 transform arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                        </div>
                    </summary>
                    <div class="pt-4 text-gray-600 dark:text-gray-300">
                        <p>Yes, our system allows you to create as many budgets as you need. You can set specific
                            budgets for different categories like groceries, transportation, or entertainment and
                            receive alerts when you're close to your spending limit.</p>
                    </div>
                </details>

                <!-- FAQ Item 3 -->
                <details
                    class="p-6 transition-shadow bg-white shadow-lg group dark:bg-gray-900 rounded-xl hover:shadow-xl">
                    <summary
                        class="flex items-center justify-between text-xl font-semibold text-gray-800 list-none cursor-pointer dark:text-gray-100">
                        Is my financial data secure?
                        <div
                            class="flex-shrink-0 w-6 h-6 text-gray-400 transition-transform duration-200 transform arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                        </div>
                    </summary>
                    <div class="pt-4 text-gray-600 dark:text-gray-300">
                        <p>We use industry-standard encryption and security protocols to ensure that all your
                            financial
                            data is stored securely. We do not share your personal information with any third
                            parties.
                        </p>
                    </div>
                </details>

                <!-- FAQ Item 4 -->
                <details
                    class="p-6 transition-shadow bg-white shadow-lg group dark:bg-gray-900 rounded-xl hover:shadow-xl">
                    <summary
                        class="flex items-center justify-between text-xl font-semibold text-gray-800 list-none cursor-pointer dark:text-gray-100">
                        What kind of payment methods are supported?
                        <div
                            class="flex-shrink-0 w-6 h-6 text-gray-400 transition-transform duration-200 transform arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                        </div>
                    </summary>
                    <div class="pt-4 text-gray-600 dark:text-gray-300">
                        <p>Our app can track expenses from various sources, including cash, credit cards, debit
                            cards,
                            bank transfers, and digital wallets. You can easily tag each expense with the
                            corresponding
                            payment method.</p>
                    </div>
                </details>

                <!-- FAQ Item 5 -->
                <details
                    class="p-6 transition-shadow bg-white shadow-lg group dark:bg-gray-900 rounded-xl hover:shadow-xl">
                    <summary
                        class="flex items-center justify-between text-xl font-semibold text-gray-800 list-none cursor-pointer dark:text-gray-100">
                        Can I export my expense data?
                        <div
                            class="flex-shrink-0 w-6 h-6 text-gray-400 transition-transform duration-200 transform arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                        </div>
                    </summary>
                    <div class="pt-4 text-gray-600 dark:text-gray-300">
                        <p>Yes, you can easily export your data in several formats, including CSV and PDF. This
                            feature
                            is perfect for tax season or for detailed analysis of your spending habits.</p>
                    </div>
                </details>

                <!-- FAQ Item 6 -->
                <details
                    class="p-6 transition-shadow bg-white shadow-lg group dark:bg-gray-900 rounded-xl hover:shadow-xl">
                    <summary
                        class="flex items-center justify-between text-xl font-semibold text-gray-800 list-none cursor-pointer dark:text-gray-100">
                        Is there a mobile app available?
                        <div
                            class="flex-shrink-0 w-6 h-6 text-gray-400 transition-transform duration-200 transform arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                        </div>
                    </summary>
                    <div class="pt-4 text-gray-600 dark:text-gray-300">
                        <p>We are currently working on a dedicated mobile application for both iOS and Android. In
                            the
                            meantime, our web app is fully responsive and works great on all mobile devices.</p>
                    </div>
                </details>

            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="py-20 bg-white dark:bg-gray-900" data-aos="fade-up">
        <div class="container mx-auto text-center">
            <h3 class="mb-8 text-3xl font-bold">Contact Us</h3>
            <form class="max-w-lg mx-auto space-y-4">
                <input type="text" placeholder="Your Name"
                    class="w-full px-4 py-2 border rounded dark:border-gray-700 dark:bg-gray-900">
                <input type="email" placeholder="Your Email"
                    class="w-full px-4 py-2 border rounded dark:border-gray-700 dark:bg-gray-900">
                <textarea placeholder="Your Message" class="w-full px-4 py-2 border rounded dark:border-gray-700 dark:bg-gray-900"></textarea>
                <button
                    class="px-6 py-2 text-white bg-blue-600 rounded hover:bg-blue-700 dark:bg-blue-500 dark:hover:bg-blue-600">
                    Send
                </button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-6 bg-gray-100 dark:bg-gray-800">
        <div class="container mx-auto text-center">
            <p class="text-gray-600 dark:text-gray-400">&copy; 2025 Finance Tracker. All rights reserved.</p>
        </div>
    </footer>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000, // animation duration
            once: true, // animate only once
            easing: 'ease-in-out',
        });
    </script>
</body>

</html>
