

<div class="form-group{{ $errors->has('name') ? ' has-error' : ''}}">
    {!! Form::label('name', 'Name: ', ['class' => 'col-md-1 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}

     

    </div>
</div>

<div class="form-group{{ $errors->has('name') ? ' has-error' : ''}}">
    {!! Form::label('name', 'Profile Picture: ', ['class' => 'col-md-1 control-label']) !!}
    
    <div class="row">
         <div class="col-md-6">
            {!! Form::file('image', null, ['class' => 'form-control', 'required' => 'required','id'=>'image']) !!}
            {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
            
        </div>
        
       @if(!empty($user))
        
            <div class="col-md-6 profile-header-img">
                 <img src="{{ asset('/images/profile/thumbnails/')}}/{{ $user->profile_picture }}"  class="img-circle" alt="">
            </div>


        @endif
       

    </div>
  
</div>

<div class="form-group{{ $errors->has('email') ? ' has-error' : ''}}">
    {!! Form::label('email', 'Email: ', ['class' => 'col-md-1 control-label']) !!}
    <div class="col-md-6">
        {!! Form::email('email', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group{{ $errors->has('password') ? ' has-error' : ''}}">
    {!! Form::label('password', 'Password: ', ['class' => 'col-md-1 control-label']) !!}
    <div class="col-md-6">
        {!! Form::password('password', ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group{{ $errors->has('roles') ? ' has-error' : ''}}">
    {!! Form::label('role', 'Role: ', ['class' => 'col-md-1 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('roles[]', $roles, isset($user_roles) ? $user_roles : [], ['class' => 'form-control', 'multiple' => true]) !!}
    </div>
</div>
<div class="form-group">
    <div class="col-md-offset-4 col-md-1">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>


