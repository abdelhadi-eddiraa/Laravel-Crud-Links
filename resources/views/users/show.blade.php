<x-app-layout>
   
       
   
   <div style="background: {{$user->babackgroumd_color}}" class="min-w-screen min-h-screen  flex items-center justify-center px-5 py-5">
    @foreach ( $user->links as $link)
        <div class="  w-full mx-auto rounded-lg bg-white shadow-lg px-5 pt-5 pb-10 text-gray-800" style="max-width: 500px">
        <div class="w-full pt-1 pb-5">
            <div class="overflow-hidden rounded-full w-20 h-20 -mt-16 mx-auto shadow-lg">
                <img src="https://randomuser.me/api/portraits/men/15.jpg" alt="">
            </div>
        </div>
        <div class="w-full mb-10">
            <div  class="flex justify-center mt-3 text-sky-500">
             <a  href="{{$link->link}}"  class="user-link font-bold text-3xl">{{$link->name}}</a>
            </div>
             <div class="text-3xl text-indigo-500 text-left leading-tight h-3">“</div>
            <p class="text-sm text-gray-600 text-center px-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam obcaecati laudantium recusandae, debitis eum voluptatem ad, illo voluptatibus temporibus odio provident.</p>
            <div class="text-3xl text-indigo-500 text-right leading-tight h-3 -mt-3">”</div>
        </div>
        <div class="w-full">
            <p class="text-md text-indigo-500 font-bold text-center">Scott Windon</p>
            <p class="text-xs text-gray-500 text-center">@scott.windon</p>
        </div>  
         </div>
     @endforeach
   </div>
</x-app-layout>