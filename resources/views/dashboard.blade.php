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
                    @else
                        No plan
                    @endif
                </div>
                <div class="grid grid-cols-5 gap-10 m-4">
                    @if ($tasks != null)
                        @foreach ($tasks as $task)
                            <div class="flex flex-col  bg-white border shadow-sm rounded-xl ">
                                <div class="bg-gray-100 border-b rounded-t-xl py-3 px-4 md:py-4 md:px-5 ">
                                    <p class="mt-1 text-md text-gray-800 font-bold">
                                        {{ $task->deadline }}
                                    </p>
                                </div>
                                <div class="p-4 md:p-5">
                                    <h3 class="text-lg font-bold text-gray-800 ">
                                        {{ $task->name }}
                                    </h3>
                                    @if ($task->status == 'INCOMPLETE')
                                        <span
                                            class="bg-gray-300 text-gray-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded ">{{ $task->status }}</span>
                                    @else
                                        <span
                                            class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded">{{ $task->status }}</span>
                                    @endif

                                    <p class="mt-2 text-sm text-gray-400 ">
                                        {{ $task->detail }}
                                    </p>
                                    <form action="{{ route('task.update', $task->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                    <button type="submit" class="mt-3 inline-flex items-center gap-2 mt-5 text-sm font-medium text-blue-500 hover:text-blue-700"
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
                                </div>
                            </div>
                        @endforeach
                </div>
                @endif
            </div>
        </div>
    </div>

</x-app-layout>

{{-- @endsection --}}
