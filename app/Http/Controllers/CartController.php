<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Store;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(Request $request){
        $total = 0;
        $CarsInCart = [];
        $CarsInSession = $request->session()->get('stores');
        if ($CarsInSession) {
            $CarsInCart = Store::findMany(array_keys($CarsInSession));
            $total = Store::sumCarsByQuantity($CarsInCart, $CarsInSession);
        }
        $showCart = [];
        $showCart['title'] = 'Cart';
        $showCart['subtitle'] = 'Shopping Cart';
        $showCart['total'] = $total;
        $showCart['stores'] = $CarsInCart;
        return view('cart.index')->with('showCart', $showCart);
    }
    public function add(Request $request, $id)
    {
        $stores = $request->session()->get("stores");
        $stores[$id] = $request->input('quantity');
        $request->session()->put("stores", $stores);
        return redirect()->route('cart.index');
    }
    public function delete(Request $request)
    {
        $request->session()->forget('stores');
        return back();
    }
    // public function purchase(Request $request)
    // {
    //     $showCartInSession = $request->session()->get("s$showCart");
    //     if ($showCartInSession) {
    //         $userId = Auth::user()->getId();
    //         $order = new Order();
    //         $order->setUserId($userId);
    //         $order->setTotal(0);
    //         $order->save();

    //         $total = 0;
    //         $showCartInCart = Product::findMany(array_keys($showCartInSession));
    //         foreach ($showCartInCart as $product) {
    //             $quantity = $showCartInSession[$product->getId()];
    //             $item = new Item();
    //             $item->setQuantity($quantity);
    //             $item->setPrice($product->getPrice());
    //             $item->setProductId($product->getId());
    //             $item->setOrderId($order->getId());
    //             $item->save();
    //             $total = $total + ($product->getPrice() * $quantity);
    //         }
    //         $order->setTotal($total);
    //         $order->save();
    //         $newBalance = Auth::user()->getBalance() - $total;
    //         Auth::user()->setBalance($newBalance);
    //         Auth::user()->save();
    //         $request->session()->forget('s$showCart');
    //         $viewData = [];
    //         $viewData["title"] = "Purchase - Online Store";
    //         $viewData["subtitle"] = "Purchase Status";
    //         $viewData["order"] = $order;
    //         return view('cart.purchase')->with("viewData", $viewData);
    //     } else {
    //         return redirect()->route('cart.index');
    //     }
    // }
}
