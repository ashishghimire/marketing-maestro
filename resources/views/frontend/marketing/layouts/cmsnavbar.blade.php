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
							<img src="{{url('public/uploads/logo.png')}}" style="height: 150px; width: 120px;" alt="Logo">
						</a>
					</div>
				</div><!--/end responsive container-->

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-responsive-collapse">
					<div class="res-container">
						<ul class="nav navbar-nav">

							<!-- Home -->
							
							@foreach(cmsmenu() as $menu)
							<li class="dropdown home active">
								<a href="{{url('pages',$menu->url)}}">{{$menu->title}}</a>
								@if($menu->child->count())

								<ul class="dropdown-menu" role="menu">
								@foreach($menu->child as $childmenu)

									<li> <a href="{{url('pages',$childmenu->url)}}">{{$childmenu->title}}</a></li>
								@endforeach

								</ul>	
								@endif
							</li>
							@endforeach
					
							<!-- Main Demo -->
						</ul>
					</div><!--/responsive container-->
				</div><!--/navbar-collapse-->
			</div><!--/end contaoner-->
		</div>
		<!-- End Navbar -->