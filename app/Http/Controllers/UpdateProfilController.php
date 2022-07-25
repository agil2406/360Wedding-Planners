<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpdateProfilController extends Controller
{
    public function index()
    {
        return view('pages.admin.profil');
    }

    public function update (Request $request){
        
        $request ->validate([
            'name' => 'required',
            'email' => 'required'
        ]);
        
        auth()->user()->update([
            'name' => $request ->name,
            'email' => $request ->email,
            'level' => $request ->level,
        ]);
        return redirect('/profileUpdate')->with('message', 'Data berhasil di ubah');
    }
}
