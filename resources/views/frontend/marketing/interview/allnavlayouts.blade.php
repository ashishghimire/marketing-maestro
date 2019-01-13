@extends('frontend.marketing.master')
@section('section')
    <!--=== Container Part ===-->
    <div class="container content-sm">
        <div class="row">
            <div class="col-md-9 md-margin-bottom-50">
                <!-- Blog Grid -->
                @forelse($allinterview as $row)
                    <div class="row margin-bottom-50">
                        <div class="col-sm-4 sm-margin-bottom-20">
                            <img class="img-responsive"
                                 src="{{url('/uploads/Interview',$row->file)}}"
                                 alt="">
                        </div>
                        <div class="col-sm-8">
                            <div class="blog-grid">
                                <h3><a href="{{url('interview/show',$row->slug)}}">{{$row->title}}</a></h3>
                                <ul class="blog-grid-info">
                                    <li>Admin</li>
                                    <li>Published: {{ date('M  j, Y ',strtotime($row->created_at))}}</li>
                                    {{-- <li><a href="#"><i class="fa fa-comments"></i> 0</a></li> --}}
                                </ul>
                                <p>{!! substr($row->description, 0,350)!!} {{ strlen($row->description) > 350 ? "..." : ""}}</p>
                                <a class="r-more" href="{{url('interview/show',$row->slug)}}">Read More</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div> No Intervew Post Yet!!</div>
            @endforelse
            <!-- End Blog Grid -->
                <ul>
                    <div class="text-center">
                        {{$allinterview->links()}}
                    </div>
                    {{-- <li class="previous"><a class="rounded-3x" href="#">&larr; Older</a></li>
                    <li class="page-amount">1 of 7</li>
                    <li class="next"><a class="rounded-3x" href="#">Newer &rarr;</a></li> --}}
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