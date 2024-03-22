<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Layanan Aspirasi Masyarakat Desa</title>
    <meta content="siapmas" name="description">
    <meta content="siapmas" name="keywords">

    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <!-- Favicons -->
    <link href="{{ asset('assets/') }}/img/S.A.jpeg.jpeg" rel="icon">
    <link href="{{ asset('assets/') }}/img/S.A.jpeg.jpeg" rel="S.A.jpeg.jpeg">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets/') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('assets/') }}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('assets/') }}/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="{{ asset('assets/') }}/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="{{ asset('assets/') }}/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{ asset('assets/') }}/vendor/datatables/style.css" rel="stylesheet">
    <link rel="stylesheet" href="
    https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">


    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/') }}/css/style.css" rel="stylesheet">

</head>

<body class="  {{ Auth::check() ? '' : 'toggle-sidebar' }}">




    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="d-flex align-items-center justify-content-between">
            <a href="#" class="logo d-flex align-items-center">
                <span class=" d-lg-block">SIMADES</span>
            </a>
            {{-- <a href="#" class="logo d-flex align-items-center">
                <img src="assets/img/sistem_aspirasi.jpeg" alt="Si Amades Logo" class="logo-image d-lg-block">
            </a> --}}
            
            @auth

                <i class="bi bi-list toggle-sidebar-btn"></i>
                <div class="search-bar">
                    <form class="search-form d-flex align-items-center">
                        <input id="search" type="text" name="search" placeholder="cari apa ?"
                            title="Enter search keyword">
                        <button type="submit" title="Search">
                            <i class="bi bi-search"></i>
                        </button>
                    </form>


                </div>
           
            @endauth
        </div>



        {{-- klao udh login --}}
        @auth
            <nav class="header-nav ms-auto">
                <ul class="d-flex align-items-center">

                    <li class="nav-item d-block d-lg-none">
                        <a class="nav-link nav-icon search-bar-toggle " href="#">
                            <i class="bi bi-search"></i>
                        </a>
                    </li><!-- End Search Icon-->



                    <li class="nav-item dropdown pe-3">

                        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                            data-bs-toggle="dropdown">
                            <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->nama }}</span>
                        </a><!-- End Profile Iamge Icon -->

                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                            <li class="dropdown-header">
                                <h6>{{ Auth::user()->is_admin }}</h6>
                                <span>{{ Auth::user()->email }}</span>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('profile.index') }}">
                                    <i class="bi bi-person"></i>
                                    <span>Profile</span>
                                </a>
                            </li>


                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>

                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item d-flex align-items-center">
                                        <i class="bi bi-box-arrow-right"></i>
                                        <span>Keluar </span>
                                </form>

                                </a>
                            </li>

                        </ul><!-- End Profile Dropdown Items -->
                    </li><!-- End Profile Nav -->

                </ul>
            </nav>
        @endauth


        {{-- kalo belum login --}}
        @guest
            <nav class="header-nav ms-auto me-3 d-flex">

                <a href="{{ route('login') }}" class=" mx-2  btn btn-success">
                    Login
                </a>


            </nav>
        @endguest
        <!-- End Icons Navigation -->

    </header><!-- End Header -->


    @auth
    <x-sidebar />
    @endauth





    <main id="main" class="main">

        {{ $slot }}

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            <a href="/"> &copy; Copyright <strong><span>SIMADES</span></strong>.
            </a>
        </div>

    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/') }}/vendor/jquery/jquery.min.js"></script>
    <script src="{{ asset('assets/') }}/vendor/echarts/echarts.min.js"></script>
    <script src="{{ asset('assets/') }}/vendor/tinymce/tinymce.min.js"></script>
    <script src="{{ asset('assets/') }}/vendor/quill/quill.min.js"></script>
    <script src="{{ asset('assets/') }}/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('assets/') }}/vendor/datatables/dataTables.bootstrap5.min.js"></script>
    {{--
    https://code.jquery.com/jquery-3.7.0.js
    https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js --}}
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/') }}/js/main.js"></script>
    <script>
        const showPasswordIcon = document.querySelector('#show-password-icon');
        const passwordInput = document.querySelector('#password');
    
        showPasswordIcon.addEventListener('click', () => {
          if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            showPasswordIcon.classList.replace('bi-eye-slash', 'bi-eye');
          } else {
            passwordInput.type = 'password';
            showPasswordIcon.classList.replace('bi-eye', 'bi-eye-slash');
          }
        });
    
        const showPasswordConfirmIcon = document.querySelector('#show-password-confirm-icon');
        const passwordConfirmInput = document.querySelector('#password-confirm');
    
        showPasswordConfirmIcon.addEventListener('click', () => {
          if (passwordConfirmInput.type === 'password') {
            passwordConfirmInput.type = 'text';
            showPasswordConfirmIcon.classList.replace('bi-eye-slash', 'bi-eye');
          } else {
            passwordConfirmInput.type = 'password';
            showPasswordConfirmIcon.classList.replace('bi-eye', 'bi-eye-slash');
          }
        });
      </script>


    @stack('script')

</body>

</html>
