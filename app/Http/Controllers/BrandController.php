<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    private  $brand;
    private  $brands;

    public function index(){
        return view('admin.brand.index');
    }

    public function manage(){
        $this->brands = Brand::all();
        return view('admin.brand.manage',['brands' => $this->brands]);
    }
    public function create(Request $request){
        $request -> validate([
            'name' => 'required'
        ]);
        Brand::newBrand($request);
        return redirect()->back()->with('message', 'brand info create successfully');
    }
    public function edit($id){
        $this->brand = Brand::find($id);
        return view('admin.brand.edit',['brand' => $this->brand]);
    }

    public function update(Request $request, $id){
        Brand::UpdateBrand($request, $id);
        return redirect('/manage-brand')->with('message', 'brand info update successfully');
    }

    public function delete($id){
        Brand::deleteBrand($id);
        return redirect('/manage-brand')->with('message', 'brand delete successfully');
    }
}
