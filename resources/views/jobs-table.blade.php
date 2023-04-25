{{-- @extends('layout') --}}
@include('layouts.navigation')
<!-- component -->
@vite(['resources/css/app.css', 'resources/js/app.js'])

<body class="dark:bg-gray-900">

</body>
@include('sweetalert::alert')
<div class="relative overflow-x-auto shadow-md sm:rounded-lg m-7">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Titile
                </th>
                <th scope="col" class="px-6 py-3">
                    Company
                </th>
                <th scope="col" class="px-6 py-3">
                    Location
                </th>
                <th scope="col" class="px-6 py-3">
                    Webiste
                </th>
                <th scope="col" class="px-6 py-3">
                    Tags
                </th>
                <th scope="col" class="px-6 py-3">
                    Experince
                </th>
                <th scope="col" class="px-6 py-3">
                    Description
                </th>
                <th scope="col" class="px-6 py-3">
                    logo
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="">Actions</span>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jobs as $job)
                <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $job->title }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $job->company }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $job->location }}
                    </td>
                    <td class="px-6 py-4">
                        <a class="hover:underline" href="{{ $job->website }}">{{ $job->website }}</a>
                    </td>
                    <td class="px-6 py-4">
                        {{ $job->tags }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $job->experience }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $job->description }}
                    </td>
                    <td class="px-6 py-4">

                        <img class=" w-6 j-6 mr-6 hover:w-60 md:block"
                            src="{{ $job->logo ? asset('storage/' . $job->logo) : asset('images/no-image.png') }}"
                            alt="" />
                        </a>
                    </td>

                    <td class="px-5 py-5 text-center">
                        <a href="{{ route('jobs.edit', $job->id) }}"
                            class="font-medium   text-blue-600 dark:text-blue-500 hover:underline text-lg">Edit</a>
                        <form method="POST" action="{{ route('jobs.destroy', $job->id) }}">
                            @method('Delete')
                            @csrf
                            <button class="font-medium  text-blue-600 dark:text-blue-500 hover:underline"
                                type="submit">Delete</button>



                        </form>
                    </td>

                </tr>
            @endforeach



        </tbody>
    </table>
</div>
