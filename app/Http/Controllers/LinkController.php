<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $links=Auth::user()->links()
        ->withCount('visits')
        ->with('latest_visit')
        ->get();

       // return $links;

       // return response()->json($links);
        
       return view('links.index',[
           'links'=> $links,
            
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return  view('links.create');
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      /* $link=Link::create([
           'user_id'=>Auth::id(),
           'name'=>$request->input('name'),
           'url'=>$request->input('url')
       ]);*/

      $request->validate([
          'name'=>  'required|max:255',
          'link'=>  'url|required|max:255',
      ]);

      $link=Auth::user()->links()->create($request->only(['name','link']));

       if ($link) {
         return to_route('links.index');
       }

       return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Link $link)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Link $link)
    {

       if ($link->user_id != Auth::id()) {
          return abort(404);
       }

        return view('links.edit',[
            'link' => $link
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Link $link)
    { 
        
        if ($link->user_id != Auth::id()) {
            return abort(404);
         }


        $request->validate([
            'name'=>  'required|max:255',
            'link'=>  'url|required|max:255',
        ]);

       
  
  
        $link->update($request->only(['name','link']));
  
         
  
         return to_route('links.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Link $link)
    {

        if ($link->user_id != Auth::id()) {
            return abort(404);
         }

        $link->delete();
        return to_route('links.index');

    }
}
