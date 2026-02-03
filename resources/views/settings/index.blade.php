@extends('layouts.app')

@section('content')
    <div class="flex flex-col gap-4">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-5">

            <!-- Left: Title -->
            <div class="flex flex-col gap-1">
                <h1 class="font-semibold text-lg text-green-900">Borrowing Rules</h1>
                <p class="text-gray-700 text-sm">
                    Configure loan periods, renewal limits, and borrowing privileges for your library. These rules ensure fair access and efficient circulation management.
                </p>
            </div>
        </div>

        <!-- Main Configuration Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            <!-- Left Column - Loan Periods -->
            <div class="lg:col-span-2 space-y-6">

                <!-- Loan Periods Card -->
                    <x-card>
                        <div class="flex items-center">
                            <i class="fa-regular fa-clock w-6 h-6 mr-3 mb-2 text-green-600 text-xl"></i>
                            <h3 class="text-2xl font-bold text-green-900">Loan Periods</h3>
                        </div>
                        <p class="text-gray-600 mt-1">Set borrowing duration for different item types</p>

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
                                    <x-input type="number" value="21" class="max-w-16"/>
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
                                    <x-input type="number" value="14" class="max-w-16"/>
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

                            <x-button icon="fa-solid fa-plus" class="border-dashed">Add Item Type</x-button>
                        </div>
                    </x-card>

                <!-- Patron Types Card -->
                <x-card>
                    <div class="flex items-center">
                        <i class="fa-regular fa-clock w-6 h-6 mr-3 mb-2 text-green-600 text-xl"></i>
                        <h3 class="text-2xl font-bold text-green-900">Patron Types & Limits</h3>
                    </div>
                    <p class="text-gray-600 mt-1">Configure borrowing privileges by member type</p>
                </x-card>

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
    </div>


@endsection
