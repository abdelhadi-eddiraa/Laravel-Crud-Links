<x-app-layout>
    <div class="mx-auto max-w-screen-lg px-4 py-8 sm:px-8">
        <div class="flex items-center justify-between pb-6">
          <div>
            <h2 class="font-semibold text-gray-700">User Accounts</h2>
            <span class="text-xs text-gray-500">View accounts of registered users</span>
          </div>
          <div class="flex items-center justify-between">
            <div class="ml-10 space-x-8 lg:ml-40">
              <a href="{{route('links.create')}}" class="flex items-center gap-2 rounded-md bg-blue-600 px-4 py-2 text-sm font-semibold text-white focus:outline-none focus:ring hover:bg-blue-700">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m0 0l6.75-6.75M12 19.5l-6.75-6.75" />
                </svg>
      
                Add Link
              </a>
            </div>
          </div>
        </div>
        <div class="overflow-y-hidden rounded-lg border">
          <div class="overflow-x-auto">
            <table class="w-full">
              <thead>
                <tr class="bg-blue-600 text-left text-xs font-semibold uppercase tracking-widest text-white">
                  <th class="px-5 py-3">Name</th>
                  <th class="px-5 py-3">URL</th>
                  <th class="px-5 py-3">Visits</th>
                  <th class="px-5 py-3">last Visit</th>
                  
                  <th class="px-5 py-3">Actions</th>
                </tr>
              </thead>
              <tbody class="text-gray-500">
                
                
                @foreach ($links as $link)
                <tr>

                  <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                    <p class="whitespace-no-wrap">{{$link->name}}</p>
                  </td>

                  <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                    <div class="flex items-center">
                     <!-- <div class="h-10 w-10 flex-shrink-0">
                        <img class="h-full w-full rounded-full" src="/images/-ytzjgg6lxK1ICPcNfXho.png" alt="" />
                      </div> -->

                      <div class="ml-3">
                        <a href="{{ $link->link}}" class="whitespace-no-wrap">{{$link->link}}</a>
                      </div>
                    </div>
                  </td>

                  <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                    <p class="whitespace-no-wrap">{{$link->visits_count}}</p>
                  </td>
                  <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                    
                    <p class="whitespace-no-wrap">{{$link->latest_visit ?  $latest_visit->created_at->format('Y-m-d') : 'N/A'}}</p>
                  </td>
      
                  <td class="border-b  flex justify-center space-x-4   border-gray-200 bg-white px-5 py-8 text-sm">
                    <a href="/dashboard/links/{{ $link->id}}" class="rounded-full bg-green-200 px-3 py-1 text-xs font-semibold text-green-900">Edit</a>
                   
                    <form class="h-100" action="{{route('links.delete',$link->id)}}"  method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"  class="rounded-full bg-red-200 px-3 py-1 text-xs font-semibold text-red-900">Delete</button>
                         
                    </form>

                  </td>
                </tr>
                @endforeach
                
               


                


              </tbody>
            </table>
          </div>
          <div class="flex flex-col items-center border-t bg-white px-5 py-5 sm:flex-row sm:justify-between">
            <span class="text-xs text-gray-600 sm:text-sm"> Showing 1 to 5 of 12 Entries </span>
            <div class="mt-2 inline-flex sm:mt-0">
              <button class="mr-2 h-12 w-12 rounded-full border text-sm font-semibold text-gray-600 transition duration-150 hover:bg-gray-100">Prev</button>
              <button class="h-12 w-12 rounded-full border text-sm font-semibold text-gray-600 transition duration-150 hover:bg-gray-100">Next</button>
            </div>
          </div>
        </div>
      </div>
      
</x-app-layout>