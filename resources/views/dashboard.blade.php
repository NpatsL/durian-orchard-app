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
                    @if ($plan == null)
                    No plan
                </div>
                    @else
                    Current plan: {{ $plan->name }}
                    <br>
                    <span class="text-sm font-normal">{{ $plan->detail }}</span>
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
                                            <p class="mt-1 mb-1 text-sm text-gray-400 ">
                                                {{ $task->detail }}
                                            </p>
                                            @if ($task->status == 'INCOMPLETE')
                                                <span
                                                    class="bg-gray-300 text-gray-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded ">{{ $task->status }}</span>
                                                <form action="{{ route('task.update', $task->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to change status?');">
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
                                            @else
                                                <span
                                                    class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded">{{ $task->status }}</span>
                                            @endif


                                            <p class="mt-2 text-md font-bold  text-black ">
                                                Assigned to
                                                @if ($task->users->count() == 0)
                                                    <p class="mt-2 text-sm text-gray-400 "> Unassigned </p>
                                                @else
                                            </p>
                                            @foreach ($task->users as $user)
                                                <p class="mt-2 text-sm text-gray-600 ">{{ $user->name }} </p>
                                            @endforeach
                                @endif

                                <div class="@if (auth()->user()->role == 0) hidden @endif">
                                    <form action="{{ route('task.assign', $task->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to update this task?');">
                                        @csrf
                                        @method('PUT')
                                        <input type="text" name="task_id" value={{ $task->id }}
                                            class="form-control hidden" id="task_id">
                                        <select id="user_id" name="user_id"
                                            class="form-control text-sm mt-4 rounded-md border-gray-300 border ">
                                            @foreach ($users as $user)
                                                @if ($task->users->contains($user->id))
                                                    @continue
                                                @endif
                                                <option value="{{ $user->id }}">{{ $user->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <button type="submit"
                                            class=" inline-flex items-center gap-2 mt-2 text-sm font-medium text-blue-500 hover:text-blue-700">

                                            assign
                                            <svg class="w-2.5 h-auto" width="16" height="16" viewBox="0 0 16 16"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
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
                                <p class="mt-1 text-sm text-gray-400 mb-1">
                                    {{ $task->detail }}
                                </p>
                                @if ($task->status == 'INCOMPLETE')
                                    <span
                                        class="bg-gray-300 text-gray-800 text-xs font-medium  mr-2 px-2.5 py-0.5 rounded ">{{ $task->status }}</span>
                                    <form action="{{ route('task.update', $task->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to change status?');">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit"
                                            class="mt-3 inline-flex items-center gap-2 text-sm font-medium text-blue-500 hover:text-blue-700"
                                            href="#">
                                            Change status
                                            <svg class="w-2.5 h-auto" width="16" height="16" viewBox="0 0 16 16"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                            </svg>
                                        </button>
                                    </form>
                                @else
                                    <span
                                        class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded">{{ $task->status }}</span>
                                @endif


                                <p class="mt-2 text-md font-bold  text-black ">
                                    Assigned to
                                </p>
                                @if ($task->users->count() == 0)
                                    <p class="mt-2 text-sm text-gray-400 "> Unassigned </p>
                                @else
                                    @foreach ($task->users as $user)
                                        <p class="mt-2 text-sm text-gray-600 ">{{ $user->name }} </p>
                                    @endforeach
                                @endif

                                <div class="@if (auth()->user()->role == 0) hidden @endif">
                                    <form action="{{ route('task.assign', $task->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to update this task?');">
                                        @csrf
                                        @method('PUT')
                                        <input type="text" name="task_id" value={{ $task->id }}
                                            class="form-control hidden" id="task_id">
                                        <select id="user_id" name="user_id"
                                            class="form-control mt-4 rounded-lg border text-sm border-gray-300">
                                            @foreach ($users as $user)
                                            @if ($task->users->contains($user->id))
                                                @continue
                                            @endif
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
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
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
    @endif
</x-app-layout>


{{-- @endsection --}}
