<x-applayout>
    <section class="section profile ">


        @if (!request()->user()->hasVerifiedEmail())
            <div class="row">

                <h1>
                    @if (session('status') === 'password-updated')
                        <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                            class="text-sm text-gray-600">
                            {{ __('Password berhasil di update') }}</p>
                    @endif
                </h1>
                <h1>
                    @if (session('status') === 'profile-updated')
                        <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                            class="text-sm text-gray-600">
                            {{ __('Profile berhasil di update') }}</p>
                    @endif
                </h1>
                <div class="col">
                    <div class="card">
                        <div class="card-body pt-3">
                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-overview"
                                        aria-selected="false" role="tab" tabindex="-1">
                                        Profile
                                    </button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-edit"
                                        aria-selected="true" role="tab">
                                        Edit Profile
                                    </button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" data-bs-toggle="tab"
                                        data-bs-target="#profile-change-password" aria-selected="false" tabindex="-1"
                                        role="tab">
                                        Ganti Password
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content pt-2">
                                <div class="tab-pane fade profile-overview" id="profile-overview" role="tabpanel">

                                    <h5 class="card-title">
                                        Profile Lengkap
                                    </h5>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">
                                            Nama Lengkap
                                        </div>
                                        <div class="col-lg-9 col-md-8">
                                            {{ $user->nama }}
                                        </div>
                                    </div>



                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">
                                            Address
                                        </div>
                                        <div class="col-lg-9 col-md-8">
                                            {{ $user->alamat }}
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">
                                            Phone
                                        </div>
                                        <div class="col-lg-9 col-md-8">
                                            {{ $user->no_telpon }}
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">
                                            Email
                                        </div>
                                        <div class="col-lg-9 col-md-8">
                                            {{ $user->email }}
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade profile-edit pt-3 active show" id="profile-edit"
                                    role="tabpanel">
                                    <!-- Profile Edit Form -->
                                    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">


                                        @csrf
                                        @method('patch')
                                        <div class="row mb-3">
                                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nama
                                                Lengkap</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="nama" type="text" class="form-control"
                                                    value="{{ old('nama') ?? $user->nama }}" id="fullName">
                                            </div>
                                        </div>



                                        <div class="row mb-3">
                                            <label for="Address"
                                                class="col-md-4 col-lg-3 col-form-label">ALamat</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="alamat" type="text" class="form-control" id="alamat"
                                                    value="{{ old('alamat') ?? $user->alamat }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="no_telpon" type="text" class="form-control"
                                                    id="no_telpon" value="{{ old('no_telpon') ?? $user->no_telpon }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="email" type="email" class="form-control" id="Email"
                                                    value="{{ old('email') ?? $user->email }}">
                                            </div>
                                        </div>

                                        <div class="text-start">
                                            <button type="submit" class="btn btn-primary">
                                                Simpan
                                            </button>
                                        </div>
                                    </form>
                                    <!-- End Profile Edit Form -->
                                </div>


                                <div class="tab-pane fade pt-3" id="profile-change-password" role="tabpanel">
                                    <!-- Change Password Form -->
                                    <form method="post" action="{{ route('password.update') }}"
                                        class="mt-6 space-y-6">
                                        @csrf
                                        @method('put')

                                        <div class="row mb-3">
                                            <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">
                                                Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="current_password" type="password" class="form-control"
                                                    id="update_password_current_password">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">
                                                Password Baru</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="password" type="password" class="form-control"
                                                    id="newPassword">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="renewPassword"
                                                class="col-md-4 col-lg-3 col-form-label">Masukan
                                                Ulang Password Baru</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="password_confirmation" type="password"
                                                    class="form-control" id="password_confirmation">
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">
                                                Change Password
                                            </button>
                                        </div>
                                    </form>
                                    <!-- End Change Password Form -->
                                </div>
                            </div>
                            <!-- End Bordered Tabs -->
                        </div>
                    </div>
                </div>

            </div>

            @if (Auth::user()->is_admin == 'superadmin')

                <div class="col">
                    <div class="card">
                        <div class="card-body pt-3">
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Alamat </th>
                                        <th scope="col">Role </th>
                                        <th scope="col">opsi</th>
                                       

                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($users as $user)
                                        <tr>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->no_telpon }}</td>
                                            <td>{{ $user->alamat }}</td>
                                            <td>{{ $user->is_admin }}</td>

                                            <td>
                                                <form method="post" action="{{ route('profile.isAdmin', $user) }}"
                                                    class="row g-3">
                                                    @csrf
                                                    <div class="col-auto">
                                                        <select class="form-select  form-select-sm d-inline-block"
                                                            aria-label="Default select example" name="is_admin">
                                                            <option value="">Pilih Role</option>
                                                            <option value="admin" @selected($user->is_admin == 'admin')>Admin
                                                            </option>
                                                            <option value="user" @selected($user->is_admin == 'user')>User
                                                            </option>
                                                        </select>
                                                    </div>


                                                    <div class="col-auto"> <button
                                                            class="btn btn-sm btn-success  d-inline-block"
                                                            type="submit">Ubah
                                                            Role
                                                        </button></div>
                                                </form>

                                            </td>
                                            
                                        </tr>

                                    @empty
                                        <tr>
                                            <th colspan="5">Belum ada laporan</th>
                                        <tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            @endif
        @else
            <div class="mb-4 text-sm text-gray-600">
                {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
            </div>

            @if (session('status') == 'verification-link-sent')
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                </div>
            @endif

            <div class="mt-4 flex items-center justify-between">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf

                    <div>
                        <button class="btn btn-sm btn-success"> {{ __('Resend Verification Email') }}</button>
                    </div>
                </form>

            </div>
        @endif





    </section>

    @push('script')
        <script>
            $(document).ready(function() {
                $('.datatable').DataTable();
            });
        </script>
    @endpush
</x-applayout>
