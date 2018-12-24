@extends('backend.layouts.app')
@section('content')

<div class="row">
        <div class="col-lg-12">
            <section>
                <h3>
                    Add Video Table
                </h3>
               
                <div class="col-md-8">
                    <form method="post" action="{{route('admin.video.store')}}">
                        <input type="hidden" value="{{Session::token()}}" name="_token">
                        <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="title"
                                   value="{{Request::old('title')}}">
                            @if ($errors->has('title'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('link') ? ' has-error' : '' }}">
                            <label for="title">Link</label>
                            <input type="text" class="form-control" id="link" name="link" placeholder="Link"
                                   value="{{Request::old('link')}}">
                            @if ($errors->has('link'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('link') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('video_type') ? ' has-error' : '' }}">
                            <label for="video_type">Video Type</label>
                            <select class="form-control" name="video_type" id="video_type">
                                <option>Facebook</option>
                                <option>Youtube</option>
                                <option>Vimeo</option>
                                <option>Dailymotion</option>
                            </select>
                            @if ($errors->has('video_type'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('video_type') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description">Description</label>
                            <textarea id="description" placeholder="description" class="form-control"
                                      name="description">{{Request::old('description')}} </textarea>
                            @if ($errors->has('description'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                            @endif
                        </div>

                                    
                         {{-- <div class="form-group">
                            {{ Form::label('type','Type', ['class' => 'col-lg-2 control-label']) }}
                            
                            {!! Form::select('type', array('...'=>'Choose Something','advertisment' => 'Advertisment', 'article' => 'Article', 'casestudy' => 'Casestudy','interview' => 'Interview','other_resources' => 'Other Resources'))!!}
                            </div> --}}


                        <div class="form-group">
                            <label for="type">Type</label>
                            <select class="form-control" name="type" id="type">
                                <option>Advertisment</option>
                                <option>Article</option>
                                <option>Case Study</option>
                                <option>Interview</option>
                                <option>Other Resources</option>
                            </select>
                            
                        </div>


{{-- 
                            <div class="form-group" hidden id="hiddencat">
                                  <label for="" class="col-lg-2 control-label"> Category </label>
                                
                                  <select class="form-control input-sm" name="category" id="category">
                                    <option value=""></option>
                                  </select>
                               
                            </div> --}}

                        
                        <button type="submit" class="btn btn-primary form-control">Save</button>
                    </form>
                    <br>
                    <br>
                </div>
            </section>
        </div>
    </div>
@stop


{{-- @section('after-scripts')
    <script>
    $('#type').on('change',function(e){
      console.log(e);
      var type=e.target.value;
      $('#hiddencat').hide();

      //ajax

      $.get('ajax-videocat?type=' + type,function(data){
            

        //success data
        $('#category').empty();


        $.each(data,function(index,subcatObj){
            if(subcatObj==null)
            {
                 $('#hiddencat').hide();
            }
            else
            {
                 $('#hiddencat').show();
                 $('#category').append('<option value="'+subcatObj.id+'">'+subcatObj.title+'</option>');
            }
          

        });

      });

    });
</script>
@endsection --}}