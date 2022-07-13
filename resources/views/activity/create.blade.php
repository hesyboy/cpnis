@extends('layouts.master')

@section('content')


    <div class="container mx-auto my-5">













        <div class="shadow-xl bg-white p-3 rounded mb-5 w-full md:w-4/12 mx-auto">

            <div class="flex items-center justify-between py-4 px-4  bg-gray-100 rounded ">
                <div class="">
                    <span class="font-semibold text-lg text-gray-800">
                         New Activity
                    </span>
                </div>
                <div class="flex gap-4">
                    <a href="{{route('activities.index')}}"
                    class="inline-block px-6 py-2.5 bg-gray-800 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-gray-900 hover:shadow-lg ">Back</a>
                </div>
            </div>



            {{-- <div class="grid grid-cols-1 gap-2 my-2">
                @foreach ($errors->all() as $error)
                    <div class="text-xs bg-red-200 text-red-500 px-2 py-2 rounded">
                        {{$error}}
                    </div>
                @endforeach
            </div> --}}


            <div class="px-2">
                <div class="">
                    <form action="{{route('activities.store')}}" method="post" class="">

                        @csrf

                        <div class="flex flex-col items-start gap-2  my-5">
                            <label for="task_id" class="
                            @error('task_id')
                                text-red-500
                            @enderror
                            ">Select Task</label>
                            <select name="task_id" class="form-select appearance-none bg-gray-50
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
                            @error('task_id')
                                border-red-500
                            @enderror
                            " >
                                <option value="">Select One</option>
                                @foreach ($tasks as $item )
                                    <option value="{{$item->id}}" @if(old('task_id')=="$item->id") selected @endif>{{$item->id}} _ {{$item->title}}</option>
                                @endforeach

                            </select>

                        </div>






                        <div class="flex flex-col items-strat  gap-2  my-5">

                            <label for="description" class="
                            @error('description')
                                text-red-500
                            @enderror
                            ">Activity Description</label>

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


                        <div class="flex justify-between gap-3 my-5">

                            <div class="w-full md:w-1/2 flex flex-col items-start gap-2">
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




                        </div>

                        <div class="flex justify-between gap-3 my-5">


                            <div class="w-full  flex flex-col items-start gap-2">
                                <label for="to_user" class="
                                @error('to_user')
                                    text-red-500
                                @enderror
                                ">Forward Task To</label>
                                <select name="to_user" class="form-select appearance-none
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
                                @error('to_user')
                                    border-red-500
                                @enderror
                                " >
                                    <option value="">Select One</option>
                                    @foreach ($users as $item )
                                        <option value="{{$item->id}}" @if(old('to_user')=="$item->id") selected @endif>{{$item->name}} _ {{$item->email}}</option>
                                    @endforeach
                                </select>

                            </div>


                        </div>


                        <div class="flex justify-between gap-3 my-5">

                        </div>












                        <div class="mt-8 mb-3">
                            <button type="submit"
                            class=" w-full block px-6 py-4 bg-gray-800 text-white font-medium text-sm leading-tight uppercase rounded shadow-md hover:bg-gray-900 hover:shadow-lg ">
                            Save New</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>


@endsection

















