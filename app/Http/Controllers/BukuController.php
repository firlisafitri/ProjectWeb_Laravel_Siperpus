<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BukuModel;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    public function __construct()
    {
        $this->BukuModel = new BukuModel();
        $this->middleware('auth');
    }
    public function index()
    {
        $data = [
        'data_buku' => $this->BukuModel->alldata()
        ];
        return view('admin.buku', $data);
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
        // insert data ke table buku
	DB::table('tbl_buku')->insert([
		'kd_buku' => $request->kd_buku,
		'judul_buku' => $request->judul_buku,
		'pengarang' => $request->pengarang,
        'thn_terbit' => $request->thn_terbit,
		'jumlah' => $request->jumlah,
		'gambar' => $request->gambar
	]);
	// alihkan halaman ke halaman buku
	return redirect('/buku');
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
    // mengambil data buku berdasarkan id yang dipilih
	$buku = DB::table('tbl_buku')->where('id_buku',$id)->get();
	// passing data buku yang didapat ke view edit.blade.php
	return view('admin.buku_edit',['data_buku' => $buku]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // update Data Buku
	    DB::table('tbl_buku')->where('id_buku',$request->id)->update([
            'kd_buku' => $request->kd_buku,
            'judul_buku' => $request->judul_buku,
            'pengarang' => $request->pengarang,
            'thn_terbit' => $request->thn_terbit,
            'jumlah' => $request->jumlah,
            'gambar' => $request->gambar
	]);
	// alihkan halaman ke halaman buku
	return redirect('/buku');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    // menghapus data buku berdasarkan id yang dipilih
	DB::table('tbl_buku')->where('id_buku',$id)->delete();
		
	// alihkan halaman ke halaman buku
	return redirect('/buku');
    }
}
