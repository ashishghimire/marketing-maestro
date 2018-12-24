@section('before-styles')
<link rel="stylesheet" type="text/css" href="{{asset('public/css/select2.min.css')}}">
<script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js">  </script>
@endsection

@extends('backend.layouts.app')
@section('content')


<div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
                <a href="{!! url('menucategory') !!}" class="btn btn-primary">add</a>
              profile
                </h3>


            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table id="users-table" class="table table-condensed table-hover">
                        <thead>
                        <tr>
                              <th>S.N</th>
      <th>Title</th>
      <th>Description</th>
      <th>price</th> 
      <th>special</th> 
      <th>image</th>
                        

                            
                            
                           
                           
                        </tr>
                        </thead>
                        <tbody>
                        <?php $index = 0;?>
  @foreach($data->menu as $row)
                        
                            <tr>
                         <td>{{$index++}}</td>
     <td>{{$row->title}}</td>
     <td>{{$row->description}}</td>
     <td>{{$row->price}}</td>
     <td>{{$row->special}}</td>
       <td>
        <img src="{{asset('uploads/' . $row->image)}}" width="240px" height="270">
      </td>
  

                                
                                
                               
                                
                                      
                                                </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>



    

@endsection
@section('after-scripts')


<script src="{{asset('public/js/select2.min.js')}}" type="text/javascript" charset="utf-8"></script>

<script>CKEDITOR.replace( 'editor1' );  </script>


       <script>         $('.select').select2();  </script>

@endsection