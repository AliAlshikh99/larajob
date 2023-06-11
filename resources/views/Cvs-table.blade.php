{{-- @extends('layout') --}}
@include('layouts.navigation')
<!-- component -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>LaraJob</title>
</head>
<body class="dark:bg-gray-900">
@include('sweetalert::alert')

<div class="relative overflow-x-auto shadow-md sm:rounded-lg m-7">
    <table class="w-full text-sm text-center text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700  bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-3 py-5">
                    ID
                </th>
                <th scope="col" class="px-1 py-5">
                    First Name
                </th>
                <th scope="col" class="px-1 py-5">
                    Last Name
                </th>
                <th scope="col" class="px-1 py-5">
                    Email
                </th>
                <th scope="col" class="px-1 py-5">
                    Phone
                </th>
                <th scope="col" class="px-1 py-5">
                    Linkedin Profile
                </th>
                <th scope="col" class="px-1 py-5">
                    Github Url
                </th>
                <th scope="col" class="px-1 py-5">
                    CV
                </th>

            </tr>
        </thead>
        <tbody>
            @foreach ($cvs as $cv)
                <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="p-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $cv->id }}
                    </th>
                    <td class="p-2">
                        {{ $cv->first_name }}
                    </td>
                    <td class="p-2">
                        {{ $cv->last_name }}
                    </td>
                    <td class="p-2">
                        {{ $cv->email }}
                    </td>
                    <td class="p-2">
                        {{ $cv->phone }}
                    </td>
                    <td class="p-2">
                        <a class="hover:underline" href="{{ $cv->linkedin_profile }}">{{ $cv->linkedin_profile }}</a>
                    </td>
                    <td class="p-2">
                        <a class="hover:underline" href="{{ $cv->github_url }}">{{ $cv->github_url }}</a>
                    </td>
                    <td class="p-2">

                        <a title="Download" href="{{ asset('storage/' . $cv->cv) }}" target="_blank"
                            rel="noopener noreferrer">

                            {{ basename($cv->cv) }}
                        </a>
                    </td>


                    {{-- <td class="px-5 py-5 text-center">
                        <a href="{{ route('jobs.edit', $job->id) }}"
                            class="font-medium   text-blue-600 dark:text-blue-500 hover:underline text-lg">Edit</a>
                        <form method="POST" action="{{ route('jobs.destroy', $job->id) }}">
                            @method('Delete')
                            @csrf
                            <button class="font-medium  text-blue-600 dark:text-blue-500 hover:underline"
                                type="submit">Delete</button>



                        </form>
                    </td> --}}

                </tr>
            @endforeach



        </tbody>
    </table>
</div>
</body>

</html>


