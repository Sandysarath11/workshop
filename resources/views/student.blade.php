<x-app-layout>
    <div class="container mx-auto mt-6">
        <h2 class="text-2xl font-semibold mb-4">Student List</h2>
        
        <!-- Table to display student data -->
        <div class="overflow-x-auto bg-white shadow-md rounded-lg">
            <table class="min-w-full table-auto">
                <thead>
                    <tr class="bg-gray-100 border-b">
                        <th class="px-4 py-2 text-left text-gray-600">#</th>
                        <th class="px-4 py-2 text-left text-gray-600">Name</th>
                        <th class="px-4 py-2 text-left text-gray-600">Age</th>
                        <th class="px-4 py-2 text-left text-gray-600">Class</th>
                        <th class="px-4 py-2 text-left text-gray-600">Section</th>
                        <th class="px-4 py-2 text-left text-gray-600">Contact</th>
                        <th class="px-4 py-2 text-left text-gray-600">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $student)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-2 text-gray-800">{{ $student->id }}</td>
                            <td class="px-4 py-2 text-gray-800">{{ $student->name }}</td>
                            <td class="px-4 py-2 text-gray-800">{{ $student->age }}</td>
                            <td class="px-4 py-2 text-gray-800">{{ $student->class }}</td>
                            <td class="px-4 py-2 text-gray-800">{{ $student->section }}</td>
                            <td class="px-4 py-2 text-gray-800">{{ $student->contact }}</td>
                            <td class="px-4 py-2">
                                <a href="{{ route('students.show', $student->id) }}" class="text-blue-500 hover:underline">View</a>
                                <a href="{{ route('students.edit', $student->id) }}" class="text-yellow-500 hover:underline ml-2">Edit</a>
                                <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:underline ml-2">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
