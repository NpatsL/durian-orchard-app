<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Income;
use App\Models\Expense;

class FinanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // $incomes = Income::all();
        // $expenses = Expense::all();
    
        // return view('finances.index', compact('incomes', 'expenses'));
         // Get the selected month from the query parameters (e.g., ?month=2023-10)
        $selectedMonth = $request->input('month', now()->format('Y-m'));

        // Filter income and expenses for the selected month
        $incomes = Income::whereYear('date', '=', explode('-', $selectedMonth)[0])
            ->whereMonth('date', '=', explode('-', $selectedMonth)[1])
            ->get();

        $expenses = Expense::whereYear('date', '=', explode('-', $selectedMonth)[0])
            ->whereMonth('date', '=', explode('-', $selectedMonth)[1])
            ->get();

        // Calculate total income and total expenses for the selected month
        $totalIncome = $incomes->sum('amount');
        $totalExpenses = $expenses->sum('amount');

        // Calculate profit (income - expenses)
        $profit = $totalIncome - $totalExpenses;

        return view('finances.index', compact('incomes', 'expenses', 'selectedMonth', 'totalIncome', 'totalExpenses', 'profit'));       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    // public function income()
    // {

    //     return view('finances.income');
    // }

    // public function expense()
    // {

    //     return view('finances.expense');
    // }
}
