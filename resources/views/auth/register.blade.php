<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Party Wizard - Sign Up</title>

     <!-- === Favicon === -->
    <link rel="shortcut icon" type="image/png" href="assets/images/logo_out_text.svg">
    <!-- === End Favicon === -->

    <!-- === Css === -->
    <link rel="stylesheet" href="assets/css/custoum.css">

    <!-- === End css === -->

    <!-- === Tailwind CSS === -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- === End Tailwind CSS === -->

    <!-- === Flowbite === -->
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <!-- === End Flowbite === -->

    <!-- === Fontawesome === -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- === End Fontawesome === -->

    <!-- === Google Fonts Inter === -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- === End Google Fonts Inter === -->

</head>

<body class=" bg-custoum-body min-h-screen flex items-center justify-center">

    <!-- main content -->
    <div class="container m-auto flex flex-col items-center justify-center">
        <div class="card p-6 sm:max-w-sm md:max-w-md w-full">
            <div class="card-body flex flex-col items-center justify-start gap-3">
                <img src="assets/images/logo_out_text.svg" alt="Party Wizard Logo" class="mb-3 w-28">

                <form method="POST" action="{{ route('register.post') }}" class="w-full">
                    @csrf
                    <label for="username" class="block mb-2 ms-1 text-lg font-medium text-login">Sign Up</label>
                
                    <!-- Username Field -->
                    <div class="flex mb-4">
                        <span class="inline-flex items-center px-2 text-sm border-span-input-log border-custom-input bg-white rounded-l-xl">
                            <img class="w-8 p-2 bg-custoum-orange-50 rounded-md" src="assets/images/loginreg/Icon feather-user.svg" alt="Username Icon">
                        </span>
                        <input type="text" id="username" name="name"
                            class="focus:outline-none focus:ring-0 text-gray-500 border-rad-custom-input border-custom-input bg-white block flex-1 min-w-0 w-full text-sm text-gray-900 p-4 rounded-r-xl"
                            placeholder="Username" autocomplete="off" value="{{ old('name') }}">
                    </div>
                    @error('name')
                    <p class="text-red-500 text-xs -mt-3 mb-3">{{ $message }}</p>
                    @enderror
                
                    <!-- Email Field -->
                    <div class="flex mb-4">
                        <span class="inline-flex items-center px-2 text-sm border-span-input-log border-custom-input bg-white rounded-l-xl">
                            <img class="w-8 p-2 bg-custoum-orange-50 rounded-md" src="assets/images/loginreg/email.svg" alt="Email Icon">
                        </span>
                        <input type="email" id="email" name="email"
                            class="focus:outline-none focus:ring-0 text-gray-500 border-rad-custom-input border-custom-input bg-white block flex-1 min-w-0 w-full text-sm text-gray-900 p-4 rounded-r-xl"
                            placeholder="E-mail" autocomplete="off" value="{{ old('email') }}">
                    </div>
                    @error('email')
                    <p class="text-red-500 text-xs -mt-3 mb-3">{{ $message }}</p>
                    @enderror
                
                    <!-- Password Field -->
                    <div class="flex mb-4 password-container">
                        <span class="inline-flex items-center px-2 text-sm border-span-input-log border-custom-input bg-white rounded-l-xl">
                            <img class="w-9 p-2 bg-custoum-orange-50 rounded-md" src="assets/images/loginreg/pass.svg" alt="Password Icon">
                        </span>
                        <div class="relative flex-1">
                            <input type="password" id="password" name="password"
                                class="focus:outline-none focus:ring-0 text-custom-orange border-rad-custom-input border-custom-input bg-white block min-w-0 w-full text-sm p-4 rounded-r-xl"
                                placeholder="Password" autocomplete="off">
                            <span id="togglePassword"
                                class="absolute inset-y-0 right-0 flex items-center px-3 text-gray-300 cursor-pointer">
                                <i class="fas fa-eye"></i> <!-- FontAwesome eye icon -->
                            </span>
                        </div>
                    </div>
                    @error('password')
                    <p class="text-red-500 text-xs -mt-3 mb-3">{{ $message }}</p>
                    @enderror
                
                    <!-- Confirm Password Field -->
                    <div class="flex mb-4 password-container">
                        <span class="inline-flex items-center px-2 text-sm border-span-input-log border-custom-input bg-white rounded-l-xl">
                            <img class="w-9 p-2 bg-custoum-orange-50 rounded-md" src="assets/images/loginreg/pass.svg" alt="Password Icon">
                        </span>
                        <div class="relative flex-1">
                            <input type="password" id="confirm-password" name="password_confirmation"
                                class="focus:outline-none focus:ring-0 text-custom-orange border-rad-custom-input border-custom-input bg-white block min-w-0 w-full text-sm p-4 rounded-r-xl"
                                placeholder="Confirm Password" autocomplete="off">
                            <span id="toggleConfirmPassword"
                                class="absolute inset-y-0 right-0 flex items-center px-3 text-gray-300 cursor-pointer">
                                <i class="fas fa-eye"></i> <!-- FontAwesome eye icon -->
                            </span>
                        </div>
                    </div>
                    @error('password_confirmation')
                    <p class="text-red-500 text-xs -mt-3 mb-3">{{ $message }}</p>
                    @enderror
                
                    <!-- Forgot Password -->
                    <div class="text-sm flex items-center gap-1.5 justify-end mt-2 mb-4 text-gray-400">
                        Already have an account?
                        <a href="{{ route('login') }}" class="text-custom-orange hover:text-gray-400 duration-300 underline">Login</a>
                    </div>
                
                    <button type="submit"
                        class="w-full bg-custom-orange text-white py-3.5 shadow-custom px-4 rounded-full hover:bg-blue-600 focus:outline-none">Sign Up</button>
                
                    <div class="text-sm flex justify-center text-gray-500 my-4 mb-4">
                        <a href="#">Or Sign up with..</a>
                    </div>
                
                    <div class="flex items-center justify-center gap-3 text-gray-500 mt-4">
                        <a href="#"
                            class="hover:bg-gray-100 duration-300 text-gray-500 border-custom-input rounded-xl w-1/3 py-3 flex items-center justify-center">
                            <img src="assets/images/loginreg/Icon zocial-facebook.svg" alt="Facebook Icon" class="w-5 h-5">
                        </a>
                        <a href="#"
                            class="hover:bg-gray-100 duration-300 text-gray-500 border-custom-input rounded-xl w-1/3 py-3 flex items-center justify-center">
                            <img src="assets/images/loginreg/Icon awesome-google.svg" alt="Google Icon" class="w-5 h-5">
                        </a>
                        <a href="#"
                            class="hover:bg-gray-100 duration-300 text-gray-500 border-custom-input rounded-xl w-1/3 py-3 flex items-center justify-center">
                            <img src="assets/images/loginreg/Icon awesome-twitter.svg" alt="Twitter Icon" class="w-5 h-5">
                        </a>
                    </div>
                </form>

                
            </div>
        </div>
    </div>



    <!-- scripts assets -->

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- === End jQuery === -->

    <!-- === Flowbite JS === -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <!-- === End Flowbite JS === -->

    <!-- === Custom JS === -->
    <script src="assets/js/showpass.js"></script>
    <!-- === End Custom JS === -->

</body>

</html>