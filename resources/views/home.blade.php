@extends('layouts.app')

@section('content')

<!-- component -->
<div class='max-w-md mx-auto mb-6'>
    <form action="/home" role="search" method="GET">
        <div class="relative flex items-center w-full h-12 rounded-lg focus-within:shadow-lg bg-white overflow-hidden">
            <div class="grid place-items-center h-full w-12 text-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>

            <input class="peer h-full w-full outline-none text-sm text-gray-700 pr-2" type="search" name="search" placeholder="Search something.." id="search" />
        </div>
        
    </form>
</div>


<div class="flex flex-wrap gap-4">
    @foreach($data as $item)
    <div class="w-80 mt-24 m-auto lg:mt-16 max-w-sm w-60 h-100 ">
        <img style="width: 20rem;height: 23rem;" src="{{ env('PICTURES') }}{{ $item['picture'] }}" alt="" class="rounded-t-2xl shadow-2xl object-cover" />
        <div class="bg-white shadow-2xl rounded-b-3xl p-3">
            <h2 class="text-center text-gray-800 text-2xl font-bold">{{ $item['name'] }}</h2>
            <div class="w-5/6 mx-auto">
                <p class="text-center text-gray-500">You can now read millions of books, audiobooks ands podcasts on any device anywhere you like!</p>
            </div>
            <div class="bg-blue-700 lg:w-5/6 m-auto mt-6 p-2 hover:bg-indigo-500 rounded-2xl  text-white text-center shadow-xl shadow-bg-blue-700">
                <button classs="lg:text-sm text-lg font-bold">Download PDF</button>
            </div>
            <div class="text-center m-auto mt-6 w-full">
                <button class="text-gray-500 font-bold lg:text-sm hover:text-gray-900">Cancel</button>
            </div>
        </div>
    </div>
    @endforeach
</div>




@endsection