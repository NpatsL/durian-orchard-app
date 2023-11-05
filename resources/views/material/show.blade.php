{{-- <x-app-layout>
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
</x-app-layout> --}}
<x-app-layout>
    <div class="max-w-2xl mx-auto mt-20 p-4 shadow-md rounded-lg border-t-2 border-teal-400">
        <div class="flex justify-between pb-4">
            <a href="/material" class="bg-blue-400 hover:bg-blue-600 text-black font-bold py-2 px-4 rounded">Back</a>
            <p class="font-bold text-xl">Material Details</p>
        </div>

        <div class="flex-1">
            <div class="flex items-center">
                <p class="font-bold">Material :</p>
                <p class="ml-2">{{ $material->name}}</p>
            </div>
            <div class="flex items-center">
                <p class="font-bold">Quantity :</p>
                <p class="ml-2">{{$material->qty}}</p>
            </div>
            <div class="flex items-center">
                <p class="font-bold">Unit :</p>
                <p class="ml-2">{{$material->unit}}</p>
            </div>
            <div class="flex items-center">
                <p class="font-bold">Lot :</p>
                <p class="ml-2">{{$material->lot_material_id}}</p>
            </div>
            <div class="flex items-center">
                <p class="font-bold">Date :</p>
                <p class="ml-2">{{$lot[0]['date']}}</p>
            </div>
        </div>
        <div class="flex items-center justify-between">
            <button>
                <a class="bg-green-400 hover:bg-green-600 text-black font-bold py-2 px-4 rounded"
             href="{{route('material.edit',[ 'material' => $material])}}">Edit Material</a>
            </button>
        
            <form class="inline-block"
                action="{{route('material.destroy',['material'=>$material])}}"
                method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-400 hover:bg-red-600 text-black font-bold py-2 px-4 rounded">Delete Material</button>
            </form>
        </div>
    </div>
</x-app-layout>