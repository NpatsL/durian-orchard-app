@extends('layouts.main')

@section('content')
<h1 class="text-5xl">
    <li>Material: {{ $material->name}}</li>
    <li>Quantity: {{$material->qty}}</li>
    <li>Unit: {{$material->unit}}</li>
    <li>Lot: {{$material->lot_material_id}}</li>
    <li>Date: {{$lot[0]['date']}}</li>
</h1>
<style>
    li{
        list-style-type: none;
    }
</style>
<div>
    <button>
        <a class='inline-block py-2 px-4 border border-gray'
     href="{{route('material.edit',[ 'material' => $material])}}">Edit Material</a>
    </button>

    <form class="inline-block"
        action="{{route('material.destroy',['material'=>$material])}}"
        method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="block w-full bg-blue-500 text-white font-bold p-4 rounded-lg">Delete Material</button>
    </form>
    <button><a href="/material" class="btn btn-primary">Back</a></button>
</div>

@endsection
