@extends('backend.layouts.app')



@section('content')


    <div class="col-md-12">
        @if(isset ($model))
            {{ Form::model($model, ['route' => ['admin.advertising.update', $model], 'class' => 'form-horizontal', 'files'=> 'true', 'role' => 'form', 'method' => 'PATCH']) }}
        @else
            {{ Form::open(['route' => 'admin.advertising.store', 'class' => 'form-horizontal', 'files'=> 'true', 'role' => 'form', 'method' => 'post']) }}
        @endif

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">

                    Advertising

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
                        <p class="well text-danger">*Note:-Please select the File</p>

                        <div class="col-lg-5">

                            @if(isset($model))
                                <img src="{!! url('public/uploads/Advertising1/'.$model->file)!!}"
                                     style="width:150px; height:150px;">
                            @endif
                        </div>

                    </div>
                </div>

                <div class="form-group">
                    {{ Form::label('coverpic','Cover Picture', ['class' => 'col-lg-2 control-label']) }}

                    <div class="col-lg-10 @if($errors->has('coverpic')) has-error @endif">
                        {{ Form::file('coverpic', NULL, ['class' => 'form-control-file', 'placeholder' =>'Upload Cover Pic']) }}
                        @if ($errors->has('coverpic')) <p class="help-block">{{ $errors->first('coverpic') }}</p> @endif
                        <p class="well text-danger">*Note:-Please select the Cover Pic</p>

                        <div class="col-lg-5">

                            @if(isset($model)&& !empty($model->coverpic))
                                <img src="{!! url('public/uploads/Advertising1/cover-pics/'.$model->coverpic)!!}"
                                     style="width:150px; height:150px;">
                            @endif
                        </div>

                    </div>
                </div>

                <div class="form-group">
                    {{ Form::label('Category','Category', ['class' => 'col-lg-2 control-label']) }}

                    <div class="col-lg-10 @if($errors->has('category')) has-error @endif">
                        {!! Form::select('advertising_category_id',$advertising_category_id,null,['class'=>'form-control']) !!}
                        @if ($errors->has('category')) <p class="help-block">{{ $errors->first('category') }}</p> @endif
                        <p class="well text-danger">*Note:-Please select the Category</p>


                    </div>
                </div>


                <div class="form-group">
                    <div class="col-lg-2 control-label">
                        <label>Featured Post</label>
                    </div>
                    <div class="col-lg-10 @if($errors->has('featured')) has-error @endif">
                        {!! Form::checkbox('featured', 1 ) !!}
                        @if ($errors->has('featured')) <p class="help-block">{{ $errors->first('featured') }}</p> @endif
                        <p class="well text-danger">*Note:-select the feature post or leave if not</p>

                    </div>
                </div>


                {{-- <div class="form-group">
                   {{ Form::label('Tags','Tags', ['class' => 'col-lg-2 control-label']) }}

                   <div class="col-lg-10">

                        {{ Form::select('tags[]', $tags,isset ($model)?$model->tag:Null, ['class' => 'form-control select', 'placeholder' =>'Category','multiple'=>'multiple']) }}

               </div>
                 <!--col-lg-10-->
               </div><!--form control--> --}}

                {{-- <div class="form-group">
                   {{ Form::label('Tags','Tags', ['class' => 'col-lg-2 control-label']) }}

                   <div class="col-lg-10 @if($errors->has('tag')) has-error @endif">

                   <select class="form-control select" name="tags[]" multiple="multiple">

                        @foreach($advertising_tag_id as $row)
                           <option value="{{$row->id}}">{{$row->name}}</option>
                       @endforeach
                   </select>
                    @if ($errors->has('tag')) <p class="help-block">{{ $errors->first('tag') }}</p> @endif
                        <p class="well text-danger">*Note:-Please select the multiple tag</p>


                   </div>
               </div>
    --}}
                <div class="form-group{{ $errors->has('order') ? ' has-error' : '' }}">
                    {{ Form::label('Order', 'Order No.:',['class' => 'col-lg-2 control-label']) }}
                    <div class="col-lg-10 @if($errors->has('description')) has-error @endif">
                        {{ Form::number('order', Request::old('order'), ['class' => 'form-control ', 'placeholder' => 'Enter order here', 'required' , 'maxlength'=>'3']) }}
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
                        @if ($errors->has('description')) <p
                                class="help-block">{{ $errors->first('description') }}</p> @endif
                        <p class="well text-danger">*Note:-Please enter the Description</p>

                    </div>
                </div>


                <div class="box box-info">
                    <div class="box-body">
                        <div class="pull-left">
                            {{ link_to_route('admin.advertising', trans('cancel'), [], ['class' => 'btn btn-danger btn-xs']) }}
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
                        <a href="{!! url('admin/advertising') !!}" class="btn btn-primary">Add</a>
                        Advertising

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
                                <th>File</th>

                                <th>Order</th>
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
                                    <td>{{ substr($field->description, 0,50)}} {{ strlen($field->description) > 50 ? "..." : ""}}</td>

                                    {{--  <td>

                                      @foreach(json_decode($field->tag_id) as $tag)

                                       {{dd(Tag::where('id','=',$tag))}}
                                      @foreach($field->tags->where('id','=',$tag) as $tagging)

                                      {{$tagging->name}}
                                      @endforeach
                                      @endforeach
                                     </td>
                                       --}}


                                    <td><img src="{!! url('public/uploads/Advertising1',$field->file) !!}"
                                             style="width:150px; height:150px;">
                                    </td>


                                    <td>{!! $field->order !!}</td>


                                    <td class="col-md-1">
                                        {!! link_to_route('admin.advertising.edit', '', array($field->id),
                                                      array('class' => 'fa fa-pencil-square-o fa-fw')) !!}

                                    </td>
                                    <td class="col-md-1">
                                        {!! link_to_route('admin.advertising.delete', '', array($field->id),
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

    </div>
@stop




@section('after-scripts')
    <script type="text/javascript" src="{{asset('js/select2.min.js')}}"></script>
    <script type="text/javascript">
        $('.select').select2({
            theme: "classic",
            placeholder: "Select",
            tags: true,
            tokenSeparators: [","],
            createTag: function (newTag) {
                return {
                    id: 'new:' + newTag.term,
                    text: newTag.term + ' (new)'
                };
            }
        });
        $('.selectcat').select2({
            theme: "classic",
            placeholder: "Select",
            createTag: function (newTag) {
                return {
                    id: 'new:' + newTag.term,
                    text: newTag.term + ' (new)'
                };
            }
        });

    </script>
@endsection

