@extends('layouts.master')

@section('content')

{{-- <div class="relative overflow-hidden bg-no-repeat bg-cover" style="
    background-position: 50%;
    background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/146.webp');
    height: 300px;
  ">
    <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
      style="background-color: rgba(0, 0, 0, 0.75)">
      <div class="flex justify-center items-center h-full">
        <div class="text-center text-white px-6 md:px-12">
            <div class="text-6xl my-3">
                <i class="fa-solid fa-folder"></i>
            </div>
          <h1 class="text-5xl font-bold mt-0 mb-6">Documents</h1>
          <h3 class="text-xl mb-4">CPNIS Portal (Version 1.0)</h3>
          <nav class="bg-grey-light rounded-md w-full">
            <ol class="list-reset flex justify-center gap-2 font-semibold">
              <li><a href="/" class="text-white hover:text-gray-300">Dashboard</a></li>
              <li><span> > </span></li>
              <li><a class="text-yellow-500 hover:text-yellow-600">Documents</a></li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div> --}}



  <div>
    @livewire('panel.document-index')
  </div>









@endsection
