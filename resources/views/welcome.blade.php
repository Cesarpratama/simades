<x-applayout>

    

    <section class="section  dashboard">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title display-1">Aduan KITA</h2>

                                <p class="text-black">Layanan ini merupakan sarana yang aman dan terpercaya untuk
                                    menyampaikan
                                    aspirasi dan
                                    laporan Anda. Aduan Anda akan ditangani dengan cepat dan profesional oleh tim kami
                                    yang
                                    berdedikasi. Kami berkomitmen untuk transparansi dan akuntabilitas dalam penanganan
                                    aduan.
                                    Aduan
                                    Anda adalah langkah awal menuju perbaikan. Mari bersama-sama membangun masyarakat
                                    desa yang lebih
                                    baik. </p>
                            </div>
                        </div>
                    </div>


                    @guest
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Pendaftaran Pelapor <br>
                                        Apakah ada laporan yang ingin Anda sampaikan ? silakan daftar dibawah ini.</h5>

                                    @if ($errors->any())
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">

                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach

                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif

                                    <form action="{{ route('register') }}" method="POST" class="row g-3 needs-validation"
                                        autocomplete="off" novalidate>

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
                                            <label for="password" class="form-label">Password</label>
                                            <div class="mb-3 input-group">
                                                <input type="password" class="form-control" id="password" name="password">
                                                <span class="input-group-text" id="show-password-icon">
                                                  <i class="bi bi-eye-slash"></i>
                                                </span>
                                              </div>   
                                        </div>

                                     
                                        <div class="col-12">
                                            <label for="password-confirm" class="form-label">Konfirmasi Password</label>
                                            <div class="mb-3 input-group">
                                                <input type="password" class="form-control" id="password-confirm" name="password_confirmation">
                                                <span class="input-group-text" id="show-password-confirm-icon">
                                                  <i class="bi bi-eye-slash"></i>
                                                </span>
                                              </div>
                                        </div>



                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">
                                                Registrasi
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
                        </div>
                    @endguest
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">


                    <div class="card-body pb-0">
                        <h5 class="card-title">Statistik Aduan </h5>

                        <div id="trafficChart"
                            style="min-height: 400px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); position: relative;"
                            class="echart" _echarts_instance_="ec_1703321642711">
                            <div
                                style="position: relative; width: 304px; height: 400px; padding: 0px; margin: 0px; border-width: 0px; cursor: default;">
                                <canvas data-zr-dom-id="zr_0" width="608" height="800"
                                    style="position: absolute; left: 0px; top: 0px; width: 304px; height: 400px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas>
                            </div>
                            <div class=""
                                style="position: absolute; display: block; border-style: solid; white-space: nowrap; z-index: 9999999; box-shadow: rgba(0, 0, 0, 0.2) 1px 2px 10px; transition: opacity 0.2s cubic-bezier(0.23, 1, 0.32, 1) 0s, visibility 0.2s cubic-bezier(0.23, 1, 0.32, 1) 0s, transform 0.4s cubic-bezier(0.23, 1, 0.32, 1) 0s; background-color: rgb(255, 255, 255); border-width: 1px; border-radius: 4px; color: rgb(102, 102, 102); font: 14px / 21px sans-serif; padding: 10px; top: 0px; left: 0px; transform: translate3d(106px, 132px, 0px); border-color: rgb(238, 102, 102); pointer-events: none; visibility: hidden; opacity: 0;">
                                <div style="margin: 0px 0 0;line-height:1;">
                                    <div style="font-size:14px;color:#666;font-weight:400;line-height:1;">
                                        Access
                                        From</div>
                                    <div style="margin: 10px 0 0;line-height:1;">
                                        <div style="margin: 0px 0 0;line-height:1;"><span
                                                style="display:inline-block;margin-right:4px;border-radius:10px;width:10px;height:10px;background-color:#ee6666;"></span><span
                                                style="font-size:14px;color:#666;font-weight:400;margin-left:2px">Union
                                                Ads</span><span
                                                style="float:right;margin-left:20px;font-size:14px;color:#666;font-weight:900">484</span>
                                            <div style="clear:both"></div>
                                        </div>
                                        <div style="clear:both"></div>
                                    </div>
                                    <div style="clear:both"></div>
                                </div>
                            </div>
                        </div>

                        <script>
                            var datas = {{ Js::from($datas) }};
                            document.addEventListener("DOMContentLoaded", () => {
                                echarts.init(document.querySelector("#trafficChart")).setOption({
                                    tooltip: {
                                        trigger: 'item'
                                    },
                                    legend: {
                                        top: '5%',
                                        left: 'center'
                                    },
                                    series: [{
                                        name: 'Kategori',
                                        type: 'pie',
                                        radius: ['40%', '70%'],
                                        avoidLabelOverlap: false,
                                        label: {
                                            show: false,
                                            position: 'center'
                                        },
                                        emphasis: {
                                            label: {
                                                show: true,
                                                fontSize: '18',
                                                fontWeight: 'bold'
                                            }
                                        },
                                        labelLine: {
                                            show: false
                                        },
                                        data: datas
                                    }]
                                });
                            });
                        </script>

                    </div>
                </div>
                <div class="card">


                    <div class="card-body pb-0">
                        <h5 class="card-title">Berita </h5>


                        @forelse ($beritas as $berita)
                            <div class="news">
                                <div class="post-item clearfix">
                                    <img src="{{ $berita->foto }}" alt="">
                                    <h4><a href="{{ $berita->link }}">{{ $berita->judul }} </a></h4>
                                    <p>{{ $berita->created_at }}
                                    </p>
                                </div>

                            </div>
                        @empty
                            <p>Berita masih kosong</p>
                        @endforelse



                    </div>
                </div>
            </div>


        </div>
    </section>
</x-applayout>
