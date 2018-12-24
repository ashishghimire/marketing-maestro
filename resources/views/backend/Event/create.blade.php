
@extends('backend.layouts.app')
@section('content')


<div class="col-md-12">
    <head>
            <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>

    </head>

@if(isset ($model))    
{{ Form::model($model, ['route' => ['admin.event.update', $model], 'class' => 'form-horizontal', 'role' => 'form','files'=> 'true', 'method' => 'PATCH']) }}
@else
{{ Form::open(['route' => 'admin.event.store', 'class' => 'form-horizontal', 'files'=> 'true','role' => 'form', 'method' => 'post']) }}
@endif

  <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
            
              event
                </h3>


            </div>
            <div class="box-body">
<div class="row">
    
<div class="col-sm-8">

     <div class="form-group">
                    {!! Form::label('image' ,'Image:',['class'=>'col-lg-2 control-label']) !!}
            <div class="col-lg-5">
                    {!! Form::file('image',null,['class'=>'form-control']) !!}
                    <div class="col-lg-5">

                        @if(isset($model))
                        <img src="{!! url('public/uploads/'.$model->image)!!}" style="width:150px; height:150px;">
                        @endif
                    </div>

                </div>
        </div>
         <div class="form-group">
                {{ Form::label('name','Name', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('name', NULL, ['class' => 'form-control', 'placeholder' =>'Enter the name']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->







            <div class="form-group">
             {{ Form::label('name','Description', ['class' => 'col-lg-2 control-label']) }}
             <div class="col-lg-10">
            <textarea name="description" id="editor1" class="form-control"></textarea>
        </div>

            </div>

           

           

            
    </div>
     <div class="col-sm-4">
         
           


            <div class="form-group">
                {{ Form::label('starttime','start time', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('start_time', NULL, ['class' => 'form-control', 'placeholder' =>'Enter the start time']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->



            <div class="form-group">
                {{ Form::label('endtime','end time', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('end_time', NULL, ['class' => 'form-control', 'placeholder' =>'Enter the end time']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->


        
            <div class="form-group">
                {{ Form::label('start date','start date', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::date('start_date', NULL, ['class' => 'form-control', 'placeholder' =>'Enter the start date']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->


            <div class="form-group">
                {{ Form::label('end date','end date', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::date('end_date', NULL, ['class' => 'form-control', 'placeholder' =>'Enter the end date']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->


            <div class="form-group">
                {{ Form::label('Location','Location', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('location', NULL, ['class' => 'form-control', 'placeholder' =>'Enter the location']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->



        
    </div>

        
    </div>



    
</div>

                


          

            
           





           
        
    </div>
    <div class="box box-info">
        <div class="box-body">
            <div class="pull-left">
                {{ link_to_route('admin.event', trans('cancel'), [], ['class' => 'btn btn-danger btn-xs']) }}
            </div><!--pull-left-->

            <div class="pull-right">
                {{ Form::submit(trans('create'), ['class' => 'btn btn-success btn-xs']) }}
            </div><!--pull-right-->

            <div class="clearfix"></div>
</div>
</div>
</div>

</div>



    
  @stop


@section('after-scripts')



 <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>

            

@stop