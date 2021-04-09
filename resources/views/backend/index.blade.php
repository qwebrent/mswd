@extends('backend.layouts.master')


@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h2 class="m-0 font-weight-bold text-primary">Municipal Social Welfare Development Office | Calauan</h2>
    </div>

    <!-- Content Row -->

    <div class="row">

        <!-- Male (Count) -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                PWD (Male)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $maleCount }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-mars fa-2x text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Female (Count) -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                PWD (FEMALE)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $femaleCount }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-venus fa-2x text-danger"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h5 class="m-0 font-weight-bold text-primary">No. of PWD per Barangay</h5>
    </div>

    <div class="row">
        @foreach ($brgys as $brgy)
            <ul class="list-group list-group-flush " style="width: 33%">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $brgy -> barangay }}
                <span class="badge badge-primary badge-pill">{{ $brgy->pwdinfos_count }}</span>
                </li>
            </ul>
        @endforeach

    </div>


</div>



@endsection

{{-- @section('page_level_scripts')
<script src="{{ asset('assets/vendor/chart.js/Chart.min.js')}}"></script>
<script src="{{ asset('assets/js/demo/chart-bar-demo.js') }}"></script>
@endsection --}}

