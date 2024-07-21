<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Thoyiburrohman" />
    <meta name="description" content="{{ $setting->description_meta }}" />
    <meta name="robots" content="index, follow" />
    <meta name="token" content="iCXSraO8FpbyIJBuPPdBbn8wvNTfX0kXk2J5l4Vg" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="https://thoyiburrohman.my.id/public/images/favicon.ico">
    <!-- title -->
    <title>{{ $setting->title }}</title>

    <link href="https://thoyiburrohman.my.id/public/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet"
        type="text/css" />
    <!-- icon -->
    <!--<link href="https://thoyiburrohman.my.id/public/css/icons.min.css" rel="stylesheet" type="text/css">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"
        integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- style -->
    <link rel="stylesheet" href="https://thoyiburrohman.my.id/public/libs/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://thoyiburrohman.my.id/public/css/styles.css" />

</head>

<body>

    <nav class="navbar navbar-expand-lg bg-transparent sticky-top">
        <div class="container px-lg-5">
            <a class="navbar-brand text-uppercase fw-semibold text-primary" href="index.html">Thoyiburrohman</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-uppercase fw-semibold">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home">Home</a>
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
                                        <i class="far fa-moon me-2"></i>
                                        Dark
                                    </button>
                                </li>
                                <li>
                                    <button class="dropdown-item d-flex justify-content-lg-center align-items-center"
                                        type="button" data-bs-theme-value="light">
                                        <i class="far fa-sun me-2"></i> Light
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
                        <h5 class="mb-3">{{ $setting->subtitle }}</h5>
                        <a href="#contact" class="btn btn-primary text-capitalize me-2">Hire Me</a>
                        <!-- <a href="/download-cv"class="btn btn-outline-primary text-capitalize">Download CV</a> -->
                        <div class="d-flex justify-content-lg-start justify-content-center mt-3">
                            <a class="icon-social border border-2 border-primary pt-1 px-2 me-2 fs-4" target="_blank"
                                href="https://facebook.com/thoyiburrohman"><svg xmlns="http://www.w3.org/2000/svg"
                                    x="0px" y="0px" width="30" height="30" viewBox="0,0,256,256">
                                    <g transform="">
                                        <g fill="#0891b2" fill-rule="nonzero" stroke="none" stroke-width="1"
                                            stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                            stroke-dasharray="" stroke-dashoffset="0" font-family="none"
                                            font-weight="none" font-size="none" text-anchor="none"
                                            style="mix-blend-mode: normal">
                                            <g transform="translate(0,-25.0752) scale(8.53333,8.53333)">
                                                <path
                                                    d="M15,3c-6.627,0 -12,5.373 -12,12c0,6.016 4.432,10.984 10.206,11.852v-8.672h-2.969v-3.154h2.969v-2.099c0,-3.475 1.693,-5 4.581,-5c1.383,0 2.115,0.103 2.461,0.149v2.753h-1.97c-1.226,0 -1.654,1.163 -1.654,2.473v1.724h3.593l-0.487,3.154h-3.106v8.697c5.857,-0.794 10.376,-5.802 10.376,-11.877c0,-6.627 -5.373,-12 -12,-12z">
                                                </path>
                                            </g>
                                        </g>
                                    </g>
                                </svg></a>
                            <a class="icon-social border border-2 border-primary pt-1 px-2 me-2 fs-4" target="_blank"
                                href="https://instagram.com/thoyiburrohman"><svg xmlns="http://www.w3.org/2000/svg"
                                    x="0px" y="0px" width="30" height="30" viewBox="0,0,256,256">
                                    <g transform="translate(25.6,25.6) scale(0.8,0.8)">
                                        <g fill="#0891b2" fill-rule="nonzero" stroke="none" stroke-width="1"
                                            stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                            stroke-dasharray="" stroke-dashoffset="0" font-family="none"
                                            font-weight="none" font-size="none" text-anchor="none"
                                            style="mix-blend-mode: normal">
                                            <g transform="translate(0,-20.48) scale(5.12,5.12)">
                                                <path
                                                    d="M16,3c-7.17,0 -13,5.83 -13,13v18c0,7.17 5.83,13 13,13h18c7.17,0 13,-5.83 13,-13v-18c0,-7.17 -5.83,-13 -13,-13zM37,11c1.1,0 2,0.9 2,2c0,1.1 -0.9,2 -2,2c-1.1,0 -2,-0.9 -2,-2c0,-1.1 0.9,-2 2,-2zM25,14c6.07,0 11,4.93 11,11c0,6.07 -4.93,11 -11,11c-6.07,0 -11,-4.93 -11,-11c0,-6.07 4.93,-11 11,-11zM25,16c-4.96,0 -9,4.04 -9,9c0,4.96 4.04,9 9,9c4.96,0 9,-4.04 9,-9c0,-4.96 -4.04,-9 -9,-9z">
                                                </path>
                                            </g>
                                        </g>
                                    </g>
                                </svg></a>
                            <a class="icon-social border border-2 border-primary pt-1 px-2 me-2 fs-4" target="_blank"
                                href="https://t.me/thoyiburrohman"><svg xmlns="http://www.w3.org/2000/svg" x="0px"
                                    y="0px" width="30" height="30" viewBox="0,0,256,256">
                                    <g transform="translate(25.6,25.6) scale(0.8,0.8)">
                                        <g fill="#0891b2" fill-rule="nonzero" stroke="none" stroke-width="1"
                                            stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                            stroke-dasharray="" stroke-dashoffset="0" font-family="none"
                                            font-weight="none" font-size="none" text-anchor="none"
                                            style="mix-blend-mode: normal">
                                            <g transform="translate(0,-20.48) scale(5.12,5.12)">
                                                <path
                                                    d="M25,2c12.703,0 23,10.297 23,23c0,12.703 -10.297,23 -23,23c-12.703,0 -23,-10.297 -23,-23c0,-12.703 10.297,-23 23,-23zM32.934,34.375c0.423,-1.298 2.405,-14.234 2.65,-16.783c0.074,-0.772 -0.17,-1.285 -0.648,-1.514c-0.578,-0.278 -1.434,-0.139 -2.427,0.219c-1.362,0.491 -18.774,7.884 -19.78,8.312c-0.954,0.405 -1.856,0.847 -1.856,1.487c0,0.45 0.267,0.703 1.003,0.966c0.766,0.273 2.695,0.858 3.834,1.172c1.097,0.303 2.346,0.04 3.046,-0.395c0.742,-0.461 9.305,-6.191 9.92,-6.693c0.614,-0.502 1.104,0.141 0.602,0.644c-0.502,0.502 -6.38,6.207 -7.155,6.997c-0.941,0.959 -0.273,1.953 0.358,2.351c0.721,0.454 5.906,3.932 6.687,4.49c0.781,0.558 1.573,0.811 2.298,0.811c0.725,0 1.107,-0.955 1.468,-2.064z">
                                                </path>
                                            </g>
                                        </g>
                                    </g>
                                </svg></a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 m-lg-0 mt-5 px-4 text-end">
                    <img src="https://thoyiburrohman.my.id/public/images/home/profile-1.png" alt="">
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
                    <img src="https://thoyiburrohman.my.id/public/images/home/profile.png" alt="">
                </div>
                <div class="col-lg-7 col-12">
                    <p class="lead">{{ $setting->bio }} </p>
                    <div class="row justify-content-center align-content-center ">
                        <div class="col-lg-6 col-7 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="icon-item text-center text-primary">
                                        <i class="fas fa-medal"></i>
                                    </div>
                                    <div class="about-title text-center text-primary mb-1 text-capitalize">
                                        <span>Experience</span>
                                    </div>
                                    <div class="about-subtitle text-center text-capitalize">
                                        <span>{{ date('Y') - $setting->experience }}+ Years</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-7 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="icon-item text-center text-primary">
                                        <i class="fas fa-briefcase"></i>
                                    </div>
                                    <div class="about-title text-center text-primary mb-1 text-capitalize">
                                        <span>Project</span>
                                    </div>
                                    <div class="about-subtitle text-center text-capitalize">
                                        <span>{{ count($projects) }}+ project</span>
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
                        <a href="#contact" class="btn btn-primary text-capitalize me-2">Hire Me</a>

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
                    <div class="card">
                        <div class="card-body">
                            <div class="row justify-content-center text-center ">
                                <div class="text-uppercase fw-semibold text-primary mb-4">Frontend Developer</div>
                                <div class="col-6 text-start">
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
                                <div class="col-6 text-start">
                                    <ul class="nav-item">
                                        <li class="nav-link">
                                            <i class="uil uil-check-circle me-2"></i><span>Bootstrap</span>
                                        </li>
                                        <li class="nav-link">
                                            <i class="uil uil-check-circle me-2"></i><span>TailwindCSS</span>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row justify-content-center text-center ">
                                <div class="text-uppercase fw-semibold text-primary mb-4">Backend Developer</div>
                                <div class="col-6 text-start">
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
                                <div class="col-6 text-start">
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
                    <div class="card">
                        <div class="card-body">
                            <div class="row justify-content-center text-center ">
                                <div class="text-uppercase fw-semibold text-primary mb-4">Design</div>
                                <div class="col-6 text-start">
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
                                <div class="col-6 text-start">
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
            <div class="row justify-content-center align-items-center mx-2">
                @foreach ($projects as $item)
                    <div class="card-project col-lg-6 col-12 mb-5">
                        <div class="card">
                            <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top"
                                alt="{{ $item->name }}">
                            <div class="card-body">
                                <p class="card-title text-primary fs-5  fw-semibold">{{ $item->name }}</p>
                                <p class="card-title text-secondary text-capitalize">{{ implode(' | ', $item->tech) }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="contact my-5" id="contact">
        <div class="container py-5">
            <div class="card  py-5">
                <div class="card-body">
                    <div class="row">
                        <div class="text-center fw-bold text-primary text-uppercase fs-2">Contact</div>
                        <div class="text-center fw-normal text-capitalize mb-5">Hubungi Saya</div>
                    </div>
                    <div class="row justify-content-center align-items-center mx-2">
                        <div class="col-lg-8 col-12">
                            <form id="formContact">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input type="name" class="form-control" id="name" name="name"
                                        placeholder="John Doe">
                                    <label for="name" class="text-secondary">Nama lengkap</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="johndoe@example.com">
                                    <label for="email" class="text-secondary">Email aktif</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" id="phone" name="phone"
                                        placeholder="0812xxxxxxxxx">
                                    <label for="phone" class="text-secondary">No. Whatsapp aktif</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" placeholder="Leave a comment here" name="message" id="pesan"
                                        style="height: 100px" form="formContact"></textarea>
                                    <label for="pesan" class="text-secondary">Pesan</label>
                                </div>
                                <button type="button" id="send-btn" class="btn btn-primary">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="text-center py-4 ">
        Made with <i class="fas fa-heart text-danger"></i> by <a href=""
            class="text-primary fw-bold text-decoration-none">Thoyiburrohman</a>
    </footer>
    <!-- script -->

    <script src="https://thoyiburrohman.my.id/public/libs/jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://thoyiburrohman.my.id/public/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://thoyiburrohman.my.id/public/js/scripts.js"></script>
    <!-- Sweet Alerts js -->
    <script src="https://thoyiburrohman.my.id/public/libs/sweetalert2/sweetalert2.min.js"></script>

    <!-- Sweet alert init js-->


    <script>
        $(document).ready(function() {
            $('#send-btn').click(function() {
                var formData = $('#formContact').serialize(); // Mengambil data formulir modal
                $.ajax({
                    type: 'POST',
                    url: '{{ route('form-message') }}', // Ganti dengan URL endpoint Anda
                    data: formData,
                    success: function(response) {
                        // Logika setelah berhasil
                        $('#formContact')[0].reset();
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: 'Pesan anda berhasil dikirim'
                        })

                    },
                    error: function(xhr, status, error) {
                        // Logika jika terjadi kesalahan
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Mohon Cek Kembali'
                        });
                    }
                });
            });
        });
    </script>
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
</body>

</html>
