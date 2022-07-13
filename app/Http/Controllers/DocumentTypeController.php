<?php

namespace App\Http\Controllers;

use App\Models\DocumentType;
use Illuminate\Http\Request;

use App\Http\Requests\StoreDocumentTypeRequest;
use App\Http\Requests\UpdateDocumentTypeRequest;

class DocumentTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documentTypes=DocumentType::all();
        return view('document.type.index',compact('documentTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('document.type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDocumentTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated=$request->validate([
            'name' => 'required',
        ]);

        $documentType=DocumentType::create([
            'name' => $request->name,
        ]);

        return redirect()->route('documents.types.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DocumentType  $documentType
     * @return \Illuminate\Http\Response
     */
    public function show(DocumentType $documentType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DocumentType  $documentType
     * @return \Illuminate\Http\Response
     */
    public function edit(DocumentType $documentType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDocumentTypeRequest  $request
     * @param  \App\Models\DocumentType  $documentType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDocumentTypeRequest $request, DocumentType $documentType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DocumentType  $documentType
     * @return \Illuminate\Http\Response
     */
    public function destroy(DocumentType $documentType)
    {
        //
    }
}
