<x-app-layout>
    <div class="mx-auto max-w-screen-lg px-4 py-8 sm:px-8  ">
        <div class="flex items-center justify-between pb-6">
          <div>
            <h2 class="font-semibold text-gray-700">User Accounts</h2>
            <span class="text-xs text-gray-500">View accounts of registered users</span>
          </div>
          <div class="flex items-center justify-between">
            <div class="ml-10 space-x-8 lg:ml-40">
              <a href="/dashboard/links/new" class="flex items-center gap-2 rounded-md bg-blue-600 px-4 py-2 text-sm font-semibold text-white focus:outline-none focus:ring hover:bg-blue-700">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m0 0l6.75-6.75M12 19.5l-6.75-6.75" />
                </svg>
      
                Add Link
              </a>
            </div>
          </div>
        </div>
         

        <form class=""  action="{{route('links.update',$link->id)}}" method="POST">
               
              @method('PUT')
              @csrf
            <div class="p-56  ">
  
                <div class="flex max-h-screen flex-col space-y-5 rounded-lg border py-10 px-5 shadow-xl mx-auto">
                  
                    <div class="mx-auto mb-2 space-y-3">
                       <h1 class=" text-8xl font-bold text-gray-700">Edit Links</h1>
                         
                     </div>
                
                  <div class="py-3">
                    <div class="relative mt-2 w-full">
                        <label for="name" class="block mb-2 text-sm font-medium text-green-700 dark:text-green-500">Link name</label>

                      <input type="text" name="name" value="{{$link->name}}" class="border-1 peer block w-full appearance-none rounded-lg border border-gray-300 bg-transparent px-2.5 pb-2.5 pt-4 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0" placeholder=" " />
                    </div>
                    @if($errors->first('name'))
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span>{{$errors->first('name')}}</p>

                    @endif
                  </div>
                
                  <div  class="py-3">
                    <div class="relative mt-2 w-full">
                        <label for="link" class="block mb-2 text-sm font-medium text-green-700 dark:text-green-500">Link url</label>

                      <input type="text" name="link" value="{{$link->link}}" class="border-1 peer block w-full appearance-none rounded-lg border border-gray-300 bg-transparent px-2.5 pb-2.5 pt-4 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0" placeholder=" " />
                    </div>
                    @if($errors->first('link'))
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span>{{$errors->first('link')}}</p>

                    @endif
                  </div>
                   
                  <div  class="w-14 mt-4">
                    @csrf
                       <button type="submit" class=" w-full rounded-lg bg-blue-600 py-3 font-bold text-white">save</button>
                   </div>
                </div>
                </div>
              

        </form>




      </div>
      
</x-app-layout>