<x-app-layout>


    @if (session('message'))
    <div  class=" rounded-lg bg-lime-400 mt-2 p-3 font-bold text-white">{{session('message')}}</div>
@endif

    <div class="mx-auto max-w-screen-lg px-4 py-8 sm:px-8  ">
       
         

        <form class=""  action="{{route('setting.update')}}" method="POST">
               
              @method('PATCH')
              @csrf
            <div class=" ">
  
                <div class="flex max-h-screen flex-col space-y-5 rounded-lg border py-10 px-5 shadow-xl mx-auto">
                  
                    <div class="mx-auto mb-2 space-y-3">
                       <h1 class=" text-8xl font-bold text-gray-700">Edit User</h1>
                         
                     </div>
                
                  <div class="py-3">
                    <div class="relative mt-2 w-full">
                        <label for="backgroumd_color" class="block mb-2 text-sm font-medium text-green-700 dark:text-green-500">backgroumd_color</label>

                      <input type="text" name="backgroumd_color" value="{{$user->backgroumd_color}}" class="border-1 peer block w-full appearance-none rounded-lg border border-gray-300 bg-transparent px-2.5 pb-2.5 pt-4 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0" placeholder=" " />
                    </div>
                    @if($errors->first('backgroumd_color'))
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span>{{$errors->first('backgroumd_color')}}</p>

                    @endif
                  </div>
                
                  <div  class="py-3">
                    <div class="relative mt-2 w-full">
                        <label for="text_color" class="block mb-2 text-sm font-medium text-green-700 dark:text-green-500">text_color</label>

                      <input type="text" name="text_color" value="{{$user->text_color}}" class="border-1 peer block w-full appearance-none rounded-lg border border-gray-300 bg-transparent px-2.5 pb-2.5 pt-4 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0" placeholder=" " />
                    </div>
                    @if($errors->first('text_color'))
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span>{{$errors->first('text_color')}}</p>

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