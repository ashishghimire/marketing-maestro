
@extends('backend.layouts.app')
@section('content')


<div class="col-md-12">
@if(isset ($model))    
{{ Form::model($model, ['route' => ['admin.otherresource.update', $model], 'class' => 'form-horizontal', 'files'=> 'true', 'role' => 'form', 'method' => 'PATCH']) }}
@else
{{ Form::open(['route' => 'admin.otherresource.store', 'class' => 'form-horizontal', 'files'=> 'true', 'role' => 'form', 'method' => 'post']) }}
@endif

  <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
            
           Resource

                </h3>


            </div>
            <div class="box-body">

             <div class="form-group">
                {{ Form::label('title','Title', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-8 @if($errors->has('title')) has-error @endif">
                    {{ Form::text('title', NULL, ['class' => 'form-control', 'placeholder' =>'Enter the title']) }}
                     @if ($errors->has('title')) <p class="help-block">{{ $errors->first('title') }}</p> @endif
                     <p class="well text-danger">*Note:-Please enter the title</p>
                </div>

            </div>



             <div class="form-group">
                {{ Form::label('file','Thumbnail', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10 @if($errors->has('file')) has-error @endif">
                    {{ Form::file('file', NULL, ['class' => 'form-control-file', 'placeholder' =>'Enter the file']) }}
                     @if ($errors->has('file')) <p class="help-block">{{ $errors->first('file') }}</p> @endif
                     <p class="well text-danger">*Note:-Please select the Thumbnail</p>
                     <div class="col-lg-5">

                        @if(isset($model))
                        <img src="{!! url('public/uploads/OtherResource/'.$model->file)!!}" style="width:150px; height:150px;">
                        @endif
                    </div>

                </div>
            </div>

                <div class="form-group">
                    {{ Form::label('coverpic','Cover Pic', ['class' => 'col-lg-2 control-label']) }}

                    <div class="col-lg-10 @if($errors->has('coverpic')) has-error @endif">
                        {{ Form::file('coverpic', NULL, ['class' => 'form-control-file', 'placeholder' =>'Enter the cover picture']) }}
                        @if ($errors->has('coverpic')) <p class="help-block">{{ $errors->first('coverpic') }}</p> @endif
                        <p class="well text-danger">*Note:-Please select the Cover Picture</p>
                        <div class="col-lg-5">

                            @if(isset($model) && !empty($model->coverpic))
                                <img src="{!! url('public/uploads/OtherResource/cover-pics'.$model->coverpic)!!}" style="width:150px; height:150px;">
                            @endif
                        </div>

                    </div>
                </div>


                 <div class="form-group">
                {{ Form::label('Category','Category', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10 @if($errors->has('category')) has-error @endif">
                    {!! Form::select('other_resource_category_id',$other_resource_category_id,null,['class'=>'form-control']) !!}
                     @if ($errors->has('category')) <p class="help-block">{{ $errors->first('category') }}</p> @endif
                     <p class="well text-danger">*Note:-Please select the Category</p>


                </div>
            </div>






                 <div class="form-group">
                <div class="col-lg-2 control-label">
                    <label >Featured Post</label>
                </div>
                <div class="col-lg-10 @if($errors->has('featured')) has-error @endif">
                    {!! Form::checkbox('featured', 1 ) !!}
                     @if ($errors->has('featured')) <p class="help-block">{{ $errors->first('featured') }}</p> @endif
                     <p class="well text-danger">*Note:-select the feature post or leave if not</p>

                </div>
            </div>




                          <div class="form-group{{ $errors->has('order') ? ' has-error' : '' }}">
                                    {{ Form::label('Order', 'Order No.:',['class' => 'col-lg-2 control-label']) }}
                                  <div class="col-lg-10 @if($errors->has('description')) has-error @endif">
                                    {{ Form::text('order', Request::old('order'), ['class' => 'form-control ', 'placeholder' => 'Enter order here', 'required' , 'maxlength'=>'3']) }}
                                     <p class="text-danger">*Note:-Please write the order number</p>
                                    @if($errors->has('order'))
                                        <span class="help-block">{{ $errors->first('order') }}</span>
                                    @endif
                           </div>
                         </div>




        <div class="form-group">
                {{ Form::label('description','Description', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10 @if($errors->has('description')) has-error @endif">

                    {{ Form::textarea('description', Request::old('description'), ['id'=>'editor1','class' => 'form-control', 'placeholder' => 'Enter description here']) }}
                     @if ($errors->has('description')) <p class="help-block">{{ $errors->first('description') }}</p> @endif
                     <p class="well text-danger">*Note:-Please enter the Description</p>

                </div>
            </div>


            

            
            
            



   



                                  
  



 


    
        
 

           
        
    </div>
    <div class="box box-info">
        <div class="box-body">
            <div class="pull-left">
                {{ link_to_route('admin.otherresource', trans('cancel'), [], ['class' => 'btn btn-danger btn-xs']) }}
            </div><!--pull-left-->

            <div class="pull-right">
                {{ Form::submit(trans('save'), ['class' => 'btn btn-success btn-xs']) }}
            </div><!--pull-right-->

            <div class="clearfix"></div>
</div>
</div>
</div>
</div>
<div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
                <a href="{!! url('admin/otherresource') !!}" class="btn btn-primary">add</a>
           Resource

                </h3>


            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table id="users-table" class="table table-condensed table-hover">
                        <thead>
                        <tr>
                            <th>sn</th>
                          
                            <th>Title</th>
                           
                            <th>Desc</th>
                           
                            <th>Image</th>
                             
                            <th>Order</th>
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
                               <td>{!! substr($field->description, 0,50)!!}</td>
                                
                               

                                
                                <td><img src="{!! url('public/uploads/OtherResource',$field->file) !!}" style="width:150px; height:150px;">
                                </td>


                                 
                                <td>{!! $field->order !!}</td>
                               
                               
                                
                                   
                                <td class="col-md-1"> 
                                {!! link_to_route('admin.otherresource.edit', '', array($field->id),
                                              array('class' => 'fa fa-pencil-square-o fa-fw')) !!}
                                    
                                </td>
                                 <td class="col-md-1"> 
                                  {!! link_to_route('admin.otherresource.delete', '', array($field->id),
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



