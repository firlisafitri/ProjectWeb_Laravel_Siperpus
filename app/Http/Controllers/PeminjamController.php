<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PeminjamModel;
use Illuminate\Support\Facades\DB;

class PeminjamController extends Controller
{
    public function __construct()
    {
        $this->PeminjamModel = new PeminjamModel();
    }
    public function index()
    {
        $data = [
        'data_peminjam' => $this->PeminjamModel->alldata()
        ];
        return view('admin.peminjam', $data);
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
        // insert data ke table peminjam
	DB::table('tbl_peminjam')->insert([
        'kode_buku' => $request->kode_buku,
		'nm_peminjam' => $request->nm_peminjam,
		'nm_buku' => $request->nm_buku,
		'tgl_meminjam' => $request->tgl_meminjam
	]);
	// alihkan halaman ke halaman peminjam
	return redirect('/peminjam');
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
    // mengambil data peminjam berdasarkan id yang dipilih
	$peminjam = DB::table('tbl_peminjam')->where('id_peminjam',$id)->get();
	// passing data peminjam yang didapat ke view edit.blade.php
	return view('admin.peminjam_edit',['data_peminjam' => $peminjam]);
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
        // update Data Peminjam
	    DB::table('tbl_peminjam')->where('id_peminjam',$request->id)->update([
            'kode_buku' => $request->kode_buku,
		    'nm_peminjam' => $request->nm_peminjam,
		    'nm_buku' => $request->nm_buku,
		    'tgl_meminjam' => $request->tgl_meminjam
	]);
	// alihkan halaman ke halaman peminjam
	return redirect('/peminjam');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    // menghapus data peminjam berdasarkan id yang dipilih
	DB::table('tbl_peminjam')->where('id_peminjam',$id)->delete();
		
	// alihkan halaman ke halaman peminjam
	return redirect('/peminjam');
    }
}
