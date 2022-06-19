<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\SiteSetting;
use App\Notifications\DocumentNotify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documents=Document::all();
        return view('document.index',compact('documents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('document.create');
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
        'document_type' => 'required',
        'first_name' => 'required',
        'last_name'  => 'required',
        'document_id'  => 'required|numeric',
        'email'  => 'required',
        'mobile'  => 'required|numeric',
        'submit_date'  => 'required|date',
        'next_notify' => 'nullable',
        ]);


        $totalemail=implode(",",$request->email);

        $setting=SiteSetting::find(1);

        $document=new Document();
        $submit_date_time=strtotime($request->submit_date);
        $expire_date=date('Y-m-d',strtotime('+'.$setting->expire_days.' days',$submit_date_time));


        $document->document_type=$request->document_type;
        $document->document_id=$request->document_id;
        $document->first_name=$request->first_name;
        $document->last_name=$request->last_name;



        $document->email=$totalemail;

        $document->mobile=$request->mobile;
        $document->submit_date=$request->submit_date;
        $document->expire_date=$expire_date;
        if($request->next_notify==null)
        {
            $next_notify=date('Y-m-d',strtotime('+'.$setting->notify_days.' days',$submit_date_time));
            $document->next_notify=$next_notify;
        }
        else{
            $document->next_notify=$request->next_notify;
        }





        $document->save();

        return redirect()->route('document.index');

    }


    public function task1(){
        dd('hi');
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
        $document=Document::find($id);
        return view('document.edit',compact('document'));
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
        $document=Document::find($id);

        $validated=$request->validate([
            'document_type' => 'required',
            'first_name' => 'required',
            'last_name'  => 'required',
            'document_id'  => 'required|numeric',
            'email'  => 'required',
            'mobile'  => 'required|numeric',
            'submit_date'  => 'required|date',
            'next_notify' => 'nullable',
            ]);


        $document->update($request->all());

        $setting=SiteSetting::find(1);


        $submit_date_time=strtotime($request->submit_date);
        $expire_date=date('Y-m-d',strtotime('+'.$setting->expire_days.' days',$submit_date_time));

        $document->expire_date=$expire_date;
        if($request->next_notify==null)
        {
            $next_notify=date('Y-m-d',strtotime('+'.$setting->notify_days.' days',$submit_date_time));
            $document->next_notify=$next_notify;
        }
        else{
            $document->next_notify=$request->next_notify;
        }

        $document->save();



        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $document=Document::find($id)->delete();
        return redirect()->route('index');
    }


    public function search(Request $request){
        $search=$request->search_field;

        $documents=Document::where('document_id',$search)
        ->orWhere('first_name','like','%'.$search.'%')
        ->orWhere('last_name','like','%'.$search.'%')
        ->get();

        return view('index',compact('documents'));

    }
}
