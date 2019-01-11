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
						 src="{{url('/uploads/CaseStudy',$data->file)}}"
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
					<strong>Category:</strong> <li class="head">Case Study</li>
				</ul>
			</div>

			<div class="col-md-3">
				<!-- Blog Thumb v2 -->
				<div class="margin-bottom-20">
						<h2 class="title-v4">Recent News</h2>
	
						<div class="blog-thumb blog-thumb-circle margin-bottom-15">
							<div class="blog-thumb-hover">
								<img class="rounded-x" src="assets/img/blog/img1.jpg" alt="">
								<a class="hover-grad" href="blog_single.html"><i class="fa fa-link"></i></a>
							</div>
							<div class="blog-thumb-desc">
								<h3><a href="blog_single.html">Misused words and how to use them correctly</a></h3>
								<ul class="blog-thumb-info">
									<li>Mar 6, 2015</li>
									{{-- <li><a href="#"><i class="fa fa-comments"></i> 0</a></li> --}}
								</ul>
							</div>
						</div>
	
						<div class="blog-thumb blog-thumb-circle margin-bottom-15">
							<div class="blog-thumb-hover">
								<img class="rounded-x" src="assets/img/blog/img22.jpg" alt="">
								<a class="hover-grad" href="blog_single.html"><i class="fa fa-link"></i></a>
							</div>
							<div class="blog-thumb-desc">
								<h3><a href="blog_single.html">8 health benefits and drawbacks of coffee</a></h3>
								<ul class="blog-thumb-info">
									<li>Mar 6, 2015</li>
									{{-- <li><a href="#"><i class="fa fa-comments"></i> 0</a></li> --}}
								</ul>
							</div>
						</div>
	
						<div class="blog-thumb blog-thumb-circle margin-bottom-15">
							<div class="blog-thumb-hover">
								<img class="rounded-x" src="assets/img/blog/img2.jpg" alt="">
								<a class="hover-grad" href="blog_single.html"><i class="fa fa-link"></i></a>
							</div>
							<div class="blog-thumb-desc">
								<h3><a href="blog_single.html">What are the top five books you must read?</a></h3>
								<ul class="blog-thumb-info">
									<li>Mar 6, 2015</li>
									{{-- <li><a href="#"><i class="fa fa-comments"></i> 0</a></li> --}}
								</ul>
							</div>
						</div>
	
						<div class="blog-thumb blog-thumb-circle">
							<div class="blog-thumb-hover">
								<img class="rounded-x" src="assets/img/blog/img21.jpg" alt="">
								<a class="hover-grad" href="blog_single.html"><i class="fa fa-link"></i></a>
							</div>
							<div class="blog-thumb-desc">
								<h3><a href="blog_single.html">Stylish things to do, see and buy this week</a></h3>
								<ul class="blog-thumb-info">
									<li>Mar 6, 2015</li>
									{{-- <li><a href="#"><i class="fa fa-comments"></i> 0</a></li> --}}
								</ul>
							</div>
						</div>
					</div>
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