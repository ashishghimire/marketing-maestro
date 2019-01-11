 <div class="navbar mega-menu" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="res-container">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<div class="navbar-brand">
						<a href="{{url('/')}}">
							<img src="{{url('/uploads/dashboard.png')}}"
								 style="height: 120px; width:120px;" alt="Logo">
						</a>
					</div>
				</div><!--/end responsive container-->

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-responsive-collapse">
					<div class="res-container">
						<ul class="nav navbar-nav">
							<!-- Home -->
							<li class="dropdown home active">
								<a href="{{url('/')}}"><i class="fa fa-home"></i>Home</a>
							</li>
							<!-- End Home -->

							<!-- World -->
							<li class="dropdown ">
								<a href="#">Advertising<b class="caret"></b></a>
								@if(advertisingcategory()->count()) 

								<ul class="dropdown-menu">
									@foreach(advertisingcategory() as $row)

									<li class=""><a href="{{url('advertising/' .$row->slug)}}">{{$row->title}}</a></li>									
									@endforeach
								</ul>
								@endif
						
							</li>
							<!-- End Fashion -->
							
							<li class="dropdown">
								{{-- <a href="{{url('otherresources')}}">Resources</a> --}}
								<a href="#">Resources<b class="caret"></b></a>
								@if(otherresourcescategory()->count()) 

								<ul class="dropdown-menu">
									@foreach(otherresourcescategory() as $row)
									

									<li class=""><a href="{{url('resource/' .$row->slug)}}">{{$row->title}}</a></li>									
									@endforeach
								</ul>
								@endif
						
							</li>

							<!-- Archives -->
							<li class="dropdown">
								<a href="{{url('casestudy')}}"><i class="fa fa-book" aria-hidden="true"></i> Case Studies</a>
								
							</li>
							<!-- End Archives -->

							<!-- Lifestyle -->
							<li class="dropdown">
								<a href="{{url('interview')}}"><i class="fa fa-book" aria-hidden="true"></i> Interviews</a>
							</li>
							<!-- Main Demo -->
						</ul>
					</div><!--/responsive container-->
				</div><!--/navbar-collapse-->
			</div><!--/end contaoner-->
		</div>
		<!-- End Navbar -->