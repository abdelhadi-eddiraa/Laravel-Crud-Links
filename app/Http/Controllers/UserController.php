<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
   
    public function show(User $user)
    {
        return view('users.show',[
            'user'=> $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('users.edit',[
            'user'=>Auth::user()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
         $request->validate([
           'backgroumd_color'=>'required|size:7|starts_with:#',
           'text_color'=>'required|size:7|starts_with:#',


         ]);

        Auth::user()->update($request->only(['backgroumd_color','text_color']));
        return redirect()->back()->with(['message'=>'change saved succusfylly']);
    }

 
}
