<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <title>Layanan Aduan Masyarakat</title>
    <meta content="siapmas" name="description">
    <meta content="siapmas" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/') }}/img/S.A.jpeg.jpeg" rel="icon">
    <link href="{{ asset('assets/') }}/img/apple-touch-icon.png" rel="apple-touch-icon">

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

                                    <span class=" d-lg-block">SIMADES</span>
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

                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif


                                    <form action="{{ route('register') }}" method="POST"
                                        class="row g-3 needs-validation" autocomplete="off" novalidate>

                                        @csrf
                                        <div class="col-12">
                                            <label for="yourName" class="form-label">Nama Lengkap</label>
                                            <input type="text" name="nama" value="{{ old('nama') }}"
                                                class="form-control" id="nama" required />
                                            <div class="invalid-feedback">
                                                Please, enter your name!
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <label for="yourEmail" class="form-label"> Email</label>
                                            <input type="email" name="email" value="{{ old('email') }}"
                                                autocomplete="off" class="form-control" id="yourEmail" required />

                                        </div>

                                        <div class="col-6">
                                            <label for="no_telpon" class="form-label">Nomor Telpon Aktif</label>
                                            <input type="text" value="{{ old('no_telpon') }}" name="no_telpon"
                                                autocomplete="off" class="form-control" id="no_telpon" required />

                                        </div>
                                        <div class="col-12">
                                            <label for="alamat" class="form-label">Alamat Tinggal</label>
                                            <input type="text" value="{{ old('alamat') }}" name="alamat"
                                                autocomplete="off" class="form-control" id="alamat" required />

                                        </div>

                                        <div class="col-12">
                                            <label for="password" autocomplete="off" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" id="password"
                                                required />
                                            <div class="invalid-feedback">
                                                Please enter your password!
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="password_confirmation" autocomplete="off"
                                                class="form-label">Masukan
                                                Ulang</label>
                                            <input type="password" name="password_confirmation" class="form-control"
                                                id="yourPassword" required />
                                            <div class="invalid-feedback">
                                                Please enter your password!
                                            </div>
                                        </div>



                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">
                                                Daftar
                                            </button>
                                        </div>
                                        <div class="col-12">
                                            <p class="small mb-0">
                                                Sudah Punya Akun?
                                                <a href="{{ route('login') }}">Login</a>
                                            </p>
                                        </div>
                                    </form>


                                </div>
                            </div>

                            <div class="credits">
                                &copy; Copyright <strong><span>SIMADES</span></strong>.

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

</body>

</html>
