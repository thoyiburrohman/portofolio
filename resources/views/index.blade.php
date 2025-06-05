<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thoyiburrohman | Web Developer</title>
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
    <link href="{{ asset('libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Sweet Alerts js -->
    <script src="{{ asset('libs/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="https://kit.fontawesome.com/fa97313657.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #0f172a;
            color: #f8fafc;
            scroll-behavior: smooth;
        }

        .gradient-text {
            background: linear-gradient(90deg, #3b82f6, #8b5cf6);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .gradient-bg {
            background: linear-gradient(135deg, #1e293b, #0f172a);
        }

        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(99, 102, 241, 0.3);
        }

        .skill-bar {
            height: 8px;
            border-radius: 4px;
            background: #334155;
            overflow: hidden;
        }

        .skill-progress {
            height: 100%;
            border-radius: 4px;
            background: linear-gradient(90deg, #3b82f6, #8b5cf6);
            transition: width 1.5s ease-out;
        }

        .nav-link {
            position: relative;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -2px;
            left: 0;
            background: linear-gradient(90deg, #3b82f6, #8b5cf6);
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .active-nav::after {
            width: 100%;
        }

        .blob {
            position: absolute;
            width: 500px;
            height: 500px;
            background: linear-gradient(180deg, rgba(59, 130, 246, 0.3) 0%, rgba(139, 92, 246, 0.2) 100%);
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
            filter: blur(50px);
            z-index: -1;
            animation: blob-animate 15s infinite ease-in-out;
        }

        @keyframes blob-animate {
            0% {
                transform: translate(0, 0) rotate(0deg);
                border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
            }

            33% {
                transform: translate(30px, 50px) rotate(10deg);
                border-radius: 50% 50% 30% 70% / 60% 40% 60% 40%;
            }

            66% {
                transform: translate(-20px, 80px) rotate(20deg);
                border-radius: 70% 30% 50% 50% / 40% 60% 40% 60%;
            }

            100% {
                transform: translate(0, 0) rotate(0deg);
                border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
            }
        }

        .input-field {
            background: rgba(30, 41, 59, 0.7);
            border: 1px solid #334155;
            transition: all 0.3s ease;
        }

        .input-field:focus {
            outline: none;
            border-color: #8b5cf6;
            box-shadow: 0 0 0 2px rgba(139, 92, 246, 0.3);
        }
    </style>
</head>

<body class="gradient-bg">
    <!-- Navbar -->
    <nav class="fixed w-full z-50 backdrop-blur-md bg-opacity-80 bg-slate-900 border-b border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="#" class="text-2xl font-bold gradient-text">THOYIBURROHMAN</a>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-slate-300 hover:text-white focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>

                <!-- Desktop menu -->
                <div class="hidden md:block">
                    <div class="ml-10 flex items-center space-x-4">
                        <a href="#home" class="nav-link text-slate-300 hover:text-white px-3 py-2 active-nav">Home</a>
                        <a href="#about" class="nav-link text-slate-300 hover:text-white px-3 py-2">About</a>
                        <a href="#skills" class="nav-link text-slate-300 hover:text-white px-3 py-2">Skills</a>
                        <a href="#projects" class="nav-link text-slate-300 hover:text-white px-3 py-2">Projects</a>
                        <a href="#contact" class="nav-link text-slate-300 hover:text-white px-3 py-2">Contact</a>
                        <a href="#contact"
                            class="ml-4 px-6 py-2 rounded-full bg-gradient-to-r from-blue-500 to-purple-600 text-white font-medium hover:from-blue-600 hover:to-purple-700 transition-all duration-300">
                            Hire Me
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div id="mobile-menu" class="md:hidden hidden bg-slate-900">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="#home" class="block px-3 py-2 text-base font-medium text-slate-300 hover:text-white">Home</a>
                <a href="#about"
                    class="block px-3 py-2 text-base font-medium text-slate-300 hover:text-white">About</a>
                <a href="#skills"
                    class="block px-3 py-2 text-base font-medium text-slate-300 hover:text-white">Skills</a>
                <a href="#projects"
                    class="block px-3 py-2 text-base font-medium text-slate-300 hover:text-white">Projects</a>
                <a href="#contact"
                    class="block px-3 py-2 text-base font-medium text-slate-300 hover:text-white">Contact</a>
                <a href="#contact"
                    class="block w-full text-center mt-2 px-6 py-2 rounded-full bg-gradient-to-r from-blue-500 to-purple-600 text-white font-medium hover:from-blue-600 hover:to-purple-700 transition-all duration-300">
                    Hire Me
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="min-h-screen flex items-center justify-center relative overflow-hidden pt-16">
        <div class="blob top-0 left-0"></div>
        <div class="blob bottom-0 right-0"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="text-center md:text-left">
                    <h1 class="text-4xl md:text-6xl font-bold mb-6">
                        Hi, I'm <span class="gradient-text">thoyiburrohman</span>
                    </h1>
                    <h2 class="text-2xl md:text-3xl font-semibold text-slate-300 mb-6">
                        Admin Warehouse | <span class="gradient-text">Freelance Web Developer</span>
                    </h2>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                        <a href="#projects"
                            class="px-8 py-3 rounded-full bg-gradient-to-r from-blue-500 to-purple-600 text-white font-medium hover:from-blue-600 hover:to-purple-700 transition-all duration-300 shadow-lg hover:shadow-xl">
                            View My Work
                        </a>
                        <a href="#contact"
                            class="px-8 py-3 rounded-full border-2 border-slate-600 text-white font-medium hover:border-slate-500 transition-all duration-300">
                            Contact Me
                        </a>
                    </div>
                    <div class="mt-8 flex justify-center md:justify-start space-x-6">
                        <a href="https://github.com/thoyiburrohman"
                            class="text-slate-400 hover:text-white transition-colors duration-300">
                            <i class="fab fa-github text-2xl"></i>
                        </a>
                        <a href="https://linkedin.com/in/thoyiburrohman"
                            class="text-slate-400 hover:text-white transition-colors duration-300">
                            <i class="fab fa-linkedin text-2xl"></i>
                        </a>

                        <a href="https://instagram.com/thoyiburrohman"
                            class="text-slate-400 hover:text-white transition-colors duration-300">
                            <i class="fab fa-instagram text-2xl"></i>
                        </a>
                    </div>
                </div>
                <div class="relative flex justify-center">
                    <div class="relative w-64 h-64 md:w-80 md:h-80 lg:w-96 lg:h-96">
                        <div
                            class="absolute inset-0 rounded-full bg-gradient-to-r from-blue-500 to-purple-600 blur-xl opacity-30 animate-pulse">
                        </div>
                        <div
                            class="absolute inset-2 rounded-full bg-gradient-to-r from-blue-500 to-purple-600 blur-md opacity-20 animate-pulse delay-300">
                        </div>
                        <div
                            class="relative w-full h-full rounded-full overflow-hidden border-4 border-slate-700 shadow-xl">
                            <img src="{{ asset('images/home/profile-1.png') }}" alt="thoyiburrohman"
                                class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">
                    <span class="gradient-text">About</span>
                </h2>
                <div class="w-20 h-1 bg-gradient-to-r from-blue-500 to-purple-600 mx-auto mb-6"></div>
                <p class="text-lg text-slate-400 max-w-3xl mx-auto">
                    Tentang saya
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="flex justify-center">
                    <div class="relative w-full max-w-md">
                        <div
                            class="absolute -inset-4 bg-gradient-to-r from-blue-500 to-purple-600 rounded-2xl blur-lg opacity-30">
                        </div>
                        <div class="relative bg-slate-800 rounded-xl overflow-hidden shadow-xl">
                            <img src="{{ asset('images/home/profile.jpg') }}" alt="Working"
                                class="w-full h-auto object-cover">
                        </div>
                    </div>
                </div>
                <div>
                    <h3 class="text-2xl font-bold mb-6">Who am I?</h3>
                    <p class="text-slate-400 mb-6">
                        Saya <span class="font-medium text-white">thoyiburrohman</span>,Seorang Admin Warehouse dengan
                        pengalaman lebih dari 3 tahun. terbiasa menangani alur distribusi barang, pengelolaan stok, dan
                        dokumentasi logistik menggunakan berbagai aplikasi pendukung seperti SAP dan Sistem Supply Chain
                        Management. Tanggung jawab saya mencakup proses in/out barang, arsip berkas, stock opname,
                        hingga quality control, memastikan operasional berjalan dengan akurat dan efisien. </p>
                    <p class="text-slate-400 mb-6">
                        Di sisi lain, saya juga memiliki keahlian di bidang pengembangan web, khususnya menggunakan
                        framework Laravel. Sejak 2021, saya aktif mengembangkan berbagai aplikasi internal maupun
                        freelance, seperti sistem CBT (Computer Based Test), sistem manajemen sekolah, dan website
                        organisasi. Saya terbiasa menerapkan Service Repository Pattern, menggunakan Form Request
                        Validation, serta membangun UI dengan Blade dan Bootstrap.
                    </p>
                    <p class="text-slate-400 mb-8">
                        Dengan latar belakang operasional dan teknis, saya siap bekerja di bidang logistik/warehouse
                        maupun pengembangan sistem web, serta terus belajar untuk menjawab tantangan baru di dunia kerja
                    </p>

                    <div class="grid grid-cols-2 gap-4 mb-8">
                        <div class="flex items-center">
                            <div class="mr-3 text-blue-500">
                                <i class="fas fa-user-tie text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-medium text-white">Name</h4>
                                <p class="text-slate-400">Thoyiburrohman</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="mr-3 text-purple-500">
                                <i class="fas fa-envelope text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-medium text-white">Email</h4>
                                <p class="text-slate-400">hello@thoyiburrohman.com</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="mr-3 text-blue-500">
                                <i class="fas fa-map-marker-alt text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-medium text-white">Location</h4>
                                <p class="text-slate-400">Jakarta, Indonesia</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="mr-3 text-purple-500">
                                <i class="fas fa-briefcase text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-medium text-white">Freelance</h4>
                                <p class="text-slate-400">Available</p>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('download.cv') }}"
                        class="inline-flex items-center px-6 py-3 rounded-full bg-gradient-to-r from-blue-500 to-purple-600 text-white font-medium hover:from-blue-600 hover:to-purple-700 transition-all duration-300 shadow-lg hover:shadow-xl">
                        Download CV <i class="fas fa-download ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">
                    My <span class="gradient-text">Skills</span>
                </h2>
                <div class="w-20 h-1 bg-gradient-to-r from-blue-500 to-purple-600 mx-auto mb-6"></div>
                <p class="text-lg text-slate-400 max-w-3xl mx-auto">
                    Keterampilan saya
                </p>
            </div>


            <div class="mt-16">
                <div class="flex flex-wrap justify-center gap-6">
                    <div
                        class="flex flex-col items-center p-4 bg-slate-800 rounded-xl w-24 hover:bg-slate-700 transition-colors duration-300">
                        <i class="fab fa-html5 text-4xl text-orange-500 mb-2"></i>
                        <span class="text-sm text-slate-300">HTML5</span>
                    </div>
                    <div
                        class="flex flex-col items-center p-4 bg-slate-800 rounded-xl w-24 hover:bg-slate-700 transition-colors duration-300">
                        <i class="fab fa-css3-alt text-4xl text-blue-500 mb-2"></i>
                        <span class="text-sm text-slate-300">CSS3</span>
                    </div>
                    <div
                        class="flex flex-col items-center p-4 bg-slate-800 rounded-xl w-24 hover:bg-slate-700 transition-colors duration-300">
                        <i class="fab fa-js text-4xl text-yellow-400 mb-2"></i>
                        <span class="text-sm text-slate-300">JavaScript</span>
                    </div>
                    <div
                        class="flex flex-col items-center p-4 bg-slate-800 rounded-xl w-24 hover:bg-slate-700 transition-colors duration-300">
                        <i class="fab fa-php text-4xl text-blue-400 mb-2"></i>
                        <span class="text-sm text-slate-300">PHP</span>
                    </div>
                    <div
                        class="flex flex-col items-center p-4 bg-slate-800 rounded-xl w-24 hover:bg-slate-700 transition-colors duration-300">
                        <i class="fab fa-laravel text-4xl text-red-400 mb-2"></i>
                        <span class="text-sm text-slate-300">Laravel</span>
                    </div>
                    <div
                        class="flex flex-col items-center p-4 bg-slate-800 rounded-xl w-24 hover:bg-slate-700 transition-colors duration-300">
                        <i class="fas    fa-fire text-4xl text-red-400 mb-2"></i>
                        <span class="text-sm text-slate-300">Codeigniter</span>
                    </div>
                    <div
                        class="flex flex-col items-center p-4 bg-slate-800 rounded-xl w-24 hover:bg-slate-700 transition-colors duration-300">
                        <i class="fab fa-bootstrap text-4xl text-cyan-400 mb-2"></i>
                        <span class="text-sm text-slate-300">Bootstrap</span>
                    </div>
                    <div
                        class="flex flex-col items-center p-4 bg-slate-800 rounded-xl w-24 hover:bg-slate-700 transition-colors duration-300">
                        <i class="fab fa-css text-4xl  mb-2"></i>
                        <span class="text-sm text-slate-300">Tailwind CSS</span>
                    </div>
                    <div
                        class="flex flex-col items-center p-4 bg-slate-800 rounded-xl w-24 hover:bg-slate-700 transition-colors duration-300">
                        <i class="fab fa-node-js text-4xl text-green-600 mb-2"></i>
                        <span class="text-sm text-slate-300">Node.js</span>
                    </div>
                    <div
                        class="flex flex-col items-center p-4 bg-slate-800 rounded-xl w-24 hover:bg-slate-700 transition-colors duration-300">
                        <i class="fas fa-database text-4xl text-green-400 mb-2"></i>
                        <span class="text-sm text-slate-300">MySql</span>
                    </div>
                    <div
                        class="flex flex-col items-center p-4 bg-slate-800 rounded-xl w-24 hover:bg-slate-700 transition-colors duration-300">
                        <i class="fas fa-database text-4xl text-cyan-400 mb-2"></i>
                        <span class="text-sm text-slate-300">PostgreeSql</span>
                    </div>
                    <div
                        class="flex flex-col items-center p-4 bg-slate-800 rounded-xl w-24 hover:bg-slate-700 transition-colors duration-300">
                        <i class="fab fa-git-alt text-4xl text-orange-600 mb-2"></i>
                        <span class="text-sm text-slate-300">Git</span>
                    </div>
                    <div
                        class="flex flex-col items-center p-4 bg-slate-800 rounded-xl w-24 hover:bg-slate-700 transition-colors duration-300">
                        <i class="fas fa-code text-4xl text-indigo-600 mb-2"></i>
                        <span class="text-sm text-slate-300">VS Code</span>
                    </div>
                    <div
                        class="flex flex-col items-center p-4 bg-slate-800 rounded-xl w-24 hover:bg-slate-700 transition-colors duration-300">
                        <i class="fab fa-figma text-4xl text-purple-400 mb-2"></i>
                        <span class="text-sm text-slate-300">Figma</span>
                    </div>
                    <div
                        class="flex flex-col items-center p-4 bg-slate-800 rounded-xl w-24 hover:bg-slate-700 transition-colors duration-300">
                        <i class="fab fa-g text-4xl text-orange-400 mb-2"></i>
                        <span class="text-sm text-slate-300">Google Workspace</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-20 bg-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">
                    My <span class="gradient-text">Projects</span>
                </h2>
                <div class="w-20 h-1 bg-gradient-to-r from-blue-500 to-purple-600 mx-auto mb-6"></div>
                <p class="text-lg text-slate-400 max-w-3xl mx-auto">
                    Project terbaru saya </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($projects as $item)
                    <!-- Project 1 -->
                    <div class="card-hover bg-slate-800 rounded-xl overflow-hidden shadow-lg">
                        <div class="relative h-48 overflow-hidden">
                            <img src="{{ asset('storage/' . $item->image) }}" alt="E-commerce Dashboard"
                                class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-transparent opacity-70">
                            </div>
                            <div class="absolute bottom-4 left-4">
                                @foreach ($item->tech as $value)
                                    <span
                                        class="inline-block px-3 py-1 text-xs font-semibold bg-blue-500 text-white rounded-full mb-2">{{ $value }}</span>
                                @endforeach
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">{{ $item->name }}</h3>
                            <p class="text-slate-400 mb-4">
                                {{ Str::words($item->description, 15, '...') }}
                            </p>
                            <div class="flex justify-between items-center">
                                @if ($item->demo_url)
                                    <a href="{{ $item->demo_url }}"
                                        class="text-blue-400 hover:text-blue-300 transition-colors duration-300">
                                        <i class="fas fa-external-link-alt mr-1"></i> Live Demo
                                    </a>
                                @endif
                                @if ($item->github_url)
                                    <a href="{{ $item->github_url }}"
                                        class="text-purple-400 hover:text-purple-300 transition-colors duration-300">
                                        <i class="fab fa-github mr-1"></i> Code
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            <div class="text-center mt-12">
                <a href="#"
                    class="inline-flex items-center px-8 py-3 rounded-full bg-gradient-to-r from-blue-500 to-purple-600 text-white font-medium hover:from-blue-600 hover:to-purple-700 transition-all duration-300 shadow-lg hover:shadow-xl">
                    View All Projects <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">
                    Contact <span class="gradient-text">Me</span>
                </h2>
                <div class="w-20 h-1 bg-gradient-to-r from-blue-500 to-purple-600 mx-auto mb-6"></div>
                <p class="text-lg text-slate-400 max-w-3xl mx-auto">
                    Hubungi saya </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <div>
                    <h3 class="text-2xl font-bold mb-6">Informasi kontak</h3>

                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="mr-4 mt-1 text-blue-500">
                                <i class="fas fa-envelope text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-medium text-white mb-1">Email</h4>
                                <a href="mailto:hello@thoyiburrohman.com"
                                    class="text-slate-400 hover:text-blue-400 transition-colors duration-300">
                                    hello@thoyiburrohman.com
                                </a>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="mr-4 mt-1 text-purple-500">
                                <i class="fas fa-phone-alt text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-medium text-white mb-1">Phone</h4>
                                <a href="tel:+6281234567890"
                                    class="text-slate-400 hover:text-purple-400 transition-colors duration-300">
                                    +62 822 5802 5586
                                </a>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="mr-4 mt-1 text-blue-500">
                                <i class="fas fa-map-marker-alt text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-medium text-white mb-1">Location</h4>
                                <p class="text-slate-400">
                                    Jakarta, Indonesia
                                </p>
                            </div>
                        </div>


                    </div>

                    <div class="mt-8">
                        <h4 class="font-medium text-white mb-4">Follow Me</h4>
                        <div class="flex space-x-4">
                            <a href="https://github.com/thoyiburrohman"
                                class="w-10 h-10 flex items-center justify-center rounded-full bg-slate-800 text-slate-300 hover:bg-blue-500 hover:text-white transition-colors duration-300">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="https://www.linkedin.com/in/thoyiburrohman/"
                                class="w-10 h-10 flex items-center justify-center rounded-full bg-slate-800 text-slate-300 hover:bg-blue-600 hover:text-white transition-colors duration-300">
                                <i class="fab fa-linkedin-in"></i>
                            </a>

                            <a href="https://instagram.com/thoyiburrohman"
                                class="w-10 h-10 flex items-center justify-center rounded-full bg-slate-800 text-slate-300 hover:bg-pink-600 hover:text-white transition-colors duration-300">
                                <i class="fab fa-instagram"></i>
                            </a>

                        </div>
                    </div>
                </div>

                <div class="bg-slate-800 rounded-xl p-8 shadow-lg">
                    <form id="formContact" class="space-y-6">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-slate-300 mb-2">Nama
                                    Lengkap</label>
                                <input type="text" id="name" name="name"
                                    class="w-full px-4 py-3 rounded-lg input-field focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50"
                                    required>
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-slate-300 mb-2">Email
                                    Aktif</label>
                                <input type="email" id="email" name="email"
                                    class="w-full px-4 py-3 rounded-lg input-field focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50"
                                    required>
                            </div>
                        </div>
                        <div>
                            <label for="subject"
                                class="block text-sm font-medium text-slate-300 mb-2">Whatsapp</label>
                            <input type="text" id="subject" name="phone"
                                class="w-full px-4 py-3 rounded-lg input-field focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50"
                                required>
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium text-slate-300 mb-2">Pesan</label>
                            <textarea id="message" name="message" rows="5"
                                class="w-full px-4 py-3 rounded-lg input-field focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50" required></textarea>
                        </div>
                        <button type="button" id="send-btn"
                            class="w-full px-6 py-3 rounded-full bg-gradient-to-r from-blue-500 to-purple-600 text-white font-medium hover:from-blue-600 hover:to-purple-700 transition-all duration-300 shadow-lg hover:shadow-xl">
                            Kirim Pesan <i class="fas fa-paper-plane ml-2"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-slate-900 py-12 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-6 md:mb-0">
                    <a href="#" class="text-2xl font-bold gradient-text">thoyiburrohman</a>
                    <p class="text-slate-400 mt-2">
                        Creating digital experiences that matter.
                    </p>
                </div>
                <div class="flex flex-col items-center md:items-end">
                    <div class="flex space-x-6 mb-4">
                        <a href="https://github.com/thoyiburrohman"
                            class="text-slate-400 hover:text-white transition-colors duration-300">
                            <i class="fab fa-github text-xl"></i>
                        </a>
                        <a href="https://linkedin.com/in/thoyiburrohman"
                            class="text-slate-400 hover:text-white transition-colors duration-300">
                            <i class="fab fa-linkedin text-xl"></i>
                        </a>

                        <a href="https://instagram.com/thoyiburrohman"
                            class="text-slate-400 hover:text-white transition-colors duration-300">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                    </div>
                    <p class="text-sm text-slate-500">
                        &copy; 2023 thoyiburrohman. All rights reserved.
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button id="back-to-top"
        class="fixed bottom-8 right-8 w-12 h-12 rounded-full bg-gradient-to-r from-blue-500 to-purple-600 text-white flex items-center justify-center shadow-lg hover:shadow-xl transition-all duration-300 opacity-0 invisible">
        <i class="fas fa-arrow-up"></i>
    </button>
    <script src="{{ asset('libs/jquery.com/jquery-3.6.0.min.js') }}"></script>
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
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);

                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });

                    // Close mobile menu if open
                    if (!mobileMenu.classList.contains('hidden')) {
                        mobileMenu.classList.add('hidden');
                    }
                }
            });
        });

        // Back to top button
        const backToTopButton = document.getElementById('back-to-top');

        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.remove('opacity-0', 'invisible');
                backToTopButton.classList.add('opacity-100', 'visible');
            } else {
                backToTopButton.classList.remove('opacity-100', 'visible');
                backToTopButton.classList.add('opacity-0', 'invisible');
            }
        });

        backToTopButton.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });


        // ScrollReveal animations
        ScrollReveal().reveal('.blob', {
            origin: 'top',
            distance: '50px',
            duration: 1000,
            delay: 200,
            easing: 'cubic-bezier(0.5, 0, 0, 1)',
            scale: 0.9,
            opacity: 0
        });

        ScrollReveal().reveal('section', {
            origin: 'bottom',
            distance: '50px',
            duration: 800,
            delay: 200,
            easing: 'ease-out',
            opacity: 0,
            interval: 200
        });

        // Animate skill bars on scroll
        const skillBars = document.querySelectorAll('.skill-progress');

        const animateSkillBars = () => {
            skillBars.forEach(bar => {
                const width = bar.style.width;
                bar.style.width = '0%';

                const observer = new IntersectionObserver((entries) => {
                    if (entries[0].isIntersecting) {
                        bar.style.width = width;
                        observer.unobserve(bar);
                    }
                }, {
                    threshold: 0.5
                });

                observer.observe(bar);
            });
        };

        // Run once when page loads
        animateSkillBars();

        // Highlight active nav link on scroll
        const sections = document.querySelectorAll('section');
        const navLinks = document.querySelectorAll('.nav-link');

        window.addEventListener('scroll', () => {
            let current = '';

            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;

                if (pageYOffset >= sectionTop - 200) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active-nav');
                if (link.getAttribute('href') === `#${current}`) {
                    link.classList.add('active-nav');
                }
            });
        });
    </script>
</body>

</html>
