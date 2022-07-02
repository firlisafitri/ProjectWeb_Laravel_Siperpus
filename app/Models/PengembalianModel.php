<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PengembalianModel extends Model
{
    public function alldata(){
        return DB::table('tbl_pengembalian')->get();
    }
}
