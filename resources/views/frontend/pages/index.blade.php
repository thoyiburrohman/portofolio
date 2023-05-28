@extends('frontend.layouts.app')
@push('style')
@endpush
@section('title', 'Home')
@section('content')
    <nav class="navbar navbar-expand-lg bg-primary sticky-top">
        <div class="container px-lg-5">
            <a class="navbar-brand text-uppercase fw-semibold text-primary" href="index.html">Thoyiburrohman</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-uppercase fw-semibold">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skills">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects">Projects</a>
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
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- hero -->
    <section class="hero" id="home">
        <div class="container p-5">
            <div class="row justify-content-center align-items-center ">
                <div class="col-lg-6 px-4 d-flex justify-content-lg-start justify-content-center">
                    <div class="home-text text-lg-start text-center">
                        <h5 class="">Official site
                        </h5>
                        <h1 class="title text-uppercase fw-bold mt-3 mb-2 text-primary">thoyiburrohman</h1>
                        <h5 class="mb-3">Employee & Freelancer</h5>
                        <a target="_blank" href="https/wa.me/+6281285247694"
                            class="btn btn-primary text-capitalize me-2">Hire Me</a>
                        <!-- <a href="/download-cv"class="btn btn-outline-primary text-capitalize">Download CV</a> -->
                        <div class="d-flex justify-content-lg-start justify-content-center mt-3">
                            <a class="border border-2 px-2 border-primary me-2 fs-4 rounded-2" target="_blank"
                                href="https://facebook.com/thoyiburrohman"><i class="mdi mdi-facebook text-primary"></i></a>
                            <a class="border border-2 px-2 border-primary me-2 fs-4 rounded-2" target="_blank"
                                href="https://instagram.com/thoyiburrohman"><i
                                    class="mdi mdi-instagram text-primary"></i></a>
                            <a class="border border-2 px-2 border-primary me-2 fs-4 rounded-2" target="_blank"
                                href="https://t.me/thoyiburrohman"><i class="mdi mdi-telegram text-primary"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 m-lg-0 mt-5 px-4 text-end">
                    <img src="{{ asset('images/home/profile-1.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Hero End -->
    <section class="about my-5" id="about">
        <div class="container py-5">
            <div class="row">
                <div class="text-center fw-bold text-primary text-uppercase fs-2">About</div>
                <div class="text-center fw-normal text-capitalize mb-5">Tentang Saya</div>
            </div>
            <div class="row justify-content-center align-items-center mb-4">
                <div class="col-lg-5 text-lg-start text-center col-12 mb-lg-0 mb-4">
                    <img src="{{ asset('images/home/profile.png') }}" alt="">
                </div>
                <div class="col-lg-7 col-12">
                    <p class="lead">Saya seorang karyawan disalah satu perusahaan telekomunikasi di Indonesia,
                        dan saya senang dalam pengembangan diri dalam bidang teknologi digital seperti coding dengan bahasa
                        pemrograman framework laravel. </p>
                    <div class="row justify-content-center align-content-center ">
                        <div class="col-lg-4 col-7 mb-3">
                            <div class="card bg-primary">
                                <div class="card-body">
                                    <div class="icon-item text-center text-white">
                                        <i class="fas fa-award"></i>
                                    </div>
                                    <div class="about-title text-center text-white mb-1 text-capitalize">
                                        <span>Experience</span>
                                    </div>
                                    <div class="about-subtitle text-center text-capitalize">
                                        <span>2+ Years</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-7 mb-3">
                            <div class="card bg-primary">
                                <div class="card-body">
                                    <div class="icon-item text-center text-white">
                                        <i class="fas fa-suitcase"></i>
                                    </div>
                                    <div class="about-title text-center text-white mb-1 text-capitalize">
                                        <span>Project</span>
                                    </div>
                                    <div class="about-subtitle text-center text-capitalize">
                                        <span>3+ project</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-7 mb-3">
                            <div class="card bg-primary">
                                <div class="card-body">
                                    <div class="icon-item text-center text-white">
                                        <i class="fas fa-headphones"></i>
                                    </div>
                                    <div class="about-title text-center text-white mb-1 text-capitalize">
                                        <span>Support</span>
                                    </div>
                                    <div class="about-subtitle text-center text-capitalize">
                                        <span>24/7 Hours</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center align-content-center ">
                        <div class="col-10 col-lg-12">
                            <p class="text-secondary text-lg-start text-center"></p>
                        </div>
                    </div>
                    <div class="link-to text-center text-lg-start">
                        <a target="_blank" href="https/wa.me/+6281285247694"
                            class="btn btn-primary text-capitalize me-2">Hire Me</a>

                        <!-- <a href="/download-cv"class="btn btn-outline-primary text-capitalize">Download CV</a> -->
                    </div>
                </div>
            </div>
    </section>
    <section class="skills my-5" id="skills">
        <div class="container py-5">
            <div class="row">
                <div class="text-center fw-bold text-primary text-uppercase fs-2">Skills</div>
                <div class="text-center fw-normal text-capitalize fs-5 mb-5">Keterampilan Saya</div>
            </div>
            <div class="row justify-content-center align-items-center mx-2">
                <div class="col-lg-6 col-12 mb-4">
                    <div class="card bg-primary">
                        <div class="card-body">
                            <div class="row justify-content-center text-center ">
                                <div class="text-uppercase fw-semibold text-dark mb-4">Frontend Developer</div>
                                <div class="col-6 text-white text-start">
                                    <ul class="nav-item">
                                        <li class="nav-link">
                                            <i class="uil uil-check-circle me-2"></i><span>HTML</span>
                                        </li>
                                        <li class="nav-link">
                                            <i class="uil uil-check-circle me-2"></i><span>CSS</span>
                                        </li>
                                        <li class="nav-link">
                                            <i class="uil uil-check-circle me-2"></i><span>JavaScript</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-6 text-white text-start">
                                    <ul class="nav-item">
                                        <li class="nav-link">
                                            <i class="uil uil-check-circle me-2"></i><span>Bootstrap</span>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 mb-4">
                    <div class="card bg-primary">
                        <div class="card-body">
                            <div class="row justify-content-center text-center ">
                                <div class="text-uppercase fw-semibold text-dark mb-4">Backend Developer</div>
                                <div class="col-6 text-white text-start">
                                    <ul class="nav-item">
                                        <li class="nav-link">
                                            <i class="uil uil-check-circle me-2"></i><span>PHP</span>
                                        </li>
                                        <li class="nav-link">
                                            <i class="uil uil-check-circle me-2"></i><span>CodeIgniter</span>
                                        </li>
                                        <li class="nav-link">
                                            <i class="uil uil-check-circle me-2"></i><span>Laravel</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-6 text-white text-start">
                                    <ul class="nav-item">
                                        <li class="nav-link">

                                            <i class="uil uil-check-circle me-2"></i><span>MySQL</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 mb-4">
                    <div class="card bg-primary">
                        <div class="card-body">
                            <div class="row justify-content-center text-center ">
                                <div class="text-uppercase fw-semibold text-dark mb-4">Design</div>
                                <div class="col-6 text-white text-start">
                                    <ul class="nav-item">
                                        <li class="nav-link">

                                            <i class="uil uil-check-circle me-2"></i><span>Photoshop</span>
                                        </li>
                                        <li class="nav-link">
                                            <i class="uil uil-check-circle me-2"></i><span>Ilustrator</span>
                                        </li>
                                        <li class="nav-link">
                                            <i class="uil uil-check-circle me-2"></i><span>Figma</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-6 text-white text-start">
                                    <ul class="nav-item">
                                        <li class="nav-link">

                                            <i class="uil uil-check-circle me-2"></i><span>Corel Draw</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="projects" id="projects">
        <div class="container py-5">
            <div class="row">
                <div class="text-center fw-bold text-primary text-uppercase fs-2">projects</div>
                <div class="text-center fw-normal text-capitalize mb-5">Project terbaru</div>
            </div>
            <div class="row justify-content-center align-items-center mx-5">
                @foreach ($projects as $item)
                    <div class="col-lg-4 col-12 mb-3">
                        <div class="card border border-0">
                            <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top shadow-lg"
                                alt="{{ $item->name }}">
                            <div class="card-body">
                                <p class="card-title text-primary fs-5  fw-semibold">{{ $item->name }}</p>
                                <p class="card-title text-secondary ">{{ implode(' | ', $item->tech) }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="contact my-5" id="contact">
        <div class="container py-5">
            <div class="row">
                <div class="text-center fw-bold text-primary text-uppercase fs-2">Contact</div>
                <div class="text-center fw-normal text-capitalize mb-5">Hubungi Saya</div>
            </div>
            <div class="row justify-content-center align-items-center mx-5">
                <div class="col-lg-8 col-12">
                    <form action="{{ route('message.store') }}" method="POST" id="form-contact">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="name" class="form-control" id="name" name="name"
                                placeholder="John Doe" {{ old('name') }}>
                            <label for="name" class="text-secondary">Nama lengkap</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="johndoe@example.com" {{ old('email') }}>
                            <label for="email" class="text-secondary">Email aktif</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="phone" name="phone"
                                placeholder="0812xxxxxxxxx" {{ old('phone') }}>
                            <label for="phone" class="text-secondary">No. Whatsapp aktif</label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Leave a comment here" name="message" id="pesan"
                                style="height: 100px" form="form-contact">{{ old('message') }}</textarea>
                            <label for="pesan" class="text-secondary">Pesan</label>
                        </div>
                        <button type="sumbit" class="btn btn-primary">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer class="text-center py-4 ">
        Made with <i class="fas fa-heart text-danger"></i> by <a href=""
            class="text-primary fw-bold text-decoration-none">Thoyiburrohman</a>
    </footer>
@endsection
@push('scripts')
    <script>
        $('.nav-link').click(function() {
            $(this).addClass('active').siblings.removeClass('active')
        });
    </script>
    <script>
        let sections = document.querySelectorAll('section');
        let navLinks = document.querySelectorAll('.nav-link');

        window.onscroll = () => {
            sections.forEach(sec => {
                let top = window.scrollY;
                let offset = sec.offsetTop - 150;
                let height = sec.offsetHeight;
                let id = sec.getAttribute('id');

                if (top >= offset && top < offset + height) {
                    navLinks.forEach(links => {
                        links.classList.remove('active');
                        document.querySelector('.nav-link[href*=' + id + ']').classList.add('active');
                    });
                };
            });
        };
    </script>
@endpush
