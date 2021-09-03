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

   <div class="  ml-80 mr-20 mb-20">


        <!-- This example requires Tailwind CSS v2.0+ -->
<div class="flex flex-col w-full">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Course
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Description
                </th>

                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Amount
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Enrollment
                </th>
                <th scope="col" class="relative px-6 py-3">
                  {{-- <span class="sr-only">Edit</span> --}}
                  Actions

                </th>

              </tr>
            </thead>
            @foreach ($course as $courses )
            <tbody class="bg-white divide-y divide-gray-200">
                <tr>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex items-center">
                      <div class="flex-shrink-0 h-10 w-10">
                        <img class="h-10 w-10 rounded-full" src="{{ asset('images/'.$courses->image) }}" alt="">
                      </div>
                      <div class="ml-4">

                        <div class="text-sm font-medium text-gray-900">
                          {{ $courses->title }}
                        </div>

                      </div>
                    </div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">{{ $courses->description }}</div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                      {{ $courses->price }}
                    </span>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    5
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium flex gap-5">
                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                    <a href="#" class="text-red-600 hover:text-red-900">Delete</a>

                  </td>

                </tr>

                <!-- More people... -->
              </tbody>
                        @endforeach

          </table>
          <div class=" mx-36 my-3 ">
            <h3 class=" text-lg">{{ $course->links() }}</h3>
         </div>
        </div>
      </div>
    </div>


  </div>

</div>

<div class=" absolute top-0 bg-gray-500 bg-opacity-40 pb-10 w-full" name="backdrop">
    <div class=" flex my-11 justify-center mx-96 px-5 ">
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

