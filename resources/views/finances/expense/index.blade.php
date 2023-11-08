<x-app-layout>
    <div class="max-w-5xl mx-auto mt-20 p-4 shadow-md rounded-lg border-t-2 border-teal-400">
        <div class="flex justify-between pb-4">
            <a href="{{ route('finances.index') }}" class="bg-red-400 hover:bg-red-600 text-black font-bold py-2 px-4 rounded">Back</a>
            <p class="font-bold text-xl">Expense List</p>
            <a href="{{ route('finances.expense.create') }}" class="bg-blue-400 hover:bg-blue-600 text-black font-bold py-2 px-4 rounded">New Expense</a>
        </div>
        <div class="flex flex-col gap-2 pl-2">
            @if (count($expenses) === 0)
                <div class="flex items-center justify-center py-4 px-6">
                    <p class="text-3xl font-medium text-gray-800">There are no expense records in the system.</p>
                </div>
            @endif
            @foreach ($expenses->reverse() as $expense)
                <div class="bg-white shadow-md rounded-lg p-4 mb-4">
                    <p class="text-gray-700 text-lg font-medium">{{ $loop->iteration }}.</p>
                    <div class="flex-1">
                        <div class="flex items-center">
                            <p class="font-bold">Id :</p>
                            <p class="ml-2">{{ $expense->id }}</p>
                        </div>
                        <div class="flex items-center">
                            <p class="font-bold">Date :</p>
                            <p class="ml-2">{{ $expense->date }}</p>
                        </div>
                        <div class="flex items-center">
                            <p class="font-bold">Name :</p>
                            <p class="ml-2">{{ $expense->name }}</p>
                        </div>
                        <div class="flex items-center">
                            <p class="font-bold">Amount :</p>
                            <p class="ml-2">{{ $expense->amount }}</p>
                        </div>
                    </div>
                    <div class="flex justify-end">
                        <a href="{{ route('finances.expense.edit', $expense->id) }}" class="bg-green-400 hover:bg-green-600 text-black font-bold py-2 px-4 rounded mr-2">Edit</a>
                        <form action="{{ route('finances.expense.destroy', $expense->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button class="bg-red-400 hover:bg-red-600 text-black font-bold py-2 px-4 rounded" onclick="return confirm('Are you sure you want to delete this expense record?')">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>