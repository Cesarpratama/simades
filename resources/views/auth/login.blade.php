<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Layanan Aduan Masyarakat</title>
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
    <link href="{{ asset('assets/') }}/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/') }}/css/style.css" rel="stylesheet">
</head>


<body>

    <main>
        <div class="container">

            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <a href="/" class="logo d-flex align-items-center w-auto">

                                    <span class="d-none d-lg-block">SIMADES</span>
                                </a>
                            </div><!-- End Logo -->

                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <p class="text-center small">Masukan email & password untuk login</p>
                                    </div>


                                    @if ($errors->any())
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">

                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                            {{-- {{ $message }} --}}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif


                                    <form action="{{ route('login') }}" class="row g-3 needs-validation" method="POST"
                                        novalidate>

                                        @csrf
                                        <div class="col-12">
                                            <label for="yourUsername" class="form-label">Email</label>
                                            <input type="text" name="email" name="email" class="form-control"
                                                id="yourUsername" required>
                                            <div class="invalid-feedback">Email wajib di isi</div>
                                        </div>

                                        <div class="col-12">
                                            <label for="password" class="form-label">Password</label>
                                            <div class="mb-3 input-group">
                                                <input type="password" class="form-control" id="password" name="password">
                                                <span class="input-group-text" id="show-password-icon">
                                                  <i class="bi bi-eye-slash"></i>
                                                </span>
                                              </div>           </div>

                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                    value="true" id="rememberMe">
                                                <label class="form-check-label" for="rememberMe">Ingat saya</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Login</button>
                                        </div>
                                        <div class="col-12">
                                            <p class="small mb-0">Tidak memiliki akun? <a
                                                    href="{{ route('register') }}">Registrasi Disini</a></p>
                                        </div>
                                    </form>

                                </div>
                            </div>

                            <div class="credits">
                                <a href="/"> &copy; Copyright <strong><span>SIMADES</span></strong>.
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/') }}/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="{{ asset('assets/') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/') }}/vendor/chart.js/chart.umd.js"></script>
    <script src="{{ asset('assets/') }}/vendor/echarts/echarts.min.js"></script>
    <script src="{{ asset('assets/') }}/vendor/quill/quill.min.js"></script>
    <script src="{{ asset('assets/') }}/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="{{ asset('assets/') }}/vendor/tinymce/tinymce.min.js"></script>
    <script src="{{ asset('assets/') }}/vendor/php-email-form/validate.js"></script>

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


</body>

</html>
