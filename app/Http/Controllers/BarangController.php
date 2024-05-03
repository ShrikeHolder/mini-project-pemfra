<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
// use Illuminate\Support\Facades\DB;
use App\Models\Barang;
use App\Models\Satuan;

class BarangController extends Controller
{
    public function index()
    {
        $pageTitle = 'Barang List';
        // ELOQUENT
        $A = Barang::all();
        return view('barang.index', [
            'pageTitle' => $pageTitle,
            'A' => $A
        ]);
    }

    public function create()
    {
        $pageTitle = 'Create Barang';
        // ELOQUENT
        $B = Satuan::all();
        return view('barang.create', compact('pageTitle', 'B'));
    }

    public function store(Request $request)
    {
        $messages = [
            'required' => ':Attribute harus diisi.'
        ];
        $validator = Validator::make($request->all(), [
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'harga_barang' => 'required',
            'deskripsi_barang' => 'required',
            'kode_satuan' => 'required',
        ], $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        // ELOQUENT
        $barang = new Barang;
        $barang->kode_barang = $request->kode_barang;
        $barang->nama_barang = $request->nama_barang;
        $barang->harga_barang = $request->harga_barang;
        $barang->deskripsi_barang = $request->deskripsi_barang;
        $barang->kode_satuan = $request->kode_satuan;
        $barang->save();
        return redirect()->route('A.index');
    }

    public function show(string $id)
    {
        $pageTitle = 'Barang Detail';
        // ELOQUENT
        $barang = Barang::find($id);    
        return view('barang.show', compact('pageTitle', 'barang'));
    }

    public function edit(string $id)
    {
        $pageTitle = 'Edit Barang';
        // ELOQUENT
        $B = Satuan::all();
        $barang = Barang::find($id);
        return view('barang.edit', compact(
            'pageTitle',
            'satuan',
            'barang'
        ));
    }

    public function update(Request $request, string $id)
    {
        $messages = [
            'required' => ':Attribute harus diisi.'
        ];
        $validator = Validator::make($request->all(), [
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'harga_barang' => 'required',
            'deskripsi_barang' => 'required',
            'kode_satuan' => 'required',
        ], $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        // ELOQUENT
        $barang = Barang::find($id);
        $barang->kode_barang = $request->kode_barang;
        $barang->nama_barang = $request->nama_barang;
        $barang->harga_barang = $request->harga_barang;
        $barang->deskripsi_barang = $request->deskripsi_barang;
        $barang->kode_satuan = $request->kode_satuan;
        $barang->save();
        return redirect()->route('A.index');
    }

    public function destroy(string $id)
    {
        // ELOQUENT
        Barang::find($id)->delete();
        return redirect()->route('A.index');
    }
}
