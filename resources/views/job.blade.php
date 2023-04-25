@extends('layout')
<a href="/" class="inline-block text-black m-4"><i class="fa-solid fa-arrow-left"></i> Back
</a>
<div class="mx-4">
    <div class="bg-gray-50 border border-gray-200 p-10 rounded">
        <div class="flex flex-col items-center justify-center text-center">
            <img class="w-48 mr-6 mb-6 mt-2" src="{{{ $joby->logo ? asset('storage/' . $joby->logo) : asset('images/no-image.png') }}}" alt="" />

            <h3 class="text-2xl mb-2">{{ $joby->title }}</h3>
            <div class="text-xl font-bold mb-4">{{ $joby->company }}</div>
            <x-job-tags :tagCsv="$joby->tags"></x-job-tags>
            <div class="text-lg my-4">
                <i class="fa-solid fa-location-dot"></i> {{ $joby->location }}
            </div>
            <div class="border border-gray-200 w-full mb-6"></div>
            <div>
                <h3 class="text-3xl font-bold mb-4">
                    joby Description
                </h3>
                <div class="text-lg space-y-6">
                    <p>
                        {{ $joby->description }}
                    </p>




                    <a href="{{ $joby->website }}" target="_blank"
                        class="block bg-black text-white py-6 px-4 rounded-xl hover:opacity-80"><i
                            class="fa-solid fa-globe"></i> Visit
                        Website</a>
                </div>
            </div>
        </div>
    </div>
</div>
</main>

<footer
    class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-90 md:justify-center">
    <p class="ml-2">Copyright &copy; 2022, All Rights reserved</p>


</footer>
