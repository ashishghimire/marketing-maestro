<div class="row m-0">
<div class="col-md-12">



	<div class="row">
		<div class="col-md-10">
			<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
				{{ Form::label('title', 'Title: ') }}
				{{ Form::text('title', Request::old('title'), ['class' => 'form-control', 'placeholder' => 'Enter title here', 'required']) }}
				@if($errors->has('title'))
					<span class="help-block">{{ $errors->first('title') }}</span>
				@endif
			</div>
		</div>
		<div class="col-md-2">
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
	</div>

	<div class="row">
		<div class="col-md-2" style="padding-right: 0;">
		<div class="form-group{{ $errors->has('parent_id') ? ' has-error' : '' }}">
			{{ Form::label('Main Page Or Sub Page', 'Main Or Sub: ') }}
			<div class="switch-field">
				{{ Form::radio('main_or_sub', 1, null, ['id' => 'switch_left', 'onclick' => 'hidemenu()', 'checked']) }}
				<label for="switch_left">Main</label>
				{{ Form::radio('main_or_sub', 0, null, ['id' => 'switch_right', 'onclick' => 'showmenu()']) }}
				<label for="switch_right">Sub</label>
			</div>

			@if($errors->has('parent_id'))
				<span class="help-block">{{ $errors->first('parent_id') }}</span>
			@endif
		</div>
		</div>

		<div class="col-md-10">
			@if($menu)
			<div class="" id="maincms" style="@if($menu->main_or_sub == 1) display:none @endif"  >	
				<div class="form-group">
				<label >Choose Main Page</label>
				{{ Form::select('parent_id', $maincms, null, ['class' => 'form-control', 'id' => 'name']) }}
				</div>
			</div>
			@else
			<div class="" id="maincms" style="display:none"  >	
				<div class="form-group">
					<label >Choose Main Page</label>
					{{ Form::select('parent_id', $maincms, null, ['class' => 'form-control', 'id' => 'name', 'disabled']) }}
				</div>
			</div>
			@endif
		</div>

		<div class="col-md-5">
			@if($menu)
				<div class="form-group{{ $errors->has('position') ? ' has-error' : '' }}">
					{{ Form::label('position', 'Position: ') }}
					{{ Form::text('position', Request::old('position'), ['class' => 'form-control', 'placeholder' => 'Enter position here', 'required']) }}
					@if($errors->has('position'))
						<span class="help-block">{{ $errors->first('position') }}</span>
					@endif
				</div>
			@else
				<div class="form-group{{ $errors->has('position') ? ' has-error' : '' }}">
					{{ Form::label('position', 'Position: ') }}
					{{ Form::text('position', Request::old('position'), ['class' => 'form-control', 'placeholder' => 'Enter position here', 'required']) }}
					@if($errors->has('position'))
						<span class="help-block">{{ $errors->first('position') }}</span>
					@endif
				</div>
			@endif
		</div>
		<div class="col-md-5">
			<div class="form-group">
				{{ Form::label('top_menu', 'Top or Bottom: ') }}
				{{ Form::select('top_menu', ['1' => 'Top', '0' => 'Bottom'], Request::old('top_menu'), ['class' => 'form-control']) }}
			</div>
		</div>
	</div>

	<div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
		{{ Form::label('content', 'content: ') }}
		{{ Form::textarea('content', Request::old('content'), ['class' => 'form-control', 'placeholder' => 'Enter content here']) }}
		@if($errors->has('content'))
			<span class="help-block">{{ $errors->first('content') }}</span>
		@endif
	</div>
</div>
</div>

@section('before-styles')
	<style type="text/css">
		.rdiobox {
			display: inline-block;
			margin-right: 10px;
			line-height: 21px;
		}
	</style>
@endsection

@section('before-scripts')
	<script src="{{ asset('assets/ckeditor/ckeditor.js') }}"></script>

<script>


		var file_manager = '{{ asset('assets/ckeditor') }}';

        CKEDITOR.replace('content' ,{
            filebrowserBrowseUrl : file_manager + '/kcfinder/browse.php?type=2&editor=ckeditor&fldr=',
            filebrowserUploadUrl : file_manager + '/kcfinder/browse.php?type=2&editor=ckeditor&fldr=',
            filebrowserImageBrowseUrl : file_manager + '/kcfinder/browse.php?type=1&editor=ckeditor&fldr=asdasd'
        });
    </script>
	
    <script type="text/javascript">
		function showmenu(){
			document.getElementById('maincms').style.display = 'block';
			document.getElementById("name").disabled = false;
		}

		function hidemenu(){
			document.getElementById('maincms').style.display = 'none';
			document.getElementById("name").disabled = true;
		}
	</script>
@endsection

