<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js" type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <title>Library Management System</title>
    </head>
    <body>
        {{-- @auth --}}
            <nav class="fixed top-0 z-50 w-full bg-white border-b border-green-200 dark:bg-green-800 dark:border-green-700">
                <div class="px-3 py-3 lg:px-5 lg:pl-3">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center justify-start rtl:justify-end">
                            <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-green-500 rounded-lg sm:hidden hover:bg-green-100 focus:outline-none focus:ring-2 focus:ring-green-200 dark:text-green-400 dark:hover:bg-green-700 dark:focus:ring-green-600">
                                <span class="sr-only">Open sidebar</span>
                                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                                </svg>
                            </button>
                            <a href="/" class="flex ms-2 md:me-24">
                                <i class="fa-solid fa-book-open fa-2x text-white"></i>
                                <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white ms-2">Library Management System</span>
                            </a>
                        </div>
                        <div class="flex items-center">
                            <div class="flex items-center ms-3">
                                <div>
                                    <button type="button" class="flex text-sm bg-green-800 rounded-full focus:ring-4 focus:ring-green-300 dark:focus:ring-green-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                                        <span class="sr-only">Open user menu</span>
                                        <img class="w-8 h-8 rounded-full" src="https://flowbite.com/images/people/profile-picture-5.jpg" alt="user photo">
                                    </button>
                                </div>
                                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-green-100 rounded-sm shadow-sm dark:bg-green-700 dark:divide-green-600" id="dropdown-user">
                                    <div class="px-4 py-3" role="none">
                                        <p class="text-sm text-green-900 dark:text-white" role="none">
                                            Neil Sims
                                        </p>
                                        <p class="text-sm font-medium text-green-900 truncate dark:text-green-300" role="none">
                                            neil.sims@flowbite.com
                                        </p>
                                    </div>
                                    <ul class="py-1" role="none">
                                        <li>
                                            <a href="#" class="block px-4 py-2 text-sm text-green-700 hover:bg-green-100 dark:text-green-300 dark:hover:bg-green-600 dark:hover:text-white" role="menuitem">Dashboard</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 text-sm text-green-700 hover:bg-green-100 dark:text-green-300 dark:hover:bg-green-600 dark:hover:text-white" role="menuitem">Settings</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 text-sm text-green-700 hover:bg-green-100 dark:text-green-300 dark:hover:bg-green-600 dark:hover:text-white" role="menuitem">Earnings</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 text-sm text-green-700 hover:bg-green-100 dark:text-green-300 dark:hover:bg-green-600 dark:hover:text-white" role="menuitem">Sign out</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-52 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-green-200 sm:translate-x-0 dark:bg-green-800 dark:border-green-700" aria-label="Sidebar">
                <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-green-800">
                    <ul class="space-y-2 font-medium">
                        <li>
                            <a href="{{ route('dashboard.index') }}" class="flex items-center p-2 text-green-900 rounded-lg dark:text-white hover:bg-green-100 dark:hover:bg-green-700 group">
                                <i class="fa-solid fa-gauge text-green-500 dark:text-green-400 fa-lg group-hover:text-green-900 dark:group-hover:text-white"></i>
                                <span class="ms-3">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center p-2 text-green-900 rounded-lg dark:text-white hover:bg-green-100 dark:hover:bg-green-700 group">
                                <i class="fa-solid fa-book text-green-500 dark:text-green-400 fa-lg group-hover:text-green-900 dark:group-hover:text-white"></i>
                                <span class="flex-1 ms-3 whitespace-nowrap">Books</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center p-2 text-green-900 rounded-lg dark:text-white hover:bg-green-100 dark:hover:bg-green-700 group">
                                <i class="fa-solid fa-book-open-reader text-green-500 dark:text-green-400 fa-lg group-hover:text-green-900 dark:group-hover:text-white"></i>
                                <span class="flex-1 ms-3 whitespace-nowrap">Check-out Books</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center p-2 text-green-900 rounded-lg dark:text-white hover:bg-green-100 dark:hover:bg-green-700 group">
                                <i class="fa-solid fa-users text-green-500 dark:text-green-400 fa-lg group-hover:text-green-900 dark:group-hover:text-white"></i>
                                <span class="flex-1 ms-3 whitespace-nowrap">Members</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center p-2 text-green-900 rounded-lg dark:text-white hover:bg-green-100 dark:hover:bg-green-700 group">
                                <i class="fa-solid fa-gear text-green-500 dark:text-green-400 fa-lg group-hover:text-green-900 dark:group-hover:text-white"></i>
                                <span class="flex-1 ms-3 whitespace-nowrap">Settings</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center p-2 text-green-900 rounded-lg dark:text-white hover:bg-green-100 dark:hover:bg-green-700 group">
                                <i class="fa-solid fa-clipboard-list text-green-500 dark:text-green-400 fa-lg group-hover:text-green-900 dark:group-hover:text-white"></i>
                                <span class="flex-1 ms-3 whitespace-nowrap">Reports</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </aside>

            <div class="p-5 sm:ml-52 bg-gray-100 min-h-screen pt-20">
                @yield('content')
            </div>
        {{-- @else
            @yield('content')
        @endauth --}}
    </body>
</html>
