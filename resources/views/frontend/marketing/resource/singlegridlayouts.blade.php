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
                         src="{{isset($data->coverpic) ? url('/uploads/OtherResource/cover-pics',$data->coverpic) : url('/uploads/OtherResource',$data->file)}}"                         style="height:100%; width:100%; object-fit:cover;"
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
                    <li class="head">{{$data->resourcecategory->title}}</li>
                </ul>
                <!-- End Blog Grid Tagds -->
            </div>
            <div class="col-md-3">
            @include('frontend.marketing.partials.relatedcontent')
            <!-- End Blog Thumb v2 -->

                <!-- Social Shares -->
            @include('frontend.marketing.partials.socialshares')
            <!-- End Social Shares -->

                <!-- Fixed Ad Section -->
                @include('frontend.marketing.partials.fixedad')
            </div>
        </div>
    </div>
    <!--=== End Container Part ===-->

@stop