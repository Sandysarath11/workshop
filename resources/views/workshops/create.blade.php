<x-app-layout>
 <!-- Form Container -->
 <div class="max-w-lg mx-auto px-4 py-6 bg-white rounded-lg shadow-md mt-10">
        <h1 class="text-3xl font-bold text-gray-800 mb-6 text-center">
            {{ isset($workshop) ? 'Edit' : 'Create' }} Workshop
        </h1>

        <!-- Display Validation Errors (if any) -->
        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-4 mb-6 rounded-lg">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form Start -->
        <form action="{{ isset($workshop) ? route('workshops.update', $workshop->id) : route('workshops.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if (isset($workshop))
                @method('PUT')
            @endif

            <!-- Workshop Name Input -->
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-semibold mb-2">Workshop Name</label>
                <input type="text" name="name" id="name" value="{{ old('name', isset($workshop) ? $workshop->name : '') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>
            </div>

            <!-- Workshop Description Input -->
            <div class="mb-4">
                <label for="desc" class="block text-gray-700 text-sm font-semibold mb-2">Description</label>
                <textarea name="desc" id="desc" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>{{ old('desc', isset($workshop) ? $workshop->desc : '') }}</textarea>
            </div>

            <!-- Image Upload -->
            <div class="mb-4">
                <label for="image" class="block text-gray-700 text-sm font-semibold mb-2">Upload Image</label>
                <input type="file" name="image" id="image" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- Video Upload -->
            <div class="mb-4">
                <label for="video" class="block text-gray-700 text-sm font-semibold mb-2">Upload Video</label>
                <input type="file" name="video" id="video" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- Submit Button -->
            <div class="flex justify-end">
                <button type="submit" class="px-6 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:outline-none">
                    {{ isset($workshop) ? 'Update Workshop' : 'Create Workshop' }}
                </button>
            </div>
        </form>
    </div>
    </x-app-layout>