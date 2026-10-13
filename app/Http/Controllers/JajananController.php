<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JajananController extends Controller
{
   public function home()
    {
        $jajanan = array_slice(Jajanan::semua(), 0, 3);

        return view('home', compact('jajanan'));
    }

    public function index()
    {
        $jajanan = Jajanan::semua();

        return view('jajanan.index', compact('jajanan'));
    }

    public function show($id)
    {
        $jajanan = Jajanan::cari($id);

        if (!$jajanan) {
            abort(404);
        }

        return view('jajanan.show', compact('jajanan'));
    }
    public function kontak()
{
    return view('kontak');
}

}
