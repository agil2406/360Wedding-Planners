<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use App\Models\PaketWO;
use App\Models\WO;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    public function index()
    {
        $wo = WO::all();
        $paket = PaketWO::join('galeries', 'galeries.id', 'paketwos.id')->get();
        $galery = Galery::inRandomOrder()->limit(4)->get();
        return view('pages.dashboard', compact(['wo', 'paket', 'galery']));
    }
    public function vendor()
    {
        $wo = WO::all();
        $galery = Galery::inRandomOrder()->limit(4)->get();
        return view('pages.client.wedding-org', compact(['wo', 'galery']));
    }
    public function detailwo($id)
    {
        $wo = WO::find($id);
        $galery = Galery::where('wo_id', $id)->get();
        $paket = PaketWO::join('galeries', 'galeries.id', 'paketwos.id')->get();
        return view('pages.client.detail-wo', compact(['wo', 'galery', 'paket']));
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
        $wo = WO::all();
        $paket = PaketWO::find($id);
        return view('pages.client.paket-akad', compact(['wo', 'paket']));
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
