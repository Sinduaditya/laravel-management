<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = Item::all();
        return view('main.barang.barang', \compact('items','items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return \view('main.barang.addbarang');
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
        $request->validate([
            'txtNamaBarang'=> 'required',
            'txtJumlahBarang' => 'required',
            'txtPenggirim' => 'required',
            'txtTanggal' => 'required',
            'txtPenerima' => 'required'
        ]);

        $item = new Item([
        'nama_barang'=>$request->get('txtNamaBarang'),
        'jml_barang'=>$request->get('txtJumlahBarang'),
        'penggirim'=>$request->get('txtPenggirim'),
        'tanggal'=>$request->get('txtTanggal'),
        'penerima'=>$request->get('txtPenerima')
        ]);

        $item->save();
        return \redirect('item')->with('succes', 'Item has bee added');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
        return view('main.gudang', \compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        //
        return \view('main.barang.editbarang', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        //
        $request->validate([
            'txtNamaBarang'=> 'required',
            'txtJumlahBarang' => 'required',
            'txtPenggirim' => 'required',
            'txtTanggal' => 'required',
            'txtPenerima' => 'required'
        ]);

        $item = Item::find($item->id);
        $item->nama_barang = $request->get('txtNamaBarang');
        $item->jml_barang = $request->get('txtJumlahBarang');
        $item->penggirim = $request->get('txtPenggirim');
        $item->tanggal = $request->get('txtTanggal');
        $item->penerima = $request->get('txtPenerima');

        $item->update();
        return \redirect('/item')->with('succes', 'Item has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        //
        $item->delete();
        return \redirect('/item')->with('succes', 'Item has been deleted');
    }
}
