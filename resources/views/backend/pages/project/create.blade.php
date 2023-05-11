@extends('backend.layouts.app')
@section('title', 'New Project')
@push('styles')
@endpush
@section('content')
    <div class="page-content">

        <!-- start page title -->
        <div class="page-title-box">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="page-title">
                            <h4>Add Project</h4>
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">My Project</a></li>
                                <li class="breadcrumb-item active">Add Project</li>
                            </ol>
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
                                <form action="{{ route('project.store') }}" method="post">
                                    @csrf
                                    <div class="row mb-3">
                                        <div class="col-lg-6 col-12">
                                            <label for="name" class="form-label">Name Project</label>
                                            <input class="form-control" type="text" name="name"
                                                placeholder="Name Project" id="name" value="{{ old('name') }}">
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <label for="category" class="form-label">Project Category</label>
                                            <input class="form-control" type="text" name="category"
                                                placeholder="Project Category" id="category" value="{{ old('category') }}">
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
                                    <div class="row ">
                                        <div class="col-12">
                                            <div class="float-end">
                                                <button type="button" id="addFeature" class="btn btn-success ">Add
                                                    Feature</button>
                                                <button type="button" id="removeFeature" class="btn btn-danger ">Remove
                                                    Feature</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3" id="feature">
                                        <div class="col-12 mb-2" id="childFeature">
                                            <label for="feature" class="form-label">Feature</label>
                                            <input class="form-control" type="text" name="feature[]" placeholder="CRUD"
                                                id="feature" value="{{ old('feature') }}">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </form>
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
    <script>
        $('#addFeature').click(function() {
            $('#feature').append(` <div class="col-12 mb-2" id="childFeature">
                <label for="feature" class="form-label">Feature</label>
                                            <input class="form-control" type="text" name="feature[]" placeholder="CRUD"
                                                id="feature" value="{{ old('feature') }}">
                                        </div>`);
        });
        $('#removeFeature').click(function() {
            $('#childFeature').remove();
        });
    </script>
@endpush
