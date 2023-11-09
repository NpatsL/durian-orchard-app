<x-app-layout>
    <div class="max-w-2xl mx-auto mt-20 p-4 shadow-md rounded-lg border-t-2 border-teal-400">
        <div class="flex justify-between pb-4">
            <a href="{{ route('dashboard') }}" class="bg-red-400 hover:bg-red-600 text-black font-bold py-2 px-4 rounded">Back</a>
            <p class="font-bold text-xl">Edit task</p>
        </div>
        <form action="{{ route('task.update', $task->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to edit this task?');">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Task Name</label>
                <input type="text" id="name" name="name" value="{{ $task->name }}" class="form-input" required>
            </div>

            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Task Details</label>
                <input type="text" id="detail" name="detail" value="{{ $task->detail }}" class="form-input" required>
            </div>

            <div class="mb-4">
                <label for="date" class="block text-gray-700 text-sm font-bold mb-2">Date</label>
                <input type="date" id="date" name="date" value="{{ $task->date }}" class="form-input" required>           
            </div>

            <div class="flex items-center justify-end mt-6">
                <button type="submit" class="bg-green-400 hover:bg-green-600 text-black font-bold py-2 px-4 rounded">Update task</button>
            </div>
        </form>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const today = new Date();
            const todayFormatted = today.toISOString().split("T")[0];
            document.getElementById("date").min = todayFormatted;
        });
    </script>
</x-app-layout>