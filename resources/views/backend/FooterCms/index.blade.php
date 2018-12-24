
@extends('backend.layouts.app')

@section('before-styles')
    <style type="text/css">
        .rdiobox {
            display: inline-block;
            margin-right: 10px;
            line-height: 21px;
        }
    </style>
@endsection
@section('content')


<div class="col-md-6">
@if(isset ($model))    
{{ Form::model($model, ['route' => ['admin.footercms.update', $model], 'class' => 'form-horizontal', 'files'=> 'true', 'role' => 'form', 'method' => 'PATCH']) }}
@else
{{ Form::open(['route' => 'admin.footercms.store', 'class' => 'form-horizontal', 'files'=> 'true', 'role' => 'form', 'method' => 'post']) }}
@endif

  <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
            
              footercms
                </h3>


            </div>
            <div class="box-body">

            <div class="form-group">
                {{ Form::label('about_us_title','about_us_title', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('about_us_title', NULL, ['class' => 'form-control', 'placeholder' =>'Enter the about_us_title']) }}
                </div>
            </div>

            <div class="form-group">
                {{ Form::label('about_us_details','about_us_details', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('about_us_details', NULL, ['class' => 'form-control', 'placeholder' =>'Enter the about_us_details']) }}
                </div>
            </div>

             <div class="form-group">
                {{ Form::label('contact_title','contact_title', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('contact_title', NULL, ['class' => 'form-control', 'placeholder' =>'Enter the contact_title']) }}
                </div>
            </div>


        <div class="form-group">
                {{ Form::label('phone','phone', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('phone', NULL, ['class' => 'form-control', 'placeholder' =>'Enter the phone']) }}
                </div>
            </div>


        
             <div class="form-group">
                {{ Form::label('email','email', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('email', NULL, ['class' => 'form-control', 'placeholder' =>'Enter the email']) }}
                </div>
            </div>


           

            
    
           
        
    </div>
    <div class="box box-info">
        <div class="box-body">
            <div class="pull-left">
                {{ link_to_route('admin.footercms', trans('cancel'), [], ['class' => 'btn btn-danger btn-xs']) }}
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
                <a href="{!! url('footercms') !!}" class="btn btn-primary">add</a>
              footercms
                </h3>


            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table id="users-table" class="table table-condensed table-hover">
                        <thead>
                        <tr>
                            <th>sn</th>
                          
                            <th>about_us_title</th>
                            <th>about_us_details</th>
                            <th>contact_title</th>
                            <th>phone</th>
                            <th>email</th>

                            
                            
                            <th>edit</th>
                            <th>delete</th>
                            
                            
                           
                           
                        </tr>
                        </thead>
                        <tbody>
                        <?php $index = 0;?>
                        @foreach($data as $field)
                            <tr>
                                <td>{!! ++$index !!}</td>
                                                                
                                        
                                <td>{!! $field->about_us_title !!}</td>
                                <td>{!! $field->about_us_details !!}</td>
                                <td>{!! $field->contact_title !!}</td>
                                <td>{!! $field->phone !!}</td>
                                <td>{!! $field->email !!}</td>
                                 
                                
                                
                               
                               
                                
                                   
                                <td class="col-md-1"> 
                                {!! link_to_route('admin.footercms.edit', '', array($field->id),
                                              array('class' => 'fa fa-pencil-square-o fa-fw')) !!}
                                    
                                </td>
                                 <td class="col-md-1"> 
                                  {!! link_to_route('admin.footercms.delete', '', array($field->id),
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

