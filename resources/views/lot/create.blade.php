{{-- <x-app-layout>
<div class="w-full">
    <h2 class="text-center text-blue-400 font-bold text-2xl uppercase mb-10">Create New Lot</h2>
    <div class="bg-white p-10 rounded-lg shadow md:w-3/4 mx-auto lg:w-1/2">
        <form action="{{ route('lot.store') }}" method="POST">
            @csrf
            <div class="form mb-5">
                @error('name')
                    <div class="text-red-600 text-sm">
                        {{$message}}
                    </div>
                @enderror
                <li><label for="name" class="block mb-2 font-bold text-gray-600">Lot Name</label>
                    <input type="text" id="name" name="name" autocomplete="off" value="{{old('name', '')}}" @error('name') border-red-400 @enderror placeholder="Put in lot name" class="border border-gray-300 shadow p-3 w-full rounded mb-"></li>

                <li><label for="name" class="block mb-2 font-bold text-gray-600">Lot Date</label>
                    <input type="date" id="date" name="date" autocomplete="off" class="border border-gray-300 shadow p-3 w-full rounded mb-"></li>


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
</x-app-layout> --}}

<x-app-layout>
    <div class="max-w-2xl mx-auto mt-20 p-4 shadow-md rounded-lg border-t-2 border-teal-400">
        <div class="flex justify-between pb-4">
            <a href="/lot" class="bg-red-400 hover:bg-red-600 text-black font-bold py-2 px-4 rounded">Back</a>
            <p class="font-bold text-xl">Create New Lot</p>
        </div>

        <form action="{{ route('lot.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Lot Name:</label>
                <input type="text" id="name" name="name" autocomplete="off" value="{{old('name', '')}}" @error('name') border-red-400 @enderror placeholder="Put in lot name" class="border border-gray-300 shadow p-3 w-full rounded mb-"></li>
                @error('name')
                    <div class="text-red-600 text-sm">
                        {{$message}}
                    </div>
                @enderror    
            </div>
            <div class="mb-4">
                <label for="date" class="block text-gray-700 text-sm font-bold mb-2">Lot Date:</label>
                <input type="date" id="date" name="date" autocomplete="off" class="border border-gray-300 shadow p-3 w-full rounded mb-"></li>  
            </div>
            <style>
                form li{
                    list-style-type: none;
                }
            </style>
            <div class="flex items-center justify-end mt-6">
                <button type="submit" class="bg-green-400 hover:bg-green-600 text-black font-bold py-2 px-4 rounded">Submit</button>
            </div>
        </form>
    </div>
</x-app-layout>