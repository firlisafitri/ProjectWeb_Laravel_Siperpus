<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengembalianModel;
use Illuminate\Support\Facades\DB;

class PengembalianController extends Controller
{
    public function __construct()
    {
        $this->PengembalianModel = new PengembalianModel();
    }
    public function index()
    {
        $data = [
        'data_kembali' => $this->PengembalianModel->alldata()
        ];
        return view('admin.pengembalian', $data);
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
        // insert data ke table pengembalian
	DB::table('tbl_pengembalian')->insert([
        'kd_buku' => $request->kd_buku,
		'nm_peminjam' => $request->nm_peminjam,
		'nm_buku' => $request->nm_buku,
		'tgl_pengembalian' => $request->tgl_pengembalian,
        'denda' => $request->denda
	]);
	// alihkan halaman ke halaman pengembalian
	return redirect('/pengembalian');
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
    // mengambil data pengembalian berdasarkan id yang dipilih
	$pengembalian = DB::table('tbl_pengembalian')->where('id_pengembalian',$id)->get();
	// passing data pengembalian yang didapat ke view edit.blade.php
	return view('admin.pengembalian_edit',['data_kembali' => $pengembalian]);
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
        // update Data Pengembalian
	    DB::table('tbl_pengembalian')->where('id_pengembalian',$request->id)->update([
            'kd_buku' => $request->kd_buku,
		    'nm_peminjam' => $request->nm_peminjam,
		    'nm_buku' => $request->nm_buku,
		    'tgl_pengembalian' => $request->tgl_pengembalian,
            'denda' => $request->denda
	]);
	// alihkan halaman ke halaman pengembalian
	return redirect('/pengembalian');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    // menghapus data pengembalian berdasarkan id yang dipilih
	DB::table('tbl_pengembalian')->where('id_pengembalian',$id)->delete();
		
	// alihkan halaman ke halaman pengembalian
	return redirect('/pengembalian');
    }
}
