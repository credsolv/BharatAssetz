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

<!-- Welcome Wrap -->
<div class="welcome-wrap mb-4">
					<div class=" d-flex align-items-center justify-content-between flex-wrap">
						<div class="mb-3">
							<h2 class="mb-1 text-white">Welcome Back, Admin</h2>
							<p class="text-light">100+ New Companies Added Today !!!</p>
						</div>
						<div class="d-flex align-items-center flex-wrap mb-1">
							<a href="company.html" class="btn btn-dark btn-md me-2 mb-2">Brokers</a>
                            <a href="{{ route('admin.propertylist') }}" class="btn btn-light btn-md mb-2">All Properties</a>
						</div>
					</div>
				</div>	
				<!-- /Welcome Wrap -->


                <div class="row">

<!-- Total Companies -->
<div class="col-xl-3 col-sm-6 d-flex">
    <div class="card flex-fill">
        <div class="card-body">
            <div class="d-flex align-items-center justify-content-between">
                <span class="avatar avatar-md rounded bg-dark mb-3">
                    <i class="ti ti-building fs-16"></i>
                </span>
                <span class="badge bg-success fw-normal mb-3">
                    +19.01%
                </span>
            </div>
            <div class="d-flex align-items-center justify-content-between">
                <div>
                    <h2 class="mb-1">5468</h2>
                    <p class="fs-13">Total Properties</p>
                </div>
                <div class="company-bar1">5,10,7,5,10,7,5</div>
            </div>
        </div>
    </div>
</div>
<!-- /Total Companies -->

<!-- Active Companies -->
<div class="col-xl-3 col-sm-6 d-flex">
    <div class="card flex-fill">
        <div class="card-body">
            <div class="d-flex align-items-center justify-content-between">
                <span class="avatar avatar-md rounded bg-dark mb-3">
                    <i class="ti ti-carousel-vertical fs-16"></i>
                </span>
                <span class="badge bg-danger fw-normal mb-3">
                    -12%
                </span>
            </div>
            <div class="d-flex align-items-center justify-content-between">
                <div>
                    <h2 class="mb-1">4598</h2>
                    <p class="fs-13">Active Properties</p>
                </div>
                <div class="company-bar2">5,3,7,6,3,10,5</div>
            </div>
        </div>
    </div>
</div>
<!-- /Active Companies -->

<!-- Total Subscribers -->
<div class="col-xl-3 col-sm-6 d-flex">
    <div class="card flex-fill">
        <div class="card-body">
            <div class="d-flex align-items-center justify-content-between">
                <span class="avatar avatar-md rounded bg-dark mb-3">
                    <i class="ti ti-chalkboard-off fs-16"></i>
                </span>
                <span class="badge bg-success fw-normal mb-3">
                    +6%
                </span>
            </div>
            <div class="d-flex align-items-center justify-content-between">
                <div>
                    <h2 class="mb-1">3698</h2>
                    <p class="fs-13">Total Brokers</p>
                </div>
                <div class="company-bar3">8,10,10,8,8,10,8</div>
            </div>
        </div>
    </div>
</div>
<!-- /Total Subscribers -->

<!-- Total Earnings -->
<div class="col-xl-3 col-sm-6 d-flex">
    <div class="card flex-fill">
        <div class="card-body">
            <div class="d-flex align-items-center justify-content-between">
                <span class="avatar avatar-md rounded bg-dark mb-3">
                    <i class="ti ti-businessplan fs-16"></i>
                </span>
                <span class="badge bg-danger fw-normal mb-3">
                    -16%
                </span>
            </div>
            <div class="d-flex align-items-center justify-content-between">
                <div>
                    <h2 class="mb-1">$89,878,58</h2>
                    <p class="fs-13">Total Earnings</p>
                </div>
                <div class="company-bar4">5,10,7,5,10,7,5</div>
            </div>
        </div>
    </div>
</div>
<!-- /Total Earnings -->

</div>

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
                <h5 class="card-title">Column Chart</h5>
            </div>
            <div class="card-body">
                <div id="s-col" class="chart-set"></div>
            </div>
        </div>
    </div>
    <!-- /Chart -->

    <!-- Chart -->
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Column Stacked Chart</h5>
            </div>
            <div class="card-body">
                <div id="s-col-stacked" class="chart-set"></div>
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

    <!-- Chart -->
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Mixed Chart</h5>
            </div>
            <div class="card-body">
                <div id="mixed-chart" class="chart-set"></div>
            </div>
        </div>
    </div>
    <!-- /Chart -->

    <!-- Chart -->
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Donut Chart</h5>
            </div>
            <div class="card-body">
                <div id="donut-chart" class="chart-set"></div>
            </div>
        </div>
    </div>
    <!-- /Chart -->

    <!-- Chart -->
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Radial Chart</h5>
            </div>
            <div class="card-body">
                <div id="radial-chart" class="chart-set"></div>
            </div>
        </div>
    </div>
    <!-- /Chart -->

</div>

@endsection
