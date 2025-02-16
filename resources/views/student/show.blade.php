<x-app-layout>
    <div class="container mx-auto mt-6">
        <h2 class="text-3xl font-semibold mb-4">Student Details</h2>

        <div class="bg-white shadow-md rounded-lg p-6">
            <p><strong>Name:</strong> {{ $student->name }}</p>
            <p><strong>Age:</strong> {{ $student->age }}</p>
            <p><strong>Class:</strong> {{ $student->class }}</p>
            <p><strong>Section:</strong> {{ $student->section }}</p>
            <p><strong>Contact:</strong> {{ $student->contact }}</p>

            <a href="{{ route('students.index') }}" class="text-blue-500 hover:underline">Back to Student List</a>
        </div>
    </div>
</x-app-layout>
