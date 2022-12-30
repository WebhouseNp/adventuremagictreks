@extends('front.layouts.app')
@section('content')

{{-- {{asset('assets/front/    ')}} --}}

 <!-- ========== Package Banner ========== -->
 <div class="tourmaster-single-header" style="background-image: url('{{asset('images/main/'.$dashboard_settings->team_banner_image)}}');">
    <div class="tourmaster-single-header-background-overlay"></div>
    <div class="tourmaster-single-header-overlay"></div>

    <div class="tourmaster-single-header-container tourmaster-container">
        <div class="tourmaster-single-header-container-inner">
            <div class="tourmaster-single-header-title-wrap tourmaster-item-pdlr">
                <div class="container">
                    <div class="row">
                        <div class="COL-12 trip-topic triphead-block p-0">
                            <div class="tourmaster-single-header-gallery-wrap"></div>

                            <h1 class="tourmaster-single-header-title">Our Team</p>
                            </h1>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- ========== End of Package Banner ========== -->

<!-- ========== Our Teams ========== -->
<section class="team pt-4">
    <div class="container">
        <div class="team-title">
            <h1>Adventure Magic Nepal Team</h1>

            <p>
                We are team of professionals who share a common devotion to the outdoors and are commited to world travel.
            </p>
        </div>

        <!-- team content -->
        <div class="team-content">
            @foreach ($details as $key => $detail)
                @if (fmod($key, 2) == 0)
                    <div class="team-content-single">
                        <div class="row">
                            <div class="col-lg-5 col-12">
                                <div class="team-comtent-img">
                                    <img src="{{asset('images/main/'.$detail->image)}}" alt="" class="img-fluid">
                                </div>
                            </div>

                            <div class="col-lg-7">
                                <div class="team-content-info">
                                    <h3 class="team-content-name">{{$detail->name}}</h3>
                                    <span class="team-content-post">{{$detail->position}}</span>
                                    <div class="team-content-description">
                                        {!! \Illuminate\Support\Str::limit($detail->description, 500, '...') !!}
                                    </div>

                                    <div class="text-right">
                                        <a href="{{route('teamDetail',$detail->slug)}}" class="link-read-more">Read More →</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="team-content-single">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="team-content-info">
                                    <h3 class="team-content-name">{{$detail->name}}</h3>
                                    <span class="team-content-post">{{$detail->position}}</span>
                                    <p class="team-content-description">
                                        {!! \Illuminate\Support\Str::limit($detail->description, 500, '...') !!}
                                    </p>
                                    <div class="text-right">
                                        <a href="{{route('teamDetail',$detail->slug)}}" class="link-read-more">Read More →</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-12">
                                <div class="team-comtent-img">
                                    <img src="{{asset('images/main/'.$detail->image)}}" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        <!-- team content -->
    </div>
</section>
<!-- ========== End of Our Teams ========== -->


@endsection
