@extends('admin.layouts.app')

@section('page_title')
Dashboard
@endsection

@section('content')

    <div class="page-content fade-in-up">
        <form method="post" action="{{route('setting.save', $detail->id)}}" enctype="multipart/form-data">
            {{csrf_field()}}
            @if($siteSettingModule['edit_access']==1 || $siteSettingModule['full_access']==1)
                <input type="hidden" name="_method" value="PUT">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">SEO Details</div>

                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-plus"></i></a>
                                    <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                    <!-- <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; transform: translate3d(41px, 20px, 0px); top: 0px; left: 0px; will-change: transform;">
                                        <a class="dropdown-item">option 1</a>
                                        <a class="dropdown-item">option 2</a>
                                    </div> -->
                                </div>
                            </div>
                            @include('admin.layouts._partials.messages.info')
                            <div class="ibox-body" style="display:none;">

                            <div class="form-group">
                                <label>Page Title</label>
                                <input class="form-control" type="text" name="page_title" value="{{$detail->page_title}}" placeholder="Enter Page Title">
                            </div>

                                        <!-- <div class="form-group">
                                            <label>Meta Title</label>
                                            <input class="form-control" type="text" name="meta_title" value="{{$detail->meta_title}}" placeholder="Enter Meta Title">
                                        </div> -->

                                        <div class="form-group">
                                            <label>Meta Description</label>
                                            <input class="form-control" type="text" value="{{$detail->meta_description}}" name="meta_description" placeholder="Enter Meta Description">
                                        </div>

                                        <div class="form-group">
                                            <label>Keywords</label>
                                            <input class="form-control" type="text" value="{{$detail->keyword}}" name="keyword" placeholder="Enter Keywords">
                                        </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!--<div class="row">-->
                <!--    <div class="col-md-12">-->
                <!--        <div class="ibox">-->
                <!--            <div class="ibox-head">-->
                <!--                <div class="ibox-title">Welcome To Adventure Magic</div>-->
                <!--                <div class="ibox-tools">-->
                <!--                    <a class="ibox-collapse"><i class="fa fa-plus"></i></a>-->
                <!--                    <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>-->
                                    <!-- <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; transform: translate3d(41px, 20px, 0px); top: 0px; left: 0px; will-change: transform;">
                                       <a class="dropdown-item">option 1</a>-->
                <!--                        <a class="dropdown-item">option 2</a>-->
                <!--                    </div> -->
                <!--                </div>-->
                <!--            </div>-->
                <!--            <div class="ibox-body" style="display:none;">-->
                <!--                <div class="form-group">-->
                <!--                    <label>Title</label>-->
                <!--                    <input class="form-control" type="text" name="vacation_title" value="{{$detail->vacation_title}}" placeholder="Enter Title">-->
                <!--                </div>-->
                <!--                <div class="form-group">-->
                <!--                    <label>Description</label>-->
                <!--                    <textarea class="form-control" name="vacation_detail" rows="3" cols="80">{{$detail->vacation_detail}}</textarea>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->

                <div class="row">
                    <div class="col-md-12">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Why Travel With Us (Home page)</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-plus"></i></a>
                                    <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                </div>
                            </div>
                            <div class="ibox-body" style="display:none;">
                                <div class="form-group">
                                    <label>Sub Title</label>
                                    <input class="form-control" type="text" name="travelwithus_title" value="{{$detail->travelwithus_title}}" placeholder="Enter Sub Title">
                                </div>
                                <div class="form-group">
                                    <label>Video Link (Youtube)</label>
                                    <input class="form-control" type="text" name="travelwithus_video_link" value="{{$detail->travelwithus_video_link}}" placeholder="Enter Video Link">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" name="travelwithus_detail" rows="3" cols="80">{{$detail->travelwithus_detail}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Who We Are</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-plus"></i></a>
                                    <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                </div>
                            </div>
                            <div class="ibox-body" style="display:none;">
                                <div class="row">
                                    <div class="col-sm-12 form-group">
                                        <label>Who We Are Page Banner Image</label>
                                        <input type="file" id="fileUpload" name="whoweare_banner" value="{{$detail->whoweare_banner}}" class="form-control">
                                        <div id="wrapper" class="mt-2">
                                            <div id="image-holder">
                                                @if($detail->whoweare_banner)
                                                    <img src="{{asset('images/main/'.$detail->whoweare_banner)}}" alt="" class="thumb-image" height="120px" width="120px">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>First Heading</label>
                                    <input class="form-control" type="text" name="title1" value="{{$detail->title1}}" placeholder="Adventure Magic is a Top quality tour operation in Nepal.">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" name="title2" rows="3" cols="80">{{$detail->title2}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Second Heading</label>
                                    <input class="form-control" type="text" name="title3" value="{{$detail->title3}}" placeholder="Why Adventure Magic?">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" name="title4" rows="3" cols="80">{{$detail->title4}}</textarea>
                                </div>
                                {{-- <h3>Safetly & Quality Tips</h3>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea class="form-control" name="sqt_description" rows="3" cols="80">{{$detail->sqt_description}}</textarea>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>First Image</label>
                                            <input type="file" id="fileUpload" name="sqt_image1" value="{{$detail->sqt_image1}}" class="form-control">
                                            <div id="wrapper" class="mt-2">
                                                <div id="image-holder">
                                                    @if($detail->sqt_image1)
                                                        <img src="{{asset('images/main/'.$detail->sqt_image1)}}" alt="" class="thumb-image" height="120px" width="120px">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Second Image</label>
                                            <input type="file" id="fileUpload" name="sqt_image2" value="{{$detail->sqt_image2}}" class="form-control">
                                            <div id="wrapper" class="mt-2">
                                                <div id="image-holder">
                                                    @if($detail->sqt_image2)
                                                        <img src="{{asset('images/main/'.$detail->sqt_image2)}}" alt="" class="thumb-image" height="120px" width="120px">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h3>Personalized Services & Customers Satisfaction</h3>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea class="form-control" name="ps_description" rows="3" cols="80">{{$detail->ps_description}}</textarea>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>First Image</label>
                                            <input type="file" id="fileUpload" name="ps_image1" value="{{$detail->ps_image1}}" class="form-control">
                                            <div id="wrapper" class="mt-2">
                                                <div id="image-holder">
                                                    @if($detail->ps_image1)
                                                        <img src="{{asset('images/main/'.$detail->ps_image1)}}" alt="" class="thumb-image" height="120px" width="120px">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Second Image</label>
                                            <input type="file" id="fileUpload" name="ps_image2" value="{{$detail->ps_image2}}" class="form-control">
                                            <div id="wrapper" class="mt-2">
                                                <div id="image-holder">
                                                    @if($detail->ps_image2)
                                                        <img src="{{asset('images/main/'.$detail->ps_image2)}}" alt="" class="thumb-image" height="120px" width="120px">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Why Us</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-plus"></i></a>
                                    <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                </div>
                            </div>
                            <div class="ibox-body" style="display:none;">
                                <div class="row">
                                    <div class="col-sm-12 form-group">
                                        <label>Why Us Page Banner Image</label>
                                        <input type="file" id="fileUpload" name="whyus_banner" value="{{$detail->whyus_banner}}" class="form-control">
                                        <div id="wrapper" class="mt-2">
                                            <div id="image-holder">
                                                @if($detail->whyus_banner)
                                                    <img src="{{asset('images/main/'.$detail->whyus_banner)}}" alt="" class="thumb-image" height="120px" width="120px">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>First Heading</label>
                                    <input class="form-control" type="text" name="whyus_title1" value="{{$detail->whyus_title1}}" placeholder="Adventure Magic is a Top quality tour operation in Nepal.">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" name="whyus_title2" rows="3" cols="80">{{$detail->whyus_title2}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Second Heading</label>
                                    <input class="form-control" type="text" name="whyus_title3" value="{{$detail->whyus_title3}}" placeholder="Why Adventure Magic?">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" name="whyus_title4" rows="3" cols="80">{{$detail->whyus_title4}}</textarea>
                                </div>
                                    {{-- <h3>Safetly & Quality Tips</h3>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea class="form-control" name="whyus_sqt_description" rows="3" cols="80">{{$detail->whyus_sqt_description}}</textarea>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>First Image</label>
                                            <input type="file" id="fileUpload" name="whyus_sqt_image1" value="{{$detail->whyus_sqt_image1}}" class="form-control">
                                            <div id="wrapper" class="mt-2">
                                                <div id="image-holder">
                                                    @if($detail->whyus_sqt_image1)
                                                        <img src="{{asset('images/main/'.$detail->whyus_sqt_image1)}}" alt="" class="thumb-image" height="120px" width="120px">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h3>Personalized Services & Customers Satisfaction</h3>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea class="form-control" name="whyus_ps_description" rows="3" cols="80">{{$detail->whyus_ps_description}}</textarea>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>First Image</label>
                                            <input type="file" id="fileUpload" name="whyus_ps_image1" value="{{$detail->whyus_ps_image1}}" class="form-control">
                                            <div id="wrapper" class="mt-2">
                                                <div id="image-holder">
                                                    @if($detail->whyus_ps_image1)
                                                        <img src="{{asset('images/main/'.$detail->whyus_ps_image1)}}" alt="" class="thumb-image" height="120px" width="120px">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">We Accept (Home Page)</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-plus"></i></a>
                                    <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                </div>
                            </div>
                            <div class="ibox-body" style="display:none;">
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <label class="col-md-12 col-form-label">We Accept Image-1</label>
                                        <div class="col-md-12 col-form-label">
                                            <div class="row">
                                                <div class="col-6 colxs-12">
                                                    <div class="form-check checkbox">
                                                        <input type="file" name="wa_image1" class="form-control" onchange="wa_image1Preview()">
                                                        <img id="wa_image1" src="{{asset('images/main/'. $detail->wa_image1)}}" width="100px" height="100px" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label class="col-md-12 col-form-label">We Accept Image-2</label>
                                        <div class="col-md-12 col-form-label">
                                            <div class="row">
                                                <div class="col-6 colxs-12">
                                                    <div class="form-check checkbox">
                                                        <input type="file" name="wa_image2" class="form-control" onchange="wa_image2Preview()">
                                                        <img id="wa_image2" src="{{asset('images/main/'. $detail->wa_image2)}}" width="100px" height="100px" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label class="col-md-12 col-form-label">We Accept Image-3</label>
                                        <div class="col-md-12 col-form-label">
                                            <div class="row">
                                                <div class="col-6 colxs-12">
                                                    <div class="form-check checkbox">
                                                        <input type="file" name="wa_image3" class="form-control" onchange="wa_image3Preview()">
                                                        <img id="wa_image3" src="{{asset('images/main/'. $detail->wa_image3)}}" width="100px" height="100px" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label class="col-md-12 col-form-label">We Accept Image-4</label>
                                        <div class="col-md-12 col-form-label">
                                            <div class="row">
                                                <div class="col-6 colxs-12">
                                                    <div class="form-check checkbox">
                                                        <input type="file" name="wa_image4" class="form-control" onchange="wa_image4Preview()">
                                                        <img id="wa_image4" src="{{asset('images/main/'. $detail->wa_image4)}}" width="100px" height="100px" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">About Us</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-plus"></i></a>
                                    <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                </div>
                            </div>
                            <div class="ibox-body" style="display:none;">
                                    <div class="form-group">
                                        <label>Sub-tile Aboutus (Home Page)</label>
                                        <textarea class="form-control" name="aboutus_description_home" rows="3" cols="80">{{$detail->aboutus_description_home}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Video Link (Home Page)</label>
                                        <input class="form-control" type="text" name="aboutus_video_home" value="{{$detail->aboutus_video_home}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Sub-tile(About Us Page )</label>
                                        <textarea class="form-control" name="aboutus_description" rows="3" cols="80">{{$detail->aboutus_description}}</textarea>
                                    </div>
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <label class="col-md-12 col-form-label">Side Image(Home Page )</label>
                                        <div class="col-md-12 col-form-label">
                                            <div class="row">
                                                <div class="col-6 colxs-12">
                                                    <div class="form-check checkbox">
                                                        <input type="file" name="aboutus_side_image_home" class="form-control" onchange="aboutus_side_image_homePreview()">
                                                        <img id="aboutus_side_image_home" src="{{asset('images/main/'. $detail->aboutus_side_image_home)}}" width="100px" height="100px" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label class="col-md-12 col-form-label">Banner Image(About Us Page )</label>
                                        <div class="col-md-12 col-form-label">
                                            <div class="row">
                                                <div class="col-6 colxs-12">
                                                    <div class="form-check checkbox">
                                                        <input type="file" name="aboutus_image" class="form-control" onchange="aboutus_imagePreview()">
                                                        <img id="aboutus_image" src="{{asset('images/main/'. $detail->aboutus_image)}}" width="100px" height="100px" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Home Page (Sub-Titles)</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-plus"></i></a>
                                    <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                </div>
                            </div>
                            <!--<div class="ibox-body" style="display:none;">-->
                            <!--    <div class="form-group">-->
                            <!--        <label>Upcoming Trips Sub-tile</label>-->
                            <!--        <textarea class="form-control" name="upcoming_description" rows="3" cols="80">{{$detail->upcoming_description}}</textarea>-->
                            <!--    </div>-->
                            <!--</div>-->
                            <div class="ibox-body" style="display:none;">
                                <div class="form-group">
                                    <label>Our Best Seller Sub-tile</label>
                                    <textarea class="form-control" name="best_seller_description" rows="3" cols="80">{{$detail->best_seller_description}}</textarea>
                                </div>
                            </div>
                            <div class="ibox-body" style="display:none;">
                                <div class="form-group">
                                    <label>Recommanded Pacakage Sub-tile</label>
                                    <textarea class="form-control" name="recommanded_description" rows="3" cols="80">{{$detail->recommanded_description}}</textarea>
                                </div>
                            </div>
                            <!--<div class="ibox-body" style="display:none;">-->
                            <!--    <div class="form-group">-->
                            <!--        <label>Pick Your Travel Style Sub-tile</label>-->
                            <!--        <textarea class="form-control" name="pick_travelStyle_description" rows="3" cols="80">{{$detail->pick_travelStyle_description}}</textarea>-->
                            <!--    </div>-->
                            <!--</div>-->
                            <!--<div class="ibox-body" style="display:none;">-->
                            <!--    <div class="form-group">-->
                            <!--        <label>Adventure Road Trip Sub-tile</label>-->
                            <!--        <textarea class="form-control" name="adventure_roadTrip_description" rows="3" cols="80">{{$detail->adventure_roadTrip_description}}</textarea>-->
                            <!--    </div>-->
                            <!--</div>-->
                            <div class="ibox-body" style="display:none;">
                                <div class="form-group">
                                    <label>Our Destinations Sub-tile (Home Page)</label>
                                    <textarea class="form-control" name="our_destinations_description" rows="3" cols="80">{{$detail->our_destinations_description}}</textarea>
                                </div>
                            </div>
                            <!--<div class="ibox-body" style="display:none;">-->
                            <!--    <div class="form-group">-->
                            <!--        <label>Travelers Reviews Sub-tile</label>-->
                            <!--        <textarea class="form-control" name="traveler_reviews_description" rows="3" cols="80">{{$detail->traveler_reviews_description}}</textarea>-->
                            <!--    </div>-->
                            <!--</div>-->
                            <!--<div class="ibox-body" style="display:none;">-->
                            <!--    <div class="form-group">-->
                            <!--        <label>Newsletter Sub-tile</label>-->
                            <!--        <textarea class="form-control" name="newslatter_description" rows="3" cols="80">{{$detail->newslatter_description}}</textarea>-->
                            <!--    </div>-->
                            <!--</div>-->
                            <div class="ibox-body" style="display:none;">
                                <div class="form-group">
                                    <label>Contact Us Page Sub-tile</label>
                                    <textarea class="form-control" name="contactus_description" rows="3" cols="80">{{$detail->contactus_description}}</textarea>
                                </div>
                            </div>
                            <div class="ibox-body" style="display:none;">
                                <div class="form-group">
                                    <label>Travel Guide Page Sub-tile</label>
                                    <textarea class="form-control" name="travelGuide_description" rows="3" cols="80">{{$detail->travelGuide_description}}</textarea>
                                </div>
                            </div>
                            <div class="ibox-body" style="display:none;">
                                <div class="form-group">
                                    <label>Destination Listing Page Sub-tile</label>
                                    <textarea class="form-control" name="destination_description" rows="3" cols="80">{{$detail->destination_description}}</textarea>
                                </div>
                            </div>
                            <div class="ibox-body" style="display:none;">
                                <div class="form-group">
                                    <label>Blog Page Sub-tile</label>
                                    <textarea class="form-control" name="blog_description" rows="3" cols="80">{{$detail->blog_description ?? ''}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Social Media Links</div>

                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-plus"></i></a>
                                    <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                    <!-- <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; transform: translate3d(41px, 20px, 0px); top: 0px; left: 0px; will-change: transform;">
                                        <a class="dropdown-item">option 1</a>
                                        <a class="dropdown-item">option 2</a>
                                    </div> -->
                                </div>
                            </div>
                            <!-- @include('admin.layouts._partials.messages.info') -->
                            <div class="ibox-body" style="display:none;">

                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label>Facebook Link</label>
                                    <input class="form-control" type="text" value="{{$detail->facebook}}" name="facebook" placeholder="Ente Facebook Link">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Instagram Link</label>
                                    <input class="form-control" type="text" value="{{$detail->instagram}}" name="instagram" placeholder="Ente Instagram Link">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>WhatsApp Link</label>
                                    <input class="form-control" type="text" value="{{$detail->whatsapp}}" name="whatsapp" placeholder="Ente whatsApp number">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Youtube Link</label>
                                    <input class="form-control" type="text" value="{{$detail->youtube}}" name="youtube" placeholder="Enter Youtube Link">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Twitter Link</label>
                                    <input class="form-control" type="text" value="{{$detail->twitter}}" name="twitter" placeholder="Enter Twitter Link">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Linkedin Link</label>
                                    <input class="form-control" type="text" value="{{$detail->linkedin}}" name="linkedin" placeholder="Enter Linkedin Link">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Pinterest Link</label>
                                    <input class="form-control" type="text" value="{{$detail->pinterest}}" name="pinterest" placeholder="Enter Pinterest Link">
                                </div>

                            </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Banners and Icons</div>

                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-plus"></i></a>
                                    <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                    <!-- <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; transform: translate3d(41px, 20px, 0px); top: 0px; left: 0px; will-change: transform;">
                                        <a class="dropdown-item">option 1</a>
                                        <a class="dropdown-item">option 2</a>
                                    </div> -->
                                </div>
                            </div>

                            <div class="ibox-body" style="display:none;">

                        <div class="row">

                            {{-- CV --}}
                            {{-- <div class="col-sm-6 form-group">
                                <label class="col-md-12 col-form-label">Logo</label>
                                <div class="col-md-12 col-form-label">
                                    <div class="row">
                                        <div class="col-6 colxs-12">
                                            <div class="form-check checkbox">
                                                <input type="file" name="logo" class="form-control" onchange="logoPreview()">
                                                <img id="logo" src="{{asset('images/main/'. $detail->logo)}}" width="100px" height="100px" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="col-sm-6 form-group">
                                <label class="col-md-12 col-form-label">Logo</label>
                                <div class="col-md-12 col-form-label">
                                    <div class="row">
                                        <div class="col-6 colxs-12">
                                            <div class="form-check checkbox">
                                                <input type="file" name="logo" class="form-control" onchange="logoPreview()">
                                                <img id="logo" src="{{asset('images/main/'. $detail->logo)}}" width="100px" height="100px" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 form-group">
                                <label class="col-md-12 col-form-label">Favicon</label>
                                <div class="col-md-12 col-form-label">
                                    <div class="row">
                                        <div class="col-6 colxs-12">
                                            <div class="form-check checkbox">
                                                <input type="file" name="favicon" class="form-control" onchange="faviconPreview()">
                                                <img id="favicon" src="{{asset('images/main/'. $detail->favicon)}}" width="100px" height="100px" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-6 form-group">
                                <label class="col-md-12 col-form-label">Team Page Banner Image</label>
                                <div class="col-md-12 col-form-label">
                                    <div class="row">
                                        <div class="col-6 colxs-12">
                                            <div class="form-check checkbox">
                                                <input type="file" name="team_banner_image" class="form-control" onchange="team_banner_imagePreview()">
                                                <img id="team_banner_image" src="{{asset('images/main/'. $detail->team_banner_image)}}" width="100px" height="100px" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-6 form-group">
                                <label class="col-md-12 col-form-label">Privacy Policy Banner</label>
                                <div class="col-md-12 col-form-label">
                                    <div class="row">
                                        <div class="col-6 colxs-12">
                                            <div class="form-check checkbox">
                                                <input type="file" name="privacy_policy_banner" class="form-control" onchange="privacy_policy_bannerPreview()">
                                                <img id="privacy_policy_banner" src="{{asset('images/main/'. $detail->privacy_policy_banner)}}" width="100px" height="100px" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 form-group">
                                <label class="col-md-12 col-form-label">Travel Terms Banner</label>
                                <div class="col-md-12 col-form-label">
                                    <div class="row">
                                        <div class="col-6 colxs-12">
                                            <div class="form-check checkbox">
                                                <input type="file" name="travel_term_banner" class="form-control" onchange="travel_term_bannerPreview()">
                                                <img id="travel_term_banner" src="{{asset('images/main/'. $detail->travel_term_banner)}}" width="100px" height="100px" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 form-group">
                                <label class="col-md-12 col-form-label">Blog Banner</label>
                                <div class="col-md-12 col-form-label">
                                    <div class="row">
                                        <div class="col-6 colxs-12">
                                            <div class="form-check checkbox">
                                                <input type="file" name="blog_banner" class="form-control" onchange="blog_bannerPreview()">
                                                <img id="blog_banner" src="{{asset('images/main/'. $detail->blog_banner)}}" width="100px" height="100px" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 form-group">
                                <label class="col-md-12 col-form-label">Traveler review Banner</label>
                                <div class="col-md-12 col-form-label">
                                    <div class="row">
                                        <div class="col-6 colxs-12">
                                            <div class="form-check checkbox">
                                                <input type="file" name="traveler_review_banner" class="form-control" onchange="traveler_review_bannerPreview()">
                                                <img id="traveler_review_banner" src="{{asset('images/main/'. $detail->traveler_review_banner)}}" width="100px" height="100px" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-6 form-group">
                                <label class="col-md-12 col-form-label">Contactus Banner Image</label>
                                <div class="col-md-12 col-form-label">
                                    <div class="row">
                                        <div class="col-6 colxs-12">
                                            <div class="form-check checkbox">
                                                <input type="file" name="contactus_image" class="form-control" onchange="contactus_imagePreview()">
                                                <img id="contactus_image" src="{{asset('images/main/'. $detail->contactus_image)}}" width="100px" height="100px" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 form-group">
                                <label class="col-md-12 col-form-label">Travel Style page Banner Image</label>
                                <div class="col-md-12 col-form-label">
                                    <div class="row">
                                        <div class="col-6 colxs-12">
                                            <div class="form-check checkbox">
                                                <input type="file" name="travelStyle_image" class="form-control" onchange="travelStyle_imagePreview()">
                                                <img id="travelStyle_image" src="{{asset('images/main/'. $detail->travelStyle_image)}}" width="100px" height="100px" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 form-group">
                                <label class="col-md-12 col-form-label">Adventure Magic Page Banner Image</label>
                                <div class="col-md-12 col-form-label">
                                    <div class="row">
                                        <div class="col-6 colxs-12">
                                            <div class="form-check checkbox">
                                                <input type="file" name="classicVacation_image" class="form-control" onchange="classicVacation_imagePreview()">
                                                <img id="classicVacation_image" src="{{asset('images/main/'. $detail->classicVacation_image)}}" width="100px" height="100px" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 form-group">
                                <label class="col-md-12 col-form-label">Travel guide Page Banner Image</label>
                                <div class="col-md-12 col-form-label">
                                    <div class="row">
                                        <div class="col-6 colxs-12">
                                            <div class="form-check checkbox">
                                                <input type="file" name="travelGuide_image" class="form-control" onchange="travelGuide_imagePreview()">
                                                <img id="travelGuide_image" src="{{asset('images/main/'. $detail->travelGuide_image)}}" width="100px" height="100px" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 form-group">
                                <label class="col-md-12 col-form-label">Destination Listing Page Banner Image</label>
                                <div class="col-md-12 col-form-label">
                                    <div class="row">
                                        <div class="col-6 colxs-12">
                                            <div class="form-check checkbox">
                                                <input type="file" name="destination_banner_image" class="form-control" onchange="destination_banner_imagePreview()">
                                                <img id="destination_banner_image" src="{{asset('images/main/'. $detail->destination_banner_image)}}" width="100px" height="100px" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 form-group">
                                <label>Description (Travel Style Page)</label>
                                <textarea class="form-control" name="travelStyle_description" rows="3" cols="80">{{$detail->travelStyle_description}}</textarea>
                            </div>

                            <div class="col-sm-12 form-group">
                                <label>Description (Adventure Magic Page)</label>
                                <textarea class="form-control" name="classicVacation_description" rows="3" cols="80">{{$detail->classicVacation_description}}</textarea>
                            </div>




                            {{-- cv end--}}


                                        {{-- <div class="col-md-6 form-group">
                                            <label>Latest Video Background Image</label>
                                            <input class="form-control" type="file" name="latest_video_backgroundimage">
                                            @if($detail->latest_video_backgroundimage)
                                            <img src="{{asset('images/main/'. $detail->latest_video_backgroundimage)}}" style="margin-top:12px; margin-bottom:12px;" height="120px" width="120px" alt="">
                                            @endif
                                        </div> --}}


                                        {{-- <div class="col-md-6 form-group">
                                            <label>Featured Trips Background Image</label>
                                            <input class="form-control" type="file" name="featured_trips_image">
                                            @if($detail->featured_trips_image)
                                            <img src="{{asset('images/main/'. $detail->featured_trips_image)}}" style="margin-top:12px; margin-bottom:12px;" height="120px" width="120px" alt="">
                                            @endif
                                        </div>



                                        <div class="col-md-6 form-group">
                                            <label>Testimonial Page Background Image</label>
                                            <input class="form-control" type="file" name="testimonial_banner_image">
                                            @if($detail->testimonial_banner_image)
                                            <img src="{{asset('images/main/'. $detail->testimonial_banner_image)}}" style="margin-top:12px; margin-bottom:12px;" height="120px" width="120px" alt="">
                                            @endif
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Background Image For Slogan One Section</label>
                                            <input class="form-control" type="file" name="slogan_imagefirst">
                                            @if($detail->slogan_imagefirst)
                                            <img src="{{asset('images/main/'. $detail->slogan_imagefirst)}}" style="margin-top:12px; margin-bottom:12px;" height="120px" width="120px" alt="">
                                            @endif
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Background Image For Slogan Second Section</label>
                                            <input class="form-control" type="file" name="slogan_imagesecond">
                                            @if($detail->slogan_imagesecond)
                                            <img src="{{asset('images/main/'. $detail->slogan_imagesecond)}}" style="margin-top:12px; margin-bottom:12px;" height="120px" width="120px" alt="">
                                            @endif
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Slogan First</label>
                                            <input class="form-control" type="text" value="{{$detail->sloganfirst}}" name="sloganfirst" placeholder="Enter First Slogan">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Slogan First Description</label>
                                            <textarea class="form-control" name="sfdescription" rows="3">{{$detail->sfdescription}}</textarea>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Slogan Second</label>
                                            <input class="form-control" type="text" value="{{$detail->slogansecond}}" name="slogansecond" placeholder="Enter Second Slogan">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Slogan Second Description</label>
                                            <textarea class="form-control" name="ssdescription" rows="3">{{$detail->ssdescription}}</textarea>
                                        </div> --}}

                                    </div>
                            </div>
                        </div>
                    </div>

                </div>

                {{-- <div class="row">
                    <div class="col-md-12">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Progress Count</div>

                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-plus"></i></a>
                                    <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>

                                </div>
                            </div>
                            <div class="ibox-body" style="display:none;">

                            <div class="form-group">
                                <label>Awesome Hikers</label>
                                <input class="form-control" type="text" name="awesome_hikers" value="{{$detail->awesome_hikers}}" placeholder="Enter Awesome Hikers">
                            </div>

                                        <div class="form-group">
                                            <label>Stunning Places</label>
                                            <input class="form-control" type="text" name="stunning_places" value="{{$detail->stunning_places}}" placeholder="Enter Stunning Places">
                                        </div>

                                        <div class="form-group">
                                            <label>Miles to Hike</label>
                                            <input class="form-control" type="text" value="{{$detail->miles_hike}}" name="miles_hike" placeholder="Enter Miles To Hike">
                                        </div>

                                        <div class="form-group">
                                            <label>Days in Service</label>
                                            <input class="form-control" type="text" value="{{$detail->day_service}}" name="day_service" placeholder="Enter Day in Services">
                                        </div>
                            </div>
                        </div>
                    </div>

                </div> --}}

                <div class="row">
                    <div class="col-md-12">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Site Setting</div>

                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-plus"></i></a>
                                    <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                    <!-- <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; transform: translate3d(41px, 20px, 0px); top: 0px; left: 0px; will-change: transform;">
                                        <a class="dropdown-item">option 1</a>
                                        <a class="dropdown-item">option 2</a>
                                    </div> -->
                                </div>
                            </div>
                                <!-- @include('admin.layouts._partials.messages.info') -->
                            <div class="ibox-body" style="">

                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Site Name</label>
                                            <input class="form-control" type="text" name="site_name" value="{{$detail->site_name}}" placeholder="Enter Site name">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Address</label>
                                            <input class="form-control" type="text" value="{{$detail->address}}" name="address" placeholder="Enter Address">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Support Email</label>
                                            <input class="form-control" type="text" value="{{$detail->email}}" name="email" placeholder="Enter Email Address">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Business Email</label>
                                            <input class="form-control" type="text" value="{{$detail->slogansecond}}" name="slogansecond" placeholder="Enter Email">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Support Mobile</label>
                                            <input class="form-control" type="text" value="{{$detail->telephone}}" name="telephone" placeholder="Enter Telephone">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Business Mobile</label>
                                            <input class="form-control" type="text" value="{{$detail->mobile}}" name="mobile" placeholder="Enter Mobile">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Post Box</label>
                                            <input class="form-control" type="text" value="{{$detail->post_box}}" name="post_box" placeholder="Enter Post Box">
                                        </div>
                                        <div class="col-sm-12 form-group">
                                            <label>Google Map</label>
                                            <input class="form-control" type="text" value="{{$detail->googlemap}}" name="googlemap" placeholder="Google Map Link">
                                        </div>
                                        <div class="col-sm-12 form-group">
                                            <label>Footer Description</label>
                                            <textarea name="description" placeholder="Enter Description" class="form-control" rows="3" cols="80">{{$detail->description}}</textarea>
                                        </div>
                                        <div class="col-sm-12 form-group">
                                            <label>Package Date and Price Description</label>
                                            <textarea name="package_date_price_description" placeholder="Enter Date and Price Description" class="form-control" rows="3" cols="80">{{$detail->package_date_price_description}}</textarea>
                                        </div>
                                        {{-- <div class="col-sm-6 form-group">
                                            <label>Working Times</label>
                                            <input class="form-control" type="text" value="{{$detail->working_times}}" name="working_times" placeholder="Enter Working Times">
                                        </div> --}}
                                        {{-- <div class="col-sm-6 form-group">
                                            <label>Trip Advisor Link</label>
                                            <input class="form-control" type="text" value="{{$detail->tripadvisor__link}}"
                                                name="tripadvisor__link" placeholder="Enter trip advisor link">
                                        </div> --}}
                                        {{-- <div class="col-sm-6 form-group">
                                            <label>Trip advisor image</label>
                                            <input type="file" name="tripadvisor__image"
                                                value="{{$detail->tripadvisor__image}}" class="form-control">

                                        </div>
                                        @if($detail->tripadvisor__image)
                                        <img src="{{asset('images/main/'.$detail->tripadvisor__image)}}" alt="" class="thumb-image"
                                            height="120px" width="220px">
                                        @endif
                                    </div> --}}





                                    <div class="row">
                                    </div>

                                    <div class="form-group">
                                        <button class="btn btn-default" type="submit">Submit</button>
                                    </div>
                            </div>
                        </div>
                    </div>

                </div>
            @endif
        </form>
    </div>

@endsection

@push('scripts')
  <script>

    $(document).ready(function() {

      $("#fileUpload").on('change', function () {
        if (typeof (FileReader) != "undefined") {
         var image_holder = $("#image-holder");
         // $("#image-holder").siblings().remove();
         $("#image-holder").children().remove();
         var reader = new FileReader();
         reader.onload = function (e) {
             $("<img />", {
                 "src": e.target.result,
                 "class": "thumb-image",
                 "width" : '50%'
             }).appendTo(image_holder);
         }
         image_holder.show();
         reader.readAsDataURL($(this)[0].files[0]);
        } else {
            alert("This browser does not support FileReader.");
        }
    });

    $("#fileUpload1").on('change', function () {

      if (typeof (FileReader) != "undefined") {

       var image_holder = $("#image-holder1");

       // $("#image-holder").siblings().remove();

       $("#image-holder1").children().remove();

       var reader = new FileReader();
       reader.onload = function (e) {

           $("<img />", {
               "src": e.target.result,
               "class": "thumb-image",
               "width" : '50%'
           }).appendTo(image_holder);

       }
       image_holder.show();
       reader.readAsDataURL($(this)[0].files[0]);
        } else {
            alert("This browser does not support FileReader.");
        }
    });

    $("#fileUpload2").on('change', function () {

        if (typeof (FileReader) != "undefined") {

        var image_holder = $("#image-holder2");

        // $("#image-holder").siblings().remove();

        $("#image-holder2").children().remove();

        var reader = new FileReader();
        reader.onload = function (e) {

            $("<img />", {
                "src": e.target.result,
                "class": "thumb-image",
                "width" : '50%'
            }).appendTo(image_holder);

            }
            image_holder.show();
            reader.readAsDataURL($(this)[0].files[0]);
            } else {
            alert("This browser does not support FileReader.");
            }

        });

    });

  </script>
    {{-- //CK editor --}}
    <script src="https://cdn.ckeditor.com/4.6.2/full/ckeditor.js"></script>
    <?php $name = ['vacation_detail','package_date_price_description','travelwithus_detail', 'lodging', 'fooding','title2','title4','sqt_description','ps_description','whyus_title2','whyus_title4','whyus_sqt_description','whyus_ps_description','description','travelStyle_description','classicVacation_description','upcoming_description','best_seller_description','pick_travelStyle_description','adventure_roadTrip_description','our_destinations_description','traveler_reviews_description','newslatter_description','contactus_description','aboutus_description','travelGuide_description','destination_description','blog_description','aboutus_description_home','recommanded_description']; ?>
    @foreach($name as $data)
    @include('admin.layouts._partials.ckdynamic', ['name' => $data])
    @endforeach
    {{-- End ck editor --}}



    {{-- New image holder CV --}}
    <script>
        function privacy_policy_bannerPreview() {
        privacy_policy_banner.src=URL.createObjectURL(event.target.files[0]);
    }
    function travel_term_bannerPreview() {
        travel_term_banner.src=URL.createObjectURL(event.target.files[0]);
    }
    function blog_bannerPreview() {
        blog_banner.src=URL.createObjectURL(event.target.files[0]);
    }
    function traveler_review_bannerPreview() {
        traveler_review_banner.src=URL.createObjectURL(event.target.files[0]);
    }
    function contactus_imagePreview() {
        contactus_image.src=URL.createObjectURL(event.target.files[0]);
    }
    function team_banner_imagePreview() {
        team_banner_image.src=URL.createObjectURL(event.target.files[0]);
    }
    function logoPreview() {
        logo.src=URL.createObjectURL(event.target.files[0]);
    }
    function faviconPreview() {
       favicon.src=URL.createObjectURL(event.target.files[0]);
    }

    function travelStyle_imagePreview() {
        travelStyle_image.src=URL.createObjectURL(event.target.files[0]);
    }


    function classicVacation_imagePreview() {
        classicVacation_image.src=URL.createObjectURL(event.target.files[0]);
    }

    function aboutus_imagePreview() {
        aboutus_image.src=URL.createObjectURL(event.target.files[0]);
    }

    function aboutus_side_image_homePreview() {
        aboutus_side_image_home.src=URL.createObjectURL(event.target.files[0]);
    }
    function travelGuide_imagePreview() {
        travelGuide_image.src=URL.createObjectURL(event.target.files[0]);
    }

    function destination_banner_imagePreview() {
        destination_banner_image.src=URL.createObjectURL(event.target.files[0]);
    }

//We accept
    function wa_image1Preview() {
        wa_image1.src=URL.createObjectURL(event.target.files[0]);
    }
    function wa_image2Preview() {
        wa_image2.src=URL.createObjectURL(event.target.files[0]);
    }
    function wa_image3Preview() {
        wa_image3.src=URL.createObjectURL(event.target.files[0]);
    }
    function wa_image4Preview() {
        wa_image4.src=URL.createObjectURL(event.target.files[0]);
    }




</script>


@endpush
