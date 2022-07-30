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
        $paket = PaketWO::join('galeries', 'paketwos.wo_id', '=', 'galeries.id')->get();
        $galery = Galery::inRandomOrder()->limit(4)->get();
        return view('pages.dashboard', compact(['wo', 'paket', 'galery']));
    }
    public function vendor()
    {
        $wo = WO::all();
        $galery = Galery::inRandomOrder()->limit(4)->get();
        return view('pages.client.wedding-org', compact(['wo', 'galery']));
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }


    public function show()
    {
        $wo = WO::all();
        $paket = PaketWO::find(1);
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
