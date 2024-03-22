<x-applayout>



    <x-pagetitle title='Kategori Laporan'>
        {{-- {{ Breadcrumbs::render('pelapor.index') }} --}}
    </x-pagetitle>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Kategori Laporan</h5>

                        <!-- Table with stripped rows -->
                        <p>

                            <a href="{{ route('kategori-laporan.create') }}" class="btn btn-primary">Tambah Kategori</a>
                        </p>
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#IDLAPORAN</th>
                                    <th scope="col">Nama Kategori</th>
                                    <th scope="col">opsi</th>

                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($kategoris as $kategori)
                                    <tr>
                                        <th scope="row">{{ $kategori->id }}</th>
                                        <td>{{ $kategori->kategori }}</td>
                                        <td> <a class="btn btn-sm btn-primary"
                                                href="{{ route('kategori-laporan.edit', $kategori) }}">Edit</a>

                                            <form class="d-inline-block"
                                                action="{{ route('kategori-laporan.destroy', $kategori) }}"
                                                method="post">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-sm btn-danger " type="submit">Hapus</button>
                                            </form>

                                        </td>
                                    </tr>

                                @empty
                                @endforelse
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->
                    </div>
                </div>
            </div>
        </div>
    </section>



</x-applayout>
