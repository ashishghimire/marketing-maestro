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
                            <li>Evan Bartlett</li>
                            <li>Published: {{ date('M  j, Y ',strtotime($data->created_at))}}</li>
                        </ul>
                        <div class="pull-right">
                            <!-- Go to www.addthis.com/dashboard to customize your tools -->
                            <div class="addthis_sharing_toolbox"></div>
                        </div>
                    </div>
                    <img class="img-responsive" src="{{url('/uploads/Interview/'.$data->file)}}"
                         style="height:100%; width:100%; object-fit:cover;"
                         alt="">
                </div>
                <!-- End Blog Grid -->
                <p>{!!$data->description!!}</p><br>


                <ul class="source-list">
                    <li><strong>Source:</strong> <a href="#">The Next Web</a></li>
                    <li><strong>Author:</strong> <a href="#">Admin</a></li>
                </ul>

                <!-- Blog Grid Tagds -->
                <ul class="blog-grid-tags">
                    <li class="head">Tags</li>
                    <li><a href="#">Hi-Tech</a></li>
                    <li><a href="#">Gadgets</a></li>
                    <li><a href="#">Study</a></li>
                    <li><a href="#">Skills</a></li>
                </ul>
                <!-- End Blog Grid Tagds -->
            </div>

            <div class="col-md-3">
                <!-- Blog Thumb v2 -->
                @include('frontend.marketing.partials.relatedcontent')
                <!-- End Blog Thumb v2 -->

                <!-- Social Shares -->
                <div class="margin-bottom-20">
                    <h2 class="title-v4">Social</h2>
                    <ul class="blog-social-shares">
                        <li>
                            <i class="rounded-x fb fa fa-facebook"></i>
                            <a class="rounded-3x" href="https://www.facebook.com/marketingmaestronpl/">Like Us</a>
                        </li>
                        <li>
                            <i class="rounded-x tw fa fa-twitter"></i>
                            <a class="rounded-3x" href="#">Follow Us</a>
                        </li>
                        <li>
                            <i class="rounded-x gp fa fa-google-plus"></i>
                            <a class="rounded-3x" href="#">Add to circle</a>
                        </li>
                    </ul>
                </div>
                <!-- End Social Shares -->
                <!-- Fixed Ad Section -->
                @include('frontend.marketing.partials.fixedad')
            </div>
        </div>
    </div>
    <!--=== End Container Part ===-->

@stop