<?php

namespace App\Http\Controllers;

use App\Models\task;
use Illuminate\Http\Request;

class todoController extends Controller
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
        if($request->task){
            $task = new task;
            $task->task = $request->input('task');
            $task->save();
        }
        return back();
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
        $task = task::find($id);
        $task->status = 1;
        $task->save();
        return back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $task = task::find($id);
        $task->status = 0;
        $task->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        task::where('id_task',$id)->delete();
        return back();
    }
}
