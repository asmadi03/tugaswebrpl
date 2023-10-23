<?php

namespace App\Http\Controllers;

use App\Models\Chashier;
use Illuminate\Http\Request;

class ChashierController extends Controller
{
    public function index()
    {
        $data = Chashier::all();

        // dd($data);

        return view('chashier.index', compact('data'));
    }

    public function tambah()
    {
        return view('chashier.create');
    }

    public function simpan(Request $request)
    {
        $request->validate([
            'name' => 'required|min:5',
            'phone' => 'required',
            'age' => 'required|min:2'
        ]);

        Chashier::create($request->all());
        return to_route('chashier-index');
    }
}
