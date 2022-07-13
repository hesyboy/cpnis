<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Task;
use App\Models\Document;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tasks="";
        $document="";
        if($request->document_id){
            $tasks=Task::where('document_id',$request->document_id)->paginate(20);
            $document=Document::find($request->document_id);
        }
        else{
            $tasks=Task::paginate(20);
        }

        return view('task.index',compact('tasks','document'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $documents=Document::all();
        $users=User::all();

        return view('task.create',compact('documents','users'));
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
            'document_id' => 'required|numeric',
            'title' => 'required',
            'description' => 'required',
            'priority_id' => 'required|numeric',
            'status_id' => 'required|numeric',
            'worker_id' => 'required|numeric',
        ]);

        $task=Task::create([

            'creator_id' => Auth::id(),
            'title' => $request->title,
            'document_id' => $request->document_id,
            'description' => $request->description,

            'priority_id' => $request->priority_id,
            'status_id' => $request->status_id,

            'worker_id' => $request->worker_id,

        ]);

        $document=Document::find($task->document_id);
        $document->status="Working";
        $document->save();

        $activity=Activity::create([

            'from_user' => Auth::id(),
            'to_user' => $task->worker_id,
            'task_id' => $task->id,
            'description' => $task->description,
            'status_id' => 0,

        ]);

        return redirect()->route('tasks.index');


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
