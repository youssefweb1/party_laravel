@extends('layouts.app')
@section('content')
    <main>
        <div class="sm:ml-64 mlcustom">
            <div class=" px-4 pt-2.5 mt-3 flex items-start allmaindivs ">

                <div class="main-content bg-white  h-auto me-5 rounded-lg  p-4 w-screen">
                    <h2 class="text-xl font-semibold text-gray-900 sm:text-2xl ps-3">General Settings
                    </h2>

                    <div class="mb-4 border-b border-gray-200 mt-5">
                        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab"
                            data-tabs-toggle="#default-tab-content" role="tablist">
                            <li class="me-2" role="presentation">
                                <button
                                    class="inline-flex items-center p-4 border-b-2 rounded-t-lg tab-button text-custom-orange active"
                                    id="faq-tab" data-tabs-target="#faq" type="button" role="tab" aria-controls="faq"
                                    aria-selected="true">
                                    <i class="fas fa-info-circle me-2"></i> Information
                                </button>
                            </li>
                            <li class="me-2" role="presentation">
                                <button class="inline-flex items-center p-4 border-b-2 rounded-t-lg tab-button"
                                    id="privacy-policy-tab" data-tabs-target="#privacy-policy" type="button" role="tab"
                                    aria-controls="privacy-policy" aria-selected="false">
                                    <i class="fas fa-lock me-2"></i> Security
                                </button>
                            </li>

                            <li role="presentation">
                                <button class="inline-flex items-center p-4 border-b-2 rounded-t-lg tab-button"
                                    id="contact-us-tab" data-tabs-target="#contact-us" type="button" role="tab"
                                    aria-controls="contact-us" aria-selected="false">
                                    <i class="fas fa-bell me-2"></i> Notification
                                </button>
                            </li>
                        </ul>
                    </div>

                    <div id="default-tab-content">

                        @auth

                            <!-- general -->
                            <div class="hidden rounded-lg" id="faq" role="tabpanel" aria-labelledby="faq-tab">
                                <div class="w-full max-w-7xl ">
                                    <div
                                        class="profileuserimage flex items-center xs:justify-between sm:justify-start sm:gap-16 my-7">
                                        <li class="relative">
                                            <a href="#"
                                                class="flex items-center  ">
                                                <div class="w-12 h-12 flex items-center justify-start">
                                                    <img class="{{ $user->photo ? 'w-14 h-12 rounded-full' : 'w-12 h-12 p-2 rounded-full bg-gray-200' }}"
                                                        src="{{ $user->photo ? asset('storage/' . $user->photo) : asset('assets/images/Icon feather-user(1).svg') }}"
                                                        alt="User Image">
                                                </div>

                                                <span
                                                    class="text-lg text-gray-500 ps-2 font-semibold">{{ $user->name }}</span>
                                            </a>
                                        </li>

                                        <div class="gap-3 grid">
                                            <div class="grid gap-2">
                                                <div class="flex items-center justify-start">
                                                    <!-- Form to upload new picture -->
                                                    <form action="{{ route('profile.updateImage') }}" method="POST"
                                                        enctype="multipart/form-data" class="flex items-center gap-3">
                                                        @csrf
                                                        <input type="file" name="image" id="image" hidden>
                                                        <label for="image"
                                                            class="flex w-10 h-10 items-center justify-center bg-none rounded-full border-custom-orange-upload text-custom-orange text-xs font-semibold cursor-pointer focus:outline-none">
                                                            <i class="fas fa-upload"></i> <!-- Upload icon -->
                                                        </label>
                                                        <button type="submit"
                                                            class="flex w-10 h-10 items-center justify-center bg-custom-orange rounded-full text-white text-xs font-semibold cursor-pointer focus:outline-none">
                                                            <i class="fas fa-save"></i> <!-- Save icon -->
                                                        </button>
                                                    </form>

                                                    <!-- Form to delete picture -->
                                                    @if ($user->photo)
                                                        <form action="{{ route('profile.deleteImage') }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="flex w-10 h-10 items-center justify-center ms-2 bg-yellow-300 rounded-full text-white text-xs font-semibold cursor-pointer focus:outline-none">
                                                                <i class="fas fa-trash"></i> <!-- Delete icon -->
                                                            </button>
                                                        </form>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                                <div class="flex items-center gap-3 w-full mb-6 mt-12">
                                    <span class="font-medium text-gray-400 text-sm w-1/8">Delivery Details</span>
                                    <hr class="flex-1 h-px bg-gray-200 border-0">
                                </div>

                                <form action="{{ route('profile.update') }}" method="POST">
                                    @csrf
                                    <div class="flex flex-col sm:flex-row gap-6 mb-3">
                                        <div class="w-full relative">
                                            <span class="flex items-center mb-2 text-gray-600 text-sm font-medium">Full
                                                Name</span>
                                            <input type="text" id="full-name" name="full_name" value="{{ $user->name }}"
                                                class="block w-full h-11 px-5 py-2.5 leading-7 text-sm font-normal text-gray-800 bg-transparent border border-gray-300 rounded-lg placeholder-gray-400 focus:outline-none"
                                                placeholder="Your Name" required>
                                        </div>
                                        <div class="w-full relative">
                                            <span class="flex items-center mb-2 text-gray-600 text-sm font-medium">Email
                                                Address</span>
                                            <input type="email" id="email-address" name="email" value="{{ $user->email }}"
                                                class="block w-full h-11 px-5 py-2.5 leading-7 text-sm font-normal text-gray-800 bg-transparent border border-gray-300 rounded-lg placeholder-gray-400 focus:outline-none"
                                                placeholder="Example@gmail.com" required>
                                        </div>
                                        <div class="w-full relative mb-6">
                                            <span class="flex items-center mb-2 text-gray-600 text-sm font-medium">Phone
                                                Number</span>
                                            <input type="tel" id="phone-number" name="phone" value="{{ $user->phone }}"
                                                class="block w-full h-11 px-5 py-2.5 leading-7 text-sm font-normal text-gray-800 bg-transparent border border-gray-300 rounded-lg placeholder-gray-400 focus:outline-none"
                                                placeholder="+12 3456 7890" required>
                                        </div>
                                    </div>

                                    <div class="flex flex-col sm:flex-row gap-6 mb-6">
                                        <div class="w-full relative">
                                            <span
                                                class="flex items-center mb-2 text-gray-600 text-sm font-medium">Country</span>
                                            <input type="text" id="country" name="country" value="{{ $user->country }}"
                                                class="block w-full h-11 px-5 py-2.5 leading-7 text-sm font-normal text-gray-800 bg-transparent border border-gray-300 rounded-lg placeholder-gray-400 focus:outline-none"
                                                placeholder="Your Country" required>
                                        </div>
                                        <div class="w-full relative">
                                            <span class="flex items-center mb-2 text-gray-600 text-sm font-medium">City</span>
                                            <input type="text" id="city" name="city" value="{{ $user->city }}"
                                                class="block w-full h-11 px-5 py-2.5 leading-7 text-sm font-normal text-gray-800 bg-transparent border border-gray-300 rounded-lg placeholder-gray-400 focus:outline-none"
                                                placeholder="Your City" required>
                                        </div>
                                        <div class="w-full relative mb-6">
                                            <span
                                                class="flex items-center mb-2 text-gray-600 text-sm font-medium">Province</span>
                                            <input type="text" id="province" name="province"
                                                value="{{ $user->province }}"
                                                class="block w-full h-11 px-5 py-2.5 leading-7 text-sm font-normal text-gray-800 bg-transparent border border-gray-300 rounded-lg placeholder-gray-400 focus:outline-none"
                                                placeholder="Your Province" required>
                                        </div>
                                    </div>

                                    <button type="submit"
                                        class="flex items-center justify-center rounded-full bg-custom-orange px-14 py-3 text-md font-medium text-white shadow-custom hover:bg-orange-700 focus:outline-none focus:ring-none">
                                        Save Changes
                                    </button>
                                </form>


                            </div>
                        </div>



                        <!-- Password -->
                        <div class="hidden p-4 rounded-lg" id="privacy-policy" role="tabpanel"
                            aria-labelledby="privacy-policy-tab">
                            <form id="update-password-form" class="w-full" >
                                @csrf

                                <div class="flex items-center gap-3 w-full mb-6 ">
                                    <span class="font-medium text-gray-400 text-sm w-1/8">Password</span>
                                    <hr class="flex-1 h-px bg-gray-200 border-0">
                                </div>

                                <div class="flex flex-col gap-6 mb-6 md:w-1/2">
                                    <div class="w-full relative">
                                        <span class="flex items-center mb-2 text-gray-600 text-sm font-medium">Old
                                            Password</span>
                                        <input type="password" id="old-password" name="old_password"
                                            class="block w-full h-11 px-5 py-2.5 leading-7 text-sm font-normal text-gray-500 bg-transparent border border-gray-300 rounded-lg placeholder-gray-400 focus:outline-none"
                                            placeholder="Input your old password" required>
                                    </div>
                                    <div class="w-full relative">
                                        <span class="flex items-center mb-2 text-gray-600 text-sm font-medium">New
                                            Password</span>
                                        <input type="password" id="new-password" name="new_password"
                                            class="block w-full h-11 px-5 py-2.5 leading-7 text-sm font-normal text-gray-500 bg-transparent border border-gray-300 rounded-lg placeholder-gray-400 focus:outline-none"
                                            placeholder="Input your new password" required>
                                        <p class="text-xs text-gray-400 mt-1 ps-2">Min 8 Characters, letters and numbers
                                        </p>
                                    </div>
                                    <div class="w-full relative ">
                                        <span class="flex items-center mb-2 text-gray-600 text-sm font-medium">Confirm New
                                            Password</span>
                                        <input type="password" id="confirm-new-password" name="new_password_confirmation"
                                            class="block w-full h-11 px-5 py-2.5 leading-7 text-sm font-normal text-gray-500 bg-transparent border border-gray-300 rounded-lg placeholder-gray-400 focus:outline-none"
                                            placeholder="Confirm new password" required>
                                    </div>

                                    <!-- Display messages here -->
                                    <div id="response-message" class="text-sm"></div>
                                </div>



                                <button type="submit"
                                    class="flex items-center justify-center rounded-full bg-custom-orange px-14 py-3 text-md font-medium text-white shadow-custom hover:bg-orange-700 focus:outline-none focus:ring-none">
                                    Save Changes
                                </button>
                            </form>

                        </div>
                        <!-- Password AJAX -->
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const form = document.getElementById('update-password-form');
                                const responseMessage = document.getElementById('response-message');

                                form.addEventListener('submit', function(event) {
                                    event.preventDefault(); // Prevent default form submission

                                    const formData = new FormData(form);

                                    fetch('{{ route('setting.updatePassword') }}', {
                                            method: 'POST',
                                            body: formData,
                                            headers: {
                                                'X-Requested-With': 'XMLHttpRequest',
                                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                                                    .getAttribute('content')
                                            }
                                        })
                                        .then(response => response.json())
                                        .then(data => {
                                            if (data.status === 'success') {
                                                responseMessage.innerHTML =
                                                    `<div class="text-green-500">${data.message}</div>`;
                                                form.reset(); // Reset the form
                                            } else {
                                                responseMessage.innerHTML =
                                                    `<div class="text-red-500">${data.message}</div>`;
                                            }
                                        })
                                        .catch(error => {
                                            console.error('Error:', error);
                                            responseMessage.innerHTML =
                                                `<div class="text-red-500">An unexpected error occurred.</div>`;
                                        });
                                });
                            });
                        </script>


                        <!-- notfictions -->
                        <div class="hidden p-4 rounded-lg w-full" id="contact-us" role="tabpanel"
                            aria-labelledby="contact-us-tab">

                            <div class="flex flex-col-reverse gap-8 items-start justify-between w-full ">

                                <form action="#" class="space-y-8  w-full md:w-2/3 ">
                                    <div class="flex items-center justify-between border-b-2 pb-5 ">

                                        <div class="flex flex-col gap-2  ">
                                            <span class="text-md font-semibold text-gray-900">
                                                Product updates
                                            </span>

                                            <span class="text-sm font-normal text-gray-500">
                                                Receive a notification about updates on the products you are interested in
                                            </span>
                                        </div>

                                        <div>
                                            <span class="switch modern-switch">
                                                <input type="checkbox" name="one">
                                                <span class="slider round"></span>
                                            </span>

                                        </div>

                                    </div>
                                </form>

                                <form action="#" class="space-y-8  w-full md:w-2/3 ">
                                    <div class="flex items-center justify-between border-b-2 pb-5  ">

                                        <div class="flex flex-col gap-2  ">
                                            <span class="text-md font-semibold text-gray-900">
                                                Comments
                                            </span>

                                            <span class="text-sm font-normal text-gray-500">
                                                Receive a notification whenever someone makes a comment on a product you are
                                                interested in
                                            </span>
                                        </div>

                                        <div>
                                            <span class="switch modern-switch">
                                                <input type="checkbox" name="two">
                                                <span class="slider round"></span>
                                            </span>

                                        </div>

                                    </div>
                                </form>

                                <form action="#" class="space-y-8  w-full md:w-2/3 ">
                                    <div class="flex items-center justify-between border-b-2 pb-5">

                                        <div class="flex flex-col gap-2  ">
                                            <span class="text-md font-semibold text-gray-900">
                                                Checkout Product
                                            </span>

                                            <span class="text-sm font-normal text-gray-500">
                                                Receive a notification whenever you make a successful checkout </span>
                                        </div>

                                        <div>
                                            <span class="switch modern-switch">
                                                <input type="checkbox" name="three">
                                                <span class="slider round"></span>
                                            </span>

                                        </div>

                                    </div>
                                </form>

                            </div>

                        </div>
                    @else
                        <div class="flex justify-center items-center py-20">
                            <span class="text-gray-500 text-md  font-medium text-center">
                                You need to log in to access this page. <br> Please log in with your account to access the
                                required content.
                                <br>
                                <br>
                                <a href="{{ route('login') }}"
                                    class="text-custom-orange text-md  font-medium text-center underline">Login</a>

                            </span>
                        </div>
                    @endauth

                </div>

            </div>

        </div>
    </main>
@endsection

@section('js')
    <!-- === tabs === -->
    <script src="{{ asset('assets/js/tabs.js') }}"></script>
    <!-- === End Custom JS === -->
@endsection
