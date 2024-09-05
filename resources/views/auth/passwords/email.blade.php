<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Party Wizard - Reset Password</title>

    <!-- === Favicon === -->
    <link rel="shortcut icon" type="image/png" href="{{asset('assets/images/logo_out_text.svg')}}">
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

<body class=" bg-custoum-body min-h-screen flex items-center justify-center">

    <!-- main content -->
    <div class="container m-auto flex flex-col items-center justify-center">
        <div class="card p-6 sm:max-w-sm md:max-w-md w-full">
            <div class="card-body flex flex-col items-center justify-start gap-3">
                <img src="{{ asset('assets/images/logo_out_text.svg') }}" alt="Party Wizard Logo"
                    class="mb-3 w-32 md:w-28">

                <!-- عرض الأخطاء -->
                @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative"
                        role="alert">
                        <strong class="font-bold">Whoops!</strong>
                        <span class="block sm:inline">There were some problems with your input.</span>
                        <ul class="list-disc pl-5 mt-2">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- عرض رسائل النجاح -->
                @if (session('status'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
                        role="alert">
                        <strong class="font-bold">Success!</strong>
                        <span class="block sm:inline">{{ session('status') }}</span>
                    </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="text-center mt-2 mb-4">
                        <p class="text-gray-600 mb-2 font-bold text-lg">Let's reset your password</p>
                        <p class="text-gray-600 text-sm">
                            Enter the email associated with your account
                            and we'll send an email with instructions to
                            reset your password.
                        </p>
                    </div>

                    <div class="px-3">
                        <div class="flex mb-4 px-3 mt-9">
                            <span
                                class="inline-flex items-center px-2 text-sm shadow-sm border-span-input-log border-custom-input bg-white rounded-l-xl">
                                <img class="w-8 p-2 bg-custoum-orange-50 rounded-md"
                                    src="{{ asset('assets/images/loginreg/email.svg') }}" alt="Email Icon">
                            </span>
                            <input type="email" id="email" name="email"
                                class="focus:outline-none shadow-sm focus:ring-0 text-gray-500 border-rad-custom-input border-custom-input bg-white block flex-1 min-w-0 w-full text-sm text-gray-900 p-4 rounded-r-xl"
                                placeholder="E-mail" autocomplete="off" value="{{ old('email') }}" required>
                        </div>

                        <div class="px-3.5">
                            <button type="submit"
                                class="w-full bg-custom-orange text-white py-3.5 shadow-custom rounded-full hover:bg-blue-600 focus:outline-none">
                                Send Instructions
                            </button>
                        </div>
                    </div>
                </form>


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
