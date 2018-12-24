
@extends('backend.layouts.app')
@section('content')


<div class="col-md-12">
   
{{ Form::open(['route' => 'admin.featured.store', 'class' => 'form-horizontal', 'files'=> 'true', 'role' => 'form', 'method' => 'post']) }}


  <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
            
              featured
                </h3>


            </div>
            <div class="box-body">

            
 <div class="form-group">
                {{ Form::label('type','Type', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-2">
                    {!! Form::select('type', array('...'=>'Choose Something','advertisment' => 'Advertisment', 'article' => 'Article', 'casestudy' => 'Casestudy','interview' => 'Interview','other_resources' => 'Other Resources'))!!}

                </div>
            </div>





<div class="form-group" hidden id="hiddencat">
      <label for="" class="col-lg-2 control-label"> Category </label>
                <div class="col-lg-2">

      <select class="form-control input-sm" name="category" id="category">

        <option value=""></option>
        
      </select>
  </div>
    </div>






<div class="form-group" hidden id="hiddensubcat">
    <div class="col-lg-12">
        <div class="col-lg-2">
    <label for="" class="control-label pull-right">Sub Category </label>

    </div>
    <div class="col-lg-10"  id="subcat">
    {{-- <div class="col-lg-5">

         <div class="panel-group">
            <div class="panel panel-primary">
              <div class="panel-heading">
            <div class="checkbox">
              <label><input type="checkbox" value="">Option 1</label>
            </div>    
              </div>
              <div class="panel-body">Panel Content</div>
            </div>
            </div>
    </div> --}}
    </div>
    </div>
</div>     


           

            
    
           
        
    </div>
    <div class="box box-info">
        <div class="box-body">
            <div class="pull-left">
                {{ link_to_route('admin.featured', trans('cancel'), [], ['class' => 'btn btn-danger btn-xs']) }}
            </div><!--pull-left-->

            <div class="pull-right">
                {{ Form::submit(trans('create'), ['class' => 'btn btn-success btn-xs']) }}
            </div><!--pull-right-->

            <div class="clearfix"></div>
</div>
</div>
</div>
</div>




    
 




  @endsection
