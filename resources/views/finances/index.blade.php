<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Finance</h2>
            <div class="py-2">
                <a href="{{ route('finances.income.index') }}" class="bg-blue-400 hover:bg-blue-600 text-blue font-bold py-2 px-4 rounded mr-4">
                    Income List
                </a>
                
                <a href="{{ route('finances.expense.index') }}" class="bg-blue-400 hover:bg-blue-600 text-blue font-bold py-2 px-4 rounded">
                    Expense List
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex justify-between">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Monthly Report - {{ date('F Y', strtotime($selectedMonth)) }}</h2>
                        <div class="flex items-center">
                            <label for="monthPicker">Select Month:</label>
                            <input type="month" id="monthPicker" name="monthPicker" value="{{ $selectedMonth }}" onchange="window.location = '{{ route('finances.index') }}?month=' + this.value" class="ml-2" >
                        </div>
                    </div>
                    <div class="mb-4">
                        <h3 class="text-lg font-semibold mb-4">Total Income: {{ number_format($totalIncome, 2) }} baht</h3>
                        <a href="{{ route('finances.show', ['type' => 'income', 'month' => $selectedMonth]) }}" class="bg-green-400 hover:bg-green-600 text-black font-bold py-2 px-4 rounded">
                            Income Details
                        </a>
                    </div>
                    <div class="mb-4">
                        <h3 class="text-lg font-semibold mb-4">Total Expenses: {{ number_format($totalExpenses, 2) }} baht</h3>
                        <a href="{{ route('finances.show', ['type' => 'expense', 'month' => $selectedMonth]) }}" class="bg-green-400 hover:bg-green-600 text-black font-bold py-2 px-4 rounded">Expense Details</a>
                    </div>
                    <div class="mb-4">
                        <h3 class="text-lg font-semibold">Profit: {{ number_format($profit, 2) }} baht</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const monthPicker = document.getElementById("monthPicker");
        const today = new Date();
        const currentYear = today.getFullYear();
        const currentMonth = today.getMonth() + 1;

        monthPicker.setAttribute("max", `${currentYear}-${currentMonth.toString().padStart(2, "0")}`);
        // monthPicker.value = "{{ $selectedMonth }}";
    });
</script>
{{-- <style>
    input[type="month"]::-webkit-clear-button {
    display: none;
    }
</style> --}}
