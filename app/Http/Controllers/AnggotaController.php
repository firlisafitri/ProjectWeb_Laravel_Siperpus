<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnggotaModel;
use Illuminate\Support\Facades\DB;

class AnggotaController extends Controller
{
    public function __construct()
    {
        $this->AnggotaModel = new AnggotaModel();
    }
    public function index()
    {
        $data = [
        'data_agt' => $this->AnggotaModel->alldata()
        ];
        return view('admin.anggota', $data);
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
        // insert data ke table anggota
	DB::table('tbl_anggota')->insert([
		'nama' => $request->nama,
		'nohp' => $request->nohp,
		'alamat' => $request->alamat,
		'gambar' => $request->gambar
	]);
	// alihkan halaman ke halaman anggota
	return redirect('/anggota');
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
    // mengambil data anggota berdasarkan id yang dipilih
	$anggota = DB::table('tbl_anggota')->where('id_anggota',$id)->get();
	// passing data anggota yang didapat ke view edit.blade.php
	return view('admin.anggota_edit',['data_agt' => $anggota]);
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
        // update Data Anggota
	    DB::table('tbl_anggota')->where('id_anggota',$request->id)->update([
            'nama' => $request->nama,
            'nohp' => $request->nohp,
            'alamat' => $request->alamat,
            'gambar' => $request->gambar
	]);
	// alihkan halaman ke halaman anggota
	return redirect('/anggota');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    // menghapus data anggota berdasarkan id yang dipilih
	DB::table('tbl_anggota')->where('id_anggota',$id)->delete();
		
	// alihkan halaman ke halaman anggota
	return redirect('/anggota');
    }
}
