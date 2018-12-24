@section('before-styles')
<link rel="stylesheet" type="text/css" href="{{asset('public/css/select2.min.css')}}">
<script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js">  </script>
@endsection
@extends('backend.layouts.app')
@section('content')


<div class="col-md-6">
@if(isset ($model))    
{{ Form::model($model, ['route' => ['admin.customer.update', $model], 'class' => 'form-horizontal', 'files'=> 'true', 'role' => 'form', 'method' => 'PATCH']) }}
@else
{{ Form::open(['route' => 'admin.customer.store', 'class' => 'form-horizontal', 'files'=> 'true', 'role' => 'form', 'method' => 'post']) }}
@endif

  <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
            
              customer
                </h3>


            </div>
            <div class="box-body">

            <div class="form-group">
                {{ Form::label('name','name', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('name', NULL, ['class' => 'form-control', 'placeholder' =>'Enter the name']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

			
			<div class="form-group">
                {{ Form::label('address','address', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('address', NULL, ['class' => 'form-control', 'placeholder' =>'Enter the address']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->


            <div class="form-group">
                {{ Form::label('phone','phone', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('phone', NULL, ['class' => 'form-control', 'placeholder' =>'Enter the phone']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            <div class="form-group">
                {{ Form::label('description','description', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('description', NULL, ['class' => 'form-control', 'placeholder' =>'Enter the description']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->


   <div class="form-group">
                {{ Form::label('image','image', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::file('image', NULL, ['class' => 'form-control', 'placeholder' =>'Enter the image']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->



    
        



           
        
    </div>
    <div class="box box-info">
        <div class="box-body">
            <div class="pull-left">
                {{ link_to_route('admin.customer', trans('cancel'), [], ['class' => 'btn btn-danger btn-xs']) }}
            </div><!--pull-left-->

            <div class="pull-right">
                {{ Form::submit(trans('save'), ['class' => 'btn btn-success btn-xs']) }}
            </div><!--pull-right-->

            <div class="clearfix"></div>
</div>
</div>
</div>
</div>
<div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
                <a href="{!! url('customer') !!}" class="btn btn-primary">add</a>
              customer
                </h3>


            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table id="users-table" class="table table-condensed table-hover">
                        <thead>
                        <tr>
                            <th>sn</th>
                          
                            <th>name</th>
                            <th>address</th>
                            <th>phone</th>
                            <th>description</th>
                            <th>image</th>
                            <th>edit</th>
                            <th>delete</th>
                            
                            
                           
                           
                        </tr>
                        </thead>
                        <tbody>
                        <?php $index = 0;?>
                        @foreach($data as $field)
                            <tr>
                                <td>{!! ++$index !!}</td>
                                                                
                                        
                                <td>{!! $field->name !!}</td>
                                <td>{!! $field->address !!}</td>
                                <td>{!! $field->phone !!}</td>
                                <td>{!! $field->description !!}</td>
                                
                                <td><img src="{!! url('public/uploads/customer/'.$field->image)!!}" style="width:150px; height:150px;">
                                <td>
                                
                               
                               
                                
                                   
                                <td class="col-md-1"> 
                                {!! link_to_route('admin.customer.edit', '', array($field->id),
                                              array('class' => 'fa fa-pencil-square-o fa-fw')) !!}
                                    
                                </td>
                                 <td class="col-md-1"> 
                                  {!! link_to_route('admin.customer.delete', '', array($field->id),
                                              array('class' => 'fa fa-trash-o fa-fw')) !!}
                                    
                                    

                                    {!! Form::close() !!}

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
{!!$data->render() !!}
                    </table>
                </div>
            </div>
        </div>
    </div>



    
  @stop



@section('after-scripts')
<script src="{{asset('public/js/select2.min.js')}}" type="text/javascript" charset="utf-8"></script>

         <script>
             CKEDITOR.replace( 'editor1' );
              
                $('.select').select2();
           </script>
@endsection