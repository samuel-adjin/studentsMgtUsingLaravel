
@extends('pages.main')
@section('content')
<script src="{{ asset('js/index.js') }}"></script>

<div class=" bg-blue-400 w-full">

    <div class=" text-center flex justify-center text-gray-100 text-4xl  items-center tracking-wider font-bold pt-20 pb-10">
        Java Essentials
    </div>
    <div class=" text-center flex justify-center text-gray-100 text-2xl items-center tracking-wider">
        The Java Skills you need to build software
    </div>

    <div class=" flex justify-center gap-2 pb-20  items-center pt-20">
            <div class=" rounded-full w-52 h-14 border-2 border-gray-200 p-3 flex gap-2 justify-center items-center">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-100" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" />
                      </svg>
                </div>
                <div  class="text-gray-100 font-thin  tracking-wide text-lg">
                    Watch Promo
                </div>
            </div>
            <div id="enrol" class=" rounded-full w-96 text-lg h-14  bg-red-500 p-3  cursor-pointer flex gap-2 justify-center items-center hover:shadow-lg hover:opacity-85" >
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" id= "cart" class="h-5 w-5 text-gray-100" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                          </svg>
                    </div>
                    <div class=" text-gray-100 font-bold tracking-wide   " >
                       <h3 id="enrol_text"> Enroll in course for <span>GHS300</span></h3>
                    </div>
            </div>
    </div>
</div>
<div class=" w-full bg-white  ">
    <div class="    flex justify-center leading-10    mx-52 tracking-wide p-14 text-gray-800">
        Java is one of the top five programming languages and here is here to stay. Java is used enterprise applications, backend services, websites, embedded controllers, and Android app development. Java is the mother of languages such as python, golang, javascript and many. This means that once you master Java the rest of languages will be easy to grasp.

        Knowing how to use Java will give you so many job opportunities as it widely used today.

        In this course Nelson will teach the essential skills and language concepts that you need to know to start building real applications

        So what are you waiting for?

        Let's go
    </div>
</div>
<div class="bg-gray-100">
    <div class=" flex  ml-96 pb-5 pt-8  text-3xl ">
            Your Instructor
    </div>
    <div class=" flex  justify-center ">
        <div class=" rounded-full w-20 h-20 bg-blue-500 border-2 mt-5 flex justify-center items-center">
                image
        </div>
        <div class=" flex justify-center  items-center w-96 p-5 leading-10 tracking-wide mb-36 ">
            Hello World. I am Mama Samba Braima AKA Nelson!
             I am a passionate Software Engineer and YouTuber teaching
             and helping thousands of people around the world how to code
             or how to become professional software engineers through my
             YouTube channel and online courses.My mission is to make coding
              and programming concepts as easy to understand to everyone.
               My journey was not easy and I truly want to help you to
               become the best your can possible and believe the everything
               is possible.
        </div>
</div>
</div>
<div class=" bg-white border-t-2">
    <div class="flex justify-center">
        <img src="{{ asset('images/w1.gif') }}" alt="">
    </div>
    <div class=" flex justify-center text-2xl text-gray-800 tracking-wider leading-7 pb-20">
        Ready to become a better engineer?
    </div>
</div>

<script src="{{ asset('js/enrol.js') }}"></script>


@endsection
