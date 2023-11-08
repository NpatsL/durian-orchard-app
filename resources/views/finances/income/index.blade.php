<x-app-layout>
    <div class="max-w-5xl mx-auto mt-10 p-4 shadow-md rounded-lg border-t-2 border-teal-400">
        <div class="flex justify-between">
            <a href="{{ route('finances.index') }}"
                class="bg-red-400 hover:bg-red-600 text-black font-bold py-2 px-4 rounded">Back</a>
            <a href="{{ route('finances.income.create') }}"
                class="bg-blue-400 hover:bg-blue-600 text-black font-bold py-2 px-4 rounded">New Income</a>
        </div>
        <!-- Table Section -->
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
                                        Income List
                                    </h2>
                                    <p class="text-sm text-gray-600 ">
                                        List of all income records
                                    </p>
                                </div>

                            </div>
                            <!-- End Header -->
                            @if (count($incomes) === 0)
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
                                        There are no income records in the system.
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
                                </div>
                            @else
                                <!-- Table -->
                                <div class=" max-h-[450px] overflow-auto">
                                    <table class="min-w-full divide-y divide-gray-200 ">
                                        <thead class="bg-gray-50 sticky top-0 z-50">
                                            <tr>

                                                <th scope="col" class="px-6 py-3 text-start ">
                                                    <div
                                                        class="flex flex-row text-xs font-semibold uppercase tracking-wide text-gray-800 ">
                                                        @sortablelink('id')
                                                        <svg class="flex-shrink-0 w-3.5 h-3.5"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="m7 15 5 5 5-5" />
                                                            <path d="m7 9 5-5 5 5" />
                                                        </svg>
                                                    </div>
                                                </th>

                                                <th scope="col" class="px-6 py-3 text-start">
                                                    <div
                                                        class="flex flex-row text-xs font-semibold uppercase tracking-wide text-gray-800 ">
                                                        @sortablelink('date')
                                                        <svg class="flex-shrink-0 w-3.5 h-3.5"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="m7 15 5 5 5-5" />
                                                            <path d="m7 9 5-5 5 5" />
                                                        </svg>
                                                    </div>
                                                </th>

                                                <th scope="col" class="px-6 py-3 text-start">
                                                    <div
                                                        class="flex flex-row text-xs font-semibold uppercase tracking-wide text-gray-800 ">
                                                        @sortablelink('name')
                                                        <svg class="flex-shrink-0 w-3.5 h-3.5"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="m7 15 5 5 5-5" />
                                                            <path d="m7 9 5-5 5 5" />
                                                        </svg>
                                                    </div>
                                                </th>

                                                <th scope="col" class="px-6 py-3 text-start">
                                                    <div
                                                        class="flex flex-row text-xs font-semibold uppercase tracking-wide text-gray-800">
                                                        @sortablelink('amount')
                                                        <svg class="flex-shrink-0 w-3.5 h-3.5"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="m7 15 5 5 5-5" />
                                                            <path d="m7 9 5-5 5 5" />
                                                        </svg>
                                                    </div>
                                                </th>

                                                <th scope="col" class="px-6 py-3 text-end"></th>
                                            </tr>
                                        </thead>

                                        <tbody class=" divide-gray-200 overflow-scroll h-full">

                                            @foreach ($incomes->reverse() as $income)
                                                <tr class="bg-white hover:bg-gray-50 ">
                                                    <td class="h-px w-px whitespace-nowrap">
                                                        <a class="block relative z-10" href="#">
                                                            <div class="px-6 py-2">
                                                                <p class="text-sm ">
                                                                    {{ $income->id }}
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td class="h-px w-px whitespace-nowrap">
                                                        <a class="block relative z-10" href="#">
                                                            <div class="px-6 py-2">
                                                                <p class="text-sm ">
                                                                    {{ $income->date }}
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td class="h-px w-px whitespace-nowrap">
                                                        <a class="block relative z-10" href="#">
                                                            <div class="px-6 py-2">
                                                                <p class="text-sm">
                                                                    {{ $income->name }}
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td class="h-px w-px whitespace-nowrap">
                                                        <div class="px-6 py-2">
                                                            <p class="text-sm">
                                                                {{ $income->amount }}
                                                            </p>
                                                        </div>

                                                    </td>
                                                    <td class="h-px w-px whitespace-nowrap">
                                                        <div class="px-6 py-2">
                                                            <div class="flex justify-end">
                                                                <a href="{{ route('finances.income.edit', $income->id) }}"
                                                                    class="bg-green-400 hover:bg-green-600 mr-2 py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparen disabled:opacity-50 disabled:pointer-events-none " ">Edit</a>
                                                                    <form
                                                                        action="{{ route('finances.income.destroy', $income->id) }}"
                                                                        method="POST" class="inline">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button
                                                                            class="bg-red-400 hover:bg-red-600 py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparen disabled:opacity-50 disabled:pointer-events-none "
                                                                            onclick="return confirm('Are you sure you want to delete this income record?')">Delete</button>
                                                                    </form>
                                                                </div>
                                                            </div>
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

                                                {{ $income->count() }}
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
            </div>
            <!-- End Card -->
        </div>
        <!-- End Table Section -->
    </div>

</x-app-layout>
