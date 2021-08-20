@extends('pages.main')
@section('content')
<script src="{{ asset('js/index.js') }}"></script>
<div class=" flex justify-between mt-20 ml-36">
    <div class=" flex gap-5 justify-center">
        <div class=" bg-white w-36 h-10 p-3 rounded-2xl flex gap-2 items-center text-center tracking-wide">
                <h3 class=" text-gray-400 font-semibold">Category</h3>
                <div class=" flex gap-2i items-center  " >
                    <h3 class=" text-red-500">All</h3>
                    <svg xmlns="http://www.w3.org/2000/svg" id="categ" class="h-5 w-5 text-red-500 cursor-pointer" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                      </svg>
                </div>
        </div>

        <div class="bg-white text-gray-800 tracking-wide border-2 hidden shadow-sm mt-10 absolute top-28 text-left left-64  rounded-sm w-36 " id="menu_categ">
            <ul  >
                <li class="   pb-1 px-4 h-8 hover:bg-gray-50 mt-4 ">
                    <a href="">All</a>
                </li>
                @if ($course->count())
                @foreach ($course as $courses )
                <li class="   pb-2 px-4 h-8 hover:bg-gray-50 mt-2 ">
                    <a href="">{{ $courses->title }}</a>
                </li>
                @endforeach

                @endif

            </ul>
    </div>
        <div class=" bg-white w-36 h-10 p-3 rounded-2xl flex gap-2 items-center justify-center text-center tracking-wide">
            <h3 class=" text-gray-400 font-semibold ">Author</h3>
            <div class=" flex gap-2 items-center " >
                <h3 class=" text-red-500">All</h3>
               <div>
                <svg xmlns="http://www.w3.org/2000/svg" id="author" class="h-5 w-5 text-red-500 cursor-pointer" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                  </svg>


               </div>

            </div>
            <div class="bg-white text-gray-800 tracking-wide border-2 hidden shadow-sm mt-10 absolute top-28 text-left left-96 rounded-sm w-36 " id="menu_author">
                <ul  id="list" class=" show">
                    <li class="   pb-1 px-4 h-8 hover:bg-gray-50 mt-4 ">
                        <a href="">All</a>
                    </li>
                   @if ($user->count())
                   @foreach ($user as $users)
                   <li class="   pb-2 px-4 h-8 hover:bg-gray-50 mt-2 ">
                       <a href="">{{ $users->name }}</a>
                   </li>
                   @endforeach
                   @endif
                </ul>
        </div>
    </div>
    </div>

    <div class="flex ">
        <form action="{{ route('search') }}" class=" flex" method="get">

            <input type="text" name="search" placeholder=" Find course" class="w-64 h-10 p-3 border-t-2 border-b-2 border-l-2  border-gray-200   ">
        <button class=" border-r-2 w-20 bg-blue-500 text-center text-white border-gray-200 cursor-pointer mr-16">Search</button>

        </form>
    </div>

</div>



<div class="bg-gray-100 mb-72">
    <div  class=" grid grid-cols-3  cursor-pointer    mx-36  ">


        @if ( isset($course) )
        @foreach ($course as $courses )
               <a href="{{ route('enrol') }}">
                <div class=" w-80  mt-10 p-1  bg-white  shadow-sm rounded-sm  hover:shadow-2xl "  >
                    <img src="{{ asset('images/'.$courses->image) }}" alt="" class="w-96">
                    <div class=" flex justify-center items-center pt-5 font-bold tracking-wide capitalize text-gray-400 text-lg ">
                            {{ $courses->title }}
                    </div>
                    <div class="  mx-1 text-center   pt-3   capitalize text-gray-400  ">
                            {{ $courses->description }}
                    </div>
                 <div class="my-5 flex justify-between items-center px-5 py-5 font-bold tracking-wide capitalize text-gray-400 text-lg ">
                     <div >
                            {{ $courses->user->name }}
                    </div>
                     <div class=" text-red-500">
                        {{ $courses->price }}
                    </div>
                </div>
             </div>
            </a>
               @endforeach
                @else
                <h2>Nothing to display</h2>
        @endif



       


















        {{-- @if ($course->count())
               @foreach ($course as $courses )
               <a href="{{ route('enrol') }}">
                <div class=" w-80  mt-10 p-1  bg-white  shadow-sm rounded-sm  hover:shadow-2xl "  >
                    <img src="{{ asset('images/'.$courses->image) }}" alt="" class="w-96">
                    <div class=" flex justify-center items-center pt-5 font-bold tracking-wide capitalize text-gray-400 text-lg ">
                            {{ $courses->title }}
                    </div>
                    <div class="  mx-1 text-center   pt-3   capitalize text-gray-400  ">
                            {{ $courses->description }}
                    </div>
                 <div class="my-5 flex justify-between items-center px-5 py-5 font-bold tracking-wide capitalize text-gray-400 text-lg ">
                     <div >
                            {{ $courses->user->name }}
                    </div>
                     <div class=" text-red-500">
                        {{ $courses->price }}
                    </div>
                </div>
             </div>
            </a>
               @endforeach
               @else
               <h2>There is no course to display</h2>
        @endif --}}

</div>

            <div class=" mx-36 mt-52 ">
               <h3 class=" text-lg">{{ $course->links() }}</h3>
            </div>
   </div>



@endsection
