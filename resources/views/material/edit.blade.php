@extends('layouts.main')

@section('content')
<div class="w-full">
    <h2 class="text-center text-blue-400 font-bold text-2xl uppercase mb-10">Edit Material</h2>
    <div class="bg-white p-10 rounded-lg shadow md:w-3/4 mx-auto lg:w-1/2">
        <form action="{{ route('material.update', ['material'=>$material]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-5">
                <label for="name" class="block mb-2 font-bold text-gray-600">Material Name</label>
                <input type="text" id="name" name="name" value="{{$material->name}}" autocomplete="off" placeholder="Put in material name" class="border border-gray-300 shadow p-3 w-full rounded mb-">
                <label for="name" class="block mb-2 font-bold text-gray-600">Material Quantity</label>
                <input type="text" id="qty" name="qty" value="{{$material->qty}}" autocomplete="off" placeholder="Put in material quantity" class="border border-gray-300 shadow p-3 w-full rounded mb-">
                <label for="name" class="block mb-2 font-bold text-gray-600">Material Unit</label>
                <input type="text" id="unit" name="unit" disabled autocomplete="off" placeholder="{{$material->unit}}" class="border border-gray-300 shadow p-3 w-full rounded mb-">
                <label for="name" class="block mb-2 font-bold text-gray-600">Material Lot</label>
                <input type="text" id="unit" name="unit" disabled autocomplete="off" placeholder="{{$material->lot_material_id}}" class="border border-gray-300 shadow p-3 w-full rounded mb-">
                <label for="name" class="block mb-2 font-bold text-gray-600">Lot Date</label>
                <input type="text" id="unit" name="unit" disabled autocomplete="off" placeholder="2020-12-12" class="border border-gray-300 shadow p-3 w-full rounded mb-">
            </div>

            <button type="submit" class="block w-full bg-blue-500 text-white font-bold p-4 rounded-lg">Submit</button>
            <button><a href="{{ route('material.show', ['material'=>$material]) }}" class="btn btn-primary">Back</a></button>
        </form>
    </div>
</div>
@endsection
