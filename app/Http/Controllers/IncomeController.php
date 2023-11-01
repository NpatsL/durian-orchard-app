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
        $incomes = Income::all();
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
        $income = Income::find($id);
    
        return view('finances.income.edit', ['income' => $income]);
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
}
