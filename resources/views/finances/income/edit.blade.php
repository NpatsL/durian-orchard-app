<x-app-layout>
    <div class="max-w-sm mx-auto mt-20 p-4 shadow-md rounded-lg border-t-2 border-teal-400">
        <div class="flex justify-between pb-4">
            <a href="{{ route('finances.income.index') }}" class="btn btn-primary">Back</a>
            <p class="font-bold text-xl">Edit Income</p>
        </div>
        <form action="{{ route('finances.income.update', $income->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Income Name</label>
                <input type="text" id="name" name="name" value="{{ $income->name }}" class="form-input" required>
            </div>

            <div class="mb-4">
                <label for="amount" class="block text-gray-700 text-sm font-bold mb-2">Amount</label>
                <input type="number" id="amount" name="amount" value="{{ $income->amount }}" class="form-input" required>
            </div>

            <div class="mb-4">
                <label for="date" class="block text-gray-700 text-sm font-bold mb-2">Date</label>
                <input type="date" id="date" name="date" value="{{ $income->date }}" class="form-input" required>
            </div>

            <div class="flex items-center justify-end mt-6">
                <button type="submit" class="btn btn-primary">Update Income</button>
            </div>
        </form>
    </div>
</x-app-layout>