{{-- <x-app-layout>
<h1 class="text-5xl">
    <li>Lot: {{$lot->id}}</li>
    <li>Date: {{$lot->date}}</li>
</h1>
<style>
    li{
        list-style-type: none;
    }
</style>
<div>
    <button>
        <a class='inline-block py-2 px-4 border border-gray'
     href="{{route('lot.edit',[ 'lot' => $lot])}}">Edit Lot</a>
    </button>
    <button><a href="/lot" class="btn btn-primary">Back</a></button>
</div>
</x-app-layout> --}}
<x-app-layout>
    <div class="max-w-2xl mx-auto mt-20 p-4 shadow-md rounded-lg border-t-2 border-teal-400">
        <div class="flex justify-between pb-4">
            <a href="/lot" class="bg-blue-400 hover:bg-blue-600 text-black font-bold py-2 px-4 rounded">Back</a>
            <p class="font-bold text-xl">Lot Details</p>
        </div>

        <div class="flex-1">
            <div class="flex items-center">
                <p class="font-bold">Lot :</p>
                <p class="ml-2">{{$lot->id}}</p>
            </div>
            <div class="flex items-center">
                <p class="font-bold">Date :</p>
                <p class="ml-2">{{$lot->date}}</p>
            </div>
        </div>
        <div class="flex justify-between mt-4">
            <button>
                <a class="bg-green-400 hover:bg-green-600 text-black font-bold py-2 px-4 rounded"
             href="{{route('lot.edit',[ 'lot' => $lot])}}">Edit Lot</a>
            </button>
        </div>
    </div>
</x-app-layout>