<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KaryawanModel extends Model
{
    public function alldata(){
        return DB::table('tbl_karyawan')->get();
    }
}
