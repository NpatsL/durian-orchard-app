<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $materials = Material::get();
        return view('material.index',[
            'materials' => $materials
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('material.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>['required'],
            'qty' =>['required', 'integer'],
            'unit' =>['required']
        ]);
        $material_name = $request->get('name');
        $material_qty = $request->get('qty');
        $material_unit = $request->get('unit');

        $material = new Material();
        $material->name = $material_name;
        $material->qty = $material_qty;
        $material->unit = $material_unit;
        $material->save();
        return redirect()->route('material.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Material $material)
    {
        return view('material.show',[
            'material' => $material
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Material $material)
    {
        return view('material.edit',[
            'material' => $material
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Material $material)
    {
        $material->name = $request->get('name');
        $material->qty = $request->get('qty');
        $material->unit = $request->get('unit');
        $material->save();
        return redirect()->route('material.show',[
            'material' => $material
        ]);;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Material $material)
    {
        if($material->lotMaterials->isEmpty()){
            $material->delete();
        return redirect()->route('material.index');
        }
        return redirect()->back();
    }
}
