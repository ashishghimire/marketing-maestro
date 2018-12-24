

@extends('frontend.marketing.master')
@section('section')

	<!--=== Breadcrumbs ===-->
	<div class="breadcrumbs breadcrumbs-light margin-bottom-50">
		<div class="container">
			<h1 class="pull-left">Blog Grid 3 Columns</h1>
			<ul class="pull-right breadcrumb">
				<li><a href="index.html">Home</a></li>
				<li><a href="">Grid</a></li>
				<li class="active">3 Columns</li>
			</ul>
		</div>
	</div><!--/breadcrumbs-->
	<!--=== End Breadcrumbs ===-->

	<!-- Container Part -->
	<div class="container">
		<!-- Masonry Box -->
		<div class="masonry-box">
			<!-- Blog Grid -->
			@foreach($alladvertising as $row)
			

			<div class="blog-grid masonry-box-in col-3">
				<a href="{{url('show',$row->slug)}}"><img class="img-responsive" src="{{url('public/uploads/Advertising1/'.$row->file)}}" style="height: 250px; width:250px"; alt=""></a>
				<h3><a href="{{url('show',$row->slug)}}">{{$row->title}}</a></h3>
				<ul class="blog-grid-info">
					Category:<a href="#"><span class="btn btn-success btn-sm">{{$row->advertisingcategory->title}}</span></a>
					<li>Mar 6, 2015</li>
					<li><a href="#"><i class="fa fa-comments"></i> 0</a></li>
				</ul>
				<p>{!! substr($row->description, 0,10)!!} {{ strlen($row->description) > 10 ? "..." : ""}}</p>
				<a class="r-more" href="{{url('show',$row->slug)}}">Read More</a>
			</div>
			@endforeach
			
		</div>
		<!-- End Masonry Box -->



		<!-- Pager v4 -->
		
		<!-- End Pager v4 -->
	</div>

	<div class="text-center">
					{{$alladvertising->links()}}
			
			</div>
	<!--=== End Container Part ===-->

	@stop