<?php

namespace App\Http\Controllers;

use App\Mail\OrderConfirmationMail;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Cart;
use Session;
use Mail;

class CheckoutController extends Controller
{
    private  $customer;
    private  $order;
    private  $orderDetail;
    private  $cartproduct;
    private  $mailbody;

    public function index(){
        if(Session::get('customer_id')){
            $this->customer = Customer::find(Session::get('customer_id'));
        }else{
            $this->customer = '';
        }
        return view('website.cart.checkout', ['Customer' => $this->customer]);
    }

    public function newOrder(Request $request){

        if(Session::get('customer_id')){
            $this->customer = Customer::find(Session::get('customer_id'));
        }else{

            $request->validate([
                'name' => 'required',
                'email' => 'required|Unique:customers',
                'mobile' => 'required',
                'delivery_address' => 'required',
            ]);

            $this->customer = Customer::newCustomer($request);

            Session::put('customer_id', $this->customer->id);
            Session::put('customer_name', $this->customer->name);
        }

        if($request->payment_method == 1){
            $this->order = Order::neworder($this->customer, $request);
            OrderDetail::neworderDetails($this->order);

            $this->cartproduct = Cart::getContent();
            foreach($this->cartproduct as $cartProduct){
                Cart::remove($cartProduct->id);
            }
            $this->mailbody = [
                'title' => 'This is mail title',
                'body' => 'This is a mail body',
            ];
            Mail::to($this->customer->email)->send(new OrderConfirmationMail($this->mailbody));

            return  redirect('/complete-order')->with('messege', 'Your Order successfully post.we will contact you soon');
        }elseif ($request->payment_method == 2){
            $sslPayment = new SslCommerzPaymentController();
            $sslPayment->onlinePayment($request, $this->customer);
        }elseif ($request->payment_method == 3){
            $this->order = Order::neworder($this->customer, $request);
            OrderDetail::neworderDetails($this->order);

            $this->cartproduct = Cart::getContent();
            foreach($this->cartproduct as $cartProduct){
                Cart::remove($cartProduct->id);
            }
            $this->mailbody = [
                'title' => 'This is mail title',
                'body' => 'This is a mail body',
            ];
            Mail::to($this->customer->email)->send(new OrderConfirmationMail($this->mailbody));

            return  redirect('/complete-order')->with('messege', 'Your Order successfully post.we will contact you soon');
        }elseif ($request->payment_method == 4){
            $this->order = Order::neworder($this->customer, $request);
            OrderDetail::neworderDetails($this->order);

            $this->cartproduct = Cart::getContent();
            foreach($this->cartproduct as $cartProduct){
                Cart::remove($cartProduct->id);
            }
            $this->mailbody = [
                'title' => 'This is mail title',
                'body' => 'This is a mail body',
            ];
            Mail::to($this->customer->email)->send(new OrderConfirmationMail($this->mailbody));

            return  redirect('/complete-order')->with('messege', 'Your Order successfully post.we will contact you soon');
        }
    }

    public function completeOrder(){
        return view('website.cart.completeOrder');
    }
}
