<?php

namespace App\Http\Controllers;

use App\Models\Gadgetdetail;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function view()
    {
        $carts = \Cart::instance('shopping')->content();
        // return $carts;
        $total=str_replace(',','',\Cart::total());
        $count=\Cart::count();
        return view('front.pages.shop.shoping_cart',compact('carts','total','count'));
    }
    public function index()
	{
        $carts = \Cart::instance('shopping')->content();
        return $carts;
		return view('front.pages.shop.shoping_cart')->with('carts',$carts);
    }
    public function store($id)
	{
            $product = Gadgetdetail::find($id);
            if($product)
            {
                \Cart::instance('shopping')->add(['id' => $id,
                    'name'=>$product->gadget_name,$product->sku,1, 
                    'price'=>$product->gadget_price,
                    'qty'=>'1','options' => ['image' => $product->gadget_image]]);
            }
            $carts = \Cart::instance('shopping')->content();
           
           
            return \Redirect::route('cart')->with('message','Gadget Added Successfully');
    }

    public function destroy($id) //Delete Cart product
	{
            \Cart::instance('shopping')->remove($id);
            return redirect()->back();
            //return \Redirect::route('customer/cart');
    }
    public function update(Request $request)
    {
        $id = $request->get('id');
        // return $id;
        $quantity = $request->get('quantity');
        // return $quantity;

       
            \Cart::instance('shopping')->update($id, $quantity);

            return \Redirect::route('cart')->with('message','Cart updated !');
       
    }

    // cart buuton link code 

    // <a class="product-link cart-btn-main hastip" title="Add to Cart" href="{{route('add.cart',$product->id)}}"><i class="fa fa-shopping-cart"></i></a>

}
