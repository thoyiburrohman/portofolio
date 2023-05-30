@extends('backend.layouts.app')
@section('title', 'Dashboard')
@push('styles')
    <!-- plugin css -->
    <link href="{{ asset('libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet"
        type="text/css" />
@endpush
@section('content')
    <div class="page-content">

        <!-- start page title -->
        <div class="page-title-box">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="page-title">
                            <h4>Dashboard</h4>
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">My Project</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="float-end d-none d-sm-block">
                            <a href="" class="btn btn-success">Add Project</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->


        <div class="container-fluid">

            <div class="page-content-wrapper">

                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-around">
                                    <div class="mini-stat-icon mt-2 mb-2 float-start">
                                        <span class="avatar-title rounded-circle bg-soft-info">
                                            <i class="fas fa-clipboard-list text-primary font-size-22"></i>
                                        </span>
                                    </div>
                                    <div class=" d-flex align-items-end flex-column justify-content-center float-end">
                                        <p class="font-size-18 mb-1 mt-1">Project</p>
                                        <h5 class="font-size-22">{{ count($projects) }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-around">
                                    <div class="mini-stat-icon mt-2 mb-2 float-start">
                                        <span class="avatar-title rounded-circle bg-soft-success">
                                            <i class="fas fa-check-circle text-success font-size-22"></i>
                                        </span>
                                    </div>
                                    <div class=" d-flex align-items-end flex-column justify-content-center float-end">
                                        <p class="font-size-18 mb-1 mt-1">Success</p>
                                        <h5 class="font-size-22">{{ count($done) }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-around">
                                    <div class="mini-stat-icon mt-2 mb-2 float-start">
                                        <span class="avatar-title rounded-circle bg-soft-warning">
                                            <i class="fas fa-circle-notch text-warning font-size-22"></i>
                                        </span>
                                    </div>
                                    <div class=" d-flex align-items-end flex-column justify-content-center float-end">
                                        <p class="font-size-18 mb-1 mt-1">Progress</p>
                                        <h5 class="font-size-22">{{ count($progress) }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-around">
                                    <div class="mini-stat-icon mt-2 mb-2 float-start">
                                        <span class="avatar-title rounded-circle bg-soft-danger">
                                            <i class="fas fa-times-circle text-danger font-size-22"></i>
                                        </span>
                                    </div>
                                    <div class=" d-flex align-items-end flex-column justify-content-center float-end">
                                        <p class="font-size-18 mb-1 mt-1">Cancel</p>
                                        <h5 class="font-size-22">0</h5>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="row">

                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title mb-4">Project of the Month</h4>
                                <div class="table-responsive">
                                    <table class="table table-centered table-nowrap mb-0">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Name Project</th>
                                                <th>Tech</th>
                                                <th>Client</th>
                                                <th>Revenue</th>
                                                <th>Deadline</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($projects as $item)
                                                <tr>
                                                    <td>{{ $item->name }}</td>
                                                    <td>{{ implode(' | ', $item->tech) }}</td>
                                                    <td>{{ $item->client }}</td>
                                                    <td>{{ $item->revenue }}</td>
                                                    <td>{{ $item->deadline }}</td>
                                                    <td>
                                                        @if ($item->status == 'New')
                                                            <span class="badge bg-info">{{ $item->status }}</span>
                                                        @elseif ($item->status == 'Progress')
                                                            <span class="badge bg-warning">{{ $item->status }}</span>
                                                        @else
                                                            <span class="badge bg-success">{{ $item->status }}</span>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- end table-responsive -->
                            </div>
                        </div>
                    </div>


                </div>

            </div>

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@endsection

@push('scripts')
    <script src="{{ asset('libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js') }}"></script>

    <script src="{{ asset('js/pages/dashboard.init.js') }}"></script>
@endpush
