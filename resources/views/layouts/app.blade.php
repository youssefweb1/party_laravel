<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Party Wizard - @yield('title')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/logo_out_text.svg') }}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/custoum.css') }}">

    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Flowbite CSS -->
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Google Fonts - Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.theme.default.min.css">

    <!-- Pagedone CSS -->
    <link href="https://cdn.jsdelivr.net/npm/pagedone@1.1.2/src/css/pagedone.css" />
</head>

<body class="bg-gray-50">
    <!-- Main Container -->
    <div class=" mx-auto max-w-screen-2xl	">
        <!-- Navigation -->
        <header>
            <!-- Sidebar -->
            <aside id="default-sidebar"
                class="fixed top-0 left-0 z-40 w-64 h-full transition-transform -translate-x-full sm:translate-x-0 bg-white"
                aria-label="Sidebar">
                <div class="h-full px-2 py-4 overflow-y-auto bg-white">
                    <ul class="space-y-2 font-medium">
                        <li class="mb-5">
                            <img src="{{ asset('assets/images/logo.svg') }}" alt="" class="w-40">
                        </li>
                        <li>
                            <a href="{{ route('home') }}"
                                class="flex items-center {{ request()->is('/') ? 'bg-gray-100 text-custom-orange p-2' : 'text-gray-400 p-3.5' }}   rounded-lg hover:bg-gray-100 duration-300 text-sm group">
                                <div
                                    class="{{ request()->is('/') ? 'bg-custom-orange w-10 h-10 flex items-center justify-center rounded-lg ' : '' }}">
                                    <i
                                        class="fas fa-home rounded-lg {{ request()->is('/') ? 'text-white' : 'text-gray-400' }}"></i>
                                </div>
                                <span class="ms-4">Home</span>
                            </a>
                        </li>
                        {{-- <li>
                            <a href="{{ route('wishlist') }}"
                                class="flex items-center {{ request()->is('wishlist') ? 'bg-gray-100 text-custom-orange p-2' : 'text-gray-400 p-3.5' }} rounded-lg hover:bg-gray-100 duration-300 text-sm group">
                                <div class="{{ request()->is('wishlist') ? 'bg-custom-orange w-10 h-10 flex items-center justify-center rounded-lg ' : ''  }}">
                                    <i class="fas fa-heart rounded-lg {{ request()->is('wishlist') ? 'text-white' : 'text-gray-400' }}"></i>
                                </div>
                                <span class="ms-4">Wishlist</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('history') }}"
                                class="flex items-center {{ request()->is('history') ? 'bg-gray-100 text-custom-orange p-2' : 'text-gray-400 p-3.5' }} rounded-lg hover:bg-gray-100 duration-300 text-sm group">
                                <div class="{{ request()->is('history') ? 'bg-custom-orange w-10 h-10 flex items-center justify-center rounded-lg ' : ''  }}">
                                    <i class="fas fa-history rounded-lg {{ request()->is('history') ? 'text-white' : 'text-gray-400' }}"></i>
                                </div>
                                <span class="ms-4">History</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('promotion') }}"
                                class="flex items-center {{ request()->is('promotion') ? 'bg-gray-100 text-custom-orange p-2' : 'text-gray-400 p-3.5' }} rounded-lg hover:bg-gray-100 duration-300 text-sm group">
                                <div class="{{ request()->is('promotion') ? 'bg-custom-orange w-10 h-10 flex items-center justify-center rounded-lg ' : ''  }}">
                                    <i class="fas fa-tags rounded-lg {{ request()->is('promotion') ? 'text-white' : 'text-gray-400' }}"></i>
                                </div>
                                <span class="ms-4">Promotion</span>
                            </a>
                        </li>
                        <hr>
                        <li>
                            <a href="{{ route('profile') }}"
                                class="flex items-center {{ request()->is('profile') ? 'bg-gray-100 text-custom-orange p-2' : 'text-gray-400 p-3.5' }} rounded-lg hover:bg-gray-100 duration-300 text-sm group">
                                <div class="{{ request()->is('profile') ? 'bg-custom-orange w-10 h-10 flex items-center justify-center rounded-lg ' : ''  }}">
                                    <i class="fas fa-user rounded-lg {{ request()->is('profile') ? 'text-white' : 'text-gray-400' }}"></i>
                                </div>
                                <span class="ms-4">Profile</span>
                            </a>
                        </li> --}}
                        <li>
                            <a href="{{ route('setting') }}"
                                class="flex items-center {{ request()->is('setting') ? 'bg-gray-100 text-custom-orange p-2' : 'text-gray-400 p-3.5' }} rounded-lg hover:bg-gray-100 duration-300 text-sm group">
                                <div
                                    class="{{ request()->is('setting') ? 'bg-custom-orange w-10 h-10 flex items-center justify-center rounded-lg ' : '' }}">
                                    <i
                                        class="fas fa-cog rounded-lg {{ request()->is('setting') ? 'text-white' : 'text-gray-400' }}"></i>
                                </div>
                                <span class="ms-4">Settings</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('help') }}"
                                class="flex items-center {{ request()->is('help') ? 'bg-gray-100 text-custom-orange p-2' : 'text-gray-400 p-3.5' }} rounded-lg hover:bg-gray-100 duration-300 text-sm group">
                                <div
                                    class="{{ request()->is('help') ? 'bg-custom-orange w-10 h-10 flex items-center justify-center rounded-lg ' : '' }}">
                                    <i
                                        class="fas fa-exclamation-circle rounded-lg {{ request()->is('help') ? 'text-white' : 'text-gray-400' }}"></i>
                                </div>
                                <span class="ms-4">Report</span>
                            </a>
                        </li>
                        <li style="bottom: 30px;" class="absolute w-full">
                            @auth
                                <form action="{{ route('logout') }}" method="POST"
                                    class="flex items-center justify-center">
                                    @csrf
                                    <button type="submit" class="flex items-center">
                                        <span class=" text-red-500 text-center">Log Out</span>
                                    </button>
                                </form>
                            @else
                                <a href="{{ route('login') }}" class="flex items-center justify-center">
                                    <span class=" text-custom-blue text-center">Login</span>
                                </a>
                            @endauth
                        </li>
                    </ul>


                </div>
            </aside>

            <!-- Navbar -->
            <div class="sm:ml-64 mlcustom">
                <nav class="bg-gray-50 border-gray-200">
                    <div class="flex flex-wrap items-center justify-between mx-auto px-4 pt-2.5 mt-3">
                        <!-- Search Form -->
                        <form class="flex items-center w-2/3 pe-5 hidden sm:flex">
                            <label for="voice-search" class="sr-only">Search</label>
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                    <img src="{{ asset('assets/images/search-normal.svg') }}" class="w-4 h-4"
                                        alt="">
                                </div>
                                <input type="text" id="voice-search"
                                    class="bg-gray-50 border-none shadow-sm text-gray-500 bg-white text-sm rounded-lg block w-full ps-10 p-2.5 placeholder-gray-300 outline-none focus:ring-0"
                                    placeholder="Search">
                                <button type="button" class="absolute inset-y-0 end-0 flex items-center pe-3">
                                    <img src="{{ asset('assets/images/sort.svg') }}" class="w-4 h-4" alt="">
                                </button>
                            </div>
                        </form>

                        <!-- Mobile Logo -->
                        <div class="flex md:order-1 sm:hidden">
                            <img src="{{ asset('assets/images/logo.svg') }}" alt="">
                        </div>

                        <!-- Mobile Navigation Icons -->
                        <div class="flex gap-3 md:hidden">
                            <li class="relative">
                                <a href="{{ route('cart.view') }}"
                                    class="flex items-center gap-4 p-2 shadow-sm rounded-lg bg-white"
                                    aria-current="page">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_10_6154)">
                                            <path
                                                d="M18.19 17.75H7.54C6.55 17.75 5.6 17.33 4.93 16.6C4.26 15.87 3.92001 14.89 4.00001 13.9L4.83001 3.94001C4.86001 3.63001 4.75 3.33001 4.54 3.10001C4.33 2.87001 4.04 2.75 3.73 2.75H2C1.59 2.75 1.25 2.41 1.25 2C1.25 1.59 1.59 1.25 2 1.25H3.74001C4.47001 1.25 5.16 1.56 5.65 2.09C5.92 2.39 6.12 2.74001 6.23 3.13001H18.72C19.73 3.13001 20.66 3.53001 21.34 4.25001C22.01 4.98001 22.35 5.93001 22.27 6.94001L21.73 14.44C21.62 16.27 20.02 17.75 18.19 17.75ZM6.28001 4.62L5.50001 14.02C5.45001 14.6 5.64001 15.15 6.03001 15.58C6.42001 16.01 6.96 16.24 7.54 16.24H18.19C19.23 16.24 20.17 15.36 20.25 14.32L20.79 6.82001C20.83 6.23001 20.64 5.67001 20.25 5.26001C19.86 4.84001 19.32 4.60999 18.73 4.60999H6.28001L6.28001 4.62Z"
                                                fill="black" />
                                            <path
                                                d="M16.25 22.75C15.15 22.75 14.25 21.85 14.25 20.75C14.25 19.65 15.15 18.75 16.25 18.75C17.35 18.75 18.25 19.65 18.25 20.75C18.25 21.85 17.35 22.75 16.25 22.75ZM16.25 20.25C15.97 20.25 15.75 20.47 15.75 20.75C15.75 21.03 15.97 21.25 16.25 21.25C16.53 21.25 16.75 21.03 16.75 20.75C16.75 20.47 16.53 20.25 16.25 20.25Z"
                                                fill="black" />
                                            <path
                                                d="M8.25 22.75C7.15 22.75 6.25 21.85 6.25 20.75C6.25 19.65 7.15 18.75 8.25 18.75C9.35 18.75 10.25 19.65 10.25 20.75C10.25 21.85 9.35 22.75 8.25 22.75ZM8.25 20.25C7.97 20.25 7.75 20.47 7.75 20.75C7.75 21.03 7.97 21.25 8.25 21.25C8.53 21.25 8.75 21.03 8.75 20.75C8.75 20.47 8.53 20.25 8.25 20.25Z"
                                                fill="black" />
                                            <path
                                                d="M21 8.75H9C8.59 8.75 8.25 8.41 8.25 8C8.25 7.59 8.59 7.25 9 7.25H21C21.41 7.25 21.75 7.59 21.75 8C21.75 8.41 21.41 8.75 21 8.75Z"
                                                fill="black" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_10_6154">
                                                <rect width="24" height="24" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <span
                                        class="absolute w-3.5 h-3.5 flex items-center justify-center text-white bg-red-500 rounded-full text-2xs"
                                        style="top: 5px; right: 5px;">
                                        {{ session('cartItemCount', 0) }}
                                    </span>
                                </a>
                            </li>
                            <li class="relative">
                                <a href="" class="flex items-center gap-2 p-2 shadow-sm rounded-lg bg-white"
                                    aria-current="page">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_10_6148)">
                                            <path
                                                d="M12.02 20.53C9.68999 20.53 7.35999 20.16 5.14999 19.42C4.30999 19.13 3.66999 18.54 3.38999 17.77C3.09999 17 3.19999 16.15 3.65999 15.39L4.80999 13.48C5.04999 13.08 5.26999 12.28 5.26999 11.81V8.92004C5.26999 5.20004 8.29999 2.17004 12.02 2.17004C15.74 2.17004 18.77 5.20004 18.77 8.92004V11.81C18.77 12.27 18.99 13.08 19.23 13.49L20.37 15.39C20.8 16.11 20.88 16.98 20.59 17.77C20.3 18.56 19.67 19.16 18.88 19.42C16.68 20.16 14.35 20.53 12.02 20.53ZM12.02 3.67004C9.12999 3.67004 6.76999 6.02004 6.76999 8.92004V11.81C6.76999 12.54 6.46999 13.62 6.09999 14.25L4.94999 16.16C4.72999 16.53 4.66999 16.92 4.79999 17.25C4.91999 17.59 5.21999 17.85 5.62999 17.99C9.80999 19.39 14.24 19.39 18.42 17.99C18.78 17.87 19.06 17.6 19.19 17.24C19.32 16.88 19.29 16.49 19.09 16.16L17.94 14.25C17.56 13.6 17.27 12.53 17.27 11.8V8.92004C17.27 6.02004 14.92 3.67004 12.02 3.67004Z"
                                                fill="black" />
                                            <path
                                                d="M13.88 3.94005C13.81 3.94005 13.74 3.93005 13.67 3.91005C13.38 3.83005 13.1 3.77005 12.83 3.73005C11.98 3.62005 11.16 3.68005 10.39 3.91005C10.11 4.00005 9.80999 3.91005 9.61999 3.70005C9.42999 3.49005 9.36999 3.19005 9.47999 2.92005C9.88999 1.87005 10.89 1.18005 12.03 1.18005C13.17 1.18005 14.17 1.86005 14.58 2.92005C14.68 3.19005 14.63 3.49005 14.44 3.70005C14.29 3.86005 14.08 3.94005 13.88 3.94005Z"
                                                fill="black" />
                                            <path
                                                d="M12.02 22.8101C11.03 22.8101 10.07 22.4101 9.37002 21.7101C8.67002 21.0101 8.27002 20.0501 8.27002 19.0601H9.77002C9.77002 19.6501 10.01 20.2301 10.43 20.6501C10.85 21.0701 11.43 21.3101 12.02 21.3101C13.26 21.3101 14.27 20.3001 14.27 19.0601H15.77C15.77 21.1301 14.09 22.8101 12.02 22.8101Z"
                                                fill="black" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_10_6148">
                                                <rect width="24" height="24" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <span
                                        class="absolute w-3.5 h-3.5 flex items-center justify-center text-white bg-red-500 rounded-full text-2xs"
                                        style="top: 5px;right: 5px;">
                                        3
                                    </span>
                                </a>
                            </li>
                            <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar"
                                aria-controls="default-sidebar" type="button"
                                class="inline-flex items-center text-2xl text-gray-400 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                                <span class="sr-only">Open sidebar</span>
                                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path clip-rule="evenodd" fill-rule="evenodd"
                                        d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                                    </path>
                                </svg>
                            </button>
                        </div>

                        <!-- Desktop Navigation Icons -->
                        <div class="items-center justify-between hidden md:flex w-1/3 ps-5">
                            <ul
                                class="flex flex-col font-medium rounded-lg md:space-x-4 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 items-center">
                                <li class="relative">
                                    <a href="{{ route('cart.view') }}"
                                        class="flex items-center gap-4 p-2 shadow-sm rounded-lg bg-white"
                                        aria-current="page">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_10_6154)">
                                                <path
                                                    d="M18.19 17.75H7.54C6.55 17.75 5.6 17.33 4.93 16.6C4.26 15.87 3.92001 14.89 4.00001 13.9L4.83001 3.94001C4.86001 3.63001 4.75 3.33001 4.54 3.10001C4.33 2.87001 4.04 2.75 3.73 2.75H2C1.59 2.75 1.25 2.41 1.25 2C1.25 1.59 1.59 1.25 2 1.25H3.74001C4.47001 1.25 5.16 1.56 5.65 2.09C5.92 2.39 6.12 2.74001 6.23 3.13001H18.72C19.73 3.13001 20.66 3.53001 21.34 4.25001C22.01 4.98001 22.35 5.93001 22.27 6.94001L21.73 14.44C21.62 16.27 20.02 17.75 18.19 17.75ZM6.28001 4.62L5.50001 14.02C5.45001 14.6 5.64001 15.15 6.03001 15.58C6.42001 16.01 6.96 16.24 7.54 16.24H18.19C19.23 16.24 20.17 15.36 20.25 14.32L20.79 6.82001C20.83 6.23001 20.64 5.67001 20.25 5.26001C19.86 4.84001 19.32 4.60999 18.73 4.60999H6.28001L6.28001 4.62Z"
                                                    fill="black" />
                                                <path
                                                    d="M16.25 22.75C15.15 22.75 14.25 21.85 14.25 20.75C14.25 19.65 15.15 18.75 16.25 18.75C17.35 18.75 18.25 19.65 18.25 20.75C18.25 21.85 17.35 22.75 16.25 22.75ZM16.25 20.25C15.97 20.25 15.75 20.47 15.75 20.75C15.75 21.03 15.97 21.25 16.25 21.25C16.53 21.25 16.75 21.03 16.75 20.75C16.75 20.47 16.53 20.25 16.25 20.25Z"
                                                    fill="black" />
                                                <path
                                                    d="M8.25 22.75C7.15 22.75 6.25 21.85 6.25 20.75C6.25 19.65 7.15 18.75 8.25 18.75C9.35 18.75 10.25 19.65 10.25 20.75C10.25 21.85 9.35 22.75 8.25 22.75ZM8.25 20.25C7.97 20.25 7.75 20.47 7.75 20.75C7.75 21.03 7.97 21.25 8.25 21.25C8.53 21.25 8.75 21.03 8.75 20.75C8.75 20.47 8.53 20.25 8.25 20.25Z"
                                                    fill="black" />
                                                <path
                                                    d="M21 8.75H9C8.59 8.75 8.25 8.41 8.25 8C8.25 7.59 8.59 7.25 9 7.25H21C21.41 7.25 21.75 7.59 21.75 8C21.75 8.41 21.41 8.75 21 8.75Z"
                                                    fill="black" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_10_6154">
                                                    <rect width="24" height="24" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <span class="md:hidden">Cart</span>
                                        <span
                                            class="absolute w-3.5 h-3.5 flex items-center justify-center text-white bg-red-500 rounded-full text-2xs"
                                            style="top: 5px; right: 5px;">
                                            {{ session('cartItemCount', 0) }}
                                        </span>
                                    </a>
                                </li>
                                <li class="relative">
                                    <a href="./notfictions.html"
                                        class="flex items-center gap-2 p-2 shadow-sm rounded-lg bg-white"
                                        aria-current="page">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_10_6148)">
                                                <path
                                                    d="M12.02 20.53C9.68999 20.53 7.35999 20.16 5.14999 19.42C4.30999 19.13 3.66999 18.54 3.38999 17.77C3.09999 17 3.19999 16.15 3.65999 15.39L4.80999 13.48C5.04999 13.08 5.26999 12.28 5.26999 11.81V8.92004C5.26999 5.20004 8.29999 2.17004 12.02 2.17004C15.74 2.17004 18.77 5.20004 18.77 8.92004V11.81C18.77 12.27 18.99 13.08 19.23 13.49L20.37 15.39C20.8 16.11 20.88 16.98 20.59 17.77C20.3 18.56 19.67 19.16 18.88 19.42C16.68 20.16 14.35 20.53 12.02 20.53ZM12.02 3.67004C9.12999 3.67004 6.76999 6.02004 6.76999 8.92004V11.81C6.76999 12.54 6.46999 13.62 6.09999 14.25L4.94999 16.16C4.72999 16.53 4.66999 16.92 4.79999 17.25C4.91999 17.59 5.21999 17.85 5.62999 17.99C9.80999 19.39 14.24 19.39 18.42 17.99C18.78 17.87 19.06 17.6 19.19 17.24C19.32 16.88 19.29 16.49 19.09 16.16L17.94 14.25C17.56 13.6 17.27 12.53 17.27 11.8V8.92004C17.27 6.02004 14.92 3.67004 12.02 3.67004Z"
                                                    fill="black" />
                                                <path
                                                    d="M13.88 3.94005C13.81 3.94005 13.74 3.93005 13.67 3.91005C13.38 3.83005 13.1 3.77005 12.83 3.73005C11.98 3.62005 11.16 3.68005 10.39 3.91005C10.11 4.00005 9.80999 3.91005 9.61999 3.70005C9.42999 3.49005 9.36999 3.19005 9.47999 2.92005C9.88999 1.87005 10.89 1.18005 12.03 1.18005C13.17 1.18005 14.17 1.86005 14.58 2.92005C14.68 3.19005 14.63 3.49005 14.44 3.70005C14.29 3.86005 14.08 3.94005 13.88 3.94005Z"
                                                    fill="black" />
                                                <path
                                                    d="M12.02 22.8101C11.03 22.8101 10.07 22.4101 9.37002 21.7101C8.67002 21.0101 8.27002 20.0501 8.27002 19.0601H9.77002C9.77002 19.6501 10.01 20.2301 10.43 20.6501C10.85 21.0701 11.43 21.3101 12.02 21.3101C13.26 21.3101 14.27 20.3001 14.27 19.0601H15.77C15.77 21.1301 14.09 22.8101 12.02 22.8101Z"
                                                    fill="black" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_10_6148">
                                                    <rect width="24" height="24" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <span class="md:hidden">Notifications</span>
                                        <span
                                            class="absolute w-3.5 h-3.5 flex items-center justify-center text-white bg-red-500 rounded-full text-2xs"
                                            style="top: 5px;right: 5px;">
                                            3
                                        </span>
                                    </a>
                                </li>
                                <li class="relative">
                                    @auth
                                        <a href="#"
                                            class="flex items-center gap-2 py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-custom-blue md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                                            <div
                                                class="rounded-full w-10 h-10 flex items-center justify-center {{ Auth::user()->photo ? '' : 'bg-gray-200' }}">
                                                <img class=" {{ Auth::user()->photo ? 'h-8 w-8' : 'h-5 w-5' }} rounded-full object-cover"
                                                    src="{{ Auth::user()->photo ? asset('storage/' . Auth::user()->photo) : asset('assets/images/Icon feather-user(1).svg') }}"
                                                    alt="User Image">
                                            </div>
                                            <span
                                                class="text-md text-gray-500 font-normal">{{ Auth::user()->name }}</span>
                                        </a>
                                    @else
                                        <a href="#"
                                            class="flex items-center gap-2 py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-custom-blue md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                                            <div class="rounded-full w-9 h-9 bg-gray-200 flex items-center justify-center">
                                                <img class="w-5 h-5 rounded-full object-cover"
                                                    src="{{ asset('assets/images/Icon feather-user(1).svg') }}"
                                                    alt="User Image">
                                            </div>
                                            <span class="text-md text-gray-500 font-normal">UserName</span>
                                        </a>
                                    @endauth


                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

        <!-- === End Navigation === -->

        <!-- Dynamic Toast -->
        @if (session('success') || session('error') || session('warning'))
            @php
                $message = session('success') ?? (session('error') ?? session('warning'));
                $messageType = session('success') ? 'success' : (session('error') ? 'error' : 'warning');
                $bgColor =
                    $messageType === 'success'
                        ? 'bg-green-100'
                        : ($messageType === 'error'
                            ? 'bg-red-100'
                            : 'bg-orange-50');
                $textColor =
                    $messageType === 'success'
                        ? 'text-green-500'
                        : ($messageType === 'error'
                            ? 'text-red-500'
                            : 'text-orange-500');
                $icon =
                    $messageType === 'success'
                        ? 'sucsses.svg'
                        : ($messageType === 'error'
                            ? 'wrong.svg'
                            : 'warning.svg');
                $messageTitle =
                    $messageType === 'success' ? 'Success' : ($messageType === 'error' ? 'Error!' : 'Oops!');
            @endphp

            <div id="toast-message"
                style="position: absolute; top: 80px; right: 20px; z-index: 9999; transform: translateX(100%);"
                class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-xl shadow-sm border border-gray-50 transition-transform duration-500 ease-in-out"
                role="alert">
                <div
                    class="inline-flex items-center justify-center flex-shrink-0 w-10 h-10 {{ $textColor }} {{ $bgColor }} rounded-full">
                    <img class="w-5 h-5" src="{{ asset('assets/images/' . $icon) }}"
                        alt="{{ $messageTitle }} Icon">
                    <span class="sr-only">{{ $messageTitle }} icon</span>
                </div>
                <div class="ms-3 text-sm font-normal">
                    <p class="{{ $textColor }} text-sm font-medium">{{ $messageTitle }}</p>
                    <span class="text-gray-500 text-xs font-normal">{{ $message }}</span>
                </div>
                <button type="button"
                    class="ms-auto -mx-3 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8"
                    aria-label="Close" onclick="this.parentElement.style.display='none'">
                    <span class="sr-only">Close</span>
                    <img class="w-3 h-3" src="{{ asset('assets/images/delete.svg') }}" alt="Close Icon">
                </button>
            </div>


        @endif



        @yield('content')










    </div>
    <!-- end all content -->




    <!-- scripts assets -->
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- === End jQuery === -->

    <!-- === Flowbite JS === -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <!-- === End Flowbite JS === -->

    <!-- === Custom JS === -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toast = document.getElementById('toast-message');
            setTimeout(() => {
                toast.style.transform = 'translateX(0)';
            }, 100);
            setTimeout(() => {
                toast.style.opacity = '0';
                toast.style.transform = 'translateX(100%)';
            }, 3000);
            setTimeout(() => {
                toast.remove();
            }, 4500);
        });
    </script>
    @yield('js')

</body>

</html>
