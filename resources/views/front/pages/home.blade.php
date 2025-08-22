@extends('front.layouts.app')
@section('title')
<title>BES | Home</title>
@endsection()
@section('content')

<!--================Home Banner Area =================-->
<section class="home_banner_area mb-40">
    <div class="banner_inner d-flex align-items-center">
      <div class="container">
        <div class="banner_content row">
          <div class="col-lg-12">
            <p class="sub text-uppercase">New Collection</p>
            <h3><span>Show</span> Life <br />Changing <span>Gadget</span></h3>
            <h4>Building the Future with Gadget's</h4>
            <a class="main_btn mt-40" href="{{route('bloggers_profile_category')}}">View Collection</a>
          </div>
        </div>
      </div>
    </div>
</section>
  <!--================End Home Banner Area =================-->

  <!-- Start feature Area -->
  <section class="feature-area section_gap_bottom_custom">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="single-feature">
            <a href="#" class="title">
              <i class="flaticon-money"></i>
              <h3>Money back gurantee</h3>
            </a>
            <p>Very affordable Gadget's</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="single-feature">
            <a href="#" class="title">
              <i class="flaticon-truck"></i>
              <h3>Free Delivery</h3>
            </a>
            <p>Expireince our Fastest Delivery</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="single-feature">
            <a href="#" class="title">
              <i class="flaticon-support"></i>
              <h3>Alway support</h3>
            </a>
            <p>Any time | Any where</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="single-feature">
            <a href="#" class="title">
              <i class="flaticon-blockchain"></i>
              <h3>Secure payment</h3>
            </a>
            <p>The Future of Payment</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End feature Area -->

  <!--================ Feature Product Area =================-->
  <section class="feature_product_area section_gap_bottom_custom">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="main_title">
            <h2><span>Our Populer Bloggers</span></h2>
            <p>Shop smarter - Shop Online </p>
          </div>
        </div>
      </div>
      <!-- top three blogger list home page show -->
      <div class="row">
      @foreach($blogger as $bloggers)
        <div class="col-lg-4 col-md-6">
          <div class="single-product">
            <div class="product-img">
              <img class="img-fluid w-100" src="{{asset('/blogger/image/profile_picture/' .$bloggers->profile_picture) }}" alt="{{$bloggers->name}}" />
              <div class="p_icon">
                <a href="{{route('bloggers_profile_category')}}">
                  <i class="ti-eye"></i>
                </a>
                <!-- <a href="#">
                  <i class="ti-heart"></i>
                </a>
                <a href="#">
                  <i class="ti-shopping-cart"></i>
                </a> -->
              </div>
            </div>
            <div class="product-btm">
              <a href="{{route('blogpost',['id'=>$bloggers->id])}}">
                <h4>{{$bloggers->name}}</h4>
              </a>
              <!-- <div class="mt-3">
                <span class="mr-4">View More -></span>
                <del>$35.00</del> 
              </div> -->
            </div>
           
          </div>
        </div>
      @endforeach()
  
       
      </div>
    </div>
  </section>
  <!--================ End Feature Product Area =================-->

  <!--================ Offer Area =================-->
  <section class="offer_area">
    <div class="container">
      <div class="row justify-content-center">
        <div class="offset-lg-4 col-lg-6 text-center">
          <div class="offer_content">
            <h3 class="text-uppercase mb-40">all Blogger's collection</h3>
            <h2 class="text-uppercase">50% off</h2>
            <a href="#" class="main_btn mb-20 mt-5">Discover Now</a>
            <p>Limited Time Offer</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ End Offer Area =================-->

  <!--================ New Product Area =================-->
  <section class="new_product_area section_gap_top section_gap_bottom_custom">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="main_title">
            <h2><span>new products</span></h2>
            <p>Shop with us for unbeatable prices.</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div  class="col-lg-6">
          <div style="height : 100%; background-image: linear-gradient(120deg, #d4fc79 0%, #96e6a1 100%);" class="new_product">
            <h5 class="text-uppercase">collection of 2023</h5>
            <h3 class="text-uppercase">Latest Gadget's Blog !</h3>
            <div class="product-img">
              <img class="img-fluid" />
            </div>
            <!-- <h4>$120.70</h4> -->
            <a href="{{route('blogpost')}}" class="main_btn">Read Now.</a>
          </div>
        </div>

      <!-- product forech loop -->
      
        <div class="col-lg-6 mt-5 mt-lg-0">
          <div class="row">
          @foreach($gadgetdetails as $gadgetdetailss)
            <div class="col-lg-6 col-md-6">
              <div class="single-product">
                <div class="product-img">
                  <img class="img-fluid w-100" src="{{asset('/gadget/image/' .$gadgetdetailss->gadget_image) }}" alt="{{$gadgetdetailss->gadget_name}}" />
                  <div class="p_icon">
                    <a href="{{route('single_product',['id'=>$gadgetdetailss->id])}}">
                      <i class="ti-eye"></i>
                    </a>
                    <!-- <a href="#">
                      <i class="ti-heart"></i>
                    </a> -->
                    <a title="Add to Cart" href="{{route('addcart',$gadgetdetailss->id)}}">
                      <i class="ti-shopping-cart"></i>
                    </a>
                  </div>
                </div>
                <div class="product-btm">
                  <a href="{{route('single_product',['id'=>$gadgetdetailss->id])}}" class="d-block">
                    <h4>{{$gadgetdetailss->gadget_name}}</h4>
                  </a>
                  <div class="mt-3">
                    <span class="mr-4">{{$gadgetdetailss->gadget_price}}</span>
                    <del>{{$gadgetdetailss->gadget_price*1.2}}</del>                  </div>
                </div>
              </div>
            </div>
          @endforeach()
           
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ End New Product Area =================-->

  <!--================ Inspired Product Area =================-->
  <section class="inspired_product_area section_gap_bottom_custom">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="main_title">
            <h2><span>Inspired products</span></h2>
            <p>No need to pay Delivery Charges ! , it's Free  </p>
          </div>
        </div>
      </div>

      <div class="row">
      @foreach($gadgetdetails2 as $gadgetdetailss2)
        <div class="col-lg-3 col-md-6">
          <div class="single-product">
            <div class="product-img">
              <img class="img-fluid w-100" src="{{asset('/gadget/image/' .$gadgetdetailss2->gadget_image) }}" alt="{{$gadgetdetailss2->gadget_name}}" />
              <div class="p_icon">
                <a href="{{route('single_product',['id'=>$gadgetdetailss2->id])}}">
                  <i class="ti-eye"></i>
                </a>
                <!-- <a href="#">
                  <i class="ti-heart"></i>
                </a> -->
                <a title="Add to Cart" href="{{route('addcart',$gadgetdetailss2->id)}}">
                  <i class="ti-shopping-cart"></i>
                </a>
              </div>
            </div>
            <div class="product-btm">
              <a href="{{route('single_product',['id'=>$gadgetdetailss2->id])}}" class="d-block">
                <h4>{{$gadgetdetailss2->gadget_name}}</h4>
              </a>
              <div class="mt-3">
                <span class="mr-4">{{$gadgetdetailss2->gadget_price}}</span>
                <del>{{$gadgetdetailss2->gadget_price*1.4}}</del>
              </div>
            </div>
          </div>
        </div>
      @endforeach()
        <!-- <div class="col-lg-3 col-md-6">
          <div class="single-product">
            <div class="product-img">
              <img class="img-fluid w-100" src="img/product/inspired-product/i2.jpg" alt="" />
              <div class="p_icon">
                <a href="#">
                  <i class="ti-eye"></i>
                </a>
                <a href="#">
                  <i class="ti-heart"></i>
                </a>
                <a href="#">
                  <i class="ti-shopping-cart"></i>
                </a>
              </div>
            </div>
            <div class="product-btm">
              <a href="#" class="d-block">
                <h4>Latest men’s sneaker</h4>
              </a>
              <div class="mt-3">
                <span class="mr-4">$25.00</span>
                <del>$35.00</del>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="single-product">
            <div class="product-img">
              <img class="img-fluid w-100" src="img/product/inspired-product/i3.jpg" alt="" />
              <div class="p_icon">
                <a href="#">
                  <i class="ti-eye"></i>
                </a>
                <a href="#">
                  <i class="ti-heart"></i>
                </a>
                <a href="#">
                  <i class="ti-shopping-cart"></i>
                </a>
              </div>
            </div>
            <div class="product-btm">
              <a href="#" class="d-block">
                <h4>Latest men’s sneaker</h4>
              </a>
              <div class="mt-3">
                <span class="mr-4">$25.00</span>
                <del>$35.00</del>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="single-product">
            <div class="product-img">
              <img class="img-fluid w-100" src="img/product/inspired-product/i4.jpg" alt="" />
              <div class="p_icon">
                <a href="#">
                  <i class="ti-eye"></i>
                </a>
                <a href="#">
                  <i class="ti-heart"></i>
                </a>
                <a href="#">
                  <i class="ti-shopping-cart"></i>
                </a>
              </div>
            </div>
            <div class="product-btm">
              <a href="#" class="d-block">
                <h4>Latest men’s sneaker</h4>
              </a>
              <div class="mt-3">
                <span class="mr-4">$25.00</span>
                <del>$35.00</del>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-lg-3 col-md-6">
          <div class="single-product">
            <div class="product-img">
              <img class="img-fluid w-100" src="img/product/inspired-product/i5.jpg" alt="" />
              <div class="p_icon">
                <a href="#">
                  <i class="ti-eye"></i>
                </a>
                <a href="#">
                  <i class="ti-heart"></i>
                </a>
                <a href="#">
                  <i class="ti-shopping-cart"></i>
                </a>
              </div>
            </div>
            <div class="product-btm">
              <a href="#" class="d-block">
                <h4>Latest men's sneaker</h4>
              </a>
              <div class="mt-3">
                <span class="mr-4">$25.00</span>
                <del>$35.00</del>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="single-product">
            <div class="product-img">
              <img class="img-fluid w-100" src="img/product/inspired-product/i6.jpg" alt="" />
              <div class="p_icon">
                <a href="#">
                  <i class="ti-eye"></i>
                </a>
                <a href="#">
                  <i class="ti-heart"></i>
                </a>
                <a href="#">
                  <i class="ti-shopping-cart"></i>
                </a>
              </div>
            </div>
            <div class="product-btm">
              <a href="#" class="d-block">
                <h4>Latest men’s sneaker</h4>
              </a>
              <div class="mt-3">
                <span class="mr-4">$25.00</span>
                <del>$35.00</del>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="single-product">
            <div class="product-img">
              <img class="img-fluid w-100" src="img/product/inspired-product/i7.jpg" alt="" />
              <div class="p_icon">
                <a href="#">
                  <i class="ti-eye"></i>
                </a>
                <a href="#">
                  <i class="ti-heart"></i>
                </a>
                <a href="#">
                  <i class="ti-shopping-cart"></i>
                </a>
              </div>
            </div>
            <div class="product-btm">
              <a href="#" class="d-block">
                <h4>Latest men’s sneaker</h4>
              </a>
              <div class="mt-3">
                <span class="mr-4">$25.00</span>
                <del>$35.00</del>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="single-product">
            <div class="product-img">
              <img class="img-fluid w-100" src="img/product/inspired-product/i8.jpg" alt="" />
              <div class="p_icon">
                <a href="#">
                  <i class="ti-eye"></i>
                </a>
                <a href="#">
                  <i class="ti-heart"></i>
                </a>
                <a href="#">
                  <i class="ti-shopping-cart"></i>
                </a>
              </div>
            </div>
            <div class="product-btm">
              <a href="#" class="d-block">
                <h4>Latest men's sneaker</h4>
              </a>
              <div class="mt-3">
                <span class="mr-4">$25.00</span>
                <del>$35.00</del>
              </div>
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </section>
  <!--================ End Inspired Product Area =================-->

  <!--================ Start Blog Area =================-->
  <section class="blog-area section-gap">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="main_title">
            <h2><span>latest blog</span></h2>
            <p>Expirience the Difference.</p>
          </div>
        </div>
      </div>
      <!-- start foreach of post  -->

      
      <div class="row">
      @foreach($post_details as $post_detailss)
        <div class="col-lg-4 col-md-6">
          <div class="single-blog">
            <div class="thumb">
              <img class="img-fluid" src="{{asset('/post/image/' .$post_detailss->post_image) }}" alt="{{$post_detailss->post_name}}">
            </div>
            <div class="short_details">
              <div class="meta-top d-flex">
                <a href="#">By Blogger</a>
                <!-- <a href="#"><i class="ti-comments-smiley"></i>2 Comments</a> -->
              </div>
              <a class="d-block" href="{{route('single_blogpost',['id'=>$post_detailss->id])}}">
                <h4>{{$post_detailss->post_name}}</h4>
              </a>
              <!-- <div class="text-wrap">
                <p>
                {{$post_detailss->post_description}}
                </p>
              </div> -->
              <a href="{{route('single_blogpost',['id'=>$post_detailss->id])}}" class="blog_btn">Learn More <span class="ml-2 ti-arrow-right"></span></a>
            </div>
        </div>
      </div>
      @endforeach()
    
      </div>  
      </div>
    </div>
  </section>
  <!--================ End Blog Area =================-->

@endsection()