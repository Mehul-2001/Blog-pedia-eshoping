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
<!-- <section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');"> save for old bg image -->
  <!-- ----------------notification start------------------ -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0- 
     alpha/css/bootstrap.css" rel="stylesheet">
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css" 
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <!-- --------------------notification end-------------- -->

  <section class="vh-100 bg-image">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 30px; border-color: green;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">LOGIN</h2>
              @if($errors->any())
    @include('admin.errors.error')
  @endif
              <form method="post" action="{{route('login')}}">
              {{csrf_field()}}              

                <div class="form-outline mb-4">
                  <input type="email" name="email" id="form3Example3cg" class="form-control form-control-lg" style="border-color: green;" />
                  <label class="form-label" for="form3Example3cg">Your Email</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" name="password" id="form3Example4cg" class="form-control form-control-lg" style="border-color: green;"/>
                  <label class="form-label"  for="form3Example4cg">Password</label>
                </div>

                <!-- <div class="form-check d-flex justify-content-center mb-5">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                  <label class="form-check-label" for="form2Example3g">
                    I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                  </label>
                </div> -->
                
                <div class="d-flex justify-content-center">
                  <button type="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">LOGIN NOW !</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0"> Not have an account? <a class="fw-bold text-body" href="{{route('resistration')}}"><u>Register Here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

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