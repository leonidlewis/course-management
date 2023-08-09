<x-app-layout>

    <x-slot name="header" class="d-flex">
    <h1>Add a New Course</h1>
</x-slot>
<div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
    <form class="w-full max-w-sm" method="post" action="/add-course">
        @csrf
        <div class="md:flex md:items-center mb-6">
          <div class="md:w-1/3">
            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="title">
              Title
            </label>
          </div>
          <div class="md:w-2/3">
            <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="title" name="title" required type="text">
          </div>
        </div>
        <div class="md:flex md:items-center mb-6">
          <div class="md:w-1/3">
            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="description">
              Description
            </label>
          </div>
          <div class="md:w-2/3">
            <input class="bg-gray-200 border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="description"  name="description" required type="text">
          </div>
        </div>
        <div class="md:flex md:items-center">
          <div class="md:w-1/3">
            
        </div>
          <div class="md:w-2/3">
            <button class="shadow bg-black hover:bg-purple-400 focus:shadow-outline focus:outline-none text-black font-bold py-2 px-4 rounded" type="submit">
              Add course
            </button>
        </div>
    </div>
</form>
<button onclick="window.location='{{ route('courses') }}'" class="bg-blue hover:bg-blue-700 text-black font-bold py-2 rounded">Back to Courses list</button>
    {{-- <form method="post" action="/add-course">
        @csrf
        <div class="flex mb-4">
            <div class="items-center">
                <p for="title">Title:</p>
            </div>
            <div class="flex-1">
                <input type="text" name="title" required>
            </div>
        </div>
        <div class="flex items-center">
            <p for="description">Description:</p>
            <textarea name="description" required></textarea>
        </div>
        <button type="submit">Add Course</button>
    </form>
    <a href="/courses">Back to Courses</a> --}}
</div>
</x-app-layout>