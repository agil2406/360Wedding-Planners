<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\WO;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    public function index()
    {
        $data = Admin::where('level', 'Admin')->get();
        return view('pages.master.dm-admin', compact(['data']));
    }


    public function create()
    {
        $data = WO::all();
        return view('pages.master.create-admin', compact(['data']));
    }


    public function store(Request $request)
    {
        $validateData = $request->validate([
            'wo_id' => 'required',
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'level' => 'required'
        ]);
        if ($request->password) {
            $validateData['email_verified_at'] = Carbon::now();
            $validateData['password'] = Hash::make($request->password);
        }
        Admin::create($validateData);
        return redirect('/admin')->with('success', 'Data berhasil di tambahkan');
    }


    public function show($id)
    {
        $data = Admin::find($id);
        return view('pages.master.detail-admin', compact(['data']));
    }


    public function edit($id)
    {
        $data = Admin::find($id);
        return view('pages.master.edit-admin', compact(['data']));
    }


    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'wo_id' => 'required',
            'name' => 'required',
            'email' => 'required',
            'level' => 'required'
        ]);
        $admin = Admin::find($id);
        $admin->update($validateData);
        return redirect('/admin')->with('success', 'Data berhasil di tambahkan');
    }

    public function destroy($id)
    {
        $data = Admin::find($id);
        $data->delete();
        return redirect('/admin')->with('success', 'Data berhasil di Hapus');
    }
}
