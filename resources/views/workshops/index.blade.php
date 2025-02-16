<x-app-layout>
    <!-- Header Section -->
    <div class="container mx-auto px-4 py-6">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">All Workshops</h1>
        
        <!-- Create New Workshop Button with Plus Icon -->
        <div class="flex justify-end mb-4">
            <a href="{{ route('workshops.create') }}" class="inline-flex items-center px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
                <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                Create New Workshop
            </a>
        </div>

        <!-- Workshops List Section -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @foreach ($workshops as $workshop)
                <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <!-- Workshop Name -->
                    <h2 class="text-xl font-semibold text-gray-800 mb-2">{{ $workshop->name }}</h2>
                    
                    <!-- Workshop Description (Limited to 100 characters) -->
                    <p class="text-gray-600 mb-4">{{ Str::limit($workshop->desc, 100) }}</p>
                    
                    <!-- Image Display -->
                    @if ($workshop->image)
                        <img src="{{ asset('storage/' . $workshop->image) }}" alt="{{ $workshop->name }}" class="w-full h-auto rounded-lg mb-4">
                    @endif

                    <!-- Video Display -->
                    @if ($workshop->video)
                        <div class="mb-4">
                            <video controls class="w-full h-auto rounded-lg">
                                <source src="{{ asset('storage/' . $workshop->video) }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    @else
                        <p>No video available for this workshop.</p>
                    @endif

                    <!-- Action Buttons (View, Edit, Delete) -->
                    <div class="flex justify-between items-center mt-4">
                        <a href="{{ route('workshops.show', $workshop->id) }}" class="text-blue-500 hover:underline">View</a>
                        <a href="{{ route('workshops.edit', $workshop->id) }}" class="text-yellow-500 hover:underline">Edit</a>
                        
                        <!-- Delete Form -->
                        <form action="{{ route('workshops.destroy', $workshop->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:underline">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
