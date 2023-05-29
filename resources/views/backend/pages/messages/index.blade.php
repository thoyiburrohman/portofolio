@extends('backend.layouts.app')
@section('title', 'Project')
@push('styles')
    <link rel="stylesheet" href="{{ asset('libs/datatables.net/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('libs/datatables.net-responsive/css/responsive.bootstrap5.min.css') }}">
    <link href="{{ asset('libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
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
                            <button type="button" class="btn btn-success waves-effect waves-light" data-bs-toggle="modal"
                                data-bs-target=".modal-create">Add Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->


        <div class="container-fluid">

            <div class="page-content-wrapper">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <table id="datatable" class="table table-bordered table-striped dt-responsive nowrap"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>No. Hp</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($messages as $item)
                                            <tr>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->phone }}</td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-sm btn-info waves-effect waves-light btn-view-message"
                                                        data-bs-toggle="modal" data-id="{{ $item->id }}"
                                                        data-bs-target=".modal-view"><i class="fas fa-eye"></i></button>
                                                    <a href="{{ route('project.delete', [$item->id]) }}"
                                                        class="btn btn-danger btn-sm " id="btn-hapus"><i
                                                            class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

            </div>

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
    <div class="modal fade modal-view" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">

                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="data-name" class="form-label">Name</label>
                            <input class="form-control" type="text" name="name" placeholder="Name Project"
                                id="data-name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-6 col-12">
                            <label for="data-email" class="form-label">email</label>
                            <input class="form-control" type="text" name="email" placeholder="email" id="data-email">
                        </div>
                        <div class="col-lg-6 col-12">
                            <label for="data-phone" class="form-label">phone</label>
                            <input class="form-control" type="number" name="phone" placeholder="1000000" id="data-phone">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="data-message" class="form-label"></label>
                            <textarea class="form-control" name="message" id="data-message" cols="30" rows="10"></textarea>
                        </div>
                    </div>

                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


@endsection

@push('scripts')
    <script src="{{ asset('libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('libs/datatables.net/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('libs/datatables.net-responsive/js/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('libs/select2/js/select2.min.js') }}"></script>

    <script src="{{ asset('js/pages/form-advanced.init.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable();
        });
    </script>
    <script>
        $('.btn-view-message').click(function() {
            var id = $(this).data('id');
            $.ajax({
                url: '/message/' + id + '/data',
                type: 'GET',
                success: function(data) {
                    console.log(data);
                    $('#data-name').val(data.messages.name);
                    $('#data-email').val(data.messages.email);
                    $('#data-phone').val(data.messages.phone);
                    $('#data-message').val(data.messages.message);
                }
            });
        });
    </script>
@endpush
