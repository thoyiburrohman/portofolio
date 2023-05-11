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
                                        <h5 class="font-size-22">0</h5>
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
                                        <h5 class="font-size-22">0</h5>
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
                                        <h5 class="font-size-22">0</h5>
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
                                                <th>ID</th>
                                                <th>Project</th>
                                                <th>Feature</th>
                                                <th>Price</th>
                                                <th>Invoice</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>#2356</td>
                                                <td><img src="assets/images/product/img-7.png" width="42" class="me-3"
                                                        alt="">Green Chair</td>
                                                <td>Kenneth Gittens</td>
                                                <td>$200.00</td>
                                                <td>42</td>
                                                <td><span
                                                        class="badge badge-pill badge-soft-primary font-size-13">Pending</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>#2564</td>
                                                <td><img src="assets/images/product/img-8.png" width="42" class="me-3"
                                                        alt="">Office Chair</td>
                                                <td>Alfred Gordon</td>
                                                <td>$242.00</td>
                                                <td>54</td>
                                                <td><span
                                                        class="badge badge-pill badge-soft-success font-size-13">Active</span>
                                                </td>
                                            </tr>



                                            <tr>
                                                <td>#2125</td>
                                                <td><img src="assets/images/product/img-10.png" width="42"
                                                        class="me-3" alt="">Gray Chair</td>
                                                <td>Keena Reyes</td>
                                                <td>$320.00</td>
                                                <td>65</td>
                                                <td><span
                                                        class="badge badge-pill badge-soft-success font-size-13">Active</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>#8587</td>
                                                <td><img src="assets/images/product/img-11.png" width="42"
                                                        class="me-3" alt="">Steel Chair</td>
                                                <td>Timothy Zuniga</td>
                                                <td>$342.00</td>
                                                <td>52</td>
                                                <td><span
                                                        class="badge badge-pill badge-soft-primary font-size-13">Pending</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>#2354</td>
                                                <td><img src="assets/images/product/img-12.png" width="42"
                                                        class="me-3" alt="">Home Chair</td>
                                                <td>Joann Wiliams</td>
                                                <td>$320.00</td>
                                                <td>25</td>
                                                <td><span
                                                        class="badge badge-pill badge-soft-primary font-size-13">Pending</span>
                                                </td>
                                            </tr>


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
