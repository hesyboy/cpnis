@extends('layouts.master')

@section('content')

<div class="relative overflow-hidden bg-no-repeat bg-cover" style="
    background-position: 50%;
    background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/146.webp');
    height: 300px;
  ">
    <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
      style="background-color: rgba(0, 0, 0, 0.75)">
      <div class="flex justify-center items-center h-full">
        <div class="text-center text-white px-6 md:px-12">
          <h1 class="text-5xl font-bold mt-0 mb-6">Dashboard</h1>
          <h3 class="text-xl mb-4">CPNIS Notification Portal (Version 1.0)</h3>
          <nav class="bg-grey-light rounded-md w-full">
            <ol class="list-reset flex justify-center font-semibold">
              <li><a href="#" class="text-yellow-500 hover:text-yellow-600">Dashboard</a></li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>




  <div class="container mx-auto my-16">
    <div class="grid md:grid-cols-4 gap-10 p-2">
        <div class="flex flex-col gap-3">
            <div class="bg-white rounded shadow overflow-hidden p-4 hover:scale-95 transition">
                <div class="flex justify-start gap-5 items-center">
                    <div class="bg-purple-800 text-white text-4xl p-5 flex items-center justify-center rounded">
                        <span>24</span>
                    </div>
                    <div class="w-3/5 flex flex-col items-start justify-center p-2">
                        <div class="text-gray-800 text-2xl font-semibold p-1">My Activity</div>
                        <div class="text-purple-800 text-base font-semibold p-1">User Name</div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-3 p-1">
                <div class="bg-white rounded shadow overflow-hidden p-2 hover:scale-95 transition">
                    <div class="flex justify-start gap-5 items-center">
                        <div class="bg-purple-800 text-white  text-2xl p-2 flex items-center justify-center rounded">
                            <span>20</span>
                        </div>
                        <div class="w-3/5 flex flex-col items-start justify-center">
                            <div class="text-gray-800 text-xl font-semibold p-2"> Tasks</div>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded shadow overflow-hidden p-2 hover:scale-95 transition">
                    <div class="flex justify-start gap-5 items-center">
                        <div class="bg-purple-800 text-white  text-2xl p-2 flex items-center justify-center rounded">
                            <span>20</span>
                        </div>
                        <div class="w-3/5 flex flex-col items-start justify-center">
                            <div class="text-gray-800 text-xl font-semibold p-2">Notifications</div>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded shadow overflow-hidden p-2 hover:scale-95 transition">
                    <div class="flex justify-start gap-5 items-center">
                        <div class="bg-purple-800 text-white  text-2xl p-2 flex items-center justify-center rounded">
                            <span>20</span>
                        </div>
                        <div class="w-3/5 flex flex-col items-start justify-center">
                            <div class="text-gray-800 text-xl font-semibold p-2">All</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col gap-3">
            <div class="bg-white rounded shadow overflow-hidden p-4 hover:scale-95 transition">
                <div class="flex justify-start gap-5 items-center">
                    <div class="bg-purple-800 text-white text-4xl p-5 flex items-center justify-center rounded">
                        <span>24</span>
                    </div>
                    <div class="w-3/5 flex flex-col items-start justify-center p-2">
                        <div class="text-gray-800 text-2xl font-semibold p-1">Documents</div>
                        <div class="text-purple-800 text-base font-semibold p-1">Show All</div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-3 p-1">
                <div class="bg-white rounded shadow overflow-hidden p-2 hover:scale-95 transition">
                    <div class="flex justify-start gap-5 items-center">
                        <div class="bg-purple-800 text-white  text-2xl p-2 flex items-center justify-center rounded">
                            <span>20</span>
                        </div>
                        <div class="w-3/5 flex flex-col items-start justify-center">
                            <div class="text-gray-800 text-xl font-semibold p-2">IELTS</div>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded shadow overflow-hidden p-2 hover:scale-95 transition">
                    <div class="flex justify-start gap-5 items-center">
                        <div class="bg-purple-800 text-white  text-2xl p-2 flex items-center justify-center rounded">
                            <span>20</span>
                        </div>
                        <div class="w-3/5 flex flex-col items-start justify-center">
                            <div class="text-gray-800 text-xl font-semibold p-2">ReSubmite</div>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded shadow overflow-hidden p-2 hover:scale-95 transition">
                    <div class="flex justify-start gap-5 items-center">
                        <div class="bg-purple-800 text-white  text-2xl p-2 flex items-center justify-center rounded">
                            <span>20</span>
                        </div>
                        <div class="w-3/5 flex flex-col items-start justify-center">
                            <div class="text-gray-800 text-xl font-semibold p-2">Reminde Me</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col gap-3">
            <div class="bg-white rounded shadow overflow-hidden p-4 hover:scale-95 transition">
                <div class="flex justify-start gap-5 items-center">
                    <div class="bg-purple-800 text-white text-4xl p-5 flex items-center justify-center rounded">
                        <span>24</span>
                    </div>
                    <div class="w-3/5 flex flex-col items-start justify-center p-2">
                        <div class="text-gray-800 text-2xl font-semibold p-1">Notifications</div>
                        <div class="text-purple-800 text-base font-semibold p-1">Show All</div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-3 p-1">
                <div class="bg-white rounded shadow overflow-hidden p-2 hover:scale-95 transition">
                    <div class="flex justify-start gap-5 items-center">
                        <div class="bg-purple-800 text-white  text-2xl p-2 flex items-center justify-center rounded">
                            <span>20</span>
                        </div>
                        <div class="w-3/5 flex flex-col items-start justify-center">
                            <div class="text-gray-800 text-xl font-semibold p-2">IELTS</div>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded shadow overflow-hidden p-2 hover:scale-95 transition">
                    <div class="flex justify-start gap-5 items-center">
                        <div class="bg-purple-800 text-white  text-2xl p-2 flex items-center justify-center rounded">
                            <span>20</span>
                        </div>
                        <div class="w-3/5 flex flex-col items-start justify-center">
                            <div class="text-gray-800 text-xl font-semibold p-2">ReSubmite</div>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded shadow overflow-hidden p-2 hover:scale-95 transition">
                    <div class="flex justify-start gap-5 items-center">
                        <div class="bg-purple-800 text-white  text-2xl p-2 flex items-center justify-center rounded">
                            <span>20</span>
                        </div>
                        <div class="w-3/5 flex flex-col items-start justify-center">
                            <div class="text-gray-800 text-xl font-semibold p-2">Reminde Me</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col gap-3">
            <div class="bg-white rounded shadow overflow-hidden p-4 hover:scale-95 transition">
                <div class="flex justify-start gap-5 items-center">
                    <div class="bg-purple-800 text-white text-4xl p-5 flex items-center justify-center rounded">
                        <span>24</span>
                    </div>
                    <div class="w-3/5 flex flex-col items-start justify-center p-2">
                        <div class="text-gray-800 text-2xl font-semibold p-1">Documents</div>
                        <div class="text-purple-800 text-base font-semibold p-1">Show All</div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-3 p-1">
                <div class="bg-white rounded shadow overflow-hidden p-2 hover:scale-95 transition">
                    <div class="flex justify-start gap-5 items-center">
                        <div class="bg-purple-800 text-white  text-2xl p-2 flex items-center justify-center rounded">
                            <span>20</span>
                        </div>
                        <div class="w-3/5 flex flex-col items-start justify-center">
                            <div class="text-gray-800 text-xl font-semibold p-2">IELTS</div>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded shadow overflow-hidden p-2 hover:scale-95 transition">
                    <div class="flex justify-start gap-5 items-center">
                        <div class="bg-purple-800 text-white  text-2xl p-2 flex items-center justify-center rounded">
                            <span>20</span>
                        </div>
                        <div class="w-3/5 flex flex-col items-start justify-center">
                            <div class="text-gray-800 text-xl font-semibold p-2">ReSubmite</div>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded shadow overflow-hidden p-2 hover:scale-95 transition">
                    <div class="flex justify-start gap-5 items-center">
                        <div class="bg-purple-800 text-white  text-2xl p-2 flex items-center justify-center rounded">
                            <span>20</span>
                        </div>
                        <div class="w-3/5 flex flex-col items-start justify-center">
                            <div class="text-gray-800 text-xl font-semibold p-2">Reminde Me</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
  </div>




@endsection
