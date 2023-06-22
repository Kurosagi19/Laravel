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

    // Fucntion lưu dữ lệu lên Database
    public function store() {
        // query builder để thêm dữ liệu
        DB::table('brand')->insert([
           'name' => $this->name,
            'country' => $this->country
        ]);
    }

    public function edit() {
        $brands = DB::table('brand')
            ->where('id', $this->id)
            ->get();
        return $brands;
    }

    public function updateBrand() {
        // Query builder để update
        DB::table('brand')
            ->where('id', $this->id)
            ->update([
                'name' => $this->name,
                'country' => $this->country
            ]);
    }
}
