<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('pages.register');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'level' => 'required'
        ]);
        if ($request->password) {
            $validateData['email_verified_at'] = Carbon::now();
            $validateData['password'] = Hash::make($request->password);
        }
        User::create($validateData);
        return redirect('/login')->with('success', 'Data berhasil di tambahkan');
    }
}
