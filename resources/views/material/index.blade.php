{{-- @extends('layouts.main')

@section('content') --}}
<x-app-layout>
<div class="max-w-lg mx-auto mt-16 overflow-hidden bg-white rounded-md shadow-md">
    <div class="px-4 py-2 bg-pink-100">
        <h2 class="text-xl font-semibold text-gray-800">Material List</h2>
            <a class='inline-block py-2 px-4 border border-gray'
                href="{{route('material.create')}}">
                    Create New Material
            </a>
    </div>

    <style>
        .list-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1px;
            background-color: #f7f7f7;
            border: 1px solid #ccc;
        }

        .item-details {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .item-details h3 {
            font-size: 18px;
            font-weight: 300;
            color: #333;
        }

        .item-details p {
            font-size: 14px;
            color: #666;
        }

        .item-actions {
            text-align: right;
        }
    </style>

    <ul class="divide-y divide-gray-200">
        @foreach ($materials as $material)
        <li class="list-item">
            <span class="text-lg font-medium text-gray-700">{{ $loop->iteration }}.</span>
            <div class="item-details">
                <a href="{{route('material.show',['material' => $material])}}">
                    <h3>{{ $material->name }}</h3>
                </a>
                <p></p>
            </div>
            <div class="item-actions">
                <!-- Add your action buttons or content here -->
            </div>
        </li>
        @endforeach
    </ul>
</div>
{{-- @endsection --}}
</x-app-layout>
