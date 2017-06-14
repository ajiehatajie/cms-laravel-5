@extends('layouts.backend')

@section('content')
<h2 class="text-center">Send Campaign NewsLetter</h2>
<div class="container">
     <div class="row">
          @include('admin.sidebar')
          @if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
  <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
  <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
</div>
@endif

  <div class="row">
      <div class="col-md-8">
      <div class="well well-sm">
          {!! Form::open(['url'=>'/admin/campaign','class'=>'form-horizontal']) !!}
          <fieldset>
            <legend class="text-center">Send Campaign</legend>

    
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Subject</label>
              <div class="col-md-9">
                <input id="name" name="subject" type="text" placeholder="Your Subject" class="form-control">
              </div>
            </div>

            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Your message</label>
              <div class="col-md-9">
                   {!! Form::textarea('content', null, ['class' => 'form-control my-editor', 'required' => 'required','id'=>'my-editor']) !!}
              </div>
            </div>

    
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary btn-lg">Send Campaign</button>
              </div>
            </div>
          </fieldset>
          {!! Form::close() !!}
        </div>
    </div>
  </div>

     </div>
</div>
@endsection

@section('footer')

<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
  var options = {
    filebrowserImageBrowseUrl: '/admin/filemanager?type=Images',
    filebrowserImageUploadUrl: '/admin/filemanager/upload?type=Images&_token=',
    filebrowserBrowseUrl: '/admin/filemanager?type=Files',
    filebrowserUploadUrl: '/admin/filemanager/upload?type=Files&_token='
  };
</script>
<script type="text/javascript">
    $('.form_datetime').datetimepicker({
      autoclose: true,
      todayBtn: true,
      format: "yyyy-mm-dd HH:ii",
      pickerPosition: "bottom-left",
      startDate : new Date()

    });
 
</script>
<script>
CKEDITOR.replace('my-editor', options);
</script>
@endsection