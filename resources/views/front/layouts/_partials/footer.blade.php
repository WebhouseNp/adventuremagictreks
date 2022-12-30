<!--Footer Part Starts-->
<footer>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                <h5>COMPANY</h5>
                <ul>
                    <li><a href="{{ route('PaymentForm') }}">Online Payment</a></li>
                    <li><a href="{{ route('whoweare') }}">Who we are</a></li>
                     <li><a href="{{route('resolvepath.show', 'why-travel-with-us')}}">Why Travel With Us</a></li>
                      <li><a href="{{ route('team') }}">Our Team</a></li>
                       <!--<li><a href="{{route('resolvepath.show', 'privacy-policy')}}">Privacy Policy</a></li>-->
                        <li><a href="{{route('resolvepath.show', 'terms-conditions')}}">Travel Terms</a></li>
                </ul>
            </div>
             <div class="mx-auto col-md-3">
                 <h5>TRAVEL INFORMATION</h5>
                <ul>
                  {{-- @foreach ($dashboard_pages->where('travel_guide', 1) as $page) --}}
                  
                    @foreach ($dashboard_pages->take(5) as $page)
                    <li><a href="{{route('resolvepath.show',$page->slug)}}">{{ $page->title }}</a></li>
                    @endforeach
                    {{-- <li><a href="{{ route('travelGuide') }}">Travel Guide</a></li> --}}
                </ul>
             </div>
              <div class="col-md-3">
                <h5>Trekking By Region</h5>
                <ul>
                    @foreach($dashboard_regions as $region)
                        <li><a href="{{route('category',$region->slug)}}">{{$region->name}}</a></li>
                    @endforeach
                    
                </ul>
            </div>
            <div class="col-md-4">
                <h5>CONTACT US</h5>
                <h6>Adventure Magic Treks And Expedition</h6>
                <div class="row">
                    
                    <div class="col-md-1">
                       <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-11">
                        <a href="">{{$dashboard_settings->address}}</a>
                    </div>
                </div>
                  <div class="row">
                    <div class="col-md-1">
                       <i class="fa fa-mobile" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-11">
                        <a href="tel:{{$dashboard_settings->telephone}}">{{$dashboard_settings->telephone}}</a>
                    </div>
                </div>
                  <div class="row">
                    <div class="col-md-1">
                       <i class="fa fa-envelope" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-11">
                        <a href="mailto:{{$dashboard_settings->email}}">{{$dashboard_settings->email}}</a>
                    </div>
                </div>

            </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    @if (isset($dashboard_settings->logo))
                    <a class="" href="/"><img src="{{asset('images/main/'.$dashboard_settings->logo)}}" alt=""></a>
                    @else
                    <a class="" href="/"><img src="{{asset('assets/front/images/logo.png')}}" alt=""></a>
                    @endif
                    <!--<a href="/"><a><img src="{{asset('images/main/'.$dashboard_settings->logo)}}"></a>-->
                </div>
                <div class="col-md-4 pt-5">
                    <p>© 2022 Adventure Magic Treks</p>
                </div>
                <div class="col-md-3 footer-socail-media pt-5">
                    <ul>
                        <li><a href="{{$dashboard_settings->facebook}}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="{{$dashboard_settings->twitter}}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="{{$dashboard_settings->instagram}}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="{{$dashboard_settings->linkedin}}"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="text-right developed">
                <p>Developed By: <a href="https://webhousenepal.com">WEB HOUSE NEPAL</a></p>
            </div>
        </div>
    </div>
</footer>
 <!--Footer Part Ends-->
<!--js files starts-->
<!-- {{asset('assets/front/    ')}} -->

<script type='text/javascript' src="{{asset('assets/front/js/jquery.min.js')}}"></script>
<script type='text/javascript' src="{{asset('assets/front/js/bootstrap.min.js')}}"></script>
<script type='text/javascript' src="{{asset('assets/front/js/bootstrap.js')}}"></script>
<script type='text/javascript' src="{{asset('assets/front/js/slick.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/wow.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/lightbox.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/main.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/superfish.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/jquery-ui.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/swiper-bundle.min.js')}}"></script>
<!--js files ends-->
<!--script files starts-->
@stack('scripts')
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/59882063dbb01a218b4db125/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<script>
$('.package-slider').slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    swipe: false,
    infinite: true,
    default: true,
    arrow: true,
    responsive: [{
            breakpoint: 1025,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: false
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }

    ]
});
</script>
<script>
$('.destination-slider').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    swipe: false,
    infinite: true,
    default: true,
    arrow: true,
    responsive: [{
            breakpoint: 1025,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: false
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }

    ]
});
</script>
<script>
new WOW().init();
</script>

    <script>
    let navbarlink = select('#package-nav .scrollto', true)
  const navbarlinksActive = () => {
    let position = window.scrollY + 200
    navbarlink.forEach(navbarlink => {
      if (!navbarlink.hash) return
      let section = select(navbarlink.hash)
      if (!section) return
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        navbarlink.classList.add('active')
      } else {
        navbarlink.classList.remove('active')
      }
    })
  }
  window.addEventListener('load', navbarlinksActive)
  onscroll(document, navbarlinksActive)

})();
</script>
<script>

		(function($){ //create closure so we can safely use $ as alias for jQuery

			$(document).ready(function(){

				// initialise plugin
				var example = $('#example').superfish({
					//add options here if required
				});

				// buttons to demonstrate Superfish's public methods
				$('.destroy').on('click', function(){
					example.superfish('destroy');
				});

				$('.init').on('click', function(){
					example.superfish();
				});

				$('.open').on('click', function(){
					example.children('li:first').superfish('show');
				});

				$('.close').on('click', function(){
					example.children('li:first').superfish('hide');
				});
			});

		})(jQuery);


		</script>
<!--script files ends-->
</body>

</html>