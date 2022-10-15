<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use Illuminate\Http\Request;

class WisatasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pages.admin.index', [
            'wisatas' => Wisata::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validateData = $request->validate([
            'namaWisata' => 'required',
            'hargaWisata' => 'required',
            'gambarWisata' => 'image|file|required',
            'deskripsiWisata' => 'required'
        ]);

        if ($request->file('gambarWisata')) {
            $validateData['gambarWisata'] = $request->file('gambarWisata')->store('product-image');
        }

        Wisata::create($validateData);
        return redirect('/admin')->with('success', 'Berhasil Membuat Produk');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $wisata = Wisata::find($id);
        // return $wisata;
        return view('pages.admin.edit', [
            'wisata' => $wisata
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validateData = $request->validate([
            'namaWisata' => 'required',
            'hargaWisata' => 'required',
            'deskripsiWisata' => 'required'
        ]);

        Wisata::where('id', $id)
            ->update($validateData);

        return redirect('/admin')->with('success', 'Berhasil Mengupdate Wisata');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $deleteProduct = Wisata::find($id);
        $deleteProduct->delete();
        return redirect('/admin')->with('success', 'Berhasil Menghapus Produk');
    }
}
