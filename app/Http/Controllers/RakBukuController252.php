<?php

namespace App\Http\Controllers;

use App\Models\RakBukuModel252;
use Illuminate\Http\Request;

class RakBukuController252 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('kamar0252', ['datakamarjoin'=> $kamarjoin]);

        $rakBuku = RakBukuModel252::select('*', 'rak_buku.id AS idRak', 'buku.id AS idBuku', 'jenis_buku.id AS idJenis')->join('buku', 'buku.id', 'rak_buku.id_buku')->join('jenis_buku', 'jenis_buku.id', 'rak_buku.id_jenis_buku')->get();
        return view('rak0252', ['rakbuku' => $rakBuku]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }
}
