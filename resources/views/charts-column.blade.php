@extends('layouts.master')
@section('title')Column charts @endsection
@section('content')

{{-- breadcrumbs  --}}
    @section('breadcrumb')
        @component('components.breadcrumb')
            @slot('li_1') Charts @endslot
            @slot('title') Column charts @endslot
        @endcomponent
    @endsection

<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Basic Column Charts</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div id="column_chart" data-colors='["--bs-danger", "--bs-primary","--bs-success"]' class="apex-charts" dir="ltr"></div>
            </div>
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Column with Data Labels</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div id="column_chart_datalabel" data-colors='["--bs-primary"]' class="apex-charts" dir="ltr"></div>
            </div>
        </div>
        <!--end card-->
    </div>
    <!--end col-->
</div><!-- end row -->

<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Stacked Column Charts</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div id="column_stacked" data-colors='["--bs-primary", "--bs-success", "--bs-warning", "--bs-danger"]' class="apex-charts" dir="ltr"></div>
            </div>
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Stacked Column 100</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div id="column_stacked_chart" data-colors='["--bs-primary", "--bs-success", "--bs-warning"]' class="apex-charts" dir="ltr"></div>
            </div>
        </div>
        <!--end card-->
    </div>
    <!--end col-->
</div><!-- end row -->

<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Column with Markers</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div id="column_markers" data-colors='["--bs-success", "--bs-primary"]' class="apex-charts" dir="ltr"></div>
            </div>
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Column with Rotated Labels</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div id="column_rotated_labels" data-colors='["--bs-info"]' class="apex-charts" dir="ltr"></div>
            </div>
        </div>
        <!--end card-->
    </div>
    <!--end col-->
</div><!-- end row -->

<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Column with Nagetive Values</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div id="column_nagetive_values" data-colors='["--bs-success", "--bs-danger", "--bs-warning"]' class="apex-charts" dir="ltr"></div>
            </div>
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Range Column Chart</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div id="column_range" data-colors='["--bs-primary", "--bs-success"]' class="apex-charts" dir="ltr"></div>
            </div>
        </div>
        <!--end card-->
    </div>
    <!--end col-->
</div><!-- end row -->

<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Dynamic Loaded Chart</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div id="dynamicloadedchart-wrap">
                    <div id="chart-year" data-colors='["--bs-primary", "--bs-success", "--bs-warning", "--bs-danger", "--bs-dark", "--bs-info"]' class="apex-charts"></div>
                    <div id="chart-quarter" class="apex-charts"></div>
                </div>
            </div>
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Distributed Columns Charts</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div id="column_distributed" class="apex-charts" dir="ltr"></div>
            </div>
        </div>
        <!--end card-->
    </div>
    <!--end col-->
</div><!-- end row -->

@endsection
@section('script')

<!-- apexcharts -->
<script src="{{ URL::asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
<!-- apexcharts init -->
<script src="{{ URL::asset('assets/js/pages/apexcharts-column.init.js') }}"></script>
<script src="{{ URL::asset('assets/js/app.js') }}"></script>

@endsection
