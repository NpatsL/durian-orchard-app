<x-app-layout>
    <div class="max-w-2xl mx-auto mt-20 p-4 shadow-md rounded-lg border-t-2 border-teal-400">
        <div class="flex justify-between pb-4">
            <a href="{{ route('finances.expense.index') }}"
                class="bg-red-400 hover:bg-red-600 text-black font-bold py-2 px-4 rounded">Back</a>
            <p class="font-bold text-xl">Create New Expense</p>
        </div>

        <form action="{{ route('finances.expense.store') }}" method="POST" onsubmit="return confirm('Are you sure you want to add new expense?');">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                <input type="text" name="name" class="form-control" id="name" required>
            </div>
            <div class="mb-4">
                <label for="date" class="block text-gray-700 text-sm font-bold mb-2">Date:</label>
                <input type="date" name="date" class="form-control" id="date" required>
            </div>
            <div class="mb-4">
                <label for="material_id" class="block text-gray-700 text-sm font-bold mb-2">Material:</label>
                <select id="material_id" name="material_id">
                    <option value="null">None</option>
                    @foreach ($materials->reverse() as $material)
                        <option value="{{ $material->id }}">( {{ $material->lotMaterial->date }} ) {{ $material->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="amount" class="block text-gray-700 text-sm font-bold mb-2">Amount:</label>
                <input type="number" name="amount" class="form-control" id="amount" min="1" step="0.01"
                    required>
                <p id="amount-error" class="text-red-500 text-sm mt-2 hidden">Amount must be greater than 0.</p>
            </div>
            <div class="flex items-center justify-end mt-6">
                <button type="submit"
                    class="bg-green-400 hover:bg-green-600 text-black font-bold py-2 px-4 rounded">Create
                    Expense</button>
            </div>
        </form>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const today = new Date();
            const todayFormatted = today.toISOString().split("T")[0];
            document.getElementById("date").max = todayFormatted;
            const amountInput = document.getElementById("amount");
            const amountError = document.getElementById("amount-error");
            const materialDropdown = document.getElementById("material_id");
            const lotDatePlaceholder = document.getElementById("lot_date_placeholder");
    
            amountInput.addEventListener("input", function () {
                const amount = parseFloat(amountInput.value);
                if (amount <= 0 || isNaN(amount)) {
                    amountError.classList.remove("hidden");
                } else {
                    amountError.classList.add("hidden");
                }
            });
            materialDropdown.addEventListener("change", function () {
                const selectedMaterialOption = materialDropdown.options[materialDropdown.selectedIndex];
                const lotDate = selectedMaterialOption.getAttribute("data-lot-date");

                if (lotDate) {
                    lotDatePlaceholder.innerText = `${lotDate}`;
                } else {
                    lotDatePlaceholder.innerText = "Select a Material to see the Lot Date";
                }   
            });
            if (materialDropdown.options.length > 0) {
                const firstMaterialOption = materialDropdown.options[0];
                const firstMaterialLotDate = firstMaterialOption.getAttribute("data-lot-date");

                if (firstMaterialLotDate) {
                    lotDatePlaceholder.innerText = `${firstMaterialLotDate}`;
                } else {
                    lotDatePlaceholder.innerText = "Select a Material to see the Lot Date";
                }
            }

        });
    </script>
</x-app-layout>
