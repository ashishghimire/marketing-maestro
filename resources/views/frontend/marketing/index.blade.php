@extends('frontend.marketing.master')
@section('section')
    {{--{{dd($indian_featured)}}--}}

    <!-- Slider Section -->
    @include('frontend.marketing.partials.slider')
    <!-- End of Slider Sec                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      tion -->
    <!-- Main Content -->
    <!-- Container Section -->
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <!-- Tab v4 -->
                <div class="tab-v4 margin-bottom-20">
                    <!-- Tab Heading -->
                    <div class="tab-heading">
                        <h2>Featured Advertising</h2>
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="home active">
                                <a href="#tab-v4-a1" role="tab" data-toggle="tab">Nepali</a>
                            </li>
                            <li>
                                <a href="#tab-v4-a2" role="tab" data-toggle="tab">Indian</a>
                            </li>
                            <li>
                                <a href="#tab-v4-a3" role="tab" data-toggle="tab">English</a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Tab Heading -->

                    <!-- Tab Content -->
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab-v4-a1">
                            <div class="row">
                                <div class="col-sm-7">
                                    <!-- Blog Grid -->
                                    @if($nepali_featured == null)
                                        <div class="blog-grid sm-margin-bottom-40">
                                            <img class="img-responsive"
                                                 src="{{url('/uploads/Slider/im1.jpeg')}}"
                                                 style="height:324px; width:100%; object-fit:cover;"
                                                 alt="Loading!!">
                                            <h3><a href="#">No Featured Post</a></h3>
                                            <ul class="blog-grid-info">
                                            </ul>
                                            <p>Oops!! No nepali featured post yet.</p>
                                            <a class="r-more" href="#tab-v4-a1">Read More</a>
                                        </div>
                                    @else
                                        <div class="blog-grid sm-margin-bottom-40">
                                            <img class="img-responsive"
                                                 src="{{url('/uploads/Advertising1/'.$nepali_featured->file)}}"
                                                 style="height:324px; width:100%; object-fit:cover;"
                                                 alt="Loading!!">
                                            <h3>
                                                <a href="{{url('show',$nepali_featured->slug)}}">
                                                    {{$nepali_featured->title}}
                                                </a>
                                            </h3>
                                            <ul class="blog-grid-info">
                                                <li>Admin</li>
                                                <li>
                                                    {{ date('M  j, Y ',strtotime($nepali_featured->created_at))}}
                                                </li>
                                            </ul>
                                            <p>
                                                {!! substr($nepali_featured->description, 0,350)!!}
                                                {{ strlen($nepali_featured->description) > 350 ? "..." : ""}}
                                            </p>
                                            <a class="r-more"
                                               href="{{url('show',$nepali_featured->slug)}}">
                                                Read More
                                            </a>
                                        </div>
                                @endif
                                <!-- End Blog Grid -->
                                </div>

                                <div class="col-sm-5">
                                    <!-- Blog Thumb -->
                                    @foreach($nepali as $row)
                                        <div class="blog-thumb-v2 margin-bottom-20">
                                            <div class="blog-thumb-grad">
                                                <a href="{{url('show',$row->slug)}}">
                                                    <img src="{{url('/uploads/Advertising1/'.$row->file)}}"
                                                         style="height:100px; width:100px; object-fit:contain;"
                                                         alt="">
                                                </a>
                                                <a class="hover-grad"
                                                   href="{{url('show',$row->slug)}}">
                                                    {{-- <i class="fa fa-video-camera"></i> --}}
                                                </a>
                                            </div>
                                            <div class="blog-thumb-desc">
                                                <h3>
                                                    <a href="{{url('show',$row->slug)}}">
                                                        {!! substr($row->title, 0,30)!!}
                                                        {{ strlen($row->title) > 30 ? "..." : ""}}
                                                    </a>
                                                </h3>
                                                <p>
                                                    {!! substr($row->description, 0,60)!!}
                                                    {{ strlen($row->description) > 60 ? "..." : ""}}
                                                </p>
                                                <ul class="blog-thumb-info">
                                                    <li>
                                                        {{ date('M  j, Y ',strtotime($row->created_at))}}
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div><!--/end row-->
                        </div>
                        <div class="tab-pane fade" id="tab-v4-a2">
                            <div class="row">
                                <div class="col-sm-7">
                                    <!-- Blog Grid -->
                                    @if($indian_featured == null)
                                        <div class="blog-grid sm-margin-bottom-40">
                                            <img class="img-responsive"
                                                 src="{{url('/uploads/dashboard.png')}}"
                                                 style="height:324px; width:100%; object-fit:cover;"
                                                 alt=" Loading!! ">
                                            <h3><a href="#">No Featured Post</a></h3>
                                            <ul class="blog-grid-info">
                                            </ul>
                                            <p>Oops!! No English featured post yet.</p>
                                            <a class="r-more" href="#">Read More</a>
                                        </div>
                                    @else
                                        <div class="blog-grid sm-margin-bottom-40">
                                            <img class="img-responsive"
                                                 src="{{url('/uploads/Advertising1/'.$indian_featured->file)}}"
                                                 style="height:324px; width:100%; object-fit:cover;"
                                                 alt="loading!!">
                                            <h3>
                                                <a href="{{url('show',$indian_featured->slug)}}">
                                                    {{$indian_featured->title}}
                                                </a>
                                            </h3>
                                            <ul class="blog-grid-info">
                                                <li>Admin</li>
                                                <li>
                                                    {{ date('M  j, Y ',strtotime($indian_featured->created_at))}}
                                                </li>
                                            </ul>
                                            <p>
                                                {!! substr($indian_featured->description, 0,350)!!}
                                                {{ strlen($indian_featured->description) > 350 ? "..." : ""}}
                                            </p>
                                            <a class="r-more"
                                               href="{{url('show',$indian_featured->slug)}}">
                                                Read More
                                            </a>
                                        </div>
                                @endif
                                <!-- End Blog Grid -->
                                </div>

                                <div class="col-sm-5">
                                    <!-- Blog Thumb -->
                                    @foreach($indian as $row)
                                        <div class="blog-thumb-v2 margin-bottom-20">
                                            <div class="blog-thumb-grad">
                                                <a href="{{url('show',$row->slug)}}">
                                                    <img src="{{url('/uploads/Advertising1/'.$row->file)}}"
                                                         style="height:100px; width:100px; object-fit:fill;"
                                                         alt="Loading">
                                                </a>
                                                <a class="hover-grad"
                                                   href="{{url('show',$row->slug)}}">
                                                    {{-- <i class="fa fa-video-camera"></i> --}}
                                                </a>
                                            </div>
                                            <div class="blog-thumb-desc">
                                                <h3>
                                                    <a href="{{url('show',$row->slug)}}">
                                                        {{$row->title}}
                                                    </a>
                                                </h3>
                                                <p>
                                                    {!! substr($row->description, 0,60)!!}
                                                    {{ strlen($row->description) > 60 ? "..." : ""}}
                                                </p>
                                                <ul class="blog-thumb-info">
                                                    <li>
                                                        {{ date('M  j, Y ',strtotime($row->created_at))}}
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                @endforeach

                                <!-- End Blog Thumb -->
                                </div>
                            </div><!--/end row-->
                        </div>

                        <div class="tab-pane fade" id="tab-v4-a3">
                            <div class="row">
                                <div class="col-sm-7">
                                    <!-- Blog Grid -->
                                    @if($english_featured == null)
                                        <div class="blog-grid sm-margin-bottom-40">
                                            <img class="img-responsive"
                                                 src="{{url('/uploads/dashboard.png')}}"
                                                 style="height:324px; width:100%; object-fit:cover;"
                                                 alt="Loading!!">
                                            <h3><a href="#">No Featured Post</a></h3>
                                            <ul class="blog-grid-info">
                                            </ul>
                                            <p>no featured post</p>
                                            <a class="r-more" href="#">Read More</a>
                                        </div>
                                    @else
                                        <div class="blog-grid sm-margin-bottom-40">
                                            <img class="img-responsive"
                                                 src="{{url('/uploads/Advertising1/'.$english_featured->file)}}"
                                                 style="height:324px; width:100%; object-fit:cover;"
                                                 alt="Loading!!">
                                            <h3>
                                                <a href="{{url('show',$english_featured->slug)}}">
                                                    {{$english_featured->title}}
                                                </a>
                                            </h3>
                                            <ul class="blog-grid-info">
                                                <li>Admin</li>
                                                <li>
                                                    {{ date('M  j, Y ',strtotime($english_featured->created_at))}}
                                                </li>
                                            </ul>
                                            <p>
                                                {!! substr($english_featured->description, 0,350)!!}
                                                {{ strlen($english_featured->description) > 350 ? "..." : ""}}
                                            </p>
                                            <a class="r-more"
                                               href="{{url('show',$english_featured->slug)}}">
                                                Read More
                                            </a>
                                        </div>
                                @endif
                                <!-- End Blog Grid -->
                                </div>

                                <div class="col-sm-5">
                                    <!-- Blog Thumb -->
                                    @foreach($english as $row)
                                        <div class="blog-thumb-v2 margin-bottom-20">
                                            <div class="blog-thumb-grad">
                                                <a href="{{url('show',$row->slug)}}">
                                                    <img src="{{url('/uploads/Advertising1/'.$row->file)}}"
                                                         style="height:100px; width:100px; object-fit:fill;"
                                                         alt="Loading!!">
                                                </a>
                                                <a class="hover-grad"
                                                   href="{{url('show',$row->slug)}}">
                                                    {{-- <i class="fa fa-video-camera"></i> --}}
                                                </a>
                                            </div>
                                            <div class="blog-thumb-desc">
                                                <h3>
                                                    <a href="{{url('show',$row->slug)}}">
                                                        {{$row->title}}
                                                    </a>
                                                </h3>
                                                <p>
                                                    {!! substr($row->description, 0,60)!!}
                                                    {{ strlen($row->description) > 60 ? "..." : ""}}
                                                </p>
                                                <ul class="blog-thumb-info">
                                                    <li>
                                                        {{ date('M  j, Y ',strtotime($row->created_at))}}
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                @endforeach
                                <!-- End Blog Thumb -->
                                </div>
                            </div><!--/end row-->
                        </div>
                    </div>
                    <!-- End Tab Content -->
                </div>
                <!-- End Tab v4 -->

                <!-- Blog Carousel Heading -->
                <div class="blog-cars-heading">
                    <h2>Latest Advertising</h2>
                    <div class="owl-navigation">
                        <div class="customNavigation">
                            <a class="owl-btn prev-v3">
                                <i class="fa fa-caret-square-o-left"></i>
                            </a>
                            <a class="owl-btn next-v3">
                                <i class="fa fa-caret-square-o-right"></i>
                            </a>
                        </div>
                    </div><!--/navigation-->
                </div>
                <!-- End Blog Carousel Heading -->

                <!-- Blog Carousel -->
                <div class="blog-carousel margin-bottom-50">
                    <!-- Blog Grid -->
                    @foreach($advertisingpopular as $row)
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-5 sm-margin-bottom-20">
                                    <img class="img-responsive"
                                         src="{{url('/uploads/Advertising1/'.$row->file)}}"
                                         style="height: 250px; width:100%; object-fit:cover;"
                                         alt="{{$row->title}}">
                                </div>
                                <div class="col-sm-7">
                                    <div class="blog-grid">
                                        <h3>
                                            <a href="{{url('show',$row->slug)}}">
                                                {{$row->title}}
                                            </a>
                                        </h3>
                                        <ul class="blog-grid-info">
                                            <li>
                                                {{ date('M  j, Y ',strtotime($row->created_at))}}
                                            </li>
                                        </ul>
                                        <p>
                                            {!! substr($row->description, 0,650)!!}
                                            {{ strlen($row->description) > 650 ? "..." : ""}}
                                        </p>

                                        <a class="r-more"
                                           href="{{url('show',$row->slug)}}">
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- End Blog Carousel -->

                <!-- Tab v4 -->
                <div class="tab-v4 margin-bottom-20">
                    <!-- Tab Heading -->
                    <div class="tab-heading">
                        <h2>Featured Resources Section</h2>
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="home active">
                                <a href="#tab-v4-b1" role="tab" data-toggle="tab">Books</a>
                            </li>
                            <li>
                                <a href="#tab-v4-b2" role="tab" data-toggle="tab">Movies</a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Tab Heading -->

                    <!-- Tab Content -->
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab-v4-b1">
                            <div class="row">
                                <div class="col-sm-7">
                                    <!-- Blog Grid -->
                                    @if($books_featured == null)
                                        <div class="blog-grid sm-margin-bottom-40">
                                            <img class="img-responsive"
                                                 src="{{url('/uploads/Slider/im2.jpeg')}}"
                                                 style="height:324px; width:100%; object-fit:cover;"
                                                 alt="">
                                            <h3><a href="#">No Featured Post</a></h3>
                                            <ul class="blog-grid-info">
                                            </ul>
                                            <p>no featured post</p>
                                            <a class="r-more" href="#">Read More</a>
                                        </div>
                                    @else
                                        <div class="blog-grid md-margin-bottom-40">
                                            <div class="blog-grid-grad">
                                                <img class="img-responsive"
                                                     src="{{url('/uploads/OtherResource',$books_featured->file)}}"
                                                     style="height:324px; width:100%; object-fit:cover;"
                                                     alt="Loading!!">
                                                <a href="{{url('resource/show',$books_featured->slug)}}">
                                                    {{-- <i class="fa fa-video-camera"></i> --}}
                                                </a>
                                            </div>
                                            <h3>
                                                <a href="{{url('resource/show',$books_featured->slug)}}">
                                                    {{$books_featured->title}}
                                                </a>
                                            </h3>
                                            <ul class="blog-grid-info">
                                                <li>Admin</li>
                                                <li>
                                                    {{ date('M  j, Y ',strtotime($books_featured->created_at))}}
                                                </li>
                                            </ul>
                                            <p>
                                                {!! substr($books_featured->description, 0,350)!!}
                                                {{ strlen($books_featured->description) > 350 ? "..." : ""}}
                                            </p>
                                            <a class="r-more"
                                               href="{{url('resource/show',$books_featured->slug)}}">
                                                Read More
                                            </a>
                                        </div>
                                @endif
                                <!-- End Blog Grid -->
                                </div>

                                <div class="col-sm-5">
                                    <!-- Blog Thumb v2 -->
                                    @foreach($books as $book)
                                        <div class="blog-thumb-v2 margin-bottom-20">
                                            <div class="blog-thumb-grad">
                                                <a href="{{url('resource/show',$book->slug)}}">
                                                    <img src="{{url('/uploads/OtherResource',$book->file)}}"
                                                         style="height:100px; width:100px; object-fit:fill;"
                                                         alt="Loading!!">
                                                </a>
                                                <a href="{{url('resource/show',$book->slug)}}">
                                                    {{-- <i class="fa fa-video-camera"></i> --}}
                                                </a>
                                            </div>
                                            <div class="blog-thumb-desc">
                                                <h3>
                                                    <a href="{{url('resource/show',$book->slug)}}">
                                                        {{$book->title}}
                                                    </a>
                                                </h3>
                                                <p>
                                                    {!! substr($row->description, 0,60)!!}
                                                    {{ strlen($row->description) > 60 ? "..." : ""}}
                                                </p>
                                                <ul class="blog-thumb-info">
                                                    <li>
                                                        {{ date('M  j, Y ',strtotime($book->created_at))}}
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                @endforeach
                                <!-- End Blog Thumb v2 -->


                                    <!-- End Blog Thumb v2 -->
                                </div>
                            </div><!--/end row-->
                        </div>
                        <div class="tab-pane fade" id="tab-v4-b2">
                            <div class="row">
                                <div class="col-sm-7">
                                    <!-- Blog Grid -->
                                    @if($movies_featured == null)
                                        <div class="blog-grid sm-margin-bottom-40">
                                            <img class="img-responsive"
                                                 src="{{url('/uploads/Slider/im3.jpeg')}}"
                                                 style="height:324px; width:100%; object-fit:cover;"
                                                 alt="Loading!!">
                                            <h3><a href="#">No Featured Post</a></h3>
                                            <ul class="blog-grid-info">
                                            </ul>
                                            <p>no featured post</p>
                                            <a class="r-more" href="#">Read More</a>
                                        </div>
                                    @else
                                        <div class="blog-grid md-margin-bottom-40">
                                            <div class="blog-grid-grad">
                                                <img class="img-responsive"
                                                     src="{{url('/uploads/OtherResource',$movies_featured->file)}}"
                                                     style="height:324px; width:100%; object-fit:cover;"
                                                     alt="">
                                                <a href="{{url('resource/show',$movies_featured->slug)}}">
                                                </a>
                                            </div>
                                            <h3>
                                                <a href="{{url('resource/show',$movies_featured->slug)}}">
                                                    {{$movies_featured->title}}
                                                </a>
                                            </h3>
                                            <ul class="blog-grid-info">
                                                <li>Admin</li>
                                                <li>
                                                    {{ date('M  j, Y ',strtotime($movies_featured->created_at))}}
                                                </li>
                                            </ul>
                                            <p>
                                                {!! substr($movies_featured->description, 0,350)!!}
                                                {{ strlen($movies_featured->description) > 350 ? "..." : ""}}
                                            </p>
                                            <a class="r-more"
                                               href="{{url('resource/show',$movies_featured->slug)}}">
                                                Read More
                                            </a>
                                        </div>
                                @endif
                                <!-- End Blog Grid -->
                                </div>

                                <div class="col-sm-5">
                                    <!-- Blog Thumb v2 -->
                                    @foreach($movies as $movie)
                                        <div class="blog-thumb-v2 margin-bottom-20">
                                            <div class="blog-thumb-grad">
                                                <img src="{{url('/uploads/OtherResource',$movie->file)}}"
                                                     style="height:100px; width:100px; object-fit:fill;"
                                                     alt="Loading!!">
                                                <a href="blog_single.html">
                                                    {{-- <i class="fa fa-video-camera"></i> --}}
                                                </a>
                                            </div>
                                            <div class="blog-thumb-desc">
                                                <h3>
                                                    <a href="{{url('resource/show',$movie->slug)}}">
                                                        {{$movie->title}}
                                                    </a>
                                                </h3>
                                                <p>
                                                    {!! substr($movie->description, 0,60)!!}
                                                    {{ strlen($movie->description) > 60 ? "..." : ""}}
                                                </p>
                                                <ul class="blog-thumb-info">
                                                    <li>
                                                        {{ date('M  j, Y ',strtotime($movie->created_at))}}
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div><!--/end row-->
                        </div>

                    </div>
                    <!-- End Tab Content -->
                </div>
                <!-- End Tab v4 -->


                <!-- Blog Carousel Heading -->
                <div class="tab-v4 margin-bottom-20">
                    <div class="blog-cars-heading">
                        <h2>Latest Resource Section</h2>
                        <div class="owl-navigation">
                            <div class="customNavigation">
                                <a class="owl-btn prev-v3">
                                    <i class="fa fa-caret-square-o-left"></i>
                                </a>
                                <a class="owl-btn next-v3">
                                    <i class="fa fa-caret-square-o-right"></i>
                                </a>
                            </div>
                        </div><!--/navigation-->
                    </div>
                    <!-- End Blog Carousel Heading -->

                    <!-- Blog Carousel -->
                    <div class="blog-carousel">
                        <!-- Blog Grid -->
                        @foreach($resource_popular as $resource)
                            <div class="item">
                                <div class="row">
                                    <div class="col-sm-5 sm-margin-bottom-20">
                                        <img class="img-responsive"
                                             src="{{url('/uploads/OtherResource/'.$resource->file)}}"
                                             style="height: 250px; width:100%; object-fit:cover;"
                                             alt="{{$resource->title}}">
                                    </div>

                                    <div class="col-sm-7">
                                        <div class="blog-grid">
                                            <h3>
                                                <a href="{{url('resource/show',$resource->slug)}}">
                                                    {{$resource->title}}
                                                </a>
                                            </h3>
                                            <ul class="blog-grid-info">
                                                <li>
                                                    {{ date('M  j, Y ',strtotime($resource->created_at))}}
                                                </li>
                                            </ul>
                                            <p>
                                                {!! substr($resource->description, 0,650)!!}
                                                {{ strlen($resource->description) > 650 ? "..." : ""}}
                                            </p>
                                            <a class="r-more"
                                               href="{{url('resource/show',$resource->slug)}}">
                                                Read More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
                <!-- End Blog Carousel -->

                <!-- Tab v4 -->
                <div class="tab-v4 margin-bottom-20">
                    <!-- Tab Heading -->
                    <div class="tab-heading">
                        <h2>Featured Case Study Section</h2>
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="home active">
                                <a href="#tab-v4-b7"
                                   role="tab"
                                   data-toggle="tab">
                                    Case Study
                                </a>
                            </li>
                            {{-- <li>
                                <a href="#tab-v4-b8" role="tab" data-toggle="tab">Article</a>
                            </li> --}}
                        </ul>
                    </div>
                    <!-- End Tab Heading -->

                    <!-- Tab Content -->
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab-v4-b7">
                            <div class="row">
                                <div class="col-sm-7">
                                    <!-- Blog Grid -->
                                    @if($featured_post_casestudy == null)
                                        <div class="blog-grid sm-margin-bottom-40">
                                            <img class="img-responsive"
                                                 src="{{url('/uploads/Slider/bg.jpg')}}"
                                                 style="height:324px; width:100%; object-fit:cover;"
                                                 alt="Loading!!">
                                            <h3><a href="#">No Featured Post</a></h3>
                                            <ul class="blog-grid-info">
                                            </ul>
                                            <p>no featured post</p>
                                            <a class="r-more" href="#">Read More</a>
                                        </div>
                                    @else
                                        <div class="blog-grid md-margin-bottom-40">
                                            <div class="blog-grid-grad">
                                                <img class="img-responsive"
                                                     src="{{url('/uploads/CaseStudy',$featured_post_casestudy->file)}}"
                                                     style="height:324px; width:100%; object-fit:cover;"
                                                     alt="Loading!!">
                                                <a href="{{url('casestudy/show',$featured_post_casestudy->slug)}}">
                                                    {{-- <i class="fa fa-video-camera"></i> --}}
                                                </a>
                                            </div>
                                            <h3>
                                                <a href="{{url('casestudy/show',$featured_post_casestudy->slug)}}">
                                                    {!! substr($featured_post_casestudy->title, 0,15)!!}
                                                    {{ strlen($featured_post_casestudy->title) > 15 ? "..." : ""}}
                                                </a>
                                            </h3>
                                            <ul class="blog-grid-info">
                                                <li>Admin</li>
                                                <li>
                                                    {{ date('M  j, Y ',strtotime($featured_post_casestudy->created_at))}}
                                                </li>
                                            </ul>
                                            <p>
                                                {!! substr($featured_post_casestudy->description, 0,350)!!} {{ strlen($featured_post_casestudy->description) > 350 ? "..." : ""}}
                                            </p>
                                            <a class="r-more"
                                               href="{{url('casestudy/show',$featured_post_casestudy->slug)}}">
                                                Read More
                                            </a>
                                        </div>
                                @endif
                                <!-- End Blog Grid -->
                                </div>

                                <div class="col-sm-5">
                                    <!-- Blog Thumb v2 -->
                                    @foreach($allcasestudy as $casestudy)
                                        <div class="blog-thumb-v2 margin-bottom-20">
                                            <div class="blog-thumb-grad">
                                                <a href="{{url('casestudy/show',$casestudy->slug)}}">
                                                    <img src="{{url('/uploads/CaseStudy',$casestudy->file)}}"
                                                         style="height: 100px; width:100px; object-fit:fill"
                                                         alt="Lodaing!!">
                                                </a>
                                                <a href="{{url('casestudy/show',$casestudy->slug)}}">
                                                    {{-- <i class="fa fa-video-camera"></i> --}}
                                                </a>
                                            </div>
                                            <div class="blog-thumb-desc">
                                                <h3>
                                                    <a href="{{url('casestudy/show',$casestudy->slug)}}">
                                                        {!! substr($casestudy->title, 0,25)!!}
                                                        {{ strlen($casestudy->title) > 25 ? "..." : ""}}
                                                    </a>
                                                </h3>
                                                <p>
                                                    {!! substr($casestudy->description, 0,60)!!} {{ strlen($casestudy->description) > 60 ? "..." : ""}}
                                                </p>
                                                <ul class="blog-thumb-info">
                                                    <li>
                                                        {{ date('M  j, Y ',strtotime($casestudy->created_at))}}
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                @endforeach
                                <!-- End Blog Thumb v2 -->


                                    <!-- End Blog Thumb v2 -->
                                </div>
                            </div><!--/end row-->
                        </div>
                        <div class="tab-pane fade" id="tab-v4-b8">
                            <div class="row">
                                <div class="col-sm-7">
                                    <!-- Blog Grid -->
                                {{-- <div class="blog-grid md-margin-bottom-40">
                                    <div class="blog-grid-grad">
                                        <img class="img-responsive" src="{{url('public/uploads/Advertising1',$articlepopular1->file)}}" alt="">
                                        <a href="{{url('article/show',$articlepopular1->slug)}}">

                                        </a>
                                    </div>
                                    <h3><a href="{{url('article/show',$articlepopular1->slug)}}">{{$articlepopular1->title}}</a></h3>
                                    <ul class="blog-grid-info">
                                        <li>Admin</li>
                                        <li>{{ date('M  j, Y ',strtotime($articlepopular1->created_at))}}</li>

                                    </ul>
                                    <p>{{$articlepopular1->description}}</p>
                                    <a class="r-more" href="{{url('article/show',$articlepopular1->slug)}}">Read More</a>
                                </div> --}}
                                <!-- End Blog Grid -->
                                </div>

                                <div class="col-sm-5">
                                    <!-- Blog Thumb v2 -->
                                    @foreach($articlepopular as $row)
                                        <div class="blog-thumb-v2 margin-bottom-20">
                                            <div class="blog-thumb-grad">
                                                <img src="{{url('public/uploads/Advertising1',$row->file)}}" alt="">
                                                <a href="blog_single.html">
                                                    {{-- <i class="fa fa-video-camera"></i> --}}
                                                </a>
                                            </div>
                                            <div class="blog-thumb-desc">
                                                <h3><a href="{{url('article/show',$row->slug)}}">{{$row->title}}</a>
                                                </h3>
                                                <ul class="blog-thumb-info">
                                                    <li>{{ date('M  j, Y ',strtotime($row->created_at))}}</li>

                                                </ul>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div><!--/end row-->
                        </div>

                    </div>
                    <!-- End Tab Content -->
                </div>

                <div class="tab-v4 margin-bottom-20">
                    <!-- Blog Carousel Heading -->
                    <div class="blog-cars-heading">
                        <h2>Latest Case Study Section</h2>
                        <div class="owl-navigation">
                            <div class="customNavigation">
                                <a class="owl-btn prev-v3"><i class="fa fa-caret-square-o-left"></i></a>
                                <a class="owl-btn next-v3"><i class="fa fa-caret-square-o-right"></i></a>
                            </div>
                        </div><!--/navigation-->
                    </div>
                    <!-- End Blog Carousel Heading -->


                    <!-- Blog Carousel -->
                    <div class="blog-carousel">
                        <!-- Blog Grid -->
                        @foreach($casestudy_popular as $casestudy)
                            <div class="item">
                                <div class="row">
                                    <div class="col-sm-5 sm-margin-bottom-20">
                                        <img class="img-responsive"
                                             src="{{url('/uploads/CaseStudy/'.$casestudy->file)}}"
                                             style="height:250px; width:100%; object-fit:cover;"
                                             alt="{{$casestudy->title}}">
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="blog-grid">
                                            <h3>
                                                <a href="{{url('casestudy/show',$casestudy->slug)}}">
                                                    {{$casestudy->title}}
                                                </a>
                                            </h3>
                                            <ul class="blog-grid-info">
                                                <li>
                                                    {{ date('M  j, Y ',strtotime($casestudy->created_at))}}
                                                </li>
                                            </ul>
                                            <p>
                                                {!! substr($casestudy->description, 0,650)!!}
                                                {{ strlen($casestudy->description) > 650 ? "..." : ""}}
                                            </p>
                                            <a class="r-more" href="{{url('casestudy/show',$casestudy->slug)}}">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- End Blog Carousel -->
                </div>
                <!-- Tab v4 -->
                <div class="tab-v4 margin-bottom-20">
                    <!-- Tab Heading -->
                    <div class="tab-heading">
                        <h2>Featured Interview Section</h2>
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="home active">
                                <a href="#tab-v4-b5" role="tab" data-toggle="tab">
                                    Interview
                                </a>
                            </li>
                            {{-- <li>
                                <a href="#tab-v4-b6" role="tab" data-toggle="tab">Article</a>
                            </li> --}}
                        </ul>
                    </div>
                    <!-- End Tab Heading -->

                    <!-- Tab Content -->
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab-v4-b5">
                            <div class="row">
                                <div class="col-sm-7">
                                    <!-- Blog Grid -->
                                    @if($featured_post_interview == null)
                                        <div class="blog-grid sm-margin-bottom-40">
                                            <img class="img-responsive"
                                                 src="{{url('/uploads/Slider/im1.jpeg')}}"
                                                 style="height:324px; width:100%; object-fit:cover;"
                                                 alt="Loading!!">
                                            <h3><a href="#">No Featured Post</a></h3>
                                            <ul class="blog-grid-info">
                                            </ul>
                                            <p>no featured post</p>
                                            <a class="r-more" href="#">Read More</a>
                                        </div>
                                    @else
                                        <div class="blog-grid md-margin-bottom-40">
                                            <div class="blog-grid-grad">
                                                <img class="img-responsive"
                                                     src="{{url('/uploads/Interview',$featured_post_interview->file)}}"
                                                     style="height:324px; width:100%; object-fit:cover;"
                                                     alt="Loading!!">
                                                <a href="{{url('interview/show',$featured_post_interview->slug)}}">
                                                    {{-- <i class="fa fa-video-camera"></i> --}}
                                                </a>
                                            </div>
                                            <h3>
                                                <a href="{{url('interview/show',$featured_post_interview->slug)}}">
                                                    {{$featured_post_interview->title}}
                                                </a>
                                            </h3>
                                            <ul class="blog-grid-info">
                                                <li>Admin</li>
                                                <li>
                                                    {{ date('M  j, Y ',strtotime($featured_post_interview->created_at))}}
                                                </li>
                                            </ul>
                                            <p>
                                                {!! substr($featured_post_interview->description, 0,350)!!}
                                                {{ strlen($featured_post_interview->description) > 350 ? "..." : ""}}
                                            </p>
                                            <a class="r-more"
                                               href="{{url('interview/show',$featured_post_interview->slug)}}">
                                                Read More
                                            </a>
                                        </div>
                                @endif
                                <!-- End Blog Grid -->
                                </div>
                                <div class="col-sm-5">
                                    <!-- Blog Thumb v2 -->
                                    @foreach($allinterview_section as $interview)
                                        <div class="blog-thumb-v2 margin-bottom-20">
                                            <div class="blog-thumb-grad">
                                                <a href="{{url('interview/show',$interview->slug)}}">
                                                    <img src="{{url('/uploads/Interview',$interview->file)}}"
                                                         style="height:100px; width:100px; object-fit:fill;"
                                                         alt="Loading!!">
                                                </a>
                                                <a href="{{url('interview/show',$interview->slug)}}">
                                                    {{-- <i class="fa fa-video-camera"></i> --}}
                                                </a>
                                            </div>
                                            <div class="blog-thumb-desc">
                                                <h3>
                                                    <a href="{{url('interview/show',$interview->slug)}}">{{$interview->title}}</a>
                                                </h3>
                                                <p>
                                                    {!! substr($interview->description, 0,60)!!} {{ strlen($interview->description) > 60 ? "..." : ""}}</p>
                                                <ul class="blog-thumb-info">
                                                    <li>{{ date('M  j, Y ',strtotime($interview->created_at))}}</li>

                                                </ul>
                                            </div>
                                        </div>
                                @endforeach
                                <!-- End Blog Thumb v2 -->


                                    <!-- End Blog Thumb v2 -->
                                </div>
                            </div><!--/end row-->
                        </div>

                    </div>
                    <!-- End Tab Content -->
                </div>


                <div class="blog-cars-heading">
                    <h2>Latest Interview Section</h2>
                    <div class="owl-navigation">
                        <div class="customNavigation">
                            <a class="owl-btn prev-v3"><i class="fa fa-caret-square-o-left"></i></a>
                            <a class="owl-btn next-v3"><i class="fa fa-caret-square-o-right"></i></a>
                        </div>
                    </div><!--/navigation-->
                </div>
                <!-- End Blog Carousel Heading -->


                <!-- Blog Carousel -->
                <div class="blog-carousel margin-bottom-50">
                    <!-- Blog Grid -->
                    @foreach($interview_popular as $interview)
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-5 sm-margin-bottom-20">
                                    <img class="img-responsive"
                                         src="{{url('/uploads/Interview/'.$interview->file)}}"
                                         style="height:250px; width:100%; object-fit:cover;"
                                         alt="{{$interview->title}}">
                                </div>
                                <div class="col-sm-7">
                                    <div class="blog-grid">
                                        <h3>
                                            <a href="{{url('interview/show',$interview->slug)}}">
                                                {{$interview->title}}
                                            </a>
                                        </h3>
                                        <ul class="blog-grid-info">
                                            <li>{{ date('M  j, Y ',strtotime($interview->created_at))}}</li>
                                        </ul>
                                        <p>
                                            {!! substr($interview->description, 0,350)!!}
                                            {{ strlen($interview->description) > 350 ? "..." : ""}}
                                        </p>
                                        <a class="r-more"
                                           href="{{url('interview/show',$interview->slug)}}">
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- End Tab v4 -->


                <!-- Blog Grid -->
            {{-- <div class="margin-bottom-50">
                <h2 class="title-v4">Monthly News</h2>

                <!-- Blog Grid -->
                <div class="row margin-bottom-50">
                    @foreach($advertisingmonthly as $advertisingmonth)
                        @foreach($advertisingmonth as $row)
                    <div class="col-sm-6 sm-margin-bottom-50">

                        <div class="blog-grid">
                            <img class="img-responsive" src="{{url('public/uploads/Advertising1/'.$row->file)}}" style="height: 250px; width:250px";  alt="{{$row->title}}">
                            <h3><a href="{{url('show',$row->slug)}}">{!! substr($row->title, 0,25)!!} {{ strlen($row->title) > 25 ? "..." : ""}}</a></h3>
                            <ul class="blog-grid-info">
                                <li>Admin</li>
                                <li>{{ date('M  j, Y ',strtotime($row->created_at))}}</li>

                            </ul>
                        </div>

                    </div>
                    @endforeach
                    @endforeach

                </div><!--/end row-->
                <!-- End Blog Grid -->


            </div> --}}
            <!-- End Blog Grid -->

                <!-- Pager v4
                <ul class="pager pager-v4 md-margin-bottom-50">
                    <li class="previous"><a class="rounded-3x" href="#">&larr; Older</a></li>
                    <li class="page-amount">1 of 7</li>
                    <li class="next"><a class="rounded-3x" href="#">Newer &rarr;</a></li>
                </ul>
                End Pager v4 -->
            </div>
            <!-- End Main Content -->


            <!-- Right Sidebar -->
            <div class="col-md-3">

                <!-- Social Shares -->
                <div class="margin-bottom-50">
                    <h2 class="title-v4">Social</h2>
                    <ul class="blog-social-shares">
                        <li>
                            <i class="rounded-x fb fa fa-facebook"></i>
                            <a class="rounded-3x" href="#">Like</a>
                            <span class="counter">31,702</span>
                        </li>
                        <li>
                            <i class="rounded-x tw fa fa-twitter"></i>
                            <a class="rounded-3x" href="#">Follow Us</a>
                            <span class="counter">164,290</span>
                        </li>
                        <li>
                            <i class="rounded-x gp fa fa-google-plus"></i>
                            <a class="rounded-3x" href="#">Add to circle</a>
                            <span class="counter">5,425,764</span>
                        </li>
                    </ul>
                </div>
                <!-- End Social Shares -->

                <!-- facebookc Posts -->
                <div class="margin-bottom-50">
                    <h2 class="title-v4">Facebook Posts</h2>
                    <iframe
                            src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fmarketingmaestronpl%2F&tabs=timeline&width=350px&height=350px&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                            width="100%"
                            height="250px"
                            style="border:none;overflow:hidden"
                            scrolling="no"
                            frameborder="0"
                            allowTransparency="true"
                            allow="encrypted-media">
                    </iframe>
                </div><!-- facebookc Posts -->

                <div class="margin-bottom-50">
                    <h2 class="title-v4"> Ads block </h2>
                    <div class="fixme">
                        <img class="img-responsive margin-bottom-5"
                            src="{{url('/uploads/Slider/im1.jpeg')}}"
                            style="height: 250px; width:100%;"
                            alt="">
                        <img class="img-responsive margin-bottom-5"
                             src="{{url('/uploads/Slider/im2.jpeg')}}"
                             style="height: 250px; width:100%;"
                             alt="">
                        <div class="text-center">
                             <h4 class="text-center;" style="font-weight: bold;"> Skip Ad? </h4>
                        </div>
                    </div>
                </div>

            </div>
            <!-- End Right Sidebar -->
        </div>
    </div>


@endsection