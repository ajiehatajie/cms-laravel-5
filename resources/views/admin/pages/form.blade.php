<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    {!! Form::label('title', 'Title', ['class' => 'col-md-1 control-label']) !!}
    <div class="col-md-11">
        {!! Form::text('title', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('desc') ? 'has-error' : ''}}">
    {!! Form::label('desc', 'Desc', ['class' => 'col-md-1 control-label']) !!}
    <div class="col-md-11">
        {!! Form::text('desc', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('desc', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('content') ? 'has-error' : ''}}">
    {!! Form::label('content', 'Content', ['class' => 'col-md-1 control-label']) !!}
    <div class="col-md-11">
        {!! Form::textarea('content', null, ['class' => 'form-control ckeditor', 'required' => 'required']) !!}
        {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('published_at') ? 'has-error' : ''}}">
    {!! Form::label('publish', 'publish', ['class' => 'col-md-1 control-label']) !!}
    <div class="col-md-11">
        {!! Form::checkbox('publish','1') !!} Publish

        {!! $errors->first('publish', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-1 col-md-1">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>



@section('footer')
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/1.0.3/js/select2.min.js"></script>
 <script>

      CKEDITOR.replace( 'ckeditor' );
  </script>
<script type="text/javascript">
  $('select').select2();
</script>
@endsection
