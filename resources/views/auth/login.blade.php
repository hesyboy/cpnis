@extends('layouts.master')

@section('content')


    <div class="container mx-auto my-5">
        <div class="shadow bg-white p-5 rounded-xl mb-5">


            <div class="flex justify-center mb-3">
                <div class="mt-3">
                    <span class="font-bold text-2xl">
                        Login To Portal
                    </span>
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
                    <form action="{{route('login')}}" method="post" class="">

                        @csrf








                        <div class="flex items-center gap-5 justify-between my-5">
                            <label for="email" class="font-bold
                            @error('email')
                                text-red-500
                            @enderror
                            ">Email Address</label>
                            <input name="email" class="
                            border border-gray-300 rounded-lg px-3 py-1 shadow-sm focus:outline-none
                            @error('email')
                                border-red-500
                            @enderror
                            " type="text" value="{{old('email')}}">
                        </div>






                        <div class="flex items-center gap-5 justify-between my-5">
                            <label for="password" class="font-bold
                            @error('password')
                                text-red-500
                            @enderror
                            ">Password</label>
                            <input name="password" class="
                            border border-gray-300 rounded-lg px-3 py-1 shadow-sm focus:outline-none
                            @error('password')
                                border-red-500
                            @enderror
                            " type="password" value="{{old('password')}}">
                        </div>

                        <hr>


                        <div class="mt-8 mb-3">
                            <button type="submit" class="btn btn-primary mr-3 font-bold w-full">Login</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>


@endsection

















