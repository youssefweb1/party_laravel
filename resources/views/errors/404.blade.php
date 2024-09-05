@extends('layouts.app')

@section('content')
         <!-- === main === -->
         <main class="h-screen flex flex-col justify-center items-center">
              <div class="sm:ml-64 mlcustom">
                    <section>
                        <div class="px-4 mx-auto max-w-screen-xl lg:px-6">
                            <div class="mx-auto flex flex-col items-center justifyS-center max-w-screen-sm text-center">
                                <h1
                                    class="mb-4 text-6xl tracking-tight font-extrabold lg:text-9xl text-primary-600 dark:text-primary-500">
                                    OOPS!</h1>
                                <p class="mb-4 text-lg font-light text-gray-500 dark:text-gray-400">The Page You
                                    Requested Could Not Be Found.</p>
                                <img width="250" src="{{asset('assets/images/error.svg')}}" alt="" srcset="">
                            </div>
                        </div>
                    </section>
                </div>
             </main>
             <!-- === end main === -->
@endsection
