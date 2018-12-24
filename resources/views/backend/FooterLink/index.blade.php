
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
{{ Form::model($model, ['route' => ['admin.footerlink.update', $model], 'class' => 'form-horizontal', 'files'=> 'true', 'role' => 'form', 'method' => 'PATCH']) }}
@else
{{ Form::open(['route' => 'admin.footerlink.store', 'class' => 'form-horizontal', 'files'=> 'true', 'role' => 'form', 'method' => 'post']) }}
@endif

  <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
            
              footerlink
                </h3>


            </div>
            <div class="box-body">

            <div class="form-group">
                {{ Form::label('name',trans('backend.form.name'), ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('name', NULL, ['class' => 'form-control', 'placeholder' =>'Enter the name']) }}
                </div>
            </div>

            <div class="form-group">
                {{ Form::label('link','link', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('link', NULL, ['class' => 'form-control', 'placeholder' =>'Enter the link']) }}
                </div>
            </div>

             <div class="form-group">
                {{ Form::label('spot','spot', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('spot', NULL, ['class' => 'form-control', 'placeholder' =>'Enter the spot']) }}
                </div>
            </div>


           


            <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                {{ Form::label('status', 'Status: ') }}
                <div class="m-t-10">
                    <label class="rdiobox rdiobox-success">
                        {{ Form::radio('status', 1, Request::old('status', ['checked'])) }}
                        <span>Enable</span>
                    </label>

                    <label class="rdiobox rdiobox-success">
                        {{ Form::radio('status', 0, Request::old('status')) }}
                        <span>Disable</span>
                    </label>
                </div>

                @if($errors->has('status'))
                    <span class="help-block">{{ $errors->first('status') }}</span>
                @endif
            </div>
        


           

            
    
           
        
    </div>
    <div class="box box-info">
        <div class="box-body">
            <div class="pull-left">
                {{ link_to_route('admin.footerlink', trans('cancel'), [], ['class' => 'btn btn-danger btn-xs']) }}
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
                <a href="{!! url('footerlink') !!}" class="btn btn-primary">add</a>
              footerlink
                </h3>


            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table id="users-table" class="table table-condensed table-hover">
                        <thead>
                        <tr>
                            <th>sn</th>
                          
                            <th>Name</th>
                            <th>link</th>
                            <th>Spot</th>
                            <th>Status</th>

                            
                            
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
                                <td>{!! $field->link !!}</td>
                                <td>{!! $field->spot !!}</td>
                                 <td>{!! $field->status ? '<span class="label label-success f-s-12">Enabled</span>' : '<span class="label label-danger f-s-12">Disabled</span>' !!}</td>
                                
                                
                                
                               
                               
                                
                                   
                                <td class="col-md-1"> 
                                {!! link_to_route('admin.footerlink.edit', '', array($field->id),
                                              array('class' => 'fa fa-pencil-square-o fa-fw')) !!}
                                    
                                </td>
                                 <td class="col-md-1"> 
                                  {!! link_to_route('admin.footerlink.delete', '', array($field->id),
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

