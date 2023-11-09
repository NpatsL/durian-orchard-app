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
    <div class="max-w-5xl mx-auto mt-20 p-4 shadow-md rounded-lg border-t-2 border-teal-400">
        <div class="flex justify-between pb-4">
            <a href="/lot" class="bg-blue-400 hover:bg-blue-600 text-black font-bold py-2 px-4 rounded">Back</a>
            <p class="font-bold text-xl">Lot Details</p>
            <button>
                <a class="bg-green-400 hover:bg-green-600 text-black font-bold py-2 px-4 rounded"
                    href="{{ route('lot.edit', ['lot' => $lot]) }}">Edit Lot</a>
            </button>
        </div>
        <div class="w-full px-4 py-4 mx-auto">
            <!-- Card -->
            <div class="flex flex-col">
                <div class="-m-1.5 overflow-x-auto">
                    <div class="p-1.5 min-w-full inline-block align-middle">
                        <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">
                            <!-- Header -->
                            <div
                                class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200">
                                <div>
                                    <h2 class="text-xl font-semibold text-gray-800 ">
                                        Lot {{ $lot->id }} Materials ( {{ $lot->date }} )
                                    </h2>
                                    <p class="text-sm text-gray-600 ">
                                        List of materials in this lot.
                                    </p>
                                </div>

                            </div>
                            <!-- End Header -->

                            <!-- Table -->
                            <div class=" max-h-[450px] overflow-auto">
                                <table class="min-w-full divide-y divide-gray-200 ">
                                    <thead class="bg-gray-50 sticky top-0 z-50">
                                        <tr>

                                            <th scope="col" class="px-6 py-3 text-start ">
                                                <div
                                                    class="flex flex-row text-xs font-semibold uppercase tracking-wide text-gray-800 ">
                                                    id
                                                </div>
                                            </th>

                                            <th scope="col" class="px-6 py-3 text-start">
                                                <div
                                                    class="flex flex-row text-xs font-semibold uppercase tracking-wide text-gray-800 ">
                                                    name
                                                </div>
                                            </th>

                                            <th scope="col" class="px-6 py-3 text-start">
                                                <div
                                                    class="flex flex-row text-xs font-semibold uppercase tracking-wide text-gray-800 ">
                                                    qty
                                                </div>
                                            </th>

                                            <th scope="col" class="px-6 py-3 text-start">
                                                <div
                                                    class="flex flex-row text-xs font-semibold uppercase tracking-wide text-gray-800 ">
                                                    unit
                                                </div>
                                            </th>

                                        </tr>
                                    </thead>

                                    @if (count($lot->materials) === 0)
                                        <div
                                            class="max-w-sm w-full min-h-[400px] flex flex-col justify-center mx-auto px-6 py-4">
                                            <div
                                                class="flex justify-center items-center w-[46px] h-[46px] bg-gray-100 rounded-lg ">
                                                <svg class="flex-shrink-0 w-6 h-6 text-gray-600 "
                                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" viewBox="0 0 16 16">
                                                    <path
                                                        d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z" />
                                                    <path
                                                        d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
                                                </svg>
                                            </div>

                                            <h2 class="mt-5 font-semibold text-gray-800 ">
                                                There are no materials in this lot.
                                            </h2>

                                        </div>
                                        <!-- End Body -->

                                        <!-- Footer -->
                                        <div
                                            class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200 ">
                                            <div>
                                                <p class="text-sm text-gray-600 ">
                                                    <span class="font-semibold text-gray-800 ">0</span> results
                                                </p>
                                            </div>
                                        @else
                                            <tbody class=" divide-gray-200 overflow-scroll h-full">

                                                @foreach ($lot->materials->reverse() as $material)
                                                    <tr class="bg-white hover:bg-gray-50 ">
                                                        <td class="h-px w-px whitespace-nowrap">
                                                            <a class="block relative z-10" href="#">
                                                                <div class="px-6 py-2">
                                                                    <p class="text-sm ">
                                                                        {{ $material->id }}
                                                                    </p>
                                                                </div>
                                                            </a>
                                                        </td>
                                                        <td class="h-px w-px whitespace-nowrap">
                                                            <a class="block relative z-10" href="#">
                                                                <div class="px-6 py-2">
                                                                    <p class="text-sm ">
                                                                        {{ $material->name }}
                                                                    </p>
                                                                </div>
                                                            </a>
                                                        </td>

                                                        <td class="h-px w-px whitespace-nowrap">
                                                            <a class="block relative z-10" href="#">
                                                                <div class="px-6 py-2">
                                                                    <p class="text-sm ">
                                                                        {{ $material->qty }}
                                                                    </p>
                                                                </div>
                                                            </a>
                                                        </td>

                                                        <td class="h-px w-px whitespace-nowrap">
                                                            <a class="block relative z-10" href="#">
                                                                <div class="px-6 py-2">
                                                                    <p class="text-sm ">
                                                                        {{ $material->unit }}
                                                                    </p>
                                                                </div>
                                                            </a>
                                                        </td>

                                                    </tr>
                                                @endforeach
                                            </tbody>
                                </table>
                            </div>
                            <!-- End Table -->

                            <!-- Footer -->
                            <div
                                class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200 ">
                                <div>
                                    <p class="text-sm text-gray-600">
                                        <span class="font-semibold text-gray-800 ">
                                            {{ $lot->materials->count() }}
                                        </span>
                                        results
                                    </p>
                                </div>
                            </div>
                            @endif
                            <!-- End Footer -->
                        </div>
                    </div>
                </div>
                <!-- End Card -->
            </div>
            <!-- End Table Section -->
        </div>
    </div>

</x-app-layout>
