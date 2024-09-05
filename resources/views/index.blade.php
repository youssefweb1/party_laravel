@extends('layouts.app')

@section('content')
    <!-- main -->
    <main>
        <div class="sm:ml-64 mlcustom">
            <div class=" px-4 pt-2.5 mt-3 ">

                <!-- first row in website -->
                <section>

                    <!--  mobile view only  -->
                    <form class="flex items-center w-full  sm:hidden flex mb-5">
                        <label for="voice-search" class="sr-only">Search</label>
                        <div class="relative w-full ">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">

                                <img src="assets/images/search-normal.svg" class="w-4 h-4" alt="" srcset="">
                            </div>
                            <input type="text" id="voice-search"
                                class="bg-gray-50 border-none shadow-sm text-gray-500 bg-white text-sm rounded-lg block w-full ps-10 p-2.5 placeholder-gray-300 outline-none focus:ring-0"
                                placeholder="Search">
                            <button type="button" class="absolute inset-y-0 end-0 flex items-center pe-3">
                                <img src="assets/images/sort.svg" class="w-4 h-4" alt="" srcset="">
                            </button>
                        </div>

                    </form>

                    <!-- first row in website -->
                    <div class="custoumres flex flex-col-reverse sm:flex-row items-start sm:gap-6 justify-between">
                        <div
                            class="gradient-box sm:w-2/3 rounded-2xl h-auto flex flex-row items-center justify-between px-4 py-3  gap-6 ">
                            <div class="left flex flex-col gap-3 items-start w-auto ">
                                <p class="text-white text-xl md:text-2xl font-semibold">
                                    Get Up To 75%
                                </p>
                                <span class="text-white text-xs md:text-sm font-normal">
                                    Fusce nec massa accumsan, elementum turpis sed, commodo massa. Pellentesque et
                                    nulla
                                    tellus.
                                </span>
                            </div>
                            <div class="right flex justify-center items-center w-auto">
                                <img src="assets/images/Flash Sale Shop Now.svg" alt="Flash Sale"
                                    class="w-28 md:w-32 max-w-xs">
                            </div>
                        </div>

                        <div class="top-cat">
                            <p class="text-gray-500 hover:text-gray-900 text-sm text-start">
                                Top Categories
                            </p>

                            <!-- Owl Carousel HTML Structure -->
                            <div class="owl-carousel owl-theme mt-4">
                                @foreach ($categories as $category)
                                    <div class="item">
                                        <div
                                            class="w-full h-24 rounded-lg border border-gray-300 flex flex-col gap-2 justify-center items-center">
                                            {{-- <img src="{{ asset('storage/' . $category->photo) }}" class="w-6 h-9"
                                                alt="{{ $category->title }}" /> --}}
                                            <span class="text-gray-500 font-normal text-sm">{{ $category->title }}</span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div>

                </section>

            </div>

            <!-- end first row in website -->


            <!-- second row in website -->
            <section class="ms-5 pr-4">

                <h2 class="text-xl text-gray-800 font-semibold my-4">Trends this week </h2>

                <div class="wpro">

                    <div class="mb-4 grid gap-2 grid-cols-2  md:mb-8 md:grid-cols-3 xl:grid-cols-4 wiiid sm:w-2/3 ">

                        @foreach ($products as $product)
                            <div class="rounded-lg bg-white py-0 shadow-sm">
                                <div class="w-full relative">
                                    {{-- Product Wishlist Icon --}}
                                    <form action="{{ route('wishlist.toggle', $product->id) }}" method="POST"
                                        class="relative">
                                        <img class="w-full p-2" src="{{ asset('assets/' . $product->photo) }}"
                                            alt="{{ $product->title }}" />
                                        @csrf

                                        {{-- Check if the product is in the wishlist --}}
                                        @php
                                            $isInWishlist =
                                                auth()->check() &&
                                                auth()
                                                    ->user()
                                                    ->wishlist()
                                                    ->where('product_id', $product->id)
                                                    ->exists();
                                        @endphp

                                        <button type="submit"
                                            class="absolute top-5 right-5 rounded-full hover:bg-red-400 duration-300 flex items-center justify-center w-8 h-8 bg-white shadow-md">
                                            @if ($isInWishlist)
                                                {{-- Icon for removing from wishlist --}}
                                                <img class="w-6 h-6 p-1" src="{{ asset('assets/images/Vector2.svg') }}"
                                                    alt="Remove from wishlist">
                                            @else
                                                {{-- Icon for adding to wishlist --}}
                                                <img class="w-6 h-6 p-1" src="{{ asset('assets/images/Vector2.svg') }}"
                                                    alt="Add to wishlist">
                                            @endif
                                        </button>
                                    </form>
                                </div>
                                <div class="px-2 pb-0 block">
                                    <a href="{{ route('products.show', $product->id) }}"
                                        class="text-md font-semibold text-gray-700 hover:underline dark:text-white">
                                        {{ $product->title }}
                                    </a>
                                    <div class="flex items-center justify-between my-1">
                                        <div class="price text-custom-orange font-semibold">${{ $product->price }}</div>
                                        <div class="not text-gray-300 text-xs">{{ $product->model_number }}</div>
                                    </div>
                                    <div class="buy flex items-center justify-between">
                                        <!-- زر الأيقونة الذي يعمل كزر "إضافة إلى السلة" -->
                                        <div
                                            class="icon border-custom-orange w-9 h-9 rounded-md flex items-center justify-center hover:bg-gray-200 duration:300">
                                            <form action="{{ route('cart.add') }}" method="POST"
                                                class="flex items-center justify-center">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                <button type="submit" class="w-9 h-9 flex items-center justify-center">
                                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_10_6154)">
                                                            <path
                                                                d="M18.19 17.75H7.54C6.55 17.75 5.6 17.33 4.93 16.6C4.26 15.87 3.92001 14.89 4.00001 13.9L4.83001 3.94001C4.86001 3.63001 4.75 3.33001 4.54 3.10001C4.33 2.87001 4.04 2.75 3.73 2.75H2C1.59 2.75 1.25 2.41 1.25 2C1.25 1.59 1.59 1.25 2 1.25H3.74001C4.47001 1.25 5.16 1.56 5.65 2.09C5.92 2.39 6.12 2.74001 6.23 3.13001H18.72C19.73 3.13001 20.66 3.53001 21.34 4.25001C22.01 4.98001 22.35 5.93001 22.27 6.94001L21.73 14.44C21.62 16.27 20.02 17.75 18.19 17.75ZM6.28001 4.62L5.50001 14.02C5.45001 14.6 5.64001 15.15 6.03001 15.58C6.42001 16.01 6.96 16.24 7.54 16.24H18.19C19.23 16.24 20.17 15.36 20.25 14.32L20.79 6.82001C20.83 6.23001 20.64 5.67001 20.25 5.26001C19.86 4.84001 19.32 4.60999 18.73 4.60999H6.28001L6.28001 4.62Z"
                                                                fill="#f25510" />
                                                            <path
                                                                d="M16.25 22.75C15.15 22.75 14.25 21.85 14.25 20.75C14.25 19.65 15.15 18.75 16.25 18.75C17.35 18.75 18.25 19.65 18.25 20.75C18.25 21.85 17.35 22.75 16.25 22.75ZM16.25 20.25C15.97 20.25 15.75 20.47 15.75 20.75C15.75 21.03 15.97 21.25 16.25 21.25C16.53 21.25 16.75 21.03 16.75 20.75C16.75 20.47 16.53 20.25 16.25 20.25Z"
                                                                fill="#f25510" />
                                                            <path
                                                                d="M8.25 22.75C7.15 22.75 6.25 21.85 6.25 20.75C6.25 19.65 7.15 18.75 8.25 18.75C9.35 18.75 10.25 19.65 10.25 20.75C10.25 21.85 9.35 22.75 8.25 22.75ZM8.25 20.25C7.97 20.25 7.75 20.47 7.75 20.75C7.75 21.03 7.97 21.25 8.25 21.25C8.53 21.25 8.75 21.03 8.75 20.75C8.75 20.47 8.53 20.25 8.25 20.25Z"
                                                                fill="#f25510" />
                                                            <path
                                                                d="M21 8.75H9C8.59 8.75 8.25 8.41 8.25 8C8.25 7.59 8.59 7.25 9 7.25H21C21.41 7.25 21.75 7.59 21.75 8C21.75 8.41 21.41 8.75 21 8.75Z"
                                                                fill="#f25510" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_10_6154">
                                                                <rect width="24" height="24" fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                        <!-- زر "إضافة إلى السلة" -->
                                        <div class="button">
                                            <form action="{{ route('cart.add') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                <button type="submit"
                                                    class="focus:outline-none mt-2 text-white bg-custom-orange hover:bg-orange-600 focus:ring-6 focus:ring-custom-orange font-medium rounded-lg text-sm px-3 md:px-6 py-3 mb-2 shadow-custom">
                                                    Add to Cart
                                                </button>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        @endforeach


                    </div>
                    <!-- Wishlist Section -->
                    <div class="wish">
                        <p class="text-gray-500 hover:text-gray-900 text-sm text-start">
                            Your wishlist
                        </p>

                        <div class="flex flex-col gap-3 mt-5">
                            @forelse ($wishlistItems as $item)
                                <div
                                    class="item-fv bg-white shadow-sm rounded-lg p-1 py-2 h-auto w-full flex items-center justify-between gap-3">
                                    <div class="img">
                                        <img class="sm:w-24 rounded-lg"
                                            src="{{ asset('assets/' . $item->product->photo) }}" alt="">
                                    </div>
                                    <div class="content flex flex-col item-start me-3">
                                        <p class="text-gray-500 text-xs font-medium">{{ $item->product->title }}</p>
                                        <div class="flex items-center justify-between my-3">
                                            <div class="price text-xs text-custom-blue font-semibold">
                                                {{ $item->product->price }} USD</div>

                                            <div class="flex items-center ">
                                                <svg class="w-3 h-3 text-yellow-300 me-1" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 22 20">
                                                    <path
                                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                </svg>

                                                <p class=" text-xs font-normal text-gray-500 ">4.8 (225)</p>

                                            </div>
                                        </div>
                                        <div class="buy flex items-center justify-between gap-3">
                                            <!-- Remove from wishlist -->
                                            <form action="{{ route('wishlist.remove', $item->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="icon border hover:bg-gray-200 duration-300 w-8 h-8 rounded-md flex items-center justify-center">
                                                    <img width="17" height="17"
                                                        src="{{ asset('assets/images/trash.svg') }}" alt="">
                                                </button>
                                            </form>
                                            <!-- Add to cart -->
                                            <form action="{{ route('cart.add') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                <button type="submit"
                                                    class="border-custom-blue text-custom-blue rounded-lg px-2 text-xs py-2 hover:bg-custom-blue hover:text-white duration-300">
                                                    Add To Cart
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <p class="text-custom-orange text-sm">Your wishlist is empty.</p>
                            @endforelse


                            <div class="appdown">
                                <div style="height: 147.3px;"
                                    class="bodyapp bg-custom-blue w-full  rounded-2xl flex items-start gap-3">
                                    <div class="img m-0 p-0">
                                        <img height="150" width="110" src="{{ asset('assets/images/app.svg') }}"
                                            alt="">
                                    </div>
                                    <div class="content mt-4 flex flex-col items-start justify-between h-full">
                                        <h2 class="text-white font-bold">Download app</h2>
                                        <span class="text-white text-xs mt-2">Shopping anywhere any time</span>
                                        <button type="button"
                                            class="py-2.5 mt-2 mb-6 px-11 me-2  text-sm border border-white font-medium text-white rounded-lg hover:bg-white hover:text-gray-700 duration-300">
                                            Download
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </section>
            <!-- second row in website-->

        </div>
        </div>
    </main>
    <!-- end main -->
@endsection('content')


@section('js')
    <!-- === Carousel === -->
    <script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>
    <script src="{{ asset('assets/js/carousel.js') }}"></script>
@endsection
