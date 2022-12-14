<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UpdatePasswordController extends Controller
{
    public function index()
    {
        return view('pages.admin.profil');
    }

    public function update (Request $request){

        $request->validate([
            'currentPassword' =>['required'],
            'password' => 'required',
            'passwordConfirmation' => 'required|same:password' 
        ]);
       
        if(Hash::check($request->currentPassword, auth()->user()->password)){
            auth()->user()->update(['password'=>Hash::make($request->password)]);
            return redirect('/passwordUpdate')->with('message', 'Data berhasil di ubah');
        }
        throw ValidationException::withMessages([
            'currentPassword' => 'Your current password dose not match'
        ]);
    }
}
