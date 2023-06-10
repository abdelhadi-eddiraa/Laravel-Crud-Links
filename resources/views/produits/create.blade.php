@extends('produits\layouts')



@section('content')

<div class="mx-auto max-w-screen-lg px-4 py-8 sm:px-8  ">
   
     

    <form class=""  action="{{route('produit.store')}}" method="POST"  enctype="multipart/form-data">
           

        <div class="p-56  ">

            <div class="flex max-h-screen flex-col space-y-5 rounded-lg border py-10 px-5 shadow-xl mx-auto">
              
                <div class="mx-auto mb-2 space-y-3">
                   <h1 class=" text-8xl font-bold text-gray-700">Create Produit</h1>
                     
                 </div>
            
              <div class="py-3">
                <div class="relative mt-2 w-full">
                    <label for="nom" class="block mb-2 text-sm font-medium text-green-700 dark:text-green-500">produit name</label>

                  <input type="text" name="nom" value="{{old('nom')}}" class="border-1 peer block w-full appearance-none rounded-lg border border-gray-300 bg-transparent px-2.5 pb-2.5 pt-4 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0" placeholder=" " />
                </div>
                @if($errors->first('nom'))
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span>{{$errors->first('nom')}}</p>

                @endif
              </div>
            
              <div  class="py-3">
                <div class="relative mt-2 w-full">
                    <label for="prix" class="block mb-2 text-sm font-medium text-green-700 dark:text-green-500">Produit Prix</label>

                  <input type="text" name="prix" value="{{old('prix')}}" class="border-1 peer block w-full appearance-none rounded-lg border border-gray-300 bg-transparent px-2.5 pb-2.5 pt-4 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0" placeholder=" " />
                </div>
                @if($errors->first('prix'))
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span>{{$errors->first('prix')}}</p>

                @endif
              </div>




              <div  class="py-3">
                <div class="relative mt-2 w-full">
                    <label for="description" class="block mb-2 text-sm font-medium text-green-700 dark:text-green-500">Produit description</label>

                  <input type="text" name="description" value="{{old('description')}}" class="border-1 peer block w-full appearance-none rounded-lg border border-gray-300 bg-transparent px-2.5 pb-2.5 pt-4 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0" placeholder=" " />
                </div>
                @if($errors->first('description'))
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span>{{$errors->first('description')}}</p>

                @endif
              </div>

              <div  class="py-3">
                <div class="relative mt-2 w-full">
                    <label for="image" class="block mb-2 text-sm font-medium text-green-700 dark:text-green-500">Produit image</label>

                  <input type="file" name="image" value="{{old('image')}}" class="border-1 peer block w-full appearance-none rounded-lg border border-gray-300 bg-transparent px-2.5 pb-2.5 pt-4 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0" placeholder=" " />
                </div>
                @if($errors->first('image'))
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span>{{$errors->first('image')}}</p>

                @endif
              </div>



              
              <div  class="py-3">
                <div class="relative mt-2 w-full">
                    <select name="categorie_id">
                        @foreach ($categories as $categorie)
                            <option value="{{$categorie->id}}">{{$categorie->id}}</option>
                        @endforeach
                        
                      
                      </select>
                      
                </div>
                @if($errors->first('categorie_id'))
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span>{{$errors->first('categorie_id')}}</p>

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


@endsection