<?php

namespace App\Http\Controllers;

use App\Models\PaketWO;
use App\Models\WO;
use Illuminate\Http\Request;

class WoController extends Controller
{

    public function index()
    {
        $data = WO::where('id', auth()->user()->wo_id)->get();
        return view('pages.admin.profil-wo', compact(['data']));
    }


    public function create()
    {
    }


    public function store(Request $request)
    {
    }


    public function show($id)
    {
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
        //
    }
}
