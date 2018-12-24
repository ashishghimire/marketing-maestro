
@extends('backend.layouts.app')
@section('content')

@section('before-styles')
<link rel="stylesheet" type="text/css" href="{{asset('public/css/select2.min.css')}}">

@endsection
<div class="col-md-12">
@if(isset ($model))    
{{ Form::model($model, ['route' => ['admin.post.update', $model], 'class' => 'form-horizontal', 'files'=> 'true', 'role' => 'form', 'method' => 'PATCH']) }}
@else
{{ Form::open(['route' => 'admin.post.store', 'class' => 'form-horizontal', 'files'=> 'true', 'role' => 'form', 'method' => 'post']) }}
@endif

  <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
            
              Post

                </h3>


            </div>
            <div class="box-body">

            <div class="form-group">
                {{ Form::label('title','Title', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('title', NULL, ['class' => 'form-control', 'placeholder' =>'Enter the title']) }}
                </div>
            </div>


             <div class="form-group">
                {{ Form::label('description','Description', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::textarea('description', NULL, ['id'=>'editor1','class' => 'form-control', 'placeholder' =>'Enter the description']) }}
                </div>
            </div>

             
            
            
            



   <div class="form-group">
                {{ Form::label('image','Image', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::file('image', NULL, ['class' => 'form-control', 'placeholder' =>'Enter the image']) }}
                </div>
            </div>



             <div class="form-group">
                {{ Form::label('slug','slug', ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('slug', NULL, ['id'=>'editor1','class' => 'form-control', 'placeholder' =>'Enter the slug']) }}
                </div>
            </div>


            <div class="form-group">
            {{ Form::label('status', 'Status: ') }}
            <div class="switch-field">
                {{ Form::radio('status', 1, null, ['id' => 'switch_left', 'checked']) }}
                <label for="switch_left">Enable</label>
                {{ Form::radio('status', 0, null, ['id' => 'switch_right']) }}
                <label for="switch_right">Disable</label>
            </div>
        </div>  

           {{--  <div class="form-group">
                {{Form::label('category','Category:')}}

                    <select class="form-control" name="category_id">
                        @foreach($category_id as $row)
                        <option value="{{$row->id}}">{{$row->name}}</option>
                        @endforeach
                    </select>
                </div>



            <div class="form-group">
                    
                {{Form::label('tags','Tag:')}}

            <select class="form-control select2-multi" name="tags[]" multiple="multiple">
                @foreach($tags as $row)
                <option value="{{$row->id}}">{{$row->name}}</option>
                @endforeach
            </select>
        </div> --}}


<div class="form-group">
                {{ Form::label('Category','Category', ['class' => 'col-lg-2 control-label']) }}
                <div class="col-lg-10">
                    {{ Form::select('category_id', $category_id,isset ($model)?$model->category_id:Null, ['class' => 'form-control selectcat', 'placeholder' =>'Category']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->
            
            <div class="form-group">
                {{ Form::label('Tags','Tags', ['class' => 'col-lg-2 control-label']) }}
               
                <div class="col-lg-10">

                     {{ Form::select('tags[]', $tags,isset ($model)?$model->tag:Null, ['class' => 'form-control select','multiple'=>'multiple']) }}
              
                </div>    
            </div>

    <div class="box box-info">
        <div class="box-body">
            <div class="pull-left">
                {{ link_to_route('admin.post', trans('cancel'), [], ['class' => 'btn btn-danger btn-xs']) }}
            </div><!--pull-left-->

            <div class="pull-right">
                {{ Form::submit(trans('save'), ['class' => 'btn btn-success btn-xs']) }}
            </div><!--pull-right-->

            <div class="clearfix"></div>
</div>
</div>
</div>
</div>




    
  @stop



@section('after-scripts')
<script type="text/javascript" src="{{asset('public/js/select2.min.js')}}"></script>
<script type="text/javascript">
    $('.select').select2({
            theme: "classic",
           placeholder: "Select",
            tags: true,
            tokenSeparators: [","],
            createTag: function(newTag) {
                return {
                    id: 'new:' + newTag.term,
                    text: newTag.term + ' (new)'
                };}
    });
     $('.selectcat').select2({
            theme: "classic",
           placeholder: "Select",
            createTag: function(newTag) {
                return {
                    id: 'new:' + newTag.term,
                    text: newTag.term + ' (new)'
                };}
    });

</script>
@endsection

