@extends('layouts.master')

@section('content')


    <div class="container mx-auto my-5">













        <div class="shadow-xl bg-white p-3 rounded mb-5 w-full md:w-4/12 mx-auto">

            <div class="flex items-center justify-between py-4 px-4  bg-gray-100 rounded ">
                <div class="">
                    <span class="font-semibold text-lg text-gray-800">
                         New Task
                    </span>
                </div>
                <div class="flex gap-4">
                    <a href="{{route('tasks.index')}}"
                    class="inline-block px-6 py-2.5 bg-gray-800 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-gray-900 hover:shadow-lg ">Back To Tasks</a>
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
                    <form action="{{route('tasks.store')}}" method="post" class="">

                        @csrf

                        <div class="flex flex-col items-start gap-2  my-5">
                            <label for="document_id" class="
                            @error('document_id')
                                text-red-500
                            @enderror
                            ">Select Document</label>
                            <select name="document_id" class="form-select appearance-none bg-gray-50
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
                            @error('document_id')
                                border-red-500
                            @enderror
                            " >
                                <option value="">Select One</option>
                                <option value="0" @if(old('document_id')=="0") selected @endif>IELTS</option>
                            </select>

                        </div>




                        {{-- <div class="flex flex-col items-strat  gap-2  my-5">

                            <label for="document_id" class="
                            @error('document_id')
                                text-red-500
                            @enderror
                            ">Task Title</label>

                            <input name="document_id" class="
                            form-control
                            block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-white bg-clip-padding
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                            @error('document_id')
                                border-red-500
                            @enderror
                            "type="text" value="{{old('document_id')}}">

                        </div> --}}


                        <div class="flex flex-col items-strat  gap-2  my-5">

                            <label for="description" class="
                            @error('description')
                                text-red-500
                            @enderror
                            ">Task Description</label>

                            <textarea name="description" rows="5" class="
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


                        <div class="flex flex-col items-start gap-2  my-5">
                            <label for="priority_id" class="
                            @error('priority_id')
                                text-red-500
                            @enderror
                            ">Select Priority</label>
                            <select name="priority_id" class="form-select appearance-none
                            block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-gray-50 bg-clip-padding bg-no-repeat
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                            @error('priority_id')
                                border-red-500
                            @enderror
                            " >
                                <option value="">Select One</option>
                                <option value="0" @if(old('priority_id')=="0") selected @endif>IELTS</option>
                            </select>

                        </div>



                        <div class="flex flex-col items-start gap-2  my-5">
                            <label for="status_id" class="
                            @error('status_id')
                                text-red-500
                            @enderror
                            ">Select Status</label>
                            <select name="status_id" class="form-select appearance-none
                            block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-gray-50 bg-clip-padding bg-no-repeat
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                            @error('status_id')
                                border-red-500
                            @enderror
                            " >
                                <option value="">Select One</option>
                                <option value="0" @if(old('status_id')=="0") selected @endif>IELTS</option>
                            </select>

                        </div>


                        <div class="flex flex-col items-start gap-2  my-5">
                            <label for="worker_id" class="
                            @error('worker_id')
                                text-red-500
                            @enderror
                            ">Forward Task To</label>
                            <select name="worker_id" class="form-select appearance-none
                            block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-gray-50 bg-clip-padding bg-no-repeat
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                            @error('worker_id')
                                border-red-500
                            @enderror
                            " >
                                <option value="">Select One</option>
                                <option value="0" @if(old('worker_id')=="0") selected @endif>IELTS</option>
                            </select>

                        </div>












                        <div class="mt-8 mb-3">
                            <button type="submit"
                            class=" w-full block px-6 py-4 bg-gray-800 text-white font-medium text-sm leading-tight uppercase rounded shadow-md hover:bg-gray-900 hover:shadow-lg ">
                            Save New Task</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>


@endsection

















