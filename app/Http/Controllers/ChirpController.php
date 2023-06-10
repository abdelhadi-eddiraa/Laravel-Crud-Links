<?php

namespace App\Http\Controllers;

use App\Models\Chirp;
use App\Http\Requests\StoreChirpRequest;
use App\Http\Requests\UpdateChirpRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class ChirpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$chirps=Chirp::all();
        return view('Chirp.Index',[
            'chirps'=> Chirp::with('user')->latest()->get()
        ]);

        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $chirp=Chirp::find(1);
        return dd($chirp->user);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreChirpRequest $request)
    {
       
        
       
        $request->user()->chirps()->create([
            'message'=> $request['message']
        ]);

        return to_route('chirps.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Chirp $chirp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chirp $chirp)
    {
       // $this->authorize('update', $chirp);
 
        return view('Chirp.Edit', [
            'chirp' => $chirp,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateChirpRequest $request, Chirp $chirp)
    {
        
       // $this->authorize('update', $chirp);

        $chirp->update($request->all());
        return to_route('chirps.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chirp $chirp)
    {
        $chirp->delete();
 
        return redirect(route('chirps.index'));
    }
}
