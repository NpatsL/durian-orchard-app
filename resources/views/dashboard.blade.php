{{-- @extends('layouts.main')

@section('content') --}}

<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{-- {{ __('Dashboard') }} --}}
        </h2>
    </x-slot>
    <div class="w-full bg-white">
    </div>
    @include('components.alert')
    <div class="p-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 text-xl font-bold">
                    @if ($plan != null)
                        Current plan: {{ $plan->name }}
                        <br>
                        <span class="text-sm font-normal">{{ $plan->detail }}</span>
                    @else
                        No plan
                    @endif
                </div>

            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-4">
                <div class="pt-5 px-5 text-xl">Today's Tasks</div>
                <div class="grid lg:grid-cols-4 gap-10 m-4">
                    @if ($tasks != null)
                        @foreach ($tasks as $task)
                            @if (auth()->user()->role == 1 || $task->users->contains(auth()->user()->id))
                                @if ($task->deadline == date('Y-m-d'))
                                    <div class="flex flex-col  bg-white border shadow-sm rounded-xl ">
                                        <div class="bg-blue-600 border-b rounded-t-xl py-3 px-4 md:py-4 md:px-5 ">
                                            <p class="mt-1 text-md text-gray-200 font-bold">
                                                {{ $task->deadline }}
                                            </p>
                                        </div>
                                        <div class="p-4 md:p-5">
                                            <h3 class="text-lg font-bold text-gray-800 ">
                                                {{ $task->name }}
                                            </h3>
                                            <p class="mt-2 text-sm text-gray-400 ">
                                                {{ $task->detail }}
                                            </p>
                                            @if ($task->status == 'INCOMPLETE')
                                                <span
                                                    class="bg-gray-300 text-gray-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded ">{{ $task->status }}</span>
                                            @else
                                                <span
                                                    class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded">{{ $task->status }}</span>
                                            @endif
                                            <form action="{{ route('task.update', $task->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit"
                                                    class="mt-3 inline-flex items-center gap-2 text-sm font-medium text-blue-500 hover:text-blue-700"
                                                    href="#">
                                                    Change status
                                                    <svg class="w-2.5 h-auto" width="16" height="16"
                                                        viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" />
                                                    </svg>
                                                </button>
                                            </form>


                                            @if ($task->users->count() == 0)
                                                <p class="mt-2 text-gray-400 "> Unassigned </p>
                                            @else
                                                <p class="mt-2 text-md font-bold  text-black ">
                                                    Assigned to
                                                </p>
                                                @foreach ($task->users as $user)
                                                    <p class="mt-2 text-sm text-gray-600 ">{{ $user->name }} </p>
                                                @endforeach
                                            @endif

                                            <div class="@if (auth()->user()->role == 0) hidden @endif">
                                                <form action="{{ route('task.assign', $task->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <input type="text" name="task_id" value={{ $task->id }}
                                                        class="form-control hidden" id="task_id">
                                                    <select id="user_id" name="user_id" class="form-control mt-4">
                                                        @foreach ($users as $user)
                                                            <option value="{{ $user->id }}">{{ $user->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <button type="submit"
                                                        class=" inline-flex items-center gap-2 mt-2 text-sm font-medium text-blue-500 hover:text-blue-700">

                                                        assign
                                                        <svg class="w-2.5 h-auto" width="16" height="16"
                                                            viewBox="0 0 16 16" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" />
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endif
                        @endforeach
                </div>
                @endif
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-4">
                <div class="pt-5 px-5 text-xl">All Tasks</div>
                <div class="grid grid-cols-4 gap-10 m-4">
                    @if ($tasks != null)
                        @foreach ($tasks as $task)
                            @if (auth()->user()->role == 1 || $task->users->contains(auth()->user()->id))
                                <div class="flex flex-col  bg-white border shadow-sm rounded-xl ">
                                    <div class="bg-blue-600 border-b rounded-t-xl py-3 px-4 md:py-4 md:px-5 ">
                                        <p class="mt-1 text-md text-gray-200 font-bold">
                                            {{ $task->deadline }}
                                        </p>
                                    </div>
                                    <div class="p-4 md:p-5">
                                        <h3 class="text-lg font-bold text-gray-800 ">
                                            {{ $task->name }}
                                        </h3>
                                        <p class="mt-2 text-sm text-gray-400 ">
                                            {{ $task->detail }}
                                        </p>
                                        @if ($task->status == 'INCOMPLETE')
                                            <span
                                                class="bg-gray-300 text-gray-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded ">{{ $task->status }}</span>
                                        @else
                                            <span
                                                class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded">{{ $task->status }}</span>
                                        @endif
                                        <form action="{{ route('task.update', $task->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit"
                                                class="mt-3 inline-flex items-center gap-2 text-sm font-medium text-blue-500 hover:text-blue-700"
                                                href="#">
                                                Change status
                                                <svg class="w-2.5 h-auto" width="16" height="16"
                                                    viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                </svg>
                                            </button>
                                        </form>


                                        @if ($task->users->count() == 0)
                                            <p class="mt-2 text-gray-400 "> Unassigned </p>
                                        @else
                                            <p class="mt-2 text-md font-bold  text-black ">
                                                Assigned to
                                            </p>
                                            @foreach ($task->users as $user)
                                                <p class="mt-2 text-sm text-gray-600 ">{{ $user->name }} </p>
                                            @endforeach
                                        @endif

                                        <div class="@if (auth()->user()->role == 0) hidden @endif">
                                            <form action="{{ route('task.assign', $task->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <input type="text" name="task_id" value={{ $task->id }}
                                                    class="form-control hidden" id="task_id">
                                                <select id="user_id" name="user_id" class="form-control mt-4">
                                                    @foreach ($users as $user)
                                                        <option value="{{ $user->id }}">{{ $user->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <button type="submit"
                                                    class=" inline-flex items-center gap-2 mt-2 text-sm font-medium text-blue-500 hover:text-blue-700">

                                                    assign
                                                    <svg class="w-2.5 h-auto" width="16" height="16"
                                                        viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" />
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                </div>
                @endif
            </div>
        </div>
    </div>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
    <script></script>
</x-app-layout>


{{-- @endsection --}}
