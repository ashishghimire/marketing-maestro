@extends('frontend.marketing.master')
@section('section')
    <!-- Slider Section -->
    @include('frontend.marketing.partials.slider')
    <!-- End of Slider Section -->

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
                                            <img class="img-responsive notfeatured-image"
                                                 src="{{url('/uploads/Slider/im1.jpeg')}}"
                                                 alt="Loading!!">
                                            <h3><a href="#">No Featured Post</a></h3>
                                            <ul class="blog-grid-info">
                                            </ul>
                                            <p>Oops!! No Nepali Featured Post Yet.</p>
                                            {{-- <a class="r-more" href="#tab-v4-a1">Read More</a> --}}
                                        </div>
                                    @else
                                        <div class="blog-grid sm-margin-bottom-40">
                                            <img class="img-responsive featured-image"
                                                 src="{{url('/uploads/Advertising1/'.$nepali_featured->file)}}"
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
                                    @forelse($nepali as $row)
                                        <div class="blog-thumb-v2 margin-bottom-20">
                                            <div class="blog-thumb-grad">
                                                <a href="{{url('show',$row->slug)}}">
                                                    <img class="small-image" 
                                                         src="{{url('/uploads/Advertising1/'.$row->file)}}"                                                         alt="">
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
                                        @empty
                                        <div>No content yet!!</div>
                                    @endforelse

                                </div>
                            </div><!--/end row-->
                        </div>
                        <div class="tab-pane fade" id="tab-v4-a2">
                            <div class="row">
                                <div class="col-sm-7">
                                    <!-- Blog Grid -->
                                    @if($indian_featured == null)
                                        <div class="blog-grid sm-margin-bottom-40">
                                            <img class="img-responsive notfeatured-image"
                                                 src="{{url('/uploads/Slider/im1.jpeg')}}"
                                                 alt=" Loading!! ">
                                            <h3><a href="#">No Featured Post</a></h3>
                                            <ul class="blog-grid-info">
                                            </ul>
                                            <p>Oops!! No Indian Featured Post Yet.</p>
                                            {{-- <a class="r-more" href="#">Read More</a> --}}
                                        </div>
                                    @else
                                        <div class="blog-grid sm-margin-bottom-40">
                                            <img class="img-responsive featured-image"
                                                 src="{{url('/uploads/Advertising1/'.$indian_featured->file)}}"
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
                                    @forelse($indian as $row)
                                        <div class="blog-thumb-v2 margin-bottom-20">
                                            <div class="blog-thumb-grad">
                                                <a href="{{url('show',$row->slug)}}">
                                                    <img class="small-image"
                                                         src="{{url('/uploads/Advertising1/'.$row->file)}}"
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
                                        @empty 
                                        <div> No content yet!! </div>
                                @endforelse

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
                                                 src="{{url('/uploads/Slider/im1.jpeg')}}"
                                                 style="height:482px; width:100%; object-fit:cover;"
                                                 alt="Loading!!">
                                            <h3><a href="#">Oops!! No English Featured Post Yet.</a></h3>
                                            <ul class="blog-grid-info">
                                            </ul>
                                            <p>No featured post</p>
                                            {{-- <a class="r-more" href="#">Read More</a> --}}
                                        </div>
                                    @else
                                        <div class="blog-grid sm-margin-bottom-40">
                                            <img class="img-responsive featured-image"
                                                 src="{{url('/uploads/Advertising1/'.$english_featured->file)}}"
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
                                    @forelse($english as $row)
                                        <div class="blog-thumb-v2 margin-bottom-20">
                                            <div class="blog-thumb-grad">
                                                <a href="{{url('show',$row->slug)}}">
                                                    <img class="small-image"
                                                         src="{{url('/uploads/Advertising1/'.$row->file)}}"
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
                                        @empty
                                        <div> No content yet!! </div>
                                @endforelse
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
                    @forelse($advertisingpopular as $row)
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-5 sm-margin-bottom-20">
                                    <img class="img-responsive latest-image"
                                         src="{{url('/uploads/Advertising1/'.$row->file)}}"
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
                        @empty
                        <div>No content yet!!</div>
                    @endforelse
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
                                            <img class="img-responsive notfeatured-image"
                                                 src="{{url('/uploads/Slider/im1.jpeg')}}"                                                 alt="">
                                            <h3><a href="#">No Featured Post</a></h3>
                                            <ul class="blog-grid-info">
                                            </ul>
                                            <p>Oops!! No Featured Post Yet.</p>
                                            {{-- <a class="r-more" href="#">Read More</a> --}}
                                        </div>
                                    @else
                                        <div class="blog-grid md-margin-bottom-40">
                                            <div class="blog-grid-grad">
                                                <img class="img-responsive featured-image"
                                                     src="{{url('/uploads/OtherResource',$books_featured->file)}}"
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
                                @forelse($books as $book)
                                    <div class="blog-thumb-v2 margin-bottom-20">
                                        <div class="blog-thumb-grad">
                                            <a href="{{url('resource/show',$book->slug)}}">
                                                <img class="small-image"
                                                     src="{{url('/uploads/OtherResource',$book->file)}}"
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
                                                {!! substr($book->description, 0,60)!!}
                                                {{ strlen($book->description) > 60 ? "..." : ""}}
                                            </p>
                                            <ul class="blog-thumb-info">
                                                <li>
                                                    {{ date('M  j, Y ',strtotime($book->created_at))}}
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                @empty
                                    <div>No content yet!!</div> 
                                @endforelse
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
                                            <img class="img-responsive notfeatured-image"
                                                 src="{{url('/uploads/Slider/im1.jpeg')}}"
                                                 alt="Loading!!">
                                            <h3><a href="#">No Featured Post</a></h3>
                                            <ul class="blog-grid-info">
                                            </ul>
                                            <p>Oops!! No Featured Post Yet.</p>
                                            {{-- <a class="r-more" href="#">Read More</a> --}}
                                        </div>
                                    @else
                                        <div class="blog-grid md-margin-bottom-40">
                                            <div class="blog-grid-grad">
                                                <img class="img-responsive featured-image"
                                                     src="{{url('/uploads/OtherResource',$movies_featured->file)}}"
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
                                    @forelse($movies as $movie)
                                        <div class="blog-thumb-v2 margin-bottom-20">
                                            <div class="blog-thumb-grad">
                                                <img class="small-image"
                                                     src="{{url('/uploads/OtherResource',$movie->file)}}"
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
                                    @empty
                                        <div> No content yet!! </div>
                                    @endforelse
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
                        @forelse($resource_popular as $resource)
                            <div class="item">
                                <div class="row">
                                    <div class="col-sm-5 sm-margin-bottom-20">
                                        <img class="img-responsive latest-image"
                                             src="{{url('/uploads/OtherResource/'.$resource->file)}}"
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
                        @empty
                            <div> No content yet!! </div>
                        @endforelse

                    </div>
                </div>
                <!-- End Blog Carousel -->

                <!-- Tab v4 -->
                <div class="tab-v4 margin-bottom-20">
                    <!-- Tab Heading -->
                    <div class="tab-heading">
                        <h2>Featured Case Study Section</h2>
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
                                            <img class="img-responsive notfeatured-image"
                                                 src="{{url('/uploads/Slider/im1.jpeg')}}"
                                                 alt="Loading!!">
                                            <h3><a href="#">No Featured Post</a></h3>
                                            <ul class="blog-grid-info">
                                            </ul>
                                            <p>Oops!! No Featured Case Study Yet!</p>
                                            {{-- <a class="r-more" href="#">Read More</a> --}}
                                        </div>
                                    @else
                                        <div class="blog-grid md-margin-bottom-40">
                                            <div class="blog-grid-grad">
                                                <img class="img-responsive featured-image"
                                                     src="{{url('/uploads/CaseStudy',$featured_post_casestudy->file)}}"
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
                                @forelse($allcasestudy as $casestudy)
                                    <div class="blog-thumb-v2 margin-bottom-20">
                                        <div class="blog-thumb-grad">
                                            <a href="{{url('casestudy/show',$casestudy->slug)}}">
                                                <img class="small-image"
                                                     src="{{url('/uploads/CaseStudy',$casestudy->file)}}"
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
                                @empty
                                    <div> No content yet!! </div>
                                @endforelse
                                <!-- End Blog Thumb v2 -->
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
                        @forelse($casestudy_popular as $casestudy)
                            <div class="item">
                                <div class="row">
                                    <div class="col-sm-5 sm-margin-bottom-20">
                                        <img class="img-responsive latest-image"
                                             src="{{url('/uploads/CaseStudy/'.$casestudy->file)}}"
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
                        @empty
                            <div> No content yet!! </div>
                        @endforelse
                    </div>
                    <!-- End Blog Carousel -->
                </div>
                <!-- Tab v4 -->
                <div class="tab-v4 margin-bottom-20">
                    <!-- Tab Heading -->
                    <div class="tab-heading">
                        <h2>Featured Interview Section</h2>
                        <ul class="nav nav-tabs" role="tablist">
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
                                            <img class="img-responsive notfeatured-image"
                                                 src="{{url('/uploads/Slider/im2.jpeg')}}"
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
                                                <img class="img-responsive featured-image"
                                                     src="{{url('/uploads/Interview',$featured_post_interview->file)}}"
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
                                    @forelse($allinterview_section as $interview)
                                        <div class="blog-thumb-v2 margin-bottom-20">
                                            <div class="blog-thumb-grad">
                                                <a href="{{url('interview/show',$interview->slug)}}">
                                                    <img class="small-image"
                                                         src="{{url('/uploads/Interview',$interview->file)}}"
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
                                    @empty
                                        <div> No content yet!! </div>
                                @endforelse
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
                    @forelse($interview_popular as $interview)
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-5 sm-margin-bottom-20">
                                    <img class="img-responsive latest-image"
                                         src="{{url('/uploads/Interview/'.$interview->file)}}"
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
                    @empty
                        <div> No content yet!! </div>
                    @endforelse
                </div>
                <!-- End Tab v4 -->
            </div>
            <!-- End Main Content -->

            <!-- Right Sidebar -->
            <div class="col-md-3">
                @include('frontend.marketing.partials.sidebar', ['homepage' => true])
            </div>
            <!-- End Right Sidebar -->
        </div>
    </div>


@endsection