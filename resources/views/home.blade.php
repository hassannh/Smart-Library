@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> -->
<div class="flex flex-wrap gap-4">
@foreach($data as $item)
    <div class="w-80 mt-24 m-auto lg:mt-16 max-w-sm w-60 h-100 ">
        <img style="width: 16rem;height: 23rem;" src="http://localhost/smart-library/resources/pictures/{{ $item['picture'] }}" alt="" class="rounded-t-2xl shadow-2xl object-cover" />
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



