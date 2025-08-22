<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="icon" href="{{asset('front/img/favicon.png')}}" type="image/png" />
  @yield('title')
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{asset('front/css/bootstrap.css')}}" />
  <link rel="stylesheet" href="{{asset('front/vendors/linericon/style.css')}}" />
  <link rel="stylesheet" href="{{asset('front/css/font-awesome.min.css')}}" />
  <link rel="stylesheet" href="{{asset('front/css/themify-icons.css')}}" />
  <link rel="stylesheet" href="{{asset('front/css/flaticon.css')}}" />
  <link rel="stylesheet" href="{{asset('front/vendors/owl-carousel/owl.carousel.min.css')}}" />
  <link rel="stylesheet" href="{{asset('front/vendors/lightbox/simpleLightbox.css')}}" />
  <link rel="stylesheet" href="{{asset('front/vendors/nice-select/css/nice-select.css')}}" />
  <link rel="stylesheet" href="{{asset('front/vendors/animate-css/animate.css')}}" />
  <link rel="stylesheet" href="{{asset('front/vendors/jquery-ui/jquery-ui.css')}}" />
  <!-- main css -->
  <link rel="stylesheet" href="{{asset('front/css/style.css')}}" />
  <link rel="stylesheet" href="{{asset('front/css/responsive.css')}}" />
   <!-- ----------------notification start------------------ -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0- 
     alpha/css/bootstrap.css" rel="stylesheet">
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css" 
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <!-- --------------------notification end-------------- -->

    <!-- aboute secontion input -->
    <!-- Load Require CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font CSS -->
    <link href="assets/css/boxicon.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Load Tempalte CSS -->

   
</head>

<body>
  <!--================Header Menu Area =================-->
  @include('front.layouts.partials.header')
  <!--================Header Menu Area =================-->

  @yield('content')

  <!--================ start footer Area  =================-->
 @include('front.layouts.partials.footer')
  <!--================ End footer Area  =================-->
  <!-- ----------tawk to script------------- -->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/64116c094247f20fefe5f902/1gri0s1tr';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="{{asset('front/js/jquery-3.2.1.min.js')}}"></script>
  <script src="{{asset('front/js/popper.js')}}"></script>
  <script src="{{asset('front/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('front/js/stellar.js')}}"></script>
  <script src="{{asset('front/vendors/lightbox/simpleLightbox.min.js')}}"></script>
  <script src="{{asset('front/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
  <script src="{{asset('front/vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{asset('front/vendors/isotope/isotope-min.js')}}"></script>
  <script src="{{asset('front/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('front/js/jquery.ajaxchimp.min.js')}}"></script>
  <script src="{{asset('front/vendors/counter-up/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('front/vendors/counter-up/jquery.counterup.js')}}"></script>
  <script src="{{asset('front/js/mail-script.js')}}"></script>
  <script src="{{asset('front/js/theme.js')}}"></script>

  <!-- --------------notification add script-------------- -->

<script>
  @if(Session::has('message'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.success("{{ session('message') }}");
  @endif

  @if(Session::has('error'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.error("{{ session('error') }}");
  @endif

  @if(Session::has('info'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.info("{{ session('info') }}");
  @endif

  @if(Session::has('warning'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.warning("{{ session('warning') }}");
  @endif
</script>
<!-- -------------- -->

 
 
</body>

</html>