@extends('layouts.app')



@section('content')


<div class="modal-body flex justify-center items-center h-screen">
  <form class="w-full max-w-md" action="/updateP/{{$user['id']}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-4">
      <input type="text" placeholder="Enter new Name" value="{{$user['name']}}" name="name" style="width: 100%;" class="px-4 py-2 rounded-lg border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 ">

      @error('name')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
      @enderror
    </div>

    <div class="mb-4">
      <input type="text" placeholder="Enter new email" value="{{$user['email']}}" name="email" style="width: 100%;" class="px-4 py-2 rounded-lg border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 ">

      @error('email')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
      @enderror
    </div>
    <div class="mb-4">
      <input type="text" value="{{$user['password']}}" name="password" style="width: 100%;" class="px-4 py-2 rounded-lg border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 ">

      @error('password')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
      @enderror
    </div>

 
    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">update profile</button>
  </form>
</div>



@endsection