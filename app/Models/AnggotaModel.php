<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AnggotaModel extends Model
{
    public function alldata(){
        return DB::table('tbl_anggota')->get();
    }
}
