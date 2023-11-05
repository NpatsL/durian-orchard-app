{{-- <x-app-layout>
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
</x-app-layout> --}}
<x-app-layout>
    <div class="max-w-2xl mx-auto mt-20 p-4 shadow-md rounded-lg border-t-2 border-teal-400">
        <div class="flex justify-between pb-4">
            <a href={{ route('material.show', ['material'=>$material]) }} class="bg-red-400 hover:bg-red-600 text-black font-bold py-2 px-4 rounded">Back</a>
            <p class="font-bold text-xl">Edit Material</p>
        </div>

        <form action="{{ route('material.update', ['material'=>$material]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Material Name:</label>
                <input type="text" id="name" name="name" value="{{$material->name}}" autocomplete="off" placeholder="Put in material name" class="border border-gray-300 shadow p-3 w-full rounded mb-">
            </div>
            <div class="mb-4">
                <label for="date" class="block text-gray-700 text-sm font-bold mb-2">Material Quantity:</label>
                <input type="text" id="qty" name="qty" value="{{$material->qty}}" autocomplete="off" placeholder="Put in material quantity" class="border border-gray-300 shadow p-3 w-full rounded mb-">  
            </div>
            <div class="mb-4">
                <label for="amount" class="block text-gray-700 text-sm font-bold mb-2">Material Unit:</label>
                <input type="text" id="unit" name="unit" disabled autocomplete="off" placeholder="{{$material->unit}}" class="border border-gray-300 shadow p-3 w-full rounded mb-">
            </div>
            <div class="mb-4">
                <label for="amount" class="block text-gray-700 text-sm font-bold mb-2">Material Lot:</label>
                <input type="text" id="unit" name="unit" disabled autocomplete="off" placeholder="{{$material->lot_material_id}}" class="border border-gray-300 shadow p-3 w-full rounded mb-">
            </div>
            <div class="mb-4">
                <label for="amount" class="block text-gray-700 text-sm font-bold mb-2">Lot Date:</label>
                <input type="text" id="unit" name="unit" disabled autocomplete="off" placeholder="2020-12-12" class="border border-gray-300 shadow p-3 w-full rounded mb-">
            </div>
            <div class="flex items-center justify-end mt-6">
                <button type="submit" class="bg-green-400 hover:bg-green-600 text-black font-bold py-2 px-4 rounded">Submit</button>
            </div>
        </form>
    </div>
</x-app-layout>