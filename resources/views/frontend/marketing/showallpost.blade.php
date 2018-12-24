
@extends('frontend.marketing.master')
@section('section')

	<!--=== Breadcrumbs ===-->
	<div class="breadcrumbs breadcrumbs-light">
		<div class="container">
			<h1 class="pull-left">Post Layout v2</h1>
			<ul class="pull-right breadcrumb">
				<li><a href="index.html">Home</a></li>
				<li><a href="">Post Layouts</a></li>
				<li class="active">Post Layout v2</li>
			</ul>
		</div>
	</div><!--/breadcrumbs-->
	<!--=== End Breadcrumbs ===-->

	<!--=== Container Part ===-->
	<div class="container content-sm">
		<div class="row">
			<div class="col-md-9 md-margin-bottom-50">
				
				
				

			@foreach($getSpecifpost as $row)
				<div class="row margin-bottom-50">
					<div class="col-sm-4 sm-margin-bottom-20">
						<img class="img-responsive" src="{{url('public/uploads/Advertising1/'.$row->file)}}" style="height: 250px; width:250px";" alt="">
					</div>
					<div class="col-sm-8">
						<div class="blog-grid">
							<h3><a href="{{url('resourceshow',$row->slug)}}">{{$row->title}}</a></h3>
							<ul class="blog-grid-info">
								<li>Admin</li>
								<li>Published: {{ date('M  j, Y ',strtotime($row->created_at))}}</li>
								<li><a href="#"><i class="fa fa-comments"></i> 0</a></li>
							</ul>
							<p>{!! substr($row->description, 0,350)!!} {{ strlen($row->description) > 350 ? "..." : ""}}</p>
							<a class="r-more" href="{{url('show',$row->slug)}}">Read More</a>
						</div>
					</div>
				</div>
				@endforeach
				<!-- End Blog Grid -->

				
			
			<ul>
			

			<div class="text-center">
					{{-- {{$getSpecifpost->render()}} --}}
			
			</div>

					
					
				</ul>
				
			</div>


		</div>
	</div>
	

	@stop