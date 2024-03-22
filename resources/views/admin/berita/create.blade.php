<x-applayout>
    <section class="section">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Berita Baru</h5>

                        <!-- Multi Columns Form -->
                        <form class="row g-3" action="{{ route('berita.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-6">
                                <label for="judul" class="form-label">Judul Berita</label>
                                <input type="text" class="form-control" id="judul" name="judul">
                            </div>
                            
                             <div class="col-md-12">
                                <label for="deskripsi" class="form-label">Deskripsi Berita </label>
                                <textarea name="deskripsi" class="form-control" style="height: 100px"></textarea>
                            </div>
                            <div class="col-md-12">
                                <label for="link" class="form-label">Link Berita </label>
                                <textarea name="link" class="form-control" style="height: 100px"></textarea>
                            </div>

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
