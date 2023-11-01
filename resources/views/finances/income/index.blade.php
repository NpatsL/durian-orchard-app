<x-app-layout>
    <div class="max-w-sm mx-auto mt-20 p-4 shadow-md rounded-lg border-t-2 border-teal-400">
        <div class="flex justify-between pb-4">
            <a href="{{ route('finances.index') }}" class="btn btn-primary">Back</a>
            <p class="font-bold text-xl">Income List</p>
            <a href="{{ route('finances.income.create') }}" class="btn btn-primary">New Income</a>
        </div>
        <div class="flex flex-col gap-2 pl-2">
            @if (count($incomes) === 0)
                <div class="flex items-center justify-center py-4 px-6">
                    <p class="text-3xl font-medium text-gray-800">There are no income records in the system.</p>
                </div>
            @endif
            @foreach ($incomes as $income)
                <div class="bg-white shadow-md rounded-lg p-4 mb-4 flex flex-col">
                    <p class="text-gray-700 text-lg font-medium">{{ $loop->iteration }}.</p>
                    <div class="flex-1">
                        <p>{{ $income->name }}</p>
                        <p>{{ $income->amount }}</p>
                        <p>{{ $income->date }}</p>
                    </div>
                    <div class="flex justify-end">
                        <a href="{{ route('finances.income.edit', $income->id) }}" class="btn btn-secondary">Edit</a>
                        <button class="btn btn-danger ml-2">Delete</button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>