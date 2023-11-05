@extends('layouts.main')

@section('content')
<div class="w-full">
    <h2 class="text-center text-blue-400 font-bold text-2xl uppercase mb-10">Create New Material</h2>
    <div class="bg-white p-10 rounded-lg shadow md:w-3/4 mx-auto lg:w-1/2">
        <form action="{{ route('material.store') }}" method="POST">
            @csrf
            <div class="form mb-5">
                @error('name')
                    <div class="text-red-600 text-sm">
                        {{$message}}
                    </div>
                @enderror
                <li><label for="name" class="block mb-2 font-bold text-gray-600">Material Name</label>
                    <input type="text" id="name" name="name" autocomplete="off" value="{{old('name', '')}}" @error('name') border-red-400 @enderror placeholder="Put in material name" class="border border-gray-300 shadow p-3 w-full rounded mb-"></li>
                @error('qty')
                    <div class="text-red-600 text-sm">
                        {{$message}}
                    </div>
                @enderror
                <li><label for="name" class="block mb-2 font-bold text-gray-600">Material Quantity</label>
                    <input type="text" id="qty" name="qty" autocomplete="off" value="{{old('qty', '')}}" @error('qty') border-red-400 @enderror placeholder="Put in material quantity" class="border border-gray-300 shadow p-3 w-full rounded mb-"></li>
                @error('unit')
                    <div class="text-red-600 text-sm">
                        {{$message}}
                    </div>
                @enderror
                <li><label for="name" class="block mb-2 font-bold text-gray-600">Material Unit</label>
                    <input type="text" id="unit" name="unit" autocomplete="off" value="{{old('unit', '')}}" @error('unit') border-red-400 @enderror placeholder="Put in material unit" class="border border-gray-300 shadow p-3 w-full rounded mb-"></li>
                <li>Lot Material
                        <select name="selected_option">
                        @foreach($lots as $lot)
                            <option value="{{ $lot->id }}">{{ $lot->name }}</option>
                        @endforeach
                        </select>

                </li>
            </div>
            <style>
                form li{
                    list-style-type: none;
                }
            </style>

            <button type="submit" class="block w-full bg-blue-500 text-white font-bold p-4 rounded-lg">Submit</button>
        </form>
    </div>
</div>
@endsection
