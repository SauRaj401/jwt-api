<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use Illuminate\Http\Request;

class CartItemController extends Controller
{
    public function index()
    {
        $cart = CartItem::all();
        return response()->json([
            'status' => 'success',
            'Cart Item' => $cart,
        ]);
    }
}
