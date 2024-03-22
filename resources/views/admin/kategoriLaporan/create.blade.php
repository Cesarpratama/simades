<x-applayout>
    <section class="section">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Kategori Baru</h5>

                        <!-- Multi Columns Form -->
                        <form class="row g-3" action="{{ route('kategori-laporan.store') }}" method="POST">
                            @csrf
                            <div class="col-md-6">
                                <label for="kategori" class="form-label">Nama Kategori</label>
                                <input type="text" name="kategori"
                                    class="form-control @error('kategori')
                                is-invalid
                                @enderror"
                                    id="kategori">
                                @error('kategori')
                                    {{ $message }}
                                @enderror
                            </div>

                            <div class="text-start">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form><!-- End Multi Columns Form -->

                    </div>
                </div>
            </div>


        </div>
    </section>


</x-applayout>
