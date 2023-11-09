<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $task = Task::find($id);
    
        return view('task.edit', ['task' => $task]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function status(string $id)
    {
        if (Task::where('id', $id)->first()->status == 'COMPLETE') {
            Task::where('id', $id)->update(['status' => 'INCOMPLETE']);
        } else {
            Task::where('id', $id)->update(['status' => 'COMPLETE']);
        }
        return redirect()->route('dashboard')->with('success', 'Update status successfully.');
    }

    public function assign(Request $request)
    {
        $user = User::where('id', $request->user_id)->first();
        $task = Task::where('id', $request->task_id)->first();
        User::where('id', $request->user_id)->first()->tasks()->attach($request->task_id);
        return redirect()->route('dashboard')->with('success', 'Assign task successfully.');
    }

    public function update(Request $request, string $id)
    {
        $task = Task::find($id);
        $task->name = $request->get('name');
        $task->detail = $request->get('detail');

        $task->save();
        return redirect()->route('dashboard')->with('success', 'Update task successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
