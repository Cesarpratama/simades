<x-applayout>
    <section class="section">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">

                        <div class="d-flex align-items-center">                    
                                <h5 class="card-title">Berita Baru</h5>
                        <form class="ms-auto" action="{{ route('berita.destroy',$berita) }}" method="post">
                        
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Tarik Berita</button>
                        </form>

                    </div>

                        <!-- Multi Columns Form -->
                        <form class="row g-3" action="{{ route('berita.update',$berita) }}" method="POST"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            <div class="col-md-6">
                                <label for="judul" class="form-label">Judul Berita</label>
                                <input type="text" class="form-control" value="{{ $berita->judul  }}" id="judul" name="judul">
                            </div>

                            <div class="col-md-12">
                                <label for="deskripsi" class="form-label">Deskripsi Berita </label>
                                <textarea name="deskripsi" class="form-control" style="height: 100px">{{ $berita->deskripsi }}</textarea>
                            </div>
                            <div class="col-md-12">
                                <label for="link" class="form-label">Link Berita </label>
                                <textarea name="link" class="form-control" style="height: 100px">{{ $berita->link }}</textarea>
                            </div>



                            @if ($berita->foto)
                                <div class="col-4">
                                    <img src="{{ $berita->foto }}" class="img-fluid" alt="...">
                          
                                </div>
                            @endif
                            <div class="col-12">
                                <label for="inputNumber" class="form-label">gambar
                                    (optional)</label>
                                <input class="form-control" type="file" id="formFile" name="lampiran" multiple>

                            </div>

                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        Setuju 
                                    </label>
                                </div>
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">Simpan</button>

                            </div>
                        </form><!-- End Multi Columns Form -->

                    </div>
                </div>
            </div>


        </div>
    </section>


</x-applayout>
