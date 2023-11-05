{{-- <x-app-layout>
<div class="max-w-lg mx-auto mt-16 overflow-hidden bg-white rounded-md shadow-md">
    <div class="px-4 py-2 bg-pink-100">
        <h2 class="text-xl font-semibold text-gray-800">Lot List</h2>
            <a class='inline-block py-2 px-4 border border-gray'
                href="{{route('lot.create')}}">
                    Create New Lot
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
        @foreach ($lots as $lot)
        <li class="list-item">
            <span class="text-lg font-medium text-gray-700">{{ $loop->iteration }}.</span>
            <div class="item-details">
                <a href="{{route('lot.show',['lot' => $lot])}}">
                    <h3>{{ $lot->date }}</h3>
                </a>

                <p></p>
            </div>
            <div class="item-actions">

            </div>
        </li>
        @endforeach
    </ul>
</div>
</x-app-layout> --}}

<x-app-layout>
    <div class="max-w-5xl mx-auto mt-20 p-4 shadow-md rounded-lg border-t-2 border-teal-400">
        <div class="flex justify-between items-center pb-4">
            <p class="font-bold text-xl">Lot Lists</p>
            <a class="bg-blue-400 hover:bg-blue-600 text-black font-bold py-2 px-4 rounded"
               href="{{route('lot.create')}}">
                Create New Lot
            </a>
        </div>
        <div class="flex flex-col gap-2 pl-2">
            @foreach ($lots as $lot)
                <div class="bg-white shadow-md rounded-lg p-4 mb-4">
                    <p class="text-gray-700 text-lg font-medium">{{ $loop->iteration }}.</p>
                    <div class="flex-1">
                        <a href="{{route('lot.show',['lot' => $lot])}}">
                            <div class="flex items-center">
                                <p class="font-bold">Date :</p>
                                <p class="ml-2">{{ $lot->date }}</p>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
