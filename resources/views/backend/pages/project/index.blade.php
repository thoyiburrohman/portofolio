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
                            <a href="{{ route('project.create') }}" class="btn btn-success">Add Project</a>
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
                                            <th>Name Project</th>
                                            <th>Tech</th>
                                            <th>Client</th>
                                            <th>Revenue</th>
                                            <th>Deadline</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($project as $item)
                                            <tr>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ implode(' | ', $item->tech) }}</td>
                                                <td>{{ $item->client }}</td>
                                                <td>{{ $item->revenue }}</td>
                                                <td>{{ $item->deadline }}</td>
                                                <td>
                                                    @if ($item->status == 'New')
                                                        <button
                                                            class="btn btn-sm btn-edit-status btn-info waves-effect waves-light"
                                                            data-id="{{ $item->id }}" data-bs-toggle="modal"
                                                            data-bs-target=".modal-status">{{ $item->status }}</button>
                                                    @elseif ($item->status == 'Progress')
                                                        <button
                                                            class="btn btn-sm btn-edit-status btn-warning waves-effect waves-light"
                                                            data-id="{{ $item->id }}" data-bs-toggle="modal"
                                                            data-bs-target=".modal-status">{{ $item->status }}</button>
                                                    @else
                                                        <button
                                                            class="btn btn-sm btn-edit-status btn-success waves-effect waves-light"
                                                            data-id="{{ $item->id }}" data-bs-toggle="modal"
                                                            data-bs-target=".modal-status">{{ $item->status }}</button>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('project.edit', [$item->id]) }}"
                                                        class="btn btn-sm btn-warning"><i class="fas fa-pen"></i></a>
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
    @if ($project)
        <div class="modal fade modal-status" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0">Edit Status</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="edit-form" action="
                    {{ route('project.status', [$item->id]) }}"
                            method="post">
                            @csrf
                            <div class="row mb-3">
                                <input class="form-control" hidden name="id" type="text" id="project-id">
                                <div class="col-12">
                                    <label for="project-name" class="form-label">Name Project</label>
                                    <input class="form-control" readonly type="text" id="project-name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12">
                                    <label for="project-status" class="form-label">Name Project</label>
                                    <select class="form-control select2" name="status" id="project-status">
                                        <option>== Pilih Status == </option>
                                        <option {{ $item->status == 'New' ? 'selected' : '' }} value="New">New</option>
                                        <option {{ $item->status == 'Progress' ? 'selected' : '' }} value="Progress">
                                            Progress
                                        </option>
                                        <option {{ $item->status == 'Done' ? 'selected' : '' }} value="Done">Done
                                        </option>
                                    </select>
                                </div>
                            </div>

                        </form>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    @else
        ''
    @endif

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
        $('.btn-edit-status').click(function() {
            var id = $(this).data('id');
            $.ajax({
                url: '/project/' + id + '/data',
                type: 'GET',
                success: function(data) {
                    console.log(data);
                    $('#project-id').val(data.projects.id);
                    $('#project-name').val(data.projects.name);
                    // Set form input fields based on data
                    // ...
                    $('.modal-status').modal('show');
                }
            });
        });
        $('#project-status').change(function() {
            $('#edit-form').submit();
        });
    </script>
@endpush
