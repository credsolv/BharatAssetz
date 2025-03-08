@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')

<!-- Page Header -->
<div class="page-header">
    <div class="row">
        <div class="col-sm-12">
            <h3 class="page-title">Charts</h3>
        </div>
    </div>
</div>
<!-- /Page Header -->

<div class="row">

    <!-- Chart -->
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Apex Simple</h5>
            </div>
            <div class="card-body">
                <div id="s-line" class="chart-set"></div>
            </div>
        </div>
    </div>
    <!-- /Chart -->

    <!-- Chart -->
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Area Chart</h5>
            </div>
            <div class="card-body">
                <div id="s-line-area" class="chart-set"></div>
            </div>
        </div>
    </div>
    <!-- /Chart -->


    <!-- Chart -->
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Bar Chart</h5>
            </div>
            <div class="card-body">
                <div id="s-bar" class="chart-set"></div>
            </div>
        </div>
    </div>
    <!-- /Chart -->

</div>
@endsection
