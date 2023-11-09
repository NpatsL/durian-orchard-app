<x-app-layout>
    <div class="max-w-2xl mx-auto mt-20 p-4 shadow-md rounded-lg border-t-2 border-teal-400">
        <div class="flex justify-between pb-4">
            <a href="{{ route('dashboard') }}"
                class="bg-red-400 hover:bg-red-600 text-black font-bold py-2 px-4 rounded">Back</a>
            <p class="font-bold text-xl">Edit task</p>
        </div>
        <form action="{{ route('task.update', $task->id) }}" method="POST"
            onsubmit="return confirm('Are you sure you want to edit this task?');">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Task Name</label>
                <input type="text" id="name" name="name" value="{{ $task->name }}" class="form-input"
                    required>
            </div>

            <div class="mb-4">
                <label for="detail" class="block text-gray-700 text-sm font-bold mb-2">Task Details</label>
                <input type="text" id="detail" name="detail" value="{{ $task->detail }}" class="form-input"
                    required>
            </div>

            <div class="mb-4">
                <label for="deadline" class="block text-gray-700 text-sm font-bold mb-2">Deadline</label>
                <input type="date" id="deadline" name="deadline" value="{{ $task->deadline }}" class="form-input"
                    required>
            </div>

            <div class="mb-4">
                <label for="material" class="block text-gray-700 text-sm font-bold mb-2">Material</label>
                <select id="material_id" name="material_id">
                    <option value="null">None</option>
                    @foreach ($materials as $material)
                        <option value="{{ $material->id }}">( {{ $material->lotMaterial->date }} ) {{ $material->name }} ( {{ $material->unit }} )
                        </option>
                        
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="use_qty" class="block text-gray-700 text-sm font-bold mb-2">Quantity used </label>
                <input type="number" id="use_qty" name="use_qty" value="{{ $task->use_qty }}" class="form-input"
                    min="1" step="0.01" required>
                <p id="amount-error" class="text-red-500 text-sm mt-2 hidden">Amount must be greater than 0.</p>
            </div>



            <div class="flex items-center justify-end mt-6">
                <button type="submit"
                    class="bg-green-400 hover:bg-green-600 text-black font-bold py-2 px-4 rounded">Update task</button>
            </div>
        </form>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const today = new Date();
            const todayFormatted = today.toISOString().split("T")[0];
            document.getElementById("deadline").min = todayFormatted;
            const mat = document.getElementById("material_id");
            mat.onchange = function() {
                if (mat.options[mat.selectedIndex].value == "null") {
                    document.getElementById("use_qty").disabled = true;
                } else {
                    document.getElementById("use_qty").disabled = false;
                }
            }

        });
    </script>
</x-app-layout>
