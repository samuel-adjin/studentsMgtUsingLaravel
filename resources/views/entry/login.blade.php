<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body class=" bg-gray-100">
    <div class="  ">
        <nav class=" bg-blue-500  w-full ">
            <div class=" flex  justify-end items-center h-16 p-4 text-gray-300 text-base tracking-wide  ">
                <ul class=" flex gap-5  mr-16   ">
                    <li class=" hover:text-gray-200">
                        <a href="{{ route('all') }}">Courses</a>
                    </li>

                    <li class=" hover:text-gray-200">
                        <a href="">Latest News</a>
                    </li>



                    <li class=" hover:text-gray-200">
                        <a href="{{ route('register') }}">Sign Up</a>
                    </li>
                </ul>
                </div>
        </nav>
       </div>

       <div class="  my-8 flex justify-center mx-96 px-5 ">
                <div class=" shadow-sm rounded-md  border-2  bg-white">
                   <div class=" flex justify-center text-center text-gray-500 font-bold text-lg tracking-wide mt-20 ">
                        Log in to Farad
                   </div>
                   @if (session('warning'))
                   <div class=" w-80 p-5 ml-28   mt-3 bg-red-500 text-center text-lg text-gray-50 rounded-lg border-2">{{ session('warning') }}</div>
                     @endif
                        <form action="{{ route('login') }}" method="post">
                            @csrf
                           <div class=" mx-20 my-3">
                            <label for="email" class=" text-sm text-gray-500 mb-1">Email Address</label>
                            <input type="text" name="email" class="border-2 border-gray-300 block w-96 h-10  hover:shadow-md p-5 @error('email')
                                    border-red-500 text-sm tracking-wide
                            @enderror">
                           @error('email')
                                <span class="ml-3 text-red-500">{{ $message }}</span>
                           @enderror
                           </div>
                           <div class=" mx-20 my-2 ">
                            <label for="password" class=" text-sm text-gray-500 mb-1">Password</label>
                            <input type="password" name="password" class="border-2 border-gray-300 block w-96 h-10 hover:shadow-md p-5 @error('password')
                            border-red-500 text-sm tracking-wide
                            @enderror">
                            @error('password')
                                <span class="ml-3 text-red-500">{{ $message }}</span>
                           @enderror
                           </div>

                           <div class="pb-7 flex justify-center ">
                            <button type="submit" class="  hover:opacity-90  text-lg tracking-wide rounded-3xl  w-24  font-bold h-16 flex justify-center items-center p-5 mt-10 bg-red-400  text-gray-100  capitalize  ">
                                Log In
                            </button>
                        </div>
                        <div class=" flex justify-center text-sm text-gray-400 underline mb-5">
                           <a href=""> Forgot Password?</a>
                        </div>
                        <div class=" flex border-t-2 border-gray-200 h-20 ">
                                <div class=" hover:bg-green-500 hover:text-white cursor-pointer border-r-2 w-1/2 border-gray-200 flex justify-center items-center text-center text-sm text-gray-400">
                                        <a href="{{ route('register') }}">Create an account</a>
                                </div>
                                <div class=" hover:bg-green-500 hover:text-white cursor-pointer   w-1/2 flex justify-center items-center text-center text-sm text-gray-400">
                                    <a href="">Login with google</a>
                            </div>
                        </div>

                        </form>
                </div>
       </div>
</body>
</html>
