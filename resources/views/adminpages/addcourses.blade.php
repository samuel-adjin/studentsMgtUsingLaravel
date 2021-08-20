@extends('pages.dashboard')
@section('admin-content')

<div>
    <div class="flex justify-center mx-36 relative left-36 mb-16">
        <div class=" my-10 mx-14  flex justify-between   items-center bg-white shadow-sm w-full h-16  ">
           <div class="flex ">
            <input type="text" class="rounded-full border-2 border-blue-500 w-96 h-10  mx-5 p-5 tracking-wide " placeholder="Search course">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 relative right-20 top-2  cursor-pointer text-blue-500 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
              </svg>
           </div>
            <button class="p-3 m-3 bg-blue-500 rounded-lg ring-2 focus:ring-4 hover:bg-blue-400 text-gray-100" id="add">Add Course</button>
    </div>
    </div>

   <div class=" grid grid-cols-2 ml-96">
    @if ($course->count())
            @foreach ($course as $courses)
            <div class=" w-80  mt-10 p-1  bg-white h-96   shadow-sm rounded-sm  hover:shadow-2xl  ">
                <img src="{{ asset('images/'.$courses->image) }}" alt="" class="w-96 rounded-sm">
                <div class=" flex justify-center items-center pt-5 font-bold tracking-wide capitalize text-gray-400 text-lg ">
                    {{ $courses->title }}
                </div>
                <div class="  mx-1 text-center   pt-3   capitalize text-gray-400  ">
                    {{ $courses->description }}
                     {{-- Build and Automate deplopment Like Professionals using Spring Boot|React|Maven|Docker --}}
             </div>
             <div class="my-5 flex justify-between items-center px-5 py-5 font-bold tracking-wide capitalize text-gray-400 text-lg ">
                 <div >
                    {{ $courses->user->name }}
                </div>
                 <div class=" text-red-500">
                    {{ $courses->price}}
                 </div>
            </div>
            </div>

            @endforeach
            @else
            <h2>there is no course to display</h2>
    @endif









   <div class="  my-8 flex justify-center mx-96 px-5 ">
    <div class=" shadow-sm rounded-md  border-2  bg-white">
       <div class=" flex justify-center text-center text-gray-500 font-bold text-lg tracking-wide mt-20 capitalize ">
            Add a new course
       </div>
            <form action="{{ route('addcourse') }}" method="post" enctype="multipart/form-data">
                @csrf
               <div class=" mx-20 my-3">
                <label for="title" class=" text-sm text-gray-500 mb-1">Course title</label>
                <input type="text" name="title" class="border-2 border-gray-300 block w-96 h-10  hover:shadow-md p-5 @error('title')
                        border-red-500
                @enderror">
                @error('title')
                    <span class=" text-red-500">{{ $message }}</span>
                @enderror
               </div>
               <div class=" mx-20 my-2 ">
                <label for="password" class=" text-sm text-gray-500 mb-1">Course Description</label>
                <textarea name="description" id=""  cols="100" rows="100" class=" h-60 resize-none border-2 border-gray-300 block w-96   hover:shadow-md p-5  @error('description')
                        border-red-500
                @enderror"></textarea>
                @error('description')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
            </div>
            <div class=" mx-20 my-3">
                <label for="price" class=" text-sm text-gray-500 mb-1">Price</label>
                <input type="number" name="price" class="border-2 border-gray-300 block w-96 h-10  hover:shadow-md p-5  @error('price')
                            border-red-500
                @enderror">
                @error('price')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
            </div>

               <div class=" mx-20 my-2">
                <label for="image" class=" text-sm text-gray-500">Upload Course Image</label>
                <input type="file" name="image" class="  block  w-56   h-20   p-2  @error('image')
                        border-red-500
                @enderror">
                @error('image')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
            </div>

               <div class="pb-8 flex justify-center ">
                <button type="submit" class="  hover:opacity-90  text-lg tracking-wide rounded-3xl  w-36   font-bold h-16 flex justify-center items-center p-5 mt-10 bg-red-400  text-gray-100  capitalize  ">
                    Add Course
                </button>
            </div>



            </form>
    </div>
</div>

</div>




@endsection

