{{-- <x-app-layout>
<div class="w-full">
    <h2 class="text-center text-blue-400 font-bold text-2xl uppercase mb-10">Edit Lot</h2>
    <div class="bg-white p-10 rounded-lg shadow md:w-3/4 mx-auto lg:w-1/2">
        <form action="{{ route('lot.update', ['lot'=>$lot]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-5">
                @error('name')
                    <div class="text-red-600 text-sm">
                        {{$message}}
                    </div>
                @enderror
                <label for="name" class="block mb-2 font-bold text-gray-600">Lot Name</label>
                    <input type="text" id="name" name="name" autocomplete="off"  placeholder="{{$lot->name}}" class="border border-gray-300 shadow p-3 w-full rounded mb-">
                    <label for="name" class="block mb-2 font-bold text-gray-600">Lot Date</label>
                    <input type="text" id="date" name="date" disabled autocomplete="off" placeholder="{{$lot->date}}" class="border border-gray-300 shadow p-3 w-full rounded mb-">

            </div>
            <button type="submit" class="block w-full bg-blue-500 text-white font-bold p-4 rounded-lg">Submit</button>
            <button><a href="{{ route('lot.show', ['lot'=>$lot]) }}" class="btn btn-primary">Back</a></button>

        </form>
    </div>
</div>
</x-app-layout> --}}
<x-app-layout>
    <div class="max-w-2xl mx-auto mt-20 p-4 shadow-md rounded-lg border-t-2 border-teal-400">
        <div class="flex justify-between pb-4">
            <a href="{{ route('lot.show', ['lot'=>$lot]) }}" class="bg-red-400 hover:bg-red-600 text-black font-bold py-2 px-4 rounded">Back</a>
            <p class="font-bold text-xl">Edit Lot</p>
        </div>

        <form action="{{ route('lot.update', ['lot'=>$lot]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-5">
                @error('name')
                    <div class="text-red-600 text-sm">
                        {{$message}}
                    </div>
                @enderror
                <label for="name" class="block mb-2 font-bold text-gray-600">Lot Name</label>
                    <input type="text" id="name" name="name" autocomplete="off"  placeholder="{{$lot->name}}" class="border border-gray-300 shadow p-3 w-full rounded mb-">
                    <label for="name" class="block mb-2 font-bold text-gray-600">Lot Date</label>
                    <input type="text" id="date" name="date" disabled autocomplete="off" placeholder="{{$lot->date}}" class="border border-gray-300 shadow p-3 w-full rounded mb-">

            </div>
            <div class="flex items-center justify-end mt-6">
                <button type="submit" class="bg-green-400 hover:bg-green-600 text-black font-bold py-2 px-4 rounded">Submit</button>
            </div>
        </form>
    </div>
</x-app-layout>