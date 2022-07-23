<?php

namespace App\Http\Controllers;

use App\Models\PaketWO;
use App\Models\WO;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WoController extends Controller
{

    public function index()
    {
        $data = WO::all();
        return view('pages.master.dm-wo', compact(['data']));
    }


    public function create()
    {

        return view('pages.master.create-wo');
    }


    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama_wo' => 'required',
            'deskripsi' => 'required',
            'image' => 'image|file|max:5120'
        ]);
        if ($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('wo');
        }
        WO::create($validateData);
        return redirect('/wo')->with('success', 'Data berhasil di tambahkan');
    }


    public function show($id)
    {
        $data = WO::find($id);
        return view('pages.master.detail-wo', compact(['data']));
    }


    public function edit($id)
    {
        $data = WO::find($id);
        return view('pages.master.edit-wo', compact(['data']));
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
        return redirect('/wo')->with('success', 'Data berhasil di tambahkan');
    }


    public function destroy($id)
    {
        $data = WO::find($id);
        if ($data->image) {
            Storage::delete($data->image);
        }
        $data->delete();
        return redirect('/wo')->with('success', 'Data berhasil di Hapus');
    }
}
