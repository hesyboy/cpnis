<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\DocumentType;
use App\Models\SiteSetting;
use App\Notifications\DocumentNotify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

use function PHPUnit\Framework\isEmpty;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $documentsCount=Document::all()->count();

        if($request->search_text!=""){
                $documents=Document::where('id',$request->search_text)
                ->orWhere('first_name','like','%'.$request->search_text.'%')
                ->orWhere('last_name','like','%'.$request->search_text.'%')
                ->orWhere('document_number','like','%'.$request->search_text.'%')
                ->orWhere('title','like','%'.$request->search_text.'%')->get();
        }
        else
        $documents=Document::all();



        return view('document.index',compact('documents','documentsCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $documentTypes=DocumentType::all();
        return view('document.create',compact('documentTypes'));
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
        'document_number' => 'required',
        'title' => 'required',
        'first_name'  => 'required',
        'last_name'  => 'required',
        'email'  => 'required|email',
        'mobile'  => 'required|numeric',
        'issue_date'  => 'required|date',
        'description' => 'required',
        ]);


        $document=new Document();




        $document->creator=Auth::id();

        $document->document_type=$request->document_type;
        $document->document_number=$request->document_number;
        $document->title=$request->title;
        $document->first_name=$request->first_name;
        $document->last_name=$request->last_name;
        $document->email=$request->email;
        $document->mobile=$request->mobile;
        $document->issue_date=$request->issue_date;
        $document->description=$request->description;
        $document->status=0;


        $document->save();

        return redirect()->route('documents.index')->with('success-add','Document Added Successfuly');
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
        $documentTypes=DocumentType::all();
        return view('document.edit',compact('document','documentTypes'));
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
            'document_number' => 'required',
            'title' => 'required',
            'first_name'  => 'required',
            'last_name'  => 'required',
            'email'  => 'required|email',
            'mobile'  => 'required|numeric',
            'issue_date'  => 'required|date',
            'description' => 'required',
            'status' =>'required',
            'lock' => 'required',
            ]);




            $document->document_type=$request->document_type;
            $document->document_number=$request->document_number;
            $document->title=$request->title;
            $document->first_name=$request->first_name;
            $document->last_name=$request->last_name;
            $document->email=$request->email;
            $document->mobile=$request->mobile;
            $document->issue_date=$request->issue_date;
            $document->description=$request->description;
            $document->status=$request->status;
            $document->lock=$request->lock;

            $document->save();

            return redirect()->route('documents.index')->with('success-update','Document Updated Successfuly');

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
        return redirect()->route('documents.index')->with('success-delete','Document Deleted Successfuly');
    }



}
