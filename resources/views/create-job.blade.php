@include('layouts.navigation')
<x-guest-layout>
    @include('sweetalert::alert')

    <form method="POST" enctype="multipart/form-data" action="{{ route('jobs.store') }}">
        @csrf

        <!-- title -->
        <div>
            <x-input-label for="title" :value="__('title')" />
            <x-text-input id="title" name='title' class="block mt-1 w-full" type="text" title="title"
                :value="old('title')" required autocomplete="title" />
            <x-input-error :messages="$errors->get('title')" class="mt-2" />
        </div>

        <!-- company  -->
        <div class="mt-4">
            <x-input-label for="company" :value="__('company')" />
            <x-text-input id="company" name='company' class="block mt-1 w-full" type="text" title="company"
                :value="old('company')" required autocomplete="usertitle" />
            <x-input-error :messages="$errors->get('company')" class="mt-2" />
        </div>

        <!-- location -->
        <div class="mt-4">
            <x-input-label for="location" :value="__('location')" />

            <x-text-input id="location" name="location" class="block mt-1 w-full" type="text" title="location"
                required autocomplete="new-location" />

            <x-input-error :messages="$errors->get('location')" class="mt-2" />
        </div>

        <!-- website -->
        <div class="mt-4">
            <x-input-label for="website" :value="__('website')" />

            <x-text-input id="website" name="website" class="block mt-1 w-full" type="url" title="website"
                required autocomplete="website" />

            <x-input-error :messages="$errors->get('website')" class="mt-2" />
        </div>
        <!-- tags -->
        <div class="mt-4">
            <x-input-label for="tags" :value="__('tags')" />

            <x-text-input id="tags" name="tags" class="block mt-1 w-full" type="text" title="tags" required
                autocomplete="tags" />

            <x-input-error :messages="$errors->get('website')" class="mt-2" />
        </div>
        <!-- experience -->
        <div class="mt-4">
            <x-input-label for="experience" :value="__('experience')" />

            <x-text-input id="experience" name="experience" class="block mt-1 w-full" type="number" title="experience"
                required autocomplete="experience" />

            <x-input-error :messages="$errors->get('experience')" class="mt-2" />
        </div>
        {{-- logo --}}
        <div class="mt-4">

            <x-input-label for="experience" :value="__('Logo')" />

            <input
                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                type="file" name="logo" id="logo">
            <x-input-error :messages="$errors->get('logo')" class="mt-2" />
        </div>
        <!-- description -->
        <div class="mt-4">

            <x-input-label for="description" :value="__('description')" />
            <textarea
                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                name="description" id="description" cols="50" rows="10">

</textarea>
            {{-- <x-text-input id="description" name="description" class="block mt-1 w-full" type="text"
                title="description" required autocomplete="description" /> --}}

            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>


        <div class="flex items-center justify-end mt-4">

            <x-primary-button class="ml-4">
                {{ __('Create') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
