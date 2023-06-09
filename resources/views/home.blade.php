<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Buttercup') }}
        </h2>
    </x-slot>
    <!-- This is card 1 -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container mx-auto">

                <div class="grid grid-cols-4 gap-4">

                    <!--card 1-->
                    @livewire('event-card', [
                        'hotel' => [],
                    ])

                    <!--card 2-->
                    @livewire('event-card', [
                        'hotel' => [],
                    ])

                    <!--card 3-->
                    @livewire('event-card', [
                        'hotel' => [],
                    ])

                    <!--card 4-->
                    @livewire('event-card', [
                        'hotel' => [],
                    ])


                </div>


            </div>
        </div>
    </div>
</x-app-layout>
