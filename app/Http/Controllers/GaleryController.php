<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use Illuminate\Http\Request;

class GaleryController extends Controller
{

    public function index()
    {
        $data = Galery::all();
        return view('pages.admin.galery-wo', compact(['data']));
    }


    public function create()
    {

        return view('pages.admin.create-galery');
    }


    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama_foto' => 'required',
            'image' => 'image|file|max:5120',
            'deskripsi' => 'required'
        ]);

        if ($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('galery');
        }

        Galery::create($validateData);
        return redirect('/galery')->with('success', 'Data berhasil di tambahkan');
    }


    public function show($id)
    {
        $data = Galery::find($id);
        return view('pages.admin.detail-galery', compact(['data']));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        $data = Galery::find($id);
        $data->delete();
        return redirect('/galery')->with('success', 'Data berhasil di Hapus');
    }
}
