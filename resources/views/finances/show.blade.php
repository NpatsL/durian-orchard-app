<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ ucfirst($type) }} Details for {{ date('F Y', strtotime($selectedMonth)) }}
            </h2>
            <a href="{{ route('finances.index') }}" class="bg-red-400 hover:bg-red-600 text-black font-bold py-2 px-4 rounded">Back</a>
        </div>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-lg font-semibold">Total {{ ucfirst($type) }}: {{ number_format($type === 'income' ? $totalIncome : $totalExpenses, 2) }} baht</h3>
                    <table class="min-w-full mt-4">
                        <thead>
                            <tr>
                                <th class="text-left px-4">Date</th>
                                <th class="text-left px-4">Name</th>
                                <th class="text-left px-4">Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($type === 'income' ? $incomes : $expenses as $item)
                                <tr>
                                    <td class="px-4">{{ $item->date }}</td>
                                    <td class="px-4">{{ $item->name }}</td>
                                    <td class="px-4">{{ number_format($item->amount, 2) }} baht</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>