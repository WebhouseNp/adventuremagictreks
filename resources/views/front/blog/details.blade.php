@extends('front.layouts.app')
<title>Adventure Magic | Blogs | {{ $details->title }}</title>
@section('content')

    <!-- ========== Package Banner ========== -->
    <div class="tourmaster-single-header inner-image advcontacthead" style="background-image: url('{{asset('images/main/'.$details->banner_image)}}');">
        <div class="inner-overlay"></div>
        <div class="tourmaster-single-header-background-overlay"></div>
        <div class="tourmaster-single-header-overlay"></div>

        <div class="tourmaster-single-header-container tourmaster-container">
            <div class="tourmaster-single-header-container-inner">
                <div class="tourmaster-single-header-title-wrap tourmaster-item-pdlr">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 trip-topic triphead-block p-0">
                                <div class="tourmaster-single-header-gallery-wrap"></div>

                                <h1 class="tourmaster-single-header-title text-capitalize">{{ $details->title }}</p>
                                </h1>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- ========== End of Package Banner ========== -->

    <!-- ========== Blog Details ========== -->
    <section class="blog-details">
        <div class="container">


            <!-- blog single content -->
            <div class="blog-details-single mt-3 advblogdetail">
                <div class="row">
                    <div class="col-md-9">
                        


                        <div class="blog-details-img">
                            <img src="{{asset('images/listing/'.$details->image)}}" alt="" class="img-fluid">
                        </div>
                        <div class="blog-details-single-content newblogdetail">
                            
                            <div class="row">
                                <div class="col-md-8">
                            <ul>
                                <li><i class="fa fa-clock-o" aria-hidden="true"></i>{{$details->created_at->format(' d, M Y') }}</li>|

                                <li>adventuremagic.com</li>
                            </ul>
                            </div>
                            <div class="col-md-4 pull-right">
                                <div class="social-blog">
                                    <ul>
                                        <!-- Go to www.addthis.com/dashboard to customize your tools -->
                                        <div class="addthis_inline_share_toolbox_943z"></div>
                                    </ul>
                                </div>
                            </div>
                            </div>
                        </div><!-- blog single content -->
            <div class="blog-details-single">
                <div class="">
                    <div class="">
                        <div class="blog-details-single-content">
                            <!--{!! @$details->description !!}-->
                             <div class="blog-details-title">
                                <h1>{{ @$details->title }}</h1>
                            </div>
                            {!! @$details->description !!} 
                        </div>
                    </div>
                </div>
            </div>
             </div>
             <div class="col-md-3">
                 <div class="latest-blogs-title latest-blogs lb">
                <h2>Other Blogs</h2>
                 <div class="blog-listing-wrapper">
                <div class="">
                    @foreach ($relatedBlogs as $blog)
                        <div class="mb-4">
                            <div class="blog-listing-card card border-0">
                                <a href="{{route('blogDetails',$blog->slug)}}">
                                    <img src="{{asset('images/listing/'.$blog->banner_image)}}" alt="" class="card-img img-fluid">
                                </a>

                                <div class="card-body px-0">
                                    <h3 class="blog-listing-card-title">
                                        <a href="{{route('blogDetails',$blog->slug)}}">
                                            {{ $blog->title }}
                                        </a>
                                    </h3>

                                    <div class="blog-listing-card-info">
                                        <span class="date">{{$blog->created_at->format(' d-M-Y') }}</span>
                                        <a href="{{route('blogDetails',$blog->slug)}}" class="more">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    

                </div>
            </div>
            </div>
             </div>
            <!-- blog single content end -->
        </div>
    </section>
    <!-- ========== End of Blog Details ========== -->

    

    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-6141600823f4c8e2"></script>

@endsection


