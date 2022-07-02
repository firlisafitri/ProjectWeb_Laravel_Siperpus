<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KaryawanModel;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    public function __construct()
    {
        $this->KaryawanModel = new KaryawanModel();
    }
    public function index()
    {
        $data = [
        'data_krywn' => $this->KaryawanModel->alldata()
        ];
        return view('admin.karyawan', $data);
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
        // insert data ke table karyawan
	DB::table('tbl_karyawan')->insert([
		'nm_karyawan' => $request->nm_karyawan,
		'nohp' => $request->nohp,
		'alamat' => $request->alamat,
		'gambar' => $request->gambar
	]);
	// alihkan halaman ke halaman karyawan
	return redirect('/karyawan');
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
    // mengambil data karyawan berdasarkan id yang dipilih
	$karyawan = DB::table('tbl_karyawan')->where('id_karyawan',$id)->get();
	// passing data karyawan yang didapat ke view edit.blade.php
	return view('admin.karyawan_edit',['data_krywn' => $karyawan]);
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
        // update Data Karyawan
	    DB::table('tbl_karyawan')->where('id_karyawan',$request->id)->update([
            'nm_karyawan' => $request->nm_karyawan,
            'nohp' => $request->nohp,
            'alamat' => $request->alamat,
            'gambar' => $request->gambar
	]);
	// alihkan halaman ke halaman karyawan
	return redirect('/karyawan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    // menghapus data karyawan berdasarkan id yang dipilih
	DB::table('tbl_karyawan')->where('id_karyawan',$id)->delete();
		
	// alihkan halaman ke halaman karyawan
	return redirect('/karyawan');
    }
}
