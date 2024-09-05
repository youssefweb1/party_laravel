<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Party Wizard - Check Your Mail</title>

    <!-- === Favicon === -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/logo_out_text.svg') }}">
    <!-- === End Favicon === -->

    <!-- === Css === -->
    <link rel="stylesheet" href="{{ asset('assets/css/custoum.css') }}">
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

<body class="font-sans bg-custoum-body min-h-screen flex items-center justify-center">

    <!-- main content -->
    <div class="container m-auto flex flex-col items-center justify-center">
        <div class="card p-6 sm:max-w-sm md:max-w-md w-full">
            <div class="card-body flex flex-col items-center justify-start gap-3">
                <img src="{{ asset('assets/images/loginreg/check.svg') }}" alt="Party Wizard Logo" class="mb-3 w-34">

                <div class="w-full text-center mb-4">
                    <h2 class="text-lg font-bold text-login mb-2">Check Your Email</h2>
                    <p class="text-gray-600 text-sm mb-4 w-full">We have sent password recovery instructions to your
                        email.</p>

                    <div class="px-3.5 my-9">
                        <a href="mailto:"
                            class="w-full bg-custom-orange text-white py-3.5 shadow-custom px-9 rounded-full hover:bg-blue-600 focus:outline-none">
                            Open Mail App
                        </a>

                    </div>

                    <a href="{{ route('login') }}" class="text-custom-orange underline hover:text-gray-500 duration-300 text-sm">Skip, I'll
                        confirm later</a>
                </div>

                <div class="text-sm text-center text-gray-500 ">
                    <p class="pb-2">Did not receive the email? Check your spam filter.</p>
                    <p class="pb-2">Or</p>

                    <a href="{{ route('password.request') }}" class="text-custom-orange text-sm underline hover:text-gray-500 duration-300 pt-4">Try
                        another email address</a>
                </div>

            </div>
        </div>
    </div>
    <!-- end main content -->

    <!-- scripts assets -->

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- === Flowbite JS === -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <!-- === End Flowbite JS === -->

    <!-- === Custom JS === -->
    <!-- === End Custom JS === -->

</body>

</html>