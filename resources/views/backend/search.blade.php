@extends('backend.layouts.master')

@section('page_level_css')

    {{-- Datatable CSS --}}
    <link rel="stylesheet"  href="{{url('https://cdn.datatables.net/v/bs4/dt-1.10.22/datatables.min.css')}}"/>
    <link href="{{url('https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

    {{-- Export CSS Buttons--}}
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">


@endsection

@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h2 class="m-0 font-weight-bold text-primary">Search</h2>
        {{-- <div class="d-flex flex-row">
            <h7 class="p-1 form-inline m-0">Filter By: </h7>
            <div class="p-2">
                <div id="barangay-filter">
                </div>
            </div>
        </div> --}}
    </div>

        <!-- Success Message -->
        @if(Session::has('success'))
        <div class="row">
            <div class="col-12">
                <div class="alert alert-success">
                {{ Session::get('success') }}
                </div>
            </div>
        </div>
        @endif


        <div class="row">
            <div class="col-xs-3 col-sm-3 col-md-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped dt-responsive wrap" id="pwdtable" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Full Name</th>
                            <th>Address</th>
                            <th>Birth Date</th>
                            <th>ID No.</th>
                            <th>Type of Disability</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pwdinfos as $pwdinfo)
                        <tr>
                            <td>{{ $pwdinfo -> id }}</td>
                            <td>{{ $pwdinfo -> last_name }}, {{ $pwdinfo -> first_name }} {{ $pwdinfo -> mid_name }}</td>
                            <td>Brgy. {{ $pwdinfo -> barangay -> barangay }} {{ $pwdinfo -> municipality }}, {{ $pwdinfo -> province }}</td>
                            <td>{{ $pwdinfo -> b_day }}</td>
                            <td>{{ $pwdinfo -> reg_num }}</td>
                            <td>{{ $pwdinfo -> disability -> pwd_disability }}</td>
                            <td>
                                <a class="btn btn-sm btn-primary" href="{{ route('pwd.show', $pwdinfo->id) }}">View</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td></td>
                            <td align="right">Filter by Barangay: </td>
                            <td></td>
                            <td colspan="2" align="right">Filter by Disability:</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

@endsection

@section('page_level_scripts')

    <script src="{{ url('https://code.jquery.com/jquery-3.5.1.js') }}"></script>
    <script src="{{ url('https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js') }}"></script>


    <!-- Export -->
    <script src="{{ url('https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ url('https://cdn.datatables.net/buttons/1.6.5/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js') }}"></script>
    <script src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js') }}"></script>
    <script src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js') }}"></script>
    <script src="{{ url('https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js') }}"></script>
    <script src="{{ url('https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('assets/js/export.js') }}"></script>


@endsection
