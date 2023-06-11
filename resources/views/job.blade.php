@extends('layout')
{{-- {{dd($name)}} --}}
<section class="relative h-64 bg-blue-700 flex flex-col justify-center align-center text-center space-y-4 mb-4">
    @include('sweetalert::alert')
    <a href="/" class="inline-block absolute top-4 text-white m-4">
        <i class="fa-solid fa-arrow-left">
        </i>
        <span class="p-2">back</span>
    </a>

    <div class="z-10">
        <p class="text-5xl text-white font-bold my-4">
            {{ $joby->title }}
        </p>
        <p class="text-2xl text-white font-medium font-semibold  my-2">
            Join To {{ $joby->company }} Company
        </p>

    </div>
    <div class="absolute right-10 bottom-4 text-white text-lg bg-slate-800 p-2 m-2 rounded-md">


        {{ $joby->created_at->diffForHumans() }} 
    </div>
    

</section>

<div class="p-5 m-5">
    <form action="{{ route('apply.store') }}" method="POST" enctype="multipart/form-data">
        @csrf



        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="sm:col-span-3">
                <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">First name</label>
                <div class="mt-2">
                    <input type="text" name="first_name" value="{{old('first_name')}}" required id="first-name" autocomplete="given-name"
                        class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                 <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                    </div>

            </div>

            <div class="sm:col-span-3">
                <label for="last-name" class="block text-sm font-medium leading-6 text-gray-900">Last name</label>
                <div class="mt-2">
                    <input type="text" name="last_name" value="{{old('last_name')}}" required id="last-name" autocomplete="family-name"
                        class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                </div>
            </div>
            <div class="sm:col-span-3">
                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                <div class="mt-2">
                    <input type="email" name="email" value="{{old('email')}}" required id="email" autocomplete="given-name"
                    class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                </div>
                
                <div class="sm:col-span-3">
                    <label for="phone" class="block text-sm font-medium leading-6 text-gray-900">Phone</label>
                    <div class="mt-2">
                        <input type="tel" name="phone" value="{{old('phone')}}" required id="phone" autocomplete="family-name"
                        class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                        </div>
                    </div>
                    <div class="sm:col-span-3">
                        <label for="linkedin-profile" class="block text-sm font-medium leading-6 text-gray-900">Linkedin
                            Profile</label>
                            <div class="mt-2">
                                <input type="url" name="linkedin_profile" value="{{old('linkedin_profile')}}" required id="linkedin-profile"
                                autocomplete="family-name"
                                class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                <x-input-error :messages="$errors->get('linkedin_profile')" class="mt-2" />
                                </div>
                                
                            </div>
                            <div class="sm:col-span-3">
                                <label for="github" class="block text-sm font-medium leading-6 text-gray-900">Github Url</label>
                                <div class="mt-2">
                                    <input type="url" name="github_url" value="{{old('github_url')}}" required id="github-url" autocomplete="family-name"
                                    class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    <x-input-error :messages="$errors->get('github_url')" class="mt-2" />
                                    </div>
                                </div>
            <div class="sm:col-span-3">
                <label for="github" class="block text-sm font-medium leading-6 text-gray-900">Upload cv</label>
                <div class="mt-2">
                    <input type="file" name="cv" required id="cv" accept=".pdf"
                    autocomplete="family-name"
                    class="block  w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    <x-input-error :messages="$errors->get('cv')" class="mt-2" />
                </div>
                
                
            </div>
             <div class=" relative">
                
                
                 <button type="submit"
                                    class="bg-blue-700 absolute top-6 left-10 w-48 h-12 hover:bg-blue-500 text-white font-bold  rounded -lg">
                                    <span class="p-5 ">Submit</span>
                                    
    
                                </button>
            </div>
                
                
               
            </div>
            
                
               
            </div>
            <input type="text" name="job_id" class="hidden" value="{{ $joby->id }}">

    </form>



</div>
