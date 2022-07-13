<div>
    <div class="container mx-auto my-5">



        <div class="shadow bg-white p-3 rounded my-3">
            <div class="grid grid-cols-12 gap-3 items-center">
                <a class="col-span-3 flex justify-between items-center font-semibold gap-8 px-6 py-6 cursor-pointer bg-gray-100 text-gray-800 text-2xl leading-tight rounded hover:bg-gray-300"
                wire:click="filterDocuments()">
                 <div class="flex items-center gap-5">
                    <i class="fa-solid fa-folder text-8xl"></i>

                 </div>
                 <div class="flex flex-col gap-2 items-center">
                    <span class="text-4xl">
                        <span>{{count($documents)}}</span>
                        <span class="text-xl">/</span>
                        <span>{{$documentsCount}}</span>
                    </span>
                    <span class="text-2xl">Documents</span>
                 </div>

                </a>
                <div class="flex flex-col gap-3 col-span-7">
                    <div class="flex gap-3 ">
                        <a class="flex  justify-between items-center font-semibold gap-3 px-3 py-3 bg-gray-100 cursor-pointer text-gray-800 text-lg leading-tight rounded hover:bg-gray-300"
                         wire:click="filterDocuments('lock',1)">
                            <i class="fa-solid fa-lock-open text-2xl p-2 rounded bg-emerald-100 text-emerald-600"></i>
                            <span>  Open  </span>
                            <span class="text-2xl">  {{count($totalDcuments->where('lock',1))}}</span>
                       </a>
                       <a class="flex justify-between items-center font-semibold gap-3 px-3 py-3 bg-gray-100 cursor-pointer text-gray-800 text-lg leading-tight rounded hover:bg-gray-300"
                        wire:click="filterDocuments('lock',0)">
                            <i class="fa-solid fa-lock text-2xl p-2 rounded bg-red-100 text-red-600"></i>
                            <span>  Locked  </span>
                            <span class="text-2xl">  {{count($totalDcuments->where('lock',0))}}</span>
                       </a>
                    </div>
                    <div class="w-full flex gap-3 ">
                        <a class=" flex  justify-between items-center font-semibold gap-3 px-3 py-3 bg-gray-100 cursor-pointer text-gray-800 text-lg leading-tight rounded hover:bg-gray-300"
                        wire:click="filterDocuments('status',0)">
                            <i class="fa-solid fa-circle text-2xl p-2 rounded bg-gray-300 text-gray-800"></i>
                            <span>  No Activity </span>
                            <span class="text-2xl">  {{count($totalDcuments->where('status',0))}}</span>
                       </a>
                       <a class="flex justify-between items-center font-semibold gap-3 px-3 py-3 bg-gray-100 cursor-pointer text-gray-800 text-lg leading-tight rounded hover:bg-gray-300"
                       wire:click="filterDocuments('status',1)">
                            <i class="fa-solid fa-circle-dot text-2xl p-2 rounded bg-orange-100 text-orange-600"></i>
                            <span>  Working  </span>
                            <span class="text-2xl">  {{count($totalDcuments->where('status',1))}}</span>
                       </a>

                        <a class="flex  justify-between items-center font-semibold gap-3 px-3 py-3 bg-gray-100 cursor-pointer text-gray-800 text-lg leading-tight rounded hover:bg-gray-300"
                        wire:click="filterDocuments('status',2)">
                           <i class="fa-solid fa-circle-check text-2xl p-2 rounded bg-emerald-100 text-emerald-600"></i>
                           <span>  Complete </span>
                           <span class="text-2xl">  {{count($totalDcuments->where('status',2))}}</span>
                        </a>
                    </div>
                </div>

            </div>

            <div class="h-2 bg-gray-800 rounded my-3"></div>
        </div>




        <div class="shadow bg-white p-3 rounded">

            <div class="">


                <div class=" my-5">

                    <div class="flex justify-between gap-4">

                        <div class="flex gap-5 items-center">
                            <div class="">
                                <a class="flex items-center gap-2 px-6 py-4 bg-orange-700 text-white font-medium text-xl leading-tight uppercase rounded shadow-md hover:bg-gray-900 hover:shadow-lg "
                                 href="{{route('documents.index')}}">
                                 <i class="fas fa-refresh"></i>
                            </a>
                              </div>
                                <div class="relative">
                                    <input type="text" name="search_text" wire:model="search_text" class="
                                    form-control
                                    block
                                    w-96
                                    px-3
                                    py-3
                                    text-base
                                    font-normal
                                    text-gray-700
                                    bg-gray-50 bg-clip-padding
                                    border border-solid border-gray-300
                                    rounded
                                    transition
                                    ease-in-out
                                    m-0
                                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none pl-12
                                    " placeholder="Id , Number , Title , Name , Lastname">
                                    <i class="fas fa-search absolute top-3 left-2 text-2xl text-gray-400"></i>
                                </div>
                        </div>

                        <a href="{{route('documents.create')}}"
                        class="flex items-center gap-2 px-6 py-4 bg-emerald-800 text-white font-medium text-sm leading-tight uppercase rounded shadow-md hover:bg-gray-900 hover:shadow-lg "
                        >
                        <i class="fas fa-plus"></i>
                        <span>Add New Document</span>
                    </a>








                    </div>
                </div>
            </div>




            @if (session('success-add'))
                <div class="alert bg-emerald-100 rounded-lg py-5 px-6 mb-3 text-base text-emerald-700 inline-flex items-center w-full alert-dismissible fade show" role="alert">
                    <strong class="mr-1">WellDone {{auth()->user()->name}} :</strong> {{session('success-add')}}
                    <button type="button" class="btn-close box-content w-4 h-4 p-1 ml-auto text-yellow-900 border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-yellow-900 hover:opacity-75 hover:no-underline" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session('success-update'))
            <div class="alert bg-orange-100 rounded-lg py-5 px-6 mb-3 text-base text-orange-500 inline-flex items-center w-full alert-dismissible fade show" role="alert">
                <strong class="mr-1">WellDone {{auth()->user()->name}} :</strong> {{session('success-update')}}
                <button type="button" class="btn-close box-content w-4 h-4 p-1 ml-auto text-yellow-900 border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-yellow-900 hover:opacity-75 hover:no-underline" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            @if (session('success-delete'))
            <div class="alert bg-red-100 rounded-lg py-5 px-6 mb-3 text-base text-red-600 inline-flex items-center w-full alert-dismissible fade show" role="alert">
                <strong class="mr-1">WellDone {{auth()->user()->name}} :</strong> {{session('success-delete')}}
                <button type="button" class="btn-close box-content w-4 h-4 p-1 ml-auto text-yellow-900 border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-yellow-900 hover:opacity-75 hover:no-underline" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif









            <div class="relative">
                <div class="absolute top-10 left-1/2 bg-gray-800 rounded-full" wire:loading>
                    <div class="flex items-center justify-end p-2">
                        <div class="spinner-border animate-spin w-12 h-12 border-8 rounded-full text-gray-100" role="status">
                        </div>
                    </div>
                </div>
                <div class="flex flex-col" wire:loading.class="opacity-30">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                      <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                          <table class="min-w-full rounded overflow-hidden">
                            <thead class="bg-gray-800 border-b ">
                              <tr class="">
                                <th scope="col" class="text-sm font-medium text-gray-100 px-6 py-4 text-left cursor-pointer hover:text-gray-400" wire:click="sortByFeields('id')">
                                    <i class="fa-solid fa-sort"></i>
                                    Doc ID
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-100 px-6 py-4 text-left cursor-pointer hover:text-gray-400" wire:click="sortByFeields('document_number')">
                                    <i class="fa-solid fa-sort"></i>
                                    Doc Number
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-100 px-6 py-4 text-left cursor-pointer hover:text-gray-400" wire:click="sortByFeields('creator')">
                                    <i class="fa-solid fa-sort"></i>
                                    Created By
                                </th>


                                  <th scope="col" class="text-sm font-medium text-gray-100 px-6 py-4 text-left cursor-pointer hover:text-gray-400" wire:click="sortByFeields('title')">
                                    <i class="fa-solid fa-sort"></i>
                                    Title
                                  </th>
                                  <th scope="col" class="text-sm font-medium text-gray-100 px-6 py-4 text-left cursor-pointer hover:text-gray-400" wire:click="sortByFeields('last_name')">
                                    <i class="fa-solid fa-sort"></i>
                                    Full Name
                                  </th>
                                  <th scope="col" class="text-sm font-medium text-gray-100 px-6 py-4 text-left cursor-pointer hover:text-gray-400"  wire:click="sortByFeields('document_type')">
                                    <i class="fa-solid fa-sort"></i>
                                    Doc Type
                                  </th>
                                  <th scope="col" class="text-sm font-medium text-gray-100 px-6 py-4 text-left cursor-pointer hover:text-gray-400" wire:click="sortByFeields('created_at')">
                                    <i class="fa-solid fa-sort"></i>
                                    Created At
                                  </th>


                                <th scope="col" class="text-sm font-medium text-gray-100 px-6 py-4 text-left">

                                </th>
                              </tr>
                            </thead>
                            <tbody class="">
                                @foreach ($documentlist as $item)
                                <tr class="bg-gray-100 border-b-[15px] border-t-[15px] border-white transition duration-300 ease-in-out  hover:translate-x-5 hover:font-semibold hover:bg-gray-300">

                                    <td class="text-sm text-gray-900 px-6 whitespace-nowrap py-8 ">
                                        <span class="bg-gray-800 rounded py-1 px-2 text-white">
                                        # {{$item->id}}
                                        </span>
                                    </td>

                                    <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                                        <span class="bg-gray-800 rounded py-1 px-2 text-white">
                                            # {{$item->document_number}}
                                        </span>
                                    </td>

                                    <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                                        <span class="bg-gray-800 rounded py-1 px-2 text-white">
                                            {{$item->getCreator->name}}
                                        </span>
                                    </td>


                                    <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                                        <span class="  p-1">
                                            {{$item->title}}
                                        </span>
                                    </td>

                                    <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                                        <span class="  p-1">
                                            {{$item->first_name}} {{$item->last_name}}
                                        </span>
                                    </td>

                                    <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                                        <span class="  p-1">
                                            {{$item->getType->name}}
                                        </span>
                                    </td>


                                    <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                                        <span class=" p-1">
                                            {{$item->created_at}}
                                        </span>
                                    </td>



                                    <td class="text-xs text-gray-900 px-6 py-4 whitespace-nowrap">
                                        <div class="flex justify-between items-center gap-5">


                                            @if ($item->lock==0)
                                                <a class="flex flex-col gap-1 items-center text-red-600  text-xl hover:scale-110 transition">
                                                    <i class="fa-solid fa-lock text-xl"></i>
                                                    <div class="text-sm">Lock</div>
                                                </a>
                                            @elseif ($item->lock==1)
                                                <a class="flex flex-col gap-1 items-center text-emerald-600  text-xl hover:scale-110 transition">
                                                    <i class="fa-solid fa-lock-open text-xl"></i>
                                                    <div class="text-sm">Open</div>
                                                </a>
                                            @endif


                                            @if ($item->status==2)
                                            <a class="flex flex-col gap-1 items-center text-emerald-600  text-xl hover:scale-110 transition">
                                                <i class="fa-solid fa-circle-check  text-xl"></i>
                                                <div class="text-sm">Complete</div>
                                            </a>
                                        @elseif ($item->status==1)
                                            <a class="flex flex-col gap-1 items-center text-orange-600  text-xl hover:scale-110 transition">
                                                <i class="fa-solid fa-circle-dot  text-xl"></i>
                                                <div class="text-sm">Working</div>
                                            </a>
                                        @elseif ($item->status==0)
                                            <a class="flex flex-col gap-1 items-center text-gray-800  text-xl hover:scale-110 transition">
                                                <i class="fa-solid fa-circle  text-xl"></i>
                                                <div class="text-sm">No Activity</div>
                                            </a>
                                        @endif




                                            <form action="{{route('tasks.index')}}">
                                                <input type="hidden" name="document_id" value="{{$item->id}}">
                                                <button type="submit" class="flex flex-col gap-1 items-center text-blue-800 hover:text-blue-900 text-xl hover:scale-110 transition">
                                                    <i class="fas fa-code-fork text-2xl"></i>
                                                    <div class="text-sm font-semibold">Tasks : {{count($item->getTasks)}}</div>
                                                </button>
                                            </form>





                                            |
                                            <a class="flex flex-col gap-1 items-center text-gray-800 hover:text-orange-600 text-xl hover:scale-110 transition" href="">
                                                <i class="fa-solid fa-eye text-xl"></i>
                                                <div class="text-sm">Show</div>
                                            </a>
                                            <a class="flex flex-col gap-1 items-center text-gray-800 hover:text-orange-600 text-xl hover:scale-110 transition"
                                             href="{{route('documents.edit',$item->id)}}">
                                                <i class="fa-solid fa-pen-to-square text-xl"></i>
                                                <div class="text-sm">Edit</div>
                                            </a>
                                            <form action="{{route('documents.delete',$item->id)}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="flex flex-col gap-1 items-center text-gray-800 hover:text-red-700  text-xl hover:scale-110 transition" href="">
                                                    <i class="fa-solid fa-trash-can text-xl"></i>
                                                    <div class="text-sm">Delete</div>
                                                </button>
                                            </form>

                                        </div>
                                    </td>
                                  </tr>
                                @endforeach

                            </tbody>
                          </table>

                          @if ($documentlist->total()>$perPage)
                            <div class="w-full my-3 flex gap-3  items-center">
                                <div class="flex items-center gap-1 px-6 py-2 hover:bg-gray-900 text-white font-medium text-lg
                                rounded shadow-md bg-gray-800 hover:shadow-lg ">
                                <div>
                                    Show More
                                </div>
                                <div class="text-sm text-gray-300">
                                    ( {{$documentlist->lastItem()}} of {{$documentlist->total()}} )
                                </div>

                                </div>

                                <div class="flex items-center gap-1 px-4 py-1 hover:bg-gray-900 text-white font-medium text-lg cursor-pointer
                                rounded shadow-md bg-gray-800 hover:shadow-lg "  wire:click="showMore(1)">
                                    +1
                                </div>
                                <div class="flex items-center gap-1 px-4 py-1 hover:bg-gray-900 text-white font-medium text-lg cursor-pointer
                                rounded shadow-md bg-gray-800 hover:shadow-lg "  wire:click="showMore(5)">
                                    +5
                                </div>
                                <div class="flex items-center gap-1 px-4 py-1 hover:bg-gray-900 text-white font-medium text-lg cursor-pointer
                                rounded shadow-md bg-gray-800 hover:shadow-lg "  wire:click="showMore(10)">
                                    +10
                                </div>
                            </div>
                          @endif


                          {{ $documentlist->links() }}


                        </div>
                      </div>
                    </div>
                  </div>
            </div>



        </div>
    </div>
</div>
