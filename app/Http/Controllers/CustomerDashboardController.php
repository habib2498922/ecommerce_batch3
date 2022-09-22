<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\Request;
use Session;

class CustomerDashboardController extends Controller
{
    private $orders;
    public function index()
    {
        $this->orders = Order::where('customer_id', Session::get('customer_id'))->orderBy('id','desc')->get();
        return view('website.customer.home',['orders' => $this->orders]);
    }

    public function profile()
    {
        return view('website.customer.profile');
    }

    public function account()
    {
        return view('website.customer.account');
    }

}
