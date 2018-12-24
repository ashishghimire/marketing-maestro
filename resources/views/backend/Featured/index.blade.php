@extends('backend.layouts.app')
@section('content')

 <section id="main-content">
        <section class="">   
            <div class="panel">
                <div class="panel-body">

                    {{-- <div class="row m-0 p-0">
                        <a href="{{ route('admin.cmsmenu.create') }}"> 
                            <button type="button" class="btn btn-primary pull-right m-r-15 m-t-15">Add CMS Page</button></a>
                    </div>  --}}
                    <br>

                 <table id="example" class="table table-striped table-inverse table-bordered table-hover" cellspacing="0" width="100%"> 
    <thead>
     <tr> 
        <th>Type</th>
        <th>Category_id</th>
        <th>Subcategory_id</th>
        <th>Action</th>
        </tr>
     </thead>
         
            <tbody> 
               @foreach($data as $row)
			     <tr>

                   <td>                   <h4>{{$row->type}}</h4></td>
                   <td>                   <h4>{{$row->category_id}}</h4></td>



			    <td>
			    @foreach(json_decode($row->sub_category_id, true) as $sub_category_id)
			    <p>{{$sub_category_id}}</p>

			    @endforeach
				</td>

				<td>Edit</td>

               </tr>

			    @endforeach 

                </tbody> 
                </table>
                    
                    <!-- // table-responsive -->
                </div>
                <!-- //panel body -->
            </div>
            <!-- // panel -->

            <!-- page end-->
        </section>
        <!-- // wrapper -->
    </section>

@stop