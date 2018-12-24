
@extends('backend.layouts.app')
@section('content')


<div class="col-md-6">
@if(isset ($model))    
{{ Form::model($model, ['route' => ['admin.articlecategory.update', $model], 'class' => 'form-horizontal', 'files'=> 'true', 'role' => 'form', 'method' => 'PATCH']) }}
@else
{{ Form::open(['route' => 'admin.articlecategory.store', 'class' => 'form-horizontal', 'files'=> 'true', 'role' => 'form', 'method' => 'post']) }}
@endif

  <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
            
              Article Category
                </h3>


            </div>
            <div class="box-body">

            <div class="form-group">
                {{ Form::label('title','Title', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10 @if($errors->has('title')) has-error @endif">
                    {{ Form::text('title', NULL, ['class' => 'form-control', 'placeholder' =>'Enter the title']) }}
                     @if ($errors->has('title')) <p class="help-block">{{ $errors->first('title') }}</p> @endif
                   <p class="well text-danger">*Note:-Please enter the Article category title</p>
                </div>

            </div>




           

            
    
           
        
    </div>
    <div class="box box-info">
        <div class="box-body">
            <div class="pull-left">
                {{ link_to_route('admin.articlecategory', trans('cancel'), [], ['class' => 'btn btn-danger btn-xs']) }}
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
                <a href="{!! url('admin/articlecategory') !!}" class="btn btn-primary">add</a>
              Article Category
                </h3>


            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table id="users-table" class="table table-condensed table-hover">
                        <thead>
                        <tr>
                            <th>sn</th>
                          
                            <th>title</th>
                            
                            
                            <th>edit</th>
                            <th>delete</th>
                            
                            
                           
                           
                        </tr>
                        </thead>
                        <tbody>
                        <?php $index = 0;?>
                        @foreach($data as $field)
                            <tr>
                                <td>{!! ++$index !!}</td>
                                                                
                                        
                                <td>{!! $field->title !!}</td>
                                
                                
                                
                               
                               
                                
                                   
                                <td class="col-md-1"> 
                                {!! link_to_route('admin.articlecategory.edit', '', array($field->id),
                                              array('class' => 'fa fa-pencil-square-o fa-fw')) !!}
                                    
                                </td>
                                 <td class="col-md-1"> 
                                  {!! link_to_route('admin.articlecategory.delete', '', array($field->id),
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

