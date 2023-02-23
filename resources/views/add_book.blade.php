@extends('layouts.app')



@section('content')


<div class="modal-body flex justify-center items-center h-screen">
  <form class="w-full max-w-md" action="{{ route('insert_book') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-4">
      <input type="text" placeholder="Enter book name" name="name" style="width: 100%;" class="px-4 py-2 rounded-lg border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 ">
    </div>

    <div class="mb-4">
      <input type="text" placeholder="Enter book description" name="description" style="width: 100%;" class="px-4 py-2 rounded-lg border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 ">
    </div>

    <div class="mb-4">
      <input type="text" placeholder="Enter book author" name="auth" style="width: 100%;" class="px-4 py-2 rounded-lg border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 ">
    </div>

    <div class="mb-4">
      <input type="file" class="px-4 py-2 rounded-lg border-gray-300 focus:border-blue-500 bg-white w-full" name="picture">
    </div>
    
    <div class="mb-4">
      <input type="text" placeholder="Enter book category" class="px-4 py-2 rounded-lg border-gray-300 focus:border-blue-500 bg-white w-full" name="category">
    </div>

    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">Add Record</button>
  </form>
</div>



@endsection