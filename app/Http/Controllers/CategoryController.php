<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private  $category;

    public function index(){
        return view('admin.category.index');
    }
    public function manage(){
        $this->category = Category::all();
        return view('admin.category.manage',['categories' => $this->category]);
    }
    public function create(Request $request){
        $request -> validate([
            'name' => 'required'
        ]);
        Category::newCategory($request);
        return redirect()->back()->with('message', 'Category info create successfully');
    }
    public function edit($id){
        $this->category = Category::find($id);
        return view('admin.category.edit',['category' => $this->category]);
    }

    public function update(Request $request, $id){
        Category::UpdateCategory($request, $id);
        return redirect('/manage-category')->with('message', 'Category info update successfully');
    }

    public function delete($id){
        Category::deleteCategory($id);
        return redirect('/manage-category')->with('message', 'Category delete successfully');
    }
}
