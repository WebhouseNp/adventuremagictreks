@extends('front.layouts.app')
@section('content')
{{-- {{asset('assets/front/    ')}} --}}

    <!-- ========== Package Banner ========== -->
    <div class="tourmaster-single-header inner-image newheading" style="background-image: url('{{asset('images/main/'. $destination->banner_image)}}');">
        <div class="inner-overlay"></div>
        <div class="tourmaster-single-header-background-overlay"></div>
        <div class="tourmaster-single-header-overlay"></div>

        <div class="tourmaster-single-header-container tourmaster-container">
            <div class="tourmaster-single-header-container-inner">
                <div class="tourmaster-single-header-title-wrap tourmaster-item-pdlr">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 trip-topic triphead-block p-0 newfo">
                                <div class="tourmaster-single-header-gallery-wrap"></div>
                                <div class="trip-destinations advtrip-destinations">
                                    <ul>
                                        <li>{{ $destination->country_name }}</li>
                                    </ul>
                                </div>
                                <h1 class="tourmaster-single-header-title">{{ $destination->heading_title }}</p>
                                </h1>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- ========== End of Package Banner ========== -->

    <!-- ========== destination========== -->
    <section class="destination-inner test advdestinationpaination">
        <div class="container">
            <!--<div class="destination-summary">-->
            <!--    <div class="destination-title">-->
            <!--        <h1>{{ $destination->country_name }} Introduction:</h1>-->
            <!--    </div>-->
            <!--    <p>-->
            <!--        {!! $destination->intro !!}-->
            <!--    </p>-->
            <!--</div>-->

            <div class="destination-summary">
                <!--<div class="destination-title">-->
                <!--    <h1>Description:</h1>-->
                <!--</div>-->
                <p>
                    {!! $destination->description !!}
                </p>
            </div>
        </div>

        <!-- features dynamic-->
        <div class="destination-feature">
            <!-- single destination feature -->
            {{-- @if (isset($destinationPackages[0])) --}}
            <!-- <div class="destination-feature-single">
                <div class="container">
                    <div class="destination-title">
                        <h1>Classic Vacations in {{$destination->country_name}}</h1>
                    </div>

                    <div class="destination-feature-list">
                        <div class="row mt-5">
                            @foreach ($destinationType as $type)
                                @foreach ($type->packages->where('classic_vacation', 1) as $package)
                                    <div class="col-md-4 col-sm-6">
                                        <div class="card package-listing-card">
                                            <a href="{{route('packageDetails', $package->slug)}}">
                                                <img src="{{asset('images/main/'.$package->image)}}" alt="">
                                            </a>
                                            <div class="card-body">
                                                <h3 class="package-listing-card-title">
                                                    <a href="{{route('packageDetails', $package->slug)}}">
                                                        {{ $package->package_name }}
                                                    </a>
                                                </h3>
                                                <span class="text-right package-listing-tag">{{ $package->nature_of_trek }}</span>

                                                <div class="package-listing-info">
                                                    <span class="date">
                                                        <i class="fa fa-calendar"></i>
                                                        {{ $package->days_and_nights }}
                                                    </span>

                                                    <span class="price">{{ $package->price }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endforeach

                        </div>
                        <div class="more-packages">
                            <a href="{{route('classicVacationList')}}" class="link-more-package">View all</a>
                        </div>
                    </div>
                </div>
            </div> -->
            {{-- @endif --}}
            <!-- single destination feature end -->

            <!-- single destination feature -->
            <!-- @if (isset($destinationType[0])) -->
            @foreach($destination->destinationtype as $desti)
            <div class="destination-feature-single">
                <div class="container">
                    <div class="destination-title">
                        <h1>{{$desti->title}}
                             <!-- in {{$destination->country_name}} -->
                            </h1>
                    </div>

                    <div class="destination-feature-list">
                        <div class="row mt-5">
                                @foreach ($desti->packages as $package)
                                    <div class="col-md-4 col-sm-6">
                                        <div class="card package-listing-card">
                                            <a href="{{route('packageDetails', $package->slug)}}">
                                                <img src="{{asset('images/main/'.$package->image)}}" alt="">
                                            </a>

                                            <div class="card-body">
                                                <h3 class="package-listing-card-title">
                                                    <a href="{{route('packageDetails', $package->slug)}}">
                                                        {{ $package->package_name }} 
                                                    </a>
                                                </h3>
                                                <span class="text-right package-listing-tag">{{ $package->nature_of_trek }}</span>

                                                <div class="package-listing-info">
                                                    <span class="date">
                                                        <i class="fa fa-calendar"></i>
                                                        {{ $package->days_and_nights }}
                                                    </span>

                                                    <span class="price">{{ $package->price }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                        </div>
                        <div class="more-packages">
                            <a href="{{route('resolvepath.showTwoSlug',[$destination->slug, $desti->slug])}}" class="link-more-package">View all</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- @endif -->
            <!-- single destination feature end -->

      
        <!-- features end -->

        <!-- FAQ related to nepal -->
        @if (isset($destination->faq[0]))
        <div class="destination-faq package-faq">
            <div class="container">
                <div class="destination-title">
                    <h1>{{$destination->country_name}} FAQ's</h1>
                </div>
                <!-- faq -->
                <ul class="accordion-list">
                    @foreach($destination->faq as $data)
                        <li>
                            <h3>{{$data->questions}}</h3>
                            <div class="answer">
                                <p>{!! $data->answers !!}</p>
                            </div>
                        </li>
                    @endforeach
                </ul>
                <!-- faq end -->
            </div>
        </div>
        @endif
        <!-- FAQ related to end -->
  {{--      <div class="container mt-3">
            <div class="offset-4 text-center adv-pagination">
        <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">«</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item active"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">»</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
  </div>
  </div> --}}
    </section>
    <!-- ========== End of destination ========== -->

@endsection
