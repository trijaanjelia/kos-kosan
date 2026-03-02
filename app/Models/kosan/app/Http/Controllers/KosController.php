<?php

namespace App\Http\Controllers;

use App\Model\Kos;
use Illuminate\Http\Request;

class KosController extends Controller
{
    public function index()
    {
        $dataKos = Kos::all();
        return view('kos.index', compact('dataKos'));
    }
    
}
