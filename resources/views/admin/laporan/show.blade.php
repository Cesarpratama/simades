<x-applayout>

    <section class="section profile">
        <div class="row">

            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body pt-3">

                        <div class="tab-content">
                            <div class="d-flex align-items-center">
                            <h5 class="card-title ">
                                Detail Aduan </h5>
                                <form class="ms-auto"
                                action="{{ route('laporan.destroy', $laporan) }}"
                                method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-sm btn-danger "
                                    type="submit">Hapus</button>
                            </form>
                        </div>
                            <div class="row mb-3">
                                <div class="col-lg-3 col-md-4 label">
                                    Nomor Aduan
                                </div>
                                <div class="col-lg-9 col-md-8">
                                    {{ $laporan->id }}

                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-lg-3 col-md-4 label">
                                    Tanggal Aduan
                                </div>
                                <div class="col-lg-9 col-md-8">
                                    {{ $laporan->created_at }}
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-lg-3 col-md-4 label">
                                    Kategori Aduan
                                </div>
                                <div class="col-lg-9 col-md-8">
                                    {{ $laporan->kategori->kategori }}
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">
                                    Aduan
                                </div>
                                <div class="col-lg-9 col-md-8">
                                    <b> {{ $laporan->judul }}</b>
                                    <p class="small fst-italic">
                                        {{ $laporan->isi }}
                                    </p>
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">
                                    Lampiran
                                </div>
                                <div class="col-lg-9 col-md-8">

                                    <p class="small fst-italic">
                                        @if ($laporan->lampiran)
                                            <button type="butston" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#verticalycentered">
                                                Lihat Lampiran
                                            </button>
                                        @else
                                            tidak ada lampiran (-)
                                        @endif

                                        <!-- Vertically centered Modal -->

                                    <div class="modal fade" id="verticalycentered" tabindex="-1" aria-hidden="true"
                                        style="display: none;">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img class="img-fluid" src="{{ $laporan->lampiran }}"
                                                        alt="">
                                                </div>

                                            </div>
                                        </div>
                                    </div><!-- End Vertically centered Modal-->

                                    </p>
                                </div>
                            </div>


                            <h5 class="card-title">Tanggapan</h5>
                            <p class="small fst-italic">
                                {{ $laporan->tanggapan }}
                            </p>
                        </div>



                        <!-- End Bordered Tabs -->
                    </div>
                </div>
            </div>

            @if (Auth::user()->is_admin =='superadmin' ||Auth::user()->is_admin =='admin')
                <div class="col-xl-4">


                    @if (session('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ session('status') }} </strong> 
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                    @endif

                    
                    <div class="card">
                        <div class="card-body pt-3">

                            <div class="tab-content">
                                <h5 class="card-title">
                                    FORM TANGGAPAN </h5>
                                <form class="row g-3" action="{{ route('laporan.update', $laporan) }}" method="POST">
                                    @csrf

                                    @method('put')

                                    <div class="col-12">

                                        <label for="tanggapan" class="form-label">Feedback</label>
                                        <textarea class="form-control" name="tanggapan" id="tanggapan" rows="3">{{ old('tanggapan') ?? $laporan->tanggapan }}</textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Kirim</button>
                                    </div>
                                </form>
                            </div>



                            <!-- End Bordered Tabs -->
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>
</x-applayout>
