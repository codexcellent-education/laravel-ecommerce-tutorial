@extends('layouts.provider')
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


                    <div class="box box-primary box-solid">
                        <div class="box-header with-border">
                            <h3 class="box-title"><i class="fa fa-area-chart"></i> Your Statistic</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body pad">

                            <div class="row">
                                <div class="col-lg-3 col-xs-6">
                                    <!-- small box -->
                                    <div class="small-box bg-purple-gradient">
                                        <div class="inner">
                                            <h3>{{ $balance }}<span>{{ $basic->symbol }}</span></h3>
                                            <p>Your Balance</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-diamond"></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- ./col -->
                                <div class="col-lg-3 col-xs-6">
                                    <!-- small box -->
                                    <div class="small-box bg-aqua-gradient">
                                        <div class="inner">
                                            <h3>{{ $totalProduct }}<span></span></h3>
                                            <p>Total Product</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-list"></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- ./col -->
                                <div class="col-lg-3 col-xs-6">
                                    <!-- small box -->
                                    <div class="small-box bg-yellow-gradient">
                                        <div class="inner">
                                            <h3>{{ $totalPending }}<span></span></h3>
                                            <p>Pending Product</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-spinner"></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- ./col -->
                                <div class="col-lg-3 col-xs-6">
                                    <!-- small box -->
                                    <div class="small-box bg-blue-gradient">
                                        <div class="inner">
                                            <h3><span class="counter">{{ $totalConfirm }}</span></h3>
                                            <p>Confirm Product</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- ./col -->
                            </div>
                        </div>
                    </div>
                    <div class="box box-primary box-solid">
                        <div class="box-header with-border">
                            <h3 class="box-title"><i class="fa fa-pie-chart"></i> Your Statistic</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body pad">

                            <div class="row">
                                <div class="col-lg-3 col-xs-6">
                                    <!-- small box -->
                                    <a href="{{ route('provider-add-product') }}">
                                    <div class="small-box bg-purple-gradient">
                                        <div class="inner">
                                            <h3>Add Product</h3>
                                            <p>{{ $site_title }}</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-plus"></i>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                <!-- ./col -->
                                <div class="col-lg-3 col-xs-6">
                                    <!-- small box -->
                                    <a href="{{ route('provider-all-product') }}">
                                    <div class="small-box bg-aqua-gradient">
                                        <div class="inner">
                                            <h3>{{ $totalProduct }}<span>+</span></h3>
                                            <p>All Product</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-desktop"></i>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                <!-- ./col -->
                                <div class="col-lg-3 col-xs-6">
                                    <!-- small box -->
                                    <a href="{{ route('provider-edit-profile') }}">
                                    <div class="small-box bg-light-blue-gradient">
                                        <div class="inner">
                                            <h3>Edit Profile</h3>
                                            <p>Update Profile</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-edit"></i>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                <!-- ./col -->
                                <div class="col-lg-3 col-xs-6">
                                    <!-- small box -->
                                    <a href="{{ route('provider.logout') }}">
                                    <div class="small-box bg-red-gradient">
                                        <div class="inner">
                                            <h3>Log Out</h3>
                                            <p>Return LogIn</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-sign-out"></i>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                <!-- ./col -->
                            </div>
                        </div>
                    </div>


                    <div class="box box-primary box-solid">
                        <div class="box-header with-border">
                            <h3 class="box-title"><i class="fa fa-cloud-download"></i> Withdraw Statistic</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body pad">

                            <div class="row">
                                <div class="col-lg-3 col-xs-6">
                                    <!-- small box -->
                                    <div class="small-box bg-purple-gradient">
                                        <div class="inner">
                                            <h3>{{ $totalWithdraw }}<span>{{ $basic->symbol }}</span></h3>
                                            <p>Total Withdraw</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-cloud-download"></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- ./col -->
                                <div class="col-lg-3 col-xs-6">
                                    <!-- small box -->
                                    <div class="small-box bg-yellow-gradient">
                                        <div class="inner">
                                            <h3>{{ $totalPending }}<span>{{ $basic->symbol }}</span></h3>
                                            <p>Withdraw Pending</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-spinner"></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- ./col -->
                                <div class="col-lg-3 col-xs-6">
                                    <!-- small box -->
                                    <div class="small-box bg-purple-gradient">
                                        <div class="inner">
                                            <h3>{{ $totalWithdraw }}<span>{{ $basic->symbol }}</span></h3>
                                            <p>Withdraw Confirm</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- ./col -->
                                <div class="col-lg-3 col-xs-6">
                                    <!-- small box -->
                                    <div class="small-box bg-red-gradient">
                                        <div class="inner">
                                            <h3>{{ $totalRefund }}<span>{{ $basic->symbol }}</span></h3>
                                            <p>Withdraw Refund</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-times"></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- ./col -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



@endsection
@section('scripts')

@endsection