<!doctype html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{$og['title']??''}}</title>
    <meta name="description" content="{{$og['description']??''}}">
    <meta name="keywords" content="{{$og['keywords']??''}}">
    {{-- @yield('title') --}}
    <!-- Favicon -->
    @if($dashboard_settings->favicon)
    <link href="{{asset('images/main/'. $dashboard_settings->favicon)}}" rel="icon">
    @else
    <a class="navbar-brand" href="/"><img src="{{asset('assets/front/images/logo.png')}}" alt=""></a>
    @endif

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="{{asset('assets/front/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/front/css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/front/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/front/css/hover-min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/front/css/lightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/front/css/slick-theme.css')}}" rel="stylesheet">
    <link href="{{asset('assets/front/css/slick.css')}}" rel="stylesheet">
    <link href="{{asset('assets/front/css/superfish.css')}}" rel="stylesheet">
     <link href="{{asset('assets/front/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('assets/front/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <!--Header Part Starts-->
    <header>
        <nav class="my-nav navbar navbar-expand-lg ">
            <div class="container">
                @if (isset($dashboard_settings->logo))
                    <a class="navbar-brand" href="/"><img src="{{asset('images/main/'.$dashboard_settings->logo)}}" alt=""></a>
                    <a class="navbar-brand mobile-view" href="/"><img src="{{asset('assets/front/images/logo1.JPG')}}" alt=""></a>
                    @else
                    <a class="navbar-brand" href="/"><img src="{{asset('assets/front/images/logo.png')}}" alt=""></a>
                    <a class="navbar-brand mobile-view" href="/"><img src="{{asset('images/main/'.$dashboard_settings->logo)}}" alt=""></a>
                    @endif
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i>
                    </span>
                </button>
                <div class="menu row">
                    <div class="offset-5 header-top text-right">
                        <ul>
                            <li><a href="mailto:{{$dashboard_settings->email}}"><i class="fa fa-envelope" aria-hidden="true"></i>{{$dashboard_settings->email}}</a></li>
                            <li><a href="tel:{{$dashboard_settings->telephone}}"><i class="fa fa-phone" aria-hidden="true"></i>{{@$dashboard_settings->telephone}}</a></li>
                            <li><a target="_blank" href="https://wa.me/{{@$dashboard_settings->whatsapp}}"><i class="fa fa-whatsapp" aria-hidden="true"></i>{{@$dashboard_settings->whatsapp}}</a></li>
                        </ul>
                    </div>
                    <div class="collapse navbar-collapse main-menu wrap newmenu" id="navbarCollapse">
                        	
                        <ul class="sf-menu ml-auto" id="example">
                            <!--<li class="nav-item active">-->
                            <!--    <a class="nav-link" href="#">Company <span class="sr-only">(current)</span></a>-->
                            <!--</li>-->
                            <li class="current"><a class="" href='{{ route('aboutus') }}'>Company<span class='toggle'></span></a>
                                <ul>
                                    <li><a href="{{ route('whoweare') }}">Who are We</a></li>
                                    <!--<li><a href="{{route('resolvepath.show', 'why-travel-with-us')}}">Why Travel With Us</a></li>-->
                                    <li><a href="{{ route('team') }}">Our Team</a></li>
                                    <li><a href="{{route('resolvepath.show', 'privacy-policy')}}">Privacy Policy</a></li>
                                    <li><a href="{{route('resolvepath.show', 'terms-conditions')}}">Travel Terms & Conditions</a></li>
                                    <li><a href="{{route('blogList')}}">Travel Blog</a></li>
                                    <li><a href="{{route('travelerReview')}}">Travelers Review</a></li>
                                </ul>
                                
                            </li>
                            
                            
                             <li class="nav-item current"><a class="nav-link" href='{{ route('destinationList') }}'>Destinations<span class='toggle'></span></a>
                                <ul>
                                    @foreach($dashboard_destinations as $destinations)
                                    <li class="current"><a href='{{route('resolvepath.show', $destinations->slug)}}'>{{$destinations->country_name}}<span class='toggle2'></span></a>
                                        <ul>
                                             @foreach($destinations->destinationtype()->where('published',1)->orderBy('order_row')->get() as $destination)
                                            <!--<li><a href='{{route('resolvepath.showTwoSlug',[$destinations->slug, $destination->slug])}}'>{{$destination->title}}</a></li>-->
                                            <li><a href='{{route('resolvepath.show',$destination->slug)}}'>{{$destination->title}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    @endforeach
                                    
                                </ul>
                            </li>
                            
                            <li class="nav-item"><a class="nav-link" href='{{ route('classicVacationList') }}'>Our Special<span class='toggle'></span></a>
                                <ul class='dropdown'>
                                  @foreach($dashboard_classicVacations as $package)
                                    <li><a href="{{route('packageDetails',$package->slug)}}">{{$package->package_name}}</a></li>
                                    @endforeach
                                </ul>
                                
                            </li>
                            
                            <li class="nav-item"><a class="nav-link" href='{{ route('travelstyle') }}'>Travel Style<span class='toggle'></span></a>
                                <ul class='dropdown'>
                                    @foreach($dashboard_travelStyle as $travelStyle)
                                  <li><a href="{{route('travelStyleDetail', $travelStyle->slug)}}">{{ $travelStyle->title }}</a></li>
                                  @endforeach
                                </ul>
                                
                            </li>
                            
                            <!-- <li class="nav-item">
                                <a class="nav-link " href="{{ route('travelGuide') }}">Travel Information</a>
                            </li> -->
                            <li class="nav-item"><a class="nav-link" href='{{ route('travelGuide') }}'>Travel Information<span class='toggle'></span></a>
                                <ul class='dropdown'>
                                @foreach ($dashboard_pages as $page)
                                    <li><a href="{{route('resolvepath.show',$page->slug)}}">{{ $page->title }}</a></li>
                                @endforeach
                                </ul>
                                
                            </li>
                        </li>
                            <li class="nav-item">
                                <a class="nav-link " href="{{ route('contactUS') }}">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

    </header>
    <!--Header Part Ends-->