@extends('front.layouts.app')
@section('title')
<title>BES | My Cart</title>
@endsection()
@section('content')
 <!--================Home Banner Area =================-->
 <section class="banner_area">
      <div class="banner_inner d-flex align-items-center" style="background-image: linear-gradient(120deg, #d4fc79 0%, #96e6a1 100%);">
        <div class="container">
          <div
            class="banner_content d-md-flex justify-content-between align-items-center"
          >
            <div class="mb-3 mb-md-0">
              <h2>Cart</h2>
              <p>Very us move be blessed multiply night</p>
            </div>
            <div class="page_link">
              <a href="index.html">Home</a>
              <a href="cart.html">Cart</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Cart Area =================-->
    <section class="cart_area">
      <div class="container">
        <div class="cart_inner">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col-md-3">Product</th>
                  <th scope="col-md-3">Price</th>
                  <th scope="col-md-3">Quantity</th>
                  <th scope="col-md-3">Sub-Total</th>
                </tr>
              </thead>
              <tbody>
              @foreach($carts as $gadgetdetailss)
                <tr>
                  <td>
                    <div class="media">
                      <div class="d-flex">
                        <img
                          src="{{asset('/gadget/image/' .$gadgetdetailss->options['image']) }}" height="100" width="100"
                          alt="{{$gadgetdetailss->name}}"
                        />
                      </div>
                      <div class="media-body">
                        <p>{{$gadgetdetailss->name}}</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <h5>{{$gadgetdetailss->price}}</h5>
                  </td>
                  <td>
                  @if($errors->any())
    @include('admin.errors.error')
  @endif
                    <form method="post" action="{{route('updatecart')}}">
                    <input type="hidden" name="id"  value="{{$gadgetdetailss->rowId}}">
                    {{csrf_field()}}
                          <input type="number" min="1" max="10" class="quantity-field" name="quantity" value="{{$gadgetdetailss->qty}}">
                          <button class="qty-refresh" ><i class="fa fa-refresh"></i></button>
                  </form>
                  </td>
                 
                 
                  <td>
                    <h5>{{$gadgetdetailss->subtotal}}</h5>
                </td>
                <td> <a href="{{route('removecart',$gadgetdetailss->rowId)}}"><i class="fa fa-close"></i></a></td>
                </div>
            </div>
                  </td>
                </tr>
              @endforeach()
                <!-- <tr>
                  <td>
                    <div class="media">
                      <div class="d-flex">
                        <img
                          src="img/product/single-product/cart-1.jpg"
                          alt=""
                        />
                      </div>
                      <div class="media-body">
                        <p>Minimalistic shop for multipurpose use</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <h5>$360.00</h5>
                  </td>
                  <td>
                    <div class="product_count">
                      <input
                        type="text"
                        name="qty"
                        id="sst"
                        maxlength="12"
                        value="1"
                        title="Quantity:"
                        class="input-text qty"
                      />
                      <button
                        onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                        class="increase items-count"
                        type="button"
                      >
                        <i class="lnr lnr-chevron-up"></i>
                      </button>
                      <button
                        onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                        class="reduced items-count"
                        type="button"
                      >
                        <i class="lnr lnr-chevron-down"></i>
                      </button>
                    </div>
                  </td>
                  <td>
                    <h5>$720.00</h5>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="media">
                      <div class="d-flex">
                        <img
                          src="img/product/single-product/cart-1.jpg"
                          alt=""
                        />
                      </div>
                      <div class="media-body">
                        <p>Minimalistic shop for multipurpose use</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <h5>$360.00</h5>
                  </td>
                  <td>
                    <div class="product_count">
                      <input
                        type="text"
                        name="qty"
                        id="sst"
                        maxlength="12"
                        value="1"
                        title="Quantity:"
                        class="input-text qty"
                      />
                      <button
                        onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                        class="increase items-count"
                        type="button"
                      >
                        <i class="lnr lnr-chevron-up"></i>
                      </button>
                      <button
                        onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                        class="reduced items-count"
                        type="button"
                      >
                        <i class="lnr lnr-chevron-down"></i>
                      </button>
                    </div>
                  </td>
                  <td>
                    <h5>$720.00</h5>
                  </td>
                </tr> -->

                <!-- <tr class="bottom_button">
                  <td>
                    <a class="gray_btn" href="#">Update Cart</a>
                  </td>
                  <td></td>
                  <td></td>
                  <td>
                    <div class="cupon_text">
                    payment old script here
                    </div>
                  </td>
                </tr> -->
                <tr>
                  <td></td>
                  <td></td>
                  <td>
                    <h5>Total</h5>
                  </td>
                  <td>
                    <h5>{{$total}}</h5>
                  </td>
                </tr>
                <tr class="shipping_area">
                  <td></td>
                  <td></td>
                  <td>
                    <h5>Shipping</h5>
                  </td>
                  <td>
                    <div class="shipping_box">
                      <ul class="list">
                        
                        <li class="active">
                          <a href="#" >Free Shipping</a>
                        </li>
                        
                      </ul>

                      <!-- <select class="shipping_select">
                        <option value="1">Bangladesh</option>
                        <option value="2">India</option>
                        <option value="4">Pakistan</option>
                      </select> -->
                      <!-- <select class="shipping_select">
                        <option value="1">Select a State</option>
                        <option value="2">Select a State</option>
                        <option value="4">Select a State</option>
                      </select> -->
                      <!-- <input type="text" placeholder="Postcode/Zipcode" />
                      <a class="gray_btn" href="#">Update Details</a> -->
                    </div>
                  </td>
                </tr>
                <tr class="out_button_area">
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>
                    <div class="checkout_btn_inner">
                      <a class="gray_btn" href="{{route('bloggers_profile_category')}}">Continue Shopping</a>
                      <a class="main_btn" href="{{route('checkout')}}">Proceed to checkout</a>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
    <!--================End Cart Area =================-->
@endsection()