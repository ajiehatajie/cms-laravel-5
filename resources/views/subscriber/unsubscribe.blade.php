@extends('layouts.backend')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                      
                      {!! Form::open(['url' => '/user/unsubscribe', 'class' => 'form-horizontal','id'=>'upload','files'=>'true' ]) !!}
                        
                      {!! Form::text('email',null,['class'=>'form-control']) !!}
                      {!! Form::submit('submit',['class' => 'form-control', 'multiple' => true]) !!}
                      {!! Form::close() !!}
 
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
