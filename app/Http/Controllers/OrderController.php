<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index()
    {
        $order = Pesanan::orderBy('created_at', 'desc')->get();
        return view('pages.admin.pesanan', compact(['order']));
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
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        $data = Pesanan::find($id);
        $data->delete();
        return redirect('/pesanan')->with('success', 'Data berhasil di Hapus');
    }
}
