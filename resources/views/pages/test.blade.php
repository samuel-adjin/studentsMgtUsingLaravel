@extends('pages.main')
@section('content')








    <div class="flex ">
        <form action="{{ route('search') }}" class=" flex" method="get">
            <input type="text" name="title" placeholder=" Find course" class="w-64 h-10 p-3 border-t-2 border-b-2 border-l-2  border-gray-200   ">
        <button class=" border-r-2 w-20 bg-blue-500 text-center text-white border-gray-200 cursor-pointer mr-16" type="submit">Search</button>

        </form>
    </div>

</div>



<div class="bg-gray-100 mb-72">
    <div  class=" grid grid-cols-3  cursor-pointer    mx-36  ">


        @if ( isset($filter) )
        @foreach ($filter as $courses )

                <a href="{{ route('view.course',$courses->id) }}" >
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
               <h3 class=" text-lg">{{ $filter->links() }}</h3>
            </div>
   </div>



@endsection
