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
                                                    <button type="button"
                                                        class="btn btn-sm btn-warning waves-effect waves-light btn-edit-project"
                                                        data-bs-toggle="modal" data-id="{{ $item->id }}"
                                                        data-bs-target=".modal-edit"><i class="fas fa-pen"></i></button>
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
    <div class="modal fade modal-status" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
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
    <div class="modal fade modal-create" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <form id="edit-form" action="
                    {{ route('project.store') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-lg-6 col-12">
                                <label for="name" class="form-label">Name Project</label>
                                <input class="form-control" type="text" name="name" placeholder="Name Project"
                                    id="name" value="{{ old('name') }}">
                            </div>
                            <div class="col-lg-6 col-12">
                                <label for="tech" class="form-label">Multiple Select</label>
                                <select class="select2 form-control select2-multiple" multiple="multiple" id="tech"
                                    name="tech[]" data-placeholder="Choose ...">
                                    <optgroup label="Front End">
                                        <option value="HTML">HTML</option>
                                        <option value="CSS">CSS</option>
                                        <option value="Bootstrap 5">Bootstrap 5</option>
                                        <option value="TailwindCss">TailwindCss</option>
                                    </optgroup>
                                    <optgroup label="Back End">
                                        <option value="Codeigniter 4">Codeigniter 4</option>
                                        <option value="Laravel 10">Laravel 10</option>
                                    </optgroup>
                                    <optgroup label="Other">
                                        <option value="GSAP">GSAP</option>
                                        <option value="Animate.CSS">Animate.CSS</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-4 col-12">
                                <label for="client" class="form-label">Client</label>
                                <input class="form-control" type="text" name="client" placeholder="Client"
                                    id="client" value="{{ old('client') }}">
                            </div>
                            <div class="col-lg-4 col-12">
                                <label for="revenue" class="form-label">Revenue</label>
                                <input class="form-control" type="number" name="revenue" placeholder="1000000"
                                    id="revenue" value="{{ old('revenue') }}">
                            </div>
                            <div class="col-lg-4 col-12">
                                <label for="deadline" class="form-label">Deadline</label>
                                <input class="form-control" type="date" name="deadline" id="deadline"
                                    value="{{ old('deadline') }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" name="image" class="form-control" id="image"
                                    onchange="previewImg()">
                            </div>
                            <div class="col-12">
                                <img class="mt-3 preview col-12" src="" alt="">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-secondary waves-effect"
                            data-bs-dismiss="modal">Close</button>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <div class="modal fade modal-edit" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <form id="edit-form" action="
                    {{ route('project.update', [$item->id]) }}"
                        method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <input type="hidden" name="status" id="data-status">
                        <input type="hidden" name="gambarLama" id="data-old-image">
                        <div class="row mb-3">
                            <div class="col-lg-6 col-12">
                                <label for="data-name" class="form-label">Name Project</label>
                                <input class="form-control" type="text" name="name" placeholder="Name Project"
                                    id="data-name" value="{{ old('name') }}">
                            </div>
                            <div class="col-lg-6 col-12">
                                <label for="data-tech" class="form-label"> Select</label>
                                <select class="select2 form-control select2-multiple" multiple="multiple" id="data-tech"
                                    name="tech[]" data-placeholder="Choose ...">
                                    <optgroup label="Front End">
                                        <option value="HTML">HTML</option>
                                        <option value="CSS">CSS</option>
                                        <option value="Bootstrap 5">Bootstrap 5</option>
                                        <option value="TailwindCss">TailwindCss</option>
                                    </optgroup>
                                    <optgroup label="Back End">
                                        <option value="Codeigniter 4">Codeigniter 4</option>
                                        <option value="Laravel 10">Laravel 10</option>
                                    </optgroup>
                                    <optgroup label="Other">
                                        <option value="GSAP">GSAP</option>
                                        <option value="Animate.CSS">Animate.CSS</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-4 col-12">
                                <label for="data-client" class="form-label">Client</label>
                                <input class="form-control" type="text" name="client" placeholder="Client"
                                    id="data-client" value="{{ old('client') }}">
                            </div>
                            <div class="col-lg-4 col-12">
                                <label for="data-revenue" class="form-label">Revenue</label>
                                <input class="form-control" type="number" name="revenue" placeholder="1000000"
                                    id="data-revenue" value="{{ old('revenue') }}">
                            </div>
                            <div class="col-lg-4 col-12">
                                <label for="data-deadline" class="form-label">Deadline</label>
                                <input class="form-control" type="date" name="deadline" id="data-deadline"
                                    value="{{ old('deadline') }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" name="image" class="form-control" id="edit-image"
                                    onchange="previewChangeImg()">
                            </div>
                            <div class="col-12">
                                <img class="mt-3 edit-preview col-12" id="data-image" src="" alt="">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-secondary waves-effect"
                            data-bs-dismiss="modal">Close</button>
                    </form>
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
        $('.btn-edit-status').click(function() {
            var id = $(this).data('id');
            $.ajax({
                url: '/project/' + id + '/data',
                type: 'GET',
                success: function(data) {
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
    <script>
        $('.btn-edit-project').click(function() {
            var id = $(this).data('id');
            $.ajax({
                url: '/project/' + id + '/data',
                type: 'GET',
                success: function(data) {
                    $('#data-name').val(data.projects.name);
                    $('#data-client').val(data.projects.client);
                    $('#data-revenue').val(data.projects.revenue);
                    $('#data-deadline').val(data.projects.deadline);
                    $('#data-image').attr('src', data.projects.image);
                    $('#data-status').val(data.projects.status);
                    $('#data-old-image').val(data.projects.image);

                    $.each(data.projects.tech, function(key, value) {
                        $('#data-tech option[value="' + value + '"]').prop('selected', true);
                    });
                }
            });
        });
    </script>
    <script>
        function previewImg() {
            const img = document.querySelector('#image');
            const imgPreview = document.querySelector('.preview');

            const oFReader = new FileReader();
            oFReader.readAsDataURL(img.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        };
    </script>
    <script>
        function previewChangeImg() {
            const img = document.querySelector('#edit-image');
            const imgPreview = document.querySelector('.edit-preview');

            const oFReader = new FileReader();
            oFReader.readAsDataURL(img.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        };
    </script>
@endpush
