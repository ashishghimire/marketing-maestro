@extends('backend.layouts.app')
@section('content')

<div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
                <a href="{!! url('admin/event/create') !!}" class="btn btn-primary">Add</a>
              Event
                </h3>


            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table id="users-table" class="table table-condensed table-hover">
                        <thead>
                        <tr>
                            <th>sn</th>
                          
                            <th>status</th>
                            <th>start time</th>
                            <th>end time</th>
                            <th>start date</th>
                            <th>end date</th>
                            <th>name</th>
                            <th>desc</th>
                            

                        
                            <th>Image</th>
                            <th>location</th>
                            
                            <th>edit</th>
                            <th>delete</th>
                            
                            
                           
                           
                        </tr>
                        </thead>
                        <tbody>
                        <?php $index = 0;?>
                        @foreach($data as $field)
                            <tr>
                                <td>{!! ++$index !!}</td>
                                                                
                                        
                                <td>{!! $field->status !!}</td>
                                <td>{!! $field->start_time !!}</td>
                                <td>{!! $field->end_time !!}</td>
                                <td>{!! $field->start_date !!}</td>
                                <td>{!! $field->end_date !!}</td>
                                <td>{!! $field->name !!}</td>
                                    <td>{!! str_limit($field->description, 25) !!}</td>
                               
                                
                                <td><img src="{!! url('public/uploads/'.$field->image)!!}" style="width:150px; height:150px;">
                                </td>
                                <td>{!! $field->location !!}</td>
                               
                                
                                   
                                <td class="col-md-1"> 
                                {!! link_to_route('admin.event.edit', '', array($field->id),
                                              array('class' => 'fa fa-pencil-square-o fa-fw')) !!}
                                    
                                </td>
                                 <td class="col-md-1"> 
                                  {!! link_to_route('admin.event.delete', '', array($field->id),
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