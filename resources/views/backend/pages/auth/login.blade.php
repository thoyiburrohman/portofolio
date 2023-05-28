@extends('backend.layouts.auth')
@section('title', 'UI Sweet Alert')
@push('styles')
@endpush
@section('content')
    <div class="container">

        <div class="home-btn"><a href="/" class="text-white router-link-active"><i class="fas fa-home h2"></i></a></div>


        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card">
                    <div class="card-body">
                        <div class="px-2 py-3">


                            <div class="text-center">
                                <a href="index.html">
                                    <img src="assets/images/logo-dark.png" height="22" alt="logo">
                                </a>

                                <h5 class="text-primary mb-2 mt-4">Welcome Back !</h5>
                                <p class="text-muted">Sign in to continue to Morvin.</p>
                            </div>


                            <form class="form-horizontal mt-4 pt-2" action="{{ route('login-authentication') }}"
                                method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="Eemail">Email</label>
                                    <input type="text" class="form-control" name="email" id="email"
                                        placeholder="Enter Email">
                                </div>

                                <div class="mb-3">
                                    <label for="userpassword">Password</label>
                                    <input type="password" class="form-control" name="password" id="userpassword"
                                        placeholder="Enter password">
                                </div>



                                <div>
                                    <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Log
                                        In</button>
                                </div>

                                {{-- <div class="mt-4 text-center">
                                    <a href="auth-recoverpw.html" class="text-muted"><i class="mdi mdi-lock me-1"></i>
                                        Forgot your password?</a>
                                </div> --}}


                            </form>


                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>

@endsection
@push('scripts')
@endpush
