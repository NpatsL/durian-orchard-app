{{-- @extends('layouts.main')

@section('content') --}}
<x-app-layout>
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
{{-- @endsection --}}
</x-app-layout>
