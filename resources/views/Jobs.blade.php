@extends('layout')
@section('content')
    @include('partials._hero')

    <div class="lg:grid lg:grid-cols-2  gap-4 space-y-4 md:space-y-0 mx-4">
        @if (count($jobs) == 0)
            <p class="text-5xl text-center text-neutral-950">Not Jobs Found....</p>
            <a href="/" class="flex justify-end items-end">
                <button type="submit" class="h-20 w-40 text-white rounded-lg bg-blue-500 hover:bg-blue-600">
                    Back To Home
                </button></a>
        @else
            @foreach ($jobs as $job)
                <x-job-card :job="$job"></x-job-card>
            @endforeach
        @endif


    </div>
    <div class="m-8 p-4 flex justify-end">
        {{ $jobs->links() }}
    </div>
@endsection
