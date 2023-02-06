<?php

namespace App\Http\Controllers\FE;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\CartItem;

class HomeController extends Controller
{
    public function index() 
    {
        $prods = Product::all();
        return view('fe.index', compact(
            'prods'
        ));
    }

    public function product($slug) 
    {
        // get() chuyển laravel collection thành php array
        // $prod = Product::where('slug', $slug)->get();
        // hàm first() lấy phần tử đầu
        $prod = Product::where('slug', $slug)->first();
        return view('fe.product', compact('prod'));
    }

    public function addCart(Request $request) 
    {
        $pid = $request->pid;
        $quantity = $request->quantity;

        $prod = Product::find($pid);
        $cartItem = new CartItem($prod, $quantity);

        if ($request->session()->has('cart')) {
            $cart = $request->session()->get('cart');
        } else {
            $cart = [];
        }

        $cart[] = $cartItem;    // xử lý cộng dồn quantity nếu item trùng
        $request->session()->put('cart', $cart);
    }

    public function viewCart(Request $request) 
    {
        return view('fe.viewCart');
        // if ($request->session()->has('cart')) {
        //     $cart = $request->session()->get('cart');
        //     //dd($cart);
        //     echo "Product Name: " . $cart[0]->product->name;
        // } else{
        //     echo 'No Product';
        // }
    }

    public function clearCart(Request $request) 
    {
        $request->session()->forget('cart');
    }
}
