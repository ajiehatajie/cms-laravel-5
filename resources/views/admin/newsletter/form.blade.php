<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    {!! Form::label('email', 'Email', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::email('email', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('unsubscribe') ? 'has-error' : ''}}">
    {!! Form::label('unsubscribe', 'Unsubscribe', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::input('datetime-local', 'unsubscribe', null, ['class' => 'form-control']) !!}
        {!! $errors->first('unsubscribe', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('receive') ? 'has-error' : ''}}">
    {!! Form::label('receive', 'Receive', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('receive', null, ['class' => 'form-control']) !!}
        {!! $errors->first('receive', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
