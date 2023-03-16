@extends('layouts.app')



@section('content')


<div class="modal-body flex justify-center items-center h-screen">
  <form class="w-full max-w-md" action="/update_book/{{$books['id']}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-4">
      <input type="text" placeholder="Enter book name" value="{{$books['name']}}" name="name" style="width: 100%;" class="px-4 py-2 rounded-lg border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 ">

      @error('name')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
      @enderror
    </div>

    <div class="mb-4">
      <input type="text" placeholder="Enter book description" value="{{$books['description']}}" name="description" style="width: 100%;" class="px-4 py-2 rounded-lg border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 ">

      @error('description')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
      @enderror
    </div>
    <div class="mb-4">
      <input type="text" placeholder="Enter book author" value="{{$books['auth']}}" name="auth" style="width: 100%;" class="px-4 py-2 rounded-lg border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 ">

      @error('auth')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
      @enderror
    </div>

    <div class="mb-4">
      <input type="file" class="px-4 py-2 rounded-lg border-gray-300 focus:border-blue-500 bg-white w-full" value="" name="picture">

      @error('picture')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
      @enderror
    </div>

    <div class="mb-4">
    <select  class="px-4 py-2 rounded-lg border-gray-300 focus:border-blue-500 bg-white w-full" name="category" id="">
        @foreach ($categories as $category )
          <option value="{{$category->id}}">{{ $category->name }}</option>
        @endforeach
        <!-- <input type="text" placeholder="Enter book category" class="px-4 py-2 rounded-lg border-gray-300 focus:border-blue-500 bg-white w-full" name="category"> -->
      </select>
    </div>
    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">update Record</button>
  </form>
</div>



@endsection