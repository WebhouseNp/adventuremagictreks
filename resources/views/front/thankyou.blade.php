@extends('front.layouts.app')
<title>Adventure Magic | Thank You</title>
@section('content')

{{-- {{asset('assets/front/    ')}} --}}

<!-- ========== Package Banner ========== -->
<div class="tourmaster-single-header" style="background-image: url('{{asset('images/main/'.$dashboard_settings->contactus_image)}}');">
    <div class="tourmaster-single-header-background-overlay"></div>
    <div class="tourmaster-single-header-overlay"></div>

    <div class="tourmaster-single-header-container tourmaster-container">
        <div class="tourmaster-single-header-container-inner">
            <div class="tourmaster-single-header-title-wrap tourmaster-item-pdlr">
                <div class="container">
                    <div class="row">
                        <div class="COL-12 trip-topic triphead-block p-0">
                            <div class="tourmaster-single-header-gallery-wrap"></div>

                            <h1 class="tourmaster-single-header-title">Thank You !!!</p>
                            </h1>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- ========== End of Package Banner ========== -->
@if( session()->get('contact') )
<section class="thankyou-wrap">
    <div class="container">
        <div class="row">
            <div class="thankyou text-center">
                <a href="https://www.adventuremagictreks.com/"><img src="{{asset('images/main/'.$dashboard_settings->logo)}}" alt=""></a>
                <div class="section-title color-title thanktitle">
                    <h1>THANK <span>YOU!</span></h1>
                </div>
                <i class="fa fa-check-circle-o" aria-hidden="true"></i>
                <p>Thank you for contacting us. We will get back to you soon . Meanwhile, if you have any questions, do not hesitate to contact us at +977-9841570317 anytime 24X7 or email at <a href="#">info@adventuremagictreks.com</a> </p>
                <p>We look forward to your great trip with us!</p>
                <p>Thank You & Best Regards,</p>
                <p>Adventure Magic Pvt. Ltd.<br>
                    </p>
                <div class="text-center thankyoubtn">
                    <a class="btn btn-primary" href="{{ url()->previous() }}" role="button">Back</a>
                </div>

            </div>
        </div>
    </div>
</section>
@endif

@if( session()->get('booking-form') )
<section class="thankyou-wrap">
    <div class="container">
        <div class="row">
            <div class="thankyou text-center">
                <a href="https://www.adventuremagictreks.com/"><img src="{{asset('images/main/'.$dashboard_settings->logo)}}" alt=""></a>
                <div class="section-title color-title thanktitle">
                    <h1>THANK <span>YOU!</span></h1>
                </div>
                <i class="fa fa-check-circle-o" aria-hidden="true"></i>
                <p>Thank you for contacting us. We will get back to you soon . Meanwhile, if you have any questions, do not hesitate to contact us at +977-9841570317 anytime 24X7 or email at <a href="#">info@adventuremagictreks.com</a> </p>
                <p>We look forward to your great trip with us!</p>
                <p>Thank You & Best Regards,</p>
                <p>Adventure Magic Pvt. Ltd.<br>
                    </p>
                <div class="text-center thankyoubtn">
                    <a class="btn btn-primary" href="{{ url()->previous() }}" role="button">Back</a>
                </div>

            </div>
        </div>
    </div>
</section>
@endif
@if( session()->get('quote') )
<section class="thankyou-wrap">
    <div class="container">
        <div class="row">
            <div class="thankyou text-center">
                <a href="https://www.adventuremagictreks.com/"><img src="{{asset('images/main/'.$dashboard_settings->logo)}}" alt=""></a>
                <div class="section-title color-title thanktitle">
                    <h1>THANK <span>YOU!</span></h1>
                </div>
                <i class="fa fa-check-circle-o" aria-hidden="true"></i>
                <p>Thank you for contacting us. We will get back to you soon . Meanwhile, if you have any questions, do not hesitate to contact us at +977-9841570317 anytime 24X7 or email at <a href="#">info@adventuremagictreks.com</a> </p>
                <p>We look forward to your great trip with us!</p>
                <p>Thank You & Best Regards,</p>
                <p>Adventure Magic Pvt. Ltd.<br>
                    </p>
                <div class="text-center thankyoubtn">
                    <a class="btn btn-primary" href="{{ url()->previous() }}" role="button">Back</a>
                </div>

            </div>
        </div>
    </div>
</section>
@endif

@if( session()->get('subscribe') )
<section class="thankyou-wrap">
    <div class="container">
        <div class="row">
            <div class="thankyou text-center">
                <a href="https://www.adventuremagictreks.com/"><img src="{{asset('images/main/'.$dashboard_settings->logo)}}" alt=""></a>
                <div class="section-title color-title thanktitle">
                    <h1>THANK <span>YOU!</span></h1>
                </div>
                <i class="fa fa-check-circle-o" aria-hidden="true"></i>
                <p>Thank you for contacting us. We will get back to you soon . Meanwhile, if you have any questions, do not hesitate to contact us at +977-9841570317 anytime 24X7 or email at <a href="#">info@adventuremagictreks.com</a> </p>
                <p>We look forward to your great trip with us!</p>
                <p>Thank You & Best Regards,</p>
                <p>Adventure Magic Pvt. Ltd.<br>
                    </p>
                <div class="text-center thankyoubtn">
                    <a class="btn btn-primary" href="{{ url()->previous() }}" role="button">Back</a>
                </div>

            </div>
        </div>
    </div>
</section>
@endif



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
<script type="text/javascript">
    $(document).ready(function() {
        @if(Session::has('message'))
        $('#myModal').modal('show');
        @endif
    });
</script>


@endpush