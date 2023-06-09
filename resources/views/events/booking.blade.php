<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Book Event X') }}
        </h2>
    </x-slot>
    <!-- This is card 1 -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container mx-auto">

                <!-- component -->
                <div class="w-full h-auto overflow-scroll p-4 flex items-center justify-center">
                    <div class="bg-white py-6 px-10 sm:max-w-md w-full ">
                        <div class="sm:text-3xl text-2xl font-semibold text-center text-sky-600  mb-12">
                            Booking for Event X
                        </div>
                        <div class="">
                            <div>
                                <input type="text"
                                    class="focus:outline-none border-b w-full pb-2 border-sky-400 placeholder-gray-500"
                                    placeholder="Name " />
                            </div>
                            <div>
                                <input type="email"
                                    class="focus:outline-none border-b w-full pb-2 border-sky-400 placeholder-gray-500 my-8"
                                    placeholder="Email Adress " />
                            </div>
                            <div>
                                <input type="text"
                                    class="focus:outline-none border-b w-full pb-2 border-sky-400 placeholder-gray-500 mb-8"
                                    placeholder="Country " />
                            </div>
                            <div class="">
                                <input type="text"
                                    class="focus:outline-none border-b w-full pb-2 border-sky-400 placeholder-gray-500 mb-8"
                                    placeholder="Phone Number " />
                            </div>
                            <div class="">
                                <input type="password"
                                    class="focus:outline-none border-b w-full pb-2 border-sky-400 placeholder-gray-500 mb-8"
                                    placeholder="Password " />
                            </div>
                            <div>

                            </div>

                            <div class="">
                                <input type="text"
                                    class="focus:outline-none border-b w-full pb-2 border-sky-400 placeholder-gray-500 mb-8"
                                    placeholder="Card Number " />
                            </div>

                            <div class="flex">
                                <input type="checkbox" class="border-sky-400 " value="" />
                                <div class="px-3 text-gray-500">
                                    I accept terms & conditions
                                </div>
                            </div>
                            <div class="flex justify-center my-6">
                                <button
                                    class=" rounded-full  p-3 w-full sm:w-56   bg-gradient-to-r from-sky-600  to-teal-300 text-white text-lg font-semibold ">
                                    Pay and Book
                                </button>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
