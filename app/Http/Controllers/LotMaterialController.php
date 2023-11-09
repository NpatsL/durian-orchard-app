<?php

namespace App\Http\Controllers;

use App\Models\LotMaterial;
use Illuminate\Http\Request;

class LotMaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lots = LotMaterial::sortable()->get();
        return view('lot.index',[
            'lots' => $lots
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('lot.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>['required'],
        ]);
        $name = $request->get('name');
        $date = $request->get('date');

        $lot = new LotMaterial();
        $lot->name = $name;
        $lot->date = $date;
        $lot->save();
        return redirect()->route('lot.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(LotMaterial $lot)
    {
        return view('lot.show',[
            'lot' => $lot
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LotMaterial $lot)
    {
        return view('lot.edit',[
            'lot' => $lot
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LotMaterial $lot)
    {
        $request->validate([
            'name'=>['required'],
        ]);
        $lot->name = $request->get('name');
        $lot->save();
        return redirect()->route('lot.show',[
            'lot' => $lot
        ]);;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

}
