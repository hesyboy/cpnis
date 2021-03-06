@extends('layouts.master')

@section('content')


<div class="container mx-auto my-5">













    <div class="shadow-xl bg-white p-3 rounded mb-5 w-full md:w-4/12 mx-auto">

        <div class="flex items-center justify-between py-4 px-4  bg-gray-100 rounded ">
            <div class="">
                <span class="font-semibold text-lg text-gray-800">
                     New Document
                </span>
            </div>
            <div class="flex gap-4">
                <a href="{{route('documents.index')}}"
                class="inline-block px-6 py-2.5 bg-gray-800 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-gray-900 hover:shadow-lg ">
                Back To Documents</a>
            </div>
        </div>



        <div class="grid grid-cols-1 gap-2 my-2">
            @foreach ($errors->all() as $error)
                <div class="text-xs bg-red-200 text-red-500 px-2 py-2 rounded">
                    {{$error}}
                </div>
            @endforeach
        </div>


        <div class="px-2">
            <div class="">
                <form action="{{route('documents.store')}}" method="post" class="">

                    @csrf

                    <div class="flex flex-col items-start gap-2  my-5">
                        <label for="document_type" class="
                        @error('document_type')
                            text-red-500
                        @enderror
                        ">Select Document Type</label>
                        <select name="document_type" class="form-select appearance-none bg-gray-50
                        block
                        w-full
                        px-3
                        py-1.5
                        text-base
                        font-normal
                        text-gray-700
                     bg-clip-padding bg-no-repeat
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                        @error('document_type')
                            border-red-500
                        @enderror
                        " >
                            <option value="">Select One</option>
                            <option value="0" @if(old('document_type')=="0") selected @endif>IELTS</option>
                        </select>

                    </div>

                    <div class="flex flex-col items-strat  gap-2  my-5">

                        <label for="document_number" class="
                        @error('document_number')
                            text-red-500
                        @enderror
                        ">Document Number</label>

                        <input type="text" name="document_number"  class="
                        form-control
                        block
                        w-full
                        px-3
                        py-1.5
                        text-base
                        font-normal
                        text-gray-700
                        bg-gray-50 bg-clip-padding
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                        @error('document_number')
                            border-red-500
                        @enderror
                        " value="{{old('document_number')}}">

                    </div>





                    <div class="flex justify-between gap-3  my-5">

                        <div class="flex flex-col w-full md:w-1/2 items-strat  gap-2">

                            <label for="first_name" class="
                            @error('first_name')
                                text-red-500
                            @enderror
                            ">First Name</label>

                            <input type="text" name="first_name"  class="
                            form-control
                            block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-gray-50 bg-clip-padding
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                            @error('first_name')
                                border-red-500
                            @enderror
                            " value="{{old('first_name')}}">

                        </div>
                        <div class="flex flex-col w-full md:w-1/2 items-strat  gap-2 ">

                            <label for="last_name" class="
                            @error('last_name')
                                text-red-500
                            @enderror
                            ">Last Name</label>

                            <input type="text" name="last_name" rows="5" class="
                            form-control
                            block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-gray-50 bg-clip-padding
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                            @error('last_name')
                                border-red-500
                            @enderror
                            " value="{{old('last_name')}}">

                        </div>
                    </div>




                    <div class="flex justify-between gap-3  my-5">

                        <div class="flex flex-col w-full md:w-1/2 items-strat  gap-2">

                            <label for="mobile" class="
                            @error('mobile')
                                text-red-500
                            @enderror
                            ">Mobile Number</label>

                            <input type="text" name="mobile" class="
                            form-control
                            block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-gray-50 bg-clip-padding
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                            @error('mobile')
                                border-red-500
                            @enderror
                            " value="{{old('mobile')}}">

                        </div>

                        <div class="flex flex-col w-full md:w-1/2 items-strat  gap-2">

                            <label for="email" class="
                            @error('email')
                                text-red-500
                            @enderror
                            ">Email</label>

                            <input type="text" name="email" class="
                            form-control
                            block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-gray-50 bg-clip-padding
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                            @error('email')
                                border-red-500
                            @enderror
                            " value="{{old('email')}}">

                        </div>

                    </div>



                    <div class="flex justify-between gap-3  my-5">

                        <div class="flex flex-col w-full md:w-1/2 items-strat  gap-2">

                            <label for="issue_date" class="
                            @error('issue_date')
                                text-red-500
                            @enderror
                            ">Issue Date</label>

                            <input type="date" name="issue_date" class="
                            form-control
                            block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-gray-50 bg-clip-padding
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                            @error('issue_date')
                                border-red-500
                            @enderror
                            " value="{{old('issue_date')}}">

                        </div>


                    </div>


                    <div class="flex flex-col items-strat  gap-2  my-5">

                        <label for="description" class="
                        @error('description')
                            text-red-500
                        @enderror
                        ">Document Description</label>

                        <textarea name="description" rows="2" class="
                        form-control
                        block
                        w-full
                        px-3
                        py-1.5
                        text-base
                        font-normal
                        text-gray-700
                        bg-gray-50 bg-clip-padding
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                        @error('description')
                            border-red-500
                        @enderror
                        ">{{old('description')}}</textarea>

                    </div>







                    <div class="mt-8 mb-3">
                        <button type="submit"
                        class=" w-full block px-6 py-4 bg-gray-800 text-white font-medium text-sm leading-tight uppercase rounded shadow-md hover:bg-gray-900 hover:shadow-lg ">
                        Save New Document</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

</div>


{{-- ----------------------- --}}





@endsection

















