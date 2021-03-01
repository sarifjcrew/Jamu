<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function profilDes()
    {
        return view('admin.profilDesa'); 
        
    }
    public function dataPro()
    {
        return view('admin.dataProduk');
    }
    
    public function tambPro()
    {
        return view('admin.tambahProduk');
    }

    public function ubProfil()
    {
        return view('admin.ubahProfil');
    }

    public function ubProd()
    {
        return view('admin.ubahProduk');
    }


}
