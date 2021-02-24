<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tugascontroller extends Controller
{
   public function index()
    {
        $judul = "Nama Buah Dan Sayur ";
        $buah1 = "Mangga";
        $buah2 = "Alpukat";
        $sayur1 = "Wortel";
        $sayur2 = "Cabai";

        return view('fruit', compact('judul', 'buah1','buah2', 'sayur1', 'sayur2'));
    }
}
