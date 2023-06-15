<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Brand extends Model
{
    use HasFactory;

    // function index để lấy dữ liệu từ database về
    public function index() {
        // query builder để select từ bảng brand
        $brands = DB::table('brand')
            ->get();
        // trả về dữ liệu lấy được
        return $brands;
    }
}
