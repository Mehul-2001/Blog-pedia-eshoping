@extends('front.layouts.app')
@section('title')
<title>BES | All Bloggers</title>
@endsection()
@section('content')
    <!--================Home Banner Area =================-->
    <section class="banner_area" style="background-image: linear-gradient(to right, #ff512f, #f09819);">
      <div class="banner_inner d-flex align-items-center" style="background-image: linear-gradient(120deg, #d4fc79 0%, #96e6a1 100%);">
        <div class="container">
          <div class="banner_content d-md-flex justify-content-between align-items-center">
            <div class="mb-3 mb-md-0">
              <h2>Our Blogger's</h2>
              <p>Very us move be blessed multiply night</p>
            </div>
            <div class="page_link">
              <a href="{{route('home')}}">Home</a>
              <!-- <a href="#">Shop</a> -->
              <a href="{{route('bloggers_profile_category')}}">Bloggers</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Category Product Area =================-->
    <section class="cat_product_area section_gap">
      <div class="container">
        <div class="row flex-row-reverse">
         <div class="col-lg-12"> <!--  9 nu 12 karyu ahi--------------------------------------------------- -->
            <div class="product_top_bar">
              <div class="left_dorp">
                <!-- <select class="sorting">
                  <option value="1">Default sorting</option>
                  <option value="2">Default sorting 01</option>
                  <option value="4">Default sorting 02</option>
                </select> -->
              <p>All Listed Bloggers :</p>
                <!-- <select class="show">
                  <option value="1">Show 12</option>
                  <option value="2">Show 14</option>
                  <option value="4">Show 16</option>
                </select> -->
              </div>
            </div>
            
            <div class="latest_product_inner">
              <div class="row">
              @foreach($blogger as $bloggers)
                <div class="col-lg-4 col-md-6">
                  <div class="single-product">
                    <div class="product-img">
                      <img
                        class="card-img"
                        src="{{asset('/blogger/image/profile_picture/' .$bloggers->profile_picture) }}"
                        alt="{{$bloggers->name}}"
                      />
                      <div class="p_icon">
                        <a href="{{route('bloggers_product_category',['id'=>$bloggers->id])}}">
                          <i class="ti-eye"></i>
                        </a>
                        <!-- <a href="#">
                          <i class="ti-heart"></i>
                        </a> -->
                        <!-- <a href="#">
                          <i class="ti-shopping-cart"></i>
                        </a> -->
                      </div>
                    </div>
                    <div class="product-btm">
                      <a href="{{route('bloggers_product_category',['id'=>$bloggers->id])}}" class="d-block">
                        <h4>{{$bloggers->name}}</h4>
                      </a>
                      <!-- <div class="mt-3">
                        <span class="mr-4">View Products -></span>
                        <del>$35.00</del>
                      </div> -->
                    </div>
                  </div>
                </div>
              @endforeach()
                
              </div>
            </div>
          </div>

          <!-- <div class="col-lg-3">
            <div class="left_sidebar_area">
              <aside class="left_widgets p_filter_widgets">
                <div class="l_w_title">
                  <h3>Browse Categories</h3>
                </div>
                <div class="widgets_inner">
                  <ul class="list">
                    <li>
                      <a href="#">Frozen Fish</a>
                    </li>
                    <li>
                      <a href="#">Dried Fish</a>
                    </li>
                    <li>
                      <a href="#">Fresh Fish</a>
                    </li>
                    <li>
                      <a href="#">Meat Alternatives</a>
                    </li>
                    <li>
                      <a href="#">Fresh Fish</a>
                    </li>
                    <li>
                      <a href="#">Meat Alternatives</a>
                    </li>
                    <li>
                      <a href="#">Meat</a>
                    </li>
                  </ul>
                </div>
              </aside>

              <aside class="left_widgets p_filter_widgets">
                <div class="l_w_title">
                  <h3>Product Brand</h3>
                </div>
                <div class="widgets_inner">
                  <ul class="list">
                    <li>
                      <a href="#">Apple</a>
                    </li>
                    <li>
                      <a href="#">Asus</a>
                    </li>
                    <li class="active">
                      <a href="#">Gionee</a>
                    </li>
                    <li>
                      <a href="#">Micromax</a>
                    </li>
                    <li>
                      <a href="#">Samsung</a>
                    </li>
                  </ul>
                </div>
              </aside>

              <aside class="left_widgets p_filter_widgets">
                <div class="l_w_title">
                  <h3>Color Filter</h3>
                </div>
                <div class="widgets_inner">
                  <ul class="list">
                    <li>
                      <a href="#">Black</a>
                    </li>
                    <li>
                      <a href="#">Black Leather</a>
                    </li>
                    <li class="active">
                      <a href="#">Black with red</a>
                    </li>
                    <li>
                      <a href="#">Gold</a>
                    </li>
                    <li>
                      <a href="#">Spacegrey</a>
                    </li>
                  </ul>
                </div>
              </aside>

              <aside class="left_widgets p_filter_widgets">
                <div class="l_w_title">
                  <h3>Price Filter</h3>
                </div>
                <div class="widgets_inner">
                  <div class="range_item">
                    <div id="slider-range"></div>
                    <div class="">
                      <label for="amount">Price : </label>
                      <input type="text" id="amount" readonly />
                    </div>
                  </div>
                </div>
              </aside>
            </div>
          </div> -->
        </div>
      </div>
    </section>
    <!--================End Category Product Area =================-->
@endsection()