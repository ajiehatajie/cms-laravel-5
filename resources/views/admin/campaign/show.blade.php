@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Campaign {{ $data->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/campaign') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                      
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $data->id }}</td>
                                    </tr>
                                    <tr><th> Subject </th><td> {{ $data->subject }} </td></tr>
                                    <tr><th> Content </th><td> {!! $data->content !!} </td></tr>
                                    <tr><th> Send Date</th><td> {!! $data->created_at->diffForHumans() !!} </td></tr>
                                    
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
