<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use Illuminate\Http\Request;

class WisataController extends Controller
{
    //
    public function getWisata()
    {
        return view('pages.guest.index', [
            "wisatas" => Wisata::all()
        ]);
    }
}
