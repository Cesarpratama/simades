<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link {{ Route::is('dashboard') ? '' : 'collapsed' }}  " href="{{ route('dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Beranda</span>
            </a>
        </li><!-- End Dashboard Nav -->


        {{-- admin --}}
        <li class="nav-item">
            <a class="nav-link {{ Route::is('laporan.create', 'laporan.index', 'laporan.show', 'kategori-laporan.index') ? '' : 'collapsed' }}"
                data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Menu Laporan</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav"
                class="nav-content collapse  {{ Route::is('laporan.create', 'laporan.index', 'laporan.show', 'kategori-laporan.index') ? 'show' : '' }}"
                data-bs-parent="#sidebar-nav">

                <li>
                    <a href="{{ route('laporan.index') }}"
                        class=" {{ Route::is('laporan.index', 'laporan.show') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Data Laporan</span>
                    </a>
                </li>


                @if (Auth::user()->is_admin == 'superadmin')
                    <li>
                        <a href="{{ route('kategori-laporan.index') }}"
                            class=" {{ Route::is('kategori-laporan.index') ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>Kategori Laporan</span>
                        </a>
                    </li>
                @endif

            </ul>
        </li>



        <li class="nav-heading">Pages</li>


        <li class="nav-item">
            <a class="nav-link  {{ Route::is('berita.index') ? '' : 'collapsed' }}"
                href="{{ route('berita.index') }}">
                <i class="bi bi-newspaper"></i>
                @if (Auth::user()->is_admin)
                    <span>Berita </span>
                @else
                    <span>Berita</span>
                @endif

            </a> 
        </li>

        <li class="nav-item">
            <a class="nav-link  {{ Route::is('profile.index') ? '' : 'collapsed' }}"
                href="{{ route('profile.index') }}">
                <i class="bi bi-person"></i>
                @if (Auth::user()->is_admin)
                    <span>User Management</span>
                @else
                    <span>Profile</span>
                @endif

            </a>
        </li><!-- End Profile Page Nav -->

        {{-- <li class="nav-item">
            <a class="nav-link  {{ Route::is('berita.index') ? '' : 'collapsed' }}"
                href="{{ route('berita.index') }}">
                <i class="bi bi-newspaper"></i>
                @if (Auth::user()->is_admin)
                    <span>Berita </span>
                @else
                    <span>Berita</span>
                @endif

            </a> --}}
        </li><!-- End Profile Page Nav -->
        









    </ul>

</aside>
