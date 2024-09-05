<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Party Wizard - Create New Password</title>

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
        <div class="card rounded-lg max-w-md w-full">
            <div class="card-body flex flex-col items-center justify-start gap-3 w-full">
                <img src="{{asset('assets/images/logo_out_text.svg')}}" alt="Party Wizard Logo" class="mb-3 w-28">
                <form method="POST" action="{{ route('password.update') }}" class="w-full">
                    @csrf
                
                    <input type="hidden" name="token" value="{{ $token }}">
                
                    <div class="flex mb-4 px-3 mt-9">
                        <span class="inline-flex items-center px-2 text-sm shadow-sm border-span-input-log border-custom-input bg-white rounded-l-xl">
                            <img class="w-8 p-2 bg-custoum-orange-50 rounded-md" src="{{ asset('assets/images/loginreg/pass.svg') }}" alt="Password Icon">
                        </span>
                        <input type="password" name="password"
                               class="focus:outline-none shadow-sm focus:ring-0 text-gray-500 border-rad-custom-input border-custom-input bg-white block flex-1 min-w-0 w-full text-sm text-gray-900 p-4 rounded-r-xl @error('password') border-red-500 @enderror"
                               placeholder="New Password" required>
                    </div>
                    @error('password')
                        <div class="text-red-500 text-sm px-3">{{ $message }}</div>
                    @enderror
                
                    <div class="flex mb-4 px-3 mt-9">
                        <span class="inline-flex items-center px-2 text-sm shadow-sm border-span-input-log border-custom-input bg-white rounded-l-xl">
                            <img class="w-8 p-2 bg-custoum-orange-50 rounded-md" src="{{ asset('assets/images/loginreg/pass.svg') }}" alt="Confirm Password Icon">
                        </span>
                        <input type="password" name="password_confirmation"
                               class="focus:outline-none shadow-sm focus:ring-0 text-gray-500 border-rad-custom-input border-custom-input bg-white block flex-1 min-w-0 w-full text-sm text-gray-900 p-4 rounded-r-xl @error('password_confirmation') border-red-500 @enderror"
                               placeholder="Confirm Password" required>
                    </div>
                    @error('password_confirmation')
                        <div class="text-red-500 text-sm px-3">{{ $message }}</div>
                    @enderror
                
                    <div class="px-3.5 mt-5">
                        <button type="submit" class="w-full bg-custom-orange text-white py-3.5 shadow-custom rounded-full hover:bg-orange-600 focus:outline-none">
                            Save Password
                        </button>
                    </div>
                
                    <div class="text-sm flex justify-center text-gray-500 my-4 mt-6">
                        <p>Remember your password? <a href="{{ route('login') }}" class="text-custom-orange hover:underline">Log in</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end main content -->


    <!-- scripts assets -->

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- === End jQuery === -->

    <!-- === Flowbite JS === -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <!-- === End Flowbite JS === -->
    

</body>

</html>
</body>

</html>