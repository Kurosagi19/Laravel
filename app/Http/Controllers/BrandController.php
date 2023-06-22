<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Http\Requests\StoreBrandRequest;
use App\Http\Requests\UpdateBrandRequest;
use http\Env\Request;
use Illuminate\Support\Facades\Redirect;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // tạo đối tượng của Model
        $obj = new Brand();
        // lấy dữ liệu từ Model bằng cách gọi function ở bên Model
        $brands = $obj->index();
        // hiển thị view và truyền dữ liệu sang
        return view('brand.index', ['brand' => $brands]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('brand.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBrandRequest $request)
    {
        // Tạo đối tượng của Model
        $obj = new Brand();
        // Lấy dữ liệu ở form và gán vào thuộc tính của đối tượng
        $obj->name = $request->name;
        $obj->country = $request->country;
        // Gọi function ở Model để lấy dữ liệu
        $obj->store();
        // Quay lại view danh sách
        return Redirect::route('brand.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand, Request $request)
    {
        // Tạo đối tượng của Model
        $obj = new Brand();
        // Lấy id của Brand cần sửa và gán vào thuộc tính của đối tượng
        $obj->id = $request->id;

        return view('brand.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBrandRequest $request, Brand $brand)
    {
        $obj = new Brand();
        // Lấy dữ liệu
        $obj->id = $request->id;
        $obj->name = $request->name;
        $obj->country = $request->country;
        // Gọi function update trong Model

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        //
    }
}
