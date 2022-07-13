@extends('layouts.master')

@section('content')


    {{-- <div class="container mx-auto my-5">
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

    </div> --}}




    <section class=" gradient-form ">
        <div class="container py-12 px-6 h-full mx-auto">
          <div class="flex justify-center items-center flex-wrap h-full g-6 text-gray-800">
            <div class="md:w-8/12">
              <div class="block bg-white shadow-lg rounded-lg">
                <div class="lg:flex lg:flex-wrap g-0">
                  <div class="lg:w-6/12 px-4 md:px-0">
                    <div class="md:p-12 md:mx-6">
                            <div class="grid grid-cols-1 gap-2 my-2">
                                @foreach ($errors->all() as $error)
                                    <div class="text-xs bg-red-200 text-red-500 px-2 py-2 rounded">
                                        {{$error}}
                                    </div>
                                @endforeach
                            </div>
                      <form  action="{{route('login')}}" method="post" class="">
                        @csrf
                        <p class="mb-8 text-center text-xl font-semibold my-3">Please login to your account</p>
                        <div class="mb-4">
                          <input
                            type="text" name="email"
                            class="form-control block w-full px-3 py-3 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                            @error('email')
                                border-red-500
                            @enderror"
                            id="exampleFormControlInput1"
                            placeholder="Username"
                          />
                        </div>
                        <div class="mb-4">
                          <input
                            type="password" name="password"
                            class="form-control block w-full px-3 py-3 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                            @error('password')
                                border-red-500
                            @enderror"
                            id="exampleFormControlInput1"
                            placeholder="Password"
                          />
                        </div>
                        <div class="text-center pt-1 mb-12 pb-1">
                          <button
                            class="inline-block px-6 py-4 bg-blue-800 text-white font-medium leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out w-full mb-3"
                            type="submit"
                          >
                            Log in
                          </button>
                          <a href="/register" class="block w-full p-3 bg-gray-800 text-white rounded" >Create New Account</a>

                          {{-- <a class="text-gray-500" href="#!">Forgot password?</a> --}}
                        </div>
                        {{-- <div class="flex items-center justify-between pb-6">
                          <p class="mb-0 mr-2">Don't have an account?</p>
                          <button
                            type="button"
                            class="inline-block px-6 py-2 border-2 border-red-600 text-red-600 font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out"
                            data-mdb-ripple="true"
                            data-mdb-ripple-color="light"
                          >
                            Danger
                          </button>
                        </div> --}}
                      </form>
                    </div>
                  </div>
                  <div
                    class="md:w-6/12 flex items-center lg:rounded-r-lg rounded-b-lg lg:rounded-bl-none"
                    style="
                      background: linear-gradient(to right, #4f0396, #090031);
                    "
                  >
                    <div class="text-white px-4 py-2 md:p-10 md:mx-6">
                        <h2 class="text-4xl my-2">Login Page</h2>
                        <div class="my-10"></div>
                        <h4 class="text-5xl font-semibold">CPNIS Portal</h4>
                      {{-- <p class="text-sm">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.
                      </p> --}}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


@endsection

















