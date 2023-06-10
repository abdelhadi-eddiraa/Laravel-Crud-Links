<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produits=Produit::all();
        return view('produits.index',compact('produits'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {
        $categories=Categorie::all();
        return view('produits.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate([
            'nom' => 'required|string|max:225',
            'prix' => 'required|numeric|min:0',
            'description' => 'required',
            'categorie_id' => 'required|exists:categories,id',
        ]);
          $image=request()->file('image');
          $imagePath=$image->store('images','public');

        Produit::create([
            'nom' =>$request->input('nom'),
             'prix' => $request->input('prix'),
             'description' => $request->input('description'),
            'image' => $imagePath,
            'categorie_id' => $request->input('categorie_id') ,
        ]);


        return to_route('produit.index')->with(['succes','product create successufully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Produit $produit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produit $produit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produit $produit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produit $produit)
    {
        //
    }
}
