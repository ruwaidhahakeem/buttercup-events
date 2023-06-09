<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Events') }}
        </h2>
    </x-slot>

    <div class="py-12 relative">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h1>Painting Party</h1>
            </div>
            {{ $events }} --}}


            <div class="grid grid-cols-2">
                <!-- component 1 -->
                <div class="flex flex-col w-full bg-white rounded shadow-lg sm:w-3/4 md:w-1/2 lg:w-3/5">
                    <div class="w-full h-64 bg-top bg-cover rounded-t"
                        style="background-image: url(https://www.si.com/.image/t_share/MTY4MTkyMjczODM4OTc0ODQ5/cfp-trophy-deitschjpg.jpg)">
                    </div>
                    <div class="flex flex-col w-full md:flex-row">
                        <div
                            class="flex flex-row justify-around p-4 font-bold leading-none text-gray-800 uppercase bg-gray-400 rounded md:flex-col md:items-center md:justify-center md:w-1/4">
                            <div class="md:text-3xl">Jan</div>
                            <div class="md:text-6xl">13</div>
                            <div class="md:text-xl">7 pm</div>
                        </div>
                        <div class="p-4 font-normal text-gray-800 md:w-3/4">
                            <h1 class="mb-4 text-4xl font-bold leading-none tracking-tight text-gray-800">Paintings</h1>
                            <p class="leading-normal">The College Football Playoff (CFP) determines the national
                                champion of the top division of college football. The format fits within the academic
                                calendar and preserves the sport’s unique and compelling regular season.</p>
                            <div class="flex flex-row items-center mt-4 text-gray-700">

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Component 2 -->
                <div class="h-full">
                    <!-- Card -->
                    <div class="max-w-[360px] mx-auto">
                        <div class="bg-white shadow-lg rounded-lg p-5">
                            <ul class="space-y-4">
                                <li>
                                    <div class="flex items-start">
                                        <svg class="w-6 h-6 flex-shrink-0 fill-current mr-4" viewBox="0 0 24 24">
                                            <path class="text-indigo-500"
                                                d="M20 16h-3.3c.166.658.255 1.333.266 2.011a1 1 0 0 1-1 .989H8a1 1 0 0 1 0-2h7a4 4 0 0 0-4-4H7c-1.2-1.711-3.695-2-4.9-2H0v8.5l8.192 3.763a4.388 4.388 0 0 0 3.248.268L24 19.667S23.208 16 20 16Z" />
                                            <path class="text-indigo-300"
                                                d="m21.515 3.143-5-3a1 1 0 0 0-1.03 0l-5 3A1 1 0 0 0 10 4v6a1 1 0 0 0 1 1h3V7h4v4h3a1 1 0 0 0 1-1V4a1 1 0 0 0-.485-.857Z" />
                                        </svg>
                                        <div>
                                            <h4 class="text-lg font-bold text-gray-900 mb-1">About</h4>
                                            <p class="text-sm text-gray-500 leading-relaxed">Lorem ipsum dolor sit
                                                amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex items-start">
                                        <svg class="w-6 h-6 flex-shrink-0 fill-current mr-4" viewBox="0 0 24 24">
                                            <path class="text-indigo-500"
                                                d="m13.371 14.749-3.742-1.5A1 1 0 0 1 9 12.323v-.451a7.18 7.18 0 0 0 3.248-1.115.988.988 0 0 0 .181-1.416A5.991 5.991 0 0 1 11 6.038a3.879 3.879 0 0 0-1.9-3.5A4.046 4.046 0 0 0 3 6a5.943 5.943 0 0 1-1.429 3.342.987.987 0 0 0 .181 1.415A7.18 7.18 0 0 0 5 11.872v.451a1 1 0 0 1-.629.928l-3.742 1.5a1 1 0 0 0-.629.926V18a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.323a1 1 0 0 0-.629-.928Z" />
                                            <path class="text-indigo-300"
                                                d="m23.371 12.749-3.742-1.5a1 1 0 0 1-.629-.926v-.878A3.982 3.982 0 0 0 21 6V4.172A4.116 4.116 0 0 0 17.393.019 4 4 0 0 0 13 4v2a3.982 3.982 0 0 0 2 3.445v.878a4.737 4.737 0 0 1-1.6 2.065c-.068.044-.134.093-.2.138l.911.365A2.988 2.988 0 0 1 16 15.677V18c-.003.341-.066.68-.184 1H23a1 1 0 0 0 1-1v-4.323a1 1 0 0 0-.629-.928Z" />
                                        </svg>
                                        <div>
                                            <h4 class="text-lg font-bold text-gray-900 mb-1">Time</h4>
                                            <p class="text-sm text-gray-500 leading-relaxed">Lorem ipsum dolor sit
                                                amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex items-start">
                                        <svg class="w-6 h-6 flex-shrink-0 fill-current mr-4" viewBox="0 0 24 24">
                                            <path class="text-indigo-500"
                                                d="M12 0C7.589 0 4 3.589 4 8s3.589 8 8 8 8-3.589 8-8-3.589-8-8-8Zm0 10a2 2 0 1 1-.001-3.999A2 2 0 0 1 12 10Z" />
                                            <path class="text-indigo-300"
                                                d="M3.95 13.908.125 21.5l5.434-1.358L8 24l2.94-6.058c-2.866-.303-5.365-1.827-6.99-4.034ZM20.05 13.908l3.825 7.592-5.434-1.358L16 24l-2.94-6.058c2.866-.303 5.365-1.827 6.99-4.034Z" />
                                        </svg>
                                        <div>
                                            <h4 class="text-lg font-bold text-gray-900 mb-1">Location</h4>
                                            <p class="text-sm text-gray-500 leading-relaxed">Lorem ipsum dolor sit
                                                amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                            </p>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="flex items-start">
                                        <svg class="w-6 h-6 flex-shrink-0 fill-current mr-4" viewBox="0 0 24 24">
                                            <path class="text-indigo-500"
                                                d="M12 0C7.589 0 4 3.589 4 8s3.589 8 8 8 8-3.589 8-8-3.589-8-8-8Zm0 10a2 2 0 1 1-.001-3.999A2 2 0 0 1 12 10Z" />
                                            <path class="text-indigo-300"
                                                d="M3.95 13.908.125 21.5l5.434-1.358L8 24l2.94-6.058c-2.866-.303-5.365-1.827-6.99-4.034ZM20.05 13.908l3.825 7.592-5.434-1.358L16 24l-2.94-6.058c2.866-.303 5.365-1.827 6.99-4.034Z" />
                                        </svg>
                                        <div>
                                            <h4 class="text-lg font-bold text-gray-900 mb-1">Event Host</h4>
                                            <p class="text-sm text-gray-500 leading-relaxed">Lorem ipsum dolor sit
                                                amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex items-start">
                                        <svg class="w-6 h-6 flex-shrink-0 fill-current mr-4" viewBox="0 0 24 24">
                                            <path class="text-indigo-500"
                                                d="M22.879 8.755a6.962 6.962 0 0 1-1.592 1.707 9.417 9.417 0 0 1-.65 5.922l-.7-.676a.99.99 0 0 0-.5-.262l-3-.6a.992.992 0 0 0-.55.045l-3.1 1.175a1 1 0 0 0-.585.592l-.9 2.465-1.811 1.963a.977.977 0 0 0-.227.457 9.477 9.477 0 0 1-3.448-1.899l.13-.55 1.618-1.358a1 1 0 0 0 .319-1.04l-.674-2.36a.984.984 0 0 0-.23-.407l-1.172-1.253-.157-.266.579-.494 2.369-1.2a1 1 0 0 0 .537-.745l.387-2.615a1 1 0 0 0-.26-.83L7.691 4.857a.877.877 0 0 0-.091-.093l-.513-.422a9.439 9.439 0 0 1 3.154-1.214A6.92 6.92 0 0 1 11.194 1 11.51 11.51 0 0 0 5.61 22.078a11.523 11.523 0 0 0 13.41-.477 11.51 11.51 0 0 0 3.859-12.846Z" />
                                            <path class="text-indigo-300"
                                                d="M16 9.9V12a1 1 0 0 0 2 0V9.9A5.03 5.03 0 0 0 22 5a5 5 0 0 0-10 0 5.03 5.03 0 0 0 4 4.9Z" />
                                        </svg>
                                        <div>
                                            <a href="{{ route('event.booking', 1) }}">
                                                <h4
                                                    class="text-lg font-bold text-indigo-600 mb-1 hover:text-indigo-900">
                                                    Book a spot!</h4>
                                            </a>
                                        </div>
                                    </div>
                                </li>




                            </ul>
                        </div>
                    </div>
                </div>
            </div>



            <div>
                <!--Component 3-->
                <section class="bg-white dark:bg-gray-900 py-8 lg:py-16">
                    <div class="max-w-2xl mx-auto px-4">
                        <div class="flex justify-between items-center mb-6">
                            <h2 class="text-lg lg:text-2xl font-bold text-gray-900 dark:text-white">Discussion (20)</h2>
                        </div>
                        <form class="mb-6">
                            <div
                                class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                                <label for="comment" class="sr-only">Your comment</label>
                                <textarea id="comment" rows="6"
                                    class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none dark:text-white dark:placeholder-gray-400 dark:bg-gray-800"
                                    placeholder="Write a comment..." required></textarea>
                            </div>
                            <button type="submit"
                                class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                                Post comment
                            </button>
                        </form>
                        <article class="p-6 mb-6 text-base bg-white rounded-lg dark:bg-gray-900">
                            <footer class="flex justify-between items-center mb-2">
                                <div class="flex items-center">
                                    <p class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white"><img
                                            class="mr-2 w-6 h-6 rounded-full"
                                            src="https://flowbite.com/docs/images/people/profile-picture-2.jpg"
                                            alt="Michael Gough">Michael Gough</p>
                                    <p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate
                                            datetime="2022-02-08" title="February 8th, 2022">Feb. 8, 2022</time></p>
                                </div>
                                <button id="dropdownComment1Button" data-dropdown-toggle="dropdownComment1"
                                    class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-400 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                    type="button">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                        </path>
                                    </svg>
                                    <span class="sr-only">Comment settings</span>
                                </button>
                                <!-- Dropdown menu -->
                                <div id="dropdownComment1"
                                    class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                        aria-labelledby="dropdownMenuIconHorizontalButton">
                                        <li>
                                            <a href="#"
                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Remove</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Report</a>
                                        </li>
                                    </ul>
                                </div>
                            </footer>
                            <p class="text-gray-500 dark:text-gray-400">Very straight-to-point article. Really worth
                                time reading. Thank you! But tools are just the
                                instruments for the UX designers. The knowledge of the design tools are as important as
                                the
                                creation of the design strategy.</p>
                            <div class="flex items-center mt-4 space-x-4">
                                <button type="button"
                                    class="flex items-center text-sm text-gray-500 hover:underline dark:text-gray-400">
                                    <svg aria-hidden="true" class="mr-1 w-4 h-4" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                        </path>
                                    </svg>
                                    Reply
                                </button>
                            </div>
                        </article>
                        <article class="p-6 mb-6 ml-6 lg:ml-12 text-base bg-white rounded-lg dark:bg-gray-900">
                            <footer class="flex justify-between items-center mb-2">
                                <div class="flex items-center">
                                    <p class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white"><img
                                            class="mr-2 w-6 h-6 rounded-full"
                                            src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                                            alt="Jese Leos">Jese Leos</p>
                                    <p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate
                                            datetime="2022-02-12" title="February 12th, 2022">Feb. 12, 2022</time></p>
                                </div>
                                <button id="dropdownComment2Button" data-dropdown-toggle="dropdownComment2"
                                    class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-400 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                    type="button">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                        </path>
                                    </svg>
                                    <span class="sr-only">Comment settings</span>
                                </button>
                                <!-- Dropdown menu -->
                                <div id="dropdownComment2"
                                    class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                        aria-labelledby="dropdownMenuIconHorizontalButton">
                                        <li>
                                            <a href="#"
                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Remove</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Report</a>
                                        </li>
                                    </ul>
                                </div>
                            </footer>
                            <p class="text-gray-500 dark:text-gray-400">Much appreciated! Glad you liked it ☺️</p>
                            <div class="flex items-center mt-4 space-x-4">
                                <button type="button"
                                    class="flex items-center text-sm text-gray-500 hover:underline dark:text-gray-400">
                                    <svg aria-hidden="true" class="mr-1 w-4 h-4" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                        </path>
                                    </svg>
                                    Reply
                                </button>
                            </div>
                        </article>
                        <article
                            class="p-6 mb-6 text-base bg-white border-t border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                            <footer class="flex justify-between items-center mb-2">
                                <div class="flex items-center">
                                    <p class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white"><img
                                            class="mr-2 w-6 h-6 rounded-full"
                                            src="https://flowbite.com/docs/images/people/profile-picture-3.jpg"
                                            alt="Bonnie Green">Bonnie Green</p>
                                    <p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate
                                            datetime="2022-03-12" title="March 12th, 2022">Mar. 12, 2022</time></p>
                                </div>
                                <button id="dropdownComment3Button" data-dropdown-toggle="dropdownComment3"
                                    class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-400 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                    type="button">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                        </path>
                                    </svg>
                                    <span class="sr-only">Comment settings</span>
                                </button>
                                <!-- Dropdown menu -->
                                <div id="dropdownComment3"
                                    class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                        aria-labelledby="dropdownMenuIconHorizontalButton">
                                        <li>
                                            <a href="#"
                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Remove</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Report</a>
                                        </li>
                                    </ul>
                                </div>
                            </footer>
                            <p class="text-gray-500 dark:text-gray-400">The article covers the essentials, challenges,
                                myths and stages the UX designer should consider while creating the design strategy.</p>
                            <div class="flex items-center mt-4 space-x-4">
                                <button type="button"
                                    class="flex items-center text-sm text-gray-500 hover:underline dark:text-gray-400">
                                    <svg aria-hidden="true" class="mr-1 w-4 h-4" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                        </path>
                                    </svg>
                                    Reply
                                </button>
                            </div>
                        </article>
                        <article
                            class="p-6 text-base bg-white border-t border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                            <footer class="flex justify-between items-center mb-2">
                                <div class="flex items-center">
                                    <p class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white"><img
                                            class="mr-2 w-6 h-6 rounded-full"
                                            src="https://flowbite.com/docs/images/people/profile-picture-4.jpg"
                                            alt="Helene Engels">Helene Engels</p>
                                    <p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate
                                            datetime="2022-06-23" title="June 23rd, 2022">Jun. 23, 2022</time></p>
                                </div>
                                <button id="dropdownComment4Button" data-dropdown-toggle="dropdownComment4"
                                    class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-400 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                    type="button">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                        </path>
                                    </svg>
                                </button>
                                <!-- Dropdown menu -->
                                <div id="dropdownComment4"
                                    class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                        aria-labelledby="dropdownMenuIconHorizontalButton">
                                        <li>
                                            <a href="#"
                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Remove</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Report</a>
                                        </li>
                                    </ul>
                                </div>
                            </footer>
                            <p class="text-gray-500 dark:text-gray-400">Thanks for sharing this. I do came from the
                                Backend development and explored some of the tools to design my Side Projects.</p>
                            <div class="flex items-center mt-4 space-x-4">
                                <button type="button"
                                    class="flex items-center text-sm text-gray-500 hover:underline dark:text-gray-400">
                                    <svg aria-hidden="true" class="mr-1 w-4 h-4" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                        </path>
                                    </svg>
                                    Reply
                                </button>
                            </div>
                        </article>
                    </div>
                </section>
            </div>


</x-app-layout>
