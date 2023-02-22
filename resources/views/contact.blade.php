@extends('layouts.app')



@section('content')


<!-- component -->
<div class="h-screen md:flex mx-5 my-5">
    <div class="relative overflow-hidden md:flex w-1/2 bg-gradient-to-tr from-blue-800 to-purple-700 i justify-around items-center hidden">
        <div>
            <h1 class="text-white font-bold text-4xl font-sans">GO Library</h1>
            <p class="text-white mt-1">The most popular Digital Library</p>
            <button type="submit" class="block w-28 bg-white text-indigo-800 mt-4 py-2 rounded-2xl font-bold mb-2">Read More</button>
        </div>
    </div>
    <div class="flex md:w-1/2 justify-center py-10 items-center bg-white">
        <form class="bg-white">
            <h1 class="text-gray-800 font-bold text-2xl mb-1">Feel Free!</h1>
            <p class="text-sm font-normal text-gray-600 mb-7">Contact Us</p>
            <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">

                <input class="pl-2 outline-none border-none" type="text" name="" id="" placeholder="First Name" />
            </div>
            <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">

                <input class="pl-2 outline-none border-none" type="text" name="" id="" placeholder="Last Name" />
            </div>
            <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">

                <input class="pl-2 outline-none border-none" type="text" name="" id="" placeholder="Phone Number" />
            </div>
            <div class="flex items-center border-2 py-2 px-3 rounded-2xl">

               <textarea name="" id="" cols="30" rows="5">Message</textarea>
            </div>
            <button type="submit" class="block w-full bg-indigo-600 mt-4 py-2 rounded-2xl text-white font-semibold mb-2">submit</button>
        </form>
    </div>
</div>

@endsection