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
            <x-button type="submit" form="settings-form" icon="fa-solid fa-floppy-disk" class="max-w-52">
                Save Configurations
            </x-button>
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

                    <x-table :headers="['Patron Type', 'Max Items', 'Renewals', 'Status']">
                        <tr class="border-b text-gray-700">
                            <td class="px-3 py-2">
                                <div class="flex items-center space-x-3">
                                    <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                                        <span class="text-blue-600 font-bold text-sm">S</span>
                                    </div>
                                    <span class="font-medium text-slate-900">Student</span>
                                </div>
                            </td>

                            <td class="px-3 py-2">
                                <x-input type="number" value="5" class="max-w-24"/>
                            </td>
                            <td class="px-3 py-2">
                                <x-input type="number" value="5" class="max-w-24"/>
                            </td>
                            <td class="px-3 py-2">
                                <x-toggle></x-toggle>
                            </td>
                        </tr>
                    </x-table>
                </x-card>


            </div>

            <!-- Right Column - Additional Settings -->
            <div class="space-y-6">

                <!-- Overdue & Fines Card -->
                <x-card class="pb-5">
                    <div class="flex items-center">
                        <i class="fa-solid fa-peso-sign w-6 h-6 mr-3 mb-2 text-green-600 text-xl"></i>
                        <h3 class="text-2xl font-bold text-green-900">Overdue & Fines</h3>
                    </div>
                    <p class="text-gray-600 mt-1">Manage overdue policies and fine structures</p>
                    <div class="flex flex-col mt-3 gap-4">
                        <!-- Grace Period -->
                        <div class="flex flex-col gap-2">
                            <x-label for="grace-period">Grace Period</x-label>
                            <x-input type="number" value="3"/>
                        </div>

                        <!-- Max Active Holds -->
                        <div class="flex flex-col gap-2">
                            <x-label for="fine-per-day">Max Active Holds</x-label>
                            <x-input type="number" value="0.50" step="0.25"/>
                        </div>

                    </div>
                </x-card>

                <!-- Hold/Reservation Rules -->
                <x-card class="pb-5">
                    <div class="flex items-center">
                        <i class="fa-regular fa-bookmark w-6 h-6 mr-3 mb-2 text-green-600 text-xl"></i>
                        <h3 class="text-2xl font-bold text-green-900">Hold Rules</h3>
                    </div>
                    <div class="flex flex-col mt-3 gap-4">
                        <!-- Pickup Window -->
                        <div class="flex flex-col gap-2">
                            <x-label for="grace-period">Pickup Window</x-label>
                            <div class="flex flex-row gap-3">
                                <x-input type="number" value="3"/>
                                <span class="ml-2 self-center text-gray-700">days</span>
                            </div>
                        </div>

                        <!-- Fine per Day -->
                        <div class="flex flex-col gap-2">
                            <x-label for="fine-per-day">Max Active Holds</x-label>
                            <x-input type="number" value="0.50" step="0.25"/>
                        </div>

                        <!-- Notification-->
                        <div class="flex flex-row items-center">
                            <x-checkbox variant="green"/>
                            <span class="ml-2 text-sm font-semibold text-gray-700">Email hold notifications</span>
                        </div>
                    </div>
                </x-card>

                <!-- Quick Stats -->
                <x-card>
                    <h3 class="text-2xl font-bold text-green-900">Active Configurations</h3>
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
                    <div class="mt-6 pt-4 border-t border-green-500">
                        <p class="text-sm opacity-90">Last updated: Feb 3, 2026</p>
                    </div>
                </x-card>
            </div>
        </div>
    </div>


@endsection
