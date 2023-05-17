@extends('backend.layouts.app')
@section('title', 'New Project')
@push('styles')
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
                                <form action="{{ route('project.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-3">
                                        <div class="col-lg-6 col-12">
                                            <label for="name" class="form-label">Name Project</label>
                                            <input class="form-control" type="text" name="name"
                                                placeholder="Name Project" id="name" value="{{ old('name') }}">
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <label for="tech" class="form-label">Multiple Select</label>
                                            <select class="select2 form-control select2-multiple" multiple="multiple"
                                                id="tech" name="tech[]" data-placeholder="Choose ...">
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
    <script src="{{ asset('libs/select2/js/select2.min.js') }}"></script>
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
    <script src="{{ asset('js/pages/form-advanced.init.js') }}"></script>
@endpush
