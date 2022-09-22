<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cart;

class OrderDetail extends Model
{
    use HasFactory;
    private static $orderDetail;
    private static $cartProducts;


    public static function neworderDetails($order){
        self::$cartProducts = Cart::getContent();

        foreach(self::$cartProducts as $cartProduct){
            self::$orderDetail = new OrderDetail();
            self::$orderDetail->order_id = $order->id;
            self::$orderDetail->product_id = $cartProduct->id;
            self::$orderDetail->product_name = $cartProduct->name;
            self::$orderDetail->product_image = $cartProduct->image;
            self::$orderDetail->product_price = $cartProduct->price;
            self::$orderDetail->product_qty = $cartProduct->quantity;
            self::$orderDetail->save();

        }
    }
}
