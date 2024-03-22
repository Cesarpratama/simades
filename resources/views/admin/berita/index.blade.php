<x-applayout>

    <x-pagetitle title='Berita'>

    </x-pagetitle>
    <section class="section">


        @if (Auth::user()->is_admin == 'superadmin')
            <h3>
                <a href="{{ route('berita.create') }}" class="btn btn-md btn-primary">BUAT BERITA</a>
            </h3>
        @endif


        <div class="row">

            @forelse ($beritas as $berita)
                <div class="col-lg-3">




                    @if (Auth::user()->is_admin == 'superadmin' )
                         
                    <a href="{{ route('berita.show',$berita) }}"> <!-- Card with an image on top -->
                        <div class="card">
                            <img src="{{ $berita->foto }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $berita->judul }}</h5>
                                <p class="card-text">{{ $berita->deskripsi }}</p>
                            </div>
                        </div><!-- End Card with an image on top -->
                    </a> 
                    @else
                    <a href="{{ $berita->link }}"> <!-- Card with an image on top -->
                        <div class="card">
                            <img src="{{ $berita->foto }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $berita->judul }}</h5>
                                <p class="card-text">{{ $berita->deskripsi }}</p>
                            </div>
                        </div><!-- End Card with an image on top -->
                    </a>
                    @endif
                    
                 

                </div>
            @empty  <div class="card">
                
                <div class="card-body">
                    <h5 class="card-title">BERITA MASIH KOSONG</h5>

                </div>
            </div><!-- End Card with an image on top -->

                        @endforelse

        </div>
    </section>


    @push('script')
    @endpush


</x-applayout>
