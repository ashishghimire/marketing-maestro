
@extends('backend.layouts.app')
@section('content')
<div class="alert alert-success message hidden">
Data Has Successfully Added
</div>
<div class="row">
	{{--  @php $advertisingcategorys=$advertisingpost->advertisingcategory->all();
	@endphp --}}
{{-- 
@foreach($datas as $data) --}}



@foreach($datas as $post)

    <div class="col-lg-4">
    	
    	<p class="text-center"></p>
		<div class="panel-group">
			<div class="panel panel-primary">
				<div class="panel-heading">
		               {{$post->title}}
					</div>
					<div class="panel-body">
							<?php $values= $advertisingpost->where('advertising_category_id','=',$post->id)?>
							<!-- Material switch -->
							
						@foreach($values as $value)
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

	
	@endforeach
	{{-- @endforeach --}}
 </div>
@stop

@section('after-scripts')
<script type="text/javascript">
	
  
$( "input[type=checkbox]" ).on( "click",function(){
	var id=$(this).val();


            var ch="<?php echo url('admin/featurepostadvertising');?>";
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
    // jQuery.ajax({
    //     url: "/users/ajax-vote/" + id,                          
    // });



</script> 
@endsection