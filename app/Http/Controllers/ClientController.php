<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use App\Models\PaketWO;
use App\Models\WO;
use Illuminate\Http\Request;
use Mockery\Generator\StringManipulation\Pass\Pass;

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
    public function store()
    {
        $paket = PaketWO::all();
        $galery = Galery::inRandomOrder()->limit(4)->get();
        return view('pages.client.all-paket', compact(['paket', 'galery']));
    }
    public function detailwo($id)
    {
        $wo = WO::find($id);
        $galery = Galery::where('wo_id', $id)->get();
        $paket = PaketWO::join('galeries', 'galeries.id', 'paketwos.id')->get();
        return view('pages.client.detail-wo', compact(['wo', 'galery', 'paket']));
    }

    public function show($id)
    {
        $galery = Galery::inRandomOrder()->limit(3)->get();
        $allpaket = PaketWO::join('galeries', 'paketwos.id', 'galeries.id')->get();
        $paket = PaketWO::find($id);
        return view('pages.client.paket-akad', compact(['allpaket', 'paket', 'galery']));
    }

    public function create_order(Request $request)
    {
        $this->validate($request, [
            'tanggal_acara' => 'required'
        ]);
        $paket = PaketWO::find($request->paket_id);
        $tanggal = $request->tanggal_acara;
        return view('pages.client.detail-order', compact(['tanggal', 'paket']));
    }
    public function save_order(Request $request)
    {
        $validateData = $request->validate([
            'level' => 'required'
        ]);
        return redirect('/myorder')->with('success', 'Data berhasil di tambahkan');
    }
}
