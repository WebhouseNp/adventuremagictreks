@extends('front.layouts.app')
<title>Adventure Magic| Blogs</title>
@section('content')
{{-- {{asset('assets/front/    ')}} --}}

    <!-- ========== Package Banner ========== -->
    <div class="tourmaster-single-header" style="background-image: url('{{asset('images/main/'.$dashboard_settings->blog_banner)}}');">
        <div class="tourmaster-single-header-background-overlay"></div>
        <div class="tourmaster-single-header-overlay"></div>

        <div class="tourmaster-single-header-container tourmaster-container">
            <div class="tourmaster-single-header-container-inner">
                <div class="tourmaster-single-header-title-wrap tourmaster-item-pdlr">
                    <div class="container">
                        <div class="row">
                            <div class="COL-12 trip-topic triphead-block p-0">
                                <div class="tourmaster-single-header-gallery-wrap"></div>

                                <h1 class="tourmaster-single-header-title">Blogs</p>
                                </h1>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========== End of Package Banner ========== -->

    <!-- ========== Blogs ========== -->

    <section class="blog-listing newtrips">

        <div class="container">

            <!-- form -->
            {{-- <div class="searchInput">
                <input type="text" placeholder="Search Category & Destinations...">
                <div class="resultBox">
                    <!-- here list are inserted from javascript -->
                </div>
                <div class="icon"><i class="fa fa-search"></i></div>
            </div> --}}


          {{-- //Search blog --}}
                    <!--<div class="searchInput">-->
                    <!--    <div class="from-group form-input">-->
                    <!--        <input type="text" class="form-control" name="title" id="title" placeholder="Search Packages..." required oninput="myFunction()"  />-->
                    <!--        <div class="searched_title_options" id="searchResult">-->

                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->

            <!-- form end -->

            <!-- blog listing -->
            <div class="blog-listing-wrapper">
                <p style="margin-bottom: 20px;">
                    {!!$dashboard_settings->blog_description ?? ''!!}
                </p>
                <div class="row">
                    @if (isset($details[0]))
                    @foreach ($details as $blog)
                        <div class="col-md-4 col-sm-6 col-12 mx-auto mb-4">
                            <div class="blog-listing-card card border-0">
                                <a href="{{route('blogDetails',$blog->slug)}}">
                                    <img src="{{asset('images/listing/'.$blog->image)}}" alt="" class="card-img img-fluid">
                                </a>


                                <div class="card-body px-0 bb">

                                    <h3 class="blog-listing-card-title">
                                        <a href="{{route('blogDetails',$blog->slug)}}">
                                            {{$blog->title}}
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
                    @else
                    <h2>Sorry! No Blog Right Now.</h2>
                    @endif
                </div>
                {{$details->links()}}
            </div>
            <!-- blog listing end -->
        </div>
    </section>
    <!-- ========== End of Blogs ========== -->


    {{-- <script>
        let suggestions = [
            "Annapurna",
            "Everest",
            "Blogs",
            "Kajirowa",
            "Pokhara",
            "Annapurna Base Camp",
            "Everest Base Camp",
            "Muktinath",
            "Bhaktapur Durbar",
            "Kathmandu Durbar",
        ];

        // getting all required elements
        const searchInput = document.querySelector(".searchInput");
        const input = searchInput.querySelector("input");
        const resultBox = searchInput.querySelector(".resultBox");
        const icon = searchInput.querySelector(".icon");
        let linkTag = searchInput.querySelector("a");
        let webLink;

        // if user press any key and release
        input.onkeyup = (e) => {
            let userData = e.target.value; //user enetered data
            let emptyArray = [];
            if (userData) {
                emptyArray = suggestions.filter((data) => {
                    //filtering array value and user characters to lowercase and return only those words which are start with user enetered chars
                    return data.toLocaleLowerCase().startsWith(userData.toLocaleLowerCase());
                });
                emptyArray = emptyArray.map((data) => {
                    // passing return data inside li tag
                    return data = '<li><a href="blog-details.php">' + data + '</a></li>';
                });
                searchInput.classList.add("active"); //show autocomplete box
                showSuggestions(emptyArray);
                let allList = resultBox.querySelectorAll("li");
                for (let i = 0; i < allList.length; i++) {
                    //adding onclick attribute in all li tag
                    allList[i].setAttribute("onclick", "select(this)");
                }
            } else {
                searchInput.classList.remove("active"); //hide autocomplete box
            }
        }

        function showSuggestions(list) {
            let listData;
            if (!list.length) {
                userValue = inputBox.value;
                listData = '<li>' + userValue + '</li>';
            } else {
                listData = list.join('');
            }
            resultBox.innerHTML = listData;
        }
    </script> --}}


@endsection

@push('scripts')
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="application/javascript">
        $(document).ready(function() {

            $('#title').on('keyup', function() {
                var title = $('#title').val();
                if (title.length >= 2) {
                    $.ajax({
                        type: "GET",
                        url: '/search-on-key-up',
                        data: {
                            title: title,
                        },
                        success: function(response) {
                            $('.searched_title_options').empty()
                            $.each(response.data, function(key, blog) {
                                $('.searched_title_options').append(
                                    `<a href="/blog/${blog.slug}">${blog.title}</a> <br/>`
                                )
                            });

                        }
                    });
                }

            });

            $('#title').on('keydown', function() {
                var title = $('#title').val();
                if (title.length <= 2) {
                    $.ajax({
                        type: "GET",
                        url: '/search-on-key-up',
                        data: {
                            title: title,
                        },
                        success: function(response) {
                            $('.searched_title_options').empty()
                            // $.each(response.data, function(key, package) {
                            //     $('.searched_title_options').append(
                            //         `<a href="/packages/${package.slug}" target="_blank">${package.package_name}</a> <br/>`
                            //     )
                            // });


                        }
                    });
                }

            });

        });
    </script>
@endpush
