<x-applayout>
    <section class="section">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Laporan Baru</h5>

                        <!-- Multi Columns Form -->
                        <form class="row g-3" action="{{ route('laporan.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-6">
                                <label for="inputName5" class="form-label">Judul Laporan</label>
                                <input type="text" class="form-control" id="inputName5" name="judul">
                            </div>
                            <div class="col-md-6">
                                <label for="validationServer04" class="form-label">Kategori Laporan</label>
                                <select
                                    class="form-select @error('kategori_id')
                                is-invalid
                                @enderror"
                                    id="validationServer04" aria-describedby="validationServer04Feedback"
                                    name="kategori_id" required>
                                    <option selected disabled value="">Kategori...</option>


                                    @foreach ($kategori as $item)
                                        <option value="{{ $item->id }}">{{ $item->kategori }}</option>
                                    @endforeach
                                </select>
                                @error('kategori_id')
                                    {{ $message }}
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <label for="inputName5" class="form-label">Isi Laporan</label>
                                <textarea name="isi" class="form-control" style="height: 100px"></textarea>
                            </div>

                            <div class="col-12">
                                <label for="inputNumber" class="form-label">Lampiran
                                    bukti (optional)</label>
                                <input class="form-control" type="file" id="formFile" name="lampiran" multiple>

                            </div>

                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        saya menyetujui syarat *
                                    </label>
                                </div>
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form><!-- End Multi Columns Form -->

                    </div>
                </div>
            </div>


        </div>
    </section>


</x-applayout>
