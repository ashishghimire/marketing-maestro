
@extends('backend.layouts.app')
@section('content')



@if(isset ($model))    
{{ Form::model($model, ['route' => ['admin.post.update', $model], 'class' => 'form-horizontal', 'files'=> 'true', 'role' => 'form', 'method' => 'PATCH']) }}
@else
{{ Form::open(['route' => 'admin.post.store', 'class' => 'form-horizontal', 'files'=> 'true', 'role' => 'form', 'method' => 'post']) }}
@endif


<div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
                <a href="{!! url('admin/post/create') !!}" class="btn btn-primary">add</a>
              Post

                </h3>


            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table id="users-table" class="table table-condensed table-hover">
                        <thead>
                        <tr>
                            <th>Sn</th>
                          
                            <th>Title</th>
                           
                            <th>dDsc</th>
                            <th>Slug</th>
                            <th>File</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            
                            
                           
                           
                        </tr>
                        </thead>
                        <tbody>
                        <?php $index = 0;?>
                        @foreach($data as $field)
                            <tr>
                                <td>{!! ++$index !!}</td>
                                                                
                                <td>{!! $field->title !!}</td>
                               <td>{!! substr($field->description, 0,50)!!}</td>
                                
                                <td>{!! $field->slug !!}</td>

                                
                                <td><img src="{!! url('public/uploads/post',$field->file) !!}" style="width:150px; height:150px;">
                                </td>
                               
                               
                                
                                   
                                <td class="col-md-1"> 
                                {!! link_to_route('admin.post.edit', '', array($field->id),
                                              array('class' => 'fa fa-pencil-square-o fa-fw')) !!}
                                    
                                </td>
                                 <td class="col-md-1"> 
                                  {!! link_to_route('admin.post.delete', '', array($field->id),
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



