<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $categories;
    private $products;

    public function index(){
//        $this->products =  Product::orderBy('id', 'desc')->take('1')->get(['id','name','selling_price','image','stock_amount']);
//        return $this->products;
        return view('website.home.home', [
            'products' => Product::orderBy('id', 'desc')->take(8)->get(),
            ]);

    }
    public function category($id){
        return view('website.category.category',[
            'products' => Product::where('category_id', $id)->orderBy('id','desc')->get(),
        ]);
    }
    public function detail($id){
        return view('website.product.detail',[
            'product' => Product::find($id),
        ]);
    }
    public function about(){
        return view('website.product.about');
    }
    public function contact(){
        return view('website.product.contact');
    }

    public function faq(){
        return view('website.page.faq');
    }
    public function mail(){
        return view('website.page.mail');
    }
    public function error(){
        return view('website.page.error');
    }
    public function productlist(){
        return view('website.cart.productlist');
    }

    public function bloggird(){
        return view('website.blog.gird');
    }
    public function blogsingle(){
        return view('website.blog.blogsingle');
    }
    public function blogsingleslide(){
        return view('website.blog.blogsingleslide');
    }
}
