@extends('produits\layouts')


@section('content')

<div class="flex justify-center">
        <a class="bg-blue-600 rounded-md"  href="{{route('produit.create')}}">Create</a>

</div>
<div>
     <table  class="border w-full">
        <tr>
            <th>id</th>
            <th>nom</th>
            <th>description</th>
            <th>prix</th>
            <th class="">image</th>

            <th>action</th>
        </tr>
        @foreach ($produits as $produit)
              <tr>
                <th>{{$produit->id}}</th>
                <th>{{$produit->nom}}</th>
                <th>{{$produit->description}}</th>
                <th>{{$produit->prix}}</th>
                <th>
                    <img  src="{{$produit->image}}" alt="product image">
                </th>
                <th>
                    <a class="bg-blue-600 rounded-md"  href="{{route('produit.edit',$produit->id)}}">edit</a>

                    <form  action="{{route('produit.destroy',$produit->id)}}"  method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-orange-800 rounded-md"  href="">delete</button>
                    </form>
                </th>
             </tr>
        @endforeach
      
     </table>
</div>
@endsection