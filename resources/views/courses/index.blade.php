<x-app-layout>
    <x-slot name="header" class="d-flex">
        <div class="col-3 p-5">
            <h1>List of Courses</h1>
        </div>
    </x-slot>
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <ol class="max-w-md space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400">
            @forelse ($courses as $course)
                <li>{{ $course->title }} -> {{ $course->description }}</li>
            @empty
                <li>No courses available.</li>
            @endforelse
        </ol>
        <div class="mt-6">
        <button onclick="window.location='{{ route('add-course') }}'" class="shadow bg-black hover:bg-purple-400 focus:shadow-outline focus:outline-none text-black font-bold py-2 px-4 rounded">Add Course</button>
        </div>
    </div>
    </x-app-layout>
