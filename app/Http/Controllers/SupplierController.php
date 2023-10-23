<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $data = Supplier::all();

        // dd($data);

        return view('supplier.index', compact('data'));
    }

    public function tambah()
    {
        return view('supplier.create');
    }

    public function simpan(Request $request)
    {
        $request->validate([
            'nama_pt' => 'required',
            'nama_ketua' => 'required',
            'nomor_kontak' => 'required',
            'alamat' => 'required'
        ]);

        Supplier::create($request->all());
        return to_route('supplier-index');
    }
}
