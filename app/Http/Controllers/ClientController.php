<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use App\Models\Order;
use App\Models\PaketWO;
use App\Models\Pesanan;
use App\Models\Rating;
use App\Models\WO;
use Carbon\Carbon;
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
        $jumlah = Rating::where('wo_id', $id)->count();
        $total = Rating::where('wo_id', $id)->sum('rating');

        return view('pages.client.detail-wo', compact(['wo', 'galery', 'paket', 'jumlah', 'total']));
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
        return view('pages.client.create-order', compact(['tanggal', 'paket']));
    }
    public function save_order(Request $request)
    {
        $validateData = $request->validate([
            'tgl_acara' => 'required',
            'paket_id' => 'required',
            'user_id' => 'required',
            'status' => 'required',
            'total' => 'required'
        ]);
        Pesanan::create($validateData);
        return redirect('/order');
    }
    public function order()
    {
        $order = Pesanan::where('user_id', auth()->user()->id)->get();
        return view('pages.client.order', compact(['order']));
    }
    public function detail_order($id)
    {
        $order = Pesanan::find($id);
        return view('pages.client.detail-order', compact(['order']));
    }
    public function upgrade($id)
    {
        $order = Pesanan::find($id);
        return view('pages.client.upgrade', compact(['order']));
    }
    public function save_upgrade(Request $request, $id)
    {
        $validateData = $request->validate([
            'upgrade' => 'required'
        ]);
        $pesanan = Pesanan::find($id);
        $pesanan->update($validateData);
        return redirect('/order');
    }
    public function invoice($id)
    {
        $order = Pesanan::find($id);
        $tanggalnow = Carbon::now('GMT+8');
        return view('pages.client.new-invoice', compact(['order', 'tanggalnow']));
    }
    public function rating($id)
    {
        $order = Pesanan::find($id);
        return view('pages.client.rating', compact(['order']));
    }
    public function save_rating(Request $request)
    {
        $validateData = $request->validate([
            'wo_id' => 'required',
            'user_id' => 'required',
            'rating' => 'required'
        ]);
        Rating::create($validateData);
        return redirect('/order');
    }
}
