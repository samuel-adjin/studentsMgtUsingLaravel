
@extends('pages.main')
@section('content')

<div >
   <form action="{{ route('filter') }}" method="get" class=" mx-24  flex justify-center p-14">
    <input type="text" placeholder="Find a course" class=" p-3 w-full border-2 border-gray-200" name="title">
    <button type="submit">
     <div   class=" border-t-2  border-b-2 border-r-2 border-gray-200 w-14 cursor-pointer flex justify-center items-center">
         <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
           </svg>
     </div>
    </button>

   </form>
</div>

<div class="ml-20 cursor-pointer  mb-36 ">
    <div class="grid grid-cols-3 hover:text-red-600">
        @if ($courses->count())
            @foreach ($courses as $enrol )
            <div class=" w-96   p-2  bg-gray-50  mb-5  rounded-lg  hover:shadow-2xl  ">
                <img src="{{ asset('images/'.$enrol->course->image) }}" alt="" class="w-96 rounded-sm">
                <div class="  flex justify-center items-center pt-5 font-bold tracking-wide capitalize text-gray-600 text-lg ">
                    {{ $enrol->course->title }}
                </div>

                <div class=" flex justify-center items-center mx-4 p-3">
                    <div class=" w-full rounded-full border-2 h-5 mt-2 border-gray-300">

                    </div>
                </div>

             <div class="my-5 flex justify-between items-center px-5  font-thin tracking-wide capitalize text-gray-600 text-lg ">
                 <div >
                     {{ $enrol->course->user->name }}
                 </div>
                 <div class=" grid grid-rows-2 font-medium    text-lg text-red-400 tracking-wide ">
                     <div class=" font-bold ">
                            0%
                     </div>
                     <div>
                        Completed
                    </div>

                 </div>
            </div>
            </div>
            @endforeach
        @endif
    </div>
</div>
<div class=" mx-36 mt-52 ">
    {{-- <h3 class=" text-lg">{{ $courses->links() }}</h3> --}}
 </div>


@endsection
