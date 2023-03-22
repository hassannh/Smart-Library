@extends('layouts.app')



@section('content')

<!-- component -->
<!-- entire page -->
<main class="flex items-center justify-center">
    <!-- tabs -->
    <div class="grid w-[40rem] grid-cols-4 space-x-2 rounded-xl bg-gray-200 p-2" x-data="app">
        <div>
            <input type="radio" name="option" id="1" class="peer hidden" checked />
            <label for="1" class="block cursor-pointer select-none rounded-xl p-2 text-center peer-checked:font-bold peer-checked:text-white"> <a href="{{route('admin')}}"> Books </a> </label>
        </div>

        <div>
            <input type="radio" name="option" id="2" class="peer hidden" />
           <label for="2" class="block cursor-pointer select-none rounded-xl p-2 text-center peer-checked:font-bold peer-checked:text-white"><a href="{{route('groupsAdmin')}}">Groups</a></label>
        </div>

        <div>
            <input type="radio" name="option" id="3" class="peer hidden" />
            <label for="3" class="block cursor-pointer select-none rounded-xl p-2 text-center peer-checked:font-bold peer-checked:text-white"><a href="{{route('showUsers')}}">Users</a></label>
        </div>

        <div>
            <input type="radio" name="option" id="4" class="peer hidden" />
            <label for="4" class="block cursor-pointer select-none rounded-xl p-2 text-center peer-checked:font-bold peer-checked:text-white">Admins</label>
        </div>
    </div>
</main>

<!-- component -->
<div class="overflow-x-auto">
    <div class="min-w-screen min-h-screen bg-gray-100 flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
        <div class="w-full lg:w-5/6">
            <div class="my-6">
                <table class="min-w-max w-full table-auto">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">Name</th>
                            <th class="py-3 px-6 text-left">description</th>
                            <th class="py-3 px-6 text-left">category</th>
                            <th class="py-3 px-6 text-center">Author</th>
                            <th class="py-3 px-6 text-center">Picture</th>
                            <th class="py-3 px-6 text-center">Controll</th>
                        </tr>
                    </thead>

                    <tbody class="text-gray-600 text-sm font-light">
                        @foreach($data as $book)
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <form action="update_delete" method="get">
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <div class="flex items-center">
                                        <span class="font-medium" value="{{ $book['name'] }}">{{ $book['name'] }}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        <span>{{ $book['description'] }}</span>
                                    </div>
                                </td>

                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                    <span>{{ $book['category']['name'] }}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <div class="flex items-center justify-center">

                                        <span>{{ $book['auth'] }}</span>

                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <!-- <span class="bg-purple-200 text-purple-600 py-1 px-3 rounded-full text-xs">Active</span> -->
                                    <img style="width: 2rem;" src="{{ env('PICTURES') }}{{ $book['picture'] }}" alt="">
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <div class="flex item-center justify-center">
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <a href="/books/{{$book['id']}}/edit">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                </a>
                                            </svg>
                                        </div>
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <a href="/books/{{$book['id']}}/destroy">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </a>
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                            </form>
                        </tr>

                        @endforeach

                    </tbody>
                </table>

                <div class="mt-5 p-5">

                    {{$data->links()}}
                </div>

                <a href="{{route('add_book')}}">
                    <button class="px-4 py-2 border border-red-600 font-bold text-red-600 text-lg rounded-full my-2 ml-1" data-target="#staticBackdrop" data-toggle="modal" type="button">
                        add book
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection