<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body class=" bg-gray-100" >
   <div class=" absolute ">
    <nav class=" bg-blue-500 fixed w-full ">
        <div class=" flex  justify-end items-center h-16 p-4 text-gray-300 text-base tracking-wide  ">
            <ul class=" flex gap-5  mr-16   ">
                <li class=" hover:text-gray-200">
                    <a href="{{ route('home') }}">Courses</a>
                </li>


                <li class=" hover:text-gray-200">
                    <a href="">Latest News</a>
                </li>
                <li class=" hover:text-gray-200">
                    <a href="">Performance</a>
                </li>

                <li class=" hover:text-gray-200">
                    <a href="{{ route('login') }}">Login</a>
                </li>
                <li class=" hover:text-gray-200">
                    <a href="{{ route('register') }}">Sign Up</a>
                </li>
            </ul>
            </div>
    </nav>
   </div>

    <div class=" bg-gray-200  h-10  w-full border-2  ">

    </div>
    <div class="  h-52 w-full border-b-2 ">
            <div class="flex mt-36 justify-center text-center capitalize text-4xl  tracking-wider">
                best premium courses
            </div>
            <div class="flex  gap-2 justify-center text-center capitalize text-4xl  tracking-wider">
                <h3>for</h3>
                <h3 class=" font-bold">  Professionals,</h3>
                <h3 class=" font-bold">  Students,</h3>
                <h3 class=" font-bold">  Beginners</h3>
                <h3 class=" lowercase">  and <span class=" font-bold capitalize">Junior Developers</span></h3>
            </div>
    </div>
   <div class="bg-gray-100">
    <div class=" grid grid-cols-3     mx-36  ">
        @if ($courses->count())
            @foreach ($courses as $course )
            <div class=" w-80  mt-10 p-1  bg-white    shadow-sm rounded-sm  hover:shadow-2xl ">
                <img src="{{ asset('images/'.$course->image) }}" alt="" class="w-96">
                <div class=" flex justify-center items-center pt-5 font-bold tracking-wide capitalize text-red-400 text-lg ">
                        {{ $course->title }}
                </div>
                <div class="  mx-1 text-center   pt-3   capitalize text-red-400  ">
                    {{ $course->description }}
             </div>
             <div class="my-5 flex justify-between items-center px-5 py-5 font-bold tracking-wide capitalize text-red-400 text-lg ">
                 <div >
                     {{ $course->user->name }}
                 </div>
                 <div>
                     {{ $course->price }}
                 </div>
            </div>
         </div>
            @endforeach
            @else
            <h2>There is nothing to display</h2>
        @endif
        {{-- <div class=" w-80  mt-10 p-1  bg-white    shadow-sm rounded-sm  hover:shadow-2xl ">
               <img src="{{ asset('images/a.png') }}" alt="" class="w-96">
               <div class=" flex justify-center items-center pt-5 font-bold tracking-wide capitalize text-red-400 text-lg ">
                    Full Stack Spring boot & React
               </div>
               <div class="  mx-1 text-center   pt-3   capitalize text-red-400  ">
                    Build and Automate deplopment Like Professionals using Spring Boot|React|Maven|Docker
            </div>
            <div class="my-5 flex justify-between items-center px-5 py-5 font-bold tracking-wide capitalize text-red-400 text-lg ">
                <div >
                    Samuel
                </div>
                <div>
                    Ghs 300
                </div>
           </div>
        </div>

        <div class=" w-80  mt-10 p-1  bg-white    shadow-sm rounded-sm   hover:shadow-2xl ">
            <img src="{{ asset('images/a2.png') }}" alt="" class="w-96">
            <div class=" flex justify-center items-center pt-5 font-bold tracking-wide capitalize text-red-400 text-lg ">
                 Full Stack Spring boot & React
            </div>
            <div class="  mx-1 text-center   pt-3   capitalize text-red-400  ">
                 Build and Automate deplopment Like Professionals using Spring Boot|React|Maven|Docker
         </div>
         <div class="my-5 flex justify-between items-center px-5 py-5 font-bold tracking-wide capitalize text-red-400 text-lg ">
             <div >
                 Samuel
             </div>
             <div>
                 Ghs 300
             </div>
        </div>
     </div>

     <div class=" w-80  mt-10 p-1  bg-white    shadow-sm rounded-sm  hover:shadow-2xl ">
        <img src="{{ asset('images/a5.png') }}" alt="" class="w-96 rounded-sm">
        <div class=" flex justify-center items-center pt-5 font-bold tracking-wide capitalize text-red-400 text-lg ">
             Full Stack Spring boot & React
        </div>
        <div class="  mx-1 text-center   pt-3   capitalize text-red-400  ">
             Build and Automate deplopment Like Professionals using Spring Boot|React|Maven|Docker
     </div>
     <div class="my-5 flex justify-between items-center px-5 py-5 font-bold tracking-wide capitalize text-red-400 text-lg ">
         <div >
             Samuel
         </div>
         <div>
             Ghs 300
         </div>
    </div>
 </div>

 <div class=" w-80  mt-10 p-1  bg-white    shadow-sm rounded-sm  hover:shadow-2xl ">
    <img src="{{ asset('images/a3.png') }}" alt="" class="w-96 rounded-sm">
    <div class=" flex justify-center items-center pt-5 font-bold tracking-wide capitalize text-red-400 text-lg ">
         Full Stack Spring boot & React
    </div>
    <div class="  mx-1 text-center   pt-3   capitalize text-red-400  ">
         Build and Automate deplopment Like Professionals using Spring Boot|React|Maven|Docker
 </div>
 <div class="my-5 flex justify-between items-center px-5 py-5 font-bold tracking-wide capitalize text-red-400 text-lg ">
     <div >
         Samuel
     </div>
     <div>
         Ghs 300
     </div>
</div>
</div>

<div class=" w-80  mt-10 p-1  bg-white    shadow-sm rounded-sm  hover:shadow-2xl ">
    <img src="{{ asset('images/a7.png') }}" alt="" class="w-96 rounded-sm">
    <div class=" flex justify-center items-center pt-5 font-bold tracking-wide capitalize text-red-400 text-lg ">
         Full Stack Spring boot & React
    </div>
    <div class="  mx-1 text-center   pt-3   capitalize text-red-400  ">
         Build and Automate deplopment Like Professionals using Spring Boot|React|Maven|Docker
 </div>
 <div class="my-5 flex justify-between items-center px-5 py-5 font-bold tracking-wide capitalize text-red-400 text-lg ">
     <div >
         Samuel
     </div>
     <div>
         Ghs 300
     </div>
</div>
</div> --}}



</div>
   </div>
    <div class=" bg-gray-100 flex justify-center h-52 w-full  ">
        <div class=" text-lg tracking-wide rounded-3xl  w-72 font-bold h-16 flex justify-center items-center p-5 mt-10 bg-red-400  text-gray-100  capitalize  ">
                View all products
        </div>
    </div>
    <div class=" bg-white  w-full   ">
        <div class=" flex justify-center">
            <div class=" mt-20 ">
                <h3 class="text-lg font-bold text-center pb-5 text-black tracking-wider">Let's keep in touch </h3>
                <h3  class=" font-thin tracking-wide text-center text-lg">Subscribe to the mailing list and receive the latest updates</h3>

            </div>
        </div>
        <div class=" mx-96 mt-10  ">
            <form action="">
                <label for="subscribe" class=" text-gray-500">Email Address</label>
                <input type="text" name="email" class=" w-full  h-14 block border-2 mt-2 border-gray-200">
                <div class=" flex  gap-3 mt-5 mb-5 ">
                    <input type="checkbox" name="agree" id="" class="mt-2  ">
                    <h3 class=" tracking-wide text-lg  text-gray-500 ">By clicking this checkbox, you consent to receiving emails from this school or course</h3>
                </div>
                <div class="pb-20 flex justify-center">
                    <button type="submit" class=" text-lg tracking-wide rounded-3xl  w-72 font-bold h-16 flex justify-center items-center p-5 mt-10 bg-red-400  text-gray-100  capitalize  ">
                        Subscribe
                    </button>
                </div>
            </form>
        </div>
    </div>


    <div class=" h-96 w-full border-2 ">
        <footer class="bg-gray-900 h-full w-full ">
                gggg
        </footer>
    </div>

</body>
{{-- <script src="{{ asset('js/index.js') }}"></script> --}}

</html>
