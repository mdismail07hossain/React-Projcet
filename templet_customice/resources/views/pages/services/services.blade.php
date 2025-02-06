@extends('master')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internet Packages</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-900">

    <!-- Header Section -->
    <header class="bg-blue-600 text-white py-6 text-center">
        <h1 class="text-3xl font-semibold">Affordable Internet Packages</h1>
        <p class="mt-2">Choose the best plan for your needs. Fast, reliable, and seamless internet at your fingertips.</p>
    </header>

    <!-- Main Content Section -->
    <main class="max-w-6xl mx-auto p-6">
        <section class="text-center my-12">
            <h2 class="text-2xl font-semibold text-blue-600">Available Packages</h2>
            <p class="mt-4 text-gray-700">Choose from a range of internet packages that suit your online lifestyle.</p>
        </section>

        <!-- Package Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Package 2Mbps -->
            <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <h3 class="text-xl font-semibold text-blue-600">2Mbps Package</h3>
                <p class="mt-4 text-gray-600">Perfect for light browsing and email checking.</p>
                <p class="mt-2 text-3xl font-bold text-blue-600">2Mbps</p>
                <p class="mt-4 text-gray-500">Ideal for: Browsing, social media, email</p>
                <button class="mt-6 px-6 py-2 bg-blue-600 text-white rounded-full hover:bg-blue-700">Select Plan</button>
            </div>

            <!-- Package 3Mbps -->
            <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <h3 class="text-xl font-semibold text-blue-600">3Mbps Package</h3>
                <p class="mt-4 text-gray-600">Great for casual streaming and browsing.</p>
                <p class="mt-2 text-3xl font-bold text-blue-600">3Mbps</p>
                <p class="mt-4 text-gray-500">Ideal for: Light streaming, browsing, email</p>
                <button class="mt-6 px-6 py-2 bg-blue-600 text-white rounded-full hover:bg-blue-700">Select Plan</button>
            </div>

            <!-- Package 5Mbps -->
            <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <h3 class="text-xl font-semibold text-blue-600">5Mbps Package</h3>
                <p class="mt-4 text-gray-600">Perfect for HD streaming and light gaming.</p>
                <p class="mt-2 text-3xl font-bold text-blue-600">5Mbps</p>
                <p class="mt-4 text-gray-500">Ideal for: HD streaming, online gaming, video calls</p>
                <button class="mt-6 px-6 py-2 bg-blue-600 text-white rounded-full hover:bg-blue-700">Select Plan</button>
            </div>

            <!-- Package 10Mbps -->
            <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <h3 class="text-xl font-semibold text-blue-600">10Mbps Package</h3>
                <p class="mt-4 text-gray-600">Great for larger households or small businesses.</p>
                <p class="mt-2 text-3xl font-bold text-blue-600">10Mbps</p>
                <p class="mt-4 text-gray-500">Ideal for: HD/4K streaming, large downloads</p>
                <button class="mt-6 px-6 py-2 bg-blue-600 text-white rounded-full hover:bg-blue-700">Select Plan</button>
            </div>

            <!-- Package 20Mbps -->
            <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <h3 class="text-xl font-semibold text-blue-600">20Mbps Package</h3>
                <p class="mt-4 text-gray-600">For heavy users and larger households with multiple devices.</p>
                <p class="mt-2 text-3xl font-bold text-blue-600">15Mbps</p>
                <p class="mt-4 text-gray-500">Ideal for: Heavy streaming (4K), large file uploads</p>
                <button class="mt-6 px-6 py-2 bg-blue-600 text-white rounded-full hover:bg-blue-700">Select Plan</button>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <h3 class="text-xl font-semibold text-blue-600">20Mbps Package</h3>
                <p class="mt-4 text-gray-600">For heavy users and larger households with multiple devices.</p>
                <p class="mt-2 text-3xl font-bold text-blue-600">20Mbps</p>
                <p class="mt-4 text-gray-500">Ideal for: Heavy streaming (4K), large file uploads</p>
                <button class="mt-6 px-6 py-2 bg-blue-600 text-white rounded-full hover:bg-blue-700">Select Plan</button>
            </div>
        </div>

        <!-- Contact Form Section -->
        <section class="mt-16 bg-blue-50 p-8 rounded-lg">
            <h2 class="text-2xl font-semibold text-center text-blue-600">Get Started Today!</h2>
            <p class="mt-4 text-center text-gray-700">Sign up for the internet package that works best for you. Fill out the form below to get started!</p>
            <form class="mt-8 max-w-2xl mx-auto space-y-4">
                <div>
                    <label for="name" class="block text-gray-700">Full Name</label>
                    <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div>
                    <label for="email" class="block text-gray-700">Email Address</label>
                    <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div>
                    <label for="phone" class="block text-gray-700">Phone Number</label>
                    <input type="tel" id="phone" name="phone" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div>
                    <label for="package" class="block text-gray-700">Select Package</label>
                    <select id="package" name="package" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500" required>
                        <option value="2mbps">2Mbps</option>
                        <option value="3mbps">3Mbps</option>
                        <option value="5mbps">5Mbps</option>
                        <option value="10mbps">10Mbps</option>
                        <option value="10mbps">15Mbps</option>
                        <option value="20mbps">20Mbps</option>
                    </select>
                </div>
                <button type="submit" class="w-full mt-6 px-6 py-2 bg-blue-600 text-white rounded-full hover:bg-blue-700">Submit</button>
            </form>
        </section>
    </main>

    <!-- Footer Section -->
  

</body>

</html>

@endsection