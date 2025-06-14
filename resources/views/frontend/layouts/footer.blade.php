  <!-- Footer Area -->

  <footer class="footer-area py-0">
      <div class="container">
          <div class="footer-up pb-md-5 pb-4 pt-4">
              <div class="row">
                  <div class="col-lg-4 col-md-6 col-sm-12">

                      <p class="text-white">At Solar Techmach LLP, we specialize in delivering innovative, cost-effective production plants and machinery tailored to the solar and renewable energy sectors. Headquartered in India, we proudly serve clients both locally and globally, combining quality, efficiency, and forward-thinking solutions to drive a more sustainable future.</p>
                  </div>
                  {{-- <div class="col-lg-1"></div> --}}
                  <div class="col-lg-4   col-md-6 com-sm-12 section--right-20 px-md-0">
                      <h5 class="mb-3 text-uppercase">Useful Links</h5>
                      <ul>
                          <li class="mobile-links">
                              <a href="{{ url('/') }}">Home</a>
                              <a href="{{ url('/about-us') }}">About Us</a>

                              {{-- <a href="{{ url('/solutions') }}">Solutions</a> --}}

                              {{-- <a href="{{ url('/connect-with-us') }}">Connect With Us</a> --}}
                              <a href="{{ route('frontend.product.index') }}">Products</a>
                              <a href="{{ route('latest-offers') }}">What We Offer</a>
                              <a href="{{ route('exhibitions') }}">Exhibitions</a>
                              <a href="{{ url('/business-process') }}">Business Process</a>
                              <a href="{{ url('/contact-us') }}">Contact Us</a>
                          </li>
                      </ul>
                  </div>
                  <div class="col-lg-4 col-md-6 office section--right-20 contact-info">
                      <h5 class="mb-2 text-uppercase">Contact Info</h5>

                      <div class="company-email ">
                          <p class="my-0"><i class="fa-solid fa-envelope"></i>&nbsp; <a
                                  href="mailto:sales@solartechmachllp.org " class="text-muted text-decoration-none">
                                  sales@solartechmachllp.org </a></p>
                      </div>
                      {{-- <div class="phone-number">
                          <p class="mt-2 pt-1"><i class="fa-solid fa-headset"></i>&nbsp; <a href="tel:919326606599"
                                  class="text-muted"> +91-9326606599</a></p>
                      </div> --}}

                      <div class="d-flex align-items-center mt-2"> <i
                              class="fa-solid text-muted fa-location-dot d-block position-custom-icon"></i> &nbsp;<p
                              class="text-muted my-0 mx-2"> India | China | USA | Turkey | EU | Dubai & S.Africa<br>
                          </p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </footer>

  <!-- Footer Bottom Area -->

  <div class="footer-bottom">
      <div class="container">
          <div class="row justify-content-center align-items-center justify-content-center">
              <div class="text-center">
                  <p class="copyright-line text-white"> © {{ date('Y') }} All Rights Reserved Solar Techmach LLP |
                      Designed &
                      Developed By <a href="https://acetrot.com/" target="_blank" class="active-clr-bottom">Acetrot</a>
                  </p>
              </div>
          </div>
      </div>
  </div>

  <!-- Off-canvas Area-->
  <div class="offcanvas-overly"></div>

  <!-- back to top start -->
  <div class="progress-wrap toop">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
          <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
  </div>

  {{-- <div class="progress-wrap wa">
      <a href="https://api.whatsapp.com/send?phone=9326606599" class="float bounce" target="_blank" id="myID">
          <i class="fa fa-whatsapp my-float"></i>
      </a>
  </div> --}}
  <!-- Popper JS -->
  <script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
  <!-- Bootstrap JS -->
  <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
  <!-- Wow JS -->
  <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
  <!-- Way Points JS -->
  <script src="{{ asset('frontend/assets/js/jquery.waypoints.min.js') }}"></script>
  <!-- Counter Up JS -->
  <script src="{{ asset('frontend/assets/js/jquery.counterup.min.js') }}"></script>
  <!-- Owl Carousel JS -->
  <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
  <!-- Slick Slider JS -->
  <script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script>
  <!-- Magnific Popup JS -->
  <script src="{{ asset('frontend/assets/js/magnific-popup.min.js') }}"></script>
  <!-- Isotope JS -->
  <script src="{{ asset('frontend/assets/js/isotope-3.0.6-min.js') }}"></script>
  <!-- Sticky JS -->
  <script src="{{ asset('frontend/assets/js/jquery.sticky.js') }}"></script>
  <!-- Nice Select JS -->
  <script src="{{ asset('frontend/assets/js/jquery.nice-select.min.js') }}"></script>
  <!-- Back To Top JS -->
  <script src="{{ asset('frontend/assets/js/backToTop.js') }}"></script>
  <!-- Progress Bar JS -->
  <script src="{{ asset('frontend/assets/js/jquery.barfiller.js') }}"></script>
  <!-- Circle Progress Bar JS -->
  <script src="{{ asset('frontend/assets/js/circle-progress.min.js') }}"></script>
  <!-- Main JS -->
  <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

  <script>
      $(document).ready(function() {
          var text = ['Residential', 'Commercial', 'Utility', 'PV Energy', 'Other'];
          var index = 0;
          var changeText = setInterval(function() {
              if (index == text.length - 1)
                  index = 0;
              else
                  index++;
              $('.rotate-text').animate({
                  "opacity": "0",
                  "margin-left": "10px"
              }, 500, function() {
                  $('.rotate-text').text(text[index]);
                  $('.rotate-text').animate({
                      "opacity": "1",
                      "margin-left": "0"
                  }, 500);
              });

          }, 2000);
      });
  </script>




  <!--load WOW js from CDN-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

  <!--Initiate WOW js, can be at the bottom of your file -->
  <script>
      wow = new WOW({
          boxClass: 'wow', // default
          animateClass: 'animated', // change this if you are not using animate.css
          offset: 0, // default
          mobile: true, // keep it on mobile
          live: true,
          iteration: 10,
          duration: 3,
          delay: 2

          // track if element updates
      })
      wow.init();
  </script>


  <script>
      $("#home-1").owlCarousel({
          loop: true,
          autoplay: 5000,
          stopOnHover: true,
          navigation: true,
          singleItem: true,
          autoHeight: true,
          autoplayTimeout: 5000,
          navigationText: ['<div class="left">left</div>', '<div class="right">right</div>']
      });
  </script>
  <script>
      $(".main-btn,.product-btn,.bordered-btn").mousedown(function() {
          $(this).addClass("pressed");
      });

      $(".main-btn,.product-btn,.bordered-btn").mouseup(function() {
          $(this).removeClass("pressed");
      });



      $(".main-btn,.product-btn,.bordered-btn").on("tap", function() {
          $(this).removeClass("pressed");
      });

      $(".main-btn,.product-btn,.bordered-btn").mouseout(function() {
          $(this).removeClass("pressed");
      });
  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.8.3/lightgallery.min.js"
      integrity="sha512-n02TbYimj64qb98ed5WwkNiSw/i9Xlvv4Ehvhg0jLp3qMAMWCYUHbOMbppZ0vimtyiyw9NqNqxUZC4hq86f4aQ=="
      crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
      lightGallery(document.getElementById('lightgallery'))

      $(document).ready(function() {
          var itemsMainDiv = ('.MultiCarousel');
          var itemsDiv = ('.MultiCarousel-inner');
          var itemWidth = "";

          $('.leftLst, .rightLst').click(function() {
              var condition = $(this).hasClass("leftLst");
              if (condition)
                  click(0, this);
              else
                  click(1, this)
          });

          ResCarouselSize();




          $(window).resize(function() {
              ResCarouselSize();
          });

          //this function define the size of the items
          function ResCarouselSize() {
              var incno = 0;
              var dataItems = ("data-items");
              var itemClass = ('.item');
              var id = 0;
              var btnParentSb = '';
              var itemsSplit = '';
              var sampwidth = $(itemsMainDiv).width();
              var bodyWidth = $('body').width();
              $(itemsDiv).each(function() {
                  id = id + 1;
                  var itemNumbers = $(this).find(itemClass).length;
                  btnParentSb = $(this).parent().attr(dataItems);
                  itemsSplit = btnParentSb.split(',');
                  $(this).parent().attr("id", "MultiCarousel" + id);


                  if (bodyWidth >= 1200) {
                      incno = itemsSplit[2];
                      itemWidth = sampwidth / incno;
                  } else if (bodyWidth >= 992) {
                      incno = itemsSplit[2];
                      itemWidth = sampwidth / incno;
                  } else if (bodyWidth >= 768) {
                      incno = itemsSplit[1];
                      itemWidth = sampwidth / incno;
                  } else {
                      incno = itemsSplit[0];
                      itemWidth = sampwidth / incno;
                  }
                  $(this).css({
                      'transform': 'translateX(0px)',
                      'width': itemWidth * itemNumbers
                  });
                  $(this).find(itemClass).each(function() {
                      $(this).outerWidth(itemWidth);
                  });

                  $(".leftLst").addClass("over");
                  $(".rightLst").removeClass("over");

              });
          }


          //this function used to move the items
          function ResCarousel(e, el, s) {
              var leftBtn = ('.leftLst');
              var rightBtn = ('.rightLst');
              var translateXval = '';
              var divStyle = $(el + ' ' + itemsDiv).css('transform');
              var values = divStyle.match(/-?[\d\.]+/g);
              var xds = Math.abs(values[4]);
              if (e == 0) {
                  translateXval = parseInt(xds) - parseInt(itemWidth * s);
                  $(el + ' ' + rightBtn).removeClass("over");

                  if (translateXval <= itemWidth / 2) {
                      translateXval = 0;
                      $(el + ' ' + leftBtn).addClass("over");
                  }
              } else if (e == 1) {
                  var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
                  translateXval = parseInt(xds) + parseInt(itemWidth * s);
                  $(el + ' ' + leftBtn).removeClass("over");

                  if (translateXval >= itemsCondition - itemWidth / 2) {
                      translateXval = itemsCondition;
                      $(el + ' ' + rightBtn).addClass("over");
                  }
              }
              $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
          }

          //It is used to get some elements from btn
          function click(ell, ee) {
              var Parent = "#" + $(ee).parent().attr("id");
              var slide = $(Parent).attr("data-slide");
              ResCarousel(ell, Parent, slide);
          }

      });
  </script>

  <script src="{{ asset('backend/plugins/notification/snackbar/snackbar.min.js') }}"></script>
  <script>
      @if (Session::get('alert-type') == 'success')
          @if (Session::has('message'))
              Snackbar.show({
                  text: "{{ Session::get('message') }}",
                  pos: 'top-right',
                  actionTextColor: '#fff',
                  backgroundColor: '#1abc9c'
              });
          @endif
      @elseif (Session::get('alert-type') == 'info')
          @if (Session::has('message'))
              Snackbar.show({
                  text: "{{ Session::get('message') }}",
                  pos: 'top-right',
                  actionTextColor: '#fff',
                  backgroundColor: '#2196f3'
              });
          @endif
      @elseif (Session::get('alert-type') == 'error')
          @if (Session::has('message'))
              Snackbar.show({
                  text: "{{ Session::get('message') }}",
                  pos: 'top-right',
                  actionTextColor: '#fff',
                  backgroundColor: '#e7515a'
              });
          @endif
      @else
          @if (Session::has('message'))
              Snackbar.show({
                  text: "{{ Session::get('message') }}",
                  pos: 'top-right',
                  actionTextColor: '#fff',
                  backgroundColor: '#3b3f5c'
              });
          @endif
      @endif
  </script>
