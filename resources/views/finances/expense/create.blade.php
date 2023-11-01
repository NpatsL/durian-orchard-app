<x-app-layout>
    <div class="container">
        <h1>Create New Expense</h1>
        {{-- <form action="{{ route('expense.store') }}" method="POST"> --}}
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" id="name">
            </div>
            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" name="date" class="form-control" id="date">
            </div>
            <div class="form-group">
                <label for="amount">Amount:</label>
                <input type="number" name="amount" class="form-control" id="amount">
            </div>
            <button type="submit" class="btn btn-primary">Create Expense</button>
        </form>
    </div>
</x-app-layout>