<footer class="footer-area section_gap">
    <div class="container">
      <div class="row">
        <div class="col-lg-2 col-md-6 single-footer-widget">
          <!-- <h4>Top Products</h4>
          <ul>
            <li><a href="#">Managed Website</a></li>
            <li><a href="#">Manage Reputation</a></li>
            <li><a href="#">Power Tools</a></li>
            <li><a href="#">Marketing Service</a></li>
          </ul> -->
        </div>
        <div class="col-lg-2 col-md-6 single-footer-widget">
          <h4>Quick Links</h4>
          <ul>
            <li><a href="{{route('bloggers_profile_category')}}">All Blogger</a></li>
            <li><a href="{{route('blogpost')}}">Blog Posts</a></li>
            <li><a href="{{route('contact')}}">Contact Us</a></li>
            <li><a href="{{route('tnc')}}">Terms of Service</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 single-footer-widget">
          <h4>Features</h4>
          <ul>
            <li><a href="https://www.google.com/recaptcha/admin/site/598286707#list ">Google-Recapta</a></li>
            <li><a href="https://www.addthis.com/register?next=/dashboard#tool-config">Morden Share Button</a></li>
            <li><a href="https://www.tawk.to">24x7 live Chat</a></li>
            <li><a href="https://translate.google.com/">Google Translate</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 single-footer-widget">
          <h4>Resources</h4>
          <ul>
            <li><a href="https://youtube.com/laravel_tutorial">Youtube</a></li>
            <li><a href="#https://laracasts.com/">Laravel</a></li>
            <li><a href="https://getbootstrap.com/">Bootstrap</a></li>
            <li><a href="https://www.w3resource.com/javascript/javascript.php">Java Script</a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-6 single-footer-widget">
          <h4>Newsletter</h4>
          <p>You can trust us. we only send promo offers,</p>
          <div class="form-wrap" >
          
            <form target="_blank" method="post" action="{{route('addsubscription')}}" class="form-inline">
            {{csrf_field()}}
              <input  name="email" placeholder="Your Email Address" onfocus="this.placeholder = ''"
                onblur="this.placeholder = 'Your Email Address '" type="email" required>
              <button type="submit" class="click-btn btn btn-default">Subscribe</button>
              <!-- <div style="position: absolute; left: -5000px;">
                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
              </div> -->

              <div class="info"></div>
            </form>
          </div>
        </div>
      </div>
      <div class="footer-bottom row align-items-center">
        <p class="footer-text m-0 col-lg-8 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Site is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">Blogpedia-e-Shoping</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        <div class="col-lg-4 col-md-12 footer-social">
          <a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
          <a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a>
          <a href="https://www.youtube.com"><i class="fa fa-youtube"></i></a>
          <a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
    </div>
  </footer>