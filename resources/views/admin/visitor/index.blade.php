@extends('layouts.backend')
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="//cdn.datatables.net/responsive/2.1.0/css/responsive.bootstrap.min.css">
 <style>
        #table-log {
            font-size: 85%;
        }

        th, td {
            text-align: center;
        }
    </style>
@endsection
@section('content')

    <div class="container">
        <div class="row">
            @include('admin.sidebar')
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Logs Visitor</div>
                    <div class="panel-body">

                       <table cellspacing="0" width="100%" id="table-log"
                   class="table table-striped table-bordered table-hover table-condensed dt-responsive nowrap">
                @if (config('visitlog.iptolocation'))
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>IP</th>
                        <th>Browser</th>
                        <th>OS</th>
                        @if (config('visitlog.log_user'))
                            <th>User</th>
                        @endif
                        <th>Country</th>

                        <th>Updated</th>


                        @if (config('visitlog.delete_log_button'))
                            <th>Action</th>
                        @endif
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($visitlogs as $key => $visitlog)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{$visitlog->ip}}</td>
                            <td>{{$visitlog->browser}}</td>
                            <td>{{$visitlog->os}}</td>
                            @if (config('visitlog.log_user'))
                                <td>{{$visitlog->user_name}} ({{$visitlog->user_id}})</td>
                            @endif
                            <td>{{$visitlog->country_name}}</td>

                            <td title="{{$visitlog->updated_at}}">{{$visitlog->last_visit}}</td>
                          
                            @if (config('visitlog.delete_log_button'))
                                <td align="center">
                                    <a title="Delete"
                                       class="confirm-delete text-danger"
                                       data-label="Visit Log"
                                       rel="{{route('__delete_visitlog__', ['id'=>$visitlog->id])}}"
                                       href="javascript:void(0);">
                                        <b class="glyphicon glyphicon-trash"></b>
                                    </a>
                                </td>
                            @endif
                        </tr>
                    @endforeach
                    </tbody>
                @else
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>IP</th>
                        <th>Browser</th>
                        <th>OS</th>
                        @if (config('visitlog.log_user'))
                            <th>User</th>
                        @endif
                        <th>Updated</th>
                        @if (config('visitlog.delete_log_button'))
                            <th>Action</th>
                        @endif
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($visitlogs as $key => $visitlog)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{$visitlog->ip}}</td>
                            <td>{{$visitlog->browser}}</td>
                            <td>{{$visitlog->os}}</td>
                            @if (config('visitlog.log_user'))
                                <td>{{$visitlog->user_name}} ({{$visitlog->user_id}})</td>
                            @endif
                            <td title="{{$visitlog->updated_at}}">{{$visitlog->last_visit}}</td>
                            @if (config('visitlog.delete_log_button'))
                                <td>
                                    <a title="Delete"
                                       class="confirm-delete text-danger"
                                       data-label="Visit Log"
                                       rel="{{route('__delete_visitlog__', ['id'=>$visitlog->id])}}"
                                       href="javascript:void(0);">
                                        <b class="glyphicon glyphicon-trash"></b>
                                    </a>
                                </td>
                            @endif
                        </tr>
                    @endforeach
                    </tbody>
                @endif
            </table>


             @if (config('visitlog.delete_all_logs_button') && $visitlogs->count())
                <div align="center">
                    <a title="Delete All Logs"
                       class="confirm-delete btn btn-danger"
                       data-label="All Visit Log"
                       rel="{{route('__delete_visitlog_all__')}}"
                       href="javascript:void(0);">
                        <b class="glyphicon glyphicon-trash"></b> Delete All Logs
                    </a>
                </div>
            @endif

<!-- delete confirm modal start -->
<div class="modal fade " id="modal-delete-confirm" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header modal-header-danger">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span></button>
                <h4 class="modal-title">
                    <b class="glyphicon-4x glyphicon glyphicon-trash"></b>
                    Confirm Delete
                </h4>
            </div>

            <div class="modal-body"></div>

            <div class="modal-footer">
                <button class="btn btn-default col-sm-2 pull-right" data-dismiss="modal">
                    Close
                </button>

                <form action="#" method="POST" style="display: inline;">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}

                    <button style="margin-right: 10px;" type="button"
                            class="btn confirm-delete-red-button btn-danger col-sm-2 pull-right"
                            id="frm_submit">Delete
                    </button>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- delete confirm modal end -->


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
        var $body = $('body');

        $('#table-log').DataTable({
            "order": [0, 'asc'],
            "responsive": true,
            "pageLength": 25,
            "autoWidth": true,
            aoColumnDefs: [
                {
                    bSortable: false,
                    aTargets: [-1]
                }
            ]
        });

        // confirm delete
        $body.on('click', '.confirm-delete', function (e) {
            var label = $(this).data('label');
            var $dialog = $('#modal-delete-confirm');

            $dialog.find('.modal-body').html('You are about to delete <strong>' + label + '</strong>, continue ?');
            $dialog.find('form').attr('action', this.rel);
            $dialog.modal('show');

            e.preventDefault();
        });

        $body.on('click', '.confirm-delete-red-button', function (e) {
            $(this).attr('disabled', true);
            $(this).closest('form')[0].submit();
        });
    });
</script>

@endsection