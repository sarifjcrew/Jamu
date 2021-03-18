<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function profilDes()
    {
        $village = VillageProfiles::latest()->paginate(5);

        return view('admin.profilDesa', compact('admin'))
            ->with('i',(request()->input('page', 1) -1) *5); 
        
    }

     public function tambprof(Request $request)
    {
        $request->validate([
            'deskripsi' => 'required',
            'gambar' => 'required'
        ]);
        VillageProfiles::create($request->all());
        return view('admin.tambahProfil');
    }

        public function ubProfil(VillageProfiles $village)
    {
        return view('admin.ubahProfil');
    }

    public function dataPro()
    {
        $product = Products::lates()->paginate(5);

        return view('admin.dataProduk', compact('admin'))
        ->with('i', (request()->input('page', 1) -1) *5);
    }
    
    public function tambPro(Request $request)
    {
        $request->validate([
            'nama produk' => 'required',
            'deskripsi produk' =>'required',
            'harga' => 'required',
            'gambar' =>'required',
            'stok' => 'required'
        ]);
        Products::create($request->all());
        return redirect()->route('admin.tambahProduk');
    }
   



    public function ubProd(Products $product)
    {
        return view('admin.ubahProduk');
    }


}
