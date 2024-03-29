@extends('layouts.app')



@section('content')


<div class="dark:bg-gray-800 dark:text-gray-50 mx-5 my-5">
	<div class="container grid grid-cols-12 mx-auto dark:bg-gray-900">
		<div class="bg-no-repeat bg-cover dark:bg-gray-700 col-span-full lg:col-span-4" style="background-image: url('../../storage/app/public/picture/1373.jpeg');">
            <img src="" alt="">
        </div>
		<div class="flex flex-col p-6 col-span-full row-span-full lg:col-span-8 lg:p-10">
			<div class="flex justify-start">
				<span class="px-2 py-1 text-xs rounded-full dark:bg-violet-400 dark:text-gray-900">Label</span>
			</div>
			<h1 class="text-3xl font-semibold">book_in_the_wood</h1>
			<p class="flex-1 pt-2">Perspiciatis illo quia laboriosam nulla sint nobis numquam..</p>
			<a rel="noopener noreferrer" href="#" class="inline-flex items-center pt-2 pb-6 space-x-2 text-sm dark:text-violet-400">
				<span>Read more</span>
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
					<path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
				</svg>
			</a>
			<div class="flex items-center justify-between pt-2">
				<div class="flex space-x-2">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 dark:text-gray-400">
						<path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path>
					</svg>
					<span class="self-center text-sm">by Leroy Jenkins</span>
				</div>
				<span class="text-xs">3 min read</span>
			</div>
		</div>
	</div>
</div>

<!-- component -->
    
 @forelse ( $comments as $comment)
     
 <div class="flex items-center justify-center w-screen bg-white dark:bg-gray-800">
 <div class="bg-white dark:bg-gray-800 text-black dark:text-gray-200 p-4 antialiased flex max-w-lg">
 <img class="rounded-full h-8 w-8 mr-2 mt-1 " src="https://picsum.photos/id/1027/200/200"/>
 <div>
     <div class="bg-gray-100 dark:bg-gray-700 rounded-3xl px-4 pt-2 pb-2.5">
     <div class="font-semibold text-sm leading-relaxed">Jon Doe {{$comment['id']}}</div>
     <div class="text-normal leading-snug md:leading-normal">
     {{$comment['comment']}}
     </div>
     </div>
     <div class="text-sm ml-4 mt-0.5 text-gray-500 dark:text-gray-400">Just Now</div>
     <div class="bg-white dark:bg-gray-700 border border-white dark:border-gray-700 rounded-full float-right -mt-8 mr-0.5 flex shadow items-center ">
     <svg class="p-0.5 h-5 w-5 rounded-full z-20 bg-white dark:bg-gray-700" xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' viewBox='0 0 16 16'><defs><linearGradient id='a1' x1='50%' x2='50%' y1='0%' y2='100%'><stop offset='0%' stop-color='#18AFFF'/><stop offset='100%' stop-color='#0062DF'/></linearGradient><filter id='c1' width='118.8%' height='118.8%' x='-9.4%' y='-9.4%' filterUnits='objectBoundingBox'><feGaussianBlur in='SourceAlpha' result='shadowBlurInner1' stdDeviation='1'/><feOffset dy='-1' in='shadowBlurInner1' result='shadowOffsetInner1'/><feComposite in='shadowOffsetInner1' in2='SourceAlpha' k2='-1' k3='1' operator='arithmetic' result='shadowInnerInner1'/><feColorMatrix in='shadowInnerInner1' values='0 0 0 0 0 0 0 0 0 0.299356041 0 0 0 0 0.681187726 0 0 0 0.3495684 0'/></filter><path id='b1' d='M8 0a8 8 0 00-8 8 8 8 0 1016 0 8 8 0 00-8-8z'/></defs><g fill='none'><use fill='url(#a1)' xlink:href='#b1'/><use fill='black' filter='url(#c1)' xlink:href='#b1'/><path fill='white' d='M12.162 7.338c.176.123.338.245.338.674 0 .43-.229.604-.474.725a.73.73 0 01.089.546c-.077.344-.392.611-.672.69.121.194.159.385.015.62-.185.295-.346.407-1.058.407H7.5c-.988 0-1.5-.546-1.5-1V7.665c0-1.23 1.467-2.275 1.467-3.13L7.361 3.47c-.005-.065.008-.224.058-.27.08-.079.301-.2.635-.2.218 0 .363.041.534.123.581.277.732.978.732 1.542 0 .271-.414 1.083-.47 1.364 0 0 .867-.192 1.879-.199 1.061-.006 1.749.19 1.749.842 0 .261-.219.523-.316.666zM3.6 7h.8a.6.6 0 01.6.6v3.8a.6.6 0 01-.6.6h-.8a.6.6 0 01-.6-.6V7.6a.6.6 0 01.6-.6z'/></g></svg>
     <svg class="p-0.5 h-5 w-5 rounded-full -ml-1.5 bg-white dark:bg-gray-700" xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' viewBox='0 0 16 16'><defs><linearGradient id='a2' x1='50%' x2='50%' y1='0%' y2='100%'><stop offset='0%' stop-color='#FF6680'/><stop offset='100%' stop-color='#E61739'/></linearGradient><filter id='c2' width='118.8%' height='118.8%' x='-9.4%' y='-9.4%' filterUnits='objectBoundingBox'><feGaussianBlur in='SourceAlpha' result='shadowBlurInner1' stdDeviation='1'/><feOffset dy='-1' in='shadowBlurInner1' result='shadowOffsetInner1'/><feComposite in='shadowOffsetInner1' in2='SourceAlpha' k2='-1' k3='1' operator='arithmetic' result='shadowInnerInner1'/><feColorMatrix in='shadowInnerInner1' values='0 0 0 0 0.710144928 0 0 0 0 0 0 0 0 0 0.117780134 0 0 0 0.349786932 0'/></filter><path id='b2' d='M8 0a8 8 0 100 16A8 8 0 008 0z'/></defs><g fill='none'><use fill='url(#a2)' xlink:href='#b2'/><use fill='black' filter='url(#c2)' xlink:href='#b2'/><path fill='white' d='M10.473 4C8.275 4 8 5.824 8 5.824S7.726 4 5.528 4c-2.114 0-2.73 2.222-2.472 3.41C3.736 10.55 8 12.75 8 12.75s4.265-2.2 4.945-5.34c.257-1.188-.36-3.41-2.472-3.41'/></g></svg>
     <span class="text-sm ml-1 pr-1.5 text-gray-500 dark:text-gray-300">3</span>
     </div>
 </div>
 </div>
 </div>
 @empty
     <div class="flex justify-center font-bold">
        No Comments
     </div>
 @endforelse
<div id="comments">

</div>

 <script>
    $(function() {
        // Handle form submission
        $('#comment-form').submit(function(event) {
            // Prevent the form from submitting normally
            event.preventDefault();
            
            // Get the form data
            var formData = $(this).serialize();
            
            // Send the comment to the server using AJAX
            $.post('/add_comment', formData, function(data) {
                // Add the new comment to the page
                $('#comments').append(`
 <div class="flex items-center justify-center w-screen bg-white dark:bg-gray-800">
 <div class="bg-white dark:bg-gray-800 text-black dark:text-gray-200 p-4 antialiased flex max-w-lg">
 <img class="rounded-full h-8 w-8 mr-2 mt-1 " src="https://picsum.photos/id/1027/200/200"/>
 <div>
     <div class="bg-gray-100 dark:bg-gray-700 rounded-3xl px-4 pt-2 pb-2.5">
     <div class="font-semibold text-sm leading-relaxed">Jon Doe</div>
     <div class="text-normal leading-snug md:leading-normal">
     ${data.comment}
     </div>
     </div>
     <div class="text-sm ml-4 mt-0.5 text-gray-500 dark:text-gray-400">14 w</div>
     <div class="bg-white dark:bg-gray-700 border border-white dark:border-gray-700 rounded-full float-right -mt-8 mr-0.5 flex shadow items-center ">
     <svg class="p-0.5 h-5 w-5 rounded-full z-20 bg-white dark:bg-gray-700" xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' viewBox='0 0 16 16'><defs><linearGradient id='a1' x1='50%' x2='50%' y1='0%' y2='100%'><stop offset='0%' stop-color='#18AFFF'/><stop offset='100%' stop-color='#0062DF'/></linearGradient><filter id='c1' width='118.8%' height='118.8%' x='-9.4%' y='-9.4%' filterUnits='objectBoundingBox'><feGaussianBlur in='SourceAlpha' result='shadowBlurInner1' stdDeviation='1'/><feOffset dy='-1' in='shadowBlurInner1' result='shadowOffsetInner1'/><feComposite in='shadowOffsetInner1' in2='SourceAlpha' k2='-1' k3='1' operator='arithmetic' result='shadowInnerInner1'/><feColorMatrix in='shadowInnerInner1' values='0 0 0 0 0 0 0 0 0 0.299356041 0 0 0 0 0.681187726 0 0 0 0.3495684 0'/></filter><path id='b1' d='M8 0a8 8 0 00-8 8 8 8 0 1016 0 8 8 0 00-8-8z'/></defs><g fill='none'><use fill='url(#a1)' xlink:href='#b1'/><use fill='black' filter='url(#c1)' xlink:href='#b1'/><path fill='white' d='M12.162 7.338c.176.123.338.245.338.674 0 .43-.229.604-.474.725a.73.73 0 01.089.546c-.077.344-.392.611-.672.69.121.194.159.385.015.62-.185.295-.346.407-1.058.407H7.5c-.988 0-1.5-.546-1.5-1V7.665c0-1.23 1.467-2.275 1.467-3.13L7.361 3.47c-.005-.065.008-.224.058-.27.08-.079.301-.2.635-.2.218 0 .363.041.534.123.581.277.732.978.732 1.542 0 .271-.414 1.083-.47 1.364 0 0 .867-.192 1.879-.199 1.061-.006 1.749.19 1.749.842 0 .261-.219.523-.316.666zM3.6 7h.8a.6.6 0 01.6.6v3.8a.6.6 0 01-.6.6h-.8a.6.6 0 01-.6-.6V7.6a.6.6 0 01.6-.6z'/></g></svg>
     <svg class="p-0.5 h-5 w-5 rounded-full -ml-1.5 bg-white dark:bg-gray-700" xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' viewBox='0 0 16 16'><defs><linearGradient id='a2' x1='50%' x2='50%' y1='0%' y2='100%'><stop offset='0%' stop-color='#FF6680'/><stop offset='100%' stop-color='#E61739'/></linearGradient><filter id='c2' width='118.8%' height='118.8%' x='-9.4%' y='-9.4%' filterUnits='objectBoundingBox'><feGaussianBlur in='SourceAlpha' result='shadowBlurInner1' stdDeviation='1'/><feOffset dy='-1' in='shadowBlurInner1' result='shadowOffsetInner1'/><feComposite in='shadowOffsetInner1' in2='SourceAlpha' k2='-1' k3='1' operator='arithmetic' result='shadowInnerInner1'/><feColorMatrix in='shadowInnerInner1' values='0 0 0 0 0.710144928 0 0 0 0 0 0 0 0 0 0.117780134 0 0 0 0.349786932 0'/></filter><path id='b2' d='M8 0a8 8 0 100 16A8 8 0 008 0z'/></defs><g fill='none'><use fill='url(#a2)' xlink:href='#b2'/><use fill='black' filter='url(#c2)' xlink:href='#b2'/><path fill='white' d='M10.473 4C8.275 4 8 5.824 8 5.824S7.726 4 5.528 4c-2.114 0-2.73 2.222-2.472 3.41C3.736 10.55 8 12.75 8 12.75s4.265-2.2 4.945-5.34c.257-1.188-.36-3.41-2.472-3.41'/></g></svg>
     <span class="text-sm ml-1 pr-1.5 text-gray-500 dark:text-gray-300">3</span>
     </div>
 </div>
 </div>
 </div>`);
                
                // Clear the comment text field
                $('#comment-form textarea').val('');
            });
        });
    });
</script>

<div class="flex items-center justify-center w-screen h-screen bg-white dark:bg-gray-800">
    <form id="comment-form">
        @csrf
        <input type="hidden" name="groups_id" value="{{$id}}">
        <input class="bg-gray-100 dark:bg-gray-700 rounded-3xl px-4 pt-2 pb-2.5" name="comment" id="" cols="30" rows="10"> 
        <button type="submit">submit</button>
    </form>

</div>


@endsection