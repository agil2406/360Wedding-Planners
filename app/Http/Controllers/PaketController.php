<?php

namespace App\Http\Controllers;

use App\Models\PaketWO;
use App\Models\WO;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    public function index()
    {
        $data = PaketWO::where('wo_id', auth()->user()->wo_id)->get();
        return view('pages.admin.paket-wo', compact(['data']));
    }


    public function create()
    {
        $wo = WO::where('id', auth()->user()->wo_id)->get();
        return view('pages.admin.create-paket', compact(['wo']));
    }


    public function store(Request $request)
    {
        $validateData = $request->validate([
            'wo_id' => 'required',
            'nama_paket' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required'
        ]);
        PaketWO::create([
            'wo_id' => $request->wo_id,
            'nama_paket' => $request->nama_paket,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'mua' => $request->mua,
            'mc' => $request->mc,
            'dekorasi' => $request->dekorasi,
            'entertain' => $request->entertain,
            'catering' => $request->catering,
            'lokasi' => $request->lokasi,
            'kapasitas' => $request->kapasitas
        ]);
        return redirect('/paketwo')->with('success', 'Data berhasil di tambahkan');
    }


    public function show($id)
    {
        $data = PaketWO::find($id);
        return view('pages.admin.detail-paket', compact(['data']));
    }


    public function edit($id)
    {
        $data = PaketWO::find($id);
        return view('pages.admin.edit-paket', compact(['data']));
    }


    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'wo_id' => 'required',
            'nama_paket' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required'
        ]);
        $paket = PaketWO::find($id);
        $paket->update([
            'wo_id' => $request->wo_id,
            'nama_paket' => $request->nama_paket,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'mua' => $request->mua,
            'mc' => $request->mc,
            'dekorasi' => $request->dekorasi,
            'entertain' => $request->entertain,
            'catering' => $request->catering,
            'lokasi' => $request->lokasi,
            'kapasitas' => $request->kapasitas
        ]);
        return redirect('/paketwo')->with('success', 'Data berhasil di ubah');
    }


    public function destroy($id)
    {
        $data = PaketWO::find($id);
        $data->delete();
        return redirect('/paketwo')->with('success', 'Data berhasil di Hapus');
    }
}
