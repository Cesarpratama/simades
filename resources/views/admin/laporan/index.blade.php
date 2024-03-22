<x-applayout>



    <x-pagetitle title='Laporan'>

    </x-pagetitle>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"> Riwayat Laporan</h5>

                        <!-- Table with stripped rows -->
                        <p>

                            @if (Auth::user()->is_admin == 'superadmin' || Auth::user()->is_admin == 'admin')
                                <a href="{{ route('laporan.index') }}" class="btn btn-primary">Semua Laporan</a>
                                <a href="{{ route('laporan.index') }}?q=0" class="btn btn-warning">Laporan Belum Di
                                    tinjau
                                @else
                                    <a href="{{ route('laporan.create') }}" class="btn btn-primary">Buat Laporan</a>
                            @endif

                            </a>
                        </p>

                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>#IDLAPORAN</th>
                                    <th>Judul Laporan</th>
                                    <th class="d-none">Isi Laporan</th>
                                    <th>Kategori Laporan</th>
                                    <th>opsi</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($laporans as $laporan)
                                    <tr>
                                        <th scope="row">{{ $laporan->id }}</th>
                                        <td>{{ $laporan->judul }}</td>
                                        <td class="d-none">{{ $laporan->isi }}</td>

                                        <td>{{ $laporan->kategori?->kategori }}</td>
                                        <td> <a class="btn btn-sm btn-primary"
                                                href="{{ route('laporan.show', $laporan) }}">Lihat</a>
                                            <form class="d-inline-block"
                                                action="{{ route('laporan.destroy', $laporan) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-sm btn-danger " type="submit">Hapus</button>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                        <!-- End Table with stripped rows -->
                    </div>
                </div>
            </div>
        </div>
    </section>


    @push('script')
        <script>
            $(document).ready(function() {
                $('.datatable').DataTable({
                    "language": {
                        "emptyTable": "data tidak tersedia"
                    },
                    dom: 'Bfrtip',
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print',

                    ],
                    "lengthChange": true,
                    "pageLength": 5
                });
            });
        </script>
    @endpush


</x-applayout>
