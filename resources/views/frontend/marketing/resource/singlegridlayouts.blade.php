@extends('frontend.marketing.master')
@section('section')

	<!--=== Breadcrumbs ===-->
	<div class="breadcrumbs breadcrumbs-light">
		<div class="container">
			<h1 class="pull-left">Blog Single Page</h1>
			<ul class="pull-right breadcrumb">
				<li><a href="index.html">Home</a></li>
				<li><a href="">Page</a></li>
				<li class="active">Blog Single Page</li>
			</ul>
		</div>
	</div><!--/breadcrumbs-->
	<!--=== End Breadcrumbs ===-->

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
					<img class="img-responsive" src="{{url('public/uploads/OtherResource',$data->file)}}" alt="">
				</div>
				<!-- End Blog Grid -->
				<p>{!!$data->description!!}</p><br>
				

				<ul class="source-list">
					<li><strong>Author:</strong> <a href="#">Admin</a></li>
					
				</ul>

				<!-- Blog Grid Tagds -->
				<ul class="blog-grid-tags">
				   	<strong>Category:</strong> <li class="head">{{$data->resourcecategory->title}}</li>
				</ul>
				<!-- End Blog Grid Tagds -->

				<!-- Blog Thumb v4 -->
				<div class="margin-bottom-50">
					<h2 class="title-v4">Related Posts</h2>
					<div class="row margin-bottom-50">
						<div class="col-sm-3 col-xs-6 sm-margin-bottom-30">
							<!-- Blog Thumb v4 -->
							<div class="blog-thumb-v4">
								<div class="blog-thumb-item">
									<img class="img-responsive margin-bottom-10" src="assets/img/blog/img40.jpg" alt="">
									<div class="center-wrap">
										<div class="center-alignCenter">
											<div class="center-body">
												<a href="https://player.vimeo.com/video/74197060" class="fbox-modal fancybox.iframe video-play-btn" title="What will fashion be like in 25 years?">
													<img class="video-play-btn" src="assets/img/icons/video-play.png" alt="">
												</a>
											</div>
										</div>
									</div><!--/end center wrap-->
								</div>
								<h3><a href="blog_single.html">What will fashion be like in 25 years?</a></h3>
							</div>
							<!-- End Blog Thumb v4 -->
						</div>

						<div class="col-sm-3 col-xs-6 sm-margin-bottom-30">
							<!-- Blog Thumb v4 -->
							<div class="blog-thumb-v4">
								<img class="img-responsive margin-bottom-10" src="assets/img/blog/img35.jpg" alt="">
								<h3><a href="blog_single.html">Where will be your next destination</a></h3>
							</div>
							<!-- End Blog Thumb v4 -->
						</div>

						<div class="col-sm-3 col-xs-6">
							<!-- Blog Thumb v4 -->
							<div class="blog-thumb-v4">
								<div class="blog-thumb-item">
									<img class="img-responsive margin-bottom-10" src="assets/img/blog/img43.jpg" alt="">
									<div class="center-wrap">
										<div class="center-alignCenter">
											<div class="center-body">
												<a href="https://player.vimeo.com/video/74197060" class="fbox-modal fancybox.iframe video-play-btn" title="Suffering from gastritis? Here's the solution ....">
													<img class="video-play-btn" src="assets/img/icons/video-play.png" alt="">
												</a>
											</div>
										</div>
									</div><!--/end center wrap-->
								</div>
								<h3><a href="blog_single.html">Suffering from gastritis? Here's the solution ....</a></h3>
							</div>
							<!-- End Blog Thumb v4 -->
						</div>

						<div class="col-sm-3 col-xs-6">
							<!-- Blog Thumb v4 -->
							<div class="blog-thumb-v4">
								<img class="img-responsive margin-bottom-10" src="assets/img/blog/img41.jpg" alt="">
								<h3><a href="blog_single.html">The places you must visit, before you die</a></h3>
							</div>
							<!-- End Blog Thumb v4 -->
						</div>
					</div><!--/end row-->
				</div>
				<!-- End Blog Thumb v4 -->

				<!-- Blog Comments v2 -->
				<div class="margin-bottom-50">
					<h2 class="title-v4">Comments (3)</h2>

					<!-- Blog Comments v2 -->
					<div class="row blog-comments-v2">
						<div class="commenter">
							<img class="rounded-x" src="assets/img/team/img1.jpg" alt="">
						</div>
						<div class="comments-itself">
							<h4>
								Jorny Alnordussen
								<span>6 hours ago / <a href="#">Reply</a></span>
							</h4>
							<p>Gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod..</p>
						</div>
					</div>
					<!-- End Blog Comments v2 -->

					<!-- Blog Comments v2 -->
					<div class="row blog-comments-v2 blog-comments-v2-reply">
						<div class="commenter">
							<img class="rounded-x" src="assets/img/team/img2.jpg" alt="">
						</div>
						<div class="comments-itself">
							<h4>
								Susie Lau
								<span>6 hours ago / <a href="#">Reply</a></span>
							</h4>
							<p>Gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod..</p>
						</div>
					</div>
					<!-- End Blog Comments v2 -->

					<!-- Blog Comments v2 -->
					<div class="row blog-comments-v2">
						<div class="commenter">
							<img class="rounded-x" src="assets/img/team/img3.jpg" alt="">
						</div>
						<div class="comments-itself">
							<h4>
								Marcus Farrell
								<span>6 hours ago / <a href="#">Reply</a></span>
							</h4>
							<p>Gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod..</p>
						</div>
					</div>
					<!-- End Blog Comments v2 -->
				</div>
				<!-- End Blog Comments v2 -->

				<!-- Form -->
				<h2 class="title-v4">Post a Comment</h2>
				<form action="assets/php/sky-forms-pro/demo-comment-process.php" method="post" id="sky-form3" class="sky-form comment-style-v2">
					<fieldset>
						<div class="row sky-space-30">
							<div class="col-md-6">
								<div>
									<input type="text" name="name" id="name" placeholder="Name" class="form-control bg-color-light">
								</div>
							</div>
							<div class="col-md-6">
								<div>
									<input type="text" name="email" id="email" placeholder="Email" class="form-control bg-color-light">
								</div>
							</div>
						</div>

						<div class="sky-space-30">
							<div>
								<textarea rows="8" name="message" id="message" placeholder="Write comment here ..." class="form-control bg-color-light"></textarea>
							</div>
						</div>

						<p><button type="submit" class="btn-u btn-u-default">Submit</button></p>
					</fieldset>

					<div class="message">
						<i class="rounded-x fa fa-check"></i>
						<p>Your comment was successfully posted!</p>
					</div>
				</form>
				<!-- End Form -->
			</div>

			<div class="col-md-3">
				<!-- Blog Thumb v3 -->
				<div class="margin-bottom-50">
					<h2 class="title-v4">Blog &amp; Comments</h2>

					<div class="blog-thumb-v3">
						<small><a href="#">Evan Bartlett</a></small>
						<h3><a href="#">Cameron's silence on defence is shameful</a></h3>
					</div>

					<hr class="hr-xs">

					<div class="blog-thumb-v3">
						<small><a href="#">Jonathan Owen</a></small>
						<h3><a href="#">Architects plan to stop skyscrapers from blocking out sunlight</a></h3>
					</div>

					<hr class="hr-xs">

					<div class="blog-thumb-v3">
						<small><a href="#">Susie Lau</a></small>
						<h3><a href="#">Fashion's first selfies: It was a 16th-century German accountant who started the trend for style blogging</a></h3>
					</div>

					<hr class="hr-xs">

					<div class="blog-thumb-v3">
						<small><a href="#">John Rentoul</a></small>
						<h3><a href="#">How to run a country: A 10 point manifesto for leaders who stand – and want to deliver</a></h3>
					</div>

					<hr class="hr-xs">

					<div class="blog-thumb-v3">
						<small><a href="#">Richard Garner</a></small>
						<h3><a href="#">Controversial plan to test new primary school pupils infuriates teachers</a></h3>
					</div>
				</div>
				<!-- End Blog Thumb v3 -->

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

				<!-- Blog Thumb v2 -->
				<div class="margin-bottom-50">
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
								<li><a href="#"><i class="fa fa-comments"></i> 0</a></li>
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
								<li><a href="#"><i class="fa fa-comments"></i> 0</a></li>
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
								<li><a href="#"><i class="fa fa-comments"></i> 0</a></li>
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
								<li><a href="#"><i class="fa fa-comments"></i> 0</a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- End Blog Thumb v2 -->

				<!-- Tab v5 -->
				<div class="tab-v5 margin-bottom-50">
					<ul class="nav nav-tabs" role="tablist">
						<li class="home active">
							<a href="#tab-v5-a1" role="tab" data-toggle="tab">Hi-Tech</a>
						</li>
						<li>
							<a href="#tab-v5-a2" role="tab" data-toggle="tab">Text</a>
						</li>
					</ul>

					<div class="tab-content">
						<div class="tab-pane active" id="tab-v5-a1">
							<!-- Blog Grid -->
							<div class="blog-grid margin-bottom-30">
								<img class="img-responsive" src="assets/img/blog/img45.jpg" alt="">
								<h3><a href="blog_single.html">Audio Recorder AR-T7 explained</a></h3>
								<ul class="blog-grid-info">
									<li>Mar 6, 2015</li>
									<li><a href="#"><i class="fa fa-comments"></i> 0</a></li>
								</ul>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet sed eros sed tincidunt.</p>
							</div>
							<!-- End Blog Grid -->

							<!-- Blog Thumb -->
							<div class="blog-thumb margin-bottom-20">
								<div class="blog-thumb-hover">
									<img src="assets/img/blog/img44.jpg" alt="">
									<a class="hover-grad" href="blog_single.html"><i class="fa fa-video-camera"></i></a>
								</div>
								<div class="blog-thumb-desc">
									<h3><a href="blog_single.html">Apple iPad review</a></h3>
								</div>
							</div>
							<!-- End Blog Thumb -->

							<!-- Blog Thumb -->
							<div class="blog-thumb">
								<div class="blog-thumb-hover">
									<img src="assets/img/blog/img8.jpg" alt="">
									<a class="hover-grad" href="blog_single.html"><i class="fa fa-photo"></i></a>
								</div>
								<div class="blog-thumb-desc">
									<h3><a href="blog_single.html">The new MacBook Air Impressions!</a></h3>
								</div>
							</div>
							<!-- End Blog Thumb -->
						</div>
						<div class="tab-pane" id="tab-v5-a2">
							<div class="blog-thumb-v3">
								<small>Mar 6, 2015</small>
								<h3><a href="#">Cameron's silence on defence is shameful</a></h3>
							</div>

							<hr class="hr-xs">

							<div class="blog-thumb-v3">
								<small>Mar 7, 2015</small>
								<h3><a href="#">Architects plan to stop skyscrapers from blocking out sunlight</a></h3>
							</div>

							<hr class="hr-xs">

							<div class="blog-thumb-v3">
								<small>Mar 9, 2015</small>
								<h3><a href="#">Fashion's first selfies: It was a 16th-century German accountant who started the trend for style blogging</a></h3>
							</div>

							<hr class="hr-xs">

							<div class="blog-thumb-v3">
								<small>Mar 12, 2015</small>
								<h3><a href="#">How to run a country: A 10 point manifesto for leaders who stand – and want to deliver</a></h3>
							</div>

							<hr class="hr-xs">

							<div class="blog-thumb-v3">
								<small>Mar 23, 2015</small>
								<h3><a href="#">Controversial plan to test new primary school pupils infuriates teachers</a></h3>
							</div>
						</div>
					</div>
				</div>
				<!-- End Tab v5 -->

				<!-- Tags v3 -->
				<div class="margin-bottom-50">
					<h2 class="title-v4">Tags</h2>

					<ul class="list-inline tags-v3">
						<li><a class="rounded-3x" href="#">Web Design</a></li>
						<li><a class="rounded-3x" href="#">Economy</a></li>
						<li><a class="rounded-3x" href="#">Sport</a></li>
						<li><a class="rounded-3x" href="#">Marketing</a></li>
						<li><a class="rounded-3x" href="#">Books</a></li>
						<li><a class="rounded-3x" href="#">Elections</a></li>
						<li><a class="rounded-3x" href="#">Flickr</a></li>
						<li><a class="rounded-3x" href="#">Politics</a></li>
						<li><a class="rounded-3x" href="#">Marketing</a></li>
						<li><a class="rounded-3x" href="#">Web Hosting</a></li>
						<li><a class="rounded-3x" href="#">Art</a></li>
					</ul>
				</div>
				<!-- End Tags v3 -->

				<!-- Twitter Posts -->
				<div class="margin-bottom-50">
					<h2 class="title-v4">Twitter Posts</h2>

					<ul class="twitter-posts">
						<li>
							<img class="rounded-x" src="assets/img/thumb/img-thumb5.jpg" alt="">
							<div class="twitter-posts-in">
								<strong>Dr.Cafee</strong>
								<span><a href="#">@DrCafee</a></span>
								<span>4h</span>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								<a class="link" href="#">http://bit.ly/1c0UN3Y</a>
							</div>
						</li>
						<li>
							<img class="rounded-x" src="assets/img/thumb/img-thumb4.jpg" alt="">
							<div class="twitter-posts-in">
								<strong>Jessi</strong>
								<span><a href="#">@Jessi</a></span>
								<span>5m</span>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								<a class="link" href="#">http://bit.ly/1c0UN3Y</a>
							</div>
						</li>
						<li>
							<img class="rounded-x" src="assets/img/thumb/img-thumb6.jpg" alt="">
							<div class="twitter-posts-in">
								<strong>PhotoStudio</strong>
								<span><a href="#">@PS</a></span>
								<span>7h</span>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								<a class="link" href="#">http://bit.ly/1c0UN3Y</a>
							</div>
						</li>
						<li>
							<img class="rounded-x" src="assets/img/thumb/img-thumb7.jpg" alt="">
							<div class="twitter-posts-in">
								<strong>Wrapbootstrap</strong>
								<span><a href="#">@Wrapbootstrap</a></span>
								<span>25m</span>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								<a class="link" href="#">http://bit.ly/1c0UN3Y</a>
							</div>
						</li>
					</ul>
				</div>
				<!-- End Twitter Posts -->
			</div>
		</div>
	</div>
	<!--=== End Container Part ===-->

	@stop