<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;

class ApiController extends Controller
{
    private $products;
    private $categories;

    public function getAllTrendingProduct(){
        $this->products = Product::Where('status', 1)->orderBy('id', 'desc')->take('8')->get(['id','name','image','selling_price']);
        foreach($this->products as $product){
            $product->image = asset($product->image);
        }
        return response()->json($this->products);
    }

    public function getAllCategoryProduct(){
        $this->categories = Category::all();
        foreach($this->categories as $category){
            $category->subCategory = SubCategory::Where('category_id', $category->id)->get();
        }
        return response()->json($this->categories);
    }

    public function getAllCategoryProductID($id){
        $this->products = Product::Where('status', 1)->where('category_id', $id)->orderBy('id', 'desc')->take('8')->get(['id','name','image','selling_price']);
        foreach($this->products as $product){
            $product->image = asset($product->image);
        }
        return response()->json($this->products);
    }

}
