<?php

namespace App\Http\Controllers;

use App\Models\WO;
use Illuminate\Http\Request;

class ProfilController extends Controller
{

    public function index($id)
    {
        $data = WO::find($id);
        return view('pages.admin.profil-wo', compact(['data']));
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $data = WO::find($id);
        return view('pages.admin.edit-profil-wo', compact(['data']));
    }


    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'nama_wo' => 'required',
            'deskripsi' => 'required',
            'image' => 'image|file|max:5120'
        ]);
        if ($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('wo');
        }
        $wo = WO::find($id);
        $wo->update($validateData);
        return redirect('/profil-wo' . '/' . auth()->user()->wo_id)->with('success', 'Data berhasil di tambahkan');
    }

    public function destroy($id)
    {
        //
    }
}
