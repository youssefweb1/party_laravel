@extends('layouts.app')

@section('content')
    <!-- main -->
    <main>
        <div class="sm:ml-64 mlcustom">
            <div class=" px-4 pt-2.5 mt-3 flex items-start allmaindivs ">

                <!-- middle -->
                <div class="middle bg-white shadow-sm h-auto me-5 rounded-lg shadow-sm">

                    <div class="py-6">

                        <!-- Breadcrumbs Wrapper -->
                        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                            <!-- Breadcrumb Navigation -->
                            <div class="flex items-center space-x-2 text-gray-400 text-sm">

                                <!-- Home Link -->
                                <a href="{{ route('home') }}" class="hover:underline hover:text-gray-600">Home</a>

                                <!-- Separator -->
                                <span>
                                    <svg class="h-5 w-5 leading-none text-gray-300" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7" />
                                    </svg>
                                </span>

                                <!-- Electronics Link -->
                                <a href="" class="hover:underline hover:text-gray-600 text-custom-orange">Product</a>


                            </div>
                            <!-- ./ Breadcrumb Navigation -->

                        </div>
                        <!-- end Breadcrumbs Wrapper -->

                        <!-- Product Section Wrapper -->
                        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6">

                            <!-- Product Details Container -->
                            <div class="flex flex-col md:flex-row -mx-4 prodt">

                                <!-- Image Gallery Section -->
                                <div class="md:flex-1 px-4">


                                    <!-- Main Image Display -->
                                    <div class="h-64 rounded-lg bg-gray-100 mb-4">
                                        <!-- Dynamic Image -->
                                        <div
                                            class="h-64 rounded-lg bg-gray-100 mb-4 flex items-center justify-center w-full">
                                            <img src="{{ asset('assets/' . $product->photo) }}" alt="Current Image"
                                                class="object-cover w-full h-full rounded-lg">
                                        </div>
                                    </div>
                                    <!-- ./ Main Image Display -->


                                </div>


                                <!-- Product Information Section -->
                                <div class="md:flex-1 px-4">

                                    <!-- Product Title -->
                                    <h2
                                        class="mb-2 leading-tight tracking-tight font-sdmibold text-gray-600 text-lg md:text-3xl">
                                        {{ $product->title }}
                                    </h2>

                                    <span class="mb-2 leading-tight tracking-tight font-sdmibold text-gray-400 text-sm ">
                                        {{ $product->description }}
                                    </span>

                                    <!-- Product Details -->
                                    </h2>

                                    <!-- Divider -->
                                    <hr class="h-px my-6 bg-gray-200 border-0">

                                    <!-- Product Details -->
                                    <div class="flex flex-col space-y-4">

                                        <!-- Rating Section -->
                                        <div class="flex">
                                            <div class="font-semibold text-gray-700 w-40 text-sm">Rating:</div>
                                            <div class="text-gray-500 flex text-sm items-center gap-2 justify-center">
                                                <div class="flex items-center">
                                                    <!-- Star Icons -->
                                                    <svg class="w-3 h-3 text-yellow-300" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                        viewBox="0 0 22 20">
                                                        <path
                                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                    </svg>
                                                    <svg class="w-3 h-3 text-yellow-300" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                        viewBox="0 0 22 20">
                                                        <path
                                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                    </svg>
                                                    <svg class="w-3 h-3 text-yellow-300" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                        viewBox="0 0 22 20">
                                                        <path
                                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                    </svg>
                                                    <svg class="w-3 h-3 text-yellow-300" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                        viewBox="0 0 22 20">
                                                        <path
                                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                    </svg>
                                                    <svg class="w-3 h-3 text-gray-300 dark:text-gray-500" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                        viewBox="0 0 22 20">
                                                        <path
                                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                    </svg>
                                                </div>
                                                (4.9)
                                            </div>
                                        </div>
                                        <!-- ./ Rating Section -->

                                        <!-- Color Information -->
                                        <!-- Color Information -->
                                        <div class="flex">
                                            <div class="font-semibold text-gray-700 w-40 text-sm">Color:</div>
                                            <div class="text-gray-500 text-sm">{{ $product->color }}</div>
                                        </div>

                                        <!-- Material Information -->
                                        <div class="flex">
                                            <div class="font-semibold text-gray-700 w-40 text-sm">Material:</div>
                                            <div class="text-gray-500 text-sm">{{ $product->material }}</div>
                                        </div>

                                        <!-- Stock Information -->
                                        <div class="flex">
                                            <div class="font-semibold text-gray-700 w-40 text-sm">Stock:</div>
                                            <div class="text-gray-500 text-sm">{{ $product->stock }}</div>
                                        </div>

                                        <!-- Brand Name -->
                                        <div class="flex">
                                            <div class="font-semibold text-gray-700 w-40 text-sm">Brand Name:</div>
                                            <div class="text-gray-500 text-sm">
                                                {{ $product->brand ? $product->brand->title : 'Not Available' }}</div>
                                        </div>

                                        <!-- Item Dimensions -->
                                        <div class="flex">
                                            <div class="font-semibold text-gray-700 w-40 text-sm">Item Dimensions:</div>
                                            <div class="text-gray-500 text-sm">{{ $product->size }}</div>
                                        </div>

                                        <!-- Item Weight -->
                                        <div class="flex">
                                            <div class="font-semibold text-gray-700 w-40 text-sm">Item Weight:</div>
                                            <div class="text-gray-500 text-sm">{{ $product->product_weight }}</div>
                                        </div>

                                    </div>
                                    <!-- ./ Product Details -->

                                </div>
                                <!-- ./ Product Information Section -->

                            </div>
                            <!-- ./ Product Details Container -->

                        </div>
                        <!-- end Product Section Wrapper -->

                        <!-- About and Review Section -->
                        <div class="pt-8 bg-white antialiased px-4">
                            <hr class="h-px mb-6 bg-gray-200 border-0">

                            <div class="flex justify-between max-w-screen-xl">
                                <!-- About Item Section -->
                                <article class="w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue">
                                    <h1 class="mb-4 font-extrabold leading-tight text-gray-900 lg:mb-6 text-lg">
                                        About Item
                                    </h1>
                                    <p class="lead text-gray-500 text-sm leading-relaxed">
                                        {{ $product->summary }}
                                    </p>
                                </article>
                            </div>

                            <!-- right sec -->
                            <div class="rightsec rightsec22 h-auto ms-5 bg-white rounded-lg shadow-sm p-2 px-3">
                                <!-- Price Section -->
                                <div>
                                    <div class="flex items-start justify-between mt-3 w-full">
                                        <span class="font-medium text-gray-600 text-sm">Price :</span>
                                        <span class="font-bold text-gray-600 text-sm"> {{ $product->price }}
                                            USD</span>
                                    </div>
                                </div>

                                <!-- Discount Section -->
                                <div>
                                    <div class="flex items-start justify-between mt-3">
                                        <span class="font-medium text-gray-600 text-sm">Discount: </span>
                                        <span class="font-medium text-custom-orange text-sm">25%</span>
                                    </div>
                                </div>

                                <!-- Divider -->
                                <hr class="my-7">


                                <!-- Total Section -->
                                <div>
                                    <div class="flex items-start justify-between mt-3">
                                        <span class="font-medium text-gray-600 text-sm">Total: </span>
                                        <span class="font-bold text-custom-orange text-sm">1950 USD</span>
                                    </div>
                                </div>

                                <!-- Delivery Info -->
                                <div>
                                    <p class="text-sm text-gray-400 text-center mt-5">
                                        Free Delivery by Thu, 29 Dec
                                    </p>
                                </div>

                                <!-- Wishlist Button -->
                                <button type="button"
                                    class="py-2 w-full hover-blue me-2 mb-2 text-sm border-custom-blue font-medium bg-white rounded-full mt-10 hover:bg-gray-50 text-custom-blue">
                                    Add to wishlist
                                </button>

                                <!-- Add to Cart Button -->
                                <button type="button"
                                    class="flex items-center justify-center w-full mt-4 rounded-full bg-custom-orange px-5 py-2 mb-12 text-md font-medium text-white shadow-custom hover:bg-orange-700 focus:outline-none">
                                    Add to cart
                                </button>

                            </div>
                            <!-- end right -->

                            <!-- Review Section -->
                            <div class="review">
                                <div class="bg-white py-8 antialiased dark:bg-gray-900 md:py-16">
                                    <div class="mx-auto">

                                        <div class="flex items-center justify-between">
                                            <h2 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                Reviews
                                            </h2>
                                            <button type="button" id="defaultModalButton"
                                                data-modal-target="defaultModal" data-modal-toggle="defaultModal"
                                                class="py-2 w-32 hover-blue text-sm border-custom-blue font-medium rounded-full hover:text-white text-custom-blue">
                                                Add review
                                            </button>

                                            <!-- Modal -->
                                            <div id="defaultModal" tabindex="-1" aria-hidden="true"
                                                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                                                <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                                                    <!-- Modal content -->
                                                    <div
                                                        class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                                                        <!-- Modal header -->
                                                        <div
                                                            class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                                                            <h3
                                                                class="text-lg font-semibold text-gray-900 dark:text-white">
                                                                Add Review
                                                            </h3>
                                                            <button type="button"
                                                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                                data-modal-toggle="defaultModal">
                                                                <svg aria-hidden="true" class="w-5 h-5"
                                                                    fill="currentColor" viewBox="0 0 20 20"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd"
                                                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                        clip-rule="evenodd"></path>
                                                                </svg>
                                                                <span class="sr-only">Close modal</span>
                                                            </button>
                                                        </div>
                                                        <!-- Modal body -->
                                                        <form action="{{ route('reviews.store') }}" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="product_id"
                                                                value="{{ $product->id }}">
                                                            <div class="flex items-start flex-col gap-4 mb-4">
                                                                <div class="flex flex-col items-start gap-1">
                                                                    <span
                                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select
                                                                        Overall rating</span>
                                                                    <div class="rating">
                                                                        <input type="radio" name="rate"
                                                                            id="rating-5" value="5">
                                                                        <label for="rating-5"></label>
                                                                        <input type="radio" name="rate"
                                                                            id="rating-4" value="4">
                                                                        <label for="rating-4"></label>
                                                                        <input type="radio" name="rate"
                                                                            id="rating-3" value="3">
                                                                        <label for="rating-3"></label>
                                                                        <input type="radio" name="rate"
                                                                            id="rating-2" value="2">
                                                                        <label for="rating-2"></label>
                                                                        <input type="radio" name="rate"
                                                                            id="rating-1" value="1">
                                                                        <label for="rating-1"></label>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="sm:col-span-2 flex flex-col items-start gap-1 w-full mt-5">
                                                                    <span for="review"
                                                                        class="block mb-2 text-sm font-medium text-gray-900 text-start">Write
                                                                        a review</span>
                                                                    <textarea id="review" name="review" rows="4"
                                                                        class="block p-2.5 w-full h-36 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                                        placeholder="Write your review here"></textarea>
                                                                </div>
                                                                <div class="flex items-center justify-center w-full">
                                                                    <button type="submit"
                                                                        class="text-white mt-5 w-2/3 inline-flex items-center justify-center bg-custom-orange hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                                                        Submit
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end modal -->

                                        </div>











                                        <div class="mt-6 divide-y divide-gray-200">

                                            <!-- Check if there are reviews -->
                                            @if ($reviews->isEmpty())
                                                <div class="text-center my-5">
                                                    <p class="text-custom-orange text-sm font-semibold">
                                                        No comments yet
                                                    </p>
                                                </div>
                                            @else
                                                <!-- Display initial reviews -->
                                                @foreach ($initialReviews as $review)
                                                    <div class="gap-3 py-4 sm:flex sm:items-start mt-5">
                                                        <div class="shrink-0 space-y-2 w-full">
                                                            <div class="flex items-center gap-2">
                                                                <div
                                                                    class="rounded-full w-9 h-9 border-2 border-gray-300 flex items-center justify-center">
                                                                    <img class="w-4 h-4"
                                                                        src="{{ asset('assets/images/Icon feather-user(1).svg') }}"
                                                                        alt="">
                                                                </div>
                                                                <div class="flex flex-col items-start gap-1">
                                                                    <p class="text-xs text-gray-500 dark:text-white">
                                                                        {{ $review->user->name }}
                                                                    </p>
                                                                    <div class="flex items-center gap-0.5">
                                                                        @for ($i = 1; $i <= 5; $i++)
                                                                            <svg class="h-3 w-3 {{ $i <= $review->rate ? 'text-yellow-300' : 'text-gray-300' }}"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                fill="currentColor" viewBox="0 0 24 24">
                                                                                <path
                                                                                    d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                                                            </svg>
                                                                        @endfor
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mt-4 min-w-0 flex-1 space-y-4 sm:mt-0 w-full">
                                                                <p
                                                                    class="text-sm font-normal text-gray-500 dark:text-gray-400 ps-10">
                                                                    {{ $review->review }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach

                                                <!-- Display additional reviews (hidden by default) -->
                                                <div id="more-reviews" class="hidden">
                                                    @foreach ($moreReviews as $review)
                                                        <div class="gap-3 py-4 sm:flex sm:items-start mt-5">
                                                            <div class="shrink-0 space-y-2 w-full">
                                                                <div class="flex items-center gap-2">
                                                                    <div
                                                                        class="rounded-full w-9 h-9 border-2 border-gray-300 flex items-center justify-center">
                                                                        <img class="w-4 h-4"
                                                                            src="{{ asset('assets/images/Icon feather-user(1).svg') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="flex flex-col items-start gap-1">
                                                                        <p class="text-xs text-gray-500 dark:text-white">
                                                                            {{ $review->user->name }}
                                                                        </p>
                                                                        <div class="flex items-center gap-0.5">
                                                                            @for ($i = 1; $i <= 5; $i++)
                                                                                <svg class="h-3 w-3 {{ $i <= $review->rate ? 'text-yellow-300' : 'text-gray-300' }}"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    fill="currentColor"
                                                                                    viewBox="0 0 24 24">
                                                                                    <path
                                                                                        d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                                                                </svg>
                                                                            @endfor
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="mt-4 min-w-0 flex-1 space-y-4 sm:mt-0 w-full">
                                                                    <p
                                                                        class="text-sm font-normal text-gray-500 dark:text-gray-400 ps-10">
                                                                        {{ $review->review }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>

                                                <!-- Show all comments button -->
                                                @if ($reviews->count() > $initialReviewCount)
                                                    <div class="text-center mt-5">
                                                        <button id="show-all-reviews" type="button"
                                                            class="mt-5 text-custom-orange font-semibold text-sm hover:text-gray-500">
                                                            Show all comments
                                                            <span class="num-of-rev">({{ $reviews->count() }})</span>
                                                        </button>
                                                    </div>
                                                @endif

                                                <!-- JavaScript to toggle reviews -->
                                                <script>
                                                    document.getElementById('show-all-reviews').addEventListener('click', function() {
                                                        var moreReviews = document.getElementById('more-reviews');
                                                        var isHidden = moreReviews.classList.contains('hidden');

                                                        moreReviews.classList.toggle('hidden');
                                                        this.textContent = isHidden ?
                                                            `Show less comments` :
                                                            `Show all comments ({{ $reviews->count() }})`;
                                                    });
                                                </script>
                                            @endif





                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <!-- end middle -->

                <!-- Right Section for Product Details -->
                <div class="rightsec h-auto ms-5 bg-white rounded-lg shadow-sm p-4">
                    <!-- Price Section -->
                    <div class="flex items-center justify-between mt-3 w-full">
                        <span class="font-medium text-gray-600 text-sm">Price:</span>
                        <span class="font-bold text-gray-600 text-sm">
                            @if ($product->discount > 0)
                                <span class="line-through">{{ $product->price }} USD</span>
                                <span class="text-custom-orange">{{ $discountedPrice }} USD</span>
                            @else
                                {{ $product->price }} USD
                            @endif
                        </span>
                    </div>

                    <!-- Discount Section -->
                    @if ($product->discount > 0)
                        <div class="flex items-center justify-between mt-3">
                            <span class="font-medium text-gray-600 text-sm">Discount:</span>
                            <span class="font-medium text-custom-orange text-sm">{{ $product->discount }}%</span>
                        </div>
                    @endif

                    <!-- Divider -->
                    <hr class="my-7">

                    <!-- Quantity Input Section -->
                    <div class="flex flex-col items-center justify-between w-full">

                        <!-- Total Section -->
                        <div class="flex items-center justify-between w-full">
                            <span class="font-medium text-gray-600 text-sm">Total:</span>
                            <span class="font-bold text-custom-orange text-sm">{{ $discountedPrice }} USD</span>
                        </div>

                        <!-- Delivery Info -->
                        <div>
                            <p class="text-sm text-gray-400 text-center mt-5">
                                Free Delivery by Thu, 29 Dec
                            </p>
                        </div>



                        <form action="{{ route('wishlist.toggle', $product->id) }}" method="POST" class=" w-full">
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
                                class="py-2 w-full hover-blue me-2 mb-2 text-sm border-custom-blue font-medium bg-white rounded-full mt-10 hover:bg-gray-50 text-custom-blue">
                                {{ $isInWishlist ? 'Remove from wishlist' : 'Add to wishlist' }}
                            </button>
                        </form>


                        <!-- Add to cart -->
                        <form action="{{ route('cart.add') }}" method="POST" class=" w-full">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">

                            <!-- Add to Cart Button -->
                            <button type="submit"
                                class="flex items-center justify-center w-full mt-4 rounded-full bg-custom-orange px-5 py-2 mb-12 text-md font-medium text-white shadow-custom hover:bg-orange-700 focus:outline-none">
                                Add to cart
                            </button>
                        </form>






                    </div>
                </div>


            </div>

            <!-- same products -->
            <div class="samproducts bg-white w-4/3 h-auto mt-10 px-4 py-5 mx-4 shadow-sm">
                <div class="flex items-center justify-between">
                    <h2 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Similar products
                    </h2>
                    <div class="carousel-nav">
                        <button type="button" id="prevButton"
                            class="py-2 w-16 hover-blue text-sm border-custom-blue font-medium rounded-full hover:text-white text-custom-blue">
                            Prev
                        </button>
                        <button type="button" id="nextButton"
                            class="py-2 w-16 hover-blue text-sm border-custom-blue font-medium rounded-full hover:text-white text-custom-blue">
                            Next
                        </button>
                    </div>
                </div>

                <div class="owl-carousel owl-theme mt-10" id="productCarousel">
                    <!-- Your carousel items here -->

                    @foreach ($similarProducts as $product)
                        <div class="item">
                            <div class="rounded-lg bg-white py-0 shadow-sm">
                                <div class="w-full relative">
                                    <a href="{{ route('products.show', $product->id) }}">
                                        <img class="w-full p-2" src="{{ asset('assets/' . $product->photo) }}"
                                            alt="{{ $product->title }}" />
                                        <div
                                            class="absolute top-5 right-5 bg-white rounded-full hover:bg-red-400 duration-300 flex items-center justify-center w-8 h-8 bg-white shadow-md">
                                            <img class="w-6 h-6 p-1" src="{{ asset('assets/images/Vector2.svg') }}"
                                                alt="" />
                                        </div>
                                    </a>
                                </div>
                                <div class="px-2 pb-0 block">
                                    <a href="{{ route('products.show', $product->id) }}"
                                        class="text-md font-semibold text-gray-700 hover:underline dark:text-white">
                                        {{ $product->title }}
                                    </a>

                                    <div class="flex items-center justify-between my-1 pb-4">
                                        <div class="price text-custom-orange font-semibold">${{ $product->price }}</div>
                                        <div class="not text-gray-300 text-xs">
                                            {{ $product->model_number ?? 'Not Specified' }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>

            </div>

        </div>
    </main>
    <!-- end main -->
@endsection('content')

@section('js')
    <!-- === partial=== -->
    <script src='https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js'></script>
    <!-- === End partial  === -->
    <!-- === Carousel === -->
    <script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>
    <script src="assets/js/carousel.js"></script>
    <!-- === End Carousel === -->
    <!-- === Custom JS === -->
    <script src="assets/js/carousel_pro.js"></script>
    <!-- === End Custom JS === -->
@endsection
