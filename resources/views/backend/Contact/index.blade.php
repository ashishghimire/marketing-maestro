@extends('backend.layouts.app')
@section('content')


<div class="col-md-6">
@if(isset ($model))    
{{ Form::model($model, ['route' => ['admin.contact.update', $model], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH']) }}
@else
{{ Form::open(['route' => 'admin.contact.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post']) }}
@endif

  <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
            
              contact
                </h3>


            </div>
            <div class="box-body">

            <div class="form-group">
                {{ Form::label('Name',trans('backend.form.name'), ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('title', NULL, ['class' => 'form-control', 'placeholder' =>'Enter Name ']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

			
			<div class="form-group">
                {{ Form::label('email',trans('backend.form.email'), ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('email', NULL, ['class' => 'form-control', 'placeholder' =>'Enter the Email']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->







            <div class="form-group">
                {{ Form::label('Message',trans('backend.form.message'), ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::textarea('message', NULL, ['class' => 'form-control', 'placeholder' =>'Enter the message']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->



            <div class="form-group">
                {{ Form::label('phone_no',trans('backend.form.phone no'), ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('phone_no', NULL, ['class' => 'form-control', 'placeholder' =>'Enter the Phone number']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->



             <div class="form-group">
                {{ Form::label('Website Address','Website Address', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('website', NULL, ['class' => 'form-control', 'placeholder' =>'Website Address']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

           <div class="form-group">
                {{ Form::label('Address','Address', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('address', NULL, ['class' => 'form-control', 'placeholder' =>'Enter Address']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

           
            

            
           





           
        
    </div>
    <div class="box box-info">
        <div class="box-body">
            <div class="pull-left">
                {{ link_to_route('admin.contact', trans('buttons.general.cancel'), [], ['class' => 'btn btn-danger btn-xs']) }}
            </div><!--pull-left-->

            <div class="pull-right">
                {{ Form::submit(trans('buttons.general.crud.create'), ['class' => 'btn btn-success btn-xs']) }}
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
                <a href="{!! url('admin/contact') !!}" class="btn btn-primary">add</a>
              contact
                </h3>


            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table id="users-table" class="table table-condensed table-hover">
                        <thead>
                        <tr>
                            <th>sn</th>
                          
                            <th>title</th>
                            <th>email</th>
                            <th>message</th>
                            <th>p.no</th>
                            <th>Website</th>
                            <th>address</th>
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
                                <td>{!! $field->email !!}</td>
                                <td>{!! $field->message !!}</td>
                                <td>{!! $field->phone_no !!}</td>
                                <td>{!! $field->website !!}</td>
                                <td>{!! $field->address !!}</td>
                                
                                
                                
                               
                                
                                   
                                <td class="col-md-1"> 
                                {!! link_to_route('admin.contact.edit', '', array($field->id),
                                              array('class' => 'fa fa-pencil-square-o fa-fw')) !!}
                                    
                                </td>
                                 <td class="col-md-1"> 
                                  {!! link_to_route('admin.contact.delete', '', array($field->id),
                                              array('class' => 'fa fa-pencil-square-o fa-fw')) !!}
                                    
                                    

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