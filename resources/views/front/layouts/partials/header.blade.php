
<header class="header_area">
    <div class="top_menu">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="float-left">
              <p>Phone: <a style="text-decoration: none;" href="tel:9876543210">+91 9876543210</a></p>
              <p>email: <a href="mailto:blogppedia.e.shoping@gmail.com">blogppedia.e.shoping@gmail.com</a></p>
             
    
            </div>
          </div>
          <div class="col-lg-5">
            <div class="float-right">
              
              <div id="google_translate_element"></div>
                <script type="text/javascript">
  function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="main_menu">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light w-100">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="{{route('home')}}">
            <img src="img/logo.png" alt="" />
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset w-100" id="navbarSupportedContent">
            <div class="row w-100 mr-0">
              <div class="col-lg-7 pr-0">
                <ul class="nav navbar-nav center_nav pull-right">
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('home')}}">Home</a>
                  </li>
                  <li class="nav-item submenu dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                      aria-expanded="false">Shop</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item">
                        <a class="nav-link" href="{{route('bloggers_profile_category')}}">Our Bloggers</a>
                      </li>
                      <!-- <li class="nav-item">
                        <a class="nav-link" href="single_product">single product page</a>
                      </li> -->
                      <li class="nav-item">
                        <a class="nav-link" href="{{route('checkout')}}">Checkout</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{route('cart')}}">Shopping Cart</a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item submenu dropdown">
                  <a class="nav-link" href="{{route('blogpost')}}">Blog</a>
                      
                  </li>
                  <!-- <li class="nav-item submenu dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                      aria-expanded="false">Pages</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item">
                        <a class="nav-link" href="tracking.html">Tracking</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="elements.html">Elements</a>
                      </li>
                    </ul>
                  </li> -->
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('tracking')}}">About Us</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
                  </li>
                </ul>
              </div>

              <div class="col-lg-5 pr-0">
                <ul class="nav navbar-nav navbar-right right_nav pull-right">
                  <!-- <li class="nav-item">
                    <a href="#" class="icons">
                      <i class="ti-search" aria-hidden="true"></i>
                    </a>
                  </li> -->


                  <!-- <li class="nav-item">
                    <a href="{{route('cart')}}" class="icons">
                      <i class="ti-shopping-cart"></i>
                    </a>
                  </li> -->

                  <li class="nav-item">
                    <a href="{{route('login')}}" class="icons">
                      <i class="ti-user" aria-hidden="true"></i>
                    </a>
                  </li>
                  <!-- dropdown test start -->
                  <li class="nav-item submenu dropdown">
                  <a href="{{route('cart')}}" class="icons"  role="button" aria-haspopup="true"
                      aria-expanded="false">
                      <i class="ti-shopping-cart"></i>
                    </a>
                   
                    <ul class="dropdown-menu text-nowrap">
                    @foreach($carts as $gadgetdetailss)
                      <li class="nav-item">
                        <a class="nav-link" href="{{route('cart')}}">{{$gadgetdetailss->name}} X {{$gadgetdetailss->qty}}</a>
                      </li>
                    @endforeach()

                    </ul>
                  </li>
                  <!-- dropdown test end -->

                  <!-- <li class="nav-item">
                    <a href="#" class="icons">
                      <i class="ti-heart" aria-hidden="true"></i>
                    </a>
                    <button onclick="switcher()">switch</button>
                  </li> -->
                  <!-- dark mode switch -->
          <!-- <script>
            function switcher() {
                var element = document.body;
                element.classList.toggle("dark");
                element.style.transition = '.5s';
                navigator.vibrate([30]);
            }
        </script> -->

              <!-- ---  Google translate --- -->
              <style>
                #google_translate_element select{
 background:#f6edfd;
 color:#71cd14;
 border: none;
 border-radius:8px;
 /* padding:auto;
 margin:auto; */
 }
 .VIpgJd-ZVi9od-l4eHX-hSRGPd{
   display:none !important;
  }
 .goog-te-gadget{
 color:transparent!important;
 } 
 .goog-te-banner-frame{
 display:none !important;
 }
 
 #goog-gt-tt, .goog-te-balloon-frame{display: none !important;}
.goog-text-highlight { background: none !important; box-shadow: none !important;}



</style>


                  


                </ul>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </div>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-64195324e8030aa8"></script>

  </header>
