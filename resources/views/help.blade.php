@extends('layouts.app')
@section('content')
    <!--  main -->
    <main>
        <div class="sm:ml-64 mlcustom">
            <div class=" px-4 pt-2.5 mt-3 flex items-start allmaindivs ">

                <div class="main-content bg-white  h-auto me-5 rounded-lg  p-4 w-screen">
                    <h2 class="text-xl font-semibold text-gray-900 sm:text-2xl ps-3">Help Center
                    </h2>

                    <div class="mb-4 border-b border-gray-200 mt-5">
                        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab"
                            data-tabs-toggle="#default-tab-content" role="tablist">
                            <li class="me-2" role="presentation">
                                <button
                                    class="inline-flex items-center p-4 border-b-2 rounded-t-lg tab-button text-custom-orange active"
                                    id="faq-tab" data-tabs-target="#faq" type="button" role="tab" aria-controls="faq"
                                    aria-selected="true">
                                    <i class="fas fa-question-circle me-2"></i> FAQ
                                </button>
                            </li>
                            <li class="me-2" role="presentation">
                                <button class="inline-flex items-center p-4 border-b-2 rounded-t-lg tab-button "
                                    id="privacy-policy-tab" data-tabs-target="#privacy-policy" type="button" role="tab"
                                    aria-controls="privacy-policy" aria-selected="false">
                                    <i class="fas fa-user-shield me-2"></i> Privacy Policy
                                </button>
                            </li>
                            <li class="me-2" role="presentation">
                                <button class="inline-flex items-center p-4 border-b-2 rounded-t-lg tab-button"
                                    id="report-problem-tab" data-tabs-target="#report-problem" type="button" role="tab"
                                    aria-controls="report-problem" aria-selected="false">
                                    <i class="fas fa-exclamation-triangle me-2"></i> Report a Problem
                                </button>
                            </li>
                            <li role="presentation">
                                <button class="inline-flex items-center p-4 border-b-2 rounded-t-lg tab-button"
                                    id="contact-us-tab" data-tabs-target="#contact-us" type="button" role="tab"
                                    aria-controls="contact-us" aria-selected="false">
                                    <i class="fas fa-envelope me-2"></i> Contact Us
                                </button>
                            </li>
                        </ul>
                    </div>

                    <div id="default-tab-content">
                        <!-- faqs -->
                        <div class="hidden p-4 rounded-lg" id="faq" role="tabpanel" aria-labelledby="faq-tab">

                            <div id="accordion-flush" data-accordion="collapse"
                                data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white"
                                data-inactive-classes="text-gray-500 dark:text-gray-400">
                                <h2 id="accordion-flush-heading-1">
                                    <button type="button"
                                        class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3"
                                        data-accordion-target="#accordion-flush-body-1" aria-expanded="true"
                                        aria-controls="accordion-flush-body-1">
                                        <span>What is Flowbite?</span>
                                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M9 5 5 1 1 5" />
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
                                    <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                                        <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is an open-source
                                            library of interactive components built on top of Tailwind CSS including
                                            buttons, dropdowns, modals, navbars, and more.</p>
                                        <p class="text-gray-500 dark:text-gray-400">Check out this guide to learn
                                            how to <a href="/docs/getting-started/introduction/"
                                                class=" hover:underline">get
                                                started</a> and start developing websites even faster with
                                            components on top of Tailwind CSS.</p>
                                    </div>
                                </div>
                                <h2 id="accordion-flush-heading-2">
                                    <button type="button"
                                        class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3"
                                        data-accordion-target="#accordion-flush-body-2" aria-expanded="false"
                                        aria-controls="accordion-flush-body-2">
                                        <span>Is there a Figma file available?</span>
                                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M9 5 5 1 1 5" />
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                                    <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                                        <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is first
                                            conceptualized and designed using the Figma software so everything you
                                            see in the library has a design equivalent in our Figma file.</p>
                                        <p class="text-gray-500 dark:text-gray-400">Check out the <a
                                                href="https://flowbite.com/figma/" class=" hover:underline">Figma
                                                design system</a> based on the utility classes from Tailwind CSS and
                                            components from Flowbite.</p>
                                    </div>
                                </div>
                                <h2 id="accordion-flush-heading-3">
                                    <button type="button"
                                        class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3"
                                        data-accordion-target="#accordion-flush-body-3" aria-expanded="false"
                                        aria-controls="accordion-flush-body-3">
                                        <span>What are the differences between Flowbite and Tailwind UI?</span>
                                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M9 5 5 1 1 5" />
                                        </svg>
                                    </button>
                                </h2>
                                <div id="accordion-flush-body-3" class="hidden"
                                    aria-labelledby="accordion-flush-heading-3">
                                    <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                                        <p class="mb-2 text-gray-500 dark:text-gray-400">The main difference is that
                                            the core components from Flowbite are open source under the MIT license,
                                            whereas Tailwind UI is a paid product. Another difference is that
                                            Flowbite relies on smaller and standalone components, whereas Tailwind
                                            UI offers sections of pages.</p>
                                        <p class="mb-2 text-gray-500 dark:text-gray-400">However, we actually
                                            recommend using both Flowbite, Flowbite Pro, and even Tailwind UI as
                                            there is no technical reason stopping you from using the best of two
                                            worlds.</p>
                                        <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these
                                            technologies:</p>
                                        <ul class="ps-5 text-gray-500 list-disc dark:text-gray-400">
                                            <li><a href="https://flowbite.com/pro/" class=" hover:underline">Flowbite
                                                    Pro</a></li>
                                            <li><a href="https://tailwindui.com/" rel="nofollow"
                                                    class=" hover:underline">Tailwind
                                                    UI</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- policy -->
                        <div class="hidden p-4 rounded-lg" id="privacy-policy" role="tabpanel"
                            aria-labelledby="privacy-policy-tab">
                            <p
                                class="text-sm md:text-md lg:text-lg xl:text-xl text-gray-700 leading-loose break-words  transition-colors duration-300">
                                Vivamus eget aliquam dui. Integer eu arcu vel arcu suscipit ultrices quis non
                                mauris. Aenean scelerisque, sem eu dictum commodo, velit nisi blandit magna, quis
                                scelerisque ipsum lectus ut libero. Sed elit diam, dignissim ac congue quis, aliquam
                                in purus. Proin ligula nulla, scelerisque quis venenatis pulvinar, congue eget
                                neque. Proin scelerisque metus sit amet dolor tempor vehicula. Sed laoreet quis
                                velit vitae facilisis. Duis ut sapien eu urna laoreet maximus. Donec nibh diam,
                                vulputate vel nulla ut, viverra congue turpis. Fusce consectetur posuere purus, eget
                                placerat nunc hendrerit at. Sed lectus dui, euismod a odio vitae, dictum dictum
                                justo. Donec condimentum nunc vitae libero bibendum, cursus ultrices massa
                                commodo.Vivamus eget aliquam dui. Integer eu arcu vel arcu suscipit ultrices quis
                                non mauris. Aenean scelerisque, sem eu dictum commodo, velit nisi blandit magna,
                                quis scelerisque ipsum lectus ut libero. Sed elit diam, dignissim ac congue quis,
                                aliquam in purus. Proin ligula nulla, scelerisque quis venenatis pulvinar, congue
                                eget neque. Proin scelerisque metus sit amet dolor tempor vehicula. Sed laoreet quis
                                velit vitae facilisis. Duis ut sapien eu urna laoreet maximus. Donec nibh diam,
                                vulputate vel nulla ut, viverra congue turpis. Fusce consectetur posuere purus, eget
                                placerat nunc hendrerit at. Sed lectus dui, euismod a odio vitae, dictum dictum
                                justo. Donec condimentum nunc vitae libero bibendum, cursus ultrices massa
                                commodo.Vivamus eget aliquam dui. Integer eu arcu vel arcu suscipit ultrices quis
                                non mauris. Aenean scelerisque, sem eu dictum commodo, velit nisi blandit magna,
                                quis scelerisque ipsum lectus ut libero. Sed elit diam, dignissim ac congue quis,
                                aliquam in purus. Proin ligula nulla, scelerisque quis venenatis pulvinar, congue
                                eget neque. Proin scelerisque metus sit amet dolor tempor vehicula. Sed laoreet quis
                                velit vitae facilisis. Duis ut sapien eu urna laoreet maximus. Donec nibh diam,
                                vulputate vel nulla ut, viverra congue turpis. Fusce consectetur posuere purus, eget
                                placerat nunc hendrerit at. Sed lectus dui, euismod a odio vitae, dictum dictum
                                justo. Donec condimentum nunc vitae libero bibendum, cursus ultrices massa
                                commodo.Vivamus eget aliquam dui. Integer eu arcu vel arcu suscipit ultrices quis
                            </p>
                        </div>

                        <!-- problem -->
                        <div class="hidden p-4 rounded-lg" id="report-problem" role="tabpanel"
                            aria-labelledby="report-problem-tab">
                            <form action="{{ route('report.problem.store') }}" method="POST" class="space-y-8 -mt-8">
                                @csrf
                                <div>
                                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Full
                                        Name</label>
                                    <input type="text" id="name" name="name"
                                        class="block p-3 w-2/3 text-sm text-gray-900 rounded-lg border-1 border-gray-200"
                                        placeholder="Your Name" autocomplete="off" required>
                                </div>
                                <div>
                                    <label for="subject" class="block mb-2 text-sm font-medium text-gray-900">Problem
                                        With</label>
                                    <input type="text" id="subject" name="subject"
                                        class="block p-3 w-2/3 text-sm text-gray-900 rounded-lg border-1 border-gray-200"
                                        placeholder="Let us know how we can help you" autocomplete="off" required>
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="message"
                                        class="block mb-2 text-sm font-medium text-gray-900">Message</label>
                                    <textarea id="message" name="message" rows="6"
                                        class="block p-2.5 w-full text-sm text-gray-900 rounded-lg border-1 border-gray-200"
                                        placeholder="Leave a comment..."></textarea>
                                </div>
                                <button type="submit"
                                    class="flex items-center justify-center rounded-full bg-custom-orange px-14 py-3 text-md font-medium text-white shadow-custom hover:bg-orange-700 focus:outline-none focus:ring-none">
                                    Send
                                </button>
                            </form>


                        </div>

                        <!-- Contact Us -->
                        <div class="hidden p-4 rounded-lg w-full" id="contact-us" role="tabpanel"
                            aria-labelledby="contact-us-tab">

                            <div class="flex flex-col-reverse sm:flex-row items-start justify-between w-full -mt-8 ">

                                <form action="{{ route('contact.send') }}" method="POST"
                                    class="space-y-8 w-full md:w-2/3 formbord pe-10">
                                    @csrf
                                    <div>
                                        <span for="name" class="block mb-2 text-sm font-medium text-gray-900">Full
                                            Name</span>
                                        <input type="text" name="name" id="input3"
                                            class="block p-3 w-2/3 text-sm text-gray-900  rounded-lg border-1 border-gray-200"
                                            placeholder="Your Name" autocomplete="off" required>
                                    </div>
                                    <div>
                                        <span for="email"
                                            class="block mb-2 text-sm font-medium text-gray-900">Email</span>
                                        <input type="email" name="email" id="inputEmail"
                                            class="block p-3 w-2/3 text-sm text-gray-900  rounded-lg border-1 border-gray-200"
                                            placeholder="Your Email" autocomplete="off" required>
                                    </div>
                                    <div>
                                        <span for="phone" class="block mb-2 text-sm font-medium text-gray-900">Phone
                                            Number (optional)</span>
                                        <input type="text" name="phone" id="input4"
                                            class="block p-3 w-full md:w-2/3 text-sm text-gray-900  rounded-lg border-1 border-gray-200"
                                            placeholder="Phone number" autocomplete="off">
                                    </div>
                                    <div class="sm:col-span-2">
                                        <span for="message"
                                            class="block mb-2 text-sm font-medium text-gray-900">Message</span>
                                        <textarea name="message" id="message" rows="6"
                                            class="block p-2.5 w-full text-sm text-gray-900  rounded-lg  border-1 border-gray-200"
                                            placeholder="Leave a comment..." required></textarea>
                                    </div>
                                    <button type="submit"
                                        class="flex items-center justify-center rounded-full bg-custom-orange px-14 py-3 text-md font-medium text-white shadow-custom hover:bg-orange-700 focus:outline-none focus:ring-none">
                                        Send
                                    </button>
                                </form>




                                <div class="right-contact   w-1/3  pt-10">
                                    <p class="text-gray9500 text-md font-semibold">
                                        Get in touch
                                    </p>
                                    <div class="mt-4">
                                        <span class="text-gray-500 text-sm pb-10">Alzahab_support@mail.com</span>
                                        <span class="phone text-gray-500 text-sm pt-3"> (448)468-6941</span>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    </main>
    <!-- end main -->
@endsection

@section('js')
    <!-- === tabs === -->
    <script src="{{ asset('assets/js/tabs.js') }}"></script>
    <!-- === End Custom JS === -->
@endsection
