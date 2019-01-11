<!-- Blog Thumb v3 -->
				{{--
				<div class="margin-bottom-50">
					<h2 class="title-v4">Blog &amp; Comments</h2>
					@foreach($blogad as $row)
					<div class="blog-thumb-v3">
						<small><a href="#">Admin</a></small>
						<h3><a href="{{url('show',$row->slug)}}">{{$row->title}}</a></h3>
					</div>

					<hr class="hr-xs">
					@endforeach
				</div>
				--}}
				<!-- End Blog Thumb v3 -->

				<!-- Blog Thumb v2 -->
				<div class="margin-bottom-50">
                        <h2 class="title-v4">Recent News</h2>
                        
                        @foreach($recentad as $row)
                        <div class="blog-thumb blog-thumb-circle margin-bottom-15">
                            <div class="blog-thumb-hover">
                                <img class="rounded-x" src="{{url('public/uploads/Advertising1/'.$row->file)}}" style="height: 150px; width:150px";" alt="">
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
    
                    {{--<!-- Tab v5 -->
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
                    --}}