<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Http\Request;
use PDF;

class OrderController extends Controller
{
    private $orders;
    private $product;
    private $order;
    private $orderdetails;

    public function index(){
        $this->orders = Order::orderBy('id','desc')->get();
        return view('admin.order.index', ['orders' => $this->orders]);
    }

    public  function detail($id){
        $this->order = Order::find($id);
        return view('admin.order.detail',['order' => $this->order]);
    }
    public  function ViewInvoice($id){
        $this->order = Order::find($id);
        return view('admin.order.invoice',['order' => $this->order]);
    }
    public  function DownloadInvoice($id){
        $pdf = PDF::loadView('admin.order.downloadInvoice',['order' => Order::find($id)]);
        return $pdf->stream();

//        $pdf = PDF::loadHTML('<h1>Test</h1>');
//        return $pdf->stream();
    }
    public  function edit($id){
        return view('admin.order.edit',['order' => Order::find($id)]);

    }

    public function  update(Request $request, $id){
        $this->order = Order::find($id);
        if ($request->order_status == "Processing"){
            $this->order->order_status = "Processing";
            $this->order->payment_status = "Processing";
            $this->order->delivery_status = "Processing";
            $this->order->delivery_address = $request->delivery_address;
            $this->order->save();
        }
        elseif ($request->order_status == "Complete"){
            $this->order->order_status = "Complete";
            $this->order->payment_status = "Complete";
            $this->order->payment_date = date('Y-m-d');
            $this->order->payment_timestamp = strtotime(date('Y-m-d'));
            $this->order->delivery_status = "Complete";
            $this->order->delivery_date = date('Y-m-d');
            $this->order->delivery_timestamp = strtotime(date('Y-m-d'));
            $this->order->save();

            $this->orderdetails = OrderDetail::where('order_id', $this->order->id)->get();
            foreach($this->orderdetails as $orderdetails){
                $this->product = Product::find($orderdetails->product_id);
                $this->product->stock_amount = $this->product->stock_amount - $orderdetails->product_qty;
                $this->product->save();
            }
        }
        elseif ($request->order_status == "Cancel"){
            $this->order->order_status = "Cancel";
            $this->order->payment_status = "Cancel";
            $this->order->delivery_status = "Cancel";
            $this->order->save();
        }

        return redirect('/manage-order')->with('message','Order Info Update Successfully');
    }
    public  function delete($id){
        $this->order = Order::find($id);
        $this->order->delete();

        $this->orderdetails = OrderDetail::where('order_id', $id)->get();
        foreach($this->orderdetails as $orderdetails){
            $orderdetails->delete();
        }

        return redirect('/manage-order')->with('message','Order Info Delete Successfully');
    }
}
