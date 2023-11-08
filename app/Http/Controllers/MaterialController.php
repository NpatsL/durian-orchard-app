<?php

namespace App\Http\Controllers;

use App\Models\LotMaterial;
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
        $materials = Material::sortable()->get();
        $lots = LotMaterial::get();
        return view('material.index',[
            'materials' => $materials,
            'lots' => $lots
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   $lots = LotMaterial::get();
        return view('material.create',[
            'lots' => $lots
        ]);
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
        $selectedOption = $_POST['selected_option'];

        $material = new Material();
        $material->name = $material_name;
        $material->qty = $material_qty;
        $material->unit = $material_unit;
        $material->lot_material_id = $selectedOption;
        $material->save();
        return redirect()->route('material.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Material $material)
    {   $lot = LotMaterial::where('id',$material->lot_material_id)->get('date');
        return view('material.show',[
            'material' => $material,
            'lot' => $lot
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
            $material->delete();
            return redirect()->route('material.index');
    }
}
