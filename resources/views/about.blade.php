
@extends('layouts.app')



@section('content')


<div class="flex justify-around">
    <div class="px-4 py-4  max-h-auto">
        <img class="px-3 py-3" src="{{ env('PICTURES') }}/about.jpeg" alt="">
    </div>
    <div class="p-4 gap-20">
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. <br>
             Perferendis fuga accusantium odit quo, necessitatibus porro <br>
              facilis obcaecati, dignissimos officia nobis doloribus explicabo <br> 
              vel enim perspiciatis deserunt rerum sapiente. Nisi, ad.  <br>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. <br>
            Facilis voluptatem debitis repellat molestiae aperiam, eos <br>
             delectus placeat voluptate harum autem corrupti iure dolorem <br>
              temporibus, reiciendis beatae aliquam modi alias quisquam.</p>
    </div>
</div>

@endsection