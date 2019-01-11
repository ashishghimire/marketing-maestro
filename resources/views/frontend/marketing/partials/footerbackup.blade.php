<div class="footer-v8">
		{{-- <footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6 column-one md-margin-bottom-50">
						<a href="index.html"><img class="footer-logo" src="assets/img/themes/logo-news-light-default.png" alt=""></a>

							
							<!-- Load Facebook SDK for JavaScript -->

						<p class="margin-bottom-20">Perferendis nemo dicta eum, consequuntur praesentium deserunt.</p>
						<span>Headquarters:</span>
						<p>795 Folsom Ave, Suite 600, San Francisco, CA 94107</p>
						<hr>
						<span>Phone:</span>
						<p>(+123) 456 7890</p>
						<p>(+123) 456 7891</p>
						<hr>
						<span>Email Address:</span>
						<a href="#">support@htmlstream.com</a>
					</div>

					<div class="col-md-3 col-sm-6 md-margin-bottom-50"> --}}
						{{-- <h2>Tags</h2> --}}
						<!-- Tag Links v4 -->
						{{-- <ul class="tags-v4 margin-bottom-40"> --}}
							{{-- @foreach(tag() as $row)
							<li><a class="rounded-4x" href="{{url('/posts/tags/'.$row->name)}}">{{$row->name}}</a></li>
							@endforeach --}}
							
						{{-- </ul>

						<h2>Useful Links</h2>
						<ul class="footer-lists"> --}}
							{{--  @foreach($footer_links_spot_1 as $footer_link_spot_1)
							<li><i class="fa fa-angle-right"></i><a href="{{ $footer_link_spot_1->link }}">{{ $footer_link_spot_1->name }}</a></li>
                                @endforeach --}}
						
						{{-- </ul> --}}
						<!-- End Footer Lists -->
					{{-- </div> --}}
{{-- 
					<div class="col-md-3 col-sm-6 md-margin-bottom-50">
						<h2>Latest News</h2>
						<div class="latest-news margin-bottom-20">
							<img src="assets/img/thumb/img-thumb1.jpg" alt="">
							<h3><a href="#">Standard post with video.</a></h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>

						<hr>

						<div class="latest-news margin-bottom-20">
							<img src="assets/img/thumb/img-thumb2.jpg" alt="">
							<h3><a href="#">Standard post with video.</a></h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>

						<hr>

						<div class="latest-news">
							<img src="assets/img/thumb/img-thumb3.jpg" alt="">
							<h3><a href="#">Standard post with video.</a></h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>
						<!-- End Latest News -->
					</div>

					<div class="col-md-3 col-sm-6">
						<h2>Newsletter</h2>
						<p><strong>Subscribe</strong> to our newsletter and stay up to date with the latest news and deals!</p><br>

						<!-- Form Group -->
						<div class="input-group margin-bottom-50">
							<input class="form-control" type="email" placeholder="Enter email">
							<div class="input-group-btn">
								<button type="button" class="btn-u input-btn">Subscribe</button>
							</div>
						</div>
						<!-- End Form Group -->

						<h2>Social Network</h2>
						<p><strong>Follow Us</strong> If you want to be kept up to date about what’s going on, minute by minute, then search for Grant and give us a follow!</p><br>

						<ul class="social-icon-list margin-bottom-20">
 
							{{-- @if($header_social_media_facebook)
                                    <li><a href="{{ $header_social_media_facebook->link }}" target="_blank" title="{{ $header_social_media_facebook->name }}"><i class="rounded-x fa fa-facebook"></i></a></li>
                                @endif
                                
                                @if($header_social_media_twitter)
                                    <li><a href="{{ $header_social_media_twitter->link }}" target="_blank" title="{{ $header_social_media_twitter->name }}"><i class="rounded-x fa fa-twitter"></i></a></li>
                                @endif

                                @if($header_social_media_google)
                                    <li><a href="{{ $header_social_media_google->link }}" target="_blank" title="{{ $header_social_media_google->name }}"><i class="rounded-x fa fa-google-plus"></i></a></li>
                                @endif

                                @if($header_social_media_pinterest)
                                    <li><a href="{{ $header_social_media_pinterest->link }}" target="_blank" title="{{ $header_social_media_pinterest->name }}"><i class="rounded-x fa fa-pinterest"></i></a></li>
                                @endif
                                
                                @if($header_social_media_instagram)
                                    <li><a href="{{ $header_social_media_instagram->link }}" target="_blank" title="{{ $header_social_media_instagram->name }}"><i class="rounded-x fa fa-instagram"></i></a></li>
                                @endif
                                
                                @if($header_social_media_youtube)
                                    <li><a href="{{ $header_social_media_youtube->link }}" target="_blank" title="{{ $header_social_media_youtube->name }}"><i class="rounded-x fa fa-youtube"></i></a></li>
                                @endif --}}



			{{-- 				<li><a href="#"><i class="rounded-x fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="rounded-x fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="rounded-x fa fa-linkedin"></i></a></li>
							<li><a href="#"><i class="rounded-x fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="rounded-x fa fa-dribbble"></i></a></li>
						</ul>
						<!-- End Social Icons -->
					</div>
				</div><!--/end row-->
			</div><!--/end container-->
		</footer>
 --}}
		<footer class="copyright">
			<div class="container">
				<ul class="list-inline terms-menu">
					<li>{{Carbon\Carbon::now('Asia/Kathmandu')->format('Y')}} &copy; All Rights Reserved.</li>
					
					<li class="home"><a href="#">Terms of Use</a></li>
					<li><a href="#">Privacy and Policy</a></li>
				</ul>
			</div><!--/end container-->
        </footer>
</div>

<!-- Below Footer -->
{{-- <div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
		<div class="cd-user-modal-container"> <!-- this is the container wrapper -->
			<ul class="cd-switcher">
				<li><a href="javascript:void(0);">Login</a></li>
				<li><a href="javascript:void(0);">Register</a></li>
			</ul>

			<div id="cd-login"> <!-- log in form -->
				<form class="cd-form">
					<p class="social-login">
						<span class="social-login-facebook"><a href="#"><i class="fa fa-facebook"></i> Facebook</a></span>
						<span class="social-login-google"><a href="#"><i class="fa fa-google"></i> Google</a></span>
						<span class="social-login-twitter"><a href="#"><i class="fa fa-twitter"></i> Twitter</a></span>
					</p>

					<div class="lined-text"><span>Or use your account on Blog</span><hr></div>

					<p class="fieldset">
						<label class="image-replace cd-email" for="signin-email">E-mail</label>
						<input class="full-width has-padding has-border" id="signin-email" type="email" placeholder="E-mail">
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="signin-password">Password</label>
						<input class="full-width has-padding has-border" id="signin-password" type="text"  placeholder="Password">
						<a href="javascript:void(0);" class="hide-password">Hide</a>
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<input type="checkbox" id="remember-me" checked>
						<label for="remember-me">Remember me</label>
					</p>

					<p class="fieldset">
						<input class="full-width" type="submit" value="Login">
					</p>
				</form>

				<p class="cd-form-bottom-message"><a href="javascript:void(0);">Forgot your password?</a></p>
				<!-- <a href="javascript:void(0);" class="cd-close-form">Close</a> -->
			</div> <!-- cd-login -->

			<div id="cd-signup"> <!-- sign up form -->
				<form class="cd-form">
					<p class="social-login">
						<span class="social-login-facebook"><a href="#"><i class="fa fa-facebook"></i> Facebook</a></span>
						<span class="social-login-google"><a href="#"><i class="fa fa-google"></i> Google</a></span>
						<span class="social-login-twitter"><a href="#"><i class="fa fa-twitter"></i> Twitter</a></span>
					</p>

					<div class="lined-text"><span>Or register your new account on Blog</span><hr></div>

					<p class="fieldset">
						<label class="image-replace cd-username" for="signup-username">Username</label>
						<input class="full-width has-padding has-border" id="signup-username" type="text" placeholder="Username">
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-email" for="signup-email">E-mail</label>
						<input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="E-mail">
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="signup-password">Password</label>
						<input class="full-width has-padding has-border" id="signup-password" type="text"  placeholder="Password">
						<a href="javascript:void(0);" class="hide-password">Hide</a>
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<input type="checkbox" id="accept-terms">
						<label for="accept-terms">I agree to the <a href="javascript:void(0);">Terms</a></label>
					</p>

					<p class="fieldset">
						<input class="full-width has-padding" type="submit" value="Create account">
					</p>
				</form>

				<!-- <a href="javascript:void(0);" class="cd-close-form">Close</a> -->
			</div> <!-- cd-signup -->

			<div id="cd-reset-password"> <!-- reset password form -->
				<p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

				<form class="cd-form">
					<p class="fieldset">
						<label class="image-replace cd-email" for="reset-email">E-mail</label>
						<input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<input class="full-width has-padding" type="submit" value="Reset password">
					</p>
				</form>

				<p class="cd-form-bottom-message"><a href="javascript:void(0);">Back to log-in</a></p>
			</div> <!-- cd-reset-password -->
			<a href="javascript:void(0);" class="cd-close-form">Close</a>
		</div> <!-- cd-user-modal-container -->
	</div> 
 --}}


<!-- Wait Block -->
 {{-- <div class="g-popup-wrapper">
	<div class="g-popup g-popup--fb">
	  <div class="g-popup--fb-title">
	    <a target="_blank" href="https://www.facebook.com/marketingmaestronpl/" class="g-popup--fb__logo"><img alt="facebook" src="{{url('public/uploads/fb.png')}}" width="110"></a>
	    <div class="g-popup--fb-message">Click <strong>"Like"</strong><br>to read our blog on Facebook</div>
	  </div>
	  <div class="g-popup--fb-widjet">pp
			<div id="fb-root"></div>
				<script>(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));
				</script>
			<div class="fb-like" data-href="https://www.facebook.com/marketingmaestronpl/" data-width="270" data-layout="standard" data-action="like" data-show-faces="true" data-share="false"></div>
	  </div>
	  <a href="javascript:void(0);" class="g-popup__close g-popup--fb__close"><span class="icon-close" aria-hidden="true"></span></a>
	</div>
</div> --}}
<!-- End Wait Block -->
