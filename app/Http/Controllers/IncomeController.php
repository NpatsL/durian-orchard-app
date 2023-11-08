<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Income;


class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $incomes = Income::sortable()->get();
        return view('finances.income.index', ['incomes' => $incomes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('finances.income.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,Income $income)
    {
        $request->validate([
            'name' => ['required', 'min:4', 'max:255'],
        ]);

        $income = new Income();
        $income->name = $request->name;
        $income->amount = $request->amount;
        $income->date = $request->date;
        $income->save();
        
        return redirect()->route('finances.income.index');
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
        $income = Income::find($id);
    
        return view('finances.income.edit', ['income' => $income]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Income $income)
    {
        $income->name = $request->get('name');
        $income->amount = $request->get('amount');
        $income->date = $request->get('date');
        $income->save();
        return redirect()->route('finances.income.index',[
            'income'=> $income
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Income $income)
    {
        $income->delete();
        return redirect()->route('finances.income.index');
    }
}
