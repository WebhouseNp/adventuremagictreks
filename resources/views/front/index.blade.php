@extends('front.layouts.app')
@section('content')
{{-- {{asset('assets/front/    ')}} --}}

<div id="carouselExampleIndicators" class="carousel slide my-carousel my-carousel banner" data-ride="carousel">
    <div class="banner-overlay"></div>
    <ol class="carousel-indicators">
        @foreach($sliders as $key=>$slider)
        <li data-target="#carouselExampleIndicators" data-slide-to="{{ $key }}" class="{{ $key==0?'active':'' }}"></li>
        @endforeach
        {{-- <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> --}}
    </ol>
    <div class="carousel-inner" role="listbox">
        @foreach($sliders as $key=>$slider)
        {{-- @dd($slider) --}}
        <div class="carousel-item {{ $key==0?'carousel-item active item':'' }}">
            <a href="#"><img src="{{asset('images/main/'.$slider->image)}}" alt=""></a>
            <div class="layer">
                <img src="{{asset('assets/front/images/Layer 44.png')}}" alt="">
            </div>
            <div class="offset-4 col-md-10 mx-auto px-0 carousel-caption animate__animated animate__fadeInUp wow">
                <h3>{{  $slider->title }}</h3>
                <h1>{{ $slider->subtitle }}</h1>
                <form action="{{ route('findAll') }}" method="get">
                    <div class="card-body row no-gutters align-items-center banner-search">
                        <!--end of col-->
                        <div class="col">
                            <input class="form-control form-control-borderless src_fild" name="title" id="title" type="search" placeholder="Search trip here:">
                            <button class="btn btn-lg btn-success" type="submit"><i class="fa fa-search" aria-hidden="true"></i>Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        @endforeach
        {{-- <div class="carousel-item active">
            <a href="#"><img src="{{asset('assets/front/images/banner.png')}}" alt=""></a>
            <div class="layer">
                <img src="{{asset('assets/front/images/Layer 44.png')}}" alt="">
            </div>
            <div class="offset-4 col-md-10 mx-auto px-0 carousel-caption animate__animated animate__fadeInUp wow">
                <h3><span>Welcome</span> Adventure Magic Treks</h3>
                <h1>THE BEST OPPORTUNITY OF TRAVEL WITH DISCOUNTED DEALS <span>to try new<br> adventure discoveries to enhance your wanderlust.</span></h1>
                <form>
                    <div class="card-body row no-gutters align-items-center banner-search">
                        <!--end of col-->
                        <div class="col">
                            <input class="form-control form-control-borderless src_fild" type="search" placeholder="Search trip here:">
                            <button class="btn btn-lg btn-success" type="submit"><i class="fa fa-search" aria-hidden="true"></i>Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="carousel-item">
            <a href="#"><img src="{{asset('assets/front/images/banner.png')}}" alt=""></a>
            <div class="layer">
                <img src="{{asset('assets/front/images/Layer 44.png')}}" alt="">
            </div>
            <div class="offset-4 col-md-10 mx-auto px-0 carousel-caption animate__animated animate__fadeInUp wow">
                <h3><span>Welcome</span> Adventure Magic Treks</h3>
                <h1>THE BEST OPPORTUNITY OF TRAVEL WITH DISCOUNTED DEALS <span>to try new<br> adventure discoveries to enhance your wanderlust.</span></h1>
                <form>
                    <div class="card-body row no-gutters align-items-center banner-search">
                        <!--end of col-->
                        <div class="col">
                            <input class="form-control form-control-borderless src_fild" type="search" placeholder="Search trip here:">
                            <button class="btn btn-lg btn-success" type="submit"><i class="fa fa-search" aria-hidden="true"></i>Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div> --}}
    </div>
</div>

<!--Main Part Starts Done-->
    <section class="welcome-block">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="welcome-left">
                        {{-- <h6>We ensure zero impact for the nature, culture and the <span>environment we travel</span></h6> --}}
                        <h2>Welcome to Adventure <span>Magic Treks</span></h2>
                        <p>{!! $dashboard_settings->aboutus_description_home !!}</p>
                        <a class="hvr-radial-out btn btn-primary" href="{{ route('aboutus') }}" role="button">Learn More</a>
                    </div>
                </div>
                <div class="col-md-5 welcome-img">
                    <a href="#"><img src="{{asset('images/main/'.$dashboard_settings->aboutus_side_image_home)}}" alt=""></a>
                    <div class="small-img">
                        <a target="_blank" href="{!! $dashboard_settings->aboutus_video_home !!}"><img src="{{asset('assets/front/images/wel.png')}}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!--Best Selling Done-->
    <section class="best-package">
        <div class="container">
            <div class="">
                <div class="selling-package same-title">
                    <h1>OUR BEST<span>Selling Packages</span></h1>
                    <p>{!! $dashboard_settings->best_seller_description !!}</p>
                    <div class="bestpackage">
                        <img src="{{asset('assets/front/images/best.png')}}" alt="">
                    </div>
                </div>
                <div class="packages">
                    <div class="package-sliders">
                        
                          {{--  @if (fmod($key, 2) == 0) --}}
                                <div class="row mb-5">
                                    @foreach ($bestSells as $key => $package)
                                    <div class="col-md-4 packwidth">
                                        <div class="package-box">
                                            <a href="{{route('packageDetails', $package->slug)}}"><img src="{{asset('images/main/'.$package->image)}}"></a>
                                            <div class="package-detail">
                                                <h4><a href="{{route('packageDetails', $package->slug)}}">{{ $package->package_name }}</a></h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <p><img src="{{asset('assets/front/images/calendar.png')}}">{{ $package->days_and_nights }}</p>
                                                    </div>
                                                    <div class="col-md-6 price text-right">
                                                        <h6>{{ $package->price }}</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                   {{-- @else
                                    <div class="col-md-4 packwidth">
                                        <div class="package-box">
                                            <a href="{{route('packageDetails', $package->slug)}}"><img src="{{asset('images/main/'.$package->image)}}"></a>
                                            <div class="package-detail">
                                                <h4><a href="{{route('packageDetails', $package->slug)}}">{{ $package->package_name }}</a></h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <p><img src="{{asset('assets/front/images/calendar.png')}}">{{ $package->days_and_nights }}</p>
                                                    </div>
                                                    <div class="col-md-6 price text-right">
                                                        <h6>{{ $package->price }}</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif --}}
                                </div>
                            
                    </div>
                </div>
            </div>
        </div>
    </section>

<!--Recomanded Done-->
    <section class="same-title recommanded-package packages">
        <div class="container">
            <h1>RECOMMENDED PACKAGES <span>For this time</span></h1>
            <p>{!! $dashboard_settings->recommanded_description !!}</p>
            <div class="row mb-5">
                @foreach ($recommandedPackages as $key => $package)
                    <div class="col-md-4">
                        <div class="package-box recommanded-box">
                            <a href="{{route('packageDetails', $package->slug)}}"><img src="{{asset('images/main/'.$package->image)}}"></a>
                            <div class="package-detail recommanded-package-detail">
                                <h4><a href="{{route('packageDetails', $package->slug)}}">{{ $package->package_name }}</a></h4>
                                <div class="recommanded-package-rating">
                                    <ul>
                                        {!! str_repeat('<span><i class="fa fa-star"></i></span>', $package->star) !!}
                                        {!! str_repeat('<span><i class="fa fa-star-o"></i></span>', 5 - $package->star) !!}
                                    </ul>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><img src="{{asset('assets/front/images/calendar.png')}}">{{ $package->days_and_nights }}</p>
                                    </div>
                                    <div class="col-md-6 price text-right">
                                        <h6>{{ $package->price }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

<!--Destination Done-->
    <section class="destination-wrap common-space">
        <div class="container">
            <div class="text-center">
                <h1>OUR DESTINATIONS</h1>
                <p>{!! $dashboard_settings->our_destinations_description !!}</p>
            </div>
            <div class="row mt-5 destination-slider">
                @foreach ($destinations as $destination)
                <div class="col-md-4">
                    <div class="destination-list">
                        
                        <a href="{{route('resolvepath.show',[$destination->slug])}}"><img src="{{asset('images/main/'. $destination->banner_image)}}" alt="">
                        <div class="destination-overlay"></div></a>
                        <div class="destinations common-an">
                            <h2><a href="{{route('resolvepath.show',[$destination->slug])}}">{{ $destination->country_name }}</a></h2>
                            @php
                                $packageCount = 0;
                            @endphp
                            @foreach ($destination->destinationtype as $desType)
                                @php
                                    $packageCount += $desType->packages->count();
                                @endphp
                            @endforeach
                            <h6>{{ $packageCount }} Packages</h6>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

<!--Why Travel With Us Done-->
    <section class="why-travel common-space">
        <div class="container">
            <span>Value before Business</span>
            <h1>WHY TRAVEL WITH US !</h1>

            <p>{!! $dashboard_settings->travelwithus_title !!}</p>
            <div class="row">
                <div class="col-md-6">
                    <ul>
                        {!! $dashboard_settings->travelwithus_detail !!}
                    </ul>
                </div>
                <div class="col-md-6">
                    <iframe width="100%" height="315" src="{!! $dashboard_settings->travelwithus_video_link !!}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="birds">
                    <img src="{{asset('assets/front/images/birds.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>

<!--Blogs Done-->
    @if (isset($blogs[0]))
    <section class="related-blog common-space">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-4">
                    <div class="blog-date">
                        <h6>07</h6>
                    </div>
                    <span>Tourism Recent News</span>
                    <h2>View Related <span>Blog</span></h2>
                </div>
            </div>
            <div class="row">
                @foreach ($blogs as $blog)
                <div class="col-md-6">
                    <div class="blogcontent">
                        <a href="{{route('blogDetails',$blog->slug)}}"><img src="{{asset('images/listing/'.$blog->banner_image)}}" alt=""></a>
                        <div class="blogcontent-overlay"></div>
                        <div class="blogcontent-details fadeIn-bottom">
                            <h5 class="blogcontent-title"><a href="{{route('blogDetails',$blog->slug)}}"><i class="fa fa-link" aria-hidden="true"></i></a></h5>
                        </div>
                    </div>
                    <div class="blog-text">
                        <h5><a href="{{route('blogDetails',$blog->slug)}}">{{$blog->title}}</a> </h5>
                        <p>
                        {{--    {!! str_limit($blog->short_description, 260) !!} --}}
                        {!! \Illuminate\Support\Str::limit($blog->short_description, 260, '...') !!}
                        </p>
                        <ul>
                            <li>{{$blog->created_at->format('d M, Y') }}</li>
                            <li class="blog-user">{{$blog->author}}</li>
                        </ul>
                        {{-- <ul>
                            <li><i class="fa fa-comment" aria-hidden="true"></i>126</li>
                            <li><i class="fa fa-user" aria-hidden="true"></i>36</li>
                        </ul> --}}
                        <a href="{{route('blogDetails',$blog->slug)}}">Read More</a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="blog-top-image">
                <a href="#"><img src="{{asset('assets/front/images/img7.png')}}" alt=""></a>
            </div>
        </div>
    </section>
    @endif

<!--Testimonial Done-->
    @if (isset($travelersreview[0]))
    <section class="common-space testimonials">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h6>Some of our <span>satisfied</span> clients</h6>
                    <h2>Our Happy Clients <span>Tourism</span></h2>
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($travelersreview as $key=>$review)
                            <div class="carousel-item {{ $key==0?'carousel-item active item':'' }}">
                                <p>
                                {!! \Illuminate\Support\Str::limit($review->words?? '',500,' ...') !!}
                                </p>
                                <div class="row mt-5">
                                    <div class="col-md-3">
                                        <div class="testimonial-img">
                                            <img src="{{asset('images/main/'.$review->image)}}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-9 testimonial-name">
                                        <h5>{{ $review->name }}</h5>
                                        <h6>{{ $review->country }}</h6>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-4 tripadvisor">
                    <a href="https://www.tripadvisor.com/Attraction_Review-g293890-d5998870-Reviews-Adventure_Magic_Treks_Expedition-Kathmandu_Kathmandu_Valley_Bagmati_Zone_Central_.html"><img src="{{asset('assets/front/images/img9.png')}}" alt=""></a>
                </div>
            </div>
        </div>
    </section>
    @endif

<!--Accreditations Done-->
    @if (isset($dashboard_associates[0]))
    <section class="common-space accreditation-payment">
        <div class="container">
            <div class="row">
                <div class="col-md-6 accreditation">
                    <h1>ACCREDITATTION</h1>
                    <ul>
                        @foreach ($dashboard_associates as $associate)
                        <li><a href="{{$associate->link}}"><img src="{{asset('images/main/'.$associate->image)}}" alt=""></a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-6 accreditation">
                    <h1>WE ACCEPT</h1>
                    <ul>
                        <li><a href="#"><img src="{{asset('images/main/'.$dashboard_settings->wa_image1)}}" alt=""></a></li>
                        <li><a href="#"><img src="{{asset('images/main/'.$dashboard_settings->wa_image2)}}" alt=""></a></li>
                        <li><a href="#"><img src="{{asset('images/main/'.$dashboard_settings->wa_image3)}}" alt=""></a></li>
                        <li><a href="#"><img src="{{asset('images/main/'.$dashboard_settings->wa_image4)}}" alt=""></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    @endif

<!--NewsLatter Done-->
    <section class="common-space newsletter">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>JOIN THE NEWSLETTER</h3>
                    <p>{!! $dashboard_settings->newslatter_description !!}</p>
                    <form action="{{route('saveSubscribers')}}" method="post">
                        @csrf
                        <div class="row no-gutters align-items-center">
                            <div class="col">
                                <input class="form-control form-control-borderless src_fild" name="email" id="email" type="text" placeholder="Enter your email address" required>
                            </div>
                            <div class="col-auto">
                                <button class="hvr-radial-out btn btn-success" type="submit">Signup Now</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                <div class="newsletter-img">
                    <a href="#"><img src="{{asset('assets/front/images/img15.png')}}" alt=""></a>
                </div>
            </div>
            </div>
        </div>
    </section>
    <!--Main Part Ends-->

@endsection
@push('scripts')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
       @if(Session::has('failed'))
            swal({
                  title: "Oops!",
                  text: "Payment Failed! Please try again Later!!",
                  icon: "error",
                });
        @endif
        @if(Session::has('success'))
            swal({
                  title: "Congratulations!",
                  text: "Your Payment has been done Successfully!",
                  icon: "success",
                });
        @endif

        @if(Session::has('cancel'))
            swal({
                  title: "Oops!",
                  text: "Payment Cancelled! Please try again Later!!",
                  icon: "error",
                });
        @endif
    </script>

@endpush