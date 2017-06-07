
<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    {!! Form::label('title', 'Title', ['class' => 'col-md-1 control-label']) !!}
    <div class="col-md-11">
        {!! Form::text('title', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('category') ? 'has-error' : ''}}">
    {!! Form::label('category', 'Category', ['class' => 'col-md-1 control-label']) !!}
    <div class="col-md-11">
        {!! Form::select('category', $category,null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('category', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    {!! Form::label('Tag', 'Tag', ['class' => 'col-md-1 control-label']) !!}
    <div class="col-md-11">
        {!! Form::select('tag[]', $tag,null, ['class' => 'form-control col-md-11','multiple']) !!}
        {!! $errors->first('Tag', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('desc') ? 'has-error' : ''}}">
    {!! Form::label('desc', 'Desc', ['class' => 'col-md-1 control-label']) !!}
    <div class="col-md-11">
        {!! Form::textarea('desc', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('desc', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('content') ? 'has-error' : ''}}">
    {!! Form::label('content', 'Content', ['class' => 'col-md-1 control-label']) !!}
    <div class="col-md-11">
        {!! Form::textarea('content', null, ['class' => 'form-control my-editor', 'required' => 'required','id'=>'my-editor']) !!}
        {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
    {!! Form::label('status', 'Status', ['class' => 'col-md-1 control-label']) !!}
    <div class="col-md-11">
          {!! Form::checkbox('status','1') !!} Publish
        {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('publish') ? 'has-error' : ''}}">
    {!! Form::label('publish', 'Publish', ['class' => 'col-md-1 control-label']) !!}
    <div class="col-md-11">
        {!! Form::input('date', 'publish', $article->published_at->format('Y-m-d'), ['class' => 'form-control']) !!}
        {!! $errors->first('publish', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('thumbnails') ? 'has-error' : ''}}">
    {!! Form::label('thumbnails', 'Thumbnails', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-10">
        {!! Form::file('thumbnails', null, ['class' => 'form-control']) !!}
        {!! $errors->first('thumbnails', '<p class="help-block">:message</p>') !!}
        
        <br/>
        @If(isset($article->thumbnails))
          <div class="col-md-6 profile-header-img">
              <img src="{{ asset('/images/article/thumbnails/')}}/{{ $article->thumbnails }}"  class="img-circle" alt="">
          </div>
        @endif
       
    </div>
</div><div class="form-group {{ $errors->has('meta') ? 'has-error' : ''}}">
    {!! Form::label('meta', 'Meta', ['class' => 'col-md-1 control-label']) !!}
    <div class="col-md-11">
        {!! Form::textarea('meta', null, ['class' => 'form-control']) !!}
        {!! $errors->first('meta', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-1 col-md-1">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
@section('footer')


<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script type="text/javascript">
  $('select').select2();
</script>
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
  var options = {
    filebrowserImageBrowseUrl: '/filemanager?type=Images',
    filebrowserImageUploadUrl: '/filemanager/upload?type=Images&_token=',
    filebrowserBrowseUrl: '/filemanager?type=Files',
    filebrowserUploadUrl: '/filemanager/upload?type=Files&_token='
  };
</script>

<script>
CKEDITOR.replace('my-editor', options);
</script>
@endsection