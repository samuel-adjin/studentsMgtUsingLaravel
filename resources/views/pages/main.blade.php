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
            <ul class=" flex gap-5  mr-16  items-center  ">
                <li class=" hover:text-gray-200">
                    <a href="{{ route('home') }}">Courses</a>
                </li>
                <li class=" hover:text-gray-200">
                    <a href="{{ route('mycourses')  }}">My Courses</a>
                </li>

                <li class=" hover:text-gray-200">
                    <a href="">Latest News</a>
                </li>
                <li class=" hover:text-gray-200">
                    <a href="{{ route('logout') }}">Performance</a>
                </li>

                <li class=" ">
                    <svg xmlns="http://www.w3.org/2000/svg" id="profile" class="h-10 w-10 cursor-pointer" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
                      </svg>
                      <div class="bg-white text-gray-800 tracking-wide border-2 hidden shadow-sm mt-10 absolute top-5 text-left right-2 rounded-sm w-36 " id="menu_profile">
                        <ul  id="list" class=" show">
                            <li class=" flex gap-1 pb-1 px-4 h-8 hover:bg-gray-50 mt-4 ">

                                <a href="">Edit Profile</a>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 " viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                    <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                                  </svg>
                            </li>
                            <li class="  flex gap-1 pb-2 px-4 h-8 hover:bg-gray-50 mt-2 ">
                                <a href="{{ route('logout') }}">Logout</a>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                  </svg>

                            </li>

                        </ul>
                </div>
                </li>


            </ul>
            </div>
    </nav>
   </div>

    <div class=" bg-gray-200  h-10  w-full border-2  ">

    </div>

    <div class="mt-5">
        @yield('content')
        
    </div>


    <div class=" h-96 w-full border-2 ">
        <footer class="bg-gray-900 h-full w-full mt-96">
                gggg
        </footer>
    </div>

</body>
<script src="{{ asset('js/index.js') }}"></script>

</html>
