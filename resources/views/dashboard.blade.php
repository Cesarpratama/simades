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

                                    <form class="row g-3" action="{{ route('register') }}" method="POST">
                                        @csrf
                                        <div class="col-md-12">
                                            <label for="yourName" class="form-label">Nama Lengkap</label>
                                            <input type="text" name="nama" class="form-control" id="nama"
                                                required />
                                            <div class="invalid-feedback">
                                                Please, enter your name!
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="email" class="form-control" id="floatingEmail"
                                                    placeholder="Your Email">
                                                <label for="floatingEmail">Your Email</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="password" class="form-label">Password</label>
                                            <div class="mb-3 input-group">
                                                <input type="password" class="form-control" id="password" name="password">
                                                <span class="input-group-text" id="show-password-icon">
                                                  <i class="bi bi-eye-slash"></i>
                                                </span>
                                              </div>   
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <textarea class="form-control" placeholder="Address" id="floatingTextarea" style="height: 100px;"></textarea>
                                                <label for="floatingTextarea">Address</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-md-12">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="floatingCity"
                                                        placeholder="City">
                                                    <label for="floatingCity">City</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-floating mb-3">
                                                <select class="form-select" id="floatingSelect" aria-label="State">
                                                    <option selected="">New York</option>
                                                    <option value="1">Oregon</option>
                                                    <option value="2">DC</option>
                                                </select>
                                                <label for="floatingSelect">State</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="floatingZip"
                                                    placeholder="Zip">
                                                <label for="floatingZip">Zip</label>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            <button type="reset" class="btn btn-secondary">Reset</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endguest


                    @if (Auth::user()->is_admin == 'superadmin' || Auth::user()->is_admin == 'admin')
                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">



                                <div class="card-body">
                                    <h5 class="card-title">Laporan <span></span></h5>

                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">#IDLAPORAN</th>
                                                <th scope="col">Judul Laporan</th>
                                                <th scope="col">Kategori Laporan</th>
                                                <th scope="col">opsi</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($laporans as $laporan)
                                                <tr>
                                                    <th scope="row">{{ $laporan->id }}</th>
                                                    <td>{{ $laporan->judul }}</td>
                                                    <td>{{ $laporan->kategori->kategori }}</td>

                                                    <td class="d-flex"> <a class="btn btn-sm btn-primary"
                                                            href="{{ route('laporan.show', $laporan) }}">Lihat</a>

                                                        <form class="d-inline-block ms-1"
                                                            action="{{ route('laporan.destroy', $laporan) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <button class="btn btn-sm btn-danger "
                                                                type="submit">Hapus</button>
                                                        </form>

                                                    </td>
                                                </tr>

                                            @empty
                                            @endforelse
                                        </tbody>
                                    </table>


                                </div>

                            </div>
                        </div>
                    
                    @else
                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">



                            <div class="card-body">
                                <h5 class="card-title">Laporan <span></span></h5>

                                <table class="table datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">#IDLAPORAN</th>
                                            <th scope="col">Judul Laporan</th>
                                            <th scope="col">Kategori Laporan</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">opsi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($laporans as $laporan)
                                            <tr>
                                                <th scope="row">{{ $laporan->id }}</th>
                                                <td>{{ $laporan->judul }}</td>
                                                <td>{{ $laporan->kategori->kategori }}</td>

                                                <td>

                                                    @if ($laporan->status)
                                                    <span class="badge text-bg-success">Sudah Di tanggapi</span>
                                                    @else<span class="badge text-bg-warning">Belum di tanggapi</span>
                                                        
                                                    @endif

                                                </td>
                                                <td class="d-flex"> <a class="btn btn-sm btn-primary mx-2"
                                                        href="{{ route('laporan.show', $laporan) }}">Lihat</a>

                                                   

                                                </td>
                                            </tr>

                                        @empty
                                        @endforelse
                                    </tbody>
                                </table>


                            </div>

                        </div>
                    </div>
                    @endif


                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">


                    <div class="card-body pb-0">
                        <h5 class="card-title">Statistik Aduan</h5>

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


                            console.log(datas);
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

            </div>


        </div>
    </section>
    @push('script')
        <script>
            $(document).ready(function() {
                $('.datatable').DataTable();
            });
        </script>



        <script>
            $("#search").on('keyup', function() {
                search()
            });

            search()

            function search() {

                let q = $("#search").val()

                if (q.length <= 0) {
                    $('#data-s').html("");
                }
                $.ajax({
                    url: "/api/get-s?q=" + q,
                    type: "GEt",

                    success: function(data) {
                        showData(data)
                        console.log(data);
                    },
                    error: function(data) {}
                });


            }

            function showData(res) {

                let content = '';

                for (let i = 0; i < res.laporan.length; i++) {
                    content += `<a href="#" class="list-group-item list-group-item-action "
                                            aria-current="true">
                                            <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">${res.laporan[i].id}</h5>
                                            <small>3 days ago</small>
                                            </div>
                                            <p class="mb-1">${res.laporan[i].isi}</p>
                                            <small${res.laporan[i].created_at}</small>
                                            </a>`
                }

                $('#data-s').html(content);


            }
        </script>
    @endpush

</x-applayout>
