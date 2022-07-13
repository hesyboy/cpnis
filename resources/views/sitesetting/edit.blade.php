@extends('layouts.master')

@section('content')


    <div class="container mx-auto my-5">
        <div class="shadow bg-white p-5 rounded-xl mb-5">


            <div class="flex justify-between mb-3">
                <div class="mt-3">
                    <span class="font-bold text-xl">
                        Edit Portal Settings
                    </span>
                </div>
                <div class="flex gap-4 mt-3">
                    <a href="{{route('index')}}" class="btn btn-secondary mr-3">Back To Home</a>
                </div>
            </div>

        </div>







        <div class="grid grid-cols-4 gap-5 mb-5">
            @foreach ($errors->all() as $error)
                <div class="shadow bg-red-500 text-white px-3 py-2 rounded-xl">
                    {{$error}}
                </div>
            @endforeach
        </div>




        <div class="shadow bg-white p-8 rounded-xl mb-5 max-w-max mx-auto">


            <div class="">
                <div class="">
                    <form action="{{route('setting.update')}}" method="post" class="">
                        @method('put')
                        @csrf



                        <div class="flex items-center gap-5 justify-between my-5">
                            <label for="email" class="font-bold
                            @error('email')
                                text-red-500
                            @enderror
                            ">Admin Email</label>
                            <input name="email" class="
                            border border-gray-300 rounded-lg px-3 py-1 shadow-sm focus:outline-none
                            @error('email')
                                border-red-500
                            @enderror
                            " type="text"  value="{{old('email',$setting->email)}}">
                        </div>





                        <div class="flex items-center gap-5 justify-between my-5">
                            <label for="expire_days" class="font-bold
                            @error('expire_days')
                                text-red-500
                            @enderror
                            ">Expire Days</label>
                            <input name="expire_days" class="
                            border border-gray-300 rounded-lg px-3 py-1 shadow-sm focus:outline-none
                            @error('expire_days')
                                border-red-500
                            @enderror
                            " type="text" value="{{old('expire_days',$setting->expire_days)}}">
                        </div>


                        <div class="flex items-center gap-5 justify-between my-5">
                            <label for="notify_days" class="font-bold
                            @error('notify_days')
                                text-red-500
                            @enderror
                            ">Notification Days</label>
                            <input name="notify_days" class="
                            border border-gray-300 rounded-lg px-3 py-1 shadow-sm focus:outline-none
                            @error('notify_days')
                                border-red-500
                            @enderror
                            " type="text" value="{{old('notify_days',$setting->notify_days)}}">
                        </div>

                        <hr>






                        <div class="mt-8 mb-3">
                            <button type="submit" class="btn btn-primary mr-3 font-bold w-full">Update Settings</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>


@endsection

















