{{-- @extends('front.layouts.app-package') --}}
@extends('front.layouts.app')
@section('content')
{{-- {{asset('assets/front/   ')}} --}}

<!-- ========== Package Banner ========== -->
<div class="tourmaster-single-header inner-image newheading" style="background-image: url('{{asset('images/main/'.$packages->image)}}');">
    <div class="inner-overlay"></div>
    <div class="tourmaster-single-header-background-overlay"></div>
    <div class="tourmaster-single-header-overlay"></div>

    <div class="tourmaster-single-header-container tourmaster-container">
        <div class="tourmaster-single-header-container-inner">
            <div class="tourmaster-single-header-title-wrap tourmaster-item-pdlr">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-8 col-lg-9 col-xl-9 trip-topic triphead-block p-0 new">
                            <div class="tourmaster-single-header-gallery-wrap"></div>

                            <h1 class="tourmaster-single-header-title">{{ $packages->package_name }} - {{$packages->days_and_nights}}</p>
                            </h1>
                            <div class="trip-destinations advtrip-destinations">
                                <ul>
                                    <li><b>Cost :</b> {{ $packages->price }}</li>
                                    <li class="wa"><a target="_blank" href="https://wa.me/{{@$dashboard_settings->whatsapp}}"><i class="fa fa-whatsapp" aria-hidden="true"></i>Chat Via WhatsApp</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--<div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 trip-price triphead-block p-0">-->
                        <!--    <div class="price-tag">-->
                        <!--        <h3>{{ $packages->price }}</h3>-->
                        <!--    </div>-->

                        <!--</div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- ========== End of Package Banner ========== -->

<!-- ========== Package Features ========== -->
<div class="package-feature newpack newadvpack">
    <div class="newadvpack-overlay"></div>
    <div class="package-overlay">
        <div class="container">
            <div class="row">


                <div class="col-md-2 col-6">
                    <div class="package-feature-single">
                        <h5><i class="fa fa-clock-o" aria-hidden="true"></i>Duration</h5>
                        <h6>{{ $packages->days_and_nights }} </h6>
                    </div>
                </div>
                <div class="col-md-2 col-6">
                    <div class="package-feature-single">
                        <h5><i class="fa fa-flag" aria-hidden="true"></i>Activities</h5>
                        <h6>{{ $packages->activities }}</h6>
                    </div>
                </div>
                <div class="col-md-2 col-6">
                    <div class="package-feature-single">
                        <h5><i class="fa fa-bar-chart"></i>Grade</h5>
                        <h6>{{$packages->grade}}</h6>
                    </div>
                </div>
                <div class="col-md-2 col-6">
                    <div class="package-feature-single">
                        <h5><i class="fa fa-line-chart"></i>Altitude</h5>
                        <h6>{{ $packages->altitude }}</h6>
                    </div>
                </div>
                <div class="col-md-2 col-6">
                    <div class="package-feature-single">
                        <h5><i class="fa fa-user"></i>Group Size</h5>
                        <h6>{{ $packages->group_size }}</h6>
                    </div>
                </div>
                <div class="col-md-2 col-6">
                    <div class="package-feature-single">
                        <h5><i class="fa fa-calendar"></i>Best seasons</h5>
                        <h6>{{ $packages->best_season}}</h6>
                    </div>
                </div>



            </div>
        </div>
    </div>
</div>
<!-- ========== End of Package Features ========== -->

<!-- ========== Package Nav ========== -->
<div class="package-nav sticky-top" id="package-nav">
    <nav class="navbar navbar-expand navbar-light">
        <div class="container">

            <div class="collapse navbar-collapse newsubmenu" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item ">
                        <a class="nav-link scrollto active" href="#package-overview">Overview</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link scrollto" href="#package-itinerary">Itinerary</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scrollto" href="#package-inclusion">Inclusion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scrollto" href="#package-date-price">Dates & Price</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link scrollto" href="#helpful">Helpful Info</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scrollto" href="#trekking-gears">Trekking Gears</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scrollto" href="#gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scrollto" href="#map">Map</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scrollto" href="#faq">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scrollto" href="#package-review">Reviews</a>
                    </li>




                    {{-- <li class="nav-item">
                                <a class="nav-link" href="#package-overview">Everest Basecamp Trek Guide</a>
                            </li> --}}
                </ul>

                <div class="package-btn packagepopup">
                    <!--<a href="#" class="btn btn-request-fee">Request a free quote</a>-->
                    <button type="button" class="btn btn-primary request" data-toggle="modal" data-target="#exampleModal">
                        Inquire Now
                    </button>

                    <a href="{{route('bookingForm',['package_id'=>$packages->id])}}" class="btn btn-book-now">Book Now</a>
                </div>

            </div>
        </div>
    </nav>
</div>
<!-- ========== End of Package Nav ========== -->

<!-- ========== Package Details ========== -->
<div class="package-overview" id="package-overview">
    <div class="container">
        <div class="package-details-title">
            <h1>{{ $packages->overview_title }}</h1>
        </div>

        <p>
            {!! $packages->overview_description !!}
        </p>
        <hr>
    </div>
</div>
<!-- ========== End of Package Details ========== -->





<!-- ========== Package Itinerary ========== -->
@if(!$packages->packageitinerary->isEmpty())
<div class="package-itinerary advit" id="package-itinerary">
    <div class="container">
        <div class="package-details-title">
            <h1>Itinerary</h1>
        </div>
        @foreach(@$packages->packageitinerary as $key => $value)
        <div class="row mb-3">
            <div class="col-md-1">
                <h5>Day {{++$key}}:</h5>
            </div>
            <div class="col-md-11">
                <h4>{{ @$value->title }}.</h4>
                <p>{!! $value->lodging !!}</p>
            </div>
        </div>
        @endforeach

        <!-- Itinerary -->
        <ul class="accordion-list">
            {{-- @foreach(@$packages->packageitinerary as $key => $value)
                        <li>
                            <h3>Day {{++$key}}: {{ @$value->title }}</h3>
            <div class="answer">
                <p>{!! $value->lodging !!}</p>
                @if (isset($value->fooding))
                <p>{!! $value->fooding !!}</p>
                @endif


            </div>
            </li>
            @endforeach --}}

        </ul>
        <!-- Itinerary end -->
        <hr>
    </div>
</div>
@endif

<!-- ========== End of Package Itinerary ========== -->

<!-- ========== Package Inclusion Dynamic ========== -->
<div class="package-inclusion" id="package-inclusion">
    <div class="container">
        <div class="package-details-title">
            <h1>Inclusion</h1>
        </div>

        <div class="package-inclusion-widget include iee">
            <h5>Cost Inclusive:</h5>
            {!! $packages->includes_description !!}
        </div>
        <div class="package-details-title">
            <h1>Exclusion</h1>
        </div>
        <div class="package-inclusion-widget execude iee exe">
            <h5>Cost Exclusive</h5>
            {!! $packages->excludes_description !!}
        </div>
        <hr>
    </div>
</div>
<!-- ========== End of Package Inclusion ========== -->

<!-- ========== Package Dates & Price Dynamic========== -->
@if(!$packages->costanddate()->where('published',1)->get()->isEmpty())
<div class="package-date-price" id="package-date-price">
    <div class="container">
        <div class="package-details-title">
            <h1>Dates & <span>Price</span></h1>
            <p> {!! $dashboard_settings->package_date_price_description !!}
            </p>
        </div>


        <div class="package-date-price-wrapper">
            <div class="row">
                <div class="col-12">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                            <div class="table-responsive">
                                <table class="table table-striped" border="0" cellspacing="1">
                                    <tbody>
                                        <tr class="headrow October2022 first" title="October2022">
                                            <!--<td colspan="6">-->
                                            <!--    <h2>October, 2022</h2>-->
                                            <!--</td>-->
                                        </tr>
                                        <tr class="childrow October2022 first">
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Availability</th>
                                            <th>Cost / Person</th>
                                            <th>Join Group</th>
                                        </tr>
                                        @foreach(@$packages->costanddate()->where('published',1)->get() as $key => $data)
                                        @if($data->start_date >= Carbon\Carbon::now())
                                        <tr class="childrow October2022 first">
                                            <td>{{ $data->start_date }}</td>
                                            <td>{{ $data->end_date }}</td>
                                            <td>{{ $data->status }}</td>
                                            <td>{{ $data->price }} </td>
                                            <td>
                                                <a class="btn btn-warning" rel="nofollow" href="{{route('bookingForm',['package_id'=>$data->package->id,'started_date'=>$data->start_date,'end_date'=>$data->end_date,'costanddate_id'=>$data->id])}}" class="btn btn-request-fee book-now-button">Book Now</a>
                                                <!--<a class="btn btn-warning" trip="Everest Base Camp Trek" date="2022-10-12" rel="nofollow" href="inquiry.html?book=October 12,2022">Join Now</a></td>-->
                                        </tr>
                                        @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <hr>
    </div>
</div>
@endif
<!-- ========== End of Package Dates & Price ========== -->
<!-- ========== Helpful Info ========== -->
@if($packages->helpful_info)
<div class="package-overview" id="helpful">
    <div class="container">
        <div class="package-details-title">
            <h1>Helpful Info</h1>
        </div>

        <p>
            {!! $packages->helpful_info !!}
        </p>
        <hr>
    </div>
</div>
@endif

<!-- ========== End of Package Helpful Info ========== -->
<!-- ========== Trekking gears ========== -->
@if($packages->trekking_gears)
<div class="package-overview" id="trekking-gears">
    <div class="container">
        <div class="package-details-title">
            <h1>Trekking Gears</h1>
        </div>

        <p>
            {!! $packages->trekking_gears !!}
        </p>
        <hr>
    </div>
</div>
@endif

<!-- ========== End of Trekking gears ========== -->
<!-- ========== Gallery ========== -->
@if(!$packages->slider__images->isEmpty())
<div class="gallery-list" id="gallery">
    <div class="container">
        <div class="package-details-title">
            <h1>Gallery</h1>
        </div>
        <div class="gallery">
            <div class="row">
                @foreach(@$packages->slider__images as $detail)
                <div class="col-md-3">
                    <a class="example-image-link" href="{{ asset('images/package/multiple/'. $detail->sliderimages) }}" data-lightbox="example-set" data-title=""><img class="example-image" src="{{ asset('images/package/multiple/'. $detail->sliderimages) }}" alt="" /></a>
                </div>
                @endforeach
                <!--<div class="col-md-3">-->
                <!--    <a class="example-image-link" href="http://northnepal.webhousejapan.com/images/main/Wed-07-05-18-167066787-Annapurna%20circuit%20northnepaltrek%20(7)-min.jpg" data-lightbox="example-set" data-title=""><img class="example-image" src="http://northnepal.webhousejapan.com/images/main/Wed-07-05-18-167066787-Annapurna%20circuit%20northnepaltrek%20(7)-min.jpg" alt="" /></a>-->

                <!--</div>-->
                <!--<div class="col-md-3">-->
                <!--    <a class="example-image-link" href="http://northnepal.webhousejapan.com/images/main/Sun-10-46-22-2070843915-Everest%20High%20Pass%20northnepaltrek%20(2)-min.jpg" data-lightbox="example-set" data-title=""><img class="example-image" src="http://northnepal.webhousejapan.com/images/main/Sun-10-46-22-2070843915-Everest%20High%20Pass%20northnepaltrek%20(2)-min.jpg" alt="" /></a>-->

                <!--</div>-->
                <!--<div class="col-md-3">-->
                <!--    <a class="example-image-link" href="http://northnepal.webhousejapan.com/images/main/Wed-07-05-18-167066787-Annapurna%20circuit%20northnepaltrek%20(7)-min.jpg" data-lightbox="example-set" data-title=""><img class="example-image" src="http://northnepal.webhousejapan.com/images/main/Wed-07-05-18-167066787-Annapurna%20circuit%20northnepaltrek%20(7)-min.jpg" alt="" /></a>-->

                <!--</div>-->

            </div>
        </div>
        <hr>
    </div>
</div>
@endif
<!-- ========== End of Gallery ========== -->



<!-- ========== Map ========== -->
@if($packages->map_image)
<div class="map" id="map">
    <div class="container">
        <div class="package-details-title">
            <h1>Map</h1>
        </div>
        <a href="#"><img src="{{ asset('images/listing/'. $packages->map_image) }}" alt=""></a>
    </div>
</div>
@endif
<!-- ========== End of Map ========== -->

<!-- ========== Package FAQs Dynamic========== -->
@if(!$packages->packagefaq->isEmpty())
<div class="package-faq" id="faq">
    <div class="container">
        <div class="package-details-title">
            <h1>FAQ's</h1>
        </div>
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            @foreach(@$packages->packagefaq as $key => $data)
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading{{$key}}">
                    <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$key}}" aria-expanded="true" aria-controls="collapse{{$key}}">
                            {{$data->questions}}

                        </a>
                    </h4>
                </div>
                <div id="collapse{{$key}}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading{{$key}}">
                    <div class="panel-body">
                        {!! $data->answers !!}
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>
@endif
<!-- ========== End of Package FAQs ========== -->

<!-- ========== Package Reviews ========== -->
@php
$review = $packages->packagereview->count();
@endphp
@if(!$packages->packagereview->isEmpty())
<div class="package-review" id="package-review">
    <div class="container">
        <div class="package-details-title">
            <h1>Reviews<span>({{ $review }})</span></h1>
        </div>

    </div>

    <div class="package-review-wrapper">
        <div class="container">
            @foreach(@$packages->packagereview as $key => $data)
            <div class="package-review-single pss">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 tab-review-block">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 review-txt">
                                    <div class="media">
                                        <div class="newimg">
                                            @if (isset($data->image))
                                            <img alt="" src="{{asset('images/thumbnail/'. $data->image)}}" srcset="{{asset('images/thumbnail/'. $data->image)}}" class="avatar avatar-85 photo" loading="lazy">
                                            @else
                                            <img alt="" src="https://secure.gravatar.com/avatar/8fb5a8ac3a483628bcf57548814ea75a?s=85&amp;d=mm&amp;r=g" srcset="https://secure.gravatar.com/avatar/8fb5a8ac3a483628bcf57548814ea75a?s=170&amp;d=mm&amp;r=g 2x" class="avatar avatar-85 photo" loading="lazy">
                                            @endif
                                            <h6>{{ $data->name }}</h6>
                                            <p>{{ $data->country }}</p>
                                            <!--<a href="#">{{ $data->email }}</a>-->
                                            <!--<p>{{ $data->phone }}</p>-->
                                        </div>
                                        <div class="media-body review-rating">
                                            <h5>{{ $data->title }}</h5>
                                            <div class="top-rating">
                                                <!--<div class="overallrating">4.45</div>-->
                                                <div class="overallstars">
                                                    <!--<p>Excellent</p>-->
                                                    <span>
                                                        <span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span>

                                                    </span>
                                                </div>
                                            </div>
                                            <div class="review_desc">
                                                <p>{!! $data->description !!}</p>
                                                {{-- <a href="#" class="acc-link show-rdesc"><span>Show more</span><i class="lni-chevron-down"></i></a> --}}
                                            </div>
                                            <div class="footer-note fn">
                                                {{-- <h6>{{ $data->name }}</h6>
                                                <span>{{ $data->country }}</span> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @php
                                $exc = (($data->pre_trip_info + $data->meal + $data->guide + $data->transportation + $data->value_for_money +$data->accommodation)/6);
                                $excellent = round($exc, 2) + 0.45;
                                @endphp
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            @endforeach
            <hr>
        </div>
    </div>
</div>
@endif

<!-- ========== End of Package Reviews ========== -->


<!-- Modal -->
<div class="modal fade enquirypopup" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ $packages->package_name}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @if(Session::has('message'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    {!! Session::get('message') !!}
                </div>
                @endif
                <form action="{{route('requestQuote')}}" method="POST">
                    @csrf
                    <input type="hidden" name="package_id" value="{{$packages->id}}">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form">
                                <label for="name" class="">Full Name <span style="color:red ;">*</span></label>
                                <input type="text" id="name" name="full_name" class="form-control" placeholder="Write name here">
                                @if($errors->has('full_name'))
                                <div class="error" style="color: red;">{{ $errors->first('full_name') }}</div>
                                @endif
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="md-form">
                                <label for="name" class="">Nationality<span style="color:red ;">*</span></label>
                                <input type="text" id="name" name="nationality" class="form-control" placeholder="Write nationality here">
                                @if($errors->has('nationality'))
                                <div class="error" style="color: red;">{{ $errors->first('nationality') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="md-form">

                                <label for="subject" class="">Phone No:</label>
                                <input type="text" id="subject" name="phone_number" class="form-control" placeholder="Write here">
                                @if($errors->has('phone_number'))
                                <div class="error" style="color: red;">{{ $errors->first('phone_number') }}</div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="md-form">
                                <label for="name" class="">Email<span style="color:red ;">*</span></label>
                                <input type="text" id="name" name="email" class="form-control" placeholder="Write here">
                                @if($errors->has('email'))
                                <div class="error" style="color: red;">{{ $errors->first('email') }}</div>
                                @endif
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="md-form">
                            <label for="message">Travel Date:</label>
                                <input type="date" id="date" name="suitable_time"  class="form-control md-textarea" placeholder="Write here"></input>
                                @if($errors->has('suitable_time'))
                                <div class="error" style="color: red;">{{ $errors->first('suitable_time') }}</div>
                                @endif
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form">
                                <label for="name" class="">How did you found us?</label>
                                <select class="form-control" name="how_found" id="exampleFormControlSelect1">
                                    <option value="internet_search">Internet Search </option>
                                    <option value="recomendation">Recommendation</option>
                                    <option value="facebook">Facebook</option>
                                    <option value="instagram">Instagram</option>
                                    <option value="blog">Blog</option>
                                    <option value="travel_show">Travel Show</option>
                                    <option value="trip_advisor">Trip Advisor</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <div class="row">


                        <div class="col-md-12">

                            <div class="md-form">
                                <label for="message">Message:</label>
                                <textarea type="text" id="message" name="message" rows="5" class="form-control md-textarea" placeholder="Write here"></textarea>
                                @if($errors->has('message'))
                                <div class="error" style="color: red;">{{ $errors->first('message') }}</div>
                                @endif
                            </div>

                        </div>
                        <div class="col-md-12">

                            

                        </div>
                        <div class="col-md-12">
                            <span style="color:red ;">The * given fields are Required Fields. Please fill those forms before submitting!</span>
                        </div>
                         <div class="form-group">
                            <div class=" g-recaptcha" data-sitekey="6LfE_EwjAAAAAOgYmYvwBSOh4_rBTP97_0nPqx4C"></div>
                            @if ($errors->has('g-recaptcha-response'))
                            <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                            @endif
                        </div> 

                    </div>

                    <button type="submit" class="btn btn-secondary">Submit</button>

                </form>
            </div>
            <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Submit</button>
       
      </div> -->
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://www.google.com/recaptcha/api.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        @if(Session::has('errors'))
        $('#exampleModal').modal('show');
        @endif
        @if(Session::has('message'))
        $('#exampleModal').modal('show');
        @endif
    });

    $(document).ready(function() {
        @if(Session::has('errors'))
        $('#exampleModal').modal('show');
        @endif
        @if(Session::has('message'))
        $('#exampleModal').modal('show');
        @endif
    });
</script>


@endpush