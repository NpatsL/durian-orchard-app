<x-app-layout>
    <div class="max-w-2xl mx-auto mt-20 p-4 shadow-md rounded-lg border-t-2 border-teal-400">
        <div class="flex justify-between pb-4">
            <a href="{{ route('finances.expense.index') }}" class="bg-red-400 hover:bg-red-600 text-black font-bold py-2 px-4 rounded">Back</a>
            <p class="font-bold text-xl">Edit Expense</p>
        </div>
        <form action="{{ route('finances.expense.update', $expense->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Expense Name</label>
                <input type="text" id="name" name="name" value="{{ $expense->name }}" class="form-input" required>
            </div>

            <div class="mb-4">
                <label for="amount" class="block text-gray-700 text-sm font-bold mb-2">Amount</label>
                <input type="number" id="amount" name="amount" value="{{ $expense->amount }}" class="form-input" required>
            </div>

            <div class="mb-4">
                <label for="date" class="block text-gray-700 text-sm font-bold mb-2">Date</label>
                <input type="date" id="date" name="date" value="{{ $expense->date }}" class="form-input" required>
            </div>

            <div class="flex items-center justify-end mt-6">
                <button type="submit" class="bg-green-400 hover:bg-green-600 text-black font-bold py-2 px-4 rounded">Update Expense</button>
            </div>
        </form>
    </div>
</x-app-layout>