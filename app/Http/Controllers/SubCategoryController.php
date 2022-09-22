<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    private $categories;

    public function index(){
        $this->categories = Category::all();
        return view('admin.subcategory.index', ['categories' => $this->categories]);
    }
    public function manage(){
        $this->categories = SubCategory::all();
        return view('admin.subcategory.manage', ['subcategories' => $this->categories]);
    }
    public function create(Request $request){
        $request -> validate([
            'name' => 'required|unique:sub_categories'
        ]);
        SubCategory::newsubCategory($request);
        return redirect()->back()->with('message', 'SubCategory info create successfully');
    }
    public function edit($id){
        $this->categories = SubCategory::find($id);
        return view('admin.subcategory.edit',['subcategory' => $this->categories]);
    }

    public function update(Request $request, $id){
        SubCategory::UpdateSubCategory($request, $id);
        return redirect('/manage-subcategory')->with('message', 'subcategory info update successfully');
    }

    public function delete($id){
        SubCategory::deleteSubCategory($id);
        return redirect('/manage-subcategory')->with('message', 'subcategory delete successfully');
    }
}
