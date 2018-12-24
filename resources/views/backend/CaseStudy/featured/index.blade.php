
@extends('backend.layouts.app')
@section('content')

<div class="row">

    <div class="col-lg-8">
    	
    	<p class="text-center"></p>
		<div class="panel-group">
			<div class="panel panel-primary">
				<div class="panel-heading">
		               {{-- {{$value->title}} --}}
		               Case Study
					</div>
					<div class="panel-body">
							<!-- Material switch -->
							
						@foreach($casestudypost as $value)
						
							@if($value->featured==1)
								<div class="alert alert-default">
		  							<strong>{!! substr($value->title, 0,25)!!} {{ strlen($value->title) > 25 ? "..." : ""}}</strong> 
		  								<div class="pull-right">
				  							<span class="switch">
											  <input type="checkbox" class="switch" value={{$value->id}}  name="switch" id="{{$value->id}}" checked>
											  <label for="{{$value->id}}"></label>
												</span><br>
		  								</div>
		  								
								</div>
							@else
								<div class="alert alert-default">
			  						<strong>{!! substr($value->title, 0,25)!!} {{ strlen($value->title) > 25 ? "..." : ""}}</strong> 
				  						<div class="pull-right">
				  							<span class="switch">
											  <input type="checkbox" class="switch" value={{$value->id}} name="switch" id="{{$value->id}}">
											  <label for="{{$value->id}}"></label>
												</span><br>
		  								</div>
		  								
								</div>
							@endif
							@endforeach

						
					</div>
				</div>
		</div>
	</div>

	
 </div>
@stop


@section('after-scripts')
<script type="text/javascript">
	
  
$( "input[type=checkbox]" ).on( "click",function(){
	var id=$(this).val();


            var ch="<?php echo url('admin/casestudypost');?>";

                var a=ch+'/'+id;


                
                $.ajax({

            'method': 'get',
            'url': a,
            success: function (response) {
            	 // alert('success');
            	// console.log(response);
                    // window.location.href=a;
            }
        });





});
    


</script> 
@endsection