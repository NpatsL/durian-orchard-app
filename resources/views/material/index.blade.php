<div class="max-w-lg mx-auto mt-16 overflow-hidden bg-white rounded-md shadow-md">
    <div class="px-4 py-2 bg-pink-100">
        <h2 class="text-xl font-semibold text-gray-800">Material List</h2>
            <a class='inline-block py-2 px-4 border border-gray'
                href="{{route('material.create')}}">
                    Create New Material
            </a>
    </div>

    <ul class="divide-y divide-gray-200">
        @foreach ($materials as $material)
        <li class="flex items-center px-6 py-4 hover:bg-gray-50">
            <span class="mr-4 text-lg font-medium text-gray-700">{{ $loop->iteration }}.</span>
            <div class="flex-1">
                <a href="{{route('material.show',['material' => $material])}}">
                    <h3 class="text-lg font-medium text-gray-800">{{ $material->name }}</h3>
                </a>

                <p class="text-base text-gray-600"></p>
            </div>
            <span class="text-gray-400"></span>
        </li>
        @endforeach
    </ul>
</div>
