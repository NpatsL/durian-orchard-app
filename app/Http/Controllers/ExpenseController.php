<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expense;
use App\Models\Material;
use App\Models\LotMaterial;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $expenses = Expense::sortable()->get();
        $lots = LotMaterial::sortable()->get();
        return view('finances.expense.index', ['expenses' => $expenses , 'lots' => $lots ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $materials = Material::sortable()->get();
        $lotDates = LotMaterial::pluck('date', 'id');
        return view('finances.expense.create', [
            'materials' => $materials,
            'lotDates' => $lotDates,
        ]);
        // $request->validate([
        //     'name' => ['required', 'min:4', 'max:255'],
        // ]);

        // $expense = new Expense();
        // $expense->name = $request->name;
        // $expense->amount = $request->amount;
        // $expense->date = $request->date;
        // $expense->save();

        // return redirect()->route('finances.expense.index');
        // return view('finances.expense.create');
        // return view('finances.expense.create', [
        //     'expense' => $expense
        // ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,Expense $expense)
    {
        $request->validate([
            'name' => ['required', 'min:4', 'max:255'],
        ]);

        $expense = new Expense();
        $expense->name = $request->name;
        $expense->amount = $request->amount;
        $expense->date = $request->date;
        $expense->save();

        // return redirect()->route('finances.expense.index', [
        //     'expense' => $expense
        // ]);
        return redirect()->route('finances.expense.index');
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
        $expense = Expense::find($id);
        $materials = Material::sortable()->get();
        $lotDates = LotMaterial::pluck('date', 'id');
    
        return view('finances.expense.edit', [
            'expense' => $expense,
            'materials' => $materials,
            'lotDates' => $lotDates,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Expense $expense)
    {
        $expense->name = $request->get('name');
        $expense->amount = $request->get('amount');
        $expense->date = $request->get('date');
        $expense->save();
        return redirect()->route('finances.expense.index',[
            'expense'=> $expense
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Expense $expense)
    {
        $expense->delete();
        return redirect()->route('finances.expense.index');
    }
}
