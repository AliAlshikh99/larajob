<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="h-auto w-auto px-12 mx-auto sm:px-6  lg:px-16">
            <div class="bg-white w-96 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ 'Welcome Mr.' }}{{ Auth::user()->name }}
                </div>
            </div>
        </div>
    </div>



</x-app-layout>
