@extends('frontend.layouts.app')
@push('style')
@endpush
@section('title', 'Blog')
@section('content')
    <!-- Header -->
    <header class="bg-primary">
        <div class="container px-lg-5">
            <div class="row py-2 justify-content-center align-items-center mb-4">
                <div class="col-6">
                    <a class="navbar-brand text-uppercase fw-semibold text-light fs-5"
                        href="{{ route('index') }}">Thoyiburrohman
                    </a>
                </div>
                <div class="col-6">
                    <div class="dropdown dropdown-end float-end">
                        <button id="btn" class="btn btn-primary p-lg-2 px-0 text-uppercase dropdown-toggle"
                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Theme
                        </button>
                        <ul class="dropdown-menu" style="min-width: 1rem">
                            <li>
                                <button class="dropdown-item d-flex justify-content-lg-center align-items-center"
                                    type="button" data-bs-theme-value="dark">
                                    <i class="mdi mdi-moon-waning-crescent me-2"></i>
                                    Dark
                                </button>
                            </li>
                            <li>
                                <button class="dropdown-item d-flex justify-content-lg-center align-items-center"
                                    type="button" data-bs-theme-value="light">
                                    <i class="mdi mdi-white-balance-sunny me-2"></i> Light
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->
    <nav class="navbar navbar-expand-lg bg-primary ">
        <div class="container px-lg-5">
            <div class="row">
                <div class="col-12">

                    <a class="navbar-brand fs-1 text-uppercase fw-semibold text-primary" href="{{ route('index') }}">Blog
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-uppercase fw-semibold">
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ route('index') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#skills">Skill</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#projects">Projcect</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown dropdown-end">
                                <button id="btn" class="btn btn-primary p-lg-2 px-0 text-uppercase dropdown-toggle"
                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Theme
                                </button>
                                <ul class="dropdown-menu" style="min-width: 1rem">
                                    <li>
                                        <button class="dropdown-item d-flex justify-content-lg-center align-items-center"
                                            type="button" data-bs-theme-value="dark">
                                            <i class="mdi mdi-moon-waning-crescent me-2"></i>
                                            Dark
                                        </button>
                                    </li>
                                    <li>
                                        <button class="dropdown-item d-flex justify-content-lg-center align-items-center"
                                            type="button" data-bs-theme-value="light">
                                            <i class="mdi mdi-white-balance-sunny me-2"></i> Light
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </li>
                </div>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <footer class="text-center py-4 ">
        Made with <i class="fas fa-heart text-danger"></i> by <a href=""
            class="text-primary fw-bold text-decoration-none">Thoyiburrohman</a>
    </footer>
@endsection
@push('scripts')
@endpush
