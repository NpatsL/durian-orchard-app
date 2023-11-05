<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;
use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dashboard()
    {

        $plan = DB::table('plans')->latest()->first();
        // $plan = Plan::with('tasks')->latest()->first();
        if ($plan != null)
            $tasks = Task::where('plan_id', $plan->id)->orderBy('deadline', 'asc')->get();
        else $tasks = null;
        return view('dashboard', ['plan' => $plan, 'tasks' => $tasks]);
    }

    public function index(Request $request)
    {
        return view('plans.index');
    }

    public function createWaterTask($plan, $num)
    {
        $today = Carbon::now();
        for ($i = 0; $i < 30; $i += $num) {
            $task = new Task();
            $task->name = "รดน้ำ";
            $task->detail = "รดน้ำต้นไม้ตามวันที่กำหนด หากฝนตกไม่ต้องรดน้ำ";
            $task->deadline = $today->addDays($i);
            $task->plan_id = $plan->id;
            $task->save();
        }
    }
    public function createFertilizeTask($plan, $num)
    {
        $today = Carbon::now();
        for ($i = 0; $i < 30; $i += $num) {
            $task = new Task();
            $task->name = "ใส่ปุ๋ย";
            $task->detail = "ใส่ปุ๋ยตามวันที่กำหนด";
            $task->deadline = $today->addDays($i);
            $task->plan_id = $plan->id;
            $task->save();
        }
    }
    public function createSprayTask($plan, $num)
    {
        $today = Carbon::now();
        for ($i = 0; $i < 30; $i += $num) {
            $task = new Task();
            $task->name = "พ่นยา";
            $task->detail = "พ่นยาตามวันที่กำหนด";
            $task->deadline = $today->addDays($i);
            $task->plan_id = $plan->id;
            $task->save();
        }
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

        if ($request->number == 1) {

            $plan = new Plan();
            $plan->name = "ช่วงหลังเก็บเกี่ยว" . " ( " . Carbon::now()->toDateString() . " )";
            $plan->detail = "การดูแลสวนทุเรียนในช่วงหลังเก็บเกี่ยว";
            $plan->save();
            PlanController::createWaterTask($plan, 3);
            PlanController::createFertilizeTask($plan, 30);
            PlanController::createSprayTask($plan, 15);
        } else if ($request->number == 2) {

            $plan = new Plan();
            $plan->name = "ช่วงคุมน้ำ" . " ( " . Carbon::now()->toDateString() . " )";
            $plan->detail = "การดูแลสวนทุเรียนในช่วงคุมน้ำ";
            $plan->save();
            PlanController::createWaterTask($plan, 7);
        } else if ($request->number == 3) {

            $plan = new Plan();
            $plan->name = "ช่วงผลิดอก" . " ( " . Carbon::now()->toDateString() . " )";
            $plan->detail = "การดูแลสวนทุเรียนในช่วงผลิดอก";
            $plan->save();
            PlanController::createWaterTask($plan, 2);
            PlanController::createFertilizeTask($plan, 15);
            PlanController::createSprayTask($plan, 7);
        } else if ($request->number == 4) {

            $plan = new Plan();
            $plan->name = "ช่วงดอกบาน" . " ( " . Carbon::now()->toDateString() . " )";
            $plan->detail = "การดูแลสวนทุเรียนในช่วงดอกบาน";
            $plan->save();
            PlanController::createWaterTask($plan, 4);
            PlanController::createFertilizeTask($plan, 15);
            PlanController::createSprayTask($plan, 15);
        } else if ($request->number == 5) {

            $plan = new Plan();
            $plan->name = "ช่วงออกผล" . " ( " . Carbon::now()->toDateString() . " )";
            $plan->detail = "การดูแลสวนทุเรียนในช่วงออกลูก";
            $plan->save();
            PlanController::createWaterTask($plan, 2);
            PlanController::createFertilizeTask($plan, 15);
            PlanController::createSprayTask($plan, 7);
        }

        return redirect()->route('dashboard')->with('success', 'select plan successfully.');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
