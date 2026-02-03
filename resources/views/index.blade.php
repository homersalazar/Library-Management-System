{{-- @extends('layouts.app')

@section('content')
<div class="min-h-screen flex flex-col md:flex-row">
    <!-- Left side: Background image with overlay -->
    <div class="relative md:flex-1 w-full h-64 md:h-auto flex items-center justify-center text-center bg-cover bg-center"
            style="background-image: url('{{ asset('storage/cover/cover_photo1.png') }}');">
        <!-- Overlay for readability -->
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>

        <!-- Text content -->
        <div class="relative px-6 md:px-12 text-white">
            <h1 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">
                Welcome to the Library Management System
            </h1>
            <p class="text-md md:text-lg lg:text-xl">
                Manage your library efficiently and effortlessly.
            </p>
        </div>
    </div>

    <!-- Right side: Login Form -->
    <div class="flex-1 w-full flex items-center justify-center p-6 md:p-12 bg-gray-50">
        <form class="w-full max-w-md bg-white p-8 rounded-xl shadow-xl space-y-6">
            <h2 class="text-2xl font-bold text-gray-700">Login</h2>

            <!-- Email -->
            <div>
                <x-label for="email" class="mb-2" variant="green">Email</x-label>
                <x-input type="email" id="email" placeholder="name@gmail.com" required class="block w-full focus:ring-green-500 focus:border-green-500" />
            </div>

            <!-- Password -->
            <div>
                <x-label for="password" class="mb-2" variant="green">Password</x-label>
                <x-input type="password" id="password" placeholder="••••••••" required class="block w-full focus:ring-green-500 focus:border-green-500" />
            </div>

            <!-- Remember me + Forgot Password -->
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <x-checkbox id="remember" variant="green" />
                    <x-label for="remember" class="ml-2 text-gray-600">Remember me</x-label>
                </div>
                <a href="#" class="text-green-500 hover:underline text-sm">Forgot password?</a>
            </div>

            <!-- Submit button -->
            <x-button type="submit" class="w-full py-3 text-white bg-green-500 hover:bg-green-600 transition duration-300">
                Login
            </x-button>

        </form>
    </div>
</div>
@endsection --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrowing Rules Configuration - Library Management</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Flowbite -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />

    <!-- Google Fonts - Crimson Pro for headings, DM Sans for body -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Pro:wght@400;600;700&family=DM+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-900: #1e293b;
            --primary-800: #334155;
            --primary-700: #475569;
            --accent-600: #ea580c;
            --accent-700: #c2410c;
            --soft-bg: #fafaf9;
            --border-subtle: #e7e5e4;
        }

        body {
            font-family: 'DM Sans', sans-serif;
            background: linear-gradient(135deg, #fafaf9 0%, #f5f5f4 100%);
            min-height: 100vh;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Crimson Pro', serif;
        }

        .card-hover {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .card-hover:hover {
            transform: translateY(-2px);
            box-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
        }

        .section-enter {
            animation: slideInUp 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .stagger-1 { animation-delay: 0.1s; opacity: 0; animation-fill-mode: forwards; }
        .stagger-2 { animation-delay: 0.2s; opacity: 0; animation-fill-mode: forwards; }
        .stagger-3 { animation-delay: 0.3s; opacity: 0; animation-fill-mode: forwards; }
        .stagger-4 { animation-delay: 0.4s; opacity: 0; animation-fill-mode: forwards; }
        .stagger-5 { animation-delay: 0.5s; opacity: 0; animation-fill-mode: forwards; }

        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .accent-border {
            border-left: 4px solid var(--accent-600);
        }

        .input-focus:focus {
            border-color: var(--accent-600);
            ring-color: var(--accent-600);
        }

        .toggle-checkbox:checked {
            background-color: var(--accent-600);
            border-color: var(--accent-600);
        }

        .decorative-line {
            height: 2px;
            background: linear-gradient(90deg, var(--accent-600) 0%, transparent 100%);
            width: 60px;
        }
    </style>
</head>
<body class="antialiased">

    <!-- Header -->
    <header class="bg-white border-b border-stone-200 sticky top-0 z-50 backdrop-blur-sm bg-white/95">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex items-center space-x-4">
                    <div class="w-10 h-10 bg-gradient-to-br from-orange-600 to-orange-700 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                    </div>
                    <div>
                        <h1 class="text-2xl font-bold text-slate-900">Library System</h1>
                        <p class="text-sm text-slate-500">Configuration Management</p>
                    </div>
                </div>
                <nav class="hidden md:flex space-x-8">
                    <a href="#" class="text-slate-600 hover:text-orange-600 transition-colors font-medium">Dashboard</a>
                    <a href="#" class="text-orange-600 font-semibold">Borrowing Rules</a>
                    <a href="#" class="text-slate-600 hover:text-orange-600 transition-colors font-medium">Members</a>
                    <a href="#" class="text-slate-600 hover:text-orange-600 transition-colors font-medium">Catalog</a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

        <!-- Page Title Section -->
        <div class="mb-12 section-enter stagger-1">
            <div class="decorative-line mb-4"></div>
            <h2 class="text-5xl font-bold text-slate-900 mb-3">Borrowing Rules</h2>
            <p class="text-lg text-slate-600 max-w-3xl">Configure loan periods, renewal limits, and borrowing privileges for your library. These rules ensure fair access and efficient circulation management.</p>
        </div>

        <!-- Action Bar -->
        <div class="flex justify-between items-center mb-8 section-enter stagger-2">
            <div class="flex space-x-3">
                <button type="button" class="px-5 py-2.5 bg-orange-600 text-white rounded-lg font-semibold hover:bg-orange-700 transition-all duration-300 hover:shadow-lg flex items-center space-x-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                    </svg>
                    <span>Add Rule Set</span>
                </button>
                <button type="button" class="px-5 py-2.5 bg-white text-slate-700 border border-slate-300 rounded-lg font-medium hover:bg-slate-50 transition-all duration-300">
                    Import Configuration
                </button>
            </div>
            <button type="button" class="px-5 py-2.5 bg-white text-slate-700 border border-slate-300 rounded-lg font-medium hover:bg-slate-50 transition-all duration-300 flex items-center space-x-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
                <span>Export Rules</span>
            </button>
        </div>

        <!-- Main Configuration Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            <!-- Left Column - Loan Periods -->
            <div class="lg:col-span-2 space-y-6">

                <!-- Loan Periods Card -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden card-hover section-enter stagger-3">
                    <div class="bg-gradient-to-r from-slate-800 to-slate-700 px-6 py-5">
                        <h3 class="text-2xl font-bold text-white flex items-center">
                            <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            Loan Periods
                        </h3>
                        <p class="text-slate-300 mt-1">Set borrowing duration for different item types</p>
                    </div>

                    <div class="p-6 space-y-4">
                        <!-- Books -->
                        <div class="flex items-center justify-between p-4 bg-stone-50 rounded-lg border border-stone-200">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center">
                                    <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-slate-900">Books</h4>
                                    <p class="text-sm text-slate-500">General collection</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-3">
                                <input type="number" value="21" class="w-20 px-3 py-2 border border-slate-300 rounded-lg text-center font-semibold text-slate-900 focus:ring-2 focus:ring-orange-600 focus:border-orange-600">
                                <span class="text-slate-600 font-medium">days</span>
                            </div>
                        </div>

                        <!-- DVDs -->
                        <div class="flex items-center justify-between p-4 bg-stone-50 rounded-lg border border-stone-200">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-slate-900">DVDs & Media</h4>
                                    <p class="text-sm text-slate-500">Audio-visual materials</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-3">
                                <input type="number" value="7" class="w-20 px-3 py-2 border border-slate-300 rounded-lg text-center font-semibold text-slate-900 focus:ring-2 focus:ring-orange-600 focus:border-orange-600">
                                <span class="text-slate-600 font-medium">days</span>
                            </div>
                        </div>

                        <!-- Magazines -->
                        <div class="flex items-center justify-between p-4 bg-stone-50 rounded-lg border border-stone-200">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-slate-900">Magazines</h4>
                                    <p class="text-sm text-slate-500">Periodicals</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-3">
                                <input type="number" value="14" class="w-20 px-3 py-2 border border-slate-300 rounded-lg text-center font-semibold text-slate-900 focus:ring-2 focus:ring-orange-600 focus:border-orange-600">
                                <span class="text-slate-600 font-medium">days</span>
                            </div>
                        </div>

                        <!-- Reference Materials -->
                        <div class="flex items-center justify-between p-4 bg-amber-50 rounded-lg border-2 border-amber-200">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-amber-100 rounded-lg flex items-center justify-center">
                                    <svg class="w-6 h-6 text-amber-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-slate-900">Reference Materials</h4>
                                    <p class="text-sm text-amber-700">In-library use only</p>
                                </div>
                            </div>
                            <span class="px-4 py-2 bg-amber-200 text-amber-900 rounded-full text-sm font-semibold">Non-circulating</span>
                        </div>

                        <button type="button" class="w-full py-3 border-2 border-dashed border-slate-300 rounded-lg text-slate-600 hover:border-orange-600 hover:text-orange-600 transition-all duration-300 font-medium flex items-center justify-center space-x-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                            </svg>
                            <span>Add Item Type</span>
                        </button>
                    </div>
                </div>

                <!-- Patron Types Card -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden card-hover section-enter stagger-4">
                    <div class="bg-gradient-to-r from-slate-800 to-slate-700 px-6 py-5">
                        <h3 class="text-2xl font-bold text-white flex items-center">
                            <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                            Patron Types & Limits
                        </h3>
                        <p class="text-slate-300 mt-1">Configure borrowing privileges by member type</p>
                    </div>

                    <div class="p-6">
                        <div class="overflow-x-auto">
                            <table class="w-full">
                                <thead>
                                    <tr class="border-b-2 border-slate-200">
                                        <th class="text-left py-3 px-4 font-semibold text-slate-700">Patron Type</th>
                                        <th class="text-center py-3 px-4 font-semibold text-slate-700">Max Items</th>
                                        <th class="text-center py-3 px-4 font-semibold text-slate-700">Renewals</th>
                                        <th class="text-center py-3 px-4 font-semibold text-slate-700">Status</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-100">
                                    <tr class="hover:bg-stone-50 transition-colors">
                                        <td class="py-4 px-4">
                                            <div class="flex items-center space-x-3">
                                                <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                                                    <span class="text-blue-600 font-bold text-sm">S</span>
                                                </div>
                                                <span class="font-medium text-slate-900">Student</span>
                                            </div>
                                        </td>
                                        <td class="py-4 px-4 text-center">
                                            <input type="number" value="5" class="w-16 px-2 py-1 border border-slate-300 rounded text-center font-semibold focus:ring-2 focus:ring-orange-600 focus:border-orange-600">
                                        </td>
                                        <td class="py-4 px-4 text-center">
                                            <input type="number" value="2" class="w-16 px-2 py-1 border border-slate-300 rounded text-center font-semibold focus:ring-2 focus:ring-orange-600 focus:border-orange-600">
                                        </td>
                                        <td class="py-4 px-4 text-center">
                                            <label class="relative inline-flex items-center cursor-pointer">
                                                <input type="checkbox" checked class="sr-only peer toggle-checkbox">
                                                <div class="w-11 h-6 bg-gray-300 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-orange-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-orange-600"></div>
                                            </label>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-stone-50 transition-colors">
                                        <td class="py-4 px-4">
                                            <div class="flex items-center space-x-3">
                                                <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
                                                    <span class="text-green-600 font-bold text-sm">F</span>
                                                </div>
                                                <span class="font-medium text-slate-900">Faculty</span>
                                            </div>
                                        </td>
                                        <td class="py-4 px-4 text-center">
                                            <input type="number" value="20" class="w-16 px-2 py-1 border border-slate-300 rounded text-center font-semibold focus:ring-2 focus:ring-orange-600 focus:border-orange-600">
                                        </td>
                                        <td class="py-4 px-4 text-center">
                                            <input type="number" value="3" class="w-16 px-2 py-1 border border-slate-300 rounded text-center font-semibold focus:ring-2 focus:ring-orange-600 focus:border-orange-600">
                                        </td>
                                        <td class="py-4 px-4 text-center">
                                            <label class="relative inline-flex items-center cursor-pointer">
                                                <input type="checkbox" checked class="sr-only peer toggle-checkbox">
                                                <div class="w-11 h-6 bg-gray-300 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-orange-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-orange-600"></div>
                                            </label>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-stone-50 transition-colors">
                                        <td class="py-4 px-4">
                                            <div class="flex items-center space-x-3">
                                                <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center">
                                                    <span class="text-purple-600 font-bold text-sm">C</span>
                                                </div>
                                                <span class="font-medium text-slate-900">Community</span>
                                            </div>
                                        </td>
                                        <td class="py-4 px-4 text-center">
                                            <input type="number" value="3" class="w-16 px-2 py-1 border border-slate-300 rounded text-center font-semibold focus:ring-2 focus:ring-orange-600 focus:border-orange-600">
                                        </td>
                                        <td class="py-4 px-4 text-center">
                                            <input type="number" value="1" class="w-16 px-2 py-1 border border-slate-300 rounded text-center font-semibold focus:ring-2 focus:ring-orange-600 focus:border-orange-600">
                                        </td>
                                        <td class="py-4 px-4 text-center">
                                            <label class="relative inline-flex items-center cursor-pointer">
                                                <input type="checkbox" checked class="sr-only peer toggle-checkbox">
                                                <div class="w-11 h-6 bg-gray-300 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-orange-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-orange-600"></div>
                                            </label>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Right Column - Additional Settings -->
            <div class="space-y-6">

                <!-- Overdue & Fines Card -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden card-hover section-enter stagger-4">
                    <div class="accent-border bg-gradient-to-br from-slate-50 to-white px-5 py-4 border-b border-slate-200">
                        <h3 class="text-xl font-bold text-slate-900 flex items-center">
                            <svg class="w-5 h-5 mr-2 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            Overdue Policy
                        </h3>
                    </div>
                    <div class="p-5 space-y-4">
                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Grace Period</label>
                            <div class="flex items-center space-x-2">
                                <input type="number" value="3" class="flex-1 px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-orange-600 focus:border-orange-600">
                                <span class="text-slate-600 font-medium">days</span>
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Fine per Day</label>
                            <div class="flex items-center space-x-2">
                                <span class="text-slate-600">$</span>
                                <input type="number" value="0.50" step="0.25" class="flex-1 px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-orange-600 focus:border-orange-600">
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Maximum Fine</label>
                            <div class="flex items-center space-x-2">
                                <span class="text-slate-600">$</span>
                                <input type="number" value="25.00" step="1.00" class="flex-1 px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-orange-600 focus:border-orange-600">
                            </div>
                        </div>

                        <div class="pt-3">
                            <label class="flex items-center space-x-3 cursor-pointer">
                                <input type="checkbox" class="w-5 h-5 text-orange-600 border-slate-300 rounded focus:ring-orange-600 focus:ring-2">
                                <span class="text-sm text-slate-700 font-medium">Fine-free library</span>
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Hold/Reservation Rules -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden card-hover section-enter stagger-5">
                    <div class="accent-border bg-gradient-to-br from-slate-50 to-white px-5 py-4 border-b border-slate-200">
                        <h3 class="text-xl font-bold text-slate-900 flex items-center">
                            <svg class="w-5 h-5 mr-2 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"/>
                            </svg>
                            Hold Rules
                        </h3>
                    </div>
                    <div class="p-5 space-y-4">
                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Pickup Window</label>
                            <div class="flex items-center space-x-2">
                                <input type="number" value="7" class="flex-1 px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-orange-600 focus:border-orange-600">
                                <span class="text-slate-600 font-medium">days</span>
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Max Active Holds</label>
                            <input type="number" value="10" class="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-orange-600 focus:border-orange-600">
                        </div>

                        <div class="pt-3 space-y-2">
                            <label class="flex items-center space-x-3 cursor-pointer">
                                <input type="checkbox" checked class="w-5 h-5 text-orange-600 border-slate-300 rounded focus:ring-orange-600 focus:ring-2">
                                <span class="text-sm text-slate-700 font-medium">Allow renewals with holds</span>
                            </label>
                            <label class="flex items-center space-x-3 cursor-pointer">
                                <input type="checkbox" checked class="w-5 h-5 text-orange-600 border-slate-300 rounded focus:ring-orange-600 focus:ring-2">
                                <span class="text-sm text-slate-700 font-medium">Email hold notifications</span>
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Quick Stats -->
                <div class="bg-gradient-to-br from-orange-600 to-orange-700 rounded-xl shadow-lg overflow-hidden section-enter stagger-5">
                    <div class="p-6 text-white">
                        <h4 class="text-lg font-bold mb-4 opacity-90">Active Configurations</h4>
                        <div class="space-y-3">
                            <div class="flex justify-between items-center">
                                <span class="opacity-90">Item Types</span>
                                <span class="text-2xl font-bold">4</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="opacity-90">Patron Types</span>
                                <span class="text-2xl font-bold">3</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="opacity-90">Total Rules</span>
                                <span class="text-2xl font-bold">12</span>
                            </div>
                        </div>
                        <div class="mt-6 pt-4 border-t border-orange-500">
                            <p class="text-sm opacity-90">Last updated: Feb 3, 2026</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Save Button -->
        <div class="mt-8 flex justify-end space-x-4 section-enter stagger-5">
            <button type="button" class="px-6 py-3 bg-white text-slate-700 border border-slate-300 rounded-lg font-semibold hover:bg-slate-50 transition-all duration-300">
                Reset to Defaults
            </button>
            <button type="button" class="px-8 py-3 bg-gradient-to-r from-orange-600 to-orange-700 text-white rounded-lg font-bold hover:shadow-xl transition-all duration-300 transform hover:-translate-y-0.5">
                Save Configuration
            </button>
        </div>

    </main>

    <!-- Flowbite JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>
</html>
