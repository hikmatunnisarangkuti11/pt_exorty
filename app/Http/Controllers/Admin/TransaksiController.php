<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DaftarMakananMinuman;

class TransaksiController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
        $daftars = DaftarMakananMinuman::all();
        return view('admin/transaksi/create', ['page_title' => 
        'Buat Transaksi','daftars'=> $daftars]);  
    }

    public function store(Request $request)
    {
        $transaksi = new Transaksi();
        $transaksi = Transaksi();
        $transaksi->fill([
            'user_id' => Auth::id(),
            'total_harga' => $request->get('harga')
        ]);
        $transaksi->save();
        foreach ($request->get('id_daftar' ) as $id_daftar) {
            $daftar = DaftarMakananMinuman::findOrFail($id_daftar);
            $transaksi_item = new TranskasiItem();
            $transaksi
        }
    }
}
