@extends('layouts.provider')
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/admin/css/dataTables.bootstrap.min.css') }}">
    <style>
        @media print {
            table td:last-child {display:none}
            table th:last-child {display:none}
        }
        .select2-selection,.select2-results{
            font-weight: bold !important;
        }
    </style>
@endsection
@section('content')


    <div class="row">
        <div class="col-md-12">

            <div class="box box-primary box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-info-circle"></i> {{ $page_title }}</h3>
                    <!-- tools box -->
                    <div class="pull-right box-tools">
                        <button type="button" class="btn btn-primary btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-primary btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                    <!-- /. tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body pad">


                            <table class="table table-striped table-bordered table-hover" id="myTable">
                                <thead>
                                <tr>
                                    <th>#SL</th>
                                    <th>Created At</th>
                                    <th>Transaction Number</th>
                                    <th>Transaction Type</th>
                                    <th>Transaction Amount</th>
                                    <th>Post Amount</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($log as $k => $p)
                                    <tr>
                                        <td>{{ ++$k }}</td>
                                        <td>{{ \Carbon\Carbon::parse($p->created_at)->format('dS M, Y') }}</td>
                                        <td>{{ $p->custom }}</td>
                                        <td>
                                            @if($p->type == 1)
                                                <span class="label label-primary">
                                                    <i class="fa fa-shopping-cart font-medium-2"></i>
                                                    <span>Product Sell</span>
                                                </span>
                                            @elseif($p->type == 3)
                                                <span class="label label-warning">
                                                    <i class="fa fa-cloud-upload font-medium-2"></i>
                                                    <span>Withdraw</span>
                                                </span>
                                            @elseif($p->type == 4)
                                                <span class="label label-warning">
                                                    <i class="fa fa-bolt font-medium-2"></i>
                                                    <span>Withdraw Charge</span>
                                                </span>
                                            @elseif($p->type == 5)
                                                <span class="label label-danger">
                                                    <i class="fa fa-cloud-download font-medium-2"></i>
                                                    <span>Withdraw Refund</span>
                                                </span>
                                            @elseif($p->type == 6)
                                                <span class="label label-danger">
                                                    <i class="fa fa-bolt font-medium-2"></i>
                                                    <span>Withdraw Charge Refund</span>
                                                </span>
                                            @endif
                                        </td>
                                        <td>
                                            <b>{{ $p->balance }} {{ $basic->currency }}</b>
                                        </td>
                                        <td>
                                            <b>{{ $p->post_balance }} {{ $basic->currency }}</b>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('import_scripts')

    <script src="{{ asset('assets/admin/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/dataTables.bootstrap.min.js') }}"></script>

@endsection
@section('scripts')

    <script>
        $(function () {
            $('#myTable').DataTable({
                'paging'      : true,
                'lengthChange': true,
                'searching'   : true,
                'ordering'    : false,
                'info'        : true
            });
        });
    </script>
@endsection