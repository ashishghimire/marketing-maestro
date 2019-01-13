@extends('frontend.marketing.master')
@section('section')

    <!--=== Container Part ===-->
    <div class="container content-sm">
        <div class="row">
            <div class="col-md-9 md-margin-bottom-50">
                <!-- Blog Grid -->
                @foreach($peak as $row)
                    <div class="row margin-bottom-50">
                        <div class="col-sm-4 sm-margin-bottom-20">
                            <img class="img-responsive"
                                 src="{{url('/uploads/OtherResource',$row->file)}}"
                                 alt="">
                        </div>
                        <div class="col-sm-8">
                            <div class="blog-grid">
                                <h3><a href="{{url('resource/show',$row->slug)}}">{{$row->title}}</a></h3>
                                <ul class="blog-grid-info">
                                    <li>Admin</li>
                                    <li>Published: {{ date('M  j, Y ',strtotime($row->created_at))}}</li>
                                    {{-- <li><a href="#"><i class="fa fa-comments"></i> 0</a></li> --}}
                                </ul>
                                <p>{!! substr($row->description, 0,350)!!} {{ strlen($row->description) > 350 ? "..." : ""}}</p>
                                <a class="r-more" href="{{url('resource/show',$row->slug)}}">Read More</a>
                            </div>
                        </div>
                    </div>
            @endforeach
            <!-- End Blog Grid -->
                <ul>
                    <div class="text-center">
                        {{$peak->links()}}
                    </div>
                </ul>
                <!-- End Pager v4 -->
            </div>

            <div class="col-md-3">
                <!-- Blog Thumb v2 -->
            @include('frontend.marketing.partials.relatedcontent')
            <!-- End Blog Thumb v2 -->

                <!-- Social Shares -->
            @include('frontend.marketing.partials.socialshares')
            <!-- End Social Shares -->

                @include('frontend.marketing.partials.fixedad')
            </div>
        </div><!--/end row-->
    </div>
    <!--=== End Container Part ===-->

@stop