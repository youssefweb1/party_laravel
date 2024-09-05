@extends('layouts.app')

@section('content')
    <!-- main -->
    <main>
        <div class="sm:ml-64 mlcustom">
            <div class="px-4 pt-2.5 mt-3 flex items-start allmaindivs">

         <!-- middle -->
<div class="middle bg-white shadow-sm h-auto me-5 rounded-lg shadow-sm p-4">
    <div class="titles flex items-center justify-between">
        <h2 class="text-xl font-semibold text-gray-900 sm:text-2xl">Shopping Cart</h2>

        <!-- Remove All Items Form -->
        <form action="{{ route('cart.clear') }}" method="POST">
            @csrf
            <button type="submit" class="text-sm text-gray-400 flex items-center gap-1 hover:text-gray-700">
                <img class="w-3.5" src="{{ asset('assets/images/Icon feather-trash-2.svg') }}" alt="">
                Remove all items
            </button>
        </form>
    </div>

    @if ($cartItems->isEmpty())
        <!-- رسالة إذا كانت السلة فارغة -->
        <div class="text-center py-6">
            <p class="text-gray-600 text-lg font-semibold">Your cart is empty</p>
            <p class="text-gray-500">You have no items in your shopping cart.</p>
        </div>
    @else
        <div class="mt-6 sm:mt-8 md:gap-6 lg:flex lg:items-start xl:gap-8">
            <div class="mx-auto w-full flex-none lg:max-w-2xl xl:max-w-4xl">
                <div class="space-y-6">
                    <!-- Cart Item -->
                    @foreach ($cartItems as $item)
                        <div class="border-t border-gray-200 bg-white p-3 md:p-4">
                            <div class="flex items-center justify-between gap-2 space-y-0">
                                <a href="#">
                                    <img class="h-20" src="{{ asset('assets/' . $item->product->photo) }}" alt="Product Image" />
                                </a>

                                <div class="w-full min-w-0 flex-1 max-w-md titleproh ms-3">
                                    <span class="text-base text-sm text-gray-600 hover:underline">
                                        {{ $item->product->title }}
                                    </span>
                                    <br>
                                    <span class="text-base text-xs text-gray-600 hover:underline">
                                        {{ $item->product->description }}
                                    </span>
                                </div>

                                <div class="text-center w-32">
                                    <p class="text-base font-semibold text-custom-orange">
                                        {{ $item->product->price }} USD
                                    </p>
                                </div>

                                <!-- Update Quantity Form -->
                                <form action="{{ route('cart.update', $item->id) }}" method="POST" class="flex items-center border border-gray-200 rounded-xl px-0.5">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" name="action" value="decrement" class="inline-flex h-8 w-8 shrink-0 items-center justify-center rounded-xl border border-gray-200 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-100">
                                        <svg class="h-3 w-3 text-gray-900 font-bold" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                                        </svg>
                                    </button>
                                    <input type="text" name="quantity" class="w-10 shrink-0 border-0 bg-transparent text-center text-sm font-medium text-gray-900 focus:outline-none focus:ring-0" value="{{ $item->quantity }}" required />
                                    <button type="submit" name="action" value="increment" class="inline-flex h-8 w-8 shrink-0 items-center justify-center rounded-xl border border-gray-200 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-100">
                                        <svg class="h-2.5 w-2.5 text-gray-900 font-bold" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                                        </svg>
                                    </button>
                                </form>

                                <!-- Delete Item Form -->
                                <form action="{{ route('cart.delete', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-800 ms-5">
                                        <img src="{{ asset('assets/images/delete.svg') }}" alt="">
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
</div>


                <!-- rightsec  -->
                <div class="rightsec h-auto ms-5 bg-white rounded-lg pt-5 shadow-sm p-2">

                    <form action="{{ route('apply.coupon') }}" method="POST">
                        @csrf
                        <div>
                            <div class="flex max-w-md items-center">
                                <input type="text" name="voucher"
                                    class="block w-full rounded-l-lg bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm"
                                    placeholder="Promo Code" required />
                                <button type="submit"
                                    class="flex items-center justify-center rounded-r-lg bg-custom-orange px-5 py-2.5 text-sm font-medium text-white shadow-custom hover:bg-orange-700 focus:outline-none focus:ring-none">
                                    Apply
                                </button>
                            </div>
                        </div>
                    </form>
                    <div>
                        <div class="flex items-start justify-between mt-10">
                            <span class="font-medium text-gray-600 text-sm">Items subtotal :</span>
                            <span class="font-medium text-gray-600 text-sm">{{ $subtotal }} USD</span>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-start justify-between mt-3">
                            <span class="font-medium text-gray-600 text-sm">You are saving :</span>
                            <span class="font-medium text-custom-orange text-sm">{{ $discount }} USD</span>
                        </div>
                    </div>

                    <hr class="my-9">
                    <div>
                        <div class="flex items-start justify-between mt-3">
                            <span class="font-medium text-gray-600 text-sm">Total:</span>
                            <span class="font-medium text-custom-orange text-sm">{{ $total }} USD</span>
                        </div>
                    </div>

                    <div class="flex items-start justify-between mt-10 mb-5">
                        {{-- <a href="{{ route('checkout') }}" --}}
                        {{-- class="flex items-center justify-center rounded-full bg-custom-orange px-5 py-3 text-md font-medium text-white shadow-custom hover:bg-orange-700 focus:outline-none focus:ring-none"> --}}
                        {{-- Proceed to checkظout --}}
                        </a>
                    </div>
                </div>


            </div>
        </div>
    </main>
    <!-- end main -->
@endsection
