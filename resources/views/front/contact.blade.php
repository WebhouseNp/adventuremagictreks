@extends('front.layouts.app')
@section('content')

{{-- {{asset('assets/front/    ')}} --}}

<!-- ========== Package Banner ========== -->
<!--<div class="tourmaster-single-header" style="background-image: url('{{asset('images/main/'.$dashboard_settings->contactus_image)}}');">-->
<div class="tourmaster-single-header inner-image advcontacthead" style="background-image: url('{{asset('images/main/'.$dashboard_settings->contactus_image)}}');">
    <div class="inner-overlay"></div>
    <div class="tourmaster-single-header-background-overlay"></div>
    <div class="tourmaster-single-header-overlay"></div>

    <div class="tourmaster-single-header-container tourmaster-container">
        <div class="tourmaster-single-header-container-inner">
            <div class="tourmaster-single-header-title-wrap tourmaster-item-pdlr">
                <div class="container">
                    <div class="row">
                        <div class="COL-12 trip-topic triphead-block p-0">
                            <div class="tourmaster-single-header-gallery-wrap"></div>

                            <h1 class="tourmaster-single-header-title">Contact Us</p>
                            </h1>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- ========== End of Package Banner ========== -->

<!-- ========== Contact Form ========== -->
<section class="contact-us common-title">
    <div class="container">
        <div class="row contact-list">
            <div class="col-md-6 same-title">
                <h1>Get In <span>Touch</span></h1>

                <div class="widget-container">
                    <div class="widget-icon-wrapper row">
                        <div class="col-md-2 col-3">
                            <div class="widget-icon-box">
                                <i class="fa fa-headphones"></i>
                            </div>
                        </div>
                        <div class="col-md-10 col-7">
                            <div class="widget-icon-content">
                                <h4 class="widget-icon-content-title">
                                    <span>
                                        Support
                                    </span>
                                </h4>
                                <p class="widget-icon-content-description">
                                    {{ $dashboard_settings->email }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="widget-icon-wrapper row">
                        <div class="col-md-2 col-3">
                            <div class="widget-icon-box">
                                <i class="fa fa-mobile"></i>
                            </div>
                        </div>
                        <div class="col-md-10 col-7">
                            <div class="widget-icon-content">
                                <h4 class="widget-icon-content-title">
                                    <span>
                                        Business
                                    </span>
                                </h4>
                                <p class="widget-icon-content-description">
                                    {{ $dashboard_settings->telephone }}<br>
                                    {{ $dashboard_settings->mobile }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="widget-icon-wrapper row">
                        <div class="col-md-2 col-3">
                            <div class="widget-icon-box">
                                <i class="fa fa-map-marker"></i>
                            </div>
                        </div>
                        <div class="col-md-10 col-7">
                            <div class="widget-icon-content">
                                <h4 class="widget-icon-content-title">
                                    <span>
                                        Adventure Magic Treks And Expedition
                                    </span>
                                </h4>
                                <p class="widget-icon-content-description">
                                    {{ $dashboard_settings->address }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--<div class="widget-icon-wrapper row">-->
                    <!--    <div class="col-md-2 col-3">-->
                    <!--        <div class="widget-icon-box">-->
                    <!--            <i class="fa fa-map-marker"></i>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--    <div class="col-md-10 col-7">-->
                    <!--        <div class="widget-icon-content">-->
                    <!--            <h4 class="widget-icon-content-title">-->
                    <!--                <span>-->
                    <!--                    USA Contact-->
                    <!--                </span>-->
                    <!--            </h4>-->
                    <!--            <p class="widget-icon-content-description">-->
                    <!--                Adventure Magics Nepal Pvt. Ltd- Tour & Trekking<br> USA & Canada-->
                    <!--            </p>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>
            </div>

            <div class="col-md-6 same-title">
                <h1>Send Us a<span> Message</span></h1>
                <p class="mb-4">
                    {!! $dashboard_settings->contactus_description !!}
                    {{-- Have any questions? Send us a message and we will get back <br> to you as soon as possible. --}}
                </p>

                @if(session('message'))
                <div class="alert alert-info alert-dismissible" id="successMessage">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{session('message')}}
                </div>
                @endif
                <form class="form" method="post" action="{{route('enquirySave')}}">
                    @csrf

                    <div class="">
                        <div class="md-form mb-3">
                            <input type="text" id="name" name="name" class="form-control" placeholder="Full Name" required>
                        </div>
                        <div class="md-form mb-3">
                            <input type="email" id="email" name="email" class="form-control" placeholder="Email Address" required>
                        </div>
                        <div class="md-form mb-3">
                            <label>Travel Date</label>
                            <input type="date" id="date" name="suitable_time" rows="2" class="form-control md-textarea" placeholder="Select Your Suitable Date to Travel" ></input>
                        </div>
                        <div class="md-form mb-3">
                            <input type="text" id="number" name="number" class="form-control" placeholder="Phone/Mobile">
                        </div>
                        <div class="md-form mb-3">
                            <select name="how_found">
                                <option value=""> How did you found us?</option>
                                <option value="internet_search">Internet Search </option>
                                <option value="recommendation">Recommendation</option>
                                <option value="facebook">Facebook</option>
                                <option value="instagram">Instagram</option>
                                <option value="blog">Blog</option>
                                <option value="travel_show">Travel Show</option>
                                <option value="trip_advisor">Trip Advisor</option>
                            </select>
                        </div>

                        <div class="md-form mb-3">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" placeholder="Message" required></textarea>
                        </div>
                        
                        <div class="form-group">
                            <div class=" g-recaptcha" data-sitekey="6LfE_EwjAAAAAOgYmYvwBSOh4_rBTP97_0nPqx4C"></div>
                            @if ($errors->has('g-recaptcha-response'))
                            <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                            @endif
                        </div>
                        <div class="popbtn">
                            <button type="submit" name="contactus" value="Submit" class="btn btn-link hvr-radial-out">Submit</button>
                        </div>

                    </div>
                    <!--Grid row -->
                </form>

            </div>
        </div>
    </div>
</section>
<section class="map">
    <iframe src="{!! $dashboard_settings->googlemap !!}" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
<!-- Modal -->
<div id="myModal" class="modal fade popupbox" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body text-center">
                <h3>Thank You!!</h3>
                <h5>Your Details Has Been Successfully Submitted..</h5>
            </div>
            <div class="modal-footer contact-us">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- ========== End of Contact Form ========== -->
@endsection
@push('scripts')
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js"></script>



@endpush