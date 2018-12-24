@extends('backend.layouts.app')
@section('content')


<div class="col-md-6">
@if(isset ($model))    
{{ Form::model($model, ['route' => ['admin.ourpatner.update', $model], 'class' => 'form-horizontal', 'files'=> 'true', 'role' => 'form', 'method' => 'PATCH']) }}
@else
{{ Form::open(['route' => 'admin.ourpatner.store', 'class' => 'form-horizontal', 'files'=> 'true', 'role' => 'form', 'method' => 'post']) }}
@endif

  <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
            
              ourpatner
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
                {{ Form::label('details','details', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::textarea('details', NULL, ['id'=>'editor1','class' => 'form-control', 'placeholder' =>'Enter the details']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->







            


           



             
 <div class="form-group">
                    {!! Form::label('image' ,'image:',['class'=>'col-lg-2 control-label']) !!}
            <div class="col-lg-5">
                    {!! Form::file('image',null,['class'=>'form-control']) !!}
                    <div class="col-lg-5">

                        @if(isset($model))
                        <img src="{!! url('public/uploads/OurPatner/thumbnail/'.$model->image)!!}" style="width:150px; height:150px;">
                        @endif
                    </div>

                </div>
        </div>
             

            <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
			{{ Form::label('status', 'Status: ') }}
			<div class="switch-field">
				{{ Form::radio('status',1, null, ['id' => 'switch_left', 'checked']) }}
				<label for="switch_left">Enable</label>
				{{ Form::radio('status',0, null, ['id' => 'switch_right']) }}
				<label for="switch_right">Disable</label>
			</div>

			@if($errors->has('status'))
				<span class="help-block">{{ $errors->first('status') }}</span>
			@endif
		</div>
           





           
        
    </div>
    <div class="box box-info">
        <div class="box-body">
            <div class="pull-left">
                {{ link_to_route('admin.ourpatner', trans('cancel'), [], ['class' => 'btn btn-danger btn-xs']) }}
            </div><!--pull-left-->

            <div class="pull-right">
                {{ Form::submit(trans('create'), ['class' => 'btn btn-success btn-xs']) }}
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
                <a href="{!! url('admin/ourpatner') !!}" class="btn btn-primary">add</a>
              ourpatner
                </h3>


            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table id="users-table" class="table table-condensed table-hover">
                        <thead>
                        <tr>
                            <th>sn</th>
                          
                            <th>Name</th>
                            <th>Details</th>
                            
                            
                            <th>image</th>
                            <th>status</th>

                            
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
                                <td>{!! $field->details !!}</td>
                                
                                <td><img src="{!! url('public/uploads/OurPatner/thumbnail/'.$field->image)!!}" style="width:150px; height:150px;">
                                </td>
                                 <td>{!! $field->status ? '<p class="label label-success">Enabled</p>' : '<p class="label label-danger">Disabled</p>' !!}</td>
                               
                               
                                
                                   
                                <td class="col-md-1"> 
                                {!! link_to_route('admin.ourpatner.edit', '', array($field->id),
                                              array('class' => 'fa fa-pencil-square-o fa-fw')) !!}
                                    
                                </td>
                                 <td class="col-md-1"> 
                                  {!! link_to_route('admin.ourpatner.delete', '', array($field->id),
                                              array('class' => 'fa fa-trash')) !!}
                                    
                                    

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
