<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Activities=Activity::all();

        return view('activity.index',compact('Activities'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tasks=Task::all();
        $users=User::all();
        return view('activity.create',compact('tasks','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated=$request->validate([
            'task_id' => 'required',
            'description' => 'required',
            'status_id' => 'required',
            'to_user' => 'required'
        ]);

        $activity=Activity::create([
            'task_id' => $request->task_id,
            'description' => $request->description,
            'status_id' => $request->status,
            'from_user' => Auth::id(),
            'to_user' => $request->to_user,

        ]);

        $task=Task::find($activity->task_id);
        $task->worker_id=$activity->to_user;
        $task->save();
        return redirect()->route('activities.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
