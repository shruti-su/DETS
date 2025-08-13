<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Daily Expense Tracker System</title>
    <!-- Load Tailwind CSS from CDN for styling -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="text-gray-900 bg-white dark:bg-gray-900 dark:text-gray-100">

    <!-- Navbar -->
    <header
        class="fixed top-0 left-0 z-50 w-full bg-white border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
        <div class="flex items-center justify-between px-6 py-4 mx-auto max-w-7xl">
            <!-- Logo -->
            <div class="flex items-center space-x-2">
                <span class="text-lg font-semibold text-gray-800 dark:text-gray-100">
                    Daily Expense Tracker System
                </span>
            </div>

            <!-- Navigation Links (Desktop Only) -->
            <nav class="hidden space-x-6 text-sm text-gray-600 md:flex dark:text-gray-300">
                <a href="#features" class="hover:text-gray-900 dark:hover:text-white">Features</a>
                <a href="#how-it-works" class="hover:text-gray-900 dark:hover:text-white">How it Works</a>
                <a href="#faq" class="hover:text-gray-900 dark:hover:text-white">FAQ</a>
                <a href="#contact" class="hover:text-gray-900 dark:hover:text-white">Contact</a>
            </nav>

            <!-- Buttons (Desktop Only) -->
            <div class="items-center hidden space-x-3 md:flex">
                <a href="/login">
                    <button
                        class="px-4 py-2 text-sm text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200 dark:bg-gray-700 dark:text-gray-200 dark:hover:bg-gray-600">Sign
                        in</button>
                </a>
                <a href="/register">
                    <button
                        class="px-4 py-2 text-sm text-white bg-gray-900 rounded-lg hover:bg-gray-800 dark:bg-blue-600 dark:hover:bg-blue-500">Sign
                        up</button>
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-btn" class="text-gray-700 md:hidden dark:text-gray-200 focus:outline-none">
                <!-- Hamburger Icon -->
                <svg id="hamburger-icon" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
                <!-- Close Icon (Hidden Initially) -->
                <svg id="close-icon" class="hidden w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
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

    <!-- JavaScript to Toggle Menu -->
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

    <!-- Add padding so content is not hidden behind navbar -->
    <div class="pt-20"></div>

    <!-- Hero Section -->
    <section class="py-20 text-center bg-white shadow-md dark:bg-gray-900">
        <h1 class="text-4xl font-bold text-gray-900 dark:text-white">
            Track Your <span class="text-blue-600 dark:text-blue-400">Expense</span> Effortlessly
        </h1>
        <p class="max-w-2xl mx-auto mt-4 text-gray-600 dark:text-gray-300">
            Manage your daily expenses with our intuitive tracker. Get insights, set budgets, and achieve your financial
            goals.
        </p>

        <!-- Email Signup -->
        <div class="flex justify-center mt-8">
            <input type="email" placeholder="Your email address"
                class="px-4 py-3 text-sm border border-gray-300 rounded-lg w-72 focus:outline-none focus:ring-2 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-200" />
            <button
                class="px-5 py-3 ml-2 text-sm text-white bg-gray-900 rounded-lg hover:bg-gray-800 dark:bg-blue-600 dark:hover:bg-blue-500">
                Start now
            </button>
        </div>
        <p class="mt-2 text-xs text-gray-500 dark:text-gray-400">
            By clicking "Start now" you agree to our
            <a href="#" class="font-medium underline">Terms & Conditions</a>.
        </p>
    </section>

    <!-- Features Section -->
    <style>
        /* Subtle scale-up effect on hover */
        .feature-card {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(10px);
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .feature-card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }
    </style>

    <!-- Features Section -->
    <section id="features" class="px-6 py-20 mx-auto bg-gray-100 dark:bg-gray-800">
        <h3 class="mb-12 text-3xl font-bold text-center text-gray-800 dark:text-gray-100">
            Features
        </h3>

        <div class="grid gap-8 md:grid-cols-3">

            <!-- Feature 1 -->
            <div
                class="overflow-hidden transition duration-300 transform bg-white rounded-lg shadow-lg dark:bg-gray-900 hover:scale-105">
                <img src="https://images.unsplash.com/photo-1556742400-b5b7c5121f05?auto=format&fit=crop&w=800&q=80"
                    alt="Easy Expense Logging" class="object-cover w-full h-48">
                <div class="p-6">
                    <h4 class="mb-2 text-xl font-semibold text-gray-900 dark:text-gray-100">📊 Easy Expense Logging</h4>
                    <p class="text-gray-700 dark:text-gray-300">
                        Quickly add expenses with categories and notes to keep track of your spending.
                    </p>
                </div>
            </div>

            <!-- Feature 2 -->
            <div
                class="overflow-hidden transition duration-300 transform bg-white rounded-lg shadow-lg dark:bg-gray-900 hover:scale-105">
                <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=800&q=80"
                    alt="Reports and Analytics" class="object-cover w-full h-48">
                <div class="p-6">
                    <h4 class="mb-2 text-xl font-semibold text-gray-900 dark:text-gray-100">📅 Daily, Weekly & Monthly
                        Reports</h4>
                    <p class="text-gray-700 dark:text-gray-300">
                        View spending patterns over time and make informed financial decisions.
                    </p>
                </div>
            </div>

            <!-- Feature 3 -->
            <div
                class="overflow-hidden transition duration-300 transform bg-white rounded-lg shadow-lg dark:bg-gray-900 hover:scale-105">
                <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?auto=format&fit=crop&w=800&q=80"
                    alt="Visual Analytics" class="object-cover w-full h-48">
                <div class="p-6">
                    <h4 class="mb-2 text-xl font-semibold text-gray-900 dark:text-gray-100">📈 Visual Analytics</h4>
                    <p class="text-gray-700 dark:text-gray-300">
                        See pie charts, bar graphs, and trend lines showing exactly where your money goes.
                    </p>
                </div>
            </div>

            <!-- Feature 4 -->
            <div
                class="overflow-hidden transition duration-300 transform bg-white rounded-lg shadow-lg dark:bg-gray-900 hover:scale-105">
                <img src="https://images.unsplash.com/photo-1549921296-3a83b3a1c5a0?auto=format&fit=crop&w=800&q=80"
                    alt="Category Management" class="object-cover w-full h-48">
                <div class="p-6">
                    <h4 class="mb-2 text-xl font-semibold text-gray-900 dark:text-gray-100">💳 Category Management</h4>
                    <p class="text-gray-700 dark:text-gray-300">
                        Create and manage custom categories like Food, Travel, Shopping, and more.
                    </p>
                </div>
            </div>

            <!-- Feature 5 -->
            <div
                class="overflow-hidden transition duration-300 transform bg-white rounded-lg shadow-lg dark:bg-gray-900 hover:scale-105">
                <img src="https://images.unsplash.com/photo-1581094794329-c8112a89eaa1?auto=format&fit=crop&w=800&q=80"
                    alt="Smart Reminders" class="object-cover w-full h-48">
                <div class="p-6">
                    <h4 class="mb-2 text-xl font-semibold text-gray-900 dark:text-gray-100">🔔 Smart Reminders</h4>
                    <p class="text-gray-700 dark:text-gray-300">
                        Get daily notifications so you never forget to log your expenses.
                    </p>
                </div>
            </div>

            <!-- Feature 6 -->
            <div
                class="overflow-hidden transition duration-300 transform bg-white rounded-lg shadow-lg dark:bg-gray-900 hover:scale-105">
                <img src="https://images.unsplash.com/photo-1561414927-6d86591d0c4f?auto=format&fit=crop&w=800&q=80"
                    alt="Budget Tracking" class="object-cover w-full h-48">
                <div class="p-6">
                    <h4 class="mb-2 text-xl font-semibold text-gray-900 dark:text-gray-100">💡 Budget Tracking</h4>
                    <p class="text-gray-700 dark:text-gray-300">
                        Set budgets for categories and get alerts when you're close to your limits.
                    </p>
                </div>
            </div>

        </div>
    </section>



    <!-- How It Works -->
    <style>
        /* Custom styles for hover effect and smooth transitions */
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }

        .card-hover {
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }
    </style>
    <section id="how-it-works" class="py-20 bg-white dark:bg-gray-900">
        <div class="container px-4 mx-auto">
            <!-- Section Heading -->
            <h2 class="mb-16 text-4xl font-extrabold leading-tight text-center">
                How It Works
            </h2>

            <!-- Steps Grid Container -->
            <div class="grid gap-10 md:grid-cols-2 lg:grid-cols-4">

                <!-- Step 1: Create an Account -->
                <div
                    class="flex flex-col items-center p-8 text-center bg-white shadow-lg dark:bg-gray-800 rounded-2xl card-hover">
                    <!-- Icon for Create an Account -->
                    <div class="p-4 mb-6 bg-purple-100 rounded-full dark:bg-purple-900">
                        <svg class="w-8 h-8 text-purple-600 dark:text-purple-300" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="mb-2 text-2xl font-bold">Create an Account</h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        Sign up in minutes to get access to all our powerful features.
                    </p>
                </div>

                <!-- Step 2: Add your items -->
                <div
                    class="flex flex-col items-center p-8 text-center bg-white shadow-lg dark:bg-gray-800 rounded-2xl card-hover">
                    <!-- Icon for Add your items -->
                    <div class="p-4 mb-6 bg-teal-100 rounded-full dark:bg-teal-900">
                        <svg class="w-8 h-8 text-teal-600 dark:text-teal-300" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                    </div>
                    <h3 class="mb-2 text-2xl font-bold">Add your items</h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        Easily add and categorize your expenses or items in a structured way.
                    </p>
                </div>

                <!-- Step 3: View them in real-time -->
                <div
                    class="flex flex-col items-center p-8 text-center bg-white shadow-lg dark:bg-gray-800 rounded-2xl card-hover">
                    <!-- Icon for View them in real-time -->
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
                    <h3 class="mb-2 text-2xl font-bold">View in real-time</h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        Track your progress with a dynamic dashboard that updates instantly.
                    </p>
                </div>

                <!-- Step 4: Export or manage easily -->
                <div
                    class="flex flex-col items-center p-8 text-center bg-white shadow-lg dark:bg-gray-800 rounded-2xl card-hover">
                    <!-- Icon for Export or manage easily -->
                    <div class="p-4 mb-6 bg-orange-100 rounded-full dark:bg-orange-900">
                        <svg class="w-8 h-8 text-orange-600 dark:text-orange-300" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="mb-2 text-2xl font-bold">Export or manage</h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        Export your data to a CSV or PDF file, or manage it directly in the app.
                    </p>
                </div>

            </div>
        </div>
    </section>

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
    <section id="faq" class="py-20 bg-gray-100 dark:bg-gray-800">
        <div class="container px-4 mx-auto">
            <!-- Section Header -->
            <div class="mb-12 text-center">
                <h2 class="mb-2 text-4xl font-extrabold text-gray-800 dark:text-gray-100">Frequently Asked Questions
                </h2>
                <p class="text-lg text-gray-600 dark:text-gray-400">Got questions? We've got answers to help you feel
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
                        <p>Simply navigate to the 'Add Expense' section in the app. You can enter the amount, select a
                            category, add a description, and even attach a photo of the receipt. Your expenses will be
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
                        <p>We use industry-standard encryption and security protocols to ensure that all your financial
                            data is stored securely. We do not share your personal information with any third parties.
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
                        <p>Our app can track expenses from various sources, including cash, credit cards, debit cards,
                            bank transfers, and digital wallets. You can easily tag each expense with the corresponding
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
                        <p>Yes, you can easily export your data in several formats, including CSV and PDF. This feature
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
                        <p>We are currently working on a dedicated mobile application for both iOS and Android. In the
                            meantime, our web app is fully responsive and works great on all mobile devices.</p>
                    </div>
                </details>

            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="py-20 bg-white dark:bg-gray-900">
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

</body>

</html>
