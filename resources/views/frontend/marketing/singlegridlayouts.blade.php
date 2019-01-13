@extends('frontend.marketing.master')
@section('section')
    <!-- Container Part -->
    <div class="container content">
        <div class="row">
            <div class="col-md-9">
                <!-- Blog Grid -->
                <div class="blog-grid margin-bottom-30">
                    <h2 class="blog-grid-title-lg">{{$data->title}}</h2>
                    <div class="overflow-h margin-bottom-10">
                        <ul class="blog-grid-info pull-left">
                            <li>Published: {{ date('M  j, Y ',strtotime($data->created_at))}}</li>
                        </ul>
                        <div class="pull-right">
                            <!-- Go to www.addthis.com/dashboard to customize your tools -->
                            <div class="addthis_sharing_toolbox"></div>
                        </div>
                    </div>
                    <img class="img-responsive"
                         src="{{isset($data->coverpic) ? url('/uploads/Advertising1/cover-pics'.$data->coverpic) : url('/uploads/Advertising1/'.$data->file)}}"
                         style="height:100%; width:100%; object-fit:cover;"
                         alt="">
                </div>
                <!-- End Blog Grid -->
                <p>{!!$data->description!!}</p><br>


                <ul class="source-list">
                    <li><strong>Author:</strong> <a href="#">Admin</a></li>
                </ul>

                <!-- Blog Grid Tagds -->
                <ul class="blog-grid-tags">
                    <strong>Category:</strong>
                    <li class="head">{{$data->advertisingcategory->title}}</li>


                    {{--  @foreach()
                     <li><a href="#">Hi-Tech</a></li>
                     @endforeach --}}

                </ul>
                <!-- End Blog Grid Tagds -->
            </div>
            <div class="col-md-3">
                <!-- Blog Thumb v2 -->
                <div class="margin-bottom-20">
                    <h2 class="title-v4">Recent News</h2>

                    @foreach($recentad as $row)
                        <div class="blog-thumb blog-thumb-circle margin-bottom-15">
                            <div class="blog-thumb-hover">
                                <img class="rounded-x" src="{{url('public/uploads/Advertising1/'.$row->file)}}"
                                     style="height: 150px; width:150px" alt="">
                                <a class="hover-grad" href="{{url('show',$row->slug)}}"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="blog-thumb-desc">
                                <h3><a href="{{url('show',$row->slug)}}">{{$row->title}}</a></h3>
                                <ul class="blog-thumb-info">
                                    <li>{{ date('M  j, Y ',strtotime($row->created_at))}}</li>
                                    {{-- <li><a href="#"><i class="fa fa-comments"></i> 0</a></li> --}}
                                </ul>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- End Blog Thumb v2 -->

            @include('frontend.marketing.partials.socialshares')

            <!-- Fixed Ad Section -->
                @include('frontend.marketing.partials.fixedad')
            </div>
        </div>
    </div>
    <!--=== End Container Part ===-->
@stop